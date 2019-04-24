<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class QueryOrderAmountWithExpandRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.queryOrderAmountWithExpand";
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

    private $systemName;

    public function setSystemName($systemName)
    {
        $this->systemName             = $systemName;
        $this->apiParas["systemName"] = $systemName;
    }

    public function getSystemName()
    {
        return $this->systemName;
    }

    private $systemKey;

    public function setSystemKey($systemKey)
    {
        $this->systemKey             = $systemKey;
        $this->apiParas["systemKey"] = $systemKey;
    }

    public function getSystemKey()
    {
        return $this->systemKey;
    }

}





        
 

