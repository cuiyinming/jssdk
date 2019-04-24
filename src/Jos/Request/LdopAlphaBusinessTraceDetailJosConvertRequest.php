<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class LdopAlphaBusinessTraceDetailJosConvertRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.businessTraceDetail.jos.Convert";
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

    private $wayBillCode;

    public function setWayBillCode($wayBillCode)
    {
        $this->wayBillCode             = $wayBillCode;
        $this->apiParas["wayBillCode"] = $wayBillCode;
    }

    public function getWayBillCode()
    {
        return $this->wayBillCode;
    }

    private $abbrev;

    public function setAbbrev($abbrev)
    {
        $this->abbrev             = $abbrev;
        $this->apiParas["abbrev"] = $abbrev;
    }

    public function getAbbrev()
    {
        return $this->abbrev;
    }

    private $businessCode;

    public function setBusinessCode($businessCode)
    {
        $this->businessCode             = $businessCode;
        $this->apiParas["businessCode"] = $businessCode;
    }

    public function getBusinessCode()
    {
        return $this->businessCode;
    }

}





        
 

