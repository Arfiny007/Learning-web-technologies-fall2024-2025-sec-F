<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Customer Display</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #A8DADC; 
    color: #333; 
  }

  .header {
    background-color: #BFD8BD; 
    color: white;
    text-align: center;
    padding: 20px;
    font-size: 1.5em;
  }

  .nav {
    background-color: #F4E1D2; 
    padding: 10px;
    display: flex;
    justify-content: center;
    gap: 15px;
    box-shadow: 0 2px 5px rgba(167, 136, 136, 0.1);
  }

  .nav a {

    color: #333;
    padding: 10px 20px;
    background-color:rgb(29, 161, 213); 
    border-radius: 5px;
    transition: background-color 0.3s;
  }

  .nav a:hover {
    background-color: #A8DADC; 
    color: white;
  }

  .main {
    background-color:rgb(91, 163, 180);
    padding: 30px;
    text-align: center;
    min-height: 60vh; 
  }

  .footer {
    background-color: #BFD8BD; 
    color: white;
    text-align: center;
    padding: 15px;
  }
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #F4F4F9;
    color: #333;
  }


  .container {
    padding: 20px;
  }

  .card-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: flex-start;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    width: 48%; 
    border-radius: 8px;
    overflow: hidden;
    background-color: #FFF;
  }

  .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  }

  .card img {
    width: 100%;
    height: auto;
  }

  .card .container {
    padding: 16px;
  }

  .buttons {
    text-align: center;
    background-color: rgba(13, 11, 11, 0.2);
    opacity: 0;
    transition: opacity 0.3s ease;
    padding: 8px;
  }

  .card:hover .buttons {
    opacity: 1;
  }

  .buttons button {
    margin: 5px;
    padding: 10px 15px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .buttons button:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>

  <?php

  function getConnection(){
  $con = mysqli_connect('127.0.0.1', 'root', '', 'Tendify');
  return $con;
}
  ?>
<div class="header">
  <h1>Tendify Online Shop</h1>
  <p>Our valuable customer details are given below.</p>
</div>

<div class="nav">
  <a href="adminHome.php">BACK</a>
</div>

<div class="main">
    <div class="container">
        <div class="card-wrapper">

<?php
     $con = getConnection();
     $sql = "SELECT * FROM customer";
     $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_assoc($result))
    {

        $name = $row['Name'];
        $id = $row['ID'];

    ?>
        <div class="card">
        <img src="avatar.jpg" alt="Avatar">
        <div class="container">
          <h4><b><?php echo $name; ?></b></h4>
          <p><?php echo $id; ?></p>
        </div>
        <div class="buttons">
          <a href="deleteSR.php?id=<?php echo $id; ?>"><button>Delete</button></a>
          <a href="detailsSR.php?id=<?php echo $id; ?>"><button>VIEW DETAILS</button></a>
        </div>
      </div>
    <?php
    }
    ?>
        </div>
    </div>
 </div>
<div class="footer">
  <p>&copy; 2025 Tendify Online Shop | All Rights Reserved</p>
</div>

</body>
</html>
