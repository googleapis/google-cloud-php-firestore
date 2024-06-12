<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/firestore_admin.proto

namespace Google\Cloud\Firestore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [FirestoreAdmin.ExportDocuments][google.firestore.admin.v1.FirestoreAdmin.ExportDocuments].
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.ExportDocumentsRequest</code>
 */
class ExportDocumentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Database to export. Should be of the form:
     * `projects/{project_id}/databases/{database_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Which collection ids to export. Unspecified means all collections. Each
     * collection id in this list must be unique.
     *
     * Generated from protobuf field <code>repeated string collection_ids = 2;</code>
     */
    private $collection_ids;
    /**
     * The output URI. Currently only supports Google Cloud Storage URIs of the
     * form: `gs://BUCKET_NAME[/NAMESPACE_PATH]`, where `BUCKET_NAME` is the name
     * of the Google Cloud Storage bucket and `NAMESPACE_PATH` is an optional
     * Google Cloud Storage namespace path. When
     * choosing a name, be sure to consider Google Cloud Storage naming
     * guidelines: https://cloud.google.com/storage/docs/naming.
     * If the URI is a bucket (without a namespace path), a prefix will be
     * generated based on the start time.
     *
     * Generated from protobuf field <code>string output_uri_prefix = 3;</code>
     */
    private $output_uri_prefix = '';
    /**
     * An empty list represents all namespaces. This is the preferred
     * usage for databases that don't use namespaces.
     * An empty string element represents the default namespace. This should be
     * used if the database has data in non-default namespaces, but doesn't want
     * to include them. Each namespace in this list must be unique.
     *
     * Generated from protobuf field <code>repeated string namespace_ids = 4;</code>
     */
    private $namespace_ids;
    /**
     * The timestamp that corresponds to the version of the database to be
     * exported. The timestamp must be in the past, rounded to the minute and not
     * older than
     * [earliestVersionTime][google.firestore.admin.v1.Database.earliest_version_time].
     * If specified, then the exported documents will represent a consistent view
     * of the database at the provided time. Otherwise, there are no guarantees
     * about the consistency of the exported documents.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp snapshot_time = 5;</code>
     */
    private $snapshot_time = null;

    /**
     * @param string $name Required. Database to export. Should be of the form:
     *                     `projects/{project_id}/databases/{database_id}`. Please see
     *                     {@see FirestoreAdminClient::databaseName()} for help formatting this field.
     *
     * @return \Google\Cloud\Firestore\Admin\V1\ExportDocumentsRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Database to export. Should be of the form:
     *           `projects/{project_id}/databases/{database_id}`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $collection_ids
     *           Which collection ids to export. Unspecified means all collections. Each
     *           collection id in this list must be unique.
     *     @type string $output_uri_prefix
     *           The output URI. Currently only supports Google Cloud Storage URIs of the
     *           form: `gs://BUCKET_NAME[/NAMESPACE_PATH]`, where `BUCKET_NAME` is the name
     *           of the Google Cloud Storage bucket and `NAMESPACE_PATH` is an optional
     *           Google Cloud Storage namespace path. When
     *           choosing a name, be sure to consider Google Cloud Storage naming
     *           guidelines: https://cloud.google.com/storage/docs/naming.
     *           If the URI is a bucket (without a namespace path), a prefix will be
     *           generated based on the start time.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $namespace_ids
     *           An empty list represents all namespaces. This is the preferred
     *           usage for databases that don't use namespaces.
     *           An empty string element represents the default namespace. This should be
     *           used if the database has data in non-default namespaces, but doesn't want
     *           to include them. Each namespace in this list must be unique.
     *     @type \Google\Protobuf\Timestamp $snapshot_time
     *           The timestamp that corresponds to the version of the database to be
     *           exported. The timestamp must be in the past, rounded to the minute and not
     *           older than
     *           [earliestVersionTime][google.firestore.admin.v1.Database.earliest_version_time].
     *           If specified, then the exported documents will represent a consistent view
     *           of the database at the provided time. Otherwise, there are no guarantees
     *           about the consistency of the exported documents.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1\FirestoreAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Database to export. Should be of the form:
     * `projects/{project_id}/databases/{database_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Database to export. Should be of the form:
     * `projects/{project_id}/databases/{database_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Which collection ids to export. Unspecified means all collections. Each
     * collection id in this list must be unique.
     *
     * Generated from protobuf field <code>repeated string collection_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCollectionIds()
    {
        return $this->collection_ids;
    }

    /**
     * Which collection ids to export. Unspecified means all collections. Each
     * collection id in this list must be unique.
     *
     * Generated from protobuf field <code>repeated string collection_ids = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCollectionIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->collection_ids = $arr;

        return $this;
    }

    /**
     * The output URI. Currently only supports Google Cloud Storage URIs of the
     * form: `gs://BUCKET_NAME[/NAMESPACE_PATH]`, where `BUCKET_NAME` is the name
     * of the Google Cloud Storage bucket and `NAMESPACE_PATH` is an optional
     * Google Cloud Storage namespace path. When
     * choosing a name, be sure to consider Google Cloud Storage naming
     * guidelines: https://cloud.google.com/storage/docs/naming.
     * If the URI is a bucket (without a namespace path), a prefix will be
     * generated based on the start time.
     *
     * Generated from protobuf field <code>string output_uri_prefix = 3;</code>
     * @return string
     */
    public function getOutputUriPrefix()
    {
        return $this->output_uri_prefix;
    }

    /**
     * The output URI. Currently only supports Google Cloud Storage URIs of the
     * form: `gs://BUCKET_NAME[/NAMESPACE_PATH]`, where `BUCKET_NAME` is the name
     * of the Google Cloud Storage bucket and `NAMESPACE_PATH` is an optional
     * Google Cloud Storage namespace path. When
     * choosing a name, be sure to consider Google Cloud Storage naming
     * guidelines: https://cloud.google.com/storage/docs/naming.
     * If the URI is a bucket (without a namespace path), a prefix will be
     * generated based on the start time.
     *
     * Generated from protobuf field <code>string output_uri_prefix = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputUriPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_uri_prefix = $var;

        return $this;
    }

    /**
     * An empty list represents all namespaces. This is the preferred
     * usage for databases that don't use namespaces.
     * An empty string element represents the default namespace. This should be
     * used if the database has data in non-default namespaces, but doesn't want
     * to include them. Each namespace in this list must be unique.
     *
     * Generated from protobuf field <code>repeated string namespace_ids = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNamespaceIds()
    {
        return $this->namespace_ids;
    }

    /**
     * An empty list represents all namespaces. This is the preferred
     * usage for databases that don't use namespaces.
     * An empty string element represents the default namespace. This should be
     * used if the database has data in non-default namespaces, but doesn't want
     * to include them. Each namespace in this list must be unique.
     *
     * Generated from protobuf field <code>repeated string namespace_ids = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNamespaceIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->namespace_ids = $arr;

        return $this;
    }

    /**
     * The timestamp that corresponds to the version of the database to be
     * exported. The timestamp must be in the past, rounded to the minute and not
     * older than
     * [earliestVersionTime][google.firestore.admin.v1.Database.earliest_version_time].
     * If specified, then the exported documents will represent a consistent view
     * of the database at the provided time. Otherwise, there are no guarantees
     * about the consistency of the exported documents.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp snapshot_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getSnapshotTime()
    {
        return $this->snapshot_time;
    }

    public function hasSnapshotTime()
    {
        return isset($this->snapshot_time);
    }

    public function clearSnapshotTime()
    {
        unset($this->snapshot_time);
    }

    /**
     * The timestamp that corresponds to the version of the database to be
     * exported. The timestamp must be in the past, rounded to the minute and not
     * older than
     * [earliestVersionTime][google.firestore.admin.v1.Database.earliest_version_time].
     * If specified, then the exported documents will represent a consistent view
     * of the database at the provided time. Otherwise, there are no guarantees
     * about the consistency of the exported documents.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp snapshot_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSnapshotTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->snapshot_time = $var;

        return $this;
    }

}

