<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OptionsValue
 *
 * @ORM\Table(name="options_value")
 * @ORM\Entity
 */
class OptionsValue
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="options_id", type="integer", nullable=false)
     */
    private $optionsId;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOptionsId(): ?int
    {
        return $this->optionsId;
    }

    public function setOptionsId(int $optionsId): self
    {
        $this->optionsId = $optionsId;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
