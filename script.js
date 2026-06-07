const { use } = require("react");

function validateForm(event) {
    event.preventDefault();

    let username = document.getElementById("usrname").value;
    let password = document.getElementById("pswd").value;
    let country = document.getElementById("cntry").value;
    let genders = document.getElementById("gndr");

    if (username.trim()==="" || username.length<4){
        alert("Username is required and must be at least 4 characters long.")
        return false;
    }

    let pwdRegex = /^[a-zA-Z].*#$/;
    if (password === "" || !pwdRegex.test(password)) {
        alert("Password is required, must start with a character, and end with a hashtag (#).")
    }
}
