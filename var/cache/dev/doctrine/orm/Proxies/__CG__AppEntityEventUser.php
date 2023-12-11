<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class EventUser extends \App\Entity\EventUser implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'id', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'date', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'lieu', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'description', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'image', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'path_qr', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'reservations', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'eventAdmins'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'id', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'date', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'lieu', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'description', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'image', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'path_qr', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'reservations', '' . "\0" . 'App\\Entity\\EventUser' . "\0" . 'eventAdmins'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (EventUser $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
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
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate(string $date): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieu(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieu', []);

        return parent::getLieu();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieu(string $lieu): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieu', [$lieu]);

        return parent::setLieu($lieu);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(string $image): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix(int $prix): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getpath_qr(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getpath_qr', []);

        return parent::getpath_qr();
    }

    /**
     * {@inheritDoc}
     */
    public function setpath_qr(string $path_qr): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setpath_qr', [$path_qr]);

        return parent::setpath_qr($path_qr);
    }

    /**
     * {@inheritDoc}
     */
    public function getReservations(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReservations', []);

        return parent::getReservations();
    }

    /**
     * {@inheritDoc}
     */
    public function addReservation(\App\Entity\Reservation $reservation): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReservation', [$reservation]);

        return parent::addReservation($reservation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReservation(\App\Entity\Reservation $reservation): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReservation', [$reservation]);

        return parent::removeReservation($reservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventAdmins(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventAdmins', []);

        return parent::getEventAdmins();
    }

    /**
     * {@inheritDoc}
     */
    public function addEventAdmin(\App\Entity\EventAdmin $eventAdmin): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEventAdmin', [$eventAdmin]);

        return parent::addEventAdmin($eventAdmin);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEventAdmin(\App\Entity\EventAdmin $eventAdmin): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEventAdmin', [$eventAdmin]);

        return parent::removeEventAdmin($eventAdmin);
    }

    /**
     * {@inheritDoc}
     */
    public function validateDate(\Symfony\Component\Validator\Context\ExecutionContextInterface $context): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'validateDate', [$context]);

        parent::validateDate($context);
    }

}