<?PHP
class produit{
	private $reference;
	private $nom;
	private $categorie;
	private $marque;
	private $prix;
	private $quantite;
	private $image;
	function __construct($reference,$nom,$categorie,$marque,$prix,$quantite,$image){
		$this->reference=$reference;
		$this->nom=$nom;
		$this->categorie=$categorie;
		$this->marque=$marque;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->image=$image;
	}
	
	function getreference(){
		return $this->reference;
	}
	function getnom(){
		return $this->nom;
	}
	function getcategorie(){
		return $this->categorie;
	}
	function getmarque(){
		return $this->marque;
	}
	function getprix(){
		return $this->prix;
	}
	function getquantite(){
		return $this->quantite;
	}
	function getimage(){
		return $this->image;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setcategorie($categorie){
		$this->categorie=$categorie;
	}
	function setmarque($marque){
		$this->marque=$marque;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setquantite($quantite){
		$this->quantite=$quantite;
	}
	function setimage($image){
		$this->image=$image;
	}
	
}

?>