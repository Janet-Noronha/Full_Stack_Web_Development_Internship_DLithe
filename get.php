<?php

$name=$_POST['name'];
$phoneno=$_POST['phoneno'];
$date=$_POST['date'];
$selectroom=$_POST['selectroom'];


$conn = mysqli_connect("localhost","root","","dbb");

if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}

$sql= "INSERT INTO tbb(name,phoneno,date,selectroom) VALUES ('$name','$phoneno','$date','$selectroom')";

if(mysqli_query($conn,$sql)) {
    echo "Record inserted sucessfully";
}

$resultAll=mysqli_query($conn,"SELECT * FROM tbb");

if(!$resultAll){
    die(mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

    <title>Confirm</title>
    <style>
        body{
            overflow-X:hidden;
        }
        .content{ padding:12px;background-color: aliceblue;width:1450px;height: 720px;}
        p{
            font-size: 130px;
            color: indigo;
            text-align:center;
            font-style:italic;
            font-family:Georgia, 'Times New Roman', Times, serif;
            margin:150px;
        }
        .header{
   padding-bottom: 0;
}
.header .navbar{
   display: flex;
   align-items: center;
   justify-content: space-evenly;
   gap: 1.5rem;
   margin-top: 2rem;
   background-color: #ff9900;
   padding: .5rem;
   border-radius: .5rem;
}

.header .navbar a{
   font-size: 1.6rem;
   color: black;
   padding: 0.5rem 1.5rem;
   border-radius: .5rem;
}

.header .navbar a:hover{
   background-color:brown;
   color: white;
}

    </style>
</head>
<body>
<section class="header">
    <nav class="navbar">
      <a href="homepage.html">HOME</a>
      <a href="about.html">ABOUT</a>
      <a href="homepage.html">RESERVATION</a>
      <a href="homepage.html">GALLERY</a>
      <a href="homepage.html">CONTACT US</a>
      <a href="homepage.html">REVIEWS</a>
   </nav>
  </section>
    <center>
        
            <div class="content">
                <p>THANK YOU <br>FOR BOOKING!!!</P>
            </div>
        
    </center>

 
 

</body>
</html>