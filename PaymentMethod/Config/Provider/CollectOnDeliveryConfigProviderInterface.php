<?php

namespace ACME\Bundle\CollectOnDeliveryBundle\PaymentMethod\Config\Provider;

use ACME\Bundle\CollectOnDeliveryBundle\PaymentMethod\Config\CollectOnDeliveryConfigInterface;

interface CollectOnDeliveryConfigProviderInterface
{
    /**
     * @return CollectOnDeliveryConfigInterface[]
     */
    public function getPaymentConfigs();

    /**
     * @param string $identifier
     * @return CollectOnDeliveryConfigInterface|null
     */
    public function getPaymentConfig($identifier);

    /**
     * @param string $identifier
     * @return bool
     */
    public function hasPaymentConfig($identifier);
}
