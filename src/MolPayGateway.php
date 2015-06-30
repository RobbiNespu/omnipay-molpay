<?php namespace Omnipay\MolPay;

use Onipay\Common\AbstractGateway;
use MolPay\Distribution\InpageMolpay;

class MolPayGateway extends AbstractGateway
{
    public function getName()
    {
        return 'MolPay';
    }

    public function getDefaultParameters()
    {
        return array(
        );
    }
}
