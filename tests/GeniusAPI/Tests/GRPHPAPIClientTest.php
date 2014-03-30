<?php

namespace GeniusAPI\Tests;

/**
 * Requires
 */
require_once __DIR__ . '/config.php';

use GeniusAPI\GRPHPAPIClient;

class GRPHPAPIClientTest extends \PHPUnit_Framework_TestCase {

    /** @var Client Guzzle client */
    protected $objClient = null;

    /** @var string Client email */
    protected $strUsername;

    /** @var string Client API Token */
    protected $strApiToken;

//    public function testAuthentication() {
//        $objWebClient = new GRPHPAPIClient('client1@mail.com', '3433148');
//
//        $objResponse = $objWebClient->testAuthentication();
//
//        $this->assertJsonResponse1($objResponse->getStatusCode(), 200);
//    }

//    public function testPostAdvocate() {
//        $objWebClient = new GRPHPAPIClient('client1@mail.com', '3433148');
//
//        $objResponse = $objWebClient->postAdvocate('aa', array());
//
//        $this->assertJsonResponse1($objResponse->getStatusCode(), 400, false);
//
//        ///////////////////////////////////////////////////////////////////
//
//        $objResponse = $objWebClient->postAdvocate('aa', array('advocate' => array("name" => "Jonh", "lastname" => "Smith", "email" => "jonh_at_email.com", "payout_threshold" => 10)));
//
//        $this->assertJsonResponse1($objResponse->getStatusCode(), 201, false);
//
//        // Checking if Location header was build properly
//        $strLocation =  $objResponse->getHeader('Location');
//
//        $arrHeaders = $this->getHeaders();
//
//        $objRequest = $objWebClient->get($strLocation, $arrHeaders);
//        $objResponse = $objRequest->send();
//
//        $this->assertJsonResponse1($objResponse->getStatusCode(), 200);
//    }

//    private function getHeaders() {
//        $arrHeaders = array(
//            'HTTP_ACCEPT' => 'application/json',
//            'CONTENT_TYPE' => 'application/json',
//        );
//        return $arrHeaders;
//    }

    public function testIndex() {
        $this->assertTrue(true, true);
    }

}
