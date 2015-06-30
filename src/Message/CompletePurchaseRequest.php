<?php namespace Omnipay\MolPay\Message;

use Omnipay\Common\Exception\InvalidResponseException;

class CompletePurchaseReques extends PurchaseRequest()
{
    public function getData()
    {
        $data = $this->httpRequest->request->all();

        $secret_key = isset($data['skey'] ? $data['skey'] : null;
        $pay_date = isset($data['paydate']) ? $data['paydate'] : '';
        $domain = isset($data['domain']) ? $data['domain'] : '';
        $app_code = isset($data['appcode']) ? $data['appcode'] : '';

        $secret_code = md5($paydate.$domain.$this->getVerifyCode().$app_code.$this->getVerifyKey());

        if ($secret_code != $secret_key) {
            throw new InvalidResponseExpception('Invalid transaction');
        }

        return $this->httpRequest->request->all();
    }

    public function sendData($data)
    {
        return $this->response = new CompletePurchaseResponse($this, $data);
    }
}
