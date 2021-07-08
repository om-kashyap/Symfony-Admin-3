<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity
 */
class Company
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="registered_name", type="string", length=255, nullable=false)
     */
    private $registeredName;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255, nullable=false)
     */
    private $region;

    /**
     * @var int
     *
     * @ORM\Column(name="voivodship_id", type="integer", nullable=false)
     */
    private $voivodshipId;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longtitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $longtitude;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="PKD", type="string", length=255, nullable=false)
     */
    private $pkd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateAdded = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_updated", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateUpdated = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getRegisteredName(): ?string
    {
        return $this->registeredName;
    }

    public function setRegisteredName(string $registeredName): self
    {
        $this->registeredName = $registeredName;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getVoivodshipId(): ?int
    {
        return $this->voivodshipId;
    }

    public function setVoivodshipId(int $voivodshipId): self
    {
        $this->voivodshipId = $voivodshipId;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongtitude(): ?float
    {
        return $this->longtitude;
    }

    public function setLongtitude(float $longtitude): self
    {
        $this->longtitude = $longtitude;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPkd(): ?string
    {
        return $this->pkd;
    }

    public function setPkd(string $pkd): self
    {
        $this->pkd = $pkd;

        return $this;
    }

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->dateAdded;
    }

    public function setDateAdded(\DateTimeInterface $dateAdded): self
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    public function getDateUpdated(): ?\DateTimeInterface
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated(\DateTimeInterface $dateUpdated): self
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


}
