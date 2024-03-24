<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="StorageExistsRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "storageExists" operation.
 */
class StorageExistsRequest
{
    /**
     * Initializes a new instance of the StorageExistsRequest class.
     *
     * @param string $storage_name Storage name
     */
    public function __construct($storage_name)
    {
        $this->storage_name = $storage_name;
    }

    /**
     * Storage name
     */
    public $storage_name;
}
