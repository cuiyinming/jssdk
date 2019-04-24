<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class JosApplyPopSelfOpenEinvoiceRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.josApplyPopSelfOpenEinvoice";
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

    private $openData;

    public function setOpenData($openData)
    {
        $this->openData             = $openData;
        $this->apiParas["openData"] = $openData;
    }

    public function getOpenData()
    {
        return $this->openData;
    }

}





        
 

