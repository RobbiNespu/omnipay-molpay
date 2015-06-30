<?php namespace Omnipay\MolPay;

use Onipay\Common\AbstractGateway;
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
            'merchantID' => '',
            'bill_name' => '',
            'bill_email' => '',
            'bill_mobile' => '',
            'bill_description' => '',
            'country' => '',
            'returnUrl' => '',
            'vCode' => '',
            'currency' => '',
            'languageCode' => '',
            'paymentMethod' => '',
            'testMode' => false,
        );
    }
}
