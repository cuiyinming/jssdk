<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class ZhuhaiCustomsQueryOrderByParamRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.zhuhai.customs.queryOrderByParam";
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

    private $beginDate;

    public function setBeginDate($beginDate)
    {
        $this->beginDate             = $beginDate;
        $this->apiParas["beginDate"] = $beginDate;
    }

    public function getBeginDate()
    {
        return $this->beginDate;
    }

    private $endDate;

    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["endDate"] = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    private $page;

    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"] = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    private $type;

    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

}





        
 

