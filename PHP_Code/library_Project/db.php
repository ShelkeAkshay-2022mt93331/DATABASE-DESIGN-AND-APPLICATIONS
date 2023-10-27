<?php
class db{
protected $connection;

function setconnection(){
    try{
		//echo "here";
        $this->connection=new PDO("mysql:host=localhost; dbname=library_managment","root","");
        //echo "Done";
    }catch(PDOException $e){
        echo "Error";
        //die();

    }
}

}
