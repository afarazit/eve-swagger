<?php
/**
 * IncursionsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.5.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
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
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * IncursionsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IncursionsApi
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
     * @param Configuration $config
     * @param HeaderSelector $selector
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
     * Operation getIncursions
     *
     * List incursions
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GetIncursions200Ok[]
     */
    public function getIncursions($datasource = 'tranquility', $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getIncursionsWithHttpInfo($datasource, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getIncursionsWithHttpInfo
     *
     * List incursions
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GetIncursions200Ok[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getIncursionsWithHttpInfo($datasource = 'tranquility', $user_agent = null, $x_user_agent = null)
    {
        $returnType = '\Swagger\Client\Model\GetIncursions200Ok[]';
        $request = $this->getIncursionsRequest($datasource, $user_agent, $x_user_agent);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ({$request->getUri()})",
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetIncursions200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getIncursionsAsync
     *
     * List incursions
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIncursionsAsync($datasource = 'tranquility', $user_agent = null, $x_user_agent = null)
    {
        return $this->getIncursionsAsyncWithHttpInfo($datasource, $user_agent, $x_user_agent)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation getIncursionsAsyncWithHttpInfo
     *
     * List incursions
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIncursionsAsyncWithHttpInfo($datasource = 'tranquility', $user_agent = null, $x_user_agent = null)
    {
        $returnType = '\Swagger\Client\Model\GetIncursions200Ok[]';
        $request = $this->getIncursionsRequest($datasource, $user_agent, $x_user_agent);

        return $this->client->sendAsync($request)->then(function ($response) use ($returnType) {
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
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(
                "[$statusCode] Error connecting to the API ({$exception->getRequest()->getUri()})",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        });
    }

    /**
     * Create request for operation 'getIncursions'
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getIncursionsRequest($datasource = 'tranquility', $user_agent = null, $x_user_agent = null)
    {

        $resourcePath = '/incursions/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = ObjectSerializer::toQueryValue($datasource);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = ObjectSerializer::toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = ObjectSerializer::toHeaderValue($x_user_agent);
        }



        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'GET',
            $url,
            $headers,
            $httpBody
        );
    }

}
