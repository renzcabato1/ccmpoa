// $('#loginbtn .fa-spin').hide();
// clearResponse();

// trigger when login form is submitted
$(document).on('submit', '#login_form', function(){
 
    // get form data
    var login_form=$(this);
    var form_data=JSON.stringify(login_form.serializeObject());
    console.log(form_data)
    // submit form data to api
    $.ajax({
        url: "api/login.php",
        type : "POST",
        contentType : 'application/json',
        data : form_data,
        beforeSend: function() {
            console.log("Loggin in")
        },
        success : function(result){
            // store jwt to cookie
            setCookie("jwt", result.jwt, 1);
            validateSignin()
        },
        error: function(result){
            // on error, tell the user login has failed & empty the input boxes
            // $('#response').html("<div class='alert alert-danger'>Login failed. Email or password is incorrect.</div>");
            // login_form.find('input').val('');
            console.log()
            new NotifyJS({
                message: result.responseJSON.message,
                duration: 5000
            },
            {
                color: 'rgb(245,233,23)',
                textColor: 'red',
                fontFamily: 'Lexend Deca',
                customCSSBox: `border-bottom: 3px solid red; background-color: white;`
            })

        }
    });
 
    return false;
});


function validateSignin() {
    var jwt = getCookie('jwt');
    $.post("api/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(res) {
        localStorage.setItem("data", JSON.stringify(res.data));

        if (res.data.role === "admin") {
            window.location.href = "app/index.html"
        } else if (res.data.role === "client") {
            window.location.href = "app/index.html";
        }
        
    }).fail(function(res){
        $('#response').html("<div class='alert alert-danger'>Something went wrong. Please try again.</div>");
        logoutUser();
    });
}



