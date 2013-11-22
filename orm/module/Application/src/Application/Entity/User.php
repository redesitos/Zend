<?php
namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class User {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $id;

    /** @ORM\Column(type="string") */
    protected $fullName;

    // getters/setters
	function setId($id){
		$this->id=$id;
	}
	
	function getId(){
		return $this->id;
	}
	
	function setFullname($fullName){
		$this->fullName=$fullName;
	}
	
	function getFullname(){
		return $this->fullName;
	}
}
?>