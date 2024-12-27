<?php 

Class Provider extends Db
{
    public function  getAllProviders()
    {
        $sql = self::$connection->prepare("SELECT * FROM `provider` "); 
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getProviderId($provider_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `provider` WHERE `provider_id` = ?");
        $sql->bind_param("i", $provider_id);
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function deleteProvider($id)
    {
        $sql  = self::$connection->prepare("DELETE FROM `provider` WHERE `provider_id`=?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function addProvider($provider_name,$provider_email,$provider_phone)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `provider`(`provider_name`,`provider_email`,`provider_phone`)
        Values (?,?,?)");
        $sql->bind_param("ssi", $provider_name,$provider_email,$provider_phone);
        return $sql->execute();
    }
    public function updateProvider($provider_name,$provider_email,$provider_phone,$provider_id)
    {
        $sql = self::$connection->prepare("UPDATE `provider`
        SET `provider_name`=?,`provider_email`=?,`provider_phone`=?
        WHERE `provider_id`=?");
        $sql->bind_param("ssii", $provider_name,$provider_email,$provider_phone,$provider_id);
        return $sql->execute();
    }
}