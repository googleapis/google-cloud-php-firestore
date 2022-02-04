<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/database.proto

namespace Google\Cloud\Firestore\Admin\V1\Database;

use UnexpectedValueException;

/**
 * The type of the database.
 * See https://cloud.google.com/datastore/docs/firestore-or-datastore for
 * information about how to choose.
 *
 * Protobuf type <code>google.firestore.admin.v1.Database.DatabaseType</code>
 */
class DatabaseType
{
    /**
     * The default value. This value is used if the database type is omitted.
     *
     * Generated from protobuf enum <code>DATABASE_TYPE_UNSPECIFIED = 0;</code>
     */
    const DATABASE_TYPE_UNSPECIFIED = 0;
    /**
     * Firestore Native Mode
     *
     * Generated from protobuf enum <code>FIRESTORE_NATIVE = 1;</code>
     */
    const FIRESTORE_NATIVE = 1;
    /**
     * Firestore in Datastore Mode.
     *
     * Generated from protobuf enum <code>DATASTORE_MODE = 2;</code>
     */
    const DATASTORE_MODE = 2;

    private static $valueToName = [
        self::DATABASE_TYPE_UNSPECIFIED => 'DATABASE_TYPE_UNSPECIFIED',
        self::FIRESTORE_NATIVE => 'FIRESTORE_NATIVE',
        self::DATASTORE_MODE => 'DATASTORE_MODE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DatabaseType::class, \Google\Cloud\Firestore\Admin\V1\Database_DatabaseType::class);

