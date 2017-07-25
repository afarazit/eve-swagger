<?php
/**
 * KillmailsApi
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
 * KillmailsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KillmailsApi
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
     * Operation getCharactersCharacterIdKillmailsRecent
     *
     * List kills and losses
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param int $max_count How many killmails to return at maximum (optional, default to 50)
     * @param int $max_kill_id Only return killmails with ID smaller than this. (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GetCharactersCharacterIdKillmailsRecent200Ok[]
     */
    public function getCharactersCharacterIdKillmailsRecent($character_id, $datasource = 'tranquility', $max_count = '50', $max_kill_id = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getCharactersCharacterIdKillmailsRecentWithHttpInfo($character_id, $datasource, $max_count, $max_kill_id, $token, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdKillmailsRecentWithHttpInfo
     *
     * List kills and losses
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param int $max_count How many killmails to return at maximum (optional, default to 50)
     * @param int $max_kill_id Only return killmails with ID smaller than this. (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GetCharactersCharacterIdKillmailsRecent200Ok[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCharactersCharacterIdKillmailsRecentWithHttpInfo($character_id, $datasource = 'tranquility', $max_count = '50', $max_kill_id = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        $returnType = '\Swagger\Client\Model\GetCharactersCharacterIdKillmailsRecent200Ok[]';
        $request = $this->getCharactersCharacterIdKillmailsRecentRequest($character_id, $datasource, $max_count, $max_kill_id, $token, $user_agent, $x_user_agent);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdKillmailsRecent200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Forbidden', $e->getResponseHeaders());
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
     * Operation getCharactersCharacterIdKillmailsRecentAsync
     *
     * List kills and losses
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param int $max_count How many killmails to return at maximum (optional, default to 50)
     * @param int $max_kill_id Only return killmails with ID smaller than this. (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCharactersCharacterIdKillmailsRecentAsync($character_id, $datasource = 'tranquility', $max_count = '50', $max_kill_id = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        return $this->getCharactersCharacterIdKillmailsRecentAsyncWithHttpInfo($character_id, $datasource, $max_count, $max_kill_id, $token, $user_agent, $x_user_agent)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation getCharactersCharacterIdKillmailsRecentAsyncWithHttpInfo
     *
     * List kills and losses
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param int $max_count How many killmails to return at maximum (optional, default to 50)
     * @param int $max_kill_id Only return killmails with ID smaller than this. (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCharactersCharacterIdKillmailsRecentAsyncWithHttpInfo($character_id, $datasource = 'tranquility', $max_count = '50', $max_kill_id = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        $returnType = '\Swagger\Client\Model\GetCharactersCharacterIdKillmailsRecent200Ok[]';
        $request = $this->getCharactersCharacterIdKillmailsRecentRequest($character_id, $datasource, $max_count, $max_kill_id, $token, $user_agent, $x_user_agent);

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
     * Create request for operation 'getCharactersCharacterIdKillmailsRecent'
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param int $max_count How many killmails to return at maximum (optional, default to 50)
     * @param int $max_kill_id Only return killmails with ID smaller than this. (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCharactersCharacterIdKillmailsRecentRequest($character_id, $datasource = 'tranquility', $max_count = '50', $max_kill_id = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling getCharactersCharacterIdKillmailsRecent');
        }
        if ($max_count !== null && $max_count > 5000) {
            throw new \InvalidArgumentException('invalid value for "$max_count" when calling KillmailsApi.getCharactersCharacterIdKillmailsRecent, must be smaller than or equal to 5000.');
        }


        $resourcePath = '/characters/{character_id}/killmails/recent/';
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
        if ($max_count !== null) {
            $queryParams['max_count'] = ObjectSerializer::toQueryValue($max_count);
        }
        // query params
        if ($max_kill_id !== null) {
            $queryParams['max_kill_id'] = ObjectSerializer::toQueryValue($max_kill_id);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = ObjectSerializer::toQueryValue($token);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = ObjectSerializer::toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = ObjectSerializer::toHeaderValue($x_user_agent);
        }

        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace('{' . 'character_id' . '}', ObjectSerializer::toPathValue($character_id), $resourcePath);
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

    /**
     * Operation getKillmailsKillmailIdKillmailHash
     *
     * Get a single killmail
     *
     * @param string $killmail_hash The killmail hash for verification (required)
     * @param int $killmail_id The killmail ID to be queried (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashOk
     */
    public function getKillmailsKillmailIdKillmailHash($killmail_hash, $killmail_id, $datasource = 'tranquility', $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getKillmailsKillmailIdKillmailHashWithHttpInfo($killmail_hash, $killmail_id, $datasource, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getKillmailsKillmailIdKillmailHashWithHttpInfo
     *
     * Get a single killmail
     *
     * @param string $killmail_hash The killmail hash for verification (required)
     * @param int $killmail_id The killmail ID to be queried (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getKillmailsKillmailIdKillmailHashWithHttpInfo($killmail_hash, $killmail_id, $datasource = 'tranquility', $user_agent = null, $x_user_agent = null)
    {
        $returnType = '\Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashOk';
        $request = $this->getKillmailsKillmailIdKillmailHashRequest($killmail_hash, $killmail_id, $datasource, $user_agent, $x_user_agent);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashUnprocessableEntity', $e->getResponseHeaders());
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
     * Operation getKillmailsKillmailIdKillmailHashAsync
     *
     * Get a single killmail
     *
     * @param string $killmail_hash The killmail hash for verification (required)
     * @param int $killmail_id The killmail ID to be queried (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKillmailsKillmailIdKillmailHashAsync($killmail_hash, $killmail_id, $datasource = 'tranquility', $user_agent = null, $x_user_agent = null)
    {
        return $this->getKillmailsKillmailIdKillmailHashAsyncWithHttpInfo($killmail_hash, $killmail_id, $datasource, $user_agent, $x_user_agent)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation getKillmailsKillmailIdKillmailHashAsyncWithHttpInfo
     *
     * Get a single killmail
     *
     * @param string $killmail_hash The killmail hash for verification (required)
     * @param int $killmail_id The killmail ID to be queried (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getKillmailsKillmailIdKillmailHashAsyncWithHttpInfo($killmail_hash, $killmail_id, $datasource = 'tranquility', $user_agent = null, $x_user_agent = null)
    {
        $returnType = '\Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashOk';
        $request = $this->getKillmailsKillmailIdKillmailHashRequest($killmail_hash, $killmail_id, $datasource, $user_agent, $x_user_agent);

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
     * Create request for operation 'getKillmailsKillmailIdKillmailHash'
     *
     * @param string $killmail_hash The killmail hash for verification (required)
     * @param int $killmail_id The killmail ID to be queried (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getKillmailsKillmailIdKillmailHashRequest($killmail_hash, $killmail_id, $datasource = 'tranquility', $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'killmail_hash' is set
        if ($killmail_hash === null) {
            throw new \InvalidArgumentException('Missing the required parameter $killmail_hash when calling getKillmailsKillmailIdKillmailHash');
        }
        // verify the required parameter 'killmail_id' is set
        if ($killmail_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $killmail_id when calling getKillmailsKillmailIdKillmailHash');
        }

        $resourcePath = '/killmails/{killmail_id}/{killmail_hash}/';
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

        // path params
        if ($killmail_hash !== null) {
            $resourcePath = str_replace('{' . 'killmail_hash' . '}', ObjectSerializer::toPathValue($killmail_hash), $resourcePath);
        }
        // path params
        if ($killmail_id !== null) {
            $resourcePath = str_replace('{' . 'killmail_id' . '}', ObjectSerializer::toPathValue($killmail_id), $resourcePath);
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
