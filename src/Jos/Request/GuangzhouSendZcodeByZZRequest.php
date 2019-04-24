<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class GuangzhouSendZcodeByZZRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.guangzhou.sendZcodeByZZ";
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

    private $batchNum;

    public function setBatchNum($batchNum)
    {
        $this->batchNum             = $batchNum;
        $this->apiParas["batchNum"] = $batchNum;
    }

    public function getBatchNum()
    {
        return $this->batchNum;
    }

    private $appNum;

    public function setAppNum($appNum)
    {
        $this->appNum             = $appNum;
        $this->apiParas["appNum"] = $appNum;
    }

    public function getAppNum()
    {
        return $this->appNum;
    }

    private $amount;

    public function setAmount($amount)
    {
        $this->amount             = $amount;
        $this->apiParas["amount"] = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    private $id;

    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"] = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    private $zcode;

    public function setZcode($zcode)
    {
        $this->zcode             = $zcode;
        $this->apiParas["zcode"] = $zcode;
    }

    public function getZcode()
    {
        return $this->zcode;
    }

    private $zcodestr;

    public function setZcodestr($zcodestr)
    {
        $this->zcodestr             = $zcodestr;
        $this->apiParas["zcodestr"] = $zcodestr;
    }

    public function getZcodestr()
    {
        return $this->zcodestr;
    }
}





        
 

