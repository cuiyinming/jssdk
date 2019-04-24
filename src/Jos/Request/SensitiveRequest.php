<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;


class SensitiveRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sensitive";
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
        $this->$key = $value;
    }

    private $paramStrin;

    public function setParamStrin($paramStrin)
    {
        $this->paramStrin = $paramStrin;
        $this->apiParas["paramStrin"] = $paramStrin;
    }

    public function getParamStrin()
    {
        return $this->paramStrin;
    }

    private $param;

    public function setParam($param)
    {
        $this->param = $param;
        $this->apiParas["param"] = $param;
    }

    public function getParam()
    {
        return $this->param;
    }

    private $v1;

    public function setV1($v1)
    {
        $this->v1 = $v1;
        $this->apiParas["v1"] = $v1;
    }

    public function getV1()
    {
        return $this->v1;
    }
}





        
 

