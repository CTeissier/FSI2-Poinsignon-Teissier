<?php

namespace Proxies\__CG__\ESIEA\PlatformBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Payment extends \ESIEA\PlatformBundle\Entity\Payment implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'ESIEA\\PlatformBundle\\Entity\\Payment' . "\0" . 'id', '' . "\0" . 'ESIEA\\PlatformBundle\\Entity\\Payment' . "\0" . 'cardnumber', '' . "\0" . 'ESIEA\\PlatformBundle\\Entity\\Payment' . "\0" . 'zipcode', '' . "\0" . 'ESIEA\\PlatformBundle\\Entity\\Payment' . "\0" . 'cardowner', '' . "\0" . 'ESIEA\\PlatformBundle\\Entity\\Payment' . "\0" . 'deliveryname', '' . "\0" . 'ESIEA\\PlatformBundle\\Entity\\Payment' . "\0" . 'address', '' . "\0" . 'ESIEA\\PlatformBundle\\Entity\\Payment' . "\0" . 'city'];
        }

        return ['__isInitialized__', '' . "\0" . 'ESIEA\\PlatformBundle\\Entity\\Payment' . "\0" . 'id', '' . "\0" . 'ESIEA\\PlatformBundle\\Entity\\Payment' . "\0" . 'cardnumber', '' . "\0" . 'ESIEA\\PlatformBundle\\Entity\\Payment' . "\0" . 'zipcode', '' . "\0" . 'ESIEA\\PlatformBundle\\Entity\\Payment' . "\0" . 'cardowner', '' . "\0" . 'ESIEA\\PlatformBundle\\Entity\\Payment' . "\0" . 'deliveryname', '' . "\0" . 'ESIEA\\PlatformBundle\\Entity\\Payment' . "\0" . 'address', '' . "\0" . 'ESIEA\\PlatformBundle\\Entity\\Payment' . "\0" . 'city'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Payment $proxy) {
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
    public function getId()
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
    public function setCardnumber($cardnumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCardnumber', [$cardnumber]);

        return parent::setCardnumber($cardnumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getCardnumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCardnumber', []);

        return parent::getCardnumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setZipcode($zipcode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZipcode', [$zipcode]);

        return parent::setZipcode($zipcode);
    }

    /**
     * {@inheritDoc}
     */
    public function getZipcode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZipcode', []);

        return parent::getZipcode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCardowner($cardowner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCardowner', [$cardowner]);

        return parent::setCardowner($cardowner);
    }

    /**
     * {@inheritDoc}
     */
    public function getCardowner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCardowner', []);

        return parent::getCardowner();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeliveryname($deliveryname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeliveryname', [$deliveryname]);

        return parent::setDeliveryname($deliveryname);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryname', []);

        return parent::getDeliveryname();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

}
