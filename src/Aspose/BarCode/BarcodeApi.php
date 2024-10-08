<?php

declare(strict_types=1);
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BarcodeApi.php">
 *   Copyright (c) 2024 Aspose Pty Ltd
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

namespace Aspose\BarCode;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Aspose\BarCode\Requests;
use InvalidArgumentException;
use RuntimeException;

/**
 * Aspose.BarCode for Cloud API.
 */

class BarcodeApi
{
    /**
     * Stores client instance
     * @var ClientInterface client for calling api
     */
    protected $client;

    /**
     * Stores configuration
     * @var Configuration configuration info
     */
    protected $config;

    /**
     * Stores header selector
     * HeaderSelector class for header selection
     */
    protected $headerSelector;

    /**
     * Initialize a new instance of Api
     * @param ClientInterface|null $client client for calling api
     * @param Configuration|null $config configuration info
     * @param HeaderSelector|null $selector class for header selection
     */
    public function __construct(ClientInterface $client = null, Configuration $config = null, HeaderSelector $selector = null)
    {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * Gets the config
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getBarcodeGenerate
     *
     * Generate barcode.
     *
     * @param Requests\GetBarcodeGenerateRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function getBarcodeGenerate(Requests\GetBarcodeGenerateRequest $request)
    {
        try {
            list($response) = $this->getBarcodeGenerateWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->getBarcodeGenerateWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation getBarcodeGenerateWithHttpInfo
     *
     * Generate barcode.
     *
     * @param Requests\GetBarcodeGenerateRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBarcodeGenerateWithHttpInfo(Requests\GetBarcodeGenerateRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->GetBarcodeGenerateRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                }

                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\ApiErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBarcodeGenerateAsync
     *
     * Generate barcode.
     *
     * @param Requests\GetBarcodeGenerateRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBarcodeGenerateAsync(Requests\GetBarcodeGenerateRequest $request)
    {
        return $this->getBarcodeGenerateAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBarcodeGenerateAsyncWithHttpInfo
     *
     * Generate barcode.
     *
     * @param Requests\GetBarcodeGenerateRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBarcodeGenerateAsyncWithHttpInfo(Requests\GetBarcodeGenerateRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->GetBarcodeGenerateRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        //$this->_refreshToken();
                        throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getBarcodeGenerate'
     *
     * @param Requests\GetBarcodeGenerateRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetBarcodeGenerateRequest(Requests\GetBarcodeGenerateRequest $request)
    {
        // verify the required parameter 'type' is set
        if (!isset($request->type)) {
            throw new InvalidArgumentException('Missing the required parameter $type when calling getBarcodeGenerate');
        }
        // verify the required parameter 'text' is set
        if (!isset($request->text)) {
            throw new InvalidArgumentException('Missing the required parameter $text when calling getBarcodeGenerate');
        }

        $resourcePath = '/barcode/generate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if (isset($request->type)) {
            $queryParamName = lcfirst('Type');
            $queryParamValue = is_bool($request->type) ? ($request->type ? 'true' : 'false') : $request->type;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->text)) {
            $queryParamName = lcfirst('Text');
            $queryParamValue = is_bool($request->text) ? ($request->text ? 'true' : 'false') : $request->text;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->two_d_display_text)) {
            $queryParamName = lcfirst('TwoDDisplayText');
            $queryParamValue = is_bool($request->two_d_display_text) ? ($request->two_d_display_text ? 'true' : 'false') : $request->two_d_display_text;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->text_location)) {
            $queryParamName = lcfirst('TextLocation');
            $queryParamValue = is_bool($request->text_location) ? ($request->text_location ? 'true' : 'false') : $request->text_location;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->text_alignment)) {
            $queryParamName = lcfirst('TextAlignment');
            $queryParamValue = is_bool($request->text_alignment) ? ($request->text_alignment ? 'true' : 'false') : $request->text_alignment;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->text_color)) {
            $queryParamName = lcfirst('TextColor');
            $queryParamValue = is_bool($request->text_color) ? ($request->text_color ? 'true' : 'false') : $request->text_color;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->no_wrap)) {
            $queryParamName = lcfirst('NoWrap');
            $queryParamValue = is_bool($request->no_wrap) ? ($request->no_wrap ? 'true' : 'false') : $request->no_wrap;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->resolution)) {
            $queryParamName = lcfirst('Resolution');
            $queryParamValue = is_bool($request->resolution) ? ($request->resolution ? 'true' : 'false') : $request->resolution;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->resolution_x)) {
            $queryParamName = lcfirst('ResolutionX');
            $queryParamValue = is_bool($request->resolution_x) ? ($request->resolution_x ? 'true' : 'false') : $request->resolution_x;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->resolution_y)) {
            $queryParamName = lcfirst('ResolutionY');
            $queryParamValue = is_bool($request->resolution_y) ? ($request->resolution_y ? 'true' : 'false') : $request->resolution_y;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->dimension_x)) {
            $queryParamName = lcfirst('DimensionX');
            $queryParamValue = is_bool($request->dimension_x) ? ($request->dimension_x ? 'true' : 'false') : $request->dimension_x;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->text_space)) {
            $queryParamName = lcfirst('TextSpace');
            $queryParamValue = is_bool($request->text_space) ? ($request->text_space ? 'true' : 'false') : $request->text_space;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->units)) {
            $queryParamName = lcfirst('Units');
            $queryParamValue = is_bool($request->units) ? ($request->units ? 'true' : 'false') : $request->units;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->size_mode)) {
            $queryParamName = lcfirst('SizeMode');
            $queryParamValue = is_bool($request->size_mode) ? ($request->size_mode ? 'true' : 'false') : $request->size_mode;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->bar_height)) {
            $queryParamName = lcfirst('BarHeight');
            $queryParamValue = is_bool($request->bar_height) ? ($request->bar_height ? 'true' : 'false') : $request->bar_height;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->image_height)) {
            $queryParamName = lcfirst('ImageHeight');
            $queryParamValue = is_bool($request->image_height) ? ($request->image_height ? 'true' : 'false') : $request->image_height;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->image_width)) {
            $queryParamName = lcfirst('ImageWidth');
            $queryParamValue = is_bool($request->image_width) ? ($request->image_width ? 'true' : 'false') : $request->image_width;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->rotation_angle)) {
            $queryParamName = lcfirst('RotationAngle');
            $queryParamValue = is_bool($request->rotation_angle) ? ($request->rotation_angle ? 'true' : 'false') : $request->rotation_angle;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->back_color)) {
            $queryParamName = lcfirst('BackColor');
            $queryParamValue = is_bool($request->back_color) ? ($request->back_color ? 'true' : 'false') : $request->back_color;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->bar_color)) {
            $queryParamName = lcfirst('BarColor');
            $queryParamValue = is_bool($request->bar_color) ? ($request->bar_color ? 'true' : 'false') : $request->bar_color;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->border_color)) {
            $queryParamName = lcfirst('BorderColor');
            $queryParamValue = is_bool($request->border_color) ? ($request->border_color ? 'true' : 'false') : $request->border_color;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->border_width)) {
            $queryParamName = lcfirst('BorderWidth');
            $queryParamValue = is_bool($request->border_width) ? ($request->border_width ? 'true' : 'false') : $request->border_width;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->border_dash_style)) {
            $queryParamName = lcfirst('BorderDashStyle');
            $queryParamValue = is_bool($request->border_dash_style) ? ($request->border_dash_style ? 'true' : 'false') : $request->border_dash_style;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->border_visible)) {
            $queryParamName = lcfirst('BorderVisible');
            $queryParamValue = is_bool($request->border_visible) ? ($request->border_visible ? 'true' : 'false') : $request->border_visible;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->enable_checksum)) {
            $queryParamName = lcfirst('EnableChecksum');
            $queryParamValue = is_bool($request->enable_checksum) ? ($request->enable_checksum ? 'true' : 'false') : $request->enable_checksum;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->enable_escape)) {
            $queryParamName = lcfirst('EnableEscape');
            $queryParamValue = is_bool($request->enable_escape) ? ($request->enable_escape ? 'true' : 'false') : $request->enable_escape;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->filled_bars)) {
            $queryParamName = lcfirst('FilledBars');
            $queryParamValue = is_bool($request->filled_bars) ? ($request->filled_bars ? 'true' : 'false') : $request->filled_bars;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->always_show_checksum)) {
            $queryParamName = lcfirst('AlwaysShowChecksum');
            $queryParamValue = is_bool($request->always_show_checksum) ? ($request->always_show_checksum ? 'true' : 'false') : $request->always_show_checksum;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->wide_narrow_ratio)) {
            $queryParamName = lcfirst('WideNarrowRatio');
            $queryParamValue = is_bool($request->wide_narrow_ratio) ? ($request->wide_narrow_ratio ? 'true' : 'false') : $request->wide_narrow_ratio;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->validate_text)) {
            $queryParamName = lcfirst('ValidateText');
            $queryParamValue = is_bool($request->validate_text) ? ($request->validate_text ? 'true' : 'false') : $request->validate_text;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->supplement_data)) {
            $queryParamName = lcfirst('SupplementData');
            $queryParamValue = is_bool($request->supplement_data) ? ($request->supplement_data ? 'true' : 'false') : $request->supplement_data;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->supplement_space)) {
            $queryParamName = lcfirst('SupplementSpace');
            $queryParamValue = is_bool($request->supplement_space) ? ($request->supplement_space ? 'true' : 'false') : $request->supplement_space;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->bar_width_reduction)) {
            $queryParamName = lcfirst('BarWidthReduction');
            $queryParamValue = is_bool($request->bar_width_reduction) ? ($request->bar_width_reduction ? 'true' : 'false') : $request->bar_width_reduction;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->use_anti_alias)) {
            $queryParamName = lcfirst('UseAntiAlias');
            $queryParamValue = is_bool($request->use_anti_alias) ? ($request->use_anti_alias ? 'true' : 'false') : $request->use_anti_alias;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->format)) {
            $queryParamName = lcfirst('format');
            $queryParamValue = is_bool($request->format) ? ($request->format ? 'true' : 'false') : $request->format;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }

        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['image/png', 'image/bmp', 'image/gif', 'image/jpeg', 'image/svg+xml', 'image/tiff']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['image/png', 'image/bmp', 'image/gif', 'image/jpeg', 'image/svg+xml', 'image/tiff'],
                ['application/json']
            );
        }

        // for model (json/xml)

        if (!$this->config->getAccessToken()) {
            $this->_requestToken();
        }
        $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }

        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
    }

    /**
     * Operation getBarcodeRecognize
     *
     * Recognize barcode from a file on server.
     *
     * @param Requests\GetBarcodeRecognizeRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \Aspose\BarCode\Model\BarcodeResponseList
     */
    public function getBarcodeRecognize(Requests\GetBarcodeRecognizeRequest $request)
    {
        try {
            list($response) = $this->getBarcodeRecognizeWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->getBarcodeRecognizeWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation getBarcodeRecognizeWithHttpInfo
     *
     * Recognize barcode from a file on server.
     *
     * @param Requests\GetBarcodeRecognizeRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \Aspose\BarCode\Model\BarcodeResponseList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBarcodeRecognizeWithHttpInfo(Requests\GetBarcodeRecognizeRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\BarcodeResponseList';
        $request = $this->GetBarcodeRecognizeRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                }

                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\BarcodeResponseList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBarcodeRecognizeAsync
     *
     * Recognize barcode from a file on server.
     *
     * @param Requests\GetBarcodeRecognizeRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBarcodeRecognizeAsync(Requests\GetBarcodeRecognizeRequest $request)
    {
        return $this->getBarcodeRecognizeAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBarcodeRecognizeAsyncWithHttpInfo
     *
     * Recognize barcode from a file on server.
     *
     * @param Requests\GetBarcodeRecognizeRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBarcodeRecognizeAsyncWithHttpInfo(Requests\GetBarcodeRecognizeRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\BarcodeResponseList';
        $request = $this->GetBarcodeRecognizeRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        //$this->_refreshToken();
                        throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getBarcodeRecognize'
     *
     * @param Requests\GetBarcodeRecognizeRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetBarcodeRecognizeRequest(Requests\GetBarcodeRecognizeRequest $request)
    {
        // verify the required parameter 'name' is set
        if (!isset($request->name)) {
            throw new InvalidArgumentException('Missing the required parameter $name when calling getBarcodeRecognize');
        }

        $resourcePath = '/barcode/{name}/recognize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if (isset($request->name)) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        if (isset($request->type)) {
            $queryParamName = lcfirst('Type');
            $queryParamValue = is_bool($request->type) ? ($request->type ? 'true' : 'false') : $request->type;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (is_array($request->types)) {
            $queryParamName = lcfirst('Types');
            $queryParams[$queryParamName] = $request->types;
        }
        if (isset($request->checksum_validation)) {
            $queryParamName = lcfirst('ChecksumValidation');
            $queryParamValue = is_bool($request->checksum_validation) ? ($request->checksum_validation ? 'true' : 'false') : $request->checksum_validation;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->detect_encoding)) {
            $queryParamName = lcfirst('DetectEncoding');
            $queryParamValue = is_bool($request->detect_encoding) ? ($request->detect_encoding ? 'true' : 'false') : $request->detect_encoding;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->preset)) {
            $queryParamName = lcfirst('Preset');
            $queryParamValue = is_bool($request->preset) ? ($request->preset ? 'true' : 'false') : $request->preset;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->rect_x)) {
            $queryParamName = lcfirst('RectX');
            $queryParamValue = is_bool($request->rect_x) ? ($request->rect_x ? 'true' : 'false') : $request->rect_x;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->rect_y)) {
            $queryParamName = lcfirst('RectY');
            $queryParamValue = is_bool($request->rect_y) ? ($request->rect_y ? 'true' : 'false') : $request->rect_y;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->rect_width)) {
            $queryParamName = lcfirst('RectWidth');
            $queryParamValue = is_bool($request->rect_width) ? ($request->rect_width ? 'true' : 'false') : $request->rect_width;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->rect_height)) {
            $queryParamName = lcfirst('RectHeight');
            $queryParamValue = is_bool($request->rect_height) ? ($request->rect_height ? 'true' : 'false') : $request->rect_height;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->strip_fnc)) {
            $queryParamName = lcfirst('StripFNC');
            $queryParamValue = is_bool($request->strip_fnc) ? ($request->strip_fnc ? 'true' : 'false') : $request->strip_fnc;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->timeout)) {
            $queryParamName = lcfirst('Timeout');
            $queryParamValue = is_bool($request->timeout) ? ($request->timeout ? 'true' : 'false') : $request->timeout;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->median_smoothing_window_size)) {
            $queryParamName = lcfirst('MedianSmoothingWindowSize');
            $queryParamValue = is_bool($request->median_smoothing_window_size) ? ($request->median_smoothing_window_size ? 'true' : 'false') : $request->median_smoothing_window_size;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_median_smoothing)) {
            $queryParamName = lcfirst('AllowMedianSmoothing');
            $queryParamValue = is_bool($request->allow_median_smoothing) ? ($request->allow_median_smoothing ? 'true' : 'false') : $request->allow_median_smoothing;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_complex_background)) {
            $queryParamName = lcfirst('AllowComplexBackground');
            $queryParamValue = is_bool($request->allow_complex_background) ? ($request->allow_complex_background ? 'true' : 'false') : $request->allow_complex_background;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_datamatrix_industrial_barcodes)) {
            $queryParamName = lcfirst('AllowDatamatrixIndustrialBarcodes');
            $queryParamValue = is_bool($request->allow_datamatrix_industrial_barcodes) ? ($request->allow_datamatrix_industrial_barcodes ? 'true' : 'false') : $request->allow_datamatrix_industrial_barcodes;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_decreased_image)) {
            $queryParamName = lcfirst('AllowDecreasedImage');
            $queryParamValue = is_bool($request->allow_decreased_image) ? ($request->allow_decreased_image ? 'true' : 'false') : $request->allow_decreased_image;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_detect_scan_gap)) {
            $queryParamName = lcfirst('AllowDetectScanGap');
            $queryParamValue = is_bool($request->allow_detect_scan_gap) ? ($request->allow_detect_scan_gap ? 'true' : 'false') : $request->allow_detect_scan_gap;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_incorrect_barcodes)) {
            $queryParamName = lcfirst('AllowIncorrectBarcodes');
            $queryParamValue = is_bool($request->allow_incorrect_barcodes) ? ($request->allow_incorrect_barcodes ? 'true' : 'false') : $request->allow_incorrect_barcodes;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_invert_image)) {
            $queryParamName = lcfirst('AllowInvertImage');
            $queryParamValue = is_bool($request->allow_invert_image) ? ($request->allow_invert_image ? 'true' : 'false') : $request->allow_invert_image;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_micro_white_spots_removing)) {
            $queryParamName = lcfirst('AllowMicroWhiteSpotsRemoving');
            $queryParamValue = is_bool($request->allow_micro_white_spots_removing) ? ($request->allow_micro_white_spots_removing ? 'true' : 'false') : $request->allow_micro_white_spots_removing;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_one_d_fast_barcodes_detector)) {
            $queryParamName = lcfirst('AllowOneDFastBarcodesDetector');
            $queryParamValue = is_bool($request->allow_one_d_fast_barcodes_detector) ? ($request->allow_one_d_fast_barcodes_detector ? 'true' : 'false') : $request->allow_one_d_fast_barcodes_detector;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_one_d_wiped_bars_restoration)) {
            $queryParamName = lcfirst('AllowOneDWipedBarsRestoration');
            $queryParamValue = is_bool($request->allow_one_d_wiped_bars_restoration) ? ($request->allow_one_d_wiped_bars_restoration ? 'true' : 'false') : $request->allow_one_d_wiped_bars_restoration;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_qr_micro_qr_restoration)) {
            $queryParamName = lcfirst('AllowQRMicroQrRestoration');
            $queryParamValue = is_bool($request->allow_qr_micro_qr_restoration) ? ($request->allow_qr_micro_qr_restoration ? 'true' : 'false') : $request->allow_qr_micro_qr_restoration;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_regular_image)) {
            $queryParamName = lcfirst('AllowRegularImage');
            $queryParamValue = is_bool($request->allow_regular_image) ? ($request->allow_regular_image ? 'true' : 'false') : $request->allow_regular_image;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_salt_and_pepper_filtering)) {
            $queryParamName = lcfirst('AllowSaltAndPepperFiltering');
            $queryParamValue = is_bool($request->allow_salt_and_pepper_filtering) ? ($request->allow_salt_and_pepper_filtering ? 'true' : 'false') : $request->allow_salt_and_pepper_filtering;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_white_spots_removing)) {
            $queryParamName = lcfirst('AllowWhiteSpotsRemoving');
            $queryParamValue = is_bool($request->allow_white_spots_removing) ? ($request->allow_white_spots_removing ? 'true' : 'false') : $request->allow_white_spots_removing;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->check_more1_d_variants)) {
            $queryParamName = lcfirst('CheckMore1DVariants');
            $queryParamValue = is_bool($request->check_more1_d_variants) ? ($request->check_more1_d_variants ? 'true' : 'false') : $request->check_more1_d_variants;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->fast_scan_only)) {
            $queryParamName = lcfirst('FastScanOnly');
            $queryParamValue = is_bool($request->fast_scan_only) ? ($request->fast_scan_only ? 'true' : 'false') : $request->fast_scan_only;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_additional_restorations)) {
            $queryParamName = lcfirst('AllowAdditionalRestorations');
            $queryParamValue = is_bool($request->allow_additional_restorations) ? ($request->allow_additional_restorations ? 'true' : 'false') : $request->allow_additional_restorations;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->region_likelihood_threshold_percent)) {
            $queryParamName = lcfirst('RegionLikelihoodThresholdPercent');
            $queryParamValue = is_bool($request->region_likelihood_threshold_percent) ? ($request->region_likelihood_threshold_percent ? 'true' : 'false') : $request->region_likelihood_threshold_percent;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (is_array($request->scan_window_sizes)) {
            $queryParamName = lcfirst('ScanWindowSizes');
            $queryParams[$queryParamName] = $request->scan_window_sizes;
        }
        if (isset($request->similarity)) {
            $queryParamName = lcfirst('Similarity');
            $queryParamValue = is_bool($request->similarity) ? ($request->similarity ? 'true' : 'false') : $request->similarity;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->skip_diagonal_search)) {
            $queryParamName = lcfirst('SkipDiagonalSearch');
            $queryParamValue = is_bool($request->skip_diagonal_search) ? ($request->skip_diagonal_search ? 'true' : 'false') : $request->skip_diagonal_search;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->read_tiny_barcodes)) {
            $queryParamName = lcfirst('ReadTinyBarcodes');
            $queryParamValue = is_bool($request->read_tiny_barcodes) ? ($request->read_tiny_barcodes ? 'true' : 'false') : $request->read_tiny_barcodes;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->australian_post_encoding_table)) {
            $queryParamName = lcfirst('AustralianPostEncodingTable');
            $queryParamValue = is_bool($request->australian_post_encoding_table) ? ($request->australian_post_encoding_table ? 'true' : 'false') : $request->australian_post_encoding_table;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->ignore_ending_filling_patterns_for_c_table)) {
            $queryParamName = lcfirst('IgnoreEndingFillingPatternsForCTable');
            $queryParamValue = is_bool($request->ignore_ending_filling_patterns_for_c_table) ? ($request->ignore_ending_filling_patterns_for_c_table ? 'true' : 'false') : $request->ignore_ending_filling_patterns_for_c_table;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->storage)) {
            $queryParamName = lcfirst('storage');
            $queryParamValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->folder)) {
            $queryParamName = lcfirst('folder');
            $queryParamValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }

        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)

        if (!$this->config->getAccessToken()) {
            $this->_requestToken();
        }
        $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }

        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
    }

    /**
     * Operation postBarcodeRecognizeFromUrlOrContent
     *
     * Recognize barcode from an url or from request body. Request body can contain raw data bytes of the image with content-type \"application/octet-stream\". An image can also be passed as a form field.
     *
     * @param Requests\PostBarcodeRecognizeFromUrlOrContentRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \Aspose\BarCode\Model\BarcodeResponseList
     */
    public function postBarcodeRecognizeFromUrlOrContent(Requests\PostBarcodeRecognizeFromUrlOrContentRequest $request)
    {
        try {
            list($response) = $this->postBarcodeRecognizeFromUrlOrContentWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->postBarcodeRecognizeFromUrlOrContentWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation postBarcodeRecognizeFromUrlOrContentWithHttpInfo
     *
     * Recognize barcode from an url or from request body. Request body can contain raw data bytes of the image with content-type \"application/octet-stream\". An image can also be passed as a form field.
     *
     * @param Requests\PostBarcodeRecognizeFromUrlOrContentRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \Aspose\BarCode\Model\BarcodeResponseList, HTTP status code, HTTP response headers (array of strings)
     */
    public function postBarcodeRecognizeFromUrlOrContentWithHttpInfo(Requests\PostBarcodeRecognizeFromUrlOrContentRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\BarcodeResponseList';
        $request = $this->PostBarcodeRecognizeFromUrlOrContentRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                }

                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\BarcodeResponseList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postBarcodeRecognizeFromUrlOrContentAsync
     *
     * Recognize barcode from an url or from request body. Request body can contain raw data bytes of the image with content-type \"application/octet-stream\". An image can also be passed as a form field.
     *
     * @param Requests\PostBarcodeRecognizeFromUrlOrContentRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postBarcodeRecognizeFromUrlOrContentAsync(Requests\PostBarcodeRecognizeFromUrlOrContentRequest $request)
    {
        return $this->postBarcodeRecognizeFromUrlOrContentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postBarcodeRecognizeFromUrlOrContentAsyncWithHttpInfo
     *
     * Recognize barcode from an url or from request body. Request body can contain raw data bytes of the image with content-type \"application/octet-stream\". An image can also be passed as a form field.
     *
     * @param Requests\PostBarcodeRecognizeFromUrlOrContentRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postBarcodeRecognizeFromUrlOrContentAsyncWithHttpInfo(Requests\PostBarcodeRecognizeFromUrlOrContentRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\BarcodeResponseList';
        $request = $this->PostBarcodeRecognizeFromUrlOrContentRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        //$this->_refreshToken();
                        throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postBarcodeRecognizeFromUrlOrContent'
     *
     * @param Requests\PostBarcodeRecognizeFromUrlOrContentRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PostBarcodeRecognizeFromUrlOrContentRequest(Requests\PostBarcodeRecognizeFromUrlOrContentRequest $request)
    {

        $resourcePath = '/barcode/recognize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if (isset($request->type)) {
            $queryParamName = lcfirst('Type');
            $queryParamValue = is_bool($request->type) ? ($request->type ? 'true' : 'false') : $request->type;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (is_array($request->types)) {
            $queryParamName = lcfirst('Types');
            $queryParams[$queryParamName] = $request->types;
        }
        if (isset($request->checksum_validation)) {
            $queryParamName = lcfirst('ChecksumValidation');
            $queryParamValue = is_bool($request->checksum_validation) ? ($request->checksum_validation ? 'true' : 'false') : $request->checksum_validation;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->detect_encoding)) {
            $queryParamName = lcfirst('DetectEncoding');
            $queryParamValue = is_bool($request->detect_encoding) ? ($request->detect_encoding ? 'true' : 'false') : $request->detect_encoding;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->preset)) {
            $queryParamName = lcfirst('Preset');
            $queryParamValue = is_bool($request->preset) ? ($request->preset ? 'true' : 'false') : $request->preset;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->rect_x)) {
            $queryParamName = lcfirst('RectX');
            $queryParamValue = is_bool($request->rect_x) ? ($request->rect_x ? 'true' : 'false') : $request->rect_x;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->rect_y)) {
            $queryParamName = lcfirst('RectY');
            $queryParamValue = is_bool($request->rect_y) ? ($request->rect_y ? 'true' : 'false') : $request->rect_y;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->rect_width)) {
            $queryParamName = lcfirst('RectWidth');
            $queryParamValue = is_bool($request->rect_width) ? ($request->rect_width ? 'true' : 'false') : $request->rect_width;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->rect_height)) {
            $queryParamName = lcfirst('RectHeight');
            $queryParamValue = is_bool($request->rect_height) ? ($request->rect_height ? 'true' : 'false') : $request->rect_height;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->strip_fnc)) {
            $queryParamName = lcfirst('StripFNC');
            $queryParamValue = is_bool($request->strip_fnc) ? ($request->strip_fnc ? 'true' : 'false') : $request->strip_fnc;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->timeout)) {
            $queryParamName = lcfirst('Timeout');
            $queryParamValue = is_bool($request->timeout) ? ($request->timeout ? 'true' : 'false') : $request->timeout;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->median_smoothing_window_size)) {
            $queryParamName = lcfirst('MedianSmoothingWindowSize');
            $queryParamValue = is_bool($request->median_smoothing_window_size) ? ($request->median_smoothing_window_size ? 'true' : 'false') : $request->median_smoothing_window_size;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_median_smoothing)) {
            $queryParamName = lcfirst('AllowMedianSmoothing');
            $queryParamValue = is_bool($request->allow_median_smoothing) ? ($request->allow_median_smoothing ? 'true' : 'false') : $request->allow_median_smoothing;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_complex_background)) {
            $queryParamName = lcfirst('AllowComplexBackground');
            $queryParamValue = is_bool($request->allow_complex_background) ? ($request->allow_complex_background ? 'true' : 'false') : $request->allow_complex_background;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_datamatrix_industrial_barcodes)) {
            $queryParamName = lcfirst('AllowDatamatrixIndustrialBarcodes');
            $queryParamValue = is_bool($request->allow_datamatrix_industrial_barcodes) ? ($request->allow_datamatrix_industrial_barcodes ? 'true' : 'false') : $request->allow_datamatrix_industrial_barcodes;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_decreased_image)) {
            $queryParamName = lcfirst('AllowDecreasedImage');
            $queryParamValue = is_bool($request->allow_decreased_image) ? ($request->allow_decreased_image ? 'true' : 'false') : $request->allow_decreased_image;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_detect_scan_gap)) {
            $queryParamName = lcfirst('AllowDetectScanGap');
            $queryParamValue = is_bool($request->allow_detect_scan_gap) ? ($request->allow_detect_scan_gap ? 'true' : 'false') : $request->allow_detect_scan_gap;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_incorrect_barcodes)) {
            $queryParamName = lcfirst('AllowIncorrectBarcodes');
            $queryParamValue = is_bool($request->allow_incorrect_barcodes) ? ($request->allow_incorrect_barcodes ? 'true' : 'false') : $request->allow_incorrect_barcodes;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_invert_image)) {
            $queryParamName = lcfirst('AllowInvertImage');
            $queryParamValue = is_bool($request->allow_invert_image) ? ($request->allow_invert_image ? 'true' : 'false') : $request->allow_invert_image;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_micro_white_spots_removing)) {
            $queryParamName = lcfirst('AllowMicroWhiteSpotsRemoving');
            $queryParamValue = is_bool($request->allow_micro_white_spots_removing) ? ($request->allow_micro_white_spots_removing ? 'true' : 'false') : $request->allow_micro_white_spots_removing;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_one_d_fast_barcodes_detector)) {
            $queryParamName = lcfirst('AllowOneDFastBarcodesDetector');
            $queryParamValue = is_bool($request->allow_one_d_fast_barcodes_detector) ? ($request->allow_one_d_fast_barcodes_detector ? 'true' : 'false') : $request->allow_one_d_fast_barcodes_detector;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_one_d_wiped_bars_restoration)) {
            $queryParamName = lcfirst('AllowOneDWipedBarsRestoration');
            $queryParamValue = is_bool($request->allow_one_d_wiped_bars_restoration) ? ($request->allow_one_d_wiped_bars_restoration ? 'true' : 'false') : $request->allow_one_d_wiped_bars_restoration;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_qr_micro_qr_restoration)) {
            $queryParamName = lcfirst('AllowQRMicroQrRestoration');
            $queryParamValue = is_bool($request->allow_qr_micro_qr_restoration) ? ($request->allow_qr_micro_qr_restoration ? 'true' : 'false') : $request->allow_qr_micro_qr_restoration;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_regular_image)) {
            $queryParamName = lcfirst('AllowRegularImage');
            $queryParamValue = is_bool($request->allow_regular_image) ? ($request->allow_regular_image ? 'true' : 'false') : $request->allow_regular_image;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_salt_and_pepper_filtering)) {
            $queryParamName = lcfirst('AllowSaltAndPepperFiltering');
            $queryParamValue = is_bool($request->allow_salt_and_pepper_filtering) ? ($request->allow_salt_and_pepper_filtering ? 'true' : 'false') : $request->allow_salt_and_pepper_filtering;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_white_spots_removing)) {
            $queryParamName = lcfirst('AllowWhiteSpotsRemoving');
            $queryParamValue = is_bool($request->allow_white_spots_removing) ? ($request->allow_white_spots_removing ? 'true' : 'false') : $request->allow_white_spots_removing;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->check_more1_d_variants)) {
            $queryParamName = lcfirst('CheckMore1DVariants');
            $queryParamValue = is_bool($request->check_more1_d_variants) ? ($request->check_more1_d_variants ? 'true' : 'false') : $request->check_more1_d_variants;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->fast_scan_only)) {
            $queryParamName = lcfirst('FastScanOnly');
            $queryParamValue = is_bool($request->fast_scan_only) ? ($request->fast_scan_only ? 'true' : 'false') : $request->fast_scan_only;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->allow_additional_restorations)) {
            $queryParamName = lcfirst('AllowAdditionalRestorations');
            $queryParamValue = is_bool($request->allow_additional_restorations) ? ($request->allow_additional_restorations ? 'true' : 'false') : $request->allow_additional_restorations;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->region_likelihood_threshold_percent)) {
            $queryParamName = lcfirst('RegionLikelihoodThresholdPercent');
            $queryParamValue = is_bool($request->region_likelihood_threshold_percent) ? ($request->region_likelihood_threshold_percent ? 'true' : 'false') : $request->region_likelihood_threshold_percent;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (is_array($request->scan_window_sizes)) {
            $queryParamName = lcfirst('ScanWindowSizes');
            $queryParams[$queryParamName] = $request->scan_window_sizes;
        }
        if (isset($request->similarity)) {
            $queryParamName = lcfirst('Similarity');
            $queryParamValue = is_bool($request->similarity) ? ($request->similarity ? 'true' : 'false') : $request->similarity;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->skip_diagonal_search)) {
            $queryParamName = lcfirst('SkipDiagonalSearch');
            $queryParamValue = is_bool($request->skip_diagonal_search) ? ($request->skip_diagonal_search ? 'true' : 'false') : $request->skip_diagonal_search;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->read_tiny_barcodes)) {
            $queryParamName = lcfirst('ReadTinyBarcodes');
            $queryParamValue = is_bool($request->read_tiny_barcodes) ? ($request->read_tiny_barcodes ? 'true' : 'false') : $request->read_tiny_barcodes;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->australian_post_encoding_table)) {
            $queryParamName = lcfirst('AustralianPostEncodingTable');
            $queryParamValue = is_bool($request->australian_post_encoding_table) ? ($request->australian_post_encoding_table ? 'true' : 'false') : $request->australian_post_encoding_table;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->ignore_ending_filling_patterns_for_c_table)) {
            $queryParamName = lcfirst('IgnoreEndingFillingPatternsForCTable');
            $queryParamValue = is_bool($request->ignore_ending_filling_patterns_for_c_table) ? ($request->ignore_ending_filling_patterns_for_c_table ? 'true' : 'false') : $request->ignore_ending_filling_patterns_for_c_table;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->url)) {
            $queryParamName = lcfirst('url');
            $queryParamValue = is_bool($request->url) ? ($request->url ? 'true' : 'false') : $request->url;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }

        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // form params
        $multipart = true;
        $filename = ObjectSerializer::toFormValue($request->image);
        $handle = fopen($filename, 'rb');
        $fsize = filesize($filename);
        $contents = fread($handle, $fsize);
        $fileField = 'image';
        $formParams['image'][] = $contents;
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data', 'application/x-www-form-urlencoded', 'application/octet-stream']
            );
        }

        // for model (json/xml)
        if ($multipart) {
            $multipartContents = [];
            foreach ($formParams as $formParamName => $formParamValues) {
                if (is_array($formParamValues)) {
                    foreach ($formParamValues as $formParamValue) {
                        if ($formParamName === $fileField) {
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $formParamValue,
                                'filename' => $filename
                            ];
                        } else {
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $formParamValue,
                            ];
                        }
                    }
                } else {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValues,
                    ];
                }
            }
            // for HTTP post (form)
            $httpBody = new MultipartStream($multipartContents);

        } elseif ($headers['Content-Type'] === 'application/json') {
            $httpBody = \GuzzleHttp\json_encode($formParams);

        } else {
            // for HTTP post (form)
            $httpBody = $formParams['image'][0];
        }

        if (!$this->config->getAccessToken()) {
            $this->_requestToken();
        }
        $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }

        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
    }

    /**
     * Operation postGenerateMultiple
     *
     * Generate multiple barcodes and return in response stream
     *
     * @param Requests\PostGenerateMultipleRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function postGenerateMultiple(Requests\PostGenerateMultipleRequest $request)
    {
        try {
            list($response) = $this->postGenerateMultipleWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->postGenerateMultipleWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation postGenerateMultipleWithHttpInfo
     *
     * Generate multiple barcodes and return in response stream
     *
     * @param Requests\PostGenerateMultipleRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function postGenerateMultipleWithHttpInfo(Requests\PostGenerateMultipleRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->PostGenerateMultipleRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                }

                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postGenerateMultipleAsync
     *
     * Generate multiple barcodes and return in response stream
     *
     * @param Requests\PostGenerateMultipleRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postGenerateMultipleAsync(Requests\PostGenerateMultipleRequest $request)
    {
        return $this->postGenerateMultipleAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postGenerateMultipleAsyncWithHttpInfo
     *
     * Generate multiple barcodes and return in response stream
     *
     * @param Requests\PostGenerateMultipleRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postGenerateMultipleAsyncWithHttpInfo(Requests\PostGenerateMultipleRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->PostGenerateMultipleRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        //$this->_refreshToken();
                        throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postGenerateMultiple'
     *
     * @param Requests\PostGenerateMultipleRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PostGenerateMultipleRequest(Requests\PostGenerateMultipleRequest $request)
    {
        // verify the required parameter 'generator_params_list' is set
        if (!isset($request->generator_params_list)) {
            throw new InvalidArgumentException('Missing the required parameter $generator_params_list when calling postGenerateMultiple');
        }

        $resourcePath = '/barcode/generateMultiple';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if (isset($request->format)) {
            $queryParamName = lcfirst('format');
            $queryParamValue = is_bool($request->format) ? ($request->format ? 'true' : 'false') : $request->format;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }

        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->generator_params_list)) {
            if (is_string($request->generator_params_list)) {
                $_tempBody = "\"" . $request->generator_params_list . "\"";
            } else {
                $_tempBody = $request->generator_params_list;
            }
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['image/png', 'image/bmp', 'image/gif', 'image/jpeg', 'image/svg+xml', 'image/tiff']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['image/png', 'image/bmp', 'image/gif', 'image/jpeg', 'image/svg+xml', 'image/tiff'],
                ['application/json', 'application/xml']
            );
        }

        // for model (json/xml)
        // $_tempBody is the method argument, if present
        $httpBody = $_tempBody;
        // \stdClass has no __toString(), so we should encode it manually
        if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
            $httpBody = \GuzzleHttp\json_encode($httpBody);
        }

        if (!$this->config->getAccessToken()) {
            $this->_requestToken();
        }
        $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }

        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
    }

    /**
     * Operation putBarcodeGenerateFile
     *
     * Generate barcode and save on server (from query params or from file with json or xml content)
     *
     * @param Requests\PutBarcodeGenerateFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \Aspose\BarCode\Model\ResultImageInfo
     */
    public function putBarcodeGenerateFile(Requests\PutBarcodeGenerateFileRequest $request)
    {
        try {
            list($response) = $this->putBarcodeGenerateFileWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->putBarcodeGenerateFileWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation putBarcodeGenerateFileWithHttpInfo
     *
     * Generate barcode and save on server (from query params or from file with json or xml content)
     *
     * @param Requests\PutBarcodeGenerateFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \Aspose\BarCode\Model\ResultImageInfo, HTTP status code, HTTP response headers (array of strings)
     */
    public function putBarcodeGenerateFileWithHttpInfo(Requests\PutBarcodeGenerateFileRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\ResultImageInfo';
        $request = $this->PutBarcodeGenerateFileRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                }

                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\ResultImageInfo', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\ApiErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation putBarcodeGenerateFileAsync
     *
     * Generate barcode and save on server (from query params or from file with json or xml content)
     *
     * @param Requests\PutBarcodeGenerateFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putBarcodeGenerateFileAsync(Requests\PutBarcodeGenerateFileRequest $request)
    {
        return $this->putBarcodeGenerateFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation putBarcodeGenerateFileAsyncWithHttpInfo
     *
     * Generate barcode and save on server (from query params or from file with json or xml content)
     *
     * @param Requests\PutBarcodeGenerateFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putBarcodeGenerateFileAsyncWithHttpInfo(Requests\PutBarcodeGenerateFileRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\ResultImageInfo';
        $request = $this->PutBarcodeGenerateFileRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        //$this->_refreshToken();
                        throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'putBarcodeGenerateFile'
     *
     * @param Requests\PutBarcodeGenerateFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutBarcodeGenerateFileRequest(Requests\PutBarcodeGenerateFileRequest $request)
    {
        // verify the required parameter 'name' is set
        if (!isset($request->name)) {
            throw new InvalidArgumentException('Missing the required parameter $name when calling putBarcodeGenerateFile');
        }
        // verify the required parameter 'type' is set
        if (!isset($request->type)) {
            throw new InvalidArgumentException('Missing the required parameter $type when calling putBarcodeGenerateFile');
        }
        // verify the required parameter 'text' is set
        if (!isset($request->text)) {
            throw new InvalidArgumentException('Missing the required parameter $text when calling putBarcodeGenerateFile');
        }

        $resourcePath = '/barcode/{name}/generate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if (isset($request->name)) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        if (isset($request->type)) {
            $queryParamName = lcfirst('Type');
            $queryParamValue = is_bool($request->type) ? ($request->type ? 'true' : 'false') : $request->type;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->text)) {
            $queryParamName = lcfirst('Text');
            $queryParamValue = is_bool($request->text) ? ($request->text ? 'true' : 'false') : $request->text;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->two_d_display_text)) {
            $queryParamName = lcfirst('TwoDDisplayText');
            $queryParamValue = is_bool($request->two_d_display_text) ? ($request->two_d_display_text ? 'true' : 'false') : $request->two_d_display_text;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->text_location)) {
            $queryParamName = lcfirst('TextLocation');
            $queryParamValue = is_bool($request->text_location) ? ($request->text_location ? 'true' : 'false') : $request->text_location;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->text_alignment)) {
            $queryParamName = lcfirst('TextAlignment');
            $queryParamValue = is_bool($request->text_alignment) ? ($request->text_alignment ? 'true' : 'false') : $request->text_alignment;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->text_color)) {
            $queryParamName = lcfirst('TextColor');
            $queryParamValue = is_bool($request->text_color) ? ($request->text_color ? 'true' : 'false') : $request->text_color;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->no_wrap)) {
            $queryParamName = lcfirst('NoWrap');
            $queryParamValue = is_bool($request->no_wrap) ? ($request->no_wrap ? 'true' : 'false') : $request->no_wrap;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->resolution)) {
            $queryParamName = lcfirst('Resolution');
            $queryParamValue = is_bool($request->resolution) ? ($request->resolution ? 'true' : 'false') : $request->resolution;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->resolution_x)) {
            $queryParamName = lcfirst('ResolutionX');
            $queryParamValue = is_bool($request->resolution_x) ? ($request->resolution_x ? 'true' : 'false') : $request->resolution_x;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->resolution_y)) {
            $queryParamName = lcfirst('ResolutionY');
            $queryParamValue = is_bool($request->resolution_y) ? ($request->resolution_y ? 'true' : 'false') : $request->resolution_y;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->dimension_x)) {
            $queryParamName = lcfirst('DimensionX');
            $queryParamValue = is_bool($request->dimension_x) ? ($request->dimension_x ? 'true' : 'false') : $request->dimension_x;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->text_space)) {
            $queryParamName = lcfirst('TextSpace');
            $queryParamValue = is_bool($request->text_space) ? ($request->text_space ? 'true' : 'false') : $request->text_space;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->units)) {
            $queryParamName = lcfirst('Units');
            $queryParamValue = is_bool($request->units) ? ($request->units ? 'true' : 'false') : $request->units;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->size_mode)) {
            $queryParamName = lcfirst('SizeMode');
            $queryParamValue = is_bool($request->size_mode) ? ($request->size_mode ? 'true' : 'false') : $request->size_mode;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->bar_height)) {
            $queryParamName = lcfirst('BarHeight');
            $queryParamValue = is_bool($request->bar_height) ? ($request->bar_height ? 'true' : 'false') : $request->bar_height;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->image_height)) {
            $queryParamName = lcfirst('ImageHeight');
            $queryParamValue = is_bool($request->image_height) ? ($request->image_height ? 'true' : 'false') : $request->image_height;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->image_width)) {
            $queryParamName = lcfirst('ImageWidth');
            $queryParamValue = is_bool($request->image_width) ? ($request->image_width ? 'true' : 'false') : $request->image_width;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->rotation_angle)) {
            $queryParamName = lcfirst('RotationAngle');
            $queryParamValue = is_bool($request->rotation_angle) ? ($request->rotation_angle ? 'true' : 'false') : $request->rotation_angle;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->back_color)) {
            $queryParamName = lcfirst('BackColor');
            $queryParamValue = is_bool($request->back_color) ? ($request->back_color ? 'true' : 'false') : $request->back_color;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->bar_color)) {
            $queryParamName = lcfirst('BarColor');
            $queryParamValue = is_bool($request->bar_color) ? ($request->bar_color ? 'true' : 'false') : $request->bar_color;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->border_color)) {
            $queryParamName = lcfirst('BorderColor');
            $queryParamValue = is_bool($request->border_color) ? ($request->border_color ? 'true' : 'false') : $request->border_color;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->border_width)) {
            $queryParamName = lcfirst('BorderWidth');
            $queryParamValue = is_bool($request->border_width) ? ($request->border_width ? 'true' : 'false') : $request->border_width;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->border_dash_style)) {
            $queryParamName = lcfirst('BorderDashStyle');
            $queryParamValue = is_bool($request->border_dash_style) ? ($request->border_dash_style ? 'true' : 'false') : $request->border_dash_style;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->border_visible)) {
            $queryParamName = lcfirst('BorderVisible');
            $queryParamValue = is_bool($request->border_visible) ? ($request->border_visible ? 'true' : 'false') : $request->border_visible;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->enable_checksum)) {
            $queryParamName = lcfirst('EnableChecksum');
            $queryParamValue = is_bool($request->enable_checksum) ? ($request->enable_checksum ? 'true' : 'false') : $request->enable_checksum;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->enable_escape)) {
            $queryParamName = lcfirst('EnableEscape');
            $queryParamValue = is_bool($request->enable_escape) ? ($request->enable_escape ? 'true' : 'false') : $request->enable_escape;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->filled_bars)) {
            $queryParamName = lcfirst('FilledBars');
            $queryParamValue = is_bool($request->filled_bars) ? ($request->filled_bars ? 'true' : 'false') : $request->filled_bars;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->always_show_checksum)) {
            $queryParamName = lcfirst('AlwaysShowChecksum');
            $queryParamValue = is_bool($request->always_show_checksum) ? ($request->always_show_checksum ? 'true' : 'false') : $request->always_show_checksum;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->wide_narrow_ratio)) {
            $queryParamName = lcfirst('WideNarrowRatio');
            $queryParamValue = is_bool($request->wide_narrow_ratio) ? ($request->wide_narrow_ratio ? 'true' : 'false') : $request->wide_narrow_ratio;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->validate_text)) {
            $queryParamName = lcfirst('ValidateText');
            $queryParamValue = is_bool($request->validate_text) ? ($request->validate_text ? 'true' : 'false') : $request->validate_text;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->supplement_data)) {
            $queryParamName = lcfirst('SupplementData');
            $queryParamValue = is_bool($request->supplement_data) ? ($request->supplement_data ? 'true' : 'false') : $request->supplement_data;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->supplement_space)) {
            $queryParamName = lcfirst('SupplementSpace');
            $queryParamValue = is_bool($request->supplement_space) ? ($request->supplement_space ? 'true' : 'false') : $request->supplement_space;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->bar_width_reduction)) {
            $queryParamName = lcfirst('BarWidthReduction');
            $queryParamValue = is_bool($request->bar_width_reduction) ? ($request->bar_width_reduction ? 'true' : 'false') : $request->bar_width_reduction;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->use_anti_alias)) {
            $queryParamName = lcfirst('UseAntiAlias');
            $queryParamValue = is_bool($request->use_anti_alias) ? ($request->use_anti_alias ? 'true' : 'false') : $request->use_anti_alias;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->storage)) {
            $queryParamName = lcfirst('storage');
            $queryParamValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->folder)) {
            $queryParamName = lcfirst('folder');
            $queryParamValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->format)) {
            $queryParamName = lcfirst('format');
            $queryParamValue = is_bool($request->format) ? ($request->format ? 'true' : 'false') : $request->format;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }

        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data', 'application/x-www-form-urlencoded', 'application/json', 'application/xml']
            );
        }

        // for model (json/xml)

        if (!$this->config->getAccessToken()) {
            $this->_requestToken();
        }
        $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }

        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
    }

    /**
     * Operation putBarcodeRecognizeFromBody
     *
     * Recognition of a barcode from file on server with parameters in body.
     *
     * @param Requests\PutBarcodeRecognizeFromBodyRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \Aspose\BarCode\Model\BarcodeResponseList
     */
    public function putBarcodeRecognizeFromBody(Requests\PutBarcodeRecognizeFromBodyRequest $request)
    {
        try {
            list($response) = $this->putBarcodeRecognizeFromBodyWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->putBarcodeRecognizeFromBodyWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation putBarcodeRecognizeFromBodyWithHttpInfo
     *
     * Recognition of a barcode from file on server with parameters in body.
     *
     * @param Requests\PutBarcodeRecognizeFromBodyRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \Aspose\BarCode\Model\BarcodeResponseList, HTTP status code, HTTP response headers (array of strings)
     */
    public function putBarcodeRecognizeFromBodyWithHttpInfo(Requests\PutBarcodeRecognizeFromBodyRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\BarcodeResponseList';
        $request = $this->PutBarcodeRecognizeFromBodyRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                }

                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\BarcodeResponseList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation putBarcodeRecognizeFromBodyAsync
     *
     * Recognition of a barcode from file on server with parameters in body.
     *
     * @param Requests\PutBarcodeRecognizeFromBodyRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putBarcodeRecognizeFromBodyAsync(Requests\PutBarcodeRecognizeFromBodyRequest $request)
    {
        return $this->putBarcodeRecognizeFromBodyAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation putBarcodeRecognizeFromBodyAsyncWithHttpInfo
     *
     * Recognition of a barcode from file on server with parameters in body.
     *
     * @param Requests\PutBarcodeRecognizeFromBodyRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putBarcodeRecognizeFromBodyAsyncWithHttpInfo(Requests\PutBarcodeRecognizeFromBodyRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\BarcodeResponseList';
        $request = $this->PutBarcodeRecognizeFromBodyRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        //$this->_refreshToken();
                        throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'putBarcodeRecognizeFromBody'
     *
     * @param Requests\PutBarcodeRecognizeFromBodyRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutBarcodeRecognizeFromBodyRequest(Requests\PutBarcodeRecognizeFromBodyRequest $request)
    {
        // verify the required parameter 'name' is set
        if (!isset($request->name)) {
            throw new InvalidArgumentException('Missing the required parameter $name when calling putBarcodeRecognizeFromBody');
        }
        // verify the required parameter 'reader_params' is set
        if (!isset($request->reader_params)) {
            throw new InvalidArgumentException('Missing the required parameter $reader_params when calling putBarcodeRecognizeFromBody');
        }

        $resourcePath = '/barcode/{name}/recognize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if (isset($request->name)) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        if (isset($request->type)) {
            $queryParamName = lcfirst('type');
            $queryParamValue = is_bool($request->type) ? ($request->type ? 'true' : 'false') : $request->type;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->storage)) {
            $queryParamName = lcfirst('storage');
            $queryParamValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->folder)) {
            $queryParamName = lcfirst('folder');
            $queryParamValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }

        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->reader_params)) {
            if (is_string($request->reader_params)) {
                $_tempBody = "\"" . $request->reader_params . "\"";
            } else {
                $_tempBody = $request->reader_params;
            }
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        // $_tempBody is the method argument, if present
        $httpBody = $_tempBody;
        // \stdClass has no __toString(), so we should encode it manually
        if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
            $httpBody = \GuzzleHttp\json_encode($httpBody);
        }

        if (!$this->config->getAccessToken()) {
            $this->_requestToken();
        }
        $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }

        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
    }

    /**
     * Operation putGenerateMultiple
     *
     * Generate image with multiple barcodes and put new file on server
     *
     * @param Requests\PutGenerateMultipleRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \Aspose\BarCode\Model\ResultImageInfo
     */
    public function putGenerateMultiple(Requests\PutGenerateMultipleRequest $request)
    {
        try {
            list($response) = $this->putGenerateMultipleWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->putGenerateMultipleWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation putGenerateMultipleWithHttpInfo
     *
     * Generate image with multiple barcodes and put new file on server
     *
     * @param Requests\PutGenerateMultipleRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \Aspose\BarCode\Model\ResultImageInfo, HTTP status code, HTTP response headers (array of strings)
     */
    public function putGenerateMultipleWithHttpInfo(Requests\PutGenerateMultipleRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\ResultImageInfo';
        $request = $this->PutGenerateMultipleRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                }

                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\ResultImageInfo', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\ApiErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation putGenerateMultipleAsync
     *
     * Generate image with multiple barcodes and put new file on server
     *
     * @param Requests\PutGenerateMultipleRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putGenerateMultipleAsync(Requests\PutGenerateMultipleRequest $request)
    {
        return $this->putGenerateMultipleAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation putGenerateMultipleAsyncWithHttpInfo
     *
     * Generate image with multiple barcodes and put new file on server
     *
     * @param Requests\PutGenerateMultipleRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putGenerateMultipleAsyncWithHttpInfo(Requests\PutGenerateMultipleRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\ResultImageInfo';
        $request = $this->PutGenerateMultipleRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        //$this->_refreshToken();
                        throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'putGenerateMultiple'
     *
     * @param Requests\PutGenerateMultipleRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function PutGenerateMultipleRequest(Requests\PutGenerateMultipleRequest $request)
    {
        // verify the required parameter 'name' is set
        if (!isset($request->name)) {
            throw new InvalidArgumentException('Missing the required parameter $name when calling putGenerateMultiple');
        }
        // verify the required parameter 'generator_params_list' is set
        if (!isset($request->generator_params_list)) {
            throw new InvalidArgumentException('Missing the required parameter $generator_params_list when calling putGenerateMultiple');
        }

        $resourcePath = '/barcode/{name}/generateMultiple';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if (isset($request->name)) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        if (isset($request->format)) {
            $queryParamName = lcfirst('format');
            $queryParamValue = is_bool($request->format) ? ($request->format ? 'true' : 'false') : $request->format;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->folder)) {
            $queryParamName = lcfirst('folder');
            $queryParamValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->storage)) {
            $queryParamName = lcfirst('storage');
            $queryParamValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }

        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->generator_params_list)) {
            if (is_string($request->generator_params_list)) {
                $_tempBody = "\"" . $request->generator_params_list . "\"";
            } else {
                $_tempBody = $request->generator_params_list;
            }
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json', 'application/xml']
            );
        }

        // for model (json/xml)
        // $_tempBody is the method argument, if present
        $httpBody = $_tempBody;
        // \stdClass has no __toString(), so we should encode it manually
        if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
            $httpBody = \GuzzleHttp\json_encode($httpBody);
        }

        if (!$this->config->getAccessToken()) {
            $this->_requestToken();
        }
        $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }

        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
    }

    /**
     * Operation scanBarcode
     *
     * Quickly scan a barcode from an image.
     *
     * @param Requests\ScanBarcodeRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \Aspose\BarCode\Model\BarcodeResponseList
     */
    public function scanBarcode(Requests\ScanBarcodeRequest $request)
    {
        try {
            list($response) = $this->scanBarcodeWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->scanBarcodeWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation scanBarcodeWithHttpInfo
     *
     * Quickly scan a barcode from an image.
     *
     * @param Requests\ScanBarcodeRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \Aspose\BarCode\Model\BarcodeResponseList, HTTP status code, HTTP response headers (array of strings)
     */
    public function scanBarcodeWithHttpInfo(Requests\ScanBarcodeRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\BarcodeResponseList';
        $request = $this->ScanBarcodeRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                }

                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\BarcodeResponseList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\ApiErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation scanBarcodeAsync
     *
     * Quickly scan a barcode from an image.
     *
     * @param Requests\ScanBarcodeRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scanBarcodeAsync(Requests\ScanBarcodeRequest $request)
    {
        return $this->scanBarcodeAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation scanBarcodeAsyncWithHttpInfo
     *
     * Quickly scan a barcode from an image.
     *
     * @param Requests\ScanBarcodeRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scanBarcodeAsyncWithHttpInfo(Requests\ScanBarcodeRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\BarcodeResponseList';
        $request = $this->ScanBarcodeRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    if ($exception instanceof RepeatRequestException) {
                        //$this->_refreshToken();
                        throw new RepeatRequestException('Request must be retried', $statusCode, $response->getHeaders(), $response->getBody());
                    }

                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'scanBarcode'
     *
     * @param Requests\ScanBarcodeRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ScanBarcodeRequest(Requests\ScanBarcodeRequest $request)
    {
        // verify the required parameter 'image_file' is set
        if (!isset($request->image_file)) {
            throw new InvalidArgumentException('Missing the required parameter $image_file when calling scanBarcode');
        }

        $resourcePath = '/barcode/scan';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // form params
        $multipart = true;
        $filename = ObjectSerializer::toFormValue($request->image_file);
        $handle = fopen($filename, 'rb');
        $fsize = filesize($filename);
        $contents = fread($handle, $fsize);
        $fileField = 'imageFile';
        $formParams['imageFile'][] = $contents;

        foreach ($request->decode_types as $item) {
            $formParams['decodeTypes'][] = ObjectSerializer::toFormValue($item);
        }

        if (isset($request->timeout)) {
            $formParams['timeout'] = ObjectSerializer::toFormValue($request->timeout);
        }

        if (isset($request->checksum_validation)) {
            $formParams['checksumValidation'] = ObjectSerializer::toFormValue($request->checksum_validation);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if ($multipart) {
            $multipartContents = [];
            foreach ($formParams as $formParamName => $formParamValues) {
                if (is_array($formParamValues)) {
                    foreach ($formParamValues as $formParamValue) {
                        if ($formParamName === $fileField) {
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $formParamValue,
                                'filename' => $filename
                            ];
                        } else {
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $formParamValue,
                            ];
                        }
                    }
                } else {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValues,
                    ];
                }
            }
            // for HTTP post (form)
            $httpBody = new MultipartStream($multipartContents);

        } elseif ($headers['Content-Type'] === 'application/json') {
            $httpBody = \GuzzleHttp\json_encode($formParams);

        } else {
            // for HTTP post (form)
            $httpBody = $formParams['imageFile'][0];
        }

        if (!$this->config->getAccessToken()) {
            $this->_requestToken();
        }
        $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }

        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
    }

    /**
     * Create http client option
     *
     * @throws RuntimeException on file opening failure
     * @return array of http client options
     */
    private function _createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    /**
     * Executes response logging
     */
    private function _writeResponseLog($statusCode, $headers, $body)
    {
        $logInfo = "\nResponse: $statusCode \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }

    /**
     * Executes request logging
     */
    private function _writeRequestLog($method, $url, $headers, $body)
    {
        $logInfo = "\n$method: $url \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }

    /**
     * Executes header and boy formatting
     */
    private function _writeHeadersAndBody($logInfo, $headers, $body)
    {
        foreach ($headers as $name => $value) {
            $logInfo .= $name . ': ' . $value . '\n';
        }

        return $logInfo .= 'Body: ' . $body . '\n';
    }

    /**
     * Executes url parsing
     */
    private function _parseURL($url, $queryParams)
    {
        // parse the url
        $UrlToSign = trim($url, '/');
        $urlQuery = preg_replace('/%5B[0-9]+%5D=/', '=', http_build_query($queryParams));

        $urlPartToSign = $this->config->getBasePath() . '/' . parse_url($UrlToSign, PHP_URL_HOST) . parse_url($UrlToSign, PHP_URL_PATH) . '?' . $urlQuery;

        return $urlPartToSign;
    }

    /**
     * Gets a request token from server
     */
    private function _requestToken()
    {
        $requestUrl = $this->config->getAuthUrl();

        $response = $this->client->request('POST', $requestUrl, [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => $this->config->getClientId(),
                'client_secret' => $this->config->getClientSecret(),
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        $this->config->setAccessToken($result['access_token']);
    }
}
