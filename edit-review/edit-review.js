$(document).ready(function(){
    $("#submit").click(function(){
        var id = $("#id").val();
        var ad_name = $("#ad-name").val();
        var drug_name = $("#drug-name").val();
        var indication = $('input[name="indication"]:checked').val();
        var efficacy = $('input[name="efficacy"]:checked').val();
        var place = $('input[name="place"]:checked').val();
        var dosing = $('input[name="dosing"]:checked').val();
        var other_agents = $('input[name="other-agents"]:checked').val();
        var serious_adr = $('input[name="serious-adr"]:checked').val();
        var common_adr = $('input[name="common-adr"]:checked').val();
        var monitoring = $('input[name="monitoring"]:checked').val();
        var interactions = $('input[name="interactions"]:checked').val();
        var cost = $('input[name="cost"]:checked').val();
        var contraindication = $('input[name="contraindication"]:checked').val();
        var specific_populations = $('input[name="specific-populations"]:checked').val();
        var rating = $("#rating").val();
        var did_right = $("#did-right").val(); 
        var could_improve = $("#could-improve").val();
        var ad_url = $("#ad-url").val();
        var video_url = $("#video-url").val();

        var data = {
            "id" : id,
            "ad_name" : ad_name,
            "drug_name" : drug_name,
            "indication" : indication,
            "efficacy" : efficacy,
            "place" : place,
            "dosing" : dosing,
            "other_agents" : other_agents,
            "serious_adr" : serious_adr,
            "common_adr" : common_adr,
            "monitoring" : monitoring,
            "interactions" : interactions,
            "cost" : cost,
            "contraindication" : contraindication,
            "specific_populations" : specific_populations,
            "rating" : rating,
            "did_right" : did_right,
            "could_improve" : could_improve,
            "ad_url" : ad_url,
            "video_url" : video_url.replace("/a/", "/share/")
        };
        var check = check_data(data);
        if(check == 0){
            submit(data);
        }else{
            errorMessage(check);
        }
    });
});

function check_data(data){
    var response = 0;
    $.each(data, function( index, value ) {
        if(value == ""){
            response = "One or more fields are empty";
        }
    });
    return response;
}

function submit(data){
    var request = $.ajax({
        url: "edit-review.php",
        method: "POST",
        data: { data : data },
        dataType: "json"
    });
        
    request.done(function(result) {
        if(result == "0"){
            window.location.href = '/review/?reviewID='+data["id"];
        }else{
            alert("An error has occured. Please try again in a bit.");
        }
    });
        
    request.fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
    });
}

function errorMessage(message){
    $("#error-message").show();
    $("#error-message").html(message);
}