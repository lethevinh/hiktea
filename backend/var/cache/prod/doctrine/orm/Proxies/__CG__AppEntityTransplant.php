<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Transplant extends \App\Entity\Transplant implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'gender', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'transplantedAt', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'plantsCount', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'expectedTransplantAt', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'expectedProcessOldSoilAt', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'expectedPrepareNewSoilAt', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'isApproved', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'assignment', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'greenhouse', 'createdBy', 'updatedBy', 'createdAt', 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'gender', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'transplantedAt', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'plantsCount', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'expectedTransplantAt', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'expectedProcessOldSoilAt', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'expectedPrepareNewSoilAt', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'isApproved', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'assignment', '' . "\0" . 'App\\Entity\\Transplant' . "\0" . 'greenhouse', 'createdBy', 'updatedBy', 'createdAt', 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Transplant $proxy) {
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
    public function setGender(string $gender): \App\Entity\Transplant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getTransplantedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransplantedAt', []);

        return parent::getTransplantedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setTransplantedAt(?\DateTimeInterface $transplantedAt): \App\Entity\Transplant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTransplantedAt', [$transplantedAt]);

        return parent::setTransplantedAt($transplantedAt);
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
    public function setPlantsCount(?float $plantsCount): \App\Entity\Transplant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlantsCount', [$plantsCount]);

        return parent::setPlantsCount($plantsCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpectedTransplantAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpectedTransplantAt', []);

        return parent::getExpectedTransplantAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpectedTransplantAt(?\DateTimeInterface $expectedTransplantAt): \App\Entity\Transplant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpectedTransplantAt', [$expectedTransplantAt]);

        return parent::setExpectedTransplantAt($expectedTransplantAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpectedProcessOldSoilAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpectedProcessOldSoilAt', []);

        return parent::getExpectedProcessOldSoilAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpectedProcessOldSoilAt(?\DateTimeInterface $expectedProcessOldSoilAt): \App\Entity\Transplant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpectedProcessOldSoilAt', [$expectedProcessOldSoilAt]);

        return parent::setExpectedProcessOldSoilAt($expectedProcessOldSoilAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpectedPrepareNewSoilAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpectedPrepareNewSoilAt', []);

        return parent::getExpectedPrepareNewSoilAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpectedPrepareNewSoilAt(?\DateTimeInterface $expectedPrepareNewSoilAt): \App\Entity\Transplant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpectedPrepareNewSoilAt', [$expectedPrepareNewSoilAt]);

        return parent::setExpectedPrepareNewSoilAt($expectedPrepareNewSoilAt);
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
    public function setIsApproved(bool $isApproved): \App\Entity\Transplant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsApproved', [$isApproved]);

        return parent::setIsApproved($isApproved);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssignment(): ?\App\Entity\Assignment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssignment', []);

        return parent::getAssignment();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssignment(?\App\Entity\Assignment $assignment): \App\Entity\Transplant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssignment', [$assignment]);

        return parent::setAssignment($assignment);
    }

    /**
     * {@inheritDoc}
     */
    public function getGreenhouse(): ?\App\Entity\Greenhouse
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGreenhouse', []);

        return parent::getGreenhouse();
    }

    /**
     * {@inheritDoc}
     */
    public function setGreenhouse(?\App\Entity\Greenhouse $greenhouse): \App\Entity\Transplant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGreenhouse', [$greenhouse]);

        return parent::setGreenhouse($greenhouse);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy(\App\Entity\User $createdBy): \App\Entity\Transplant
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
    public function setUpdatedBy(\App\Entity\User $updatedBy): \App\Entity\Transplant
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
    public function setCreatedAt(\DateTime $createdAt): \App\Entity\Transplant
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
    public function setUpdatedAt(\DateTime $updatedAt): \App\Entity\Transplant
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
