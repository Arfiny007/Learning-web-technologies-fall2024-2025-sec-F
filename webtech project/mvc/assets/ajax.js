
        function loginUser() {
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;

            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../controllers/auth.php', true);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('loginMessage').innerText = this.responseText;
                    if (this.responseText.includes('successful')) {
                        window.location.href = '../index.php';
                    }
                }
            };
            xhttp.send('email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password));
            return true;
        }
