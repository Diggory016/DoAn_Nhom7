<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT 
        `product_id`,`product_name`,`product_price`,`product_img`,`product_date`,`product_quantity`,`product_description`,`product_detail` ,
        `category`.`cat_name`AS catename,`provider`.`provider_name`AS provname 
        FROM `product`,`category`,`provider` 
        WHERE `product`.`cat_id`=`category`.`cat_id` AND `product`.`provider_id`=`provider`.`provider_id` 
        ORDER BY `product_id`DESC");
        $sql->execute();
        $product = array();
        $product = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $product;
    }
    public function search($keyword, $start, $count)
    {
        $sql = self::$connection->prepare("SELECT 
        `product_id`,`product_name`,`product_price`,`product_img`,`product_date`,`product_quantity`,`product_description`,`product_detail` ,
        `category`.`cat_name`AS catename,`provider`.`provider_name`AS provname 
        FROM `product`,`category`,`provider` 
        WHERE `product`.`cat_id`=`category`.`cat_id` AND `product`.`provider_id`=`provider`.`provider_id` AND `product_detail` LIKE ? LIMIT ?,?");
        $keyword = "%$keyword%";
        $sql->bind_param("sii", $keyword, $start, $count);
        $sql->execute();
        $product = array();
        $product = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $product;
    }
    public function searchCount($keyword)
    {
        $sql = self::$connection->prepare("SELECT 
        `product_id`,`product_name`,`product_price`,`product_img`,`product_date`,`product_quantity`,`product_description`,`product_detail` ,
        `category`.`cat_name`AS catename,`provider`.`provider_name`AS provname 
        FROM `product`,`category`,`provider` 
        WHERE `product`.`cat_id`=`category`.`cat_id` AND `product`.`provider_id`=`provider`.`provider_id` AND `product_detail` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute();
        $product = array();
        $product = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $product;
    }
    public function paginate($url, $total, $count, $page)
    {
        $totalLinks = ceil($total / $count);
        $link = " ";
        for ($j = 1; $j <= $totalLinks; $j++) {
            if ($page == $j)
                $link = $link . "<a style='font=weight:bold' href='$url&page=$j'> $j </a>";
            else {
                $link = $link . "<a href='$url&page=$j'> $j </a>";
            }
        }
        return $link;
    }
    public function getProductId($product_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `product` WHERE `product_id` = ?");
        $sql->bind_param("i", $product_id);
        $sql->execute();
        $product = array();
        $product = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $product;
    }
    public function delete($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `product` WHERE `product_id`=?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function addProduct($product_img, $product_name, $product_description, $product_detail, $product_price, $product_quantity, $cat_id, $provider_id)
    {
        $sql = self::$connection->prepare("INSERT INTO 
        `product`(`product_img`,`product_name`,`product_description`,`product_detail`,`product_price`,`product_quantity`,`cat_id`,`provider_id`)
        VALUE (?,?,?,?,?,?,?,?)");
        $sql->bind_param("ssssiiii", $product_img, $product_name, $product_description, $product_detail, $product_price, $product_quantity, $cat_id, $provider_id);
        return $sql->execute();
    }
    public function updateProduct($product_img, $product_name, $product_description, $product_detail, $product_price, $product_quantity, $cat_id, $provider_id, $product_id)
    {
        if ($product_img != "") {
            $sql = self::$connection->prepare("UPDATE `product`
            SET `product_img`=?,`product_name`=?,`product_description`=?,`product_detail`=?,`product_price`=?,`product_quantity`=?,`cat_id`=?,`provider_id`=?
            WHERE `product_id`=?");
            $sql->bind_param("ssssiiiii", $product_img, $product_name, $product_description, $product_detail, $product_price, $product_quantity, $cat_id, $provider_id, $product_id);
        } else {
            $sql = self::$connection->prepare("UPDATE `product`
            SET `product_name`=?,`product_description`=?,`product_detail`=?,`product_price`=?,`product_quantity`=?,`cat_id`=?,`provider_id`=?
            WHERE `product_id`=?");
            $sql->bind_param("sssiiiii", $product_name, $product_description, $product_detail, $product_price, $product_quantity, $cat_id, $provider_id, $product_id);
        }
        return $sql->execute();
    }
}
