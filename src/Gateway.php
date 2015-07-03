<?php namespace Omnipay\MolPay;

use Omnipay\Common\AbstractGateway;
use MolPay\Distribution\InpageMolpay;

class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'MolPay';
    }

    public function getDefaultParameters()
    {
        return array(
            'merchantId' => '',
            'verifyKey' => '',
            'billingName' => '',
            'billingEmail' => '',
            'billingMobile' => '',
            'billingDescription' => '',
            'country' => '',
            'returnUrl' => '',
            'currency' => '',
            'languageCode' => '',
            'paymentMethod' => '',
            'testMode' => false,
        );
    }

    public function getMerchantId()
    {
        return $this->getParameter('merchantID');
    }

    public function setMerchantId($value)
    {
        return $this->setParameter('merchantID', $value);
    }

    public function getVerifyKey()
    {
        return $this->getParameter('verifyKey');
    }

    public function setVerifyKey($value)
    {
        return $this->setParameter('verifyKey', $value);
    }

    public function getBillingName()
    {
        return $this->getParameter('billingName');
    }

    public function setBillingName($value)
    {
        return $this->setParameter('billingName', $value);
    }

    public function getBillingEmail()
    {
        return $this->getParameter('billingEmail');
    }

    public function setBillingEmail($value)
    {
        return $this->setParameter('billingEmail', $value);
    }

    public function getBillingMobile()
    {
        return $this->getParameter('billingMobile');
    }

    public function setBillingMobile($value)
    {
        return $this->setParameter('billingMobile', $value);
    }

    public function getBillingDesc()
    {
        return $this->getParameter('billingDescription');
    }

    public function setBillingDesc($value)
    {
        return $this->setParameter('billingDescription', $value);
    }

    public function getCountry()
    {
        return $this->getParameter('country');
    }

    public function setCountry($value)
    {
        return $this->setParameter('country', $value);
    }

    public function getReturnUrl()
    {
        return $this->getParameter('returnUrl');
    }

    public function setReturnUrl($value)
    {
        return $this->setParameter('returnUrl', $value);
    }

    public function getCurrency()
    {
        return $this->getParameter('currency');
    }

    public function setCurrency($value)
    {
        return $this->setParameter('currency', $value);
    }

    public function getLanguageCode()
    {
        return $this->getParameter('languageCode');
    }

    public function setLanguageCode($value)
    {
        return $this->setParameter('languageCode', $value);
    }

    public function getPaymentMethod()
    {
        return $this->getParameter('paymentMethod');
    }

    public function setPaymentMethod($value)
    {
        return $this->setParameter('paymentMethod', $value);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\MolPay\Message\PurchaseRequest', $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\MolPay\Message\CompletePurchaseRequest', $parameters);
    }
}
