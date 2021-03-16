				<?php 

require APPPATH . '/libraries/BaseController.php';
class Crud extends CI_Controller 
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database('sms_inbox');
	
	/*load Model*/
	$this->load->model('Crud_model');
	//$data["fetch_data"] = $this->Crud_model->fetch_data();
	$this->load->view("insert");
	}
        /*Insert*/
	// public function savedata()
	// {
	// 	/*Check submit button */
	// 	if($this->input->post('save'))
	// 	{
	// 	    $data['mobile_no']=$this->input->post('mobileNO');
	// 		$data['sms_content']=$this->input->post('sms_content');
	// 		$this->parsedataCAT();


	// 		//$user = $this->Crud_model->saverecords($data);
	// 		if($user>0){
	// 		        //echo "Records Saved Successfully";
	// 		        //print_r($parsedata);
	// 		}
	// 		else{
	// 				//echo "Insert error !";
	// 		}
	// 		//$catdata=$this->Crud_model->parseTextCategory($parsedata);
	// 	}
	// }

	public function parsedataCAT()
	{
		if ($this->input->post('save')) {
			$MobileNo = $this->input->post('mobileNO');
			$Message = $this->input->post('sms_content');
			$parsemess = json_encode($this->input->post('sms_content'));
			$fin_data = $this->Crud_model->fetch_data();
			$counterid = 0;	
			$SMS_Keyword_ID = 0;
			foreach ($fin_data as $key) {
				if(strpos($parsemess, $key->Keyword_desc) !== false){
					$this->passCat($MobileNo,$Message,$SMS_Keyword_ID = $key->SMS_Keyword_ID);
					echo "Message Sent Successfully!=\n and Categorized";
					$counterid = 1;
					break;
				} elseif(strpos($parsemess, $key->Keyword_desc) === false){
					$SMS_Keyword_ID = 0;
				}

																																
			}
			if ($counterid != 1) {
				$this->passCat($MobileNo,$Message,$SMS_Keyword_ID);
				echo "Message Sent Successfully!\n But Uncategorized";
			}
		}

	}

	function passCat($MobileNo,$Message,$SMS_Keyword_ID){
		$parsedata = array('MobileNo' =>$MobileNo, 'Message' =>$Message, 'SMS_Keyword_ID' =>$SMS_Keyword_ID);
		$this->Crud_model->savecategory($parsedata);

	}
	
}
?>