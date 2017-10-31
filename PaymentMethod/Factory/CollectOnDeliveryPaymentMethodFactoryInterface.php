<?php

namespace ACME\Bundle\CollectOnDeliveryBundle\PaymentMethod\Factory;

use ACME\Bundle\CollectOnDeliveryBundle\PaymentMethod\Config\CollectOnDeliveryConfigInterface;
use Oro\Bundle\PaymentBundle\Method\PaymentMethodInterface;

interface CollectOnDeliveryPaymentMethodFactoryInterface
{
    /**
     * @param CollectOnDeliveryConfigInterface $config
     * @return PaymentMethodInterface
     */
    public function create(CollectOnDeliveryConfigInterface $config);
}
