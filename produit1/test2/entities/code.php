<?PHP
class code{
	private $num;
	private $montant;
	private $validite;
	private $dateAjout;
	function __construct($num,$montant,$validite,$dateAjout){
		$this->num=$num;
		$this->montant=$montant;
		$this->validite=$validite;
		$this->dateAjout=$dateAjout;
	}
	
	function getnum(){
		return $this->num;
	}
	function getmontant(){
		return $this->montant;
	}
	function getvalidite(){
		return $this->validite;
	}
	function getdateajout(){
		return $this->dateAjout;
	}

	function setnum($num){
		$this->num=$num;
	}
	function setmontant($montant){
		$this->montant=$montant;
	}
	function setvalidite($validite){
		$this->validite=$validite;
	}
	function setdateajout($dateajout){
		$this->dateAjout=$dateAjout;
	}
}

?>