<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Details Sales Representative</title>
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
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
    background-color: #F4E1D2;
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

</style>
</head>
<body>

<div class="header">
  <h1>Tendify Online Shop</h1>
  
</div>

<div class="nav">
  <a href = 'srDisplay.php'> BACK </a>
</div>

<div class="main">

  <?php


        if (isset($_GET['id'])) 
        {
        $id = $_GET['id'];
        
        $con = mysqli_connect('127.0.0.1', 'root', '', 'Tendify');
        $sql = "SELECT * FROM `emplolyee` WHERE ID='{$id}'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);

       
        $pass = $row['Password'];
        $name = $row['Name'];
        $email = $row['Mail'];
        $dob = $row['DOB'];
        $salary = $row['Salary'];
        $role = $row['Role'];
        }
        else 
        {
            echo " No id provided";
        }
        
    ?>

        
      

        </form>

        <form method = "post" action="updateSR.php" enctype="" onsubmit="return check()">

        UserID:<input type = "text" name="userid" id="userid" value="<?php echo $id ?>" onkeyup="valid()"/><br><br>
        Password: <input type = "password" id="password" name="password" value="<?php echo $pass ?>" onkeyup="validatePassword()"/>
        <p id="pass"> </p>
        Name:<input type = "text" name="name" id="name" value="<?php echo $name ?>" onkeyup="valid()"/><br><br>
        Email: <input type ="email" name="email" id="email" value="<?php echo $email ?>" onkeyup="valid()"/><br><br>
        Date Of Birth <input type="date" name = "dob" id="dob" value="<?php echo $dob ?>" onkeyup="valid()"/><br><br>
        Salary <input type = "text" name="salary" id="salary" value="<?php echo $salary ?>" onkeyup="valid()"/><br><br>
        Role <input type="text" name="role" value="SR"/><br><br>
        <p id="msg"> </p>
        <input type="submit" name="submit" value="Update">


       </form>
        

       <script>
        function validatePassword() {
              let password = document.getElementById('password').value;

              if (password.length == 0) {
                  document.getElementById('pass').innerHTML = "Password cannot be empty.";
                  document.getElementById('pass').style.color = "red";
                  return fasle;
              } else if (password.length < 3) {
                  document.getElementById('pass').innerHTML = "Password is too short.";
                  document.getElementById('pass').style.color = "red";
                  return false;
              } else {
                  document.getElementById('pass').innerHTML = "";
                  document.getElementById('pass').style.color = "green";
                  return false;
              }
          }
          function valid() {
    let userid = document.getElementById('userid').value;
    let password = document.getElementById('password').value;
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let dob = document.getElementById('dob').value;
    let salary = document.getElementById('salary').value;

    
    if (!userid || !password || !name || !email || !dob || !salary) {
      document.getElementById('msg').innerHTML = 'Please fill all input field';
      document.getElementById('msg').style = 'color: red';
      return false; 
    }
    else
    {
      document.getElementById('msg').innerHTML = '';
      return true; 
    }
}

function check() {

if(valid()==false)
return false;
let userid = document.getElementById('userid').value;
    let password = document.getElementById('password').value;
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let dob = document.getElementById('dob').value;
    let salary = document.getElementById('salary').value;
let json = { 'userid': userid, 'password': password,'name':name,'email':email,'dob':dob,'salary':salary };
let user = JSON.stringify(json);

let xhttp = new XMLHttpRequest();
xhttp.open('POST', '../controller/updateSR.php', true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send('mydata=' + user);

event.preventDefault(); 
xhttp.onreadystatechange = function () {
if (this.readyState == 4 && this.status == 200) {
console.log(this.responseText);
let std = JSON.parse(this.responseText);
let status = std.pass;

if (status == '1') 
{

  alert('Update Successfull');
window.location.href = 'srDisplay.php';
}
else
{

document.getElementById('msg').innerHTML = 'Update Failed!';
document.getElementById('msg').style = 'color:red';

}
}
};

return false;


}

      </script>

</div>



</body>
</html>
