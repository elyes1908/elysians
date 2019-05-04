<?PHP
class Marque{
	private $id;
	private $nom;
	
	function __construct($id,$nom){
		$this->id=$id;
		$this->nom=$nom;
		
	}
	
	function getid(){
		return $this->id;
	}
	function getnom(){
		return $this->nom;
	}
	
	function setNom($nom){
		$this->nom=$nom;
	}
	
	
}

?>