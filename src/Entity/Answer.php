<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 *
 * @ORM\Table(name="answer")
 * @ORM\Entity
 */
class Answer
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
     * @ORM\Column(name="review_id", type="integer", nullable=false)
     */
    private $reviewId;

    /**
     * @var int
     *
     * @ORM\Column(name="attribute_id", type="integer", nullable=false)
     */
    private $attributeId;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_answered", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateAnswered = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReviewId(): ?int
    {
        return $this->reviewId;
    }

    public function setReviewId(int $reviewId): self
    {
        $this->reviewId = $reviewId;

        return $this;
    }

    public function getAttributeId(): ?int
    {
        return $this->attributeId;
    }

    public function setAttributeId(int $attributeId): self
    {
        $this->attributeId = $attributeId;

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

    public function getDateAnswered(): ?\DateTimeInterface
    {
        return $this->dateAnswered;
    }

    public function setDateAnswered(\DateTimeInterface $dateAnswered): self
    {
        $this->dateAnswered = $dateAnswered;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }


}
