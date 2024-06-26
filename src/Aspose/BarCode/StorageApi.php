<?php

declare(strict_types=1);
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="StorageApi.php">
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

class StorageApi
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
     * Operation getDiscUsage
     *
     * Get disc usage
     *
     * @param Requests\GetDiscUsageRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \Aspose\BarCode\Model\DiscUsage
     */
    public function getDiscUsage(Requests\GetDiscUsageRequest $request)
    {
        try {
            list($response) = $this->getDiscUsageWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->getDiscUsageWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation getDiscUsageWithHttpInfo
     *
     * Get disc usage
     *
     * @param Requests\GetDiscUsageRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \Aspose\BarCode\Model\DiscUsage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDiscUsageWithHttpInfo(Requests\GetDiscUsageRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\DiscUsage';
        $request = $this->GetDiscUsageRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\DiscUsage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getDiscUsageAsync
     *
     * Get disc usage
     *
     * @param Requests\GetDiscUsageRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDiscUsageAsync(Requests\GetDiscUsageRequest $request)
    {
        return $this->getDiscUsageAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDiscUsageAsyncWithHttpInfo
     *
     * Get disc usage
     *
     * @param Requests\GetDiscUsageRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDiscUsageAsyncWithHttpInfo(Requests\GetDiscUsageRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\DiscUsage';
        $request = $this->GetDiscUsageRequest($request);

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
     * Create request for operation 'getDiscUsage'
     *
     * @param Requests\GetDiscUsageRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetDiscUsageRequest(Requests\GetDiscUsageRequest $request)
    {

        $resourcePath = '/barcode/storage/disc';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if (isset($request->storage_name)) {
            $queryParamName = lcfirst('storageName');
            $queryParamValue = is_bool($request->storage_name) ? ($request->storage_name ? 'true' : 'false') : $request->storage_name;
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
     * Operation getFileVersions
     *
     * Get file versions
     *
     * @param Requests\GetFileVersionsRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \Aspose\BarCode\Model\FileVersions
     */
    public function getFileVersions(Requests\GetFileVersionsRequest $request)
    {
        try {
            list($response) = $this->getFileVersionsWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->getFileVersionsWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation getFileVersionsWithHttpInfo
     *
     * Get file versions
     *
     * @param Requests\GetFileVersionsRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \Aspose\BarCode\Model\FileVersions, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFileVersionsWithHttpInfo(Requests\GetFileVersionsRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\FileVersions';
        $request = $this->GetFileVersionsRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\FileVersions', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getFileVersionsAsync
     *
     * Get file versions
     *
     * @param Requests\GetFileVersionsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFileVersionsAsync(Requests\GetFileVersionsRequest $request)
    {
        return $this->getFileVersionsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFileVersionsAsyncWithHttpInfo
     *
     * Get file versions
     *
     * @param Requests\GetFileVersionsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFileVersionsAsyncWithHttpInfo(Requests\GetFileVersionsRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\FileVersions';
        $request = $this->GetFileVersionsRequest($request);

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
     * Create request for operation 'getFileVersions'
     *
     * @param Requests\GetFileVersionsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetFileVersionsRequest(Requests\GetFileVersionsRequest $request)
    {
        // verify the required parameter 'path' is set
        if (!isset($request->path)) {
            throw new InvalidArgumentException('Missing the required parameter $path when calling getFileVersions');
        }

        $resourcePath = '/barcode/storage/version/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if (isset($request->path)) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->path), $resourcePath);
        }
        if (isset($request->storage_name)) {
            $queryParamName = lcfirst('storageName');
            $queryParamValue = is_bool($request->storage_name) ? ($request->storage_name ? 'true' : 'false') : $request->storage_name;
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
     * Operation objectExists
     *
     * Check if file or folder exists
     *
     * @param Requests\ObjectExistsRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \Aspose\BarCode\Model\ObjectExist
     */
    public function objectExists(Requests\ObjectExistsRequest $request)
    {
        try {
            list($response) = $this->objectExistsWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->objectExistsWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation objectExistsWithHttpInfo
     *
     * Check if file or folder exists
     *
     * @param Requests\ObjectExistsRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \Aspose\BarCode\Model\ObjectExist, HTTP status code, HTTP response headers (array of strings)
     */
    public function objectExistsWithHttpInfo(Requests\ObjectExistsRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\ObjectExist';
        $request = $this->ObjectExistsRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\ObjectExist', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation objectExistsAsync
     *
     * Check if file or folder exists
     *
     * @param Requests\ObjectExistsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function objectExistsAsync(Requests\ObjectExistsRequest $request)
    {
        return $this->objectExistsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation objectExistsAsyncWithHttpInfo
     *
     * Check if file or folder exists
     *
     * @param Requests\ObjectExistsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function objectExistsAsyncWithHttpInfo(Requests\ObjectExistsRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\ObjectExist';
        $request = $this->ObjectExistsRequest($request);

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
     * Create request for operation 'objectExists'
     *
     * @param Requests\ObjectExistsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ObjectExistsRequest(Requests\ObjectExistsRequest $request)
    {
        // verify the required parameter 'path' is set
        if (!isset($request->path)) {
            throw new InvalidArgumentException('Missing the required parameter $path when calling objectExists');
        }

        $resourcePath = '/barcode/storage/exist/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if (isset($request->path)) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->path), $resourcePath);
        }
        if (isset($request->storage_name)) {
            $queryParamName = lcfirst('storageName');
            $queryParamValue = is_bool($request->storage_name) ? ($request->storage_name ? 'true' : 'false') : $request->storage_name;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->version_id)) {
            $queryParamName = lcfirst('versionId');
            $queryParamValue = is_bool($request->version_id) ? ($request->version_id ? 'true' : 'false') : $request->version_id;
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
     * Operation storageExists
     *
     * Check if storage exists
     *
     * @param Requests\StorageExistsRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \Aspose\BarCode\Model\StorageExist
     */
    public function storageExists(Requests\StorageExistsRequest $request)
    {
        try {
            list($response) = $this->storageExistsWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->storageExistsWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation storageExistsWithHttpInfo
     *
     * Check if storage exists
     *
     * @param Requests\StorageExistsRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \Aspose\BarCode\Model\StorageExist, HTTP status code, HTTP response headers (array of strings)
     */
    public function storageExistsWithHttpInfo(Requests\StorageExistsRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\StorageExist';
        $request = $this->StorageExistsRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\StorageExist', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation storageExistsAsync
     *
     * Check if storage exists
     *
     * @param Requests\StorageExistsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function storageExistsAsync(Requests\StorageExistsRequest $request)
    {
        return $this->storageExistsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation storageExistsAsyncWithHttpInfo
     *
     * Check if storage exists
     *
     * @param Requests\StorageExistsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function storageExistsAsyncWithHttpInfo(Requests\StorageExistsRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\StorageExist';
        $request = $this->StorageExistsRequest($request);

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
     * Create request for operation 'storageExists'
     *
     * @param Requests\StorageExistsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function StorageExistsRequest(Requests\StorageExistsRequest $request)
    {
        // verify the required parameter 'storage_name' is set
        if (!isset($request->storage_name)) {
            throw new InvalidArgumentException('Missing the required parameter $storage_name when calling storageExists');
        }

        $resourcePath = '/barcode/storage/{storageName}/exist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if (isset($request->storage_name)) {
            $localName = lcfirst('storageName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->storage_name), $resourcePath);
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
