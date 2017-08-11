<?php

namespace apiV1\roles;

use Doctrine\Common\Collections\ArrayCollection;

class Group
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    /** @var string */
    protected $description;

    /** @var ArrayCollection|User[] */
    protected $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    /* * * * * * * * * * * *
     *
     * Getters and Setters
     *
     * * * * * * * * * * * */

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return User[]|ArrayCollection
     */
    public function getUsers()
    {
        return $this->users;
    }

}