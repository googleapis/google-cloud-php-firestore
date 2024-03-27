<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/schedule.proto

namespace Google\Cloud\Firestore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represent a recurring schedule that runs at a specific time every day.
 * The time zone is UTC.
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.DailyRecurrence</code>
 */
class DailyRecurrence extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1\Schedule::initOnce();
        parent::__construct($data);
    }

}

