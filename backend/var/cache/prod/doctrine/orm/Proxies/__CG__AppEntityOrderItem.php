<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class OrderItem extends \App\Entity\OrderItem implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'id', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'quantity', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'deliveredAt', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'stockSeedReceivedAt', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'stockMaleSeedsCount', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'stockFemaleSeedsCount', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'order', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'crop', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'variety', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'farm', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'yes', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'sowings', 'createdBy', 'updatedBy', 'createdAt', 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'id', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'quantity', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'deliveredAt', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'stockSeedReceivedAt', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'stockMaleSeedsCount', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'stockFemaleSeedsCount', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'order', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'crop', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'variety', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'farm', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'yes', '' . "\0" . 'App\\Entity\\OrderItem' . "\0" . 'sowings', 'createdBy', 'updatedBy', 'createdAt', 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (OrderItem $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantity(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantity', []);

        return parent::getQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantity(float $quantity): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantity', [$quantity]);

        return parent::setQuantity($quantity);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveredAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveredAt', []);

        return parent::getDeliveredAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeliveredAt(?\DateTimeInterface $deliveredAt): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeliveredAt', [$deliveredAt]);

        return parent::setDeliveredAt($deliveredAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getStockSeedReceivedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStockSeedReceivedAt', []);

        return parent::getStockSeedReceivedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setStockSeedReceivedAt(?\DateTimeInterface $stockSeedReceivedAt): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStockSeedReceivedAt', [$stockSeedReceivedAt]);

        return parent::setStockSeedReceivedAt($stockSeedReceivedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getStockMaleSeedsCount(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStockMaleSeedsCount', []);

        return parent::getStockMaleSeedsCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setStockMaleSeedsCount(?float $stockMaleSeedsCount): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStockMaleSeedsCount', [$stockMaleSeedsCount]);

        return parent::setStockMaleSeedsCount($stockMaleSeedsCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getStockFemaleSeedsCount(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStockFemaleSeedsCount', []);

        return parent::getStockFemaleSeedsCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setStockFemaleSeedsCount(?float $stockFemaleSeedsCount): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStockFemaleSeedsCount', [$stockFemaleSeedsCount]);

        return parent::setStockFemaleSeedsCount($stockFemaleSeedsCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder(): ?\App\Entity\Order
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrder', []);

        return parent::getOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrder(?\App\Entity\Order $order): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder', [$order]);

        return parent::setOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function getCrop(): ?\App\Entity\Crop
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCrop', []);

        return parent::getCrop();
    }

    /**
     * {@inheritDoc}
     */
    public function setCrop(?\App\Entity\Crop $crop): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCrop', [$crop]);

        return parent::setCrop($crop);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariety(): ?\App\Entity\Variety
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariety', []);

        return parent::getVariety();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariety(?\App\Entity\Variety $variety): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariety', [$variety]);

        return parent::setVariety($variety);
    }

    /**
     * {@inheritDoc}
     */
    public function getFarm(): ?\App\Entity\Farm
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFarm', []);

        return parent::getFarm();
    }

    /**
     * {@inheritDoc}
     */
    public function setFarm(?\App\Entity\Farm $farm): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFarm', [$farm]);

        return parent::setFarm($farm);
    }

    /**
     * {@inheritDoc}
     */
    public function getYes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYes', []);

        return parent::getYes();
    }

    /**
     * {@inheritDoc}
     */
    public function addYe(\App\Entity\Phase $ye): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addYe', [$ye]);

        return parent::addYe($ye);
    }

    /**
     * {@inheritDoc}
     */
    public function removeYe(\App\Entity\Phase $ye): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeYe', [$ye]);

        return parent::removeYe($ye);
    }

    /**
     * {@inheritDoc}
     */
    public function getSowings(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSowings', []);

        return parent::getSowings();
    }

    /**
     * {@inheritDoc}
     */
    public function addSowing(\App\Entity\Sowing $sowing): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSowing', [$sowing]);

        return parent::addSowing($sowing);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSowing(\App\Entity\Sowing $sowing): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSowing', [$sowing]);

        return parent::removeSowing($sowing);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy(\App\Entity\User $createdBy): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedBy(\App\Entity\User $updatedBy): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedBy', [$updatedBy]);

        return parent::setUpdatedBy($updatedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedBy(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedBy', []);

        return parent::getUpdatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt): \App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

}