<?PHP
class users{
	private $user_id;
	private $user_name;
	private $user_email;
	private $user_pass;
	private $joining_date;
	private $role;
	function __construct($user_id,$user_name,$user_email,$user_pass,$joining_date,$role){
		$this->user_id=$user_id;
		$this->user_name=$user_name;
		$this->user_email=$user_email;
		$this->user_pass=$user_pass;
		$this->joining_date=$joining_date;
		$this->role=$role;
	}
	
	function getuser_id(){
		return $this->user_id;
	}
	function getuser_name(){
		return $this->user_name;
	}
	function getuser_email(){
		return $this->user_email;
	}
	function getuser_pass(){
		return $this->user_pass;
	}
	function getjoining_date(){
		return $this->joining_date;
	}
	function getrole(){
		return $this->role;
	}

	function setuser_name($user_name){
		$this->user_name=$user_name;
	}
	function setuser_email($user_email){
		$this->user_email=$user_email;
	}
	function setuser_pass($user_pass){
		$this->user_pass=$user_pass;
	}
	function setjoining_date($joining_date){
		$this->joining_date=$joining_date;
	}
	function setrole($role){
		$this->role=$role;
	}
	
}

?>