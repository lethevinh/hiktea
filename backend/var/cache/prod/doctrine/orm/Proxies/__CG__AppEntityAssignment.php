<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Assignment extends \App\Entity\Assignment implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'remarks', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'diseaseGrade', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'riskGrade', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'phase', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'unit', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'sheet', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'harvests', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'pollinates', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'transplants', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'sowings', 'createdBy', 'updatedBy', 'createdAt', 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'remarks', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'diseaseGrade', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'riskGrade', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'phase', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'unit', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'sheet', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'harvests', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'pollinates', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'transplants', '' . "\0" . 'App\\Entity\\Assignment' . "\0" . 'sowings', 'createdBy', 'updatedBy', 'createdAt', 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Assignment $proxy) {
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
    public function getRemarks(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemarks', []);

        return parent::getRemarks();
    }

    /**
     * {@inheritDoc}
     */
    public function setRemarks(?string $remarks): \App\Entity\Assignment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRemarks', [$remarks]);

        return parent::setRemarks($remarks);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiseaseGrade(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiseaseGrade', []);

        return parent::getDiseaseGrade();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiseaseGrade(?string $diseaseGrade): \App\Entity\Assignment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiseaseGrade', [$diseaseGrade]);

        return parent::setDiseaseGrade($diseaseGrade);
    }

    /**
     * {@inheritDoc}
     */
    public function getRiskGrade(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRiskGrade', []);

        return parent::getRiskGrade();
    }

    /**
     * {@inheritDoc}
     */
    public function setRiskGrade(?string $riskGrade): \App\Entity\Assignment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRiskGrade', [$riskGrade]);

        return parent::setRiskGrade($riskGrade);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhase(): ?\App\Entity\Phase
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhase', []);

        return parent::getPhase();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhase(?\App\Entity\Phase $phase): \App\Entity\Assignment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhase', [$phase]);

        return parent::setPhase($phase);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnit(): ?\App\Entity\Unit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnit', []);

        return parent::getUnit();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnit(?\App\Entity\Unit $unit): \App\Entity\Assignment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnit', [$unit]);

        return parent::setUnit($unit);
    }

    /**
     * {@inheritDoc}
     */
    public function getSheet(): ?\App\Entity\Sheet
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSheet', []);

        return parent::getSheet();
    }

    /**
     * {@inheritDoc}
     */
    public function setSheet(?\App\Entity\Sheet $sheet): \App\Entity\Assignment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSheet', [$sheet]);

        return parent::setSheet($sheet);
    }

    /**
     * {@inheritDoc}
     */
    public function getHarvests(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHarvests', []);

        return parent::getHarvests();
    }

    /**
     * {@inheritDoc}
     */
    public function addHarvest(\App\Entity\Harvest $harvest): \App\Entity\Assignment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addHarvest', [$harvest]);

        return parent::addHarvest($harvest);
    }

    /**
     * {@inheritDoc}
     */
    public function removeHarvest(\App\Entity\Harvest $harvest): \App\Entity\Assignment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeHarvest', [$harvest]);

        return parent::removeHarvest($harvest);
    }

    /**
     * {@inheritDoc}
     */
    public function getPollinates(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPollinates', []);

        return parent::getPollinates();
    }

    /**
     * {@inheritDoc}
     */
    public function addPollinate(\App\Entity\Pollinate $pollinate): \App\Entity\Assignment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPollinate', [$pollinate]);

        return parent::addPollinate($pollinate);
    }

    /**
     * {@inheritDoc}
     */
    public function removePollinate(\App\Entity\Pollinate $pollinate): \App\Entity\Assignment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePollinate', [$pollinate]);

        return parent::removePollinate($pollinate);
    }

    /**
     * {@inheritDoc}
     */
    public function getTransplants(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransplants', []);

        return parent::getTransplants();
    }

    /**
     * {@inheritDoc}
     */
    public function addTransplant(\App\Entity\Transplant $transplant): \App\Entity\Assignment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTransplant', [$transplant]);

        return parent::addTransplant($transplant);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTransplant(\App\Entity\Transplant $transplant): \App\Entity\Assignment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTransplant', [$transplant]);

        return parent::removeTransplant($transplant);
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
    public function addSowing(\App\Entity\Sowing $sowing): \App\Entity\Assignment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSowing', [$sowing]);

        return parent::addSowing($sowing);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSowing(\App\Entity\Sowing $sowing): \App\Entity\Assignment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSowing', [$sowing]);

        return parent::removeSowing($sowing);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy(\App\Entity\User $createdBy): \App\Entity\Assignment
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
    public function setUpdatedBy(\App\Entity\User $updatedBy): \App\Entity\Assignment
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
    public function setCreatedAt(\DateTime $createdAt): \App\Entity\Assignment
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
    public function setUpdatedAt(\DateTime $updatedAt): \App\Entity\Assignment
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