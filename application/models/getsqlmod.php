<?php
class getsqlmod extends CI_Model {

    function __construct() { 
        parent::__construct(); 
        {
            $this->load->database(); 
        }
    }

    function getdata($country_code) {
        $query = $this->db->query("SELECT tran.key_id, tran.key_en_sample, tex.translation_translate, tex.translation_create, tex.translation_modify, tex.translation_creator
        FROM mobile_translation.cms_key as tran 
        LEFT JOIN mobile_translation.cms_translation as tex
        ON tran.key_id = tex.key_id
        and tex.country_code = '$country_code'");
        return $query->result(); 
    }

    function getkeydata() { 
        $query = $this->db->query("SELECT key_id, key_ios_key, key_android_key, key_en_sample, key_create, key_modify, key_creator 
        FROM mobile_translation.cms_key;");
        return $query; 
    }

    function getkeyIDdata($trans_id) {
        $query = $this->db->query("SELECT key_id, key_ios_key, key_android_key, key_en_sample 
        FROM mobile_translation.cms_key 
        WHERE key_id = $trans_id;");
        return $query->result();
    }

    function update_app_key($id,$data){
        $this->db->set($data);
        $this->db->where('key_id',$id);
        $update = $this->db->update('cms_key');
        if($update)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function insert_app_key($data) {
        $insert = $this->db->insert('cms_key', $data);
        if($insert)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function delete_app_key($id) {
        $this->db->where('key_id', $id);
        $delete = $this->db->delete('cms_key');
        if($delete)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function update_trans_value($id, $country_code, $data) {
        $this->db->set($data);
        $this->db->where('key_id', $id);
        $this->db->where('country_code', $country_code);
        $update = $this->db->update('cms_translation');
        if($update)
        {
            return $data;
        }
        else
        {
            return false;
        }
    }

    function transfor_count($id, $country_code){
        $query = $this->db->query("SELECT count(key_id) as trans_count FROM cms_translation 
        where key_id = $id
        and country_code = '$country_code';");
        return $query->result();
    }

    function insert_transfor($data){
        $insert = $this->db->insert('cms_translation', $data);
        if($insert)
        {
            return $data;
        }
        else
        {
            return false;
        }
    }

    function get_app_config($country_code){
        $query = $this->db->query("SELECT tran.key_android_key, tex.translation_translate
        FROM mobile_translation.cms_key as tran 
        LEFT JOIN mobile_translation.cms_translation as tex
        ON tran.key_id = tex.key_id
        WHERE tex.country_code = '$country_code'");
        return $query;
    }

    function get_ios_config($country_code){
        $query = $this->db->query("SELECT tran.key_ios_key, tex.translation_translate
        FROM mobile_translation.cms_key as tran 
        LEFT JOIN mobile_translation.cms_translation as tex
        ON tran.key_id = tex.key_id
        WHERE tex.country_code = '$country_code'");
        return $query;
    }

    function get_country(){
        $query = $this->db->query("SELECT * FROM mobile_translation.cms_country;");
        return $query;
    }
}