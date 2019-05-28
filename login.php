<?php 
    include 'Admin/db.php';  
    require 'Admin/session.php';
    Session::start();
    /**Traitement du formulaire */
     
   
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {   
        try{
            if(isset($_POST['username']) && isset($_POST['password'])){
                $username = $db->quote($_POST['username']);
                $password = $db->quote($_POST['password']);
                $select = $db->query("select * from login where user = $username and pwd = $password");
                
                if($select->rowCount() > 0){
                    Session::set('auth',$select->fetch());
                    header('Location:dash.php');// page dashboard
                    die;
                }
            }
        }catch(Exception $e){
            // echo('Exception');
        }
       
    }  
    else{
        // echo('Erreur GET');
    }
