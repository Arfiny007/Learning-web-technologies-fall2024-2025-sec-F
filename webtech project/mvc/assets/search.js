function searchProducts() {
    let search = document.getElementById('search').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controllers/searchProducts.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('search=' + search);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('product-container').innerHTML = this.responseText;
        }
    };
}