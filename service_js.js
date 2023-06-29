function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    var y = document.forms["myForm"]["femail"].value;
    var z = document.forms["myForm"]["ftel"].value;


    if (x == "" || x == null) {
        alert("Name must be filled out");
        return false;
    } else if (y == '' || y == null) {
        alert("Email must be filled out");
        return false;
    } else if (z == '' || z == null) {
        alert("Telephone must be filled out");
        return false;
    } else {
        alert("Congratulations, your registration has been done. You can visit nearest center for service");
        return false;
    }
}