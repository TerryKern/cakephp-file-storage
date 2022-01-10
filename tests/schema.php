<?php
declare(strict_types=1);

/**
 * Abstract schema for CakePHP tests.
 *
 * This format resembles the existing fixture schema
 * and is converted to SQL via the Schema generation
 * features of the Database package.
 */
return [
    [
        'table' => 'file_storage',
        'columns' => [
            'id' => ['type' => 'uuid', 'null' => true, 'default' => null, 'length' => 36],
            'user_id' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 36],
            'foreign_key' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 36],
            'model' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 64],
            'filename' => ['type' => 'string', 'null' => false, 'default' => null],
            'filesize' => ['type' => 'integer', 'null' => true, 'default' => null, 'length' => 16],
            'mime_type' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 32],
            'extension' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 32],
            'hash' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 64],
            'path' => ['type' => 'string', 'null' => true, 'default' => null],
            'adapter' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'comment' => 'Gaufrette Storage Adapter Class'],
            'created' => ['type' => 'datetime', 'null' => true, 'default' => null],
            'modified' => ['type' => 'datetime', 'null' => true, 'default' => null],
        ],
        'constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id']],
        ],
    ],
    [
        'table' => 'items',
        'columns' => [
            'id' => ['type' => 'uuid', 'null' => true, 'default' => null, 'length' => 36],
            'name' => ['type' => 'string', 'null' => true, 'default' => null],
            'path' => ['type' => 'string', 'null' => true, 'default' => null],
            'filename' => ['type' => 'string', 'null' => true, 'default' => null],
        ],
        'constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
    ],
];
