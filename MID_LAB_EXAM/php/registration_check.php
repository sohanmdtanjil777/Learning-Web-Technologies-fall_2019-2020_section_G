<?php

   session_start();

 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
  /*------Id validation-----*/

    if (empty($_POST['id'])) {
      

    }


    /*----------PassWord------------*/

      if (empty($_REQUEST["password"])) {

         $passError = "Give a password";
      

         } else {
           
        } 

    /*--------Confirm Password------*/

     if (empty($_REQUEST["cpassword"])) {

         $cpassError = "confirm your password";

         }if ($password == $cpassword ) {

            
          }else{

            $cpassError="password did not matched";
           
          }
  
	

  /*----------Name Validation----------*/

		if (empty($_POST["user_name"])) {

        $nameError = "Name cannot be Empty";

       

  } elseif(!empty($_POST["user_name"])) {

    $name = test_input($_POST["user_name"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
     $nameError = "Must start with a letter";

      

    }
   } 
   if(!empty($_POST["user_name"])){
       $name = test_input($_POST["user_name"]);
        $n=strlen($name);
        $m=2;
        if ($n < $m) {
        $nameError="Required at least two letter";

        
     }else{
      
         
      }

     }

     

     /*-------Type validation------*/

      if (empty($_REQUEST["type"])) {

         $typeError = "type Required";

         

         } else {


     
           
        } 


        

    
           
         
  }


    


  ?>