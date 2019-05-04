<?PHP
class Employe{
	private $cin;
	private $nom;
	private $prenom;
	private $image;
	private $tarifHoraire;
	private $nbHeures;
	private $salaire;
	function __construct($cin,$nom,$prenom,$image,$tarif,$nb,$salaire){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->image=$image;
		$this->tarifHoraire=$tarif;
		$this->nbHeures=$nb;
		$this->salaire=$salaire;
	
	}
	
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getimage(){
		return $this->image;
	}
	function getNbHeures(){
		return $this->nbHeures;
	}
	function getTarifHoraire(){
		return $this->tarifHoraire;
	}
	function getsalaire(){
		return $this->salaire;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setimage($image){
		$this->image;
	}
	function setNbHeures($nbHeures){
		$this->nbHeures=$nbHeures;
	}
	function setTarifHoraire($tarifHoraire){
		$this->tarifHoraire=$tarifHoraire;
	}
	
	
}

?>