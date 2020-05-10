<?php

namespace fall1600\Package\Ecpay\Info;

use fall1600\Package\Ecpay\Constracts\OrderInterface;

abstract class Info
{
    /** @var string */
    protected $merchantId;

    /** @var string */
    protected $returnUrl;

    /** @var OrderInterface */
    protected $order;

    /** @var string */
    protected $paymentType;

    abstract public function getInfo();

    public function __construct(string $merchantId, string $returnUrl, string $paymentType, OrderInterface $order)
    {
        $this->merchantId = $merchantId;

        $this->returnUrl = $returnUrl;

        $this->paymentType = $paymentType;

        $this->order = $order;
    }
}
