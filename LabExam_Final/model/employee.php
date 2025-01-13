
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Management</title>
    <script>
        
        window.onload = function() {
            fetchEmployees();
        };

        
        function fetchEmployees(query = '') {
            let xhttp = new XMLHttpRequest();
            xhttp.open('GET', '../controller/search_employees.php?search=' + query, true);
            xhttp.send();

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('employeeTable').innerHTML = this.responseText;
                }
            };
        }

        
        function searchEmployees() {
            let query = document.getElementById('searchQuery').value;
            fetchEmployees(query);
        }

   
        function updateEmployee(id) {
            let name = document.getElementById('name_' + id).value;
            let contact = document.getElementById('contact_' + id).value;
            let username = document.getElementById('username_' + id).value;

            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../controller/update_employee.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(`id=${id}&name=${name}&contact=${contact}&username=${username}`);

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                    fetchEmployees();
                }
            };
        }

        
        function deleteEmployee(id) {
            
                let xhttp = new XMLHttpRequest();
                xhttp.open('POST', '../controller/delete_employee.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(`id=${id}`);

                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        alert(this.responseText);
                        fetchEmployees();
                    }
                };
            
        }
    </script>
</head>
<body>
    <h1>Employee Management</h1>
    <input type="text" id="searchQuery" onkeyup="searchEmployees()" placeholder="Search employees by name">
    <div id="employeeTable"></div>
    
</body>
</html>
