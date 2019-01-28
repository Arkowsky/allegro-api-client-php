<?php
/**
 * PricingApi
 * PHP version 5
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.2-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use AllegroApi\ApiException;
use AllegroApi\Configuration;
use AllegroApi\HeaderSelector;
use AllegroApi\ObjectSerializer;

/**
 * PricingApi Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PricingApi
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
     * @var HeaderSelector
     */
    protected $headerSelector;

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
     * Operation offerQuotesPublicUsingGET
     *
     * Get current offer quotes for authenticated user and list of offers.
     *
     * @param  string[] $offer_id List of offer ids, maximum 20 values (required)
     * @param  string $name name (optional)
     *
     * @throws \AllegroApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \AllegroApi\Model\OfferQuotesDto|\AllegroApi\Model\ErrorsHolder|\AllegroApi\Model\ErrorsHolder
     */
    public function offerQuotesPublicUsingGET($offer_id, $name = null)
    {
        list($response) = $this->offerQuotesPublicUsingGETWithHttpInfo($offer_id, $name);
        return $response;
    }

    /**
     * Operation offerQuotesPublicUsingGETWithHttpInfo
     *
     * Get current offer quotes for authenticated user and list of offers.
     *
     * @param  string[] $offer_id List of offer ids, maximum 20 values (required)
     * @param  string $name (optional)
     *
     * @throws \AllegroApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \AllegroApi\Model\OfferQuotesDto|\AllegroApi\Model\ErrorsHolder|\AllegroApi\Model\ErrorsHolder, HTTP status code, HTTP response headers (array of strings)
     */
    public function offerQuotesPublicUsingGETWithHttpInfo($offer_id, $name = null)
    {
        $request = $this->offerQuotesPublicUsingGETRequest($offer_id, $name);

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
            switch($statusCode) {
                case 200:
                    if ('\AllegroApi\Model\OfferQuotesDto' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\OfferQuotesDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\AllegroApi\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\AllegroApi\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\AllegroApi\Model\OfferQuotesDto';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\AllegroApi\Model\OfferQuotesDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation offerQuotesPublicUsingGETAsync
     *
     * Get current offer quotes for authenticated user and list of offers.
     *
     * @param  string[] $offer_id List of offer ids, maximum 20 values (required)
     * @param  string $name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function offerQuotesPublicUsingGETAsync($offer_id, $name = null)
    {
        return $this->offerQuotesPublicUsingGETAsyncWithHttpInfo($offer_id, $name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation offerQuotesPublicUsingGETAsyncWithHttpInfo
     *
     * Get current offer quotes for authenticated user and list of offers.
     *
     * @param  string[] $offer_id List of offer ids, maximum 20 values (required)
     * @param  string $name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function offerQuotesPublicUsingGETAsyncWithHttpInfo($offer_id, $name = null)
    {
        $returnType = '\AllegroApi\Model\OfferQuotesDto';
        $request = $this->offerQuotesPublicUsingGETRequest($offer_id, $name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
     * Create request for operation 'offerQuotesPublicUsingGET'
     *
     * @param  string[] $offer_id List of offer ids, maximum 20 values (required)
     * @param  string $name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function offerQuotesPublicUsingGETRequest($offer_id, $name = null)
    {
        // verify the required parameter 'offer_id' is set
        if ($offer_id === null || (is_array($offer_id) && count($offer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $offer_id when calling offerQuotesPublicUsingGET'
            );
        }

        $resourcePath = '/pricing/offer-quotes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }
        // query params
        if (is_array($offer_id)) {
            $offer_id = ObjectSerializer::serializeCollection($offer_id, 'multi', true);
        }
        if ($offer_id !== null) {
            $queryParams['offer.id'] = ObjectSerializer::toQueryValue($offer_id);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.allegro.public.v1+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.allegro.public.v1+json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
     * Operation previewFeesPublicAPIUsingPOST
     *
     * Calculates fee preview
     *
     * @param  \AllegroApi\Model\WrapperTypeForPreviewConditions $wrapper_type_for_preview_conditions command (required)
     *
     * @throws \AllegroApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \AllegroApi\Model\WrapsListingAndCommissionsFees|\AllegroApi\Model\Errors|\AllegroApi\Model\Errors
     */
    public function previewFeesPublicAPIUsingPOST($wrapper_type_for_preview_conditions)
    {
        list($response) = $this->previewFeesPublicAPIUsingPOSTWithHttpInfo($wrapper_type_for_preview_conditions);
        return $response;
    }

    /**
     * Operation previewFeesPublicAPIUsingPOSTWithHttpInfo
     *
     * Calculates fee preview
     *
     * @param  \AllegroApi\Model\WrapperTypeForPreviewConditions $wrapper_type_for_preview_conditions command (required)
     *
     * @throws \AllegroApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \AllegroApi\Model\WrapsListingAndCommissionsFees|\AllegroApi\Model\Errors|\AllegroApi\Model\Errors, HTTP status code, HTTP response headers (array of strings)
     */
    public function previewFeesPublicAPIUsingPOSTWithHttpInfo($wrapper_type_for_preview_conditions)
    {
        $request = $this->previewFeesPublicAPIUsingPOSTRequest($wrapper_type_for_preview_conditions);

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
            switch($statusCode) {
                case 200:
                    if ('\AllegroApi\Model\WrapsListingAndCommissionsFees' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\WrapsListingAndCommissionsFees', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\AllegroApi\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\AllegroApi\Model\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AllegroApi\Model\Errors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\AllegroApi\Model\WrapsListingAndCommissionsFees';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\AllegroApi\Model\WrapsListingAndCommissionsFees',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AllegroApi\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation previewFeesPublicAPIUsingPOSTAsync
     *
     * Calculates fee preview
     *
     * @param  \AllegroApi\Model\WrapperTypeForPreviewConditions $wrapper_type_for_preview_conditions command (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function previewFeesPublicAPIUsingPOSTAsync($wrapper_type_for_preview_conditions)
    {
        return $this->previewFeesPublicAPIUsingPOSTAsyncWithHttpInfo($wrapper_type_for_preview_conditions)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation previewFeesPublicAPIUsingPOSTAsyncWithHttpInfo
     *
     * Calculates fee preview
     *
     * @param  \AllegroApi\Model\WrapperTypeForPreviewConditions $wrapper_type_for_preview_conditions command (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function previewFeesPublicAPIUsingPOSTAsyncWithHttpInfo($wrapper_type_for_preview_conditions)
    {
        $returnType = '\AllegroApi\Model\WrapsListingAndCommissionsFees';
        $request = $this->previewFeesPublicAPIUsingPOSTRequest($wrapper_type_for_preview_conditions);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
     * Create request for operation 'previewFeesPublicAPIUsingPOST'
     *
     * @param  \AllegroApi\Model\WrapperTypeForPreviewConditions $wrapper_type_for_preview_conditions command (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function previewFeesPublicAPIUsingPOSTRequest($wrapper_type_for_preview_conditions)
    {
        // verify the required parameter 'wrapper_type_for_preview_conditions' is set
        if ($wrapper_type_for_preview_conditions === null || (is_array($wrapper_type_for_preview_conditions) && count($wrapper_type_for_preview_conditions) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $wrapper_type_for_preview_conditions when calling previewFeesPublicAPIUsingPOST'
            );
        }

        $resourcePath = '/pricing/fee-preview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($wrapper_type_for_preview_conditions)) {
            $_tempBody = $wrapper_type_for_preview_conditions;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.allegro.public.v1+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.allegro.public.v1+json'],
                ['application/vnd.allegro.public.v1+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'POST',
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
