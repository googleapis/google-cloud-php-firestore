<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/database.proto

namespace Google\Cloud\Firestore\Admin\V1\Database\EncryptionConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The configuration options for using CMEK (Customer Managed Encryption
 * Key) encryption.
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.Database.EncryptionConfig.CustomerManagedEncryptionOptions</code>
 */
class CustomerManagedEncryptionOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Only keys in the same location as the database are allowed to
     * be used for encryption.
     * For Firestore's nam5 multi-region, this corresponds to Cloud KMS
     * multi-region us. For Firestore's eur3 multi-region, this corresponds to
     * Cloud KMS multi-region europe. See
     * https://cloud.google.com/kms/docs/locations.
     * The expected format is
     * `projects/{project_id}/locations/{kms_location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     *
     * Generated from protobuf field <code>string kms_key_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $kms_key_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kms_key_name
     *           Required. Only keys in the same location as the database are allowed to
     *           be used for encryption.
     *           For Firestore's nam5 multi-region, this corresponds to Cloud KMS
     *           multi-region us. For Firestore's eur3 multi-region, this corresponds to
     *           Cloud KMS multi-region europe. See
     *           https://cloud.google.com/kms/docs/locations.
     *           The expected format is
     *           `projects/{project_id}/locations/{kms_location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1\Database::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Only keys in the same location as the database are allowed to
     * be used for encryption.
     * For Firestore's nam5 multi-region, this corresponds to Cloud KMS
     * multi-region us. For Firestore's eur3 multi-region, this corresponds to
     * Cloud KMS multi-region europe. See
     * https://cloud.google.com/kms/docs/locations.
     * The expected format is
     * `projects/{project_id}/locations/{kms_location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     *
     * Generated from protobuf field <code>string kms_key_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * Required. Only keys in the same location as the database are allowed to
     * be used for encryption.
     * For Firestore's nam5 multi-region, this corresponds to Cloud KMS
     * multi-region us. For Firestore's eur3 multi-region, this corresponds to
     * Cloud KMS multi-region europe. See
     * https://cloud.google.com/kms/docs/locations.
     * The expected format is
     * `projects/{project_id}/locations/{kms_location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     *
     * Generated from protobuf field <code>string kms_key_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomerManagedEncryptionOptions::class, \Google\Cloud\Firestore\Admin\V1\Database_EncryptionConfig_CustomerManagedEncryptionOptions::class);
