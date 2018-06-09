<?php

namespace CoOperation\Bundle\UserBundle\Entity;

use CoOperation\Bundle\CoreBundle\Entity\ResourceTrait;
use CoOperation\Bundle\CoreBundle\Entity\TimestampableTrait;
use CoOperation\Bundle\CoreBundle\Entity\ToggleableTrait;
use Serializable;

class User implements UserInterface, Serializable
{
    use ResourceTrait, TimestampableTrait, ToggleableTrait;

    public const ROLE_USER = 1;
    public const ROLE_ADMIN = 2;
    public const ROLE_SUPER_ADMIN = 3;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $plainPassword;

    /**
     * @var int
     */
    private $role;

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * @return string The password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param null|string $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return null|string
     */
    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    /**
     * @param null|string $plainPassword
     */
    public function setPlainPassword(?string $plainPassword): void
    {
        $this->plainPassword = $plainPassword;
    }

    /**
     * @return int
     */
    public function getRole(): int
    {
        return $this->role;

    }

    /**
     * @param int $role
     */
    public function setRole(int $role): void
    {
        $this->role = $role;
    }

    /**
     * Returns the roles granted to the user.
     *
     * @return array (Role|string)[] The user roles
     */
    public function getRoles()
    {
        switch ($this->getRole()) {
            case self::ROLE_USER:
                return array('ROLE_USER');
            case self::ROLE_ADMIN:
                return array('ROLE_ADMIN');
            case self::ROLE_SUPER_ADMIN:
                return array('ROLE_SUPER_ADMIN');
            default:
                return array('ROLE_USER');
        }
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null; //use bcrypt no need to add salt
    }

    /**
     * Removes sensitive data from the user.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password
        ));
    }

    /**
     * @param string $serialized
     */
    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->username,
            $this->password
        ) = unserialize($serialized);
    }
}
