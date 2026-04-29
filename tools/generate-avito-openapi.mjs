import { access, mkdir, rm, writeFile } from 'node:fs/promises';
import { dirname, join } from 'node:path';
import { fileURLToPath } from 'node:url';

const root = dirname(dirname(fileURLToPath(import.meta.url)));
const out = join(root, 'src', 'Generated');
const apiListUrl = 'https://developers.avito.ru/web/1/openapi/list';
const namespace = 'Andy87\\ClientsAvito\\Generated';
const httpMethods = new Set(['get', 'post', 'put', 'patch', 'delete', 'head', 'options']);

const reserved = new Set([
  'abstract', 'and', 'array', 'as', 'break', 'callable', 'case', 'catch', 'class',
  'clone', 'const', 'continue', 'declare', 'default', 'die', 'do', 'echo', 'else',
  'elseif', 'empty', 'enddeclare', 'endfor', 'endforeach', 'endif', 'endswitch',
  'endwhile', 'eval', 'exit', 'extends', 'final', 'finally', 'fn', 'for', 'foreach',
  'function', 'global', 'goto', 'if', 'implements', 'include', 'include_once',
  'instanceof', 'insteadof', 'interface', 'isset', 'list', 'match', 'namespace',
  'new', 'or', 'print', 'private', 'protected', 'public', 'readonly', 'require',
  'require_once', 'return', 'static', 'switch', 'throw', 'trait', 'try', 'unset',
  'use', 'var', 'while', 'xor', 'yield'
]);

const responseInheritedProperties = new Set(['error', 'statusCode', 'headers', 'model']);

const methodNames = new Map();
const classNames = new Map();
const leafMethodNames = new Map();
const schemaClassNames = new Map();

const operationVerbs = new Set([
  'accept', 'add', 'apply', 'archive', 'cancel', 'change', 'check', 'confirm',
  'create', 'delete', 'download', 'edit', 'generate', 'get', 'link', 'list',
  'mark', 'patch', 'post', 'prohibit', 'put', 'refresh', 'remove', 'resume',
  'save', 'search', 'send', 'set', 'stop', 'track', 'tracking', 'update',
  'upload',
]);

const propertyNameOverrides = new Map([
  ['calltracking', 'callTracking'],
  ['cpxpromo', 'cpxPromo'],
  ['trxpromo', 'trxPromo'],
]);

function phpString(value) {
  return `'${String(value).replace(/\\/g, '\\\\').replace(/'/g, "\\'")}'`;
}

function phpRaw(value) {
  return { __raw: value };
}

function phpValue(value) {
  if (value && typeof value === 'object' && Object.hasOwn(value, '__raw')) {
    return value.__raw;
  }

  if (Array.isArray(value)) {
    return `[${value.map(phpValue).join(', ')}]`;
  }

  if (value && typeof value === 'object') {
    return `[${Object.entries(value).map(([key, item]) => `${phpString(key)} => ${phpValue(item)}`).join(', ')}]`;
  }

  if (value === null) {
    return 'null';
  }

  if (typeof value === 'boolean') {
    return value ? 'true' : 'false';
  }

  return phpString(value);
}

function phpArray(values) {
  return phpValue(values);
}

function phpAssoc(map) {
  return phpValue(map);
}

function words(value) {
  return String(value)
    .replace(/[^\p{L}\p{N}]+/gu, ' ')
    .trim()
    .split(/\s+/)
    .filter(Boolean);
}

function pascal(value) {
  const result = words(value).map((part) => part.charAt(0).toUpperCase() + part.slice(1)).join('');
  return /^[0-9]/.test(result) ? `N${result}` : (result || 'Operation');
}

function camel(value) {
  const name = pascal(value);
  return name.charAt(0).toLowerCase() + name.slice(1);
}

function lowerCamelFromTokens(tokens) {
  const value = tokens
    .map((token) => String(token))
    .filter(Boolean)
    .map((token) => token.charAt(0).toUpperCase() + token.slice(1))
    .join('');

  return value.charAt(0).toLowerCase() + value.slice(1);
}

function validProperty(apiName) {
  let property = String(apiName).replace(/[^A-Za-z0-9_]/g, '_');
  property = property.replace(/^[^A-Za-z_]+/, '');
  property = property || camel(apiName);
  if (reserved.has(property.toLowerCase())) {
    property += 'Value';
  }
  return property;
}

function responseProperty(apiName) {
  const property = validProperty(apiName);

  if (responseInheritedProperties.has(property)) {
    return `${property}Data`;
  }

  return property;
}

function uniqueClass(base) {
  const count = classNames.get(base) || 0;
  classNames.set(base, count + 1);
  return count === 0 ? base : `${base}${count + 1}`;
}

function providerProperty(slug) {
  return propertyNameOverrides.get(slug) || camel(slug);
}

function providerClass(slug) {
  return `${pascal(slug)}Provider`;
}

function schemaNamespacePart(slug) {
  return pascal(slug);
}

function schemaKey(slug, schemaName) {
  return `${slug}:${schemaName}`;
}

function initSchemaClasses(slug, schemas) {
  const used = new Map();

  for (const schemaName of Object.keys(schemas || {})) {
    const base = pascal(schemaName);
    const count = used.get(base) || 0;
    used.set(base, count + 1);
    schemaClassNames.set(schemaKey(slug, schemaName), count === 0 ? base : `${base}${count + 1}`);
  }
}

function schemaClassName(slug, schemaName) {
  return schemaClassNames.get(schemaKey(slug, schemaName)) || pascal(schemaName);
}

function schemaFqcn(slug, schemaName) {
  return `${namespace}\\Schema\\${schemaNamespacePart(slug)}\\${schemaClassName(slug, schemaName)}`;
}

function uniqueMethod(operationId, slug, path) {
  const key = `${slug}:${operationId}`;
  const count = methodNames.get(key) || 0;
  methodNames.set(key, count + 1);
  if (count === 0) {
    return operationId;
  }
  return camel(`${operationId} ${slug} ${path}`);
}

function fallbackOperationId(httpMethod, path) {
  return camel(`${httpMethod} ${path.replace(/[{}]/g, ' ')}`);
}

function operationTokens(methodName) {
  return String(methodName).match(/[A-Z]?[a-z]+|[A-Z]+|\d+/g) || [methodName];
}

function operationGroup(methodName, slug) {
  const tokens = operationTokens(methodName);
  const first = (tokens[0] || '').toLowerCase();
  const second = (tokens[1] || '').toLowerCase();
  let groupProperty;
  let leafMethod;

  if (tokens.length === 1) {
    groupProperty = 'general';
    leafMethod = validProperty(methodName);
  } else if (operationVerbs.has(first) && !operationVerbs.has(second)) {
    groupProperty = validProperty(lowerCamelFromTokens([tokens[1]]));
    leafMethod = validProperty(lowerCamelFromTokens([tokens[0], ...tokens.slice(2)]));
  } else {
    groupProperty = validProperty(lowerCamelFromTokens([tokens[0]]));
    leafMethod = validProperty(lowerCamelFromTokens(tokens.slice(1)));
  }

  if (leafMethod === '' || reserved.has(leafMethod.toLowerCase())) {
    leafMethod = `${leafMethod || 'call'}Method`;
  }

  const key = `${slug}:${groupProperty}:${leafMethod}`;
  const count = leafMethodNames.get(key) || 0;
  leafMethodNames.set(key, count + 1);

  if (count > 0) {
    leafMethod = camel(`${leafMethod} ${methodName}`);
  }

  return {
    property: groupProperty,
    className: `${pascal(groupProperty)}Provider`,
    namespacePart: pascal(groupProperty),
    methodName: leafMethod,
  };
}

function methodDoc(op) {
  const lines = [];
  const summary = String(op.summary || op.operationId).trim();
  const description = String(op.description || '').trim();

  if (summary) {
    lines.push(...summary.split('\n'));
  }

  if (description && description !== summary) {
    if (lines.length) {
      lines.push('');
    }

    lines.push(...description.split('\n'));
  }

  lines.push('');
  lines.push(`OperationId: ${op.operationId}.`);
  lines.push(`HTTP: ${op.httpMethod.toUpperCase()} ${op.path}.`);

  return lines
    .map((line) => `     * ${line.replace(/\*\//g, '* /')}`)
    .join('\n');
}

function resolveRef(spec, schema) {
  if (!schema || !schema.$ref) {
    return schema || {};
  }
  const name = schema.$ref.replace('#/components/schemas/', '').replace('#/components/parameters/', '');
  return spec.components?.schemas?.[name] || spec.components?.parameters?.[name] || {};
}

function refName(schema) {
  if (!schema?.$ref) {
    return null;
  }

  return schema.$ref.replace('#/components/schemas/', '').replace('#/components/parameters/', '');
}

function schemaNullable(schema) {
  if (!schema) {
    return false;
  }

  if (schema.nullable === true || (Array.isArray(schema.enum) && schema.enum.includes(null))) {
    return true;
  }

  for (const key of ['oneOf', 'anyOf']) {
    if (Array.isArray(schema[key]) && schema[key].some((item) => item?.type === 'null' || schemaNullable(item))) {
      return true;
    }
  }

  if (Array.isArray(schema.type) && schema.type.includes('null')) {
    return true;
  }

  return false;
}

function schemaType(schema) {
  if (Array.isArray(schema?.type)) {
    return schema.type.find((type) => type !== 'null') || 'null';
  }

  return schema?.type || null;
}

function schemaPhpType(spec, schema, slug, seen = new Set()) {
  if (!schema) {
    return 'mixed';
  }

  const directRef = refName(schema);

  if (directRef && spec.components?.schemas?.[directRef]) {
    return `\\${schemaFqcn(slug, directRef)}`;
  }

  if (directRef && spec.components?.parameters?.[directRef]) {
    return schemaPhpType(spec, spec.components.parameters[directRef].schema, slug, seen);
  }

  if (Array.isArray(schema.allOf)) {
    for (const item of schema.allOf) {
      const type = schemaPhpType(spec, item, slug, seen);

      if (type !== 'mixed') {
        return type;
      }
    }
  }

  for (const key of ['oneOf', 'anyOf']) {
    if (Array.isArray(schema[key])) {
      for (const item of schema[key]) {
        if (item?.type === 'null') {
          continue;
        }

        const type = schemaPhpType(spec, item, slug, seen);

        if (type !== 'mixed') {
          return type;
        }
      }
    }
  }

  switch (schemaType(schema)) {
    case 'string':
      return 'string';
    case 'integer':
      return 'int';
    case 'number':
      return 'float';
    case 'boolean':
      return 'bool';
    case 'array':
      return 'array';
    case 'object':
      return 'array';
    default:
      return schema.properties ? 'array' : 'mixed';
  }
}

function schemaScalarDocType(schema) {
  switch (schemaType(schema)) {
    case 'string':
      return 'string';
    case 'integer':
      return 'int';
    case 'number':
      return 'float';
    case 'boolean':
      return 'bool';
    default:
      return null;
  }
}

function schemaDocType(spec, schema, slug, seen = new Set()) {
  if (!schema) {
    return 'mixed';
  }

  const directRef = refName(schema);

  if (directRef && spec.components?.schemas?.[directRef]) {
    return `\\${schemaFqcn(slug, directRef)}`;
  }

  if (directRef && spec.components?.parameters?.[directRef]) {
    return schemaDocType(spec, spec.components.parameters[directRef].schema, slug, seen);
  }

  if (Array.isArray(schema.allOf)) {
    for (const item of schema.allOf) {
      const type = schemaDocType(spec, item, slug, seen);

      if (type !== 'mixed') {
        return type;
      }
    }
  }

  for (const key of ['oneOf', 'anyOf']) {
    if (Array.isArray(schema[key])) {
      for (const item of schema[key]) {
        if (item?.type === 'null') {
          continue;
        }

        const type = schemaDocType(spec, item, slug, seen);

        if (type !== 'mixed') {
          return type;
        }
      }
    }
  }

  if (schemaType(schema) === 'array') {
    const itemSchema = schema.items || {};
    const itemRef = refName(itemSchema);

    if (itemRef && spec.components?.schemas?.[itemRef]) {
      return `array<int, \\${schemaFqcn(slug, itemRef)}>`;
    }

    const scalarType = schemaScalarDocType(itemSchema);

    if (scalarType !== null) {
      return `array<int, ${scalarType}>`;
    }

    if (schemaType(itemSchema) === 'object' || itemSchema.properties) {
      return 'array<int, array<string, mixed>>';
    }

    return 'array<int, mixed>';
  }

  if (schemaType(schema) === 'object' || schema.properties || schema.additionalProperties) {
    return 'array<string, mixed>';
  }

  return schemaScalarDocType(schema) || 'mixed';
}

function propertyDefinition(spec, schema, slug, required, description) {
  const baseType = schemaPhpType(spec, schema, slug);
  const baseDocType = schemaDocType(spec, schema, slug);
  const nullable = schemaNullable(schema);
  const propertyNullable = nullable || !required;
  const type = baseType === 'mixed'
    ? 'mixed'
    : `${propertyNullable ? '?' : ''}${baseType}`;
  const defaultValue = required ? '' : ' = null';
  const docType = `${baseDocType}${propertyNullable ? '|null' : ''}`;

  return {
    description,
    type,
    defaultValue,
    docType,
    nullable,
  };
}

function schemaCast(spec, schema, slug) {
  if (!schema) {
    return null;
  }

  const directRef = refName(schema);

  if (directRef && spec.components?.schemas?.[directRef]) {
    return phpRaw(`\\${schemaFqcn(slug, directRef)}::class`);
  }

  if (schema.type === 'array') {
    const itemRef = refName(schema.items);

    if (itemRef && spec.components?.schemas?.[itemRef]) {
      return [phpRaw(`\\${schemaFqcn(slug, itemRef)}::class`)];
    }
  }

  if (Array.isArray(schema.allOf)) {
    for (const item of schema.allOf) {
      const cast = schemaCast(spec, item, slug);

      if (cast !== null) {
        return cast;
      }
    }
  }

  return null;
}

function schemaProperties(spec, schema) {
  schema = resolveRef(spec, schema);

  if (schema.allOf) {
    return Object.assign({}, ...schema.allOf.map((item) => schemaProperties(spec, item)));
  }

  return schema.properties || {};
}

function schemaRequired(spec, schema) {
  schema = resolveRef(spec, schema);
  const required = new Set(schema.required || []);

  if (schema.allOf) {
    for (const item of schema.allOf) {
      for (const field of schemaRequired(spec, item)) {
        required.add(field);
      }
    }
  }

  return [...required];
}

function responseSchema(operation) {
  const ok = operation.responses?.['200'] || operation.responses?.['201'] || operation.responses?.['204'];
  return ok?.content?.['application/json']?.schema || {};
}

function schemaModelConstant(spec, schema, slug) {
  const directRef = refName(schema);

  if (directRef && spec.components?.schemas?.[directRef]) {
    return phpRaw(`\\${schemaFqcn(slug, directRef)}::class`);
  }

  return null;
}

function requestContent(operation) {
  const content = operation.requestBody?.content || {};
  if (content['application/json']) {
    return ['application/json', content['application/json'].schema || {}];
  }
  if (content['application/x-www-form-urlencoded']) {
    return ['application/x-www-form-urlencoded', content['application/x-www-form-urlencoded'].schema || {}];
  }
  return [null, {}];
}

function normalizeParameter(spec, parameter) {
  if (parameter.$ref) {
    const name = parameter.$ref.replace('#/components/parameters/', '');
    return spec.components?.parameters?.[name] || parameter;
  }
  return parameter;
}

function buildPrompt(spec, op, meta) {
  const fieldMap = {};
  const pathFields = [];
  const queryFields = [];
  const bodyFields = [];
  const casts = {};
  const required = new Set();
  const nullable = new Set();
  const descriptions = {};
  const propertySchemas = {};

  for (const parameter of op.parameters || []) {
    const p = normalizeParameter(spec, parameter);
    const property = validProperty(p.name);
    fieldMap[property] = p.name;
    descriptions[property] = p.description || `${p.in}-parameter ${p.name}`;
    propertySchemas[property] = p.schema || {};
    const cast = schemaCast(spec, p.schema, meta.slug);

    if (cast !== null) {
      casts[property] = cast;
    }
    if (p.in === 'path') {
      pathFields.push(property);
    }
    if (p.in === 'query') {
      queryFields.push(property);
    }
    if (p.required) {
      required.add(property);
    }
    if (schemaNullable(p.schema)) {
      nullable.add(property);
    }
  }

  const [contentType, bodySchema] = requestContent(op);
  const bodyProps = schemaProperties(spec, bodySchema);
  const bodyRequired = new Set(schemaRequired(spec, bodySchema));

  for (const [apiName, schema] of Object.entries(bodyProps)) {
    const property = validProperty(apiName);
    fieldMap[property] = apiName;
    descriptions[property] = schema.description || `Body field ${apiName}`;
    propertySchemas[property] = schema;
    const cast = schemaCast(spec, schema, meta.slug);

    if (cast !== null) {
      casts[property] = cast;
    }
    bodyFields.push(property);
    if (bodyRequired.has(apiName)) {
      required.add(property);
    }
    if (schemaNullable(schema)) {
      nullable.add(property);
    }
  }

  if (op.requestBody?.required && bodyFields.length === 1) {
    required.add(bodyFields[0]);
  }

  return classFile({
    namespace: `${namespace}\\Prompt`,
    use: ['Andy87\\ClientsBase\\Prompt\\AbstractPrompt'],
    className: meta.promptClass,
    extendsClass: 'AbstractPrompt',
    description: `DTO запроса Avito API ${meta.operationId}.`,
    constants: {
      METHOD: meta.httpMethod.toUpperCase(),
      ENDPOINT: meta.path,
      CONTENT_TYPE: contentType,
      AUTHORIZATION_REQUIRED: Array.isArray(op.security) && op.security.length > 0,
      FIELD_MAP: fieldMap,
      REQUIRED_FIELDS: [...required],
      NULLABLE_FIELDS: [...nullable],
      CASTS: casts,
      PATH_FIELDS: pathFields,
      QUERY_FIELDS: queryFields,
      BODY_FIELDS: bodyFields,
    },
    properties: Object.keys(fieldMap).map((property) => ({
      name: property,
      ...propertyDefinition(
        spec,
        propertySchemas[property],
        meta.slug,
        required.has(property),
        descriptions[property] || property,
      ),
    })),
  });
}

function buildResponse(spec, op, meta) {
  const fieldMap = {};
  const casts = {};
  const descriptions = {};
  const schema = responseSchema(op);
  const props = schemaProperties(spec, schema);
  const requiredApiNames = new Set(schemaRequired(spec, schema));
  const required = [...requiredApiNames].map(responseProperty);
  const nullable = [];

  for (const [apiName, propSchema] of Object.entries(props)) {
    const property = responseProperty(apiName);
    fieldMap[property] = apiName;
    descriptions[property] = propSchema.description || `Response field ${apiName}`;
    const cast = schemaCast(spec, propSchema, meta.slug);

    if (cast !== null) {
      casts[property] = cast;
    }

    if (schemaNullable(propSchema)) {
      nullable.push(property);
    }
  }

  return classFile({
    namespace: `${namespace}\\Response`,
    use: ['Andy87\\ClientsBase\\Response\\AbstractResponse'],
    className: meta.responseClass,
    extendsClass: 'AbstractResponse',
    description: `DTO ответа Avito API ${meta.operationId}.`,
    constants: {
      FIELD_MAP: fieldMap,
      REQUIRED_FIELDS: required,
      NULLABLE_FIELDS: nullable,
      CASTS: casts,
      MODEL: schemaModelConstant(spec, schema, meta.slug),
    },
    properties: Object.keys(fieldMap).map((property) => ({
      name: property,
      ...propertyDefinition(
        spec,
        props[fieldMap[property]],
        meta.slug,
        required.includes(property),
        descriptions[property] || property,
      ),
    })),
  });
}

function buildSchemaModel(spec, slug, schemaName, schema) {
  const fieldMap = {};
  const casts = {};
  const descriptions = {};
  const props = schemaProperties(spec, schema);
  const requiredApiNames = new Set(schemaRequired(spec, schema));
  const required = [...requiredApiNames].map(validProperty);
  const nullable = [];

  for (const [apiName, propSchema] of Object.entries(props)) {
    const property = validProperty(apiName);
    fieldMap[property] = apiName;
    descriptions[property] = propSchema.description || `Schema field ${apiName}`;
    const cast = schemaCast(spec, propSchema, slug);

    if (cast !== null) {
      casts[property] = cast;
    }

    if (schemaNullable(propSchema)) {
      nullable.push(property);
    }
  }

  return classFile({
    namespace: `${namespace}\\Schema\\${schemaNamespacePart(slug)}`,
    use: ['Andy87\\ClientsAvito\\Schema\\AbstractSchemaModel'],
    className: schemaClassName(slug, schemaName),
    extendsClass: 'AbstractSchemaModel',
    description: `OpenAPI schema модель Avito ${slug}/${schemaName}.`,
    constants: {
      FIELD_MAP: fieldMap,
      REQUIRED_FIELDS: required,
      NULLABLE_FIELDS: nullable,
      CASTS: casts,
    },
    properties: Object.keys(fieldMap).map((property) => ({
      name: property,
      ...propertyDefinition(
        spec,
        props[fieldMap[property]],
        slug,
        required.includes(property),
        descriptions[property] || property,
      ),
    })),
  });
}

function aliasClassFile({ namespace, className, baseClass, baseClassAlias, description }) {
  return `<?php

declare(strict_types=1);

namespace ${namespace};

use ${baseClass} as ${baseClassAlias};

/**
 * ${description}
 */
class ${className} extends ${baseClassAlias}
{
}
`;
}

function classFile({ namespace, use = [], className, extendsClass, description, constants, properties }) {
  const uses = use.length ? `${use.map((item) => `use ${item};`).join('\n')}\n\n` : '';
  const consts = Object.entries(constants).map(([name, value]) => {
    const rendered = phpValue(value);
    return `    protected const ${name} = ${rendered};`;
  }).join('\n\n');

  const props = properties.map(({ name, description, type, defaultValue, docType }) => {
    const safeDescription = description.replace(/\*\//g, '* /');
    return `    /** @var ${docType} ${safeDescription} */\n    public ${type} $${name}${defaultValue};`;
  }).join('\n\n');

  return `<?php

declare(strict_types=1);

namespace ${namespace};

${uses}/**
 * ${description}
 */
class ${className} extends ${extendsClass}
{
${consts}${props ? `\n\n${props}` : ''}
}
`;
}

function providerFile(operations, group) {
  const imports = new Set([
    'Andy87\\ClientsAvito\\BaseAvitoProvider',
  ]);

  for (const op of operations) {
    imports.add(`${namespace}\\Prompt\\${op.promptClass}`);
    imports.add(`${namespace}\\Response\\${op.responseClass}`);
  }

  const operationGroups = [...new Map(operations.map((op) => [op.operationGroup.property, op.operationGroup])).values()]
    .sort((a, b) => a.property.localeCompare(b.property));

  const groupRows = operationGroups
    .map((operationGroup) => `        '${operationGroup.property}' => ${group.providerNamespacePart}\\${operationGroup.className}::class,`)
    .join('\n');

  const propertyDocs = operationGroups
    .map((operationGroup) => ` * @property-read ${group.providerNamespacePart}\\${operationGroup.className} $${operationGroup.property}`)
    .join('\n');

  const methods = operations.map((op) => `    /**
${methodDoc(op)}
     *
     * @param ${op.promptClass} $prompt DTO запроса.
     *
     * @return ${op.responseClass} DTO ответа.
     *
     * @throws \\InvalidArgumentException Если Prompt невалиден.
     * @throws \\RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \\UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function ${op.methodName}(${op.promptClass} $prompt): ${op.responseClass}
    {
        /** @var ${group.providerNamespacePart}\\${op.operationGroup.className} $group */
        $group = $this->operationGroup('${op.operationGroup.property}');

        return $group->${op.operationGroup.methodName}($prompt);
    }`).join('\n\n');

  return `<?php

declare(strict_types=1);

namespace ${namespace}\\Provider;

${[...imports].sort().map((item) => `use ${item};`).join('\n')}

/**
 * Provider раздела Avito API "${group.title}".
${propertyDocs ? `${propertyDocs}\n` : ''} *
 */
class ${group.providerClass} extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
${groupRows}
    ];

${methods}
}
`;
}

function operationGroupProviderFile(operations, group, operationGroup) {
  const imports = new Set([
    'Andy87\\ClientsAvito\\BaseAvitoProvider',
  ]);

  for (const op of operations) {
    imports.add(`${namespace}\\Prompt\\${op.promptClass}`);
    imports.add(`${namespace}\\Response\\${op.nestedResponseNamespacePart}\\${op.nestedResponseClass}`);
  }

  const methods = operations.map((op) => `    /**
${methodDoc(op)}
     *
     * @param ${op.promptClass} $prompt DTO запроса.
     *
     * @return ${op.nestedResponseClass} DTO ответа.
     *
     * @throws \\InvalidArgumentException Если Prompt невалиден.
     * @throws \\RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \\UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function ${op.operationGroup.methodName}(${op.promptClass} $prompt): ${op.nestedResponseClass}
    {
        /** @var ${op.nestedResponseClass} $response */
        $response = $this->request($prompt, ${op.nestedResponseClass}::class);

        return $response;
    }`).join('\n\n');

  return `<?php

declare(strict_types=1);

namespace ${namespace}\\Provider\\${group.providerNamespacePart};

${[...imports].sort().map((item) => `use ${item};`).join('\n')}

/**
 * Группа методов "${operationGroup.property}" раздела Avito API "${group.title}".
 */
class ${operationGroup.className} extends BaseAvitoProvider
{
${methods}
}
`;
}

async function exists(file) {
  try {
    await access(file);
    return true;
  } catch {
    return false;
  }
}

async function assertCoverage(operations, groups, schemas) {
  const missing = [];

  for (const group of groups) {
    const providerPath = join(out, 'Provider', `${group.providerClass}.php`);

    if (!await exists(providerPath)) {
      missing.push(`provider:${group.property}`);
    }
  }

  for (const op of operations) {
    const flatPrompt = join(out, 'Prompt', `${op.promptClass}.php`);
    const flatResponse = join(out, 'Response', `${op.responseClass}.php`);
    const nestedPrompt = join(out, 'Prompt', ...op.nestedPromptNamespacePart.split('\\'), `${op.nestedPromptClass}.php`);
    const nestedResponse = join(out, 'Response', ...op.nestedResponseNamespacePart.split('\\'), `${op.nestedResponseClass}.php`);
    const groupProvider = join(out, 'Provider', op.group.providerNamespacePart, `${op.operationGroup.className}.php`);

    if (!await exists(flatPrompt)) {
      missing.push(`flat-prompt:${op.slug}:${op.operationId}`);
    }

    if (!await exists(flatResponse)) {
      missing.push(`flat-response:${op.slug}:${op.operationId}`);
    }

    if (!await exists(nestedPrompt)) {
      missing.push(`nested-prompt:${op.slug}:${op.operationId}`);
    }

    if (!await exists(nestedResponse)) {
      missing.push(`nested-response:${op.slug}:${op.operationId}`);
    }

    if (!await exists(groupProvider)) {
      missing.push(`operation-provider:${op.slug}:${op.operationGroup.property}`);
    }
  }

  for (const schema of schemas) {
    const schemaPath = join(out, 'Schema', schemaNamespacePart(schema.slug), `${schema.className}.php`);

    if (!await exists(schemaPath)) {
      missing.push(`schema:${schema.slug}:${schema.schemaName}`);
    }
  }

  if (missing.length > 0) {
    throw new Error(`Coverage check failed:\n${missing.join('\n')}`);
  }

  return {
    operations: operations.length,
    providers: groups.length,
    flatPrompts: operations.length,
    flatResponses: operations.length,
    nestedPrompts: operations.length,
    nestedResponses: operations.length,
    schemas: schemas.length,
  };
}
function providerRegistryFile(groups) {
  const rows = groups
    .sort((a, b) => a.property.localeCompare(b.property))
    .map((group) => `            '${group.property}' => Provider\\${group.providerClass}::class,`)
    .join('\n');

  return `<?php

declare(strict_types=1);

namespace ${namespace};

/**
 * Хранит карту лениво доступных provider-разделов Avito API.
 */
class ProviderRegistry
{
    /**
     * Возвращает карту свойств клиента и provider-классов.
     *
     * @return array<string, class-string>
     */
    public static function providers(): array
    {
        return [
${rows}
        ];
    }
}
`;
}

async function write(path, content) {
  await mkdir(dirname(path), { recursive: true });
  await writeFile(path, content.replace(/\r\n/g, '\n'), 'utf8');
}

async function main() {
  const list = await (await fetch(apiListUrl)).json();
  const operations = [];
  const schemas = [];
  const groups = new Map();

  await rm(out, { recursive: true, force: true });

  for (const api of list) {
    const response = await fetch(`https://developers.avito.ru/web/1/openapi/info/${api.slug}`);
    if (!response.ok) {
      continue;
    }

    const doc = await response.json();
    if (!doc.swagger) {
      continue;
    }

    const spec = JSON.parse(doc.swagger);
    const specSchemas = spec.components?.schemas || {};

    initSchemaClasses(api.slug, specSchemas);

    for (const [schemaName, schema] of Object.entries(specSchemas)) {
      const className = schemaClassName(api.slug, schemaName);
      schemas.push({ slug: api.slug, schemaName, className });
      await write(
        join(out, 'Schema', schemaNamespacePart(api.slug), `${className}.php`),
        buildSchemaModel(spec, api.slug, schemaName, schema),
      );
    }

    for (const [path, methods] of Object.entries(spec.paths || {})) {
      for (const [httpMethod, op] of Object.entries(methods)) {
        if (!httpMethods.has(httpMethod)) {
          continue;
        }

        const operationId = op.operationId || fallbackOperationId(httpMethod, path);
        const methodName = uniqueMethod(operationId, api.slug, path);
        const classSuffix = methodName === operationId ? operationId : methodName;
        const promptClass = uniqueClass(`${pascal(classSuffix)}Prompt`);
        const responseClass = uniqueClass(`${pascal(classSuffix)}Response`);
        const group = {
          slug: api.slug,
          title: api.title || api.slug,
          property: providerProperty(api.slug),
          providerClass: providerClass(api.slug),
          providerNamespacePart: pascal(api.slug),
        };
        const secondLevelGroup = operationGroup(methodName, api.slug);
        const nestedClassBase = pascal(secondLevelGroup.methodName);
        const meta = {
          slug: api.slug,
          group,
          operationGroup: secondLevelGroup,
          operationId,
          sourceOperationId: op.operationId || null,
          methodName,
          httpMethod,
          path,
          promptClass,
          responseClass,
          nestedPromptClass: `${nestedClassBase}Prompt`,
          nestedResponseClass: `${nestedClassBase}Response`,
          nestedPromptNamespacePart: `${group.providerNamespacePart}\\${secondLevelGroup.namespacePart}`,
          nestedResponseNamespacePart: `${group.providerNamespacePart}\\${secondLevelGroup.namespacePart}`,
          summary: op.summary,
          description: op.description,
        };

        operations.push(meta);
        groups.set(api.slug, group);
        await write(join(out, 'Prompt', `${promptClass}.php`), buildPrompt(spec, op, meta));
        await write(join(out, 'Response', `${responseClass}.php`), buildResponse(spec, op, meta));
        await write(
          join(out, 'Prompt', group.providerNamespacePart, secondLevelGroup.namespacePart, `${meta.nestedPromptClass}.php`),
          aliasClassFile({
            namespace: `${namespace}\\Prompt\\${meta.nestedPromptNamespacePart}`,
            className: meta.nestedPromptClass,
            baseClass: `${namespace}\\Prompt\\${promptClass}`,
            baseClassAlias: `Base${promptClass}`,
            description: `Дочерний alias DTO запроса Avito API ${operationId}.`,
          }),
        );
        await write(
          join(out, 'Response', group.providerNamespacePart, secondLevelGroup.namespacePart, `${meta.nestedResponseClass}.php`),
          aliasClassFile({
            namespace: `${namespace}\\Response\\${meta.nestedResponseNamespacePart}`,
            className: meta.nestedResponseClass,
            baseClass: `${namespace}\\Response\\${responseClass}`,
            baseClassAlias: `Base${responseClass}`,
            description: `Дочерний alias DTO ответа Avito API ${operationId}.`,
          }),
        );
      }
    }
  }

  for (const group of groups.values()) {
    const groupOperations = operations
      .filter((op) => op.group.slug === group.slug)
      .sort((a, b) => a.methodName.localeCompare(b.methodName));

    await write(join(out, 'Provider', `${group.providerClass}.php`), providerFile(groupOperations, group));

    const operationGroups = [...new Map(groupOperations.map((op) => [op.operationGroup.property, op.operationGroup])).values()];

    for (const operationGroup of operationGroups) {
      const operationGroupOperations = groupOperations
        .filter((op) => op.operationGroup.property === operationGroup.property)
        .sort((a, b) => a.operationGroup.methodName.localeCompare(b.operationGroup.methodName));

      await write(
        join(out, 'Provider', group.providerNamespacePart, `${operationGroup.className}.php`),
        operationGroupProviderFile(operationGroupOperations, group, operationGroup),
      );
    }
  }

  await write(join(out, 'ProviderRegistry.php'), providerRegistryFile([...groups.values()]));
  const coverage = await assertCoverage(operations, [...groups.values()], schemas);
  console.log(`Generated ${coverage.operations} Avito operations in ${coverage.providers} providers.`);
  console.log(`Coverage: ${coverage.flatPrompts} flat prompts, ${coverage.flatResponses} flat responses, ${coverage.nestedPrompts} nested prompts, ${coverage.nestedResponses} nested responses.`);
  console.log(`Schemas: ${coverage.schemas} OpenAPI schema models.`);
}

main().catch((error) => {
  console.error(error);
  process.exit(1);
});
