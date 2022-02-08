$(document).ready(function(){
    $("#submit").click(function(){
        var username = $("#username").val();
        var password = $("#password").val();
        login(username,password);
    });
    $("#password").keyup(function(e){
        if(e.keyCode == 13){
            var username = $("#username").val();
            var password = $("#password").val();
            login(username,password);
        }
    });
});

function login(username, password){
    var checkInfo = check(username,password);
    if(checkInfo == true){
        var request = $.ajax({
            url: "login.php",
            method: "POST",
            data: { data : [username,password] },
            dataType: "json"
        });
           
        request.done(function(results) {
            if(results == true){
                window.location.href = '../new-review';
            }else{
                alert("An error occured while logging in.")
            }
        });
           
        request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
        });
    }else{
        errorMessage(checkInfo);
    }
}

function check(username, password){
    if(username == "" || password == ""){
        return "Username or password is empty";
    }else{
        return true;
    }
}

function errorMessage(message){
    $("#error-message").show();
    $("#error-message").html(message);
}