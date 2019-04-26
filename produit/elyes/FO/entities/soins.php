<?PHP
class Soins{
	private $id;
	private $nom;
	private $type;
	private $image;
	private $prix;
	function __construct($id,$nom,$type,$image,$prix){
		$this->id=$id;
		$this->nom=$nom;
		$this->type=$type;
		$this->image=$image;
		$this->prix=$prix;
	}
	
	function getid(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function get_type(){
		return $this->type;
	}
	function getprix(){
		return $this->prix;
	}
	function getimage(){
		return $this->image;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function set_type($type){
		$this->type=$type;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setimage($image){
		$this->image=$image;
	}
	
}

?>