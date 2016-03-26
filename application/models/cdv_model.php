<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * send mail via gmail
 * */
class cdv_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        //$this->load->library(array('database'));
        $this->load->database();
		//$this->db_vms = $this->load->database('vms', TRUE);
    }

    public function getAllSample()
	{
		$query = "
			select NAME as MOC, SANLUONG as TIME_MAX, SOLUONG as TIME_MIN from CDV_BIEUDO_DH order by NAME asc
			";

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return $result;
		
	}

	public function getSLDH()
	{
		$query = "
			select menhgia, SOLUONG FROM CDV_BIEUDO_SLDH order by TELCO asc, CAST(MENHGIA AS INT) asc
		";

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return $result;
	}

	public function getSLDH2()
	{
		$query = "
			select menhgia, SOLUONG FROM CDV_BIEUDO_SLDH2 order by TELCO asc, CAST(MENHGIA AS INT) asc
		";

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return $result;
	}

	public function getSLDH3()
	{
		$query = "
			select menhgia, SOLUONG FROM CDV_BIEUDO_SLTHE_DOSANG order by TELCO asc, CAST(MENHGIA AS INT) asc
		";

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return $result;
	}

	public function getPhanTram()
	{
		$query = "
			select TELCO, PERCENTAGE as PERCENTAGE FROM CDV_BIEUDO_PHANTRAM order by TELCO asc
		";

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return $result;
	}

	public function getStatus()
	{
		$query = "
			select STATUS as STT from cdv_ststus
		";

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return $result;	
	}

	public function getStatus2()
	{
		$query = "
			select to_char(SUM(TONGTIEN), '9,999,999,999,999,999') as STT from CDV_BIEUDO_SLDH2
		";

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return $result;	
	}

	public function getStatus3()
	{
		$query = "
			select to_char(SUM(TONGTIEN), '9,999,999,999,999,999') as STT from CDV_BIEUDO_SLTHE_DOSANG
		";

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return $result;	
	}


	public function getTLKTCPerTelco($telco){
		$query = "
			select TONG_THE_CHARGING as TOTAL, 
				THE_SANG_CDV as TOCDV, 
				THANHCONG_PENDING as TOCDVOK, 
				RETRY_THANHCONG as TOCDVRETRY,
				KHONGKHOP_TELCO as TOCDVTELCO,
				KHONG_DO_SANG_CDV as NOTTOCDV
				from cdv_bieudo_tlktc
				where telco = '". $telco ."'
			";

		$result = $this->db->query($query);
		$result = $result->result_array();
		// print_r($result);
		return $result;
	}


}