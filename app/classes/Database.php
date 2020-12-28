<?php


namespace App\classes;


class Database
{
    public function db_connect(){
        $hostName = 'localhost';
        $userName = 'root';
        $password = '';
        $dbName = 'price_now_bd';
        $link = mysqli_connect($hostName,$userName,$password,$dbName);
        return $link;
    }

    /*public function db_connect(){
        $hostName = '192.168.10.5';
        $userName = 'pricenow_root';
        $password = 'J@hir467350';
        $dbName = 'pricenow_pricenowbd';
        $link = mysqli_connect($hostName,$userName,$password,$dbName);
        return $link;
    }*/

}