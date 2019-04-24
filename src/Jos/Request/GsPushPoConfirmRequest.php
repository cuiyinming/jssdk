<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class GsPushPoConfirmRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.gs.pushPoConfirm";
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

    private $message;

    public function setMessage($message)
    {
        $this->message             = $message;
        $this->apiParas["message"] = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

}





        
 

