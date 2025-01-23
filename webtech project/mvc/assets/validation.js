
function login_validate() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    if (!email || !password) {
        alert("All fields are required!");
        return false;
    }
    return true;
}

function registerUser(name, username, email, password, cpassword) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../controllers/auth.php', true);

    var data = "name=" + name +
               "&username=" + username +
               "&email=" + email +
               "&password=" + password +
               "&confirm_password=" + cpassword;

    
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById('registerMessage').innerText = xhr.responseText;
            }
        };
        xhr.send(data);
    };

    function reg_validation() {

        let name = document.getElementById("name").value;
        let username = document.getElementById("username").value;
        let email = document.getElementById("email").value;
        let password = document.getElementById("password").value;
        let confirmPassword = document.getElementById("confirm_password").value;
        let image = document.getElementById("profile_image").files[0]; 

        if (!name || !username || !email || !password || !confirmPassword || !image) {
            alert("All fields are required!");
            return false;
        }

        if(strlen(password)<8){
            alert("Password must be at least 8 characters.");
            return false;
        }

        if (password !== confirmPassword) {
            alert("Passwords do not match!");
            return false;
        }
        return true;
        
        
        
    }