<?php 
namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;


#[ODM\Document]
class Product{

    #[ODM\Id]
    private $id; 

    #[ODM\Field(type:"string")]
    private $name;

    #[ODM\Field(type:"string")]
    private $description;


    public function setName($name){
        $this->name = $name; 
        return $this;
    }

    public function setDescription($description){
        $this->description = $description; 
        return $this;
    }

    public function getId(): string{
        return $this->id;
    }

    public function getName(): string{
        return $this->name; 
    }

    public function getDescription(): string{
        return $this->description; 
    }

    

}