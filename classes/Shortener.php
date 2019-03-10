<?php
/**
 * Created by PhpStorm.
 * User: BrandonW
 * Date: 3/10/2019
 * Time: 2:19 PM
 */

class Shortener
{
    protected $db;

    public function __construct()
    {
//        For demo purposes database connection outside database handler/class
        $this->db = new mysqli('localhost','root','','url');
    }
//    Generates a code based on the database id number
    protected function generateCode($num){
        return base_convert($num, 10, 36);

    }

//    Passed in a url to generate a code for that url
    public function makeCode($url) {
        $url = trim($url);

        if(!filter_var($url, FILTER_VALIDATE_URL)){
            return '';
        }

        $url = $this->db->escape_string($url);

//        check to see if url already exist
        $exists = $this->db->query("SELECT code FROM urls WHERE url ='{$url}'");

        if($exists->num_rows){
//            return code
            return $exists->fetch_object()->code;
        }else{
//           insert a record without a code
            $this->db->query("INSERT INTO urls (url, created) VALUES ('{$url}', NOW())");

//            Generate code based on recoed id
            $code = $this->generateCode($this->db->insert_id);

//            update record with generated code
            $this->db->query("UPDATE urls SET code = '{$code}' WHERE url = '{$url}'");

            return $code;

        }


    }

//    Passed in a  code to get url
    public function getUrl($code) {
        $code = $this->db->escape_string($code);
        $code = $this->db->query("SELECT url FROM urls WHERE code = '{$code}'");

        if($code->num_rows){
            return $code->fetch_object()->url;
        }

        return '';

    }


}