<?php
class User extends Db
{
    public function  getAllUsers()
    {
        $sql = self::$connection->prepare("SELECT * FROM `admin` "); 
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getUserId($ad_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `admin` WHERE `ad_id` = ?");
        $sql->bind_param("i", $ad_id);
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function dangnhap($username,$password)
    {
        $sql = self::$connection->prepare("SELECT * FROM `admin` where ad_user='".$username."'  and ad_pwd='".$password."'"); 
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        if(count($item)>0) return $item[0]['ad_pow'];
        else return 0;
    }
    function deleteUser($id)
    {
        $sql  = self::$connection->prepare("DELETE FROM `admin` WHERE `ad_id`=?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    function addUser($ad_user,$ad_pwd,$ad_name,$ad_email,$ad_phone,$ad_pow)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `admin`(`ad_user`,`ad_pwd`,`ad_name`,`ad_email`,`ad_phone`,`ad_pow`)
        Values (?,?,?,?,?,?)");
        $sql->bind_param("ssssii", $ad_user,$ad_pwd,$ad_name,$ad_email,$ad_phone,$ad_pow);
        return $sql->execute();
    }
    function updateUser($ad_user,$ad_pwd,$ad_name,$ad_email,$ad_phone,$ad_pow,$ad_id)
    {  
        $sql = self::$connection->prepare("UPDATE `admin`
        SET `ad_user`=?,`ad_pwd`=?,`ad_name`=?,`ad_email`=?,`ad_phone`=?,`ad_pow`=?
        WHERE `ad_id`=?");
        $sql->bind_param("ssssiii", $ad_user,$ad_pwd,$ad_name,$ad_email,$ad_phone,$ad_pow,$ad_id);
        return $sql->execute();
    }
}