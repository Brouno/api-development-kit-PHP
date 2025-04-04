<?php
/**
 * ConsoleAdminService class file
 * 
 * @author    inWebo
 * @copyright inWebo Technologies
 * @package   API
 */

namespace API;

/**
 * loginsQuery class
 */
require_once 'loginsQuery.php';
/**
 * loginsQueryResponse class
 */
require_once 'loginsQueryResponse.php';
/**
 * LoginsQueryResult class
 */
require_once 'LoginsQueryResult.php';
/**
 * loginSearch class
 */
require_once 'loginSearch.php';
/**
 * loginSearchResponse class
 */
require_once 'loginSearchResponse.php';
/**
 * LoginSearchResult class
 */
require_once 'LoginSearchResult.php';
/**
 * loginQuery class
 */
require_once 'loginQuery.php';
/**
 * loginQueryResponse class
 */
require_once 'loginQueryResponse.php';
/**
 * LoginQueryResult class
 */
require_once 'LoginQueryResult.php';
/**
 * loginCreate class
 */
require_once 'loginCreate.php';
/**
 * loginCreateResponse class
 */
require_once 'loginCreateResponse.php';
/**
 * LoginCreateResult class
 */
require_once 'LoginCreateResult.php';
/**
 * loginUpdate class
 */
require_once 'loginUpdate.php';
/**
 * loginUpdateResponse class
 */
require_once 'loginUpdateResponse.php';
/**
 * loginRestore class
 */
require_once 'loginRestore.php';
/**
 * loginRestoreResponse class
 */
require_once 'loginRestoreResponse.php';
/**
 * loginResetPwd class
 */
require_once 'loginResetPwd.php';
/**
 * loginResetPwdResponse class
 */
require_once 'loginResetPwdResponse.php';
/**
 * loginAddDevice class
 */
require_once 'loginAddDevice.php';
/**
 * loginAddDeviceResponse class
 */
require_once 'loginAddDeviceResponse.php';
/**
 * loginDeleteTool class
 */
require_once 'loginDeleteTool.php';
/**
 * loginDeleteToolResponse class
 */
require_once 'loginDeleteToolResponse.php';
/**
 * loginDelete class
 */
require_once 'loginDelete.php';
/**
 * loginDeleteResponse class
 */
require_once 'loginDeleteResponse.php';
/**
 * loginSendByMail class
 */
require_once 'loginSendByMail.php';
/**
 * loginSendByMailResponse class
 */
require_once 'loginSendByMailResponse.php';
/**
 * IWDS_check class
 */
require_once 'IWDS_check.php';
/**
 * IWDS_checkResponse class
 */
require_once 'IWDS_checkResponse.php';
/**
 * loginGetGroups class
 */
require_once 'loginGetGroups.php';
/**
 * loginGetGroupsResponse class
 */
require_once 'loginGetGroupsResponse.php';
/**
 * LoginGetGroupsResult class
 */
require_once 'LoginGetGroupsResult.php';
/**
 * loginsQueryByGroup class
 */
require_once 'loginsQueryByGroup.php';
/**
 * loginsQueryByGroupResponse class
 */
require_once 'loginsQueryByGroupResponse.php';
/**
 * loginResetPwdExtended class
 */
require_once 'loginResetPwdExtended.php';
/**
 * loginResetPwdExtendedResponse class
 */
require_once 'loginResetPwdExtendedResponse.php';
/**
 * loginGetInfoFromLink class
 */
require_once 'loginGetInfoFromLink.php';
/**
 * loginGetInfoFromLinkResponse class
 */
require_once 'loginGetInfoFromLinkResponse.php';
/**
 * loginGetCodeFromLink class
 */
require_once 'loginGetCodeFromLink.php';
/**
 * loginGetCodeFromLinkResponse class
 */
require_once 'loginGetCodeFromLinkResponse.php';
/**
 * loginActivateCode class
 */
require_once 'loginActivateCode.php';
/**
 * loginActivateCodeResponse class
 */
require_once 'loginActivateCodeResponse.php';
/**
 * loginResetPINErrorCounter class
 */
require_once 'loginResetPINErrorCounter.php';
/**
 * loginResetPINErrorCounterResponse class
 */
require_once 'loginResetPINErrorCounterResponse.php';
/**
 * serviceGroupsQuery class
 */
require_once 'serviceGroupsQuery.php';
/**
 * serviceGroupsQueryResponse class
 */
require_once 'serviceGroupsQueryResponse.php';
/**
 * ServiceGroupsQueryResult class
 */
require_once 'ServiceGroupsQueryResult.php';
/**
 * groupAccountQuery class
 */
require_once 'groupAccountQuery.php';
/**
 * groupAccountQueryResponse class
 */
require_once 'groupAccountQueryResponse.php';
/**
 * GroupAccountQueryResult class
 */
require_once 'GroupAccountQueryResult.php';
/**
 * groupAccountCreate class
 */
require_once 'groupAccountCreate.php';
/**
 * groupAccountCreateResponse class
 */
require_once 'groupAccountCreateResponse.php';
/**
 * groupAccountUpdate class
 */
require_once 'groupAccountUpdate.php';
/**
 * groupAccountUpdateResponse class
 */
require_once 'groupAccountUpdateResponse.php';
/**
 * groupAccountDelete class
 */
require_once 'groupAccountDelete.php';
/**
 * groupAccountDeleteResponse class
 */
require_once 'groupAccountDeleteResponse.php';

/**
 * ConsoleAdminService class
 * 
 *  
 * 
 * @author    inWebo
 * @copyright inWebo Technologies
 * @package   API
 */
class ConsoleAdminService extends \SoapClient {

  public function ConsoleAdminService($wsdl = "Provisioning.wsdl", $options = array()) {
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param loginsQuery $parameters
   * @return loginsQueryResponse
   */
  public function loginsQuery(loginsQuery $parameters) {
    return $this->__soapCall('loginsQuery', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginSearch $parameters
   * @return loginSearchResponse
   */
  public function loginSearch(loginSearch $parameters) {
    return $this->__soapCall('loginSearch', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginQuery $parameters
   * @return loginQueryResponse
   */
  public function loginQuery(loginQuery $parameters) {
    return $this->__soapCall('loginQuery', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginCreate $parameters
   * @return loginCreateResponse
   */
  public function loginCreate(loginCreate $parameters) {
    return $this->__soapCall('loginCreate', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginUpdate $parameters
   * @return loginUpdateResponse
   */
  public function loginUpdate(loginUpdate $parameters) {
    return $this->__soapCall('loginUpdate', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginRestore $parameters
   * @return loginRestoreResponse
   */
  public function loginRestore(loginRestore $parameters) {
    return $this->__soapCall('loginRestore', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginResetPwd $parameters
   * @return loginResetPwdResponse
   */
  public function loginResetPwd(loginResetPwd $parameters) {
    return $this->__soapCall('loginResetPwd', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginAddDevice $parameters
   * @return loginAddDeviceResponse
   */
  public function loginAddDevice(loginAddDevice $parameters) {
    return $this->__soapCall('loginAddDevice', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginDeleteTool $parameters
   * @return loginDeleteToolResponse
   */
  public function loginDeleteTool(loginDeleteTool $parameters) {
    return $this->__soapCall('loginDeleteTool', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginDelete $parameters
   * @return loginDeleteResponse
   */
  public function loginDelete(loginDelete $parameters) {
    return $this->__soapCall('loginDelete', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginSendByMail $parameters
   * @return loginSendByMailResponse
   */
  public function loginSendByMail(loginSendByMail $parameters) {
    return $this->__soapCall('loginSendByMail', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param IWDS_check $parameters
   * @return IWDS_checkResponse
   */
  public function IWDS_check(IWDS_check $parameters) {
    return $this->__soapCall('IWDS_check', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginGetGroups $parameters
   * @return loginGetGroupsResponse
   */
  public function loginGetGroups(loginGetGroups $parameters) {
    return $this->__soapCall('loginGetGroups', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginsQueryByGroup $parameters
   * @return loginsQueryByGroupResponse
   */
  public function loginsQueryByGroup(loginsQueryByGroup $parameters) {
    return $this->__soapCall('loginsQueryByGroup', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginResetPwdExtended $parameters
   * @return loginResetPwdExtendedResponse
   */
  public function loginResetPwdExtended(loginResetPwdExtended $parameters) {
    return $this->__soapCall('loginResetPwdExtended', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginGetInfoFromLink $parameters
   * @return loginGetInfoFromLinkResponse
   */
  public function loginGetInfoFromLink(loginGetInfoFromLink $parameters) {
    return $this->__soapCall('loginGetInfoFromLink', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginGetCodeFromLink $parameters
   * @return loginGetCodeFromLinkResponse
   */
  public function loginGetCodeFromLink(loginGetCodeFromLink $parameters) {
    return $this->__soapCall('loginGetCodeFromLink', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginActivateCode $parameters
   * @return loginActivateCodeResponse
   */
  public function loginActivateCode(loginActivateCode $parameters) {
    return $this->__soapCall('loginActivateCode', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginResetPINErrorCounter $parameters
   * @return loginResetPINErrorCounterResponse
   */
  public function loginResetPINErrorCounter(loginResetPINErrorCounter $parameters) {
    return $this->__soapCall('loginResetPINErrorCounter', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param serviceGroupsQuery $parameters
   * @return serviceGroupsQueryResponse
   */
  public function serviceGroupsQuery(serviceGroupsQuery $parameters) {
    return $this->__soapCall('serviceGroupsQuery', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param groupAccountQuery $parameters
   * @return groupAccountQueryResponse
   */
  public function groupAccountQuery(groupAccountQuery $parameters) {
    return $this->__soapCall('groupAccountQuery', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param groupAccountCreate $parameters
   * @return groupAccountCreateResponse
   */
  public function groupAccountCreate(groupAccountCreate $parameters) {
    return $this->__soapCall('groupAccountCreate', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param groupAccountUpdate $parameters
   * @return groupAccountUpdateResponse
   */
  public function groupAccountUpdate(groupAccountUpdate $parameters) {
    return $this->__soapCall('groupAccountUpdate', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param groupAccountDelete $parameters
   * @return groupAccountDeleteResponse
   */
  public function groupAccountDelete(groupAccountDelete $parameters) {
    return $this->__soapCall('groupAccountDelete', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

}

