<?php

session_start();

   //if (isset($_POST['submit'])){
      if ($_SERVER['REQUEST_METHOD']=== "POST"){

        $category=sanitize($_POST['category']);
        $unit=sanitize ($_POST['unit']);
        $rate= sanitize($_POST['rate']);
        $isValid= true;

        if(empty($category)){
            $_SESSION['category_error_msg']= "Write your preference";
            $isValid= false;
        }    

        if(empty($unit)){
            $_SESSION['unit_error_msg']= "Unit must be 1";
            $isValid= false;
         }   
        if(empty($rate)){
            $_SESSION['rate_error_msg']= "Input current currency rate";
            $isValid= false; 
         }          


        if($isValid===true){
            $_SESSION['category_error_msg']="";
            $_SESSION['unit_error_msg']="";
            $_SESSION['rate_error_msg']= "";
         
            $conn=mysqli_connect('localhost','root','','conversion');
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
               $sql="INSERT INTO convtable(category,unit,rate) VALUES('$category','$unit','$rate')";
            
            
            $res= mysqli_query($conn, $sql);

            if ($res) {
              echo "New record inserted successfully";
            }
            else {
              echo "Error occurred " . $sql . " " . mysqli_error($conn);
              }
         
          mysqli_close($conn);

          }      

        else{
         //header("Location:../View/conversion-rate.php");
         echo 'Something is worng';
         //<a href= "../View/conversion-rate.php">Back</a>
        }

     }

    function sanitize($data){
      $data = trim($data);
      $data = stripcslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
      
   
?>
