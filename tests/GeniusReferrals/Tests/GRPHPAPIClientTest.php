<?php

namespace GeniusReferrals\Tests;

/**
 * Requires
 */
require_once __DIR__ . '/../../../../../vendor/autoload.php';

use GeniusReferrals\GRPHPAPIClient;

class GRPHPAPIClientTest extends \PHPUnit_Framework_TestCase {

    protected $objWebClient;

    public function setUp() {

        $this->objWebClient = new GRPHPAPIClient('YOUR_USERNAME', 'YOUR_API_TOKEN');
    }

    public function testGetRoot() {

        $this->objWebClient->getRoot();

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testGetAccounts() {

        $this->objWebClient->getAccounts();

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testGetAccount() {

        $this->objWebClient->getAccount('example-com');

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testGetAdvocates() {

        $this->objWebClient->getAdvocates('example-com');

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testPostAdvocate() {

        $aryAdvocate = array('advocate' => array("name" => "Jonh", "lastname" => "Smith", "email" => "jonh@email.com", "payout_threshold" => 10));
        $objResponse = $this->objWebClient->postAdvocate('example-com', $aryAdvocate);
        $this->assertEquals($this->objWebClient->getResponseCode(), 201, false);

        $strLocation = $objResponse->getLocation();

        $arrHeaders = $this->getHeaders();

        $objClient = $this->objWebClient->getWebClient();
        $objRequest = $objClient->get($strLocation, $arrHeaders);
        $objResponse = $objRequest->send();

        $this->assertEquals($objResponse->getStatusCode(), 200);
    }

    public function testGetAdvocatePaymentMethods() {

        $this->objWebClient->getAdvocatePaymentMethods('example-com', '07c159102f66a63b18d4da39bf91b06bacb7db8d');

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testPostAdvocatePaymentMethod() {

        $aryPaymentMethod = array("advocate_payment_method" => array("username" => "advocate@email.com", "description" => "My main paypal account", "is_active" => true));
        $objResponse = $this->objWebClient->postAdvocatePaymentMethod('example-com', '07c159102f66a63b18d4da39bf91b06bacb7db8d', $aryPaymentMethod);
        $this->assertEquals($this->objWebClient->getResponseCode(), 201, false);

        $strLocation = $objResponse->getLocation();

        $arrHeaders = $this->getHeaders();

        $objClient = $this->objWebClient->getWebClient();
        $objRequest = $objClient->get($strLocation, $arrHeaders);
        $objResponse = $objRequest->send();
        $this->assertEquals($objResponse->getStatusCode(), 200);
    }

    public function testGetReferrals() {

        $this->objWebClient->getReferrals('example-com', '07c159102f66a63b18d4da39bf91b06bacb7db8d');

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testPostReferral() {

        $aryReferral = array("referral" => array("referred_advocate_token" => "8b3856077b4243700c15d3c75d1cf9866253f643",
                "referral_origin_slug" => "facebook-share",
                "campaign_slug" => "get-10-of-for-90-days",
                "http_referer" => "http://www.geniusreferrals.com"));
        $objResponse = $this->objWebClient->postReferral('example-com', '07c159102f66a63b18d4da39bf91b06bacb7db8d', $aryReferral);
        $this->assertEquals($this->objWebClient->getResponseCode(), 201, false);

        $strLocation = $objResponse->getLocation();

        $arrHeaders = $this->getHeaders();

        $objClient = $this->objWebClient->getWebClient();
        $objRequest = $objClient->get($strLocation, $arrHeaders);
        $objResponse = $objRequest->send();

        $this->assertEquals($objResponse->getStatusCode(), 200);
    }

    public function testGetBonuses() {

        $this->objWebClient->getBonuses('example-com');

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testPostBonus() {

        $aryBonus = array("bonus" => array("advocate_token" => "8b3856077b4243700c15d3c75d1cf9866253f643",
                "reference" => "HSY7292D00",
                "amount_of_payments" => 3,
                "payment_amount" => 10));
        $objResponse = $this->objWebClient->postBonuses('example-com', $aryBonus);
        $this->assertEquals($this->objWebClient->getResponseCode(), 201, false);

        $strLocation = $objResponse->getLocation();

        $arrHeaders = $this->getHeaders();

        $objClient = $this->objWebClient->getWebClient();
        $objRequest = $objClient->get($strLocation, $arrHeaders);
        $objResponse = $objRequest->send();

        $this->assertEquals($objResponse->getStatusCode(), 200);
    }

//    public function testGetBonusesCheckup() {
//        
//        $this->objWebClient->getBonusesCheckup('example-com');
//
//        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
//    }

    public function testGetBonusesTraces() {

        $this->objWebClient->getBonusesTraces('example-com');

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

//    public function testGetBonusesTrace() {
//    
//        $this->objWebClient->getBonusesTrace('example-com', 64);
//
//        $this->assertEquals($this->objWebClient->getStatusCode(), 200);
//    }

    public function testGetCampains() {

        $this->objWebClient->getCampains('example-com');

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testGetCampaign() {

        $this->objWebClient->getCampaign('example-com', 'get-10-of-for-90-days');

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testGetRedemptionRequests() {

        $this->objWebClient->getRedemptionRequests('example-com');

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

//    public function testPostRedemptionRequest() {
//
//        $aryRedemptionRequest = array("redemption_request" => array("advocate_token" => "07c159102f66a63b18d4da39bf91b06bacb7db8d",
//                "request_status_slug" => "processing",
//                "request_action_slug" => "goods",
//                "currency_code" => "USD",
//                "amount" => 50,
//                "description" => "credit",
//                "advocates_paypal_username" => "alain@mail.com"));
//        $objResponse = $this->objWebClient->postRedemptionRequest('example-com', $aryRedemptionRequest);
//        $this->assertEquals($this->objWebClient->getResponseCode(), 201, false);
//
//        $strLocation = $objResponse->getLocation();
//
//        $arrHeaders = $this->getHeaders();
//
//        $objClient = $this->objWebClient->getWebClient();
//        $objRequest = $objClient->get($strLocation, $arrHeaders);
//        $objResponse = $objRequest->send();
//
//        $this->assertEquals($objResponse->getStatusCode(), 200);
//    }

    public function testGetBonusesSummaryPerOriginReport() {

        $this->objWebClient->getBonusesSummaryPerOriginReport('07c159102f66a63b18d4da39bf91b06bacb7db8d');

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }
    public function testGetReferralsSummaryPerOriginReport() {

        $this->objWebClient->getReferralsSummaryPerOriginReport('07c159102f66a63b18d4da39bf91b06bacb7db8d');

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testAuthentication() {

        $this->objWebClient->testAuthentication();

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testGetBonusesRedemptionMethods() {

        $this->objWebClient->getBonusesRedemptionMethods();

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testGetBonusesRedemptionMethod() {

        $this->objWebClient->getBonusRedemptionMethod('auto-into-credit');

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testGetCurrencies() {

        $this->objWebClient->getCurrencies();

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testGetCurrency() {

        $this->objWebClient->getCurrency('USD');

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testGetRedemptionRequestsActions() {

        $this->objWebClient->getRedemptionRequestsActions();

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testGetRedemptionRequestsAction() {

        $this->objWebClient->getRedemptionRequestAction('pay-out');

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testGetRedemptionRequestStatuses() {

        $this->objWebClient->getRedemptionRequestStatuses();

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    public function testGetRedemptionRequestStatus() {

        $this->objWebClient->getRedemptionRequestStatus('requested');

        $this->assertEquals($this->objWebClient->getResponseCode(), 200);
    }

    private function getHeaders() {
        $arrHeaders = array(
            'HTTP_ACCEPT' => 'application/json',
            'CONTENT_TYPE' => 'application/json',
        );
        return $arrHeaders;
    }

}
