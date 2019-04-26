<?PHP
class Fournisseur{
    private $cin;
	private $nom;
    private $prenom;
    private $datenaiss;
    private $marque;
	private $email;
	
	function __construct($cin,$nom,$prenom,$datenaiss,$marque,$email){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->datenaiss=$datenaiss;
        $this->marque=$marque;
        $this->email=$email;
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
    function setEmail($email){
        $this->email=$email;
    }
}

?>