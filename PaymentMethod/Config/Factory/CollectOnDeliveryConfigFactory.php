<?php

namespace ACME\Bundle\CollectOnDeliveryBundle\PaymentMethod\Config\Factory;

use ACME\Bundle\CollectOnDeliveryBundle\Entity\CollectOnDeliverySettings;
use ACME\Bundle\CollectOnDeliveryBundle\PaymentMethod\Config\CollectOnDeliveryConfig;
use Doctrine\Common\Collections\Collection;
use Oro\Bundle\IntegrationBundle\Generator\IntegrationIdentifierGeneratorInterface;
use Oro\Bundle\LocaleBundle\Helper\LocalizationHelper;

class CollectOnDeliveryConfigFactory implements CollectOnDeliveryConfigFactoryInterface
{
    /**
     * @var LocalizationHelper
     */
    private $localizationHelper;

    /**
     * @var IntegrationIdentifierGeneratorInterface
     */
    private $identifierGenerator;

    /**
     * @param LocalizationHelper $localizationHelper
     * @param IntegrationIdentifierGeneratorInterface $identifierGenerator
     */
    public function __construct(
        LocalizationHelper $localizationHelper,
        IntegrationIdentifierGeneratorInterface $identifierGenerator
    ) {
        $this->localizationHelper = $localizationHelper;
        $this->identifierGenerator = $identifierGenerator;
    }

    /**
     * {@inheritDoc}
     */
    public function create(CollectOnDeliverySettings $settings)
    {
        $params = [];
        $channel = $settings->getChannel();

        $params[CollectOnDeliveryConfig::LABEL_KEY] = $this->getLocalizedValue($settings->getLabels());
        $params[CollectOnDeliveryConfig::SHORT_LABEL_KEY] = $this->getLocalizedValue($settings->getShortLabels());
        $params[CollectOnDeliveryConfig::ADMIN_LABEL_KEY] = $channel->getName();
        $params[CollectOnDeliveryConfig::PAYMENT_METHOD_IDENTIFIER_KEY] =
            $this->identifierGenerator->generateIdentifier($channel);

        return new CollectOnDeliveryConfig($params);
    }

    /**
     * @param Collection $values
     *
     * @return string
     */
    private function getLocalizedValue(Collection $values)
    {
        return (string)$this->localizationHelper->getLocalizedValue($values);
    }
}
