<?php

namespace apiV1\authorization;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;

class User
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $firstName;

    /** @var string */
    protected $lastName;

    /** @var string */
    protected $mailAddress;

    /** @var string */
    protected $office;

    /** @var DateTime */
    protected $lastModified;

    /** @var  ArrayCollection|Group_[] */
    protected $groups;

    public function __construct()
    {
        $this->groups = new ArrayCollection();
    }

    function updateLastModified()
    {
        $this->lastModified = new \DateTime("now");
    }

    /* * * * * * * * * * * *
     *
     * Getters and Setters
     *
     * * * * * * * * * * * */

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getMailAddress(): string
    {
        return $this->mailAddress;
    }

    /**
     * @param string $mailAddress
     */
    public function setMailAddress(string $mailAddress)
    {
        $this->mailAddress = $mailAddress;
    }

    /**
     * @return string
     */
    public function getOffice(): string
    {
        return $this->office;
    }

    /**
     * @param string $office
     */
    public function setOffice(string $office)
    {
        $this->office = $office;
    }

    /**
     * @return DateTime
     */
    public function getLastModified(): DateTime
    {
        return $this->lastModified;
    }

    /**
     * @return Group_[]|ArrayCollection
     */
    public function getGroups()
    {
        return $this->groups;
    }

}