<?php

namespace ACME\Bundle\CollectOnDeliveryBundle\PaymentMethod\View\Factory;

use ACME\Bundle\CollectOnDeliveryBundle\PaymentMethod\Config\CollectOnDeliveryConfigInterface;
use Oro\Bundle\PaymentBundle\Method\View\PaymentMethodViewInterface;

interface CollectOnDeliveryViewFactoryInterface
{
    /**
     * @param CollectOnDeliveryConfigInterface $config
     * @return PaymentMethodViewInterface
     */
    public function create(CollectOnDeliveryConfigInterface $config);
}
