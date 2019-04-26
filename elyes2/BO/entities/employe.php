<?PHP
class Employe{
	private $cin;
	private $nom;
	private $prenom;
	private $specialite;
	private $image;
	private $tarifHoraire;
	private $nbHeures;
	
	private $salaire;
	function __construct($cin,$nom,$prenom,$specialite,$image,$nb,$tarif){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->specialite=$specialite;
		$this->image=$image;
		$this->nbHeures=$nb;
		$this->tarifHoraire=$tarif;
		
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
	function getspecialite(){
		return $this->specialite;
	}
/***set****/
	function setspecialite($specialite){
		$this->specialite=$specialite;
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