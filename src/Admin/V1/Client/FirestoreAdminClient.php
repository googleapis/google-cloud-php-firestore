<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/firestore/admin/v1/firestore_admin.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Firestore\Admin\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Firestore\Admin\V1\CreateDatabaseRequest;
use Google\Cloud\Firestore\Admin\V1\CreateIndexRequest;
use Google\Cloud\Firestore\Admin\V1\Database;
use Google\Cloud\Firestore\Admin\V1\DeleteIndexRequest;
use Google\Cloud\Firestore\Admin\V1\ExportDocumentsRequest;
use Google\Cloud\Firestore\Admin\V1\Field;
use Google\Cloud\Firestore\Admin\V1\FieldOperationMetadata;
use Google\Cloud\Firestore\Admin\V1\GetDatabaseRequest;
use Google\Cloud\Firestore\Admin\V1\GetFieldRequest;
use Google\Cloud\Firestore\Admin\V1\GetIndexRequest;
use Google\Cloud\Firestore\Admin\V1\ImportDocumentsRequest;
use Google\Cloud\Firestore\Admin\V1\Index;
use Google\Cloud\Firestore\Admin\V1\IndexOperationMetadata;
use Google\Cloud\Firestore\Admin\V1\ListDatabasesRequest;
use Google\Cloud\Firestore\Admin\V1\ListDatabasesResponse;
use Google\Cloud\Firestore\Admin\V1\ListFieldsRequest;
use Google\Cloud\Firestore\Admin\V1\ListIndexesRequest;
use Google\Cloud\Firestore\Admin\V1\UpdateDatabaseRequest;
use Google\Cloud\Firestore\Admin\V1\UpdateFieldRequest;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: The Cloud Firestore Admin API.
 *
 * This API provides several administrative services for Cloud Firestore.
 *
 * Project, Database, Namespace, Collection, Collection Group, and Document are
 * used as defined in the Google Cloud Firestore API.
 *
 * Operation: An Operation represents work being performed in the background.
 *
 * The index service manages Cloud Firestore indexes.
 *
 * Index creation is performed asynchronously.
 * An Operation resource is created for each such asynchronous operation.
 * The state of the operation (including any errors encountered)
 * may be queried via the Operation resource.
 *
 * The Operations collection provides a record of actions performed for the
 * specified Project (including any Operations in progress). Operations are not
 * created directly but through calls on other collections or resources.
 *
 * An Operation that is done may be deleted so that it is no longer listed as
 * part of the Operation collection. Operations are garbage collected after
 * 30 days. By default, ListOperations will only return in progress and failed
 * operations. To list completed operation, issue a ListOperations request with
 * the filter `done: true`.
 *
 * Operations are created by service `FirestoreAdmin`, but are accessed via
 * service `google.longrunning.Operations`.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createDatabaseAsync(CreateDatabaseRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createIndexAsync(CreateIndexRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteIndexAsync(DeleteIndexRequest $request, array $optionalArgs = [])
 * @method PromiseInterface exportDocumentsAsync(ExportDocumentsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getDatabaseAsync(GetDatabaseRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getFieldAsync(GetFieldRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIndexAsync(GetIndexRequest $request, array $optionalArgs = [])
 * @method PromiseInterface importDocumentsAsync(ImportDocumentsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listDatabasesAsync(ListDatabasesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listFieldsAsync(ListFieldsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listIndexesAsync(ListIndexesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateDatabaseAsync(UpdateDatabaseRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateFieldAsync(UpdateFieldRequest $request, array $optionalArgs = [])
 */
final class FirestoreAdminClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.firestore.admin.v1.FirestoreAdmin';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'firestore.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'firestore.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/datastore',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/firestore_admin_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/firestore_admin_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/firestore_admin_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/firestore_admin_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * collection_group resource.
     *
     * @param string $project
     * @param string $database
     * @param string $collection
     *
     * @return string The formatted collection_group resource.
     */
    public static function collectionGroupName(string $project, string $database, string $collection): string
    {
        return self::getPathTemplate('collectionGroup')->render([
            'project' => $project,
            'database' => $database,
            'collection' => $collection,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a database
     * resource.
     *
     * @param string $project
     * @param string $database
     *
     * @return string The formatted database resource.
     */
    public static function databaseName(string $project, string $database): string
    {
        return self::getPathTemplate('database')->render([
            'project' => $project,
            'database' => $database,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a field
     * resource.
     *
     * @param string $project
     * @param string $database
     * @param string $collection
     * @param string $field
     *
     * @return string The formatted field resource.
     */
    public static function fieldName(string $project, string $database, string $collection, string $field): string
    {
        return self::getPathTemplate('field')->render([
            'project' => $project,
            'database' => $database,
            'collection' => $collection,
            'field' => $field,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a index
     * resource.
     *
     * @param string $project
     * @param string $database
     * @param string $collection
     * @param string $index
     *
     * @return string The formatted index resource.
     */
    public static function indexName(string $project, string $database, string $collection, string $index): string
    {
        return self::getPathTemplate('index')->render([
            'project' => $project,
            'database' => $database,
            'collection' => $collection,
            'index' => $index,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName(string $project): string
    {
        return self::getPathTemplate('project')->render([
            'project' => $project,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - collectionGroup: projects/{project}/databases/{database}/collectionGroups/{collection}
     * - database: projects/{project}/databases/{database}
     * - field: projects/{project}/databases/{database}/collectionGroups/{collection}/fields/{field}
     * - index: projects/{project}/databases/{database}/collectionGroups/{collection}/indexes/{index}
     * - project: projects/{project}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'firestore.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Create a database.
     *
     * The async variant is {@see FirestoreAdminClient::createDatabaseAsync()} .
     *
     * @param CreateDatabaseRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createDatabase(CreateDatabaseRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateDatabase', $request, $callOptions)->wait();
    }

    /**
     * Creates a composite index. This returns a
     * [google.longrunning.Operation][google.longrunning.Operation] which may be
     * used to track the status of the creation. The metadata for the operation
     * will be the type
     * [IndexOperationMetadata][google.firestore.admin.v1.IndexOperationMetadata].
     *
     * The async variant is {@see FirestoreAdminClient::createIndexAsync()} .
     *
     * @param CreateIndexRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createIndex(CreateIndexRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateIndex', $request, $callOptions)->wait();
    }

    /**
     * Deletes a composite index.
     *
     * The async variant is {@see FirestoreAdminClient::deleteIndexAsync()} .
     *
     * @param DeleteIndexRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteIndex(DeleteIndexRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteIndex', $request, $callOptions)->wait();
    }

    /**
     * Exports a copy of all or a subset of documents from Google Cloud Firestore
     * to another storage system, such as Google Cloud Storage. Recent updates to
     * documents may not be reflected in the export. The export occurs in the
     * background and its progress can be monitored and managed via the
     * Operation resource that is created. The output of an export may only be
     * used once the associated operation is done. If an export operation is
     * cancelled before completion it may leave partial data behind in Google
     * Cloud Storage.
     *
     * For more details on export behavior and output format, refer to:
     * https://cloud.google.com/firestore/docs/manage-data/export-import
     *
     * The async variant is {@see FirestoreAdminClient::exportDocumentsAsync()} .
     *
     * @param ExportDocumentsRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function exportDocuments(ExportDocumentsRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ExportDocuments', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a database.
     *
     * The async variant is {@see FirestoreAdminClient::getDatabaseAsync()} .
     *
     * @param GetDatabaseRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Database
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getDatabase(GetDatabaseRequest $request, array $callOptions = []): Database
    {
        return $this->startApiCall('GetDatabase', $request, $callOptions)->wait();
    }

    /**
     * Gets the metadata and configuration for a Field.
     *
     * The async variant is {@see FirestoreAdminClient::getFieldAsync()} .
     *
     * @param GetFieldRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Field
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getField(GetFieldRequest $request, array $callOptions = []): Field
    {
        return $this->startApiCall('GetField', $request, $callOptions)->wait();
    }

    /**
     * Gets a composite index.
     *
     * The async variant is {@see FirestoreAdminClient::getIndexAsync()} .
     *
     * @param GetIndexRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Index
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIndex(GetIndexRequest $request, array $callOptions = []): Index
    {
        return $this->startApiCall('GetIndex', $request, $callOptions)->wait();
    }

    /**
     * Imports documents into Google Cloud Firestore. Existing documents with the
     * same name are overwritten. The import occurs in the background and its
     * progress can be monitored and managed via the Operation resource that is
     * created. If an ImportDocuments operation is cancelled, it is possible
     * that a subset of the data has already been imported to Cloud Firestore.
     *
     * The async variant is {@see FirestoreAdminClient::importDocumentsAsync()} .
     *
     * @param ImportDocumentsRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function importDocuments(ImportDocumentsRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ImportDocuments', $request, $callOptions)->wait();
    }

    /**
     * List all the databases in the project.
     *
     * The async variant is {@see FirestoreAdminClient::listDatabasesAsync()} .
     *
     * @param ListDatabasesRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ListDatabasesResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listDatabases(ListDatabasesRequest $request, array $callOptions = []): ListDatabasesResponse
    {
        return $this->startApiCall('ListDatabases', $request, $callOptions)->wait();
    }

    /**
     * Lists the field configuration and metadata for this database.
     *
     * Currently,
     * [FirestoreAdmin.ListFields][google.firestore.admin.v1.FirestoreAdmin.ListFields]
     * only supports listing fields that have been explicitly overridden. To issue
     * this query, call
     * [FirestoreAdmin.ListFields][google.firestore.admin.v1.FirestoreAdmin.ListFields]
     * with the filter set to `indexConfig.usesAncestorConfig:false` .
     *
     * The async variant is {@see FirestoreAdminClient::listFieldsAsync()} .
     *
     * @param ListFieldsRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listFields(ListFieldsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListFields', $request, $callOptions);
    }

    /**
     * Lists composite indexes.
     *
     * The async variant is {@see FirestoreAdminClient::listIndexesAsync()} .
     *
     * @param ListIndexesRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listIndexes(ListIndexesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListIndexes', $request, $callOptions);
    }

    /**
     * Updates a database.
     *
     * The async variant is {@see FirestoreAdminClient::updateDatabaseAsync()} .
     *
     * @param UpdateDatabaseRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateDatabase(UpdateDatabaseRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateDatabase', $request, $callOptions)->wait();
    }

    /**
     * Updates a field configuration. Currently, field updates apply only to
     * single field index configuration. However, calls to
     * [FirestoreAdmin.UpdateField][google.firestore.admin.v1.FirestoreAdmin.UpdateField]
     * should provide a field mask to avoid changing any configuration that the
     * caller isn't aware of. The field mask should be specified as: `{ paths:
     * "index_config" }`.
     *
     * This call returns a
     * [google.longrunning.Operation][google.longrunning.Operation] which may be
     * used to track the status of the field update. The metadata for the
     * operation will be the type
     * [FieldOperationMetadata][google.firestore.admin.v1.FieldOperationMetadata].
     *
     * To configure the default field settings for the database, use
     * the special `Field` with resource name:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/__default__/fields/*`.
     *
     * The async variant is {@see FirestoreAdminClient::updateFieldAsync()} .
     *
     * @param UpdateFieldRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateField(UpdateFieldRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateField', $request, $callOptions)->wait();
    }
}
