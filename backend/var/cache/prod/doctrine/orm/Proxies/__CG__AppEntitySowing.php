<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Sowing extends \App\Entity\Sowing implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'gender', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'sownAt', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'sownSmallPotAt', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'sownLargePotAt', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'plantsCount', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'traysCount', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'note', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'isApproved', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'orderItem', 'createdBy', 'updatedBy', 'createdAt', 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'gender', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'sownAt', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'sownSmallPotAt', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'sownLargePotAt', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'plantsCount', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'traysCount', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'note', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'isApproved', '' . "\0" . 'App\\Entity\\Sowing' . "\0" . 'orderItem', 'createdBy', 'updatedBy', 'createdAt', 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Sowing $proxy) {
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
    public function getGender(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', []);

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender(string $gender): \App\Entity\Sowing
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getSownAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSownAt', []);

        return parent::getSownAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setSownAt(\DateTimeInterface $sownAt): \App\Entity\Sowing
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSownAt', [$sownAt]);

        return parent::setSownAt($sownAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getSownSmallPotAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSownSmallPotAt', []);

        return parent::getSownSmallPotAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setSownSmallPotAt(?\DateTimeInterface $sownSmallPotAt): \App\Entity\Sowing
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSownSmallPotAt', [$sownSmallPotAt]);

        return parent::setSownSmallPotAt($sownSmallPotAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getSownLargePotAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSownLargePotAt', []);

        return parent::getSownLargePotAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setSownLargePotAt(?\DateTimeInterface $sownLargePotAt): \App\Entity\Sowing
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSownLargePotAt', [$sownLargePotAt]);

        return parent::setSownLargePotAt($sownLargePotAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlantsCount(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlantsCount', []);

        return parent::getPlantsCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlantsCount(float $plantsCount): \App\Entity\Sowing
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlantsCount', [$plantsCount]);

        return parent::setPlantsCount($plantsCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getTraysCount(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTraysCount', []);

        return parent::getTraysCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setTraysCount(?float $traysCount): \App\Entity\Sowing
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTraysCount', [$traysCount]);

        return parent::setTraysCount($traysCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote(?string $note): \App\Entity\Sowing
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsApproved(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsApproved', []);

        return parent::getIsApproved();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsApproved(bool $isApproved): \App\Entity\Sowing
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsApproved', [$isApproved]);

        return parent::setIsApproved($isApproved);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderItem(): ?\App\Entity\OrderItem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderItem', []);

        return parent::getOrderItem();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderItem(?\App\Entity\OrderItem $orderItem): \App\Entity\Sowing
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderItem', [$orderItem]);

        return parent::setOrderItem($orderItem);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy(\App\Entity\User $createdBy): \App\Entity\Sowing
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
    public function setUpdatedBy(\App\Entity\User $updatedBy): \App\Entity\Sowing
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
    public function setCreatedAt(\DateTime $createdAt): \App\Entity\Sowing
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
    public function setUpdatedAt(\DateTime $updatedAt): \App\Entity\Sowing
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
