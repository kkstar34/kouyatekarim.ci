<?php 


namespace App\Service;


class Stats {



    public  static  function newOrders(){
        return rand(5,100);
    }

    public  static  function salesAmount(){
        return rand(100,1000);
    }
    public  static  function satisfactions(){
        return rand(90,100);
    }
}













?>