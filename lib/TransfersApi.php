<?php
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

namespace DwollaSwagger;

class TransfersApi {

  function __construct($apiClient = null) {
    if (null === $apiClient) {
      if (Configuration::$apiClient === null) {
        Configuration::$apiClient = new ApiClient(); // create a new API client if not present
        $this->apiClient = Configuration::$apiClient;
      }
      else
        $this->apiClient = Configuration::$apiClient; // use the default one
    } else {
      $this->apiClient = $apiClient; // use the one provided by the user
    }

    // Authentication methods
    $this->authSettings = array('oauth2');
  }

  private $apiClient; // instance of the ApiClient

  /**
   * get the API client
   */
  public function getApiClient() {
    return $this->apiClient;
  }

  /**
   * set the API client
   */
  public function setApiClient($apiClient) {
    $this->apiClient = $apiClient;
  }


  /**
   * getAccountTransfers
   *
   * Get an account's transfers.
   *
   * @param string $id Account id to get transfers for. (required)
   * @param int $limit How many results to return. (optional)
   * @param int $offset How many results to skip. (optional)
   * @param string $status What status to filter by. (optional)
   * @return TransferListResponse
   */
   public function getAccountTransfers($id, $limit = null, $offset = null, $status = null, $headers = null) {

      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling getAccountTransfers');
      }


      // parse inputs
      $resourcePath = "/accounts/{id}/transfers";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/vnd.dwolla.v1.hal+json'));

      if (!is_null($headers)){
        $headerParams = array_merge($headerParams, $headers);
      }

      // query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($status !== null) {
        $queryParams['status'] = $this->apiClient->toQueryValue($status);
      }


      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }



      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'TransferListResponse');
  }

  /**
   * getCustomerTransfers
   *
   * Get a customer's transfers.
   *
   * @param string $id Customer id to get transfers for. (required)
   * @param int $limit How many results to return. (optional)
   * @param int $offset How many results to skip. (optional)
   * @param string $status What status to filter by. (required)
   * @return TransferListResponse
   */
   public function getCustomerTransfers($id, $limit = null, $offset = null, $status = null, $headers = null) {

      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling getCustomerTransfers');
      }


      // parse inputs
      $resourcePath = "/customers/{id}/transfers";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/vnd.dwolla.v1.hal+json'));

      if (!is_null($headers)){
        $headerParams = array_merge($headerParams, $headers);
      }
      
      // query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($status !== null) {
        $queryParams['status'] = $this->apiClient->toQueryValue($status);
      }


      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }



      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'TransferListResponse');
  }

  /**
   * create
   *
   * Create a new transfer.
   *
   * @param TransferRequestBody $body Transfer request. (required)
   * @return Unit
   */
   public function create($body, $headers = null) {


      // parse inputs
      $resourcePath = "/transfers";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/vnd.dwolla.v1.hal+json'));

      if (!is_null($headers)){
        $headerParams = array_merge($headerParams, $headers);
      }




      // body params
      $_tempBody = null;
      if (isset($body)) {
        $_tempBody = $body;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'Unit');
  }

  /**
   * byId
   *
   * Get a transfer by id.
   *
   * @param string $id ID of transfer to get. (required)
   * @return Transfer
   */
   public function byId($id, $headers = null) {

      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling byId');
      }


      // parse inputs
      $resourcePath = "/transfers/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      if (!is_null($headers)){
        $headerParams = array_merge($headerParams, $headers);
      }



      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }



      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'Transfer');
  }

  /**
   * update
   *
   * Update a transfer.
   *
   * @param UpdateTransfer $body Transfer to update. (required)
   * @param string $id ID of transfer to get. (required)
   * @return Transfer
   */
   public function update($body, $id, $headers = null) {

      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling update');
      }


      // parse inputs
      $resourcePath = "/transfers/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/vnd.dwolla.v1.hal+json'));

      if (!is_null($headers)){
        $headerParams = array_merge($headerParams, $headers);
      }



      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }

      // body params
      $_tempBody = null;
      if (isset($body)) {
        $_tempBody = $body;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'Transfer');
  }

  /**
   * failureById
   *
   * Get a bank transfer failure by transfer id.
   *
   * @param string $id ID of failed bank transfer to get. (required)
   * @return TransferFailure
   */
   public function failureById($id, $headers = null) {

      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling failureById');
      }


      // parse inputs
      $resourcePath = "/transfers/{id}/failure";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      if (!is_null($headers)){
        $headerParams = array_merge($headerParams, $headers);
      }



      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }



      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'TransferFailure');
  }

  /**
   * getFeesBySource
   *
   * Get a transfer's fees.
   *
   * @param string $id Transfer id to get fees for. (required)
   * @return FeesBySourceResponse
   */
   public function getFeesBySource($id, $headers = null) {

      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling getFeesBySource');
      }


      // parse inputs
      $resourcePath = "/transfers/{id}/fees";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/vnd.dwolla.v1.hal+json'));

      if (!is_null($headers)){
        $headerParams = array_merge($headerParams, $headers);
      }



      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }



      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'FeesBySourceResponse');
  }


}
