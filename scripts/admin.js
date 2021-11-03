document.getElementById("login-form").onsubmit = validate;

function validate()
{
    let isValid = true;

    clearErrors();

    //Validate username
    let username = document.getElementById("username").value;
    if (username == "") {
        document.getElementById("err-username").style.display = "block";
        isValid = false;
    }

    //Validate password
    let password = document.getElementById("password").value;
    if (password == "") {
        document.getElementById("err-password").style.display = "block";
        isValid = false;
    }


    return isValid;
}

function clearErrors()
{
    //Clear all error messages
    let errors = document.getElementsByClassName("err");
    for (let i=0; i<errors.length; i++) {
        errors[i].style.display = "none";
    }
}