<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class CrmSamsMemberSynRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.crm.sams.member.syn";
    }

    public function getApiParas()
    {
        return json_encode($this->apiParas);
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }

    private $samCardNo;

    public function setSamCardNo($samCardNo)
    {
        $this->samCardNo             = $samCardNo;
        $this->apiParas["samCardNo"] = $samCardNo;
    }

    public function getSamCardNo()
    {
        return $this->samCardNo;
    }

    private $cardHolderNbr;

    public function setCardHolderNbr($cardHolderNbr)
    {
        $this->cardHolderNbr             = $cardHolderNbr;
        $this->apiParas["cardHolderNbr"] = $cardHolderNbr;
    }

    public function getCardHolderNbr()
    {
        return $this->cardHolderNbr;
    }

    private $cardHolderType;

    public function setCardHolderType($cardHolderType)
    {
        $this->cardHolderType             = $cardHolderType;
        $this->apiParas["cardHolderType"] = $cardHolderType;
    }

    public function getCardHolderType()
    {
        return $this->cardHolderType;
    }

    private $chTypeShortDesc;

    public function setChTypeShortDesc($chTypeShortDesc)
    {
        $this->chTypeShortDesc             = $chTypeShortDesc;
        $this->apiParas["chTypeShortDesc"] = $chTypeShortDesc;
    }

    public function getChTypeShortDesc()
    {
        return $this->chTypeShortDesc;
    }

    private $cardStatCd;

    public function setCardStatCd($cardStatCd)
    {
        $this->cardStatCd             = $cardStatCd;
        $this->apiParas["cardStatCd"] = $cardStatCd;
    }

    public function getCardStatCd()
    {
        return $this->cardStatCd;
    }

    private $currStatusCode;

    public function setCurrStatusCode($currStatusCode)
    {
        $this->currStatusCode             = $currStatusCode;
        $this->apiParas["currStatusCode"] = $currStatusCode;
    }

    public function getCurrStatusCode()
    {
        return $this->currStatusCode;
    }

    private $memberCode;

    public function setMemberCode($memberCode)
    {
        $this->memberCode             = $memberCode;
        $this->apiParas["memberCode"] = $memberCode;
    }

    public function getMemberCode()
    {
        return $this->memberCode;
    }

    private $startDate;

    public function setStartDate($startDate)
    {
        $this->startDate             = $startDate;
        $this->apiParas["startDate"] = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    private $expireDate;

    public function setExpireDate($expireDate)
    {
        $this->expireDate             = $expireDate;
        $this->apiParas["expireDate"] = $expireDate;
    }

    public function getExpireDate()
    {
        return $this->expireDate;
    }

    private $fullName;

    public function setFullName($fullName)
    {
        $this->fullName             = $fullName;
        $this->apiParas["fullName"] = $fullName;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    private $birthDate;

    public function setBirthDate($birthDate)
    {
        $this->birthDate             = $birthDate;
        $this->apiParas["birthDate"] = $birthDate;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    private $phoneNbr;

    public function setPhoneNbr($phoneNbr)
    {
        $this->phoneNbr             = $phoneNbr;
        $this->apiParas["phoneNbr"] = $phoneNbr;
    }

    public function getPhoneNbr()
    {
        return $this->phoneNbr;
    }

    private $phoneNbr2;

    public function setPhoneNbr2($phoneNbr2)
    {
        $this->phoneNbr2             = $phoneNbr2;
        $this->apiParas["phoneNbr2"] = $phoneNbr2;
    }

    public function getPhoneNbr2()
    {
        return $this->phoneNbr2;
    }

    private $emailAddress;

    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress             = $emailAddress;
        $this->apiParas["emailAddress"] = $emailAddress;
    }

    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    private $certType;

    public function setCertType($certType)
    {
        $this->certType             = $certType;
        $this->apiParas["certType"] = $certType;
    }

    public function getCertType()
    {
        return $this->certType;
    }

    private $ctzidNbr;

    public function setCtzidNbr($ctzidNbr)
    {
        $this->ctzidNbr             = $ctzidNbr;
        $this->apiParas["ctzidNbr"] = $ctzidNbr;
    }

    public function getCtzidNbr()
    {
        return $this->ctzidNbr;
    }

    private $driverNbr;

    public function setDriverNbr($driverNbr)
    {
        $this->driverNbr             = $driverNbr;
        $this->apiParas["driverNbr"] = $driverNbr;
    }

    public function getDriverNbr()
    {
        return $this->driverNbr;
    }

    private $passportNbr;

    public function setPassportNbr($passportNbr)
    {
        $this->passportNbr             = $passportNbr;
        $this->apiParas["passportNbr"] = $passportNbr;
    }

    public function getPassportNbr()
    {
        return $this->passportNbr;
    }

    private $crmCardNo;

    public function setCrmCardNo($crmCardNo)
    {
        $this->crmCardNo             = $crmCardNo;
        $this->apiParas["crmCardNo"] = $crmCardNo;
    }

    public function getCrmCardNo()
    {
        return $this->crmCardNo;
    }

    private $crmPin;

    public function setCrmPin($crmPin)
    {
        $this->crmPin             = $crmPin;
        $this->apiParas["crmPin"] = $crmPin;
    }

    public function getCrmPin()
    {
        return $this->crmPin;
    }
}





        
 

