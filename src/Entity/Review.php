<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Review
 *
 * @ORM\Table(name="review")
 * @ORM\Entity
 */
class Review
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
     * @ORM\Column(name="company_id", type="integer", nullable=false)
     */
    private $companyId;

    /**
     * @var int
     *
     * @ORM\Column(name="criteria_id", type="integer", nullable=false)
     */
    private $criteriaId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    public function setCompanyId(int $companyId): self
    {
        $this->companyId = $companyId;

        return $this;
    }

    public function getCriteriaId(): ?int
    {
        return $this->criteriaId;
    }

    public function setCriteriaId(int $criteriaId): self
    {
        $this->criteriaId = $criteriaId;

        return $this;
    }


}
