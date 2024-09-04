<?php

declare(strict_types=1);
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GenerateApi.php">
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

class GenerateApi
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
     * Operation barcodeGenerateBarcodeTypeGet
     *
     * Generate barcode using GET request with parameters in route and query string.
     *
     * @param Requests\BarcodeGenerateBarcodeTypeGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function barcodeGenerateBarcodeTypeGet(Requests\BarcodeGenerateBarcodeTypeGetRequest $request)
    {
        try {
            list($response) = $this->barcodeGenerateBarcodeTypeGetWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->barcodeGenerateBarcodeTypeGetWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation barcodeGenerateBarcodeTypeGetWithHttpInfo
     *
     * Generate barcode using GET request with parameters in route and query string.
     *
     * @param Requests\BarcodeGenerateBarcodeTypeGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function barcodeGenerateBarcodeTypeGetWithHttpInfo(Requests\BarcodeGenerateBarcodeTypeGetRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->BarcodeGenerateBarcodeTypeGetRequest($request);

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
                case 401:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\ApiErrorResponse', $e->getResponseHeaders());
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
     * Operation barcodeGenerateBarcodeTypeGetAsync
     *
     * Generate barcode using GET request with parameters in route and query string.
     *
     * @param Requests\BarcodeGenerateBarcodeTypeGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function barcodeGenerateBarcodeTypeGetAsync(Requests\BarcodeGenerateBarcodeTypeGetRequest $request)
    {
        return $this->barcodeGenerateBarcodeTypeGetAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation barcodeGenerateBarcodeTypeGetAsyncWithHttpInfo
     *
     * Generate barcode using GET request with parameters in route and query string.
     *
     * @param Requests\BarcodeGenerateBarcodeTypeGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function barcodeGenerateBarcodeTypeGetAsyncWithHttpInfo(Requests\BarcodeGenerateBarcodeTypeGetRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->BarcodeGenerateBarcodeTypeGetRequest($request);

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
     * Create request for operation 'barcodeGenerateBarcodeTypeGet'
     *
     * @param Requests\BarcodeGenerateBarcodeTypeGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function BarcodeGenerateBarcodeTypeGetRequest(Requests\BarcodeGenerateBarcodeTypeGetRequest $request)
    {
        // verify the required parameter 'barcode_type' is set
        if (!isset($request->barcode_type)) {
            throw new InvalidArgumentException('Missing the required parameter $barcode_type when calling barcodeGenerateBarcodeTypeGet');
        }
        // verify the required parameter 'data_type' is set
        if (!isset($request->data_type)) {
            throw new InvalidArgumentException('Missing the required parameter $data_type when calling barcodeGenerateBarcodeTypeGet');
        }
        // verify the required parameter 'data' is set
        if (!isset($request->data)) {
            throw new InvalidArgumentException('Missing the required parameter $data when calling barcodeGenerateBarcodeTypeGet');
        }

        $resourcePath = '/barcode/generate/{barcodeType}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if (isset($request->barcode_type)) {
            $localName = lcfirst('barcodeType');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->barcode_type), $resourcePath);
        }
        if (isset($request->data_type)) {
            $queryParamName = lcfirst('DataType');
            $queryParamValue = is_bool($request->data_type) ? ($request->data_type ? 'true' : 'false') : $request->data_type;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->data)) {
            $queryParamName = lcfirst('Data');
            $queryParamValue = is_bool($request->data) ? ($request->data ? 'true' : 'false') : $request->data;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->image_format)) {
            $queryParamName = lcfirst('ImageFormat');
            $queryParamValue = is_bool($request->image_format) ? ($request->image_format ? 'true' : 'false') : $request->image_format;
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
        if (isset($request->foreground_color)) {
            $queryParamName = lcfirst('ForegroundColor');
            $queryParamValue = is_bool($request->foreground_color) ? ($request->foreground_color ? 'true' : 'false') : $request->foreground_color;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->background_color)) {
            $queryParamName = lcfirst('BackgroundColor');
            $queryParamValue = is_bool($request->background_color) ? ($request->background_color ? 'true' : 'false') : $request->background_color;
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
        if (isset($request->resolution)) {
            $queryParamName = lcfirst('Resolution');
            $queryParamValue = is_bool($request->resolution) ? ($request->resolution ? 'true' : 'false') : $request->resolution;
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

        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['image/png', 'image/bmp', 'image/gif', 'image/jpeg', 'image/svg+xml', 'image/tiff', 'application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['image/png', 'image/bmp', 'image/gif', 'image/jpeg', 'image/svg+xml', 'image/tiff', 'application/json', 'application/xml'],
                []
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
     * Operation barcodeGenerateBodyPost
     *
     * Generate barcode using POST request with parameters in body in json or xml format.
     *
     * @param Requests\BarcodeGenerateBodyPostRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function barcodeGenerateBodyPost(Requests\BarcodeGenerateBodyPostRequest $request)
    {
        try {
            list($response) = $this->barcodeGenerateBodyPostWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->barcodeGenerateBodyPostWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation barcodeGenerateBodyPostWithHttpInfo
     *
     * Generate barcode using POST request with parameters in body in json or xml format.
     *
     * @param Requests\BarcodeGenerateBodyPostRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function barcodeGenerateBodyPostWithHttpInfo(Requests\BarcodeGenerateBodyPostRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->BarcodeGenerateBodyPostRequest($request);

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
                case 401:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\ApiErrorResponse', $e->getResponseHeaders());
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
     * Operation barcodeGenerateBodyPostAsync
     *
     * Generate barcode using POST request with parameters in body in json or xml format.
     *
     * @param Requests\BarcodeGenerateBodyPostRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function barcodeGenerateBodyPostAsync(Requests\BarcodeGenerateBodyPostRequest $request)
    {
        return $this->barcodeGenerateBodyPostAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation barcodeGenerateBodyPostAsyncWithHttpInfo
     *
     * Generate barcode using POST request with parameters in body in json or xml format.
     *
     * @param Requests\BarcodeGenerateBodyPostRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function barcodeGenerateBodyPostAsyncWithHttpInfo(Requests\BarcodeGenerateBodyPostRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->BarcodeGenerateBodyPostRequest($request);

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
     * Create request for operation 'barcodeGenerateBodyPost'
     *
     * @param Requests\BarcodeGenerateBodyPostRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function BarcodeGenerateBodyPostRequest(Requests\BarcodeGenerateBodyPostRequest $request)
    {
        // verify the required parameter 'generate_params' is set
        if (!isset($request->generate_params)) {
            throw new InvalidArgumentException('Missing the required parameter $generate_params when calling barcodeGenerateBodyPost');
        }

        $resourcePath = '/barcode/generate-body';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->generate_params)) {
            if (is_string($request->generate_params)) {
                $_tempBody = "\"" . $request->generate_params . "\"";
            } else {
                $_tempBody = $request->generate_params;
            }
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['image/png', 'image/bmp', 'image/gif', 'image/jpeg', 'image/svg+xml', 'image/tiff', 'application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['image/png', 'image/bmp', 'image/gif', 'image/jpeg', 'image/svg+xml', 'image/tiff', 'application/json', 'application/xml'],
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
     * Operation barcodeGenerateFormPost
     *
     * Generate barcode using POST request with parameters in url ecncoded form.
     *
     * @param Requests\BarcodeGenerateFormPostRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function barcodeGenerateFormPost(Requests\BarcodeGenerateFormPostRequest $request)
    {
        try {
            list($response) = $this->barcodeGenerateFormPostWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->barcodeGenerateFormPostWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation barcodeGenerateFormPostWithHttpInfo
     *
     * Generate barcode using POST request with parameters in url ecncoded form.
     *
     * @param Requests\BarcodeGenerateFormPostRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function barcodeGenerateFormPostWithHttpInfo(Requests\BarcodeGenerateFormPostRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->BarcodeGenerateFormPostRequest($request);

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
                case 401:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\ApiErrorResponse', $e->getResponseHeaders());
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
     * Operation barcodeGenerateFormPostAsync
     *
     * Generate barcode using POST request with parameters in url ecncoded form.
     *
     * @param Requests\BarcodeGenerateFormPostRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function barcodeGenerateFormPostAsync(Requests\BarcodeGenerateFormPostRequest $request)
    {
        return $this->barcodeGenerateFormPostAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation barcodeGenerateFormPostAsyncWithHttpInfo
     *
     * Generate barcode using POST request with parameters in url ecncoded form.
     *
     * @param Requests\BarcodeGenerateFormPostRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function barcodeGenerateFormPostAsyncWithHttpInfo(Requests\BarcodeGenerateFormPostRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->BarcodeGenerateFormPostRequest($request);

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
     * Create request for operation 'barcodeGenerateFormPost'
     *
     * @param Requests\BarcodeGenerateFormPostRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function BarcodeGenerateFormPostRequest(Requests\BarcodeGenerateFormPostRequest $request)
    {
        // verify the required parameter 'barcode_type' is set
        if (!isset($request->barcode_type)) {
            throw new InvalidArgumentException('Missing the required parameter $barcode_type when calling barcodeGenerateFormPost');
        }
        // verify the required parameter 'data_type' is set
        if (!isset($request->data_type)) {
            throw new InvalidArgumentException('Missing the required parameter $data_type when calling barcodeGenerateFormPost');
        }
        // verify the required parameter 'data' is set
        if (!isset($request->data)) {
            throw new InvalidArgumentException('Missing the required parameter $data when calling barcodeGenerateFormPost');
        }

        $resourcePath = '/barcode/generate-form';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // form params
        if (isset($request->barcode_type)) {
            $formParams['barcodeType'][] = ObjectSerializer::toFormValue($request->barcode_type);
        }

        if (isset($request->data_type)) {
            $formParams['DataType'][] = ObjectSerializer::toFormValue($request->data_type);
        }

        if (isset($request->data)) {
            $formParams['Data'][] = ObjectSerializer::toFormValue($request->data);
        }

        if (isset($request->image_format)) {
            $formParams['ImageFormat'][] = ObjectSerializer::toFormValue($request->image_format);
        }

        if (isset($request->two_d_display_text)) {
            $formParams['TwoDDisplayText'][] = ObjectSerializer::toFormValue($request->two_d_display_text);
        }

        if (isset($request->text_location)) {
            $formParams['TextLocation'][] = ObjectSerializer::toFormValue($request->text_location);
        }

        if (isset($request->text_alignment)) {
            $formParams['TextAlignment'][] = ObjectSerializer::toFormValue($request->text_alignment);
        }

        if (isset($request->foreground_color)) {
            $formParams['ForegroundColor'][] = ObjectSerializer::toFormValue($request->foreground_color);
        }

        if (isset($request->background_color)) {
            $formParams['BackgroundColor'][] = ObjectSerializer::toFormValue($request->background_color);
        }

        if (isset($request->units)) {
            $formParams['Units'][] = ObjectSerializer::toFormValue($request->units);
        }

        if (isset($request->resolution)) {
            $formParams['Resolution'][] = ObjectSerializer::toFormValue($request->resolution);
        }

        if (isset($request->image_height)) {
            $formParams['ImageHeight'][] = ObjectSerializer::toFormValue($request->image_height);
        }

        if (isset($request->image_width)) {
            $formParams['ImageWidth'][] = ObjectSerializer::toFormValue($request->image_width);
        }

        if (isset($request->rotation_angle)) {
            $formParams['RotationAngle'][] = ObjectSerializer::toFormValue($request->rotation_angle);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['image/png', 'image/bmp', 'image/gif', 'image/jpeg', 'image/svg+xml', 'image/tiff', 'application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['image/png', 'image/bmp', 'image/gif', 'image/jpeg', 'image/svg+xml', 'image/tiff', 'application/json', 'application/xml'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if ($multipart) {
            $multipartContents = [];
            foreach ($formParams as $formParamName => $formParamValues) {
                foreach ($formParamValues as $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue,
                        'filename' => $filename
                    ];
                }
            }
            // for HTTP post (form)
            $httpBody = new MultipartStream($multipartContents);

        } elseif ($headers['Content-Type'] === 'application/json') {
            $httpBody = \GuzzleHttp\json_encode($formParams);

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
