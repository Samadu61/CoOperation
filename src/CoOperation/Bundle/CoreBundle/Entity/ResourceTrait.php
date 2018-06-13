<?php

namespace CoOperation\Bundle\CoreBundle\Entity;

trait ResourceTrait
{
    /**
     * @var integer
     */
    protected $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
