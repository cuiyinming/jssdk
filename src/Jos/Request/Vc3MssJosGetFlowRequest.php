<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class Vc3MssJosGetFlowRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc3.mss.jos.getFlow";
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

    private $customsId;

    public function setCustomsId($customsId)
    {
        $this->customsId             = $customsId;
        $this->apiParas["customsId"] = $customsId;
    }

    public function getCustomsId()
    {
        return $this->customsId;
    }

    private $serviceId;

    public function setServiceId($serviceId)
    {
        $this->serviceId             = $serviceId;
        $this->apiParas["serviceId"] = $serviceId;
    }

    public function getServiceId()
    {
        return $this->serviceId;
    }

    private $flowSign;

    public function setFlowSign($flowSign)
    {
        $this->flowSign             = $flowSign;
        $this->apiParas["flowSign"] = $flowSign;
    }

    public function getFlowSign()
    {
        return $this->flowSign;
    }

}





        
 

