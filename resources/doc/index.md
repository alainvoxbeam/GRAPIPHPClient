Genius Referral PHP Client Documentation
=========

Example of the use of the methods: 

$objClient = new GRPHPAPIClient('client1@mail.com', '3433148');

//getRoot
$strResponse = $objClient->getApiUrl();
return $strResponse;

//getRoot
$jsonResponse = $objClient->getRoot();
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getAccounts
$jsonResponse = $objClient->getAccounts();
$jsonResponse = $objClient->getAccounts(1, 10, 'name::todd', '-created');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getAccount
$jsonResponse = $objClient->getAccount('example-com');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getAdvocates
$jsonResponse = $objClient->getAdvocates('example-com');
$jsonResponse = $objClient->getAdvocates('example-com', 1, 10, 'name::todd|lastname::smith', 'name|lastname');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//postAdvocate
$aryAdvocate = array('advocate' => array("name" => "Jonh", "lastname" => "Smith", "email" => "jonh@email.com", "payout_threshold" => 10));
$objClient->postAdvocate('example-com', $aryAdvocate);
return $objClient->getResponseCode();

//getAdvocate
$jsonResponse = $objClient->getAdvocate('example-com', '07c159102f66a63b18d4da39bf91b06bacb7db8d');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//patchAdvocate
$aryAdvocate = array('advocate' => array("name" => "Jonh", "lastname" => "Smith", "email" => "jonh@email.com", "payout_threshold" => 10));
$objClient->patchAdvocate('example-com', '07c159102f66a63b18d4da39bf91b06bacb7db8d', $aryAdvocate);
return $objClient->getResponseCode();

//getAdvocatePaymentMethods
$jsonResponse = $objClient->getAdvocatePaymentMethods('example-com', '07c159102f66a63b18d4da39bf91b06bacb7db8d');
$jsonResponse = $objClient->getAdvocatePaymentMethods('example-com', '07c159102f66a63b18d4da39bf91b06bacb7db8d', 1, 10, 'username::todd', '-created');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//postAdvocatePaymentMethod
$aryPaymentMethod = array("advocate_payment_method" => array("username" => "advocate@email.com", "description" => "My main paypal account", "is_active" => true));
$objClient->postAdvocatePaymentMethod('example-com', '07c159102f66a63b18d4da39bf91b06bacb7db8d', $aryPaymentMethod);
return $objClient->getResponseCode();

//getAdvocatePaymentMethod
$jsonResponse = $objClient->getAdvocatePaymentMethod('example-com', '07c159102f66a63b18d4da39bf91b06bacb7db8d', 2);
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//putAdvocatePaymentMethod
$aryPaymentMethod = array("advocate_payment_method" => array("username" => "advocate@email.com", "description" => "My main paypal account", "is_active" => true));
$objClient->putAdvocatePaymentMethod('example-com', '07c159102f66a63b18d4da39bf91b06bacb7db8d', 2, $aryPaymentMethod);
return $objClient->getResponseCode();

//getReferrals
$jsonResponse = $objClient->getReferrals('example-com', '07c159102f66a63b18d4da39bf91b06bacb7db8d');
$jsonResponse = $objClient->getReferrals('example-com', '07c159102f66a63b18d4da39bf91b06bacb7db8d', 1, 10, 'referral_origin_slug::facebook-share', '-created');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getReferral
$jsonResponse = $objClient->getReferral('example-com', '07c159102f66a63b18d4da39bf91b06bacb7db8d', 2);
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//postReferral
$aryReferral = array("referral" => array("referred_advocate_token" => "8b3856077b4243700c15d3c75d1cf9866253f643",
                "referral_origin_slug" => "facebook-share",
                "campaign_slug" => "get-10-of-for-90-days",
                "http_referer" => "http://www.geniusreferrals.com"));
$objClient->postReferral('example-com', '07c159102f66a63b18d4da39bf91b06bacb7db8d', $aryReferral);
return $objClient->getResponseCode();

//getBonuses
$jsonResponse = $objClient->getBonuses('example-com');
$jsonResponse = $objClient->getBonuses('example-com', 1, 10, 'name::todd|lastname::smith', 'name|lastname');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//postBonuses
$aryBonus = array("bonus" => array("advocate_token" => "8b3856077b4243700c15d3c75d1cf9866253f643",
                "reference" => "HSY7292D00",
                "amount_of_payments" => 3,
                "payment_amount" => 10));
$objClient->postBonuses('example-com', $aryBonus);
return $objClient->getResponseCode();

//getBonus
$jsonResponse = $objClient->getBonus('example-com', 2);
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getBonusesCheckup
$aryBonusesCheckup = array("advocate_token" => "7c4ae87701ef6e6c9ab64941215da6b1f90f5c7a","reference" => "HSY7292D00", "amount_of_payments" => 3, "payment_amount" => 10);
$jsonResponse = $objClient->getBonusesCheckup('example-com', $aryBonusesCheckup);
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getBonusesTraces
$jsonResponse = $objClient->getBonusesTraces('example-com');
$jsonResponse = $objClient->getAdvocates('example-com', 1, 10, 'name::todd|lastname::smith', 'name|lastname');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getBonusesTrace
$jsonResponse = $objClient->getBonusesTrace('example-com', 2);
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getCampains
$jsonResponse = $objClient->getCampains('example-com');
$jsonResponse = $objClient->getAdvocates('example-com', 1, 10, 'name::todd|lastname::smith', 'name|lastname');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getCampaign
$jsonResponse = $objClient->getCampaign('example-com', 'get-10-of-for-90-days');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getCampaign
$jsonResponse = $objClient->getRedemptionRequests('example-com');
$jsonResponse = $objClient->getAdvocates('example-com', 1, 10, 'name::todd|lastname::smith', 'name|lastname');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//postRedemptionRequest
$$aryRedemptionRequest = array("redemption_request" => array("advocate_token" => "07c159102f66a63b18d4da39bf91b06bacb7db8d",
                "request_status_slug" => "processing",
                "request_action_slug" => "goods",
                "currency_code" => "USD",
                "amount" => 50,
                "description" => "description",
                "advocates_paypal_username" => "alain@mail.com"));
$objClient->postRedemptionRequest('example-com', $aryRedemptionRequest);
return $objClient->getResponseCode();

//getRedemptionRequest
$jsonResponse = $objClient->getRedemptionRequest('example-com', 2);
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//patchRedemptionRequestRedemption
$objClient->patchRedemptionRequestRedemption('example-com', 2);
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getBonusesSummaryPerOriginReport
$jsonResponse = $objClient->getBonusesSummaryPerOriginReport('07c159102f66a63b18d4da39bf91b06bacb7db8d');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getReferralsSummaryPerOriginReport
$jsonResponse = $objClient->getReferralsSummaryPerOriginReport('07c159102f66a63b18d4da39bf91b06bacb7db8d');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//testAuthentication
$jsonResponse = $objClient->testAuthentication();
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getBonusesRedemptionMethods
$jsonResponse = $objClient->getBonusesRedemptionMethods();
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getBonusRedemptionMethod
$jsonResponse = $objClient->getBonusRedemptionMethod('auto-into-credit');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getCurrencies
$jsonResponse = $objClient->getCurrencies();
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getCurrency
$jsonResponse = $objClient->getCurrency('USD');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getRedemptionRequestsActions
$jsonResponse = $objClient->getRedemptionRequestsActions();
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getRedemptionRequestAction
$jsonResponse = $objClient->getRedemptionRequestAction('pay-out');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getRedemptionRequestStatuses
$jsonResponse = $objClient->getRedemptionRequestStatuses();
$aryResponse = json_decode($jsonResponse);
return $aryResponse;

//getRedemptionRequestStatus
$jsonResponse = $objClient->getRedemptionRequestStatus('requested');
$aryResponse = json_decode($jsonResponse);
return $aryResponse;