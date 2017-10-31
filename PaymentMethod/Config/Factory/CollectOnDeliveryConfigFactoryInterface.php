<?php

namespace ACME\Bundle\CollectOnDeliveryBundle\PaymentMethod\Config\Factory;

use ACME\Bundle\CollectOnDeliveryBundle\Entity\CollectOnDeliverySettings;
use ACME\Bundle\CollectOnDeliveryBundle\PaymentMethod\Config\CollectOnDeliveryConfigInterface;

interface CollectOnDeliveryConfigFactoryInterface
{
    /**
     * @param CollectOnDeliverySettings $settings
     * @return CollectOnDeliveryConfigInterface
     */
    public function create(CollectOnDeliverySettings $settings);
}
