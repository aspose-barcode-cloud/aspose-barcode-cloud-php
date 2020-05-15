<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="index.php">
 *   Copyright (c) 2018 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

require __DIR__ . '/vendor/autoload.php';


use Aspose\BarCode\Configuration;
use Aspose\BarCode\BarCodeApi;
use Aspose\BarCode\Requests\BarCodeGetBarCodeGenerateRequest;


$config = new Configuration();
$config->setAppKey("your_key");
$config->setAppSid("your_sid");

$request = new BarCodeGetBarCodeGenerateRequest();
$request->type = "QR";
$request->text = "PHP SDK Test";
$request->format = "png";

$api = new BarCodeApi(null, $config);
$response = $api->BarCodeGetBarCodeGenerate($request);

$type = 'image/png';
$size = $response->getSize();
header('Content-Type: ' . $type);
header('Content-Length: ' . $size);
echo $response->fread($size);
