<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Formation extends \App\Entity\Formation implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'categories', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'remise', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'duree', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'video', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'likes', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'commentaires'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'categories', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'remise', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'duree', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'video', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'likes', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'commentaires'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Formation $proxy) {
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
    public function getTitre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre(string $titre): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategories(string $categories): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategories', [$categories]);

        return parent::setCategories($categories);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix(float $prix): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getRemise(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemise', []);

        return parent::getRemise();
    }

    /**
     * {@inheritDoc}
     */
    public function setRemise(float $remise): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRemise', [$remise]);

        return parent::setRemise($remise);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuree(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuree', []);

        return parent::getDuree();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuree(string $duree): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuree', [$duree]);

        return parent::setDuree($duree);
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
    public function getVideo(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideo', []);

        return parent::getVideo();
    }

    /**
     * {@inheritDoc}
     */
    public function setVideo(string $video): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVideo', [$video]);

        return parent::setVideo($video);
    }

    /**
     * {@inheritDoc}
     */
    public function getLikes(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLikes', []);

        return parent::getLikes();
    }

    /**
     * {@inheritDoc}
     */
    public function setLikes(int $likes): \App\Entity\Formation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLikes', [$likes]);

        return parent::setLikes($likes);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentaires()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentaires', []);

        return parent::getCommentaires();
    }

    /**
     * {@inheritDoc}
     */
    public function addCommentaire(\App\Entity\Commentaire $commentaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommentaire', [$commentaire]);

        return parent::addCommentaire($commentaire);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCommentaire(\App\Entity\Commentaire $commentaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCommentaire', [$commentaire]);

        return parent::removeCommentaire($commentaire);
    }

}