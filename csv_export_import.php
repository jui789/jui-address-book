<?php 

session_start();

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "addressbook";

      $user = $_SESSION["username"];

      // Creating connection
      $connection = new mysqli($servername, $username, $password, $dbname);

 if(isset($_POST["Export"])){

      

		 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Full Name', 'Nick Name', 'Phone Number', 'Address', 'Date of Birth'));  
      $query = "SELECT full_name,nick_name,phone_number,address, date_of_birth from contacts where username='$user'"; 
      $result = $connection -> query($query);
      
      while($row=$result->fetch_assoc())  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 } 



 if(isset($_POST["Import"])){
            
            $filename=$_FILES["file"]["tmp_name"];  
 
             if($_FILES["file"]["size"] > 0)
             {
                  $file = fopen($filename, "r");
                  $first_loop = True;
              
              while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
               {
                  //First loop ignored because only Header info was there
                  if($first_loop)
                  {
                        $first_loop = False;
                        continue;
                  }
 
                 $query = "INSERT into contacts (username,full_name,nick_name,phone_number,address,date_of_birth) 
                   values ('$user','".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')";
                   

                    $result = $connection -> query($query);
                  
               }
                  
               fclose($file); 

               header("location: home.php");
             }
      }       

  ?>