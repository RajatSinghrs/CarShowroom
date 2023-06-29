function loginform() {
    var x = document.forms["myForm"]["uname"].value;
    var y = document.forms["myForm"]["password"].value;


    if (x == "" || x == null) {
        alert("Username must be filled out");
        return false;
    } else if (y == '' || y == null) {
        alert("Password must be filled out");
        return false;
    } else {
        alert("Congratulations, Login has been done successfully");
        return false;
    }
}