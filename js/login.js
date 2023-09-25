
//init variables
var loginAttempt = 0;

const users = [];


var modal = document.getElementById('id01');

let username = document.getElementById("username");

var rootURL = "http://localhost/WebDevelopment/ASOIAF/api/users"

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//setImage, allows for selection of profile picture
function setImage(select) {
    var image = document.getElementsByName("avatar")[0];
    image.src = select.options[select.selectedIndex].value;
}

//setUser, used to set the username & image to local storage
function setUser() {
    let username = document.getElementById("username").value;
    let userimage = document.getElementById("avatar").value;
    localStorage.setItem("username", username);
    localStorage.setItem("userimage", userimage);

    //handles login, if present in list, choose another, if not, login...
    if (users.includes(username)) {
        alert("Username already exists, please choose another username.")
    } else if (username != "") {
        users.push(username);
        alert("Username registered, now log in");
        document.getElementById("loginBtn").disabled = false;
    } else {
        alert("Invalid Username");
    }
    console.log(users);
}

//checkUser, used to check value in list
function checkUser() {
    let username = document.getElementById("username").value;
    if (users.includes(username)) {
        alert("Username already taken");
        alert(users.length);
    } else {
        users.push(username);
        alert("Logged in Successfully")
    }
}