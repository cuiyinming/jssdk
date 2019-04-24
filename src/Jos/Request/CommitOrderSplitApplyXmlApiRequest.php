<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class CommitOrderSplitApplyXmlApiRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.commitOrderSplitApplyXmlApi";
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

    private $param;

    public function setParam($param)
    {
        $this->param             = $param;
        $this->apiParas["param"] = $param;
    }

    public function getParam()
    {
        return $this->param;
    }

}





        
 

