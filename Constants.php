<?php
class RequestEnvelope 
{
	 static $requestEnvelopeErrorLanguage = "requestEnvelope.errorLanguage";
}
 //AdaptivePayments API Request constants	  
class PaymentDetails 
{
	static $payKey = "payKey";
}
class CancelPreapproval
{
	static $preapprovalKey = "preapprovalKey";
}
class ConvertCurrency
{
	static $baseAmountList_currency_0_amount = "baseAmountList.currency(0).amount";
	static $baseAmountList_currency_0_code ="baseAmountList.currency(0).code";
	static $convertToCurrencyList_currencyCode_0 ="convertToCurrencyList.currencyCode(0)";
	static $convertToCurrencyList_currencyCode_1 ="convertToCurrencyList.currencyCode(1)";
	static $convertToCurrencyList_currencyCode_2 ="convertToCurrencyList.currencyCode(2)";
}
class ExecutePayment
{
	static $payKey = "payKey";
}
class GetPaymentOptions
{
	static $payKey = "payKey";
}
class Pay
{
	static $actionType = "actionType";
	static $cancelUrl = "cancelUrl";
	static $returnUrl ="returnUrl";
	static $currencyCode ="currencyCode";
	 static $receiverAmount= array(
			 "receiverList.receiver[0].amount",
	 		 "receiverList.receiver[1].amount",
			 "receiverList.receiver[2].amount",
			 "receiverList.receiver[3].amount",
			 "receiverList.receiver[4].amount",
			 "receiverList.receiver[5].amount",
			 );
			  static $receiverEmail = array(
			 "receiverList.receiver[0].email",
			 "receiverList.receiver[1].email",
			 "receiverList.receiver[2].email",
			 "receiverList.receiver[3].email",
			 "receiverList.receiver[4].email",
			 "receiverList.receiver[5].email",
			 
			);
			 static $primaryReceiver = array(
			 "receiverList.receiver[0].primary[0]",
			"receiverList.receiver[1].primary[1]",
			 "receiverList.receiver[2].primary[2]",
			 "receiverList.receiver[3].primary[3]",
			 "receiverList.receiver[4].primary[4]",
			 "receiverList.receiver[5].primary[5]",
			 
			);
	
	static $receiverPrimary6 ="receiverList.receiver[5].primary[5]";
	
	static $senderEmail= "senderEmail";
	static $clientDetails_deviceId= "clientDetails.deviceId";
	static $clientDetails_ipAddress ="clientDetails.ipAddress";
	static $clientDetails_applicationId= "clientDetails.applicationId";
	static $memo ="memo";
	static $feesPayer ="feesPayer";
	static $preapprovalKey ="preapprovalKey";
	
}
class Preapproval
{
	static $cancelUrl = 'cancelUrl' ;
	static $returnUrl  = 'returnUrl' ;
	static $currencyCode ='currencyCode';
	static $startingDate ='startingDate' ;
	static $endingDate	 = 'endingDate' ;
	static $maxNumberOfPayments	= 'maxNumberOfPayments' ;
	static $maxTotalAmountOfAllPayments ='maxTotalAmountOfAllPayments' ;
	static $requestEnvelope_senderEmail	= 'requestEnvelope.senderEmail' ;

}
class PreapprovalDetail
{
	static $preapprovalKey= 'preapprovalKey';
}
class Refund
{
	static $currencyCode = 'currencyCode';
	static $payKey = 'payKey';
	static $receiverList_receiver_0_amount = 'receiverList.receiver[0].amount';
	static $receiverList_receiver_0_email = 'receiverList.receiver[0].email';
}
class SetPaymentOption
{
	static $displayOptions_emailHeaderImageUrl ='displayOptions.emailHeaderImageUrl';
	static $displayOptions_emailMarketingImageUrl= 'displayOptions.emailMarketingImageUrl';
	static $payKey= 'payKey' ;
}
 //AdaptiveAccounts API Request constants	
class AddBankAccount
{
	         static  $bankAccountNumber = "bankAccountNumber";
             static  $bankAccountType = "bankAccountType";
             static  $bankCountryCode = "bankCountryCode";
             static  $bankName = "bankName";
             static  $confirmationType = "confirmationType";
             static  $emailAddress = "emailAddress";
             static  $routingNumber = "routingNumber";
             static  $webOptionscancelUrl = "webOptions.cancelUrl";
             static  $webOptionscancelUrlDescription = "webOptions.cancelUrlDescription";
             static  $webOptionsreturnUrl = "webOptions.returnUrl";
             static  $webOptionsreturnUrlDescription = "webOptions.returnUrlDescription";
             static  $createAccountKey = "createAccountKey";
}
class AddPaymentCard
{
	        static $cardNumber = "cardNumber";
            static $cardType = "cardType";
            static $confirmationType = "confirmationType";
            static $emailAddress = "emailAddress";
            static $expirationDatemonth = "expirationDate.month";
            static $expirationDateyear = "expirationDate.year";
            static $billingAddressline1 = "billingAddress.line1";
            static $billingAddressline2 = "billingAddress.line2";
            static $billingAddresscity = "billingAddress.city";
            static $billingAddressstate = "billingAddress.state";
            static $billingAddresspostalCode = "billingAddress.postalCode";
            static $billingAddresscountryCode = "billingAddress.countryCode";
            static $nameOnCardfirstName = "nameOnCard.firstName";
            static $nameOnCardlastName = "nameOnCard.lastName";
            static $webOptionscancelUrl = "webOptions.cancelUrl";
            static $webOptionscancelUrlDescription = "webOptions.cancelUrlDescription";
            static $webOptionsreturnUrl = "webOptions.returnUrl";
            static $webOptionsreturnUrlDescription = "webOptions.returnUrlDescription";
            static $createAccountKey = "createAccountKey";
            static $cardVerificationNumber = "cardVerificationNumber";
}
class CreateAccount
{
	
	        static $accountType="accountType";
            static $addresscity="address.city";
            static $addresscountryCode="address.countryCode";
            static $addressline1="address.line1";
            static $addressline2="address.line2";
            static $addresspostalCode="address.postalCode";
            static $addressstate="address.state";
            static $citizenshipCountryCode="citizenshipCountryCode";
            static $contactPhoneNumber="contactPhoneNumber";
            static $currencyCode="currencyCode";
            static $dateOfBirth="dateOfBirth";
            static $namefirstName="name.firstName";
            static $namelastName="name.lastName";
            static $namemiddleName="name.middleName";
            static $namesalutation="name.salutation";
            static $notificationURL="notificationURL";
            static $partnerField1="partnerField1";
            static $partnerField2="partnerField2";
            static $partnerField3="partnerField3";
            static $partnerField4="partnerField4";
            static $partnerField5="partnerField5";
            static $preferredLanguageCode="preferredLanguageCode";
            static $createAccountWebOptionsreturnUrl="createAccountWebOptions.returnUrl";
            static $registrationType="registrationType";
            static $sandboxEmailAddress="sandboxEmailAddress";
            static $emailAddress="emailAddress";
            //For Business Account
            static $businessInfoaverageMonthlyVolume="businessInfo.averageMonthlyVolume";
            static $businessInfoaveragePrice = "businessInfo.averagePrice";
            static $businessInfobusinessAddresscity = "businessInfo.businessAddress.city";
            static $businessInfobusinessAddresscountryCode = "businessInfo.businessAddress.countryCode";
            static $businessInfobusinessAddressline1 = "businessInfo.businessAddress.line1";
            static $businessInfobusinessAddressline2 = "businessInfo.businessAddress.line2";
            static $businessInfobusinessAddresspostalCode = "businessInfo.businessAddress.postalCode";
            static $businessInfobusinessAddressstate = "businessInfo.businessAddress.state";
            static $businessInfobusinessName = "businessInfo.businessName";
            static $businessInfobusinessType = "businessInfo.businessType";
            static $businessInfocustomerServiceEmail = "businessInfo.customerServiceEmail";
            static $businessInfocustomerServicePhone = "businessInfo.customerServicePhone";
            static $businessInfodateOfEstablishment = "businessInfo.dateOfEstablishment";
            static $businessInfopercentageRevenueFromOnline = "businessInfo.percentageRevenueFromOnline";
            static $businessInfosalesVenue = "businessInfo.salesVenue";
            static $businessInfocategory = "businessInfo.category";
            static $businessInfosubCategory = "businessInfo.subCategory";
            static $businessInfowebSite = "businessInfo.webSite";
            static $businessInfoworkPhone = "businessInfo.workPhone";
}
class GetVerifiedStatus
{
			static $emailAddress="emailAddress";
            static $matchCriteria="matchCriteria";
            static $firstName="firstName";
            static $lastName = "lastName";
}
class SetFundingSourceConfirmed
{
	 		static $emailAddress="emailAddress";
            static $fundingSourceKey = "fundingSourceKey";
}

class RequestPermissions
{
		static $callback = "callback";
	      static $scope = array(
			 "scope(0)",
			 "scope(1)",
			 "scope(2)",
			 "scope(3)",
			 "scope(4)",
			 "scope(5)",
			 "scope(6)",
			 "scope(7)",
			 "scope(8)",
			 "scope(9)",
			 "scope(10)",
			 "scope(11)",
			 "scope(12)",
			 "scope(13)",
			 "scope(14)",
			 "scope(15)",
			 "scope(16)"
			);
}
class GetAccessToken
{
	 		static $token="token";
	 		static $verifier="verifier";
}

class GetPermissions
{
	 		static $token="token";
}
class CancelPermissions
{
	 		static $token="token";
}
?>