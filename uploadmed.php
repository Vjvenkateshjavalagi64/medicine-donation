<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "ipfinal";
    $conn = mysqli_connect($host, $user, $pass, $db) or die('Error Connecting');
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="donate.css"/>


    <style>
        a{
            color: grey;
        }
        a:hover
        {
            color: black;
        
        }
    </style>
</head>
<style>
body {
  background-image: url("tabs.gif");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<body>
    
<?php

if(isset($_POST['submitid']))
    {
        $Mname=$_POST['Mname'];
        $Mquantity=$_POST['Mquantity'];
        $Mdate=$_POST['Mdate'];
        $MLoaction=$_POST['MLoaction'];
        
        $query1="INSERT INTO mdonte(Mname,Mquantity,Mdate,MLoaction) VALUES('$Mname','$Mquantity','$Mdate','$MLoaction');";
        $res1=mysqli_query($conn,$query1);

        echo "<script>alert('You are successfully Uploaded');</script>";
        echo "<script>window.location.href='./userview.php';</script>";
	
        
      
    } 


    ?>
    <div class="container"  data-aos="zoom-in" data-aos-duration="1000">
        <h1>Upload Medicine Details</h1>
        <form id="donate-form" class="donate-form"
        data-aos-easing="ease-in-out" method="post" action="uploadmed.php" >
            
        <label for="text" > Medicine Name</label>
            <input type="text" id="Mname" placeholder="Medicine Name" name="Mname"
            required minlength="2" maxlength="100"/>
        
            <label for="text" >Medicine quantity</label>
            <input type="text" id="Mquantity" placeholder="quantity" name="Mquantity" />
        
            <label for="text" >Medicine expiry date</label>
            <input type="date" id="Mdate" placeholder="expiry date" name="Mdate"/>
        
            <label for="text" >location</label>
            <textarea type="text" id="MLoaction" placeholder=" enter location" name="MLoaction"></textarea>
            
            <button type="submit"   name="submitid">Upload </button>
    
        </form>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="donateScript.js"></script>
</body>
</html>