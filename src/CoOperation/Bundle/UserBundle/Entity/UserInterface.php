<?php

namespace CoOperation\Bundle\UserBundle\Entity;

use CoOperation\Bundle\CoreBundle\Entity\DeletableInterface;
use CoOperation\Bundle\CoreBundle\Entity\ResourceInterface;
use CoOperation\Bundle\CoreBundle\Entity\TimestampableInterface;
use CoOperation\Bundle\CoreBundle\Entity\ToggleableInterface;
use Symfony\Component\Security\Core\User\UserInterface as SecurityUserInterface;

interface UserInterface extends
    ResourceInterface,
    SecurityUserInterface,
    ToggleableInterface,
    TimestampableInterface,
    DeletableInterface
{
    /**
     * @return null|string
     */
    public function getEmail(): ?string;

    /**
     * @param null|string $email
     */
    public function setEmail(?string $email): void;

    /**
     * @param null|string $username
     */
    public function setUsername(?string $username): void;

    /**
     * @param null|string $password
     */
    public function setPassword(?string $password): void;

    /**
     * @return null|string
     */
    public function getPlainPassword(): ?string;

    /**
     * @param null|string $plainPassword
     */
    public function setPlainPassword(?string $plainPassword): void;

    /**
     * @return int
     */
    public function getRole(): int;

    /**
     * @param int $role
     */
    public function setRole(int $role): void;
}
