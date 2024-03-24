<?php

/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetDiscUsageRequest.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
 * </copyright>
 * --------------------------------------------------------------------------------------------------------------------
 */

declare(strict_types=1);

namespace Aspose\BarCode\Requests;

/**
 * Request model for "getDiscUsage" operation.
 */
class GetDiscUsageRequest
{
    /**
     * Initializes a new instance of the GetDiscUsageRequest class.
     *
     * @param string $storage_name Storage name
     */
    public function __construct($storage_name = null)
    {
        $this->storage_name = $storage_name;
    }

    /**
     * Storage name
     */
    public $storage_name;
}
