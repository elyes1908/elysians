<?PHP
class rendezvous{
	private $IDrdv;
	
	private $nomClient;
	private $prenomClient;
	private $soin;
	private $date;
	
	function __construct($IDrdv,$prenomClient,$nomClient,$soin,$date){
		$this->IDrdv=$IDrdv;
		
		$this->nomClient=$nomClient;
		$this->prenomClient=$prenomClient;
		$this->date=$date;
		$this->soin=$soin;
		
	}
	
	function getIDrdv(){
		return $this->IDrdv;
	}
	
	function getnomClient(){
		return $this->nomClient;
	}
	function getprenomClient(){
		return $this->prenomClient;
	}
	function getdate(){
		return $this->date;
    }
		function getsoin(){
		return $this->soin;
    }

	

	

	 function setnomClient(){
		$this->nomClient=$nomClient;
	}
	function setprenomClient(){
		$this->prenomClient=$prenomClient;
	}
	function setdate(){
		$this->date=$date;
	}
 function setsoin(){
		$this->soin=$soin;
	}
	
	
}

?>