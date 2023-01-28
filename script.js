function checkPassword() {
    console.log("invoked");
    let pass = document.getElementById('password').value;
    let confirmpass = document.getElementById('confirmpass').value;

    if(confirmpass != pass) alert("Passwords do not match");
}