<?php

declare(strict_types=1);
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RecognizeApi.php">
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

class RecognizeApi
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
     * Operation barcodeRecognizeBarcodeTypeGet
     *
     * Recognize barcode from file on server using GET requests with parameters in route and query string.
     *
     * @param Requests\BarcodeRecognizeBarcodeTypeGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \Aspose\BarCode\Model\BarcodeResponseList
     */
    public function barcodeRecognizeBarcodeTypeGet(Requests\BarcodeRecognizeBarcodeTypeGetRequest $request)
    {
        try {
            list($response) = $this->barcodeRecognizeBarcodeTypeGetWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->barcodeRecognizeBarcodeTypeGetWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation barcodeRecognizeBarcodeTypeGetWithHttpInfo
     *
     * Recognize barcode from file on server using GET requests with parameters in route and query string.
     *
     * @param Requests\BarcodeRecognizeBarcodeTypeGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \Aspose\BarCode\Model\BarcodeResponseList, HTTP status code, HTTP response headers (array of strings)
     */
    public function barcodeRecognizeBarcodeTypeGetWithHttpInfo(Requests\BarcodeRecognizeBarcodeTypeGetRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\BarcodeResponseList';
        $request = $this->BarcodeRecognizeBarcodeTypeGetRequest($request);

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
     * Operation barcodeRecognizeBarcodeTypeGetAsync
     *
     * Recognize barcode from file on server using GET requests with parameters in route and query string.
     *
     * @param Requests\BarcodeRecognizeBarcodeTypeGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function barcodeRecognizeBarcodeTypeGetAsync(Requests\BarcodeRecognizeBarcodeTypeGetRequest $request)
    {
        return $this->barcodeRecognizeBarcodeTypeGetAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation barcodeRecognizeBarcodeTypeGetAsyncWithHttpInfo
     *
     * Recognize barcode from file on server using GET requests with parameters in route and query string.
     *
     * @param Requests\BarcodeRecognizeBarcodeTypeGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function barcodeRecognizeBarcodeTypeGetAsyncWithHttpInfo(Requests\BarcodeRecognizeBarcodeTypeGetRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\BarcodeResponseList';
        $request = $this->BarcodeRecognizeBarcodeTypeGetRequest($request);

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
     * Create request for operation 'barcodeRecognizeBarcodeTypeGet'
     *
     * @param Requests\BarcodeRecognizeBarcodeTypeGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function BarcodeRecognizeBarcodeTypeGetRequest(Requests\BarcodeRecognizeBarcodeTypeGetRequest $request)
    {
        // verify the required parameter 'barcode_type' is set
        if (!isset($request->barcode_type)) {
            throw new InvalidArgumentException('Missing the required parameter $barcode_type when calling barcodeRecognizeBarcodeTypeGet');
        }
        // verify the required parameter 'url' is set
        if (!isset($request->url)) {
            throw new InvalidArgumentException('Missing the required parameter $url when calling barcodeRecognizeBarcodeTypeGet');
        }

        $resourcePath = '/barcode/recognize/{barcodeType}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if (isset($request->barcode_type)) {
            $localName = lcfirst('barcodeType');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->barcode_type), $resourcePath);
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
        if (isset($request->recognition_mode)) {
            $queryParamName = lcfirst('recognitionMode');
            $queryParamValue = is_bool($request->recognition_mode) ? ($request->recognition_mode ? 'true' : 'false') : $request->recognition_mode;
            if (strpos($resourcePath, '{' . $queryParamName . '}') !== false) {
                $resourcePath = str_replace('{' . $queryParamName . '}', ObjectSerializer::toPathValue($queryParamValue), $resourcePath);
            } else {
                $queryParams[$queryParamName] = ObjectSerializer::toQueryValue($queryParamValue);
            }
        }
        if (isset($request->image_kind)) {
            $queryParamName = lcfirst('imageKind');
            $queryParamValue = is_bool($request->image_kind) ? ($request->image_kind ? 'true' : 'false') : $request->image_kind;
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
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
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
     * Operation barcodeRecognizeBodyPost
     *
     * Recognize barcode from file in request body using POST requests with parameters in body in json or xml format.
     *
     * @param Requests\BarcodeRecognizeBodyPostRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \Aspose\BarCode\Model\BarcodeResponseList
     */
    public function barcodeRecognizeBodyPost(Requests\BarcodeRecognizeBodyPostRequest $request)
    {
        try {
            list($response) = $this->barcodeRecognizeBodyPostWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->barcodeRecognizeBodyPostWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation barcodeRecognizeBodyPostWithHttpInfo
     *
     * Recognize barcode from file in request body using POST requests with parameters in body in json or xml format.
     *
     * @param Requests\BarcodeRecognizeBodyPostRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \Aspose\BarCode\Model\BarcodeResponseList, HTTP status code, HTTP response headers (array of strings)
     */
    public function barcodeRecognizeBodyPostWithHttpInfo(Requests\BarcodeRecognizeBodyPostRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\BarcodeResponseList';
        $request = $this->BarcodeRecognizeBodyPostRequest($request);

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
     * Operation barcodeRecognizeBodyPostAsync
     *
     * Recognize barcode from file in request body using POST requests with parameters in body in json or xml format.
     *
     * @param Requests\BarcodeRecognizeBodyPostRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function barcodeRecognizeBodyPostAsync(Requests\BarcodeRecognizeBodyPostRequest $request)
    {
        return $this->barcodeRecognizeBodyPostAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation barcodeRecognizeBodyPostAsyncWithHttpInfo
     *
     * Recognize barcode from file in request body using POST requests with parameters in body in json or xml format.
     *
     * @param Requests\BarcodeRecognizeBodyPostRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function barcodeRecognizeBodyPostAsyncWithHttpInfo(Requests\BarcodeRecognizeBodyPostRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\BarcodeResponseList';
        $request = $this->BarcodeRecognizeBodyPostRequest($request);

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
     * Create request for operation 'barcodeRecognizeBodyPost'
     *
     * @param Requests\BarcodeRecognizeBodyPostRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function BarcodeRecognizeBodyPostRequest(Requests\BarcodeRecognizeBodyPostRequest $request)
    {
        // verify the required parameter 'recognize_base64_request' is set
        if (!isset($request->recognize_base64_request)) {
            throw new InvalidArgumentException('Missing the required parameter $recognize_base64_request when calling barcodeRecognizeBodyPost');
        }

        $resourcePath = '/barcode/recognize-body';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        $resourcePath = $this->_parseURL($resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($request->recognize_base64_request)) {
            if (is_string($request->recognize_base64_request)) {
                $_tempBody = "\"" . $request->recognize_base64_request . "\"";
            } else {
                $_tempBody = $request->recognize_base64_request;
            }
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
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
     * Operation barcodeRecognizeFormPost
     *
     * Recognize barcode from file in request body using POST requests with parameters in multipart form.
     *
     * @param Requests\BarcodeRecognizeFormPostRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \Aspose\BarCode\Model\BarcodeResponseList
     */
    public function barcodeRecognizeFormPost(Requests\BarcodeRecognizeFormPostRequest $request)
    {
        try {
            list($response) = $this->barcodeRecognizeFormPostWithHttpInfo($request);
            return $response;
        } catch (RepeatRequestException $e) {
            list($response) = $this->barcodeRecognizeFormPostWithHttpInfo($request);
            return $response;
        }
    }

    /**
     * Operation barcodeRecognizeFormPostWithHttpInfo
     *
     * Recognize barcode from file in request body using POST requests with parameters in multipart form.
     *
     * @param Requests\BarcodeRecognizeFormPostRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \Aspose\BarCode\Model\BarcodeResponseList, HTTP status code, HTTP response headers (array of strings)
     */
    public function barcodeRecognizeFormPostWithHttpInfo(Requests\BarcodeRecognizeFormPostRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\BarcodeResponseList';
        $request = $this->BarcodeRecognizeFormPostRequest($request);

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
     * Operation barcodeRecognizeFormPostAsync
     *
     * Recognize barcode from file in request body using POST requests with parameters in multipart form.
     *
     * @param Requests\BarcodeRecognizeFormPostRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function barcodeRecognizeFormPostAsync(Requests\BarcodeRecognizeFormPostRequest $request)
    {
        return $this->barcodeRecognizeFormPostAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation barcodeRecognizeFormPostAsyncWithHttpInfo
     *
     * Recognize barcode from file in request body using POST requests with parameters in multipart form.
     *
     * @param Requests\BarcodeRecognizeFormPostRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function barcodeRecognizeFormPostAsyncWithHttpInfo(Requests\BarcodeRecognizeFormPostRequest $request)
    {
        $returnType = '\Aspose\BarCode\Model\BarcodeResponseList';
        $request = $this->BarcodeRecognizeFormPostRequest($request);

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
     * Create request for operation 'barcodeRecognizeFormPost'
     *
     * @param Requests\BarcodeRecognizeFormPostRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function BarcodeRecognizeFormPostRequest(Requests\BarcodeRecognizeFormPostRequest $request)
    {
        // verify the required parameter 'barcode_type' is set
        if (!isset($request->barcode_type)) {
            throw new InvalidArgumentException('Missing the required parameter $barcode_type when calling barcodeRecognizeFormPost');
        }
        // verify the required parameter 'file' is set
        if (!isset($request->file)) {
            throw new InvalidArgumentException('Missing the required parameter $file when calling barcodeRecognizeFormPost');
        }

        $resourcePath = '/barcode/recognize-form';
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

        $multipart = true;
        $filename = ObjectSerializer::toFormValue($request->file);
        $handle = fopen($filename, 'rb');
        $fsize = filesize($filename);
        $contents = fread($handle, $fsize);
        $formParams['file'][] = $contents;

        if (isset($request->recognition_mode)) {
            $formParams['recognitionMode'][] = ObjectSerializer::toFormValue($request->recognition_mode);
        }

        if (isset($request->image_kind)) {
            $formParams['imageKind'][] = ObjectSerializer::toFormValue($request->image_kind);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if ($multipart) {
            $multipartContents = [];
            foreach ($formParams as $formParamName => $formParamValues) {
                foreach ($formParamValues as $formParamValue) {
                    $multipartFileName = str_contains($formParamName, 'file') ? $filename : '';
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue,
                        'filename' => $multipartFileName
                    ];
                }
            }
            // for HTTP post (form)
            $httpBody = new MultipartStream($multipartContents);

        } elseif ($headers['Content-Type'] === 'application/json') {
            $httpBody = \GuzzleHttp\json_encode($formParams);

        } else {

            $httpBody = ObjectSerializer::buildQuery($formParams);
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
            $strValue = is_array($value) ? implode($value) : $value;
            $logInfo .= $name . ': ' . $strValue . '\n';
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