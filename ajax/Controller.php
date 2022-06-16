<?php
session_start();
require_once '../config/config.php';
require_once '../models/Connect.php';
require_once '../models/Sql.php';
class ajax
{
    public function __construct()
    {
        $link = new connect;
        $link = $link->local();
        $this->sql = new Sql($link);
        $this->userName = $_SESSION['userName'];
    }
    public function name($first, $last)
    {
        return $this->sql->user_name_update($first, $last, $this->userName);
    }
    public function email($email)
    {
        return $this->sql->user_email_update($email, $this->userName);
    }
    public function phone($phone)
    {
        return $this->sql->user_phone_update($phone, $this->userName);
    }
    public function password($password)
    {
        return $this->sql->user_password_update($password, $this->userName);
    }
    public function image($file){
        return $this->sql->user_image_update($file, $this->userName);
    }
    public function ticket($ticket_id){
        return $this->sql->user_ticket_delete($ticket_id);
    }
    public function card_add($array){
        return $this->sql->creditcard_add($array);
    }
}
