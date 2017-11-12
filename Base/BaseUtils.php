<?php
/**
 * Created by PhpStorm.
 * User: brian-kamau
 * Date: 11/12/17
 * Time: 4:20 PM
 */


class BaseUtil
{

    public function getUser($username){
        try{
            $sql="";
            $sql="SELECT FROM USER WHERE Username=".$username;
        }catch(Exception $ex){
            echo("Error Getting".$ex);
        }
    }
    public function getConnection(){

        try {
            $config = parse_ini_file('config.ini');
            static  $connection;
            if (!isset($connection)) {

                $connection = mysqli_connect($config['host'], $config['username'], $config['password'], $config['name']);
                if ($connection === true) {
                    echo("Connection to Database True");

                } else {
                    echo("Could not Establish Connection".mysqli_connect_error());
                }
            }
        }catch (Exception $ex){
            echo ("".$ex->getMessage());
        }

        return $connection;
    }

}
?>