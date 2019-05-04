<?PHP
class Fournisseur{
    private $cin;
	private $nom;
    private $prenom;
    private $datenaiss;
    private $marque;
	private $email;
	private $numfournitures;
    
	
	function __construct($cin,$nom,$prenom,$datenaiss,$marque,$email,$numfournitures){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->datenaiss=$datenaiss;
        $this->marque=$marque;
		$this->email=$email;
		$this->numfournitures=$numfournitures;
        
	}
	
	function getCin(){
		return $this->cin;
	}

	function getnumfournitures(){
		return $this->numfournitures;
	}
   
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getDateNaiss(){
		return $this->datenaiss;
	}
	function getMarque(){
		return $this->marque;
    }
    function getEmail(){
        return $this->email;
    }

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setDateNaiss($datenaiss){
		$this->datenaiss=$datenaiss;
	}
	function setMarque($marque){
		$this->marque=$marque;
	}
	function setnumfournitures($numfournitures){
		$this->numfournitures=$numfournitures;
    }
    function setEmail($email){
        $this->email=$email;
    }
    
}

?>