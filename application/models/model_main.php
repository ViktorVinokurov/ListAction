<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 28.11.2018
 * Time: 15:55
 */

class Model_main extends Model
{


    public static function removeaction($name){
        if(isset($name)){
            $db = ConnectBD::DB();
            $sql = "DELETE FROM `actionlist` WHERE `ID`=".$name;
            $stm = $db->prepare($sql);
            $stm->execute();
            return true;
        }
    }


    public static function addlisting($name){
            if($name == ''){
                return false;
            }else{
                $db = ConnectBD::DB();
                $sql = "insert into actionlist (Name) VALUES (:Name)";
                $stm = $db->prepare($sql);
                $stm->bindParam(':Name', $name);
                $stm->execute();
                return true;
            }
    }



    public function get_data()
    {
        try {
            $db = ConnectBD::DB();
            $result = $db->query("SELECT * FROM actionlist");
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }

}