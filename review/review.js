$(document).ready(function(){
    $("#delete-btn").click(function(){
        if(confirm("Are you sure you want to delete this review?")){
            var id = $("#id").val();

            var data = {
                "id" : id
            };

            var request = $.ajax({
                url: "delete.php",
                method: "POST",
                data: { data : data },
                dataType: "json"
            });
                
            request.done(function(result) {
                if(result == "0"){
                    window.location.href = '../';
                }else{
                    alert("An error occured while deleting the record.");
                }
            });
                
            request.fail(function( jqXHR, textStatus ) {
                alert( "Request failed: " + textStatus );
            });
        }
    });
});