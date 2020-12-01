<?php

session_start();

?>

<?php

$employee_name = "";
$company = "";
$contact_no = "";
$uname = "";
$password = "";
$type = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_REQUEST["ename"])) {

          $ename_err = "Id Required";

          


         }else{

              $employee_name = test_input($_REQUEST["ename"]);
         } 
  

    if (empty($_REQUEST["coname"])) {

          $company_err = "company Required";

          


         }else{

              $company = test_input($_REQUEST["coname"]);
         } 

     
     if (empty($_REQUEST["contact"])) {

          $contact_err = "contact no Required";

         

         }else{

              $contact_no = test_input($_REQUEST["contact"]);
         } 


    if (empty($_REQUEST["uname"])) {

          $uname_err = "user name  Required";

          

         }else{

              $uname = test_input($_REQUEST["uname"]);
         }

      if (empty($_REQUEST["password"])) {

          $password_err = "password Required";

          
       }else{

              $password = test_input($_REQUEST["password"]);
         }


         if (empty($_REQUEST["type"])) {

          $type_err = "type Required";

          


         }else{

              $type = test_input($_REQUEST["type"]);
         } 


   if (strlen($ename_err) == 0 && strlen($))
 




}

?>