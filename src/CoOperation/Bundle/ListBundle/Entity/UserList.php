<?php

namespace CoOperation\Bundle\ListBundle\Entity;

use CoOperation\Bundle\CoreBundle\Entity\DeletableTrait;
use CoOperation\Bundle\CoreBundle\Entity\ResourceTrait;
use CoOperation\Bundle\CoreBundle\Entity\TimestampableTrait;
use CoOperation\Bundle\UserBundle\Entity\UserInterface;

class UserList implements UserListInterface
{
    use ResourceTrait, TimestampableTrait, DeletableTrait;

    /**
     * @var string
     */
    private $name;

    /**
     * @var UserInterface
     */
    private $owner;

    /**
     * @var UserInterface[]
     */
    private $users;

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return UserInterface|null
     */
    public function getOwner(): ?UserInterface
    {
        return $this->owner;
    }

    /**
     * @param UserInterface|null $owner
     */
    public function setOwner(?UserInterface $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return UserInterface[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param UserInterface[] $users
     */
    public function setUsers(array $users): void
    {
        $this->users = $users;
    }
}