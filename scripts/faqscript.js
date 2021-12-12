

document.getElementById("new-faq").onsubmit = validate;


function validate()
{
    let isValid = true;

    clearErrors();

    //HAS to be in the same order as the form or else it won't work. So that's fun
    //Validate question field

        let question = document.getElementById("question").value;
        if (question == "") {
            document.getElementById("err-question").style.display = "block";
            isValid = false;
        }

    //Validate answer
    let answer = document.getElementById("answer").value;
    if (answer == "") {
        document.getElementById("err-answer").style.display = "block";
        isValid = false;
    }

    //Validate category
    let category = document.getElementById("category").value;
    if (category == "Choose a Category") {
        document.getElementById("err-category").style.display = "block";
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


