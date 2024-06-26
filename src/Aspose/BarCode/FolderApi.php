<?php

declare(strict_types=1);
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FolderApi.php">
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

class FolderApi
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
     * Operation copyFolder
     *
     * Copy folder
     *
     * @param Requests\CopyFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function copyFolder(Requests\CopyFolderRequest $request)
    {
        try {
            $this->copyFolderWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
            $this->copyFolderWithHttpInfo($request);
        }
    }

    /**
     * Operation copyFolderWithHttpInfo
     *
     * Copy folder
     *
     * @param Requests\CopyFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function copyFolderWithHttpInfo(Requests\CopyFolderRequest $request)
    {
        $returnType = '';
        $request = $this->CopyFolderRequest($request);

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

            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation copyFolderAsync
     *
     * Copy folder
     *
     * @param Requests\CopyFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function copyFolderAsync(Requests\CopyFolderRequest $request)
    {
        return $this->copyFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation copyFolderAsyncWithHttpInfo
     *
     * Copy folder
     *
     * @param Requests\CopyFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function copyFolderAsyncWithHttpInfo(Requests\CopyFolderRequest $request)
    {
        $returnType = '';
        $request = $this->CopyFolderRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'copyFolder'
     *
     * @param Requests\CopyFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function CopyFolderRequest(Requests\CopyFolderRequest $request)
    {
        // verify the required parameter 'src_path' is set
        if (!isset($request->src_path)) {
            throw new InvalidArgumentException('Missing the required parameter $src_path when calling copyFolder');
        }
        // verify the required parameter 'dest_path' is set
        if (!isset($request->dest_path)) {
            throw new InvalidArgumentException('Missing the required parameter $dest_path when calling copyFolder');
        }

        $resourcePath = '/barcode/storage/folder/copy/{srcPath}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if (isset($request->src_path)) {
            $localName = lcfirst('srcPath');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->src_path), $resourcePath);
        }
        if (isset($request->dest_path)) {
            $queryParamName = lcfirst('destPath');
            $queryParamValue = is_bool($request->dest_path) ? ($request->dest_path ? 'true' : 'false') : $request->dest_path;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->src_storage_name)) {
            $queryParamName = lcfirst('srcStorageName');
            $queryParamValue = is_bool($request->src_storage_name) ? ($request->src_storage_name ? 'true' : 'false') : $request->src_storage_name;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->dest_storage_name)) {
            $queryParamName = lcfirst('destStorageName');
            $queryParamValue = is_bool($request->dest_storage_name) ? ($request->dest_storage_name ? 'true' : 'false') : $request->dest_storage_name;
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
     * Operation createFolder
     *
     * Create the folder
     *
     * @param Requests\CreateFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function createFolder(Requests\CreateFolderRequest $request)
    {
        try {
            $this->createFolderWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
            $this->createFolderWithHttpInfo($request);
        }
    }

    /**
     * Operation createFolderWithHttpInfo
     *
     * Create the folder
     *
     * @param Requests\CreateFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createFolderWithHttpInfo(Requests\CreateFolderRequest $request)
    {
        $returnType = '';
        $request = $this->CreateFolderRequest($request);

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

            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation createFolderAsync
     *
     * Create the folder
     *
     * @param Requests\CreateFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFolderAsync(Requests\CreateFolderRequest $request)
    {
        return $this->createFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createFolderAsyncWithHttpInfo
     *
     * Create the folder
     *
     * @param Requests\CreateFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFolderAsyncWithHttpInfo(Requests\CreateFolderRequest $request)
    {
        $returnType = '';
        $request = $this->CreateFolderRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'createFolder'
     *
     * @param Requests\CreateFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function CreateFolderRequest(Requests\CreateFolderRequest $request)
    {
        // verify the required parameter 'path' is set
        if (!isset($request->path)) {
            throw new InvalidArgumentException('Missing the required parameter $path when calling createFolder');
        }

        $resourcePath = '/barcode/storage/folder/{path}';
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
     * Operation deleteFolder
     *
     * Delete folder
     *
     * @param Requests\DeleteFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function deleteFolder(Requests\DeleteFolderRequest $request)
    {
        try {
            $this->deleteFolderWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
            $this->deleteFolderWithHttpInfo($request);
        }
    }

    /**
     * Operation deleteFolderWithHttpInfo
     *
     * Delete folder
     *
     * @param Requests\DeleteFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteFolderWithHttpInfo(Requests\DeleteFolderRequest $request)
    {
        $returnType = '';
        $request = $this->DeleteFolderRequest($request);

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

            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deleteFolderAsync
     *
     * Delete folder
     *
     * @param Requests\DeleteFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFolderAsync(Requests\DeleteFolderRequest $request)
    {
        return $this->deleteFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteFolderAsyncWithHttpInfo
     *
     * Delete folder
     *
     * @param Requests\DeleteFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFolderAsyncWithHttpInfo(Requests\DeleteFolderRequest $request)
    {
        $returnType = '';
        $request = $this->DeleteFolderRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteFolder'
     *
     * @param Requests\DeleteFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function DeleteFolderRequest(Requests\DeleteFolderRequest $request)
    {
        // verify the required parameter 'path' is set
        if (!isset($request->path)) {
            throw new InvalidArgumentException('Missing the required parameter $path when calling deleteFolder');
        }

        $resourcePath = '/barcode/storage/folder/{path}';
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
        if (isset($request->recursive)) {
            $queryParamName = lcfirst('recursive');
            $queryParamValue = is_bool($request->recursive) ? ($request->recursive ? 'true' : 'false') : $request->recursive;
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
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
    }

    /**
     * Operation getFilesList
     *
     * Get all files and folders within a folder
     *
     * @param Requests\GetFilesListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \Aspose\BarCode\Model\FilesList
     */
    public function getFilesList(Requests\GetFilesListRequest $request)
    {
        try {
            list($response) = $this->getFilesListWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->getFilesListWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation getFilesListWithHttpInfo
     *
     * Get all files and folders within a folder
     *
     * @param Requests\GetFilesListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \Aspose\BarCode\Model\FilesList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFilesListWithHttpInfo(Requests\GetFilesListRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\FilesList';
        $request = $this->GetFilesListRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\BarCode\Model\FilesList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getFilesListAsync
     *
     * Get all files and folders within a folder
     *
     * @param Requests\GetFilesListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFilesListAsync(Requests\GetFilesListRequest $request)
    {
        return $this->getFilesListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFilesListAsyncWithHttpInfo
     *
     * Get all files and folders within a folder
     *
     * @param Requests\GetFilesListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFilesListAsyncWithHttpInfo(Requests\GetFilesListRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\FilesList';
        $request = $this->GetFilesListRequest($request);

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
     * Create request for operation 'getFilesList'
     *
     * @param Requests\GetFilesListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function GetFilesListRequest(Requests\GetFilesListRequest $request)
    {
        // verify the required parameter 'path' is set
        if (!isset($request->path)) {
            throw new InvalidArgumentException('Missing the required parameter $path when calling getFilesList');
        }

        $resourcePath = '/barcode/storage/folder/{path}';
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
     * Operation moveFolder
     *
     * Move folder
     *
     * @param Requests\MoveFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function moveFolder(Requests\MoveFolderRequest $request)
    {
        try {
            $this->moveFolderWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
            $this->moveFolderWithHttpInfo($request);
        }
    }

    /**
     * Operation moveFolderWithHttpInfo
     *
     * Move folder
     *
     * @param Requests\MoveFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function moveFolderWithHttpInfo(Requests\MoveFolderRequest $request)
    {
        $returnType = '';
        $request = $this->MoveFolderRequest($request);

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

            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation moveFolderAsync
     *
     * Move folder
     *
     * @param Requests\MoveFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveFolderAsync(Requests\MoveFolderRequest $request)
    {
        return $this->moveFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation moveFolderAsyncWithHttpInfo
     *
     * Move folder
     *
     * @param Requests\MoveFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveFolderAsyncWithHttpInfo(Requests\MoveFolderRequest $request)
    {
        $returnType = '';
        $request = $this->MoveFolderRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'moveFolder'
     *
     * @param Requests\MoveFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function MoveFolderRequest(Requests\MoveFolderRequest $request)
    {
        // verify the required parameter 'src_path' is set
        if (!isset($request->src_path)) {
            throw new InvalidArgumentException('Missing the required parameter $src_path when calling moveFolder');
        }
        // verify the required parameter 'dest_path' is set
        if (!isset($request->dest_path)) {
            throw new InvalidArgumentException('Missing the required parameter $dest_path when calling moveFolder');
        }

        $resourcePath = '/barcode/storage/folder/move/{srcPath}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if (isset($request->src_path)) {
            $localName = lcfirst('srcPath');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->src_path), $resourcePath);
        }
        if (isset($request->dest_path)) {
            $queryParamName = lcfirst('destPath');
            $queryParamValue = is_bool($request->dest_path) ? ($request->dest_path ? 'true' : 'false') : $request->dest_path;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->src_storage_name)) {
            $queryParamName = lcfirst('srcStorageName');
            $queryParamValue = is_bool($request->src_storage_name) ? ($request->src_storage_name ? 'true' : 'false') : $request->src_storage_name;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->dest_storage_name)) {
            $queryParamName = lcfirst('destStorageName');
            $queryParamValue = is_bool($request->dest_storage_name) ? ($request->dest_storage_name ? 'true' : 'false') : $request->dest_storage_name;
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
