<?php

namespace CoOperation\Bundle\ListBundle\Entity;

use CoOperation\Bundle\CoreBundle\Entity\DeletableInterface;
use CoOperation\Bundle\CoreBundle\Entity\ResourceInterface;
use CoOperation\Bundle\CoreBundle\Entity\TimestampableInterface;
use CoOperation\Bundle\UserBundle\Entity\User;
use CoOperation\Bundle\UserBundle\Entity\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

interface UserListInterface extends
    ResourceInterface,
    TimestampableInterface,
    DeletableInterface
{
    /**
     * @return null|string
     */
    public function getName(): ?string;

    /**
     * @param null|string $name
     */
    public function setName(?string $name): void;

    /**
     * @return UserInterface|null
     */
    public function getOwner(): ?UserInterface;

    /**
     * @param UserInterface|null $owner
     */
    public function setOwner(?UserInterface $owner): void;

    /**
     * @return UserInterface[]
     */
    public function getUsers(): array;

    /**
     * @param UserInterface[] $users
     */
    public function setUsers(array $users): void;
}