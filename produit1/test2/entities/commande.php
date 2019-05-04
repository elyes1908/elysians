<?PHP
class commande{
	private $id;
	private $customer_id;
    private $total_price;
    private $created;
    private $modified;
    private $status;

	function __construct($id,$customer_id,$total_price,$created,$modified,$status){
		$this->id=$id;
		$this->customer_id=$customer_id;
        $this->total_price=$total_price;
        $this->created=$created;
        $this->modified=$modified;
        $this->status=$status;
	}
	
	function getid(){
		return $this->id;
	}
	function getcustomer_id(){
		return $this->customer_id;
	}
    function gettotal_price(){
		return $this->total_price;
	}
    function getcreated(){
		return $this->created;
	}
    function getmodified(){
		return $this->modified;
	}
    function getstatus(){
		return $this->status;
	}

	function setid($id){
		$this->id=$id;
	}
    function setcustomer_id($customer_id){
		$this->customer_id=$customer_id;
	}
    function settotal_price($total_price){
		$this->total_price=$total_price;
	}
    function setcreated($created){
		$this->created=$created;
	}
    function setmodified($modified){
		$this->modified=$modified;
	}
    function setstatus($status){
		$this->status=$status;
	}
}

?>