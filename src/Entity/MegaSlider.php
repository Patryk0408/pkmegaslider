<?php 

namespace PKMegaSlider\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ps_pk_mega_slider")
 */

class MegaSlider
{
      /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string", length=255)
     */

    private $name;
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    // /**
    //  * @ORM\Column(type="string", length=255)
    //  */

    // private int $title;

    // public function getTitle(): string
    // {
    //     return $this->title;
    // }
 
    // public function setTitle(int $title): void 
    // {
    //     $this->title = $title;
    // }

    /**
     * @ORM\Column(type="string")
     */

    private $description;

    public function getDescription(): string
    {
        return $this->description;
    }
 
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageDesktop;

    public function getImageDesktop(): string
    {
        return $this->imageDesktop;
    }

    public function setImageDesktop(string $imageDesktop): void
    {
        $this->imageDesktop = $imageDesktop;
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageMobile;

    public function getImageMobile(): ?string
    {
        return $this->imageMobile;
    }

    public function setImageMobile(?string $imageMobile): void
    {
        $this->imageMobile = $imageMobile;
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link;

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): void
    {
        $this->link = $link;
    }
}