$(document).ready(function(){
    var request = $.ajax({
        url: "search.php",
        method: "POST",
        data: { term : null },
        dataType: "json"
    });
       
    request.done(function(results) {
        showResults(results);
    });
       
    request.fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
    });
});

function showResults(results){
    $.each(results,function(i, item){
        $("#main-container").append(
            "<a href='/review?reviewID="+item["id"]+"'><div class='result'><h1>"+item['name']+"</h1><div class='rating'><p class='percent'>"+item["score_rating"]+"%</p><div class='bar-container'><div style='width:"+item["score_rating"]+"%'></div></div></div></div></a>"
        );
    });
}