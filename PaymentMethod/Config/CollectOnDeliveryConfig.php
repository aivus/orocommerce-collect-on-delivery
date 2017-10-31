<?php

namespace ACME\Bundle\CollectOnDeliveryBundle\PaymentMethod\Config;

use Symfony\Component\HttpFoundation\ParameterBag;

class CollectOnDeliveryConfig extends ParameterBag implements CollectOnDeliveryConfigInterface
{
    const LABEL_KEY = 'label';
    const SHORT_LABEL_KEY = 'short_label';
    const ADMIN_LABEL_KEY = 'admin_label';
    const PAYMENT_METHOD_IDENTIFIER_KEY = 'payment_method_identifier';

    /**
     * {@inheritDoc}
     */
    public function __construct(array $parameters)
    {
        parent::__construct($parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getLabel()
    {
        return (string)$this->get(self::LABEL_KEY);
    }

    /**
     * {@inheritdoc}
     */
    public function getShortLabel()
    {
        return (string)$this->get(self::SHORT_LABEL_KEY);
    }

    /**
     * {@inheritdoc}
     */
    public function getAdminLabel()
    {
        return (string)$this->get(self::ADMIN_LABEL_KEY);
    }

    /**
     * {@inheritdoc}
     */
    public function getPaymentMethodIdentifier()
    {
        return (string)$this->get(self::PAYMENT_METHOD_IDENTIFIER_KEY);
    }
}
