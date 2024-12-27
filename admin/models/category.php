<?php
class Category extends Db
{
    public function  getAllCates()
    {
        $sql = self::$connection->prepare("SELECT * FROM `category` ");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getCateId($cat_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `category` WHERE `cat_id` = ?");
        $sql->bind_param("i", $cat_id);
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    function deleteCate($id)
    {
        $sql  = self::$connection->prepare("DELETE FROM `category` WHERE `cat_id`=?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    function addCate($cat_name)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `category`(`cat_name`)
        Values (?)");
        $sql->bind_param("s", $cat_name);
        return $sql->execute();
    }
    function updateCate($cat_name, $cat_id)
    {
        $sql = self::$connection->prepare("UPDATE `category`
            SET `cat_name`=?
            WHERE `cat_id`=?");
        $sql->bind_param("si", $cat_name,$cat_id);
        return $sql->execute();
    }
}
