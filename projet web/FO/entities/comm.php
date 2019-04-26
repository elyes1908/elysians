<?PHP
class Comm{
	private $name;
	private $ID;
	private $comment;

	function __construct($name,$ID,$comment){
		$this->name=$name;
		$this->ID=$ID;
		$this->comment=$comment;
		
	}
	
	function getname(){
		return $this->name;
	}
	function getID(){
		return $this->ID;
	}
	function getcomment(){
		return $this->comment;
	}
	

	function setname($name){
		$this->name=$name;
	}
	function setemail($ID){
		$this->ID=$ID;
	}
	function setcomment($comment){
		$this->comment=$comment;
	}
	
}

?>