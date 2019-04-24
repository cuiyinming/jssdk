<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class SellerCouponReadGetCouponByIdRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.coupon.read.getCouponById";
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

    private $ip;

    public function setIp($ip)
    {
        $this->ip             = $ip;
        $this->apiParas["ip"] = $ip;
    }

    public function getIp()
    {
        return $this->ip;
    }

    private $port;

    public function setPort($port)
    {
        $this->port             = $port;
        $this->apiParas["port"] = $port;
    }

    public function getPort()
    {
        return $this->port;
    }

    private $couponId;

    public function setCouponId($couponId)
    {
        $this->couponId             = $couponId;
        $this->apiParas["couponId"] = $couponId;
    }

    public function getCouponId()
    {
        return $this->couponId;
    }

}





        
 

