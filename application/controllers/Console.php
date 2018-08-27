<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Console extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model ( 'getsqlmod' );
	}

	public function translate($country_code = 'tw')
	{
		$query_country = $this->getsqlmod->get_country()->result_array();
        $data = array (
				// 'trans_data' => $query_trans,
				'country_data' => $query_country
		);
		$this->load->view('templates/header');
		$this->load->view('mobile/translate', $data);
		$this->load->view('templates/footer');
	}

	public function keyvalue()
	{
		$query = $this->getsqlmod->getkeydata()->result_array(); 
		$data = array (
			'data' => $query
		);
		$this->load->view('templates/header');
		$this->load->view('mobile/keyvalue', $data);
		$this->load->view('templates/footer');
	}

	public function conuntry_change()
	{
		$country_code = $this->input->get('s_country_code');
		if (empty($country_code)){
			return;
		}
		$query_trans = $this->getsqlmod->getdata($country_code); 
        $data = array ( 
			'data' => $query_trans
		);
		$data_json = json_encode($data);
		echo $data_json;
	}

	public function transbox()
	{
		$trans_id = $this->input->post('trans_id');

		$query = $this->getsqlmod->getkeyIDdata($trans_id);
		echo json_encode($query);
	}

	public function insert_app()
	{
		$data = array(
			'key_en_sample' => $this->input->post('s_trans_en_sample'),
			'key_ios_key' => $this->input->post('s_translate_ios'),
			'key_android_key' => $this->input->post('s_translate_android'),
			'key_create' => date("Y-m-d H:i:s"),
			'key_modify' => date("Y-m-d H:i:s"),
			);

		$insert = $this->getsqlmod->insert_app_key($data);
		echo json_encode($insert);
	}

	public function update_app()
	{
		$id = $this->input->post('s_trans_id');
		$data = array(
			'key_en_sample' => $this->input->post('s_trans_en_sample'),
			'key_ios_key' => $this->input->post('s_translate_ios'),
			'key_android_key' => $this->input->post('s_translate_android'),
			'key_modify' => date("Y-m-d H:i:s"),
			);

		$update = $this->getsqlmod->update_app_key($id,$data);
		echo json_encode($update);
	}

	public function delete_app()
	{
		$id = $this->input->post('s_trans_id');

		$delete = $this->getsqlmod->delete_app_key($id);
		echo json_encode($delete);
	}

	public function edit_trans_value(){
		$id = $this->input->post('s_trans_id');
		$country_code = $this->input->post('s_country_code');
		$lang_value = $this->input->post('s_trans_lang_value');

		$select_count = $this->getsqlmod->transfor_count($id, $country_code);
		$trans_count = (int)$select_count[0]->trans_count;
		
		if($lang_value == 'null' || empty($lang_value)){
			return false;
		}

		if($trans_count < 1){
			$data = array(
				'key_id' => $id,
				'country_code' => $country_code,
				'translation_translate' => $lang_value,
				'translation_create' => date("Y-m-d H:i:s"),
				'translation_modify' => date("Y-m-d H:i:s"),
				);
			$insert = $this->getsqlmod->insert_transfor($data);
			echo json_encode($insert);
			exit();
		}else{
			$data = array(
				'translation_translate' => $lang_value,
				'translation_modify' => date("Y-m-d H:i:s")
			);
			$update = $this->getsqlmod->update_trans_value($id, $country_code, $data);
			echo json_encode($update);
		}
	}

	public function layout_android_config()
	{ 
		$country_code = $this->input->get('country_code');
		
		if(empty($country_code)){
			return false;
		}

		header('Content-type: text/xml; charset=UTF-8'); 
		header("Content-Disposition:attachement;filename=value-" . $country_code . ".xml"); 

		$query = $this->getsqlmod->get_app_config($country_code)->result_array();
		$xml = "<resources>\n";
		$xml .= "\t<string name=\"error501\">Loading Error (501)</string>\n";
		$xml .= "\t<string name=\"error402\">\"Please try again later (402)</string>\n";
		$xml .= "\t<string name=\"error403\">\"Please try again later (403)</string>\n";
		$xml .= "\t<string name=\"error404\">\"Please try again later (404)</string>\n";
		$xml .= "\t<string name=\"error405\">\"Please try again later (405)</string>\n";
		$xml .= "\t<string name=\"error406\">\"Please try again later (406)</string>\n";
		$xml .= "\t<string name=\"error407\">\"Please try again later (407)</string>\n";
		$xml .= "\t<string name=\"error408\">\"Please try again later (408)</string>\n";
		$xml .= "\t<string name=\"error409\">\"Please try again later (409)</string>\n";
		$xml .= "\t<string name=\"error411\">\"Please try again later (411)</string>\n";
		$xml .= "\t<string name=\"error412\">\"Please try again later (412)</string>\n";
		$xml .= "\t<string name=\"error413\">\"Please try again later (413)</string>\n";
		$xml .= "\t<string name=\"error414\">\"Please try again later (414)</string>\n";
		$xml .= "\t<string name=\"error415\">\"Please try again later (415)</string>\n";
		$xml .= "\t<string name=\"error416\">\"Please try again later (416)</string>\n";
		$xml .= "\t<string name=\"error417\">\"Please try again later (417)</string>\n";
		$xml .= "\t<string name=\"error418\">\"Please try again later (418)</string>\n";
		$xml .= "\t<string name=\"error419\">\"Please try again later (419)</string>\n";
		$xml .= "\t<string name=\"error001\">\"Error(001)</string>\n";
		$xml .= "\t<string name=\"error002\">\"Error(002)</string>\n";
		foreach ($query as $row) {
			$xml .= "\t<string name=\"" . $row['key_android_key']. "\">";
			$xml .= $row['translation_translate'];
			$xml .= "</string>\n";
		}
		$xml .= "</resources>\n";
		echo $xml;
	}

	public function layout_ios_config()
	{
		$country_code = $this->input->get('country_code');

		if(empty($country_code)){
			return false;
		}

		header('Content-type: text/xliff; charset=UTF-8'); 
		header("Content-Disposition:attachement;filename=" . $country_code . "-Hant.xliff"); 

		$query = $this->getsqlmod->get_ios_config($country_code)->result_array();

		$xliff = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
		$xliff .= "<xliff xmlns=\"urn:oasis:names:tc:xliff:document:1.2\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" version=\"1.2\" xsi:schemaLocation=\"urn:oasis:names:tc:xliff:document:1.2 http://docs.oasis-open.org/xliff/v1.2/os/xliff-core-1.2-strict.xsd\">\n";
		$xliff .= "\t<file original=\"membercenter/Base.lproj/Localizable.strings\" source-language=\"en\" datatype=\"plaintext\" target-language=\"zh-Hant\">\n";
		$xliff .= "\t\t<header>\n";
		$xliff .= "\t\t\t<tool tool-id=\"com.apple.dt.xcode\" tool-name=\"Xcode\" tool-version=\"9.3\" build-num=\"9E145\"/>\n";
		$xliff .= "\t\t</header>\n";
		$xliff .= "\t\t<body>\n";
		foreach ($query as $row) {
			$xliff .= "\t\t\t<trans-unit id=\"" . $row['key_ios_key']. "\">\n";
			$xliff .= "\t\t\t\t<source>" . $row['key_ios_key']. "</source>\n";
			$xliff .= "\t\t\t\t<target>" . $row['translation_translate']. "</target>\n";
			$xliff .= "\t\t\t\t<note>No comment provided by engineer.</note>\n";
			$xliff .= "\t\t\t</trans-unit>\n";
		}
		$xliff .= "\t\t</body>\n";
		$xliff .= "\t</file>\n";
		$xliff .= "</xliff>";
		echo $xliff;
	}
}