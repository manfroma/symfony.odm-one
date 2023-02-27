<?php 
namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;


#[ODM\Document]
class User{

    #[ODM\Id]
    private $id; 

    // profile and user has one to one relationship, starting 
    // with user
    // #[ODM\name]

    // products belongin to a user
    


}