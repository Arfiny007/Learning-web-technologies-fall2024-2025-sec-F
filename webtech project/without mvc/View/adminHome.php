<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Home</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #A8DADC; 
    color: #333; 
    height: 100vh; /* Ensure it takes the full viewport height */
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column; /* To keep the header and nav above the card */
  }

  .header {
    background-color: #BFD8BD; 
    color: white;
    text-align: center;
    padding: 20px;
    font-size: 1.5em;
    width: 100%;
  }

  .nav {
    background-color: #F4E1D2; 
    padding: 10px;
    display: flex;
    justify-content: center;
    gap: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 100%;
  }

  .nav a {
    color: #333;
    padding: 10px 20px;
    background-color: #BFD8BD; 
    border-radius: 5px;
    transition: background-color 0.3s;
  }

  .nav a:hover {
    background-color: #A8DADC; 
    color: white;
  }

  .main {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    padding: 30px;
    text-align: center;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    width: 300px; 
    border-radius: 8px;
    overflow: hidden;
    background-color: #FFF;
    text-align: center;
  }

  .card img {
    width: 100%; 
    border-bottom: 1px solid #ddd;
  }

  .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  }

  .card .container {
    padding: 20px;
  }
  </style>
</head>
<body>

<div class="header">
  <h1>Tendify Online Shop</h1>
  
</div>

<div class="nav">
  <a href = home.html> Home </a>
  <a href = 'Coupon.php'> Coupon </a>
</div>

<div class="main">

<div class="sidebar">
       <a href ="adminprofile.php"> <button class="btn" ><span>👤</span>Profile</button> </a>
        <button class="btn"><span>👕</span> Products</button>
        <a href ="../view/customerDisplay.php"><button class="btn"><span>👥</span> Customers</button>
        <a href ="../view/srDisplay.php"><button class="btn"><span>🤝</span> Sales Representative</button> </a>
        <a href = "../controller/logout.php"><button class="btn logout"><span>🚪</span> Logout</button> </a>
    </div>
    <div class="main-content">
        <h1>Welcome To <span class="highlight">Tendify</span></h1>
        <div class="profile-info">
            <?php
             session_start();

             $id =  $_SESSION['userid'];

             echo $id;
             $con = mysqli_connect('127.0.0.1', 'root', '', 'Tendify');
             $sql = "SELECT * FROM emplolyee WHERE id = '{$id}' ";
             $result = mysqli_query($con, $sql);
             $row = mysqli_fetch_assoc($result);
     
             $name = $row['Name'];
                    
            ?>

<div class="card">
        <img src="avatar.jpg" alt="Avatar">
        <div class="container">
          <h4><b><?php echo $name; ?></b></h4>
          <p><?php echo $id; ?></p>
        </div>
      </div>
            
        </div>
    </div>

</div>

</body>
</html>
