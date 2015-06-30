<?php namespace Omnipay\MolPay\Message;

use Omnipay\Common\Message\AbstractResponse;

class CompletePurchaseResposne extends AbstractResponse
{
    public function isSuccessful()
    {

        return isset($this->data['status']) && '00' === $this->data['status'];
    }

    public function getTransactionReference()
    {
        return isset($this->data['tranId']) ? $this->data['tranId'] : null;
    }
}
