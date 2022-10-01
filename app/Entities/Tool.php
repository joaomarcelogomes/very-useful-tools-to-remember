<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tools")
 */
class Tool
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $title;

    /**
     * @ORM\Column(type="string")
     */
    private string $link;

    /**
     * @ORM\Column(type="string")
     */
    private string $description;

    public function __construct(string $title, string $link, string $description) {
        $this->title = $title;
        $this->link = $link;
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Tool
     */
    public function setId(int $id): Tool {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Tool
     */
    public function setTitle(string $title): Tool {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string {
        return $this->link;
    }

    /**
     * @param string $link
     * @return Tool
     */
    public function setLink(string $link): Tool {
        $this->link = $link;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Tool
     */
    public function setDescription(string $description): Tool {
        $this->description = $description;
        return $this;
    }
}
