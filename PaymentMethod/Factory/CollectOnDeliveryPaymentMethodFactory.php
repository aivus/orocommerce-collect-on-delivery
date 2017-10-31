<?php

namespace ACME\Bundle\CollectOnDeliveryBundle\PaymentMethod\Factory;

use ACME\Bundle\CollectOnDeliveryBundle\PaymentMethod\Config\CollectOnDeliveryConfigInterface;
use ACME\Bundle\CollectOnDeliveryBundle\PaymentMethod\CollectOnDelivery;

class CollectOnDeliveryPaymentMethodFactory implements CollectOnDeliveryPaymentMethodFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function create(CollectOnDeliveryConfigInterface $config)
    {
        return new CollectOnDelivery($config);
    }
}
