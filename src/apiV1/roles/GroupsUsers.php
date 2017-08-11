<?php

namespace apiV1\roles;

class GroupsUsers {
    /** @var Group */
    protected $group;

    /** @var User */
    protected $user;

    /* [Q] Use a reference to a roles table? */
    /** @var string */
    protected $role;

    /**
     * @return Group
     */
    public function getGroup(): Group
    {
        return $this->group;
    }

    /**
     * @param Group $group
     */
    public function setGroup(Group $group)
    {
        $this->group = $group;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role)
    {
        $this->role = $role;
    }

    /* * * * * * * * * * * *
     *
     * Getters and Setters
     *
     * * * * * * * * * * * */

}