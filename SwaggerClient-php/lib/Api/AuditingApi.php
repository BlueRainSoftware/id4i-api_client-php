<?php
/**
 * AuditingApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ID4i API
 *
 * ID4i HTTP API
 *
 * OpenAPI spec version: 0.9.7-SNAPSHOT
 * Contact: info@bluerain.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * AuditingApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuditingApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listOrganizationChangeLog
     *
     * List change log entries of an organization
     *
     * @param  string $organization_id The namespace identifying the organization whose change log entries are to be listed (required)
     * @param  string $message_mime_type The Mime-type for the message format that should be returned. e.g. &#39;text/plain&#39; or &#39;text/mustache&#39; (optional, default to text/mustache)
     * @param  \DateTime $from_date From date time as UTC Date-Time format (optional)
     * @param  \DateTime $to_date To date time as UTC Date-Time format (optional)
     * @param  int $offset Start with the n-th element (optional)
     * @param  int $limit The maximum count of returned elements (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\PaginatedResponseOfChangeLogEntry
     */
    public function listOrganizationChangeLog($organization_id, $message_mime_type = 'text/mustache', $from_date = null, $to_date = null, $offset = null, $limit = null)
    {
        list($response) = $this->listOrganizationChangeLogWithHttpInfo($organization_id, $message_mime_type, $from_date, $to_date, $offset, $limit);
        return $response;
    }

    /**
     * Operation listOrganizationChangeLogWithHttpInfo
     *
     * List change log entries of an organization
     *
     * @param  string $organization_id The namespace identifying the organization whose change log entries are to be listed (required)
     * @param  string $message_mime_type The Mime-type for the message format that should be returned. e.g. &#39;text/plain&#39; or &#39;text/mustache&#39; (optional, default to text/mustache)
     * @param  \DateTime $from_date From date time as UTC Date-Time format (optional)
     * @param  \DateTime $to_date To date time as UTC Date-Time format (optional)
     * @param  int $offset Start with the n-th element (optional)
     * @param  int $limit The maximum count of returned elements (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\PaginatedResponseOfChangeLogEntry, HTTP status code, HTTP response headers (array of strings)
     */
    public function listOrganizationChangeLogWithHttpInfo($organization_id, $message_mime_type = 'text/mustache', $from_date = null, $to_date = null, $offset = null, $limit = null)
    {
        $returnType = '\Swagger\Client\Model\PaginatedResponseOfChangeLogEntry';
        $request = $this->listOrganizationChangeLogRequest($organization_id, $message_mime_type, $from_date, $to_date, $offset, $limit);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
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

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\PaginatedResponseOfChangeLogEntry',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listOrganizationChangeLogAsync
     *
     * List change log entries of an organization
     *
     * @param  string $organization_id The namespace identifying the organization whose change log entries are to be listed (required)
     * @param  string $message_mime_type The Mime-type for the message format that should be returned. e.g. &#39;text/plain&#39; or &#39;text/mustache&#39; (optional, default to text/mustache)
     * @param  \DateTime $from_date From date time as UTC Date-Time format (optional)
     * @param  \DateTime $to_date To date time as UTC Date-Time format (optional)
     * @param  int $offset Start with the n-th element (optional)
     * @param  int $limit The maximum count of returned elements (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listOrganizationChangeLogAsync($organization_id, $message_mime_type = 'text/mustache', $from_date = null, $to_date = null, $offset = null, $limit = null)
    {
        return $this->listOrganizationChangeLogAsyncWithHttpInfo($organization_id, $message_mime_type, $from_date, $to_date, $offset, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listOrganizationChangeLogAsyncWithHttpInfo
     *
     * List change log entries of an organization
     *
     * @param  string $organization_id The namespace identifying the organization whose change log entries are to be listed (required)
     * @param  string $message_mime_type The Mime-type for the message format that should be returned. e.g. &#39;text/plain&#39; or &#39;text/mustache&#39; (optional, default to text/mustache)
     * @param  \DateTime $from_date From date time as UTC Date-Time format (optional)
     * @param  \DateTime $to_date To date time as UTC Date-Time format (optional)
     * @param  int $offset Start with the n-th element (optional)
     * @param  int $limit The maximum count of returned elements (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listOrganizationChangeLogAsyncWithHttpInfo($organization_id, $message_mime_type = 'text/mustache', $from_date = null, $to_date = null, $offset = null, $limit = null)
    {
        $returnType = '\Swagger\Client\Model\PaginatedResponseOfChangeLogEntry';
        $request = $this->listOrganizationChangeLogRequest($organization_id, $message_mime_type, $from_date, $to_date, $offset, $limit);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
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

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listOrganizationChangeLog'
     *
     * @param  string $organization_id The namespace identifying the organization whose change log entries are to be listed (required)
     * @param  string $message_mime_type The Mime-type for the message format that should be returned. e.g. &#39;text/plain&#39; or &#39;text/mustache&#39; (optional, default to text/mustache)
     * @param  \DateTime $from_date From date time as UTC Date-Time format (optional)
     * @param  \DateTime $to_date To date time as UTC Date-Time format (optional)
     * @param  int $offset Start with the n-th element (optional)
     * @param  int $limit The maximum count of returned elements (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listOrganizationChangeLogRequest($organization_id, $message_mime_type = 'text/mustache', $from_date = null, $to_date = null, $offset = null, $limit = null)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling listOrganizationChangeLog'
            );
        }

        $resourcePath = '/api/v1/changelog/organization/{organizationId}/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($message_mime_type !== null) {
            $queryParams['messageMimeType'] = ObjectSerializer::toQueryValue($message_mime_type);
        }
        // query params
        if ($from_date !== null) {
            $queryParams['fromDate'] = ObjectSerializer::toQueryValue($from_date);
        }
        // query params
        if ($to_date !== null) {
            $queryParams['toDate'] = ObjectSerializer::toQueryValue($to_date);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }

        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'organizationId' . '}',
                ObjectSerializer::toPathValue($organization_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/xml', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/xml', 'application/json'],
                ['application/xml', 'application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
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
}
