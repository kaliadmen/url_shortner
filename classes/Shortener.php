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
        $this->db = new mysqli('localhost','root','1qaz@WSX3edc$RFV','url');
    }
//    Generates a code based on the database id number
    protected function generateCode($num){

    }

//    Passed in a url to generate a code for that url
    public function makeCode($url) {

    }
//    Passed in a  code to get url
    public function getUrl($code) {

    }


}