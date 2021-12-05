
/*code for js needed for collapsed sidenav*/
/*$("[data-trigger]").on("click", function(){
    var trigger_id =  $(this).attr('data-trigger');
    $(trigger_id).toggleClass("show");
    $('body').toggleClass("offcanvas-active");
});

// close button 
$(".btn-close").click(function(e){
    $(".navbar-collapse").removeClass("show");
    $("body").removeClass("offcanvas-active");
});*/

document.getElementById("contact-form").onsubmit = validate;


function validate()
{
    let isValid = true;

    clearErrors();

    //Validate first name
    let first = document.getElementById("fname").value;
    if (first == "") {
        document.getElementById("err-fname").style.display = "block";
        isValid = false;
    }

    //Validate last name
    let last = document.getElementById("lname").value;
    if (last == "") {
        document.getElementById("err-lname").style.display = "block";
        isValid = false;
    }

    //Validate email address
    let email = document.getElementById("emailAddress").value;
    if (email == "") {
        document.getElementById("err-emailAddress").style.display = "block";
        isValid = false;
    }

    //Validate question field
    let question = document.getElementById("questionInput").value;
    if (question == "") {
        document.getElementById("err-question").style.display = "block";
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

//Validate Search Bar
document.getElementById("searchbutton").onclick=function(){
    let searchValid = true;

    let searchResult = document.getElementById("uinput").value;
    if(searchResult === ""){
        searchValid= false;
    }
    return searchValid;

}


    $(document).ready(function () {

    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function () {
    // open or close navbar
    $('#sidebar').toggleClass('active');
    // close dropdowns
    $('.collapse.in').toggleClass('in');
    // and also adjust aria-expanded attributes we use for the open/closed arrows
    // in our CSS
    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
});

});

