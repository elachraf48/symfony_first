<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
   
    public function getId(): ?int
    {
        return $this->id;
    }
     /**
     * @ORM\body
     * @ORM\GeneratedValue
     * @ORM\Column(type="text")
     */
    private $body;
  
    public function getBody():void
    {
        return $this->body;
    }
    public function setBody($body):void
    {
        $this->body = $body;
    }
       /**
     * @ORM\Column(type="data")
     */
    private $time;
    
    public function getTime():void
    {
        return $this->time;
    }
    public function setTime($time):void
    {
        $this->time = $time;
    }
    /**
     * @ORM\Column(type="string",lenght=200)
     */
    private $title;
   
    public function getTitle():void
    {
        return $this->title;
    }
    public function setTitle($title):void
    {
        $this->title = $title;
    }

   

   
}
