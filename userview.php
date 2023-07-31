
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="adminstyle.css">
    <style>
    .container{
    position: absolute;
    top: 100px;
    background-color:transparent;
    background-image:url("medi5.jpeg");
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 400px;
    height: 400px;
    border: black;
    box-shadow: 0 5px 30px 10px rgba(0,0,0,0.4);
    margin-left: 800px;
}

a{
    color:black;

}
a:hover
{
    color:lightslategrey;

}
        </style>
</head>
<style>
body {
  background-image: url("tt.gif");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<body>
<div class="container"  data-aos="zoom-in" data-aos-duration="1000">
        <h1>Welcome User!!!</h1>
    <div>
        <a href="uploadmed.php">
    <input type="button" value="Upload Medicine"  ></a>
    </div>

    <br><br>
    <a href="usermedtable.php">
    <input type="button" value="View Uploaded Medicine" ></a>
    <div>
    <br><br>
        <a href="userlogin2.php">
    <input type="button" value="Logout"  ></a>
    </div>

<br><br>


    </div>  
       
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
<script src="adminstyle.js"></script>
    
</body>
</html>
