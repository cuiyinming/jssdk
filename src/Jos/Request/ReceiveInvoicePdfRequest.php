<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class ReceiveInvoicePdfRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.receiveInvoicePdf";
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

    private $invoiceXml;

    public function setInvoiceXml($invoiceXml)
    {
        $this->invoiceXml             = $invoiceXml;
        $this->apiParas["invoiceXml"] = $invoiceXml;
    }

    public function getInvoiceXml()
    {
        return $this->invoiceXml;
    }

}





        
 

