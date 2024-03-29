<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [Firestore.RunAggregationQuery][google.firestore.v1.Firestore.RunAggregationQuery].
 *
 * Generated from protobuf message <code>google.firestore.v1.RunAggregationQueryRequest</code>
 */
class RunAggregationQueryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name. In the format:
     * `projects/{project_id}/databases/{database_id}/documents` or
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     * For example:
     * `projects/my-project/databases/my-database/documents` or
     * `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parent = '';
    /**
     * Optional. Explain options for the query. If set, additional query
     * statistics will be returned. If not, only query results will be returned.
     *
     * Generated from protobuf field <code>.google.firestore.v1.ExplainOptions explain_options = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $explain_options = null;
    protected $query_type;
    protected $consistency_selector;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name. In the format:
     *           `projects/{project_id}/databases/{database_id}/documents` or
     *           `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *           For example:
     *           `projects/my-project/databases/my-database/documents` or
     *           `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *     @type \Google\Cloud\Firestore\V1\StructuredAggregationQuery $structured_aggregation_query
     *           An aggregation query.
     *     @type string $transaction
     *           Run the aggregation within an already active transaction.
     *           The value here is the opaque transaction ID to execute the query in.
     *     @type \Google\Cloud\Firestore\V1\TransactionOptions $new_transaction
     *           Starts a new transaction as part of the query, defaulting to read-only.
     *           The new transaction ID will be returned as the first response in the
     *           stream.
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Executes the query at the given timestamp.
     *           This must be a microsecond precision timestamp within the past one hour,
     *           or if Point-in-Time Recovery is enabled, can additionally be a whole
     *           minute timestamp within the past 7 days.
     *     @type \Google\Cloud\Firestore\V1\ExplainOptions $explain_options
     *           Optional. Explain options for the query. If set, additional query
     *           statistics will be returned. If not, only query results will be returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name. In the format:
     * `projects/{project_id}/databases/{database_id}/documents` or
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     * For example:
     * `projects/my-project/databases/my-database/documents` or
     * `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name. In the format:
     * `projects/{project_id}/databases/{database_id}/documents` or
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     * For example:
     * `projects/my-project/databases/my-database/documents` or
     * `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * An aggregation query.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredAggregationQuery structured_aggregation_query = 2;</code>
     * @return \Google\Cloud\Firestore\V1\StructuredAggregationQuery|null
     */
    public function getStructuredAggregationQuery()
    {
        return $this->readOneof(2);
    }

    public function hasStructuredAggregationQuery()
    {
        return $this->hasOneof(2);
    }

    /**
     * An aggregation query.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredAggregationQuery structured_aggregation_query = 2;</code>
     * @param \Google\Cloud\Firestore\V1\StructuredAggregationQuery $var
     * @return $this
     */
    public function setStructuredAggregationQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\StructuredAggregationQuery::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Run the aggregation within an already active transaction.
     * The value here is the opaque transaction ID to execute the query in.
     *
     * Generated from protobuf field <code>bytes transaction = 4;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->readOneof(4);
    }

    public function hasTransaction()
    {
        return $this->hasOneof(4);
    }

    /**
     * Run the aggregation within an already active transaction.
     * The value here is the opaque transaction ID to execute the query in.
     *
     * Generated from protobuf field <code>bytes transaction = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Starts a new transaction as part of the query, defaulting to read-only.
     * The new transaction ID will be returned as the first response in the
     * stream.
     *
     * Generated from protobuf field <code>.google.firestore.v1.TransactionOptions new_transaction = 5;</code>
     * @return \Google\Cloud\Firestore\V1\TransactionOptions|null
     */
    public function getNewTransaction()
    {
        return $this->readOneof(5);
    }

    public function hasNewTransaction()
    {
        return $this->hasOneof(5);
    }

    /**
     * Starts a new transaction as part of the query, defaulting to read-only.
     * The new transaction ID will be returned as the first response in the
     * stream.
     *
     * Generated from protobuf field <code>.google.firestore.v1.TransactionOptions new_transaction = 5;</code>
     * @param \Google\Cloud\Firestore\V1\TransactionOptions $var
     * @return $this
     */
    public function setNewTransaction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\TransactionOptions::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Executes the query at the given timestamp.
     * This must be a microsecond precision timestamp within the past one hour,
     * or if Point-in-Time Recovery is enabled, can additionally be a whole
     * minute timestamp within the past 7 days.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReadTime()
    {
        return $this->readOneof(6);
    }

    public function hasReadTime()
    {
        return $this->hasOneof(6);
    }

    /**
     * Executes the query at the given timestamp.
     * This must be a microsecond precision timestamp within the past one hour,
     * or if Point-in-Time Recovery is enabled, can additionally be a whole
     * minute timestamp within the past 7 days.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Optional. Explain options for the query. If set, additional query
     * statistics will be returned. If not, only query results will be returned.
     *
     * Generated from protobuf field <code>.google.firestore.v1.ExplainOptions explain_options = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Firestore\V1\ExplainOptions|null
     */
    public function getExplainOptions()
    {
        return $this->explain_options;
    }

    public function hasExplainOptions()
    {
        return isset($this->explain_options);
    }

    public function clearExplainOptions()
    {
        unset($this->explain_options);
    }

    /**
     * Optional. Explain options for the query. If set, additional query
     * statistics will be returned. If not, only query results will be returned.
     *
     * Generated from protobuf field <code>.google.firestore.v1.ExplainOptions explain_options = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Firestore\V1\ExplainOptions $var
     * @return $this
     */
    public function setExplainOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\ExplainOptions::class);
        $this->explain_options = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getQueryType()
    {
        return $this->whichOneof("query_type");
    }

    /**
     * @return string
     */
    public function getConsistencySelector()
    {
        return $this->whichOneof("consistency_selector");
    }

}

