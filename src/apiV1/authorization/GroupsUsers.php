<?php

namespace apiV1\authorization;

class GroupsUsers {
    /** @var Group_ */
    protected $group;

    /** @var User */
    protected $user;

    /* [Q] Use a reference to a roles table? */
    /** @var string */
    protected $role;

    /* * * * * * * * * * * *
     *
     * Getters and Setters
     *
     * * * * * * * * * * * */

    /**
     * @return Group_
     */
    public function getGroup(): Group_
    {
        return $this->group;
    }

    /**
     * @param Group_ $group
     */
    public function setGroup(Group_ $group)
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

}