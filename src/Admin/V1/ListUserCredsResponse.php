<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/firestore_admin.proto

namespace Google\Cloud\Firestore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for
 * [FirestoreAdmin.ListUserCreds][google.firestore.admin.v1.FirestoreAdmin.ListUserCreds].
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.ListUserCredsResponse</code>
 */
class ListUserCredsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The user creds for the database.
     *
     * Generated from protobuf field <code>repeated .google.firestore.admin.v1.UserCreds user_creds = 1;</code>
     */
    private $user_creds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Firestore\Admin\V1\UserCreds>|\Google\Protobuf\Internal\RepeatedField $user_creds
     *           The user creds for the database.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1\FirestoreAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The user creds for the database.
     *
     * Generated from protobuf field <code>repeated .google.firestore.admin.v1.UserCreds user_creds = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserCreds()
    {
        return $this->user_creds;
    }

    /**
     * The user creds for the database.
     *
     * Generated from protobuf field <code>repeated .google.firestore.admin.v1.UserCreds user_creds = 1;</code>
     * @param array<\Google\Cloud\Firestore\Admin\V1\UserCreds>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserCreds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Firestore\Admin\V1\UserCreds::class);
        $this->user_creds = $arr;

        return $this;
    }

}

