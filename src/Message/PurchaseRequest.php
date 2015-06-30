<?php namespace OmniPay\MolPay\Message;

class PurchaseRequest extends AbstractRequest
{
    protected $liveEndpoint = 'https://www.onlinepayment.com.my/MOLPay/pay/';
    protected $testEndpoint = 'https://www.onlinepayment.com.my/MOLPay/pay/';


    public function getData()
    {
        $data = array();
        $data['amount'] = $this->getAmount();
        $data['cur'] = $this->getCurrency();
        $data['orderid'] = $this->getTransactionId();
        $data['bill_name'] = $this->getBillingName();
        $data['bill_email'] = $this->getBillingEmail();
        $data['bill_mobile'] = $this->getBillingMobile();
        $data['bill_desc'] = $this->getBillingDescription();
        $data['country'] = $this->getCountry();
        $data['returnurl'] = $this->getReturnUrl();
        $data['vcode'] = $this->getVerifyCode();

        return $data;
    }

    public function sendData($data)
    {
        return $this->response = new PurchaseResponse($this, $data);
    }

    public function getEndpoint()
    {
        return $this->getTestMode() ? $this->testEndpoint.'molpaydemo' : $this->liveEndpoint.$this->getMerchantId();
    }
}
