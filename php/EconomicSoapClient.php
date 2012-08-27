<?php
/**
 * PHP extensions must be enabled: php_soap, php_openssl
 * @author igreactive
 *
 */
class EconomicSoapClient {
	private static $client;
	
	function __construct() {
		$this->connect();
	}
	
	/**
	 * Note: This might be helpfull: 
	 * http://apiforum.e-conomic.com/soap-f8/economic-api-exceptions-authorizationexception-t4678.html
	 */
	private function connect() {
		require_once 'includes/web_service_credentials.php';
		ini_set('max_execution_time', 0);
		try {
			$this->client = new SoapClient("https://www.e-conomic.com/secure/api1/EconomicWebservice.asmx?WSDL", array("trace" => 1, "exceptions" => 1));
			$this->client->Connect($credentials);
		} catch (SoapFault $fault) {
			trigger_error(sprintf("Soap fault %s - %s", $fault->faultcode, $fault->faultstring), E_USER_ERROR);
		}
	}
	
	public function getAccounts(){
		$accounts = array();
		
		try {
			$accounts_result = $this->client->Account_GetAll()->Account_GetAllResult;
			
			if (is_object($accounts_result) && property_exists($accounts_result, 'AccountHandle')) {
				$accounts_handle = $this->client->Account_GetDataArray(array(
						'entityHandles' => $accounts_result->AccountHandle
				))->Account_GetDataArrayResult;
			
				if (is_object($accounts_handle) && property_exists($accounts_handle, 'AccountData')) {
					$accounts = $accounts_handle->AccountData;
				} else {
					throw new Exception('No Account data available '. $e->getMessage());
				}
			}			
		} catch (Exception $e) {
			throw new Exception('Accounts could not be returned '. $e->getMessage());
		}
		
		return $accounts;
	}
}