<?php
class Crud_model extends CI_Model 
{
	/*Insert*/
	/*Insert*/
	// function saverecords($data)
	// {      
 //    $this->db->insert('sms_inbox',$data);
 //    return $this->db->insert_id();
	// }

  function savecategory($parsedata)
  {
    $this->db->insert('sms', $parsedata);
    $insert_id = $this->db->insert_id();

    return $insert_id;
  }


	// function fetchkeyword()
	// {
	// 	$this->db->select('Keyword_desc');
	// 	$this->db->from('sms_keyword');
	// 	$this->db->where('SMS_Keyword_ID != ', 0); 
	// 	$query = $this->db->get();

		//return $query->result(); 
// 
	// }
    
    // function savesmskeyword($smsdata)
    // {
    // 	$this->db->insert('sms', $smsdata);
    // 	return $this->db->insert_id();
    // }

    // function getData()
    // {
    // 	$this->db->select('inbox_id, mobile_no, sms_content, SMS_Date');
    // 	$this->db->from('sms_inbox');
    // 	$this->db->where('inbox_id !=', 0);

    // 	$query = $this->db->get();
    // 	$result = $query->result();
    // 	return $result;
    // }

    function fetch_data()  
    {  
     //$query = $this->db->get("tbl_user");  
     //select * from tbl_user  
     //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");  
     $this->db->select("SMS_Keyword_ID, Keyword_desc");  
     $this->db->from("sms_keyword");
     $this->db->where('SMS_Keyword_ID !=', 0);  
     $query = $this->db->get();  
     return $query->result();  
    }

	
}