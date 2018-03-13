<?php

namespace CoOperation\Bundle\UserBundle\Entity;

use CoOperation\Bundle\CoreBundle\Entity\ResourceInterface;
use CoOperation\Bundle\CoreBundle\Entity\TimestampableInterface;
use CoOperation\Bundle\CoreBundle\Entity\ToggleableInterface;
use Symfony\Component\Security\Core\User\UserInterface as SecurityUserInterface;

interface UserInterface extends
    ResourceInterface,
    SecurityUserInterface,
    ToggleableInterface,
    TimestampableInterface
{
    /**
     * @return string
     */
    public function getEmail(): ?string;

    /**
     * @param null|string $email
     */
    public function setEmail(?string $email): void;
}
