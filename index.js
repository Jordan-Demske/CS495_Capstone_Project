$(document).ready(function(){
    search(null);

    // if user clicks search button
    $("#search-btn").click(function(){
        var term = $("#search-bar").val();
        search(term);
    });
    // if user hits enter when typing in search bar
    $('#search-bar').keyup(function(e){
        if(e.keyCode == 13){
            var term = $("#search-bar").val();
            search(term);
        }
    });

    $("#scroll-button").click(function(){
        $('html,body').animate({
            scrollTop: $("#search-area").offset().top - 90
         },1000);
    });
});

function search(term){
    var request = $.ajax({
        url: "search.php",
        method: "POST",
        data: { data : term },
        dataType: "json"
    });
       
    request.done(function(results) {
        showResults(results);
    });
       
    request.fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
    });
}

function showResults(results){
    $("#main-container").empty();
    if(results == null){
        $("#main-container").append("<h1>No Results.</h1>");
    }else{
        $.each(results,function(i, item){
            $("#main-container").append(
                "<a href='/Capstone/review?reviewID="+item["id"]+"'><div class='result'><div><h2 class='drug-name'>"+item['drug_name']+"</h2><h1 class='ad-name'>"+item['ad_name']+"</h1></div><div class='rating'><p class='percent'>"+item["score_rating"]+"%</p><div class='bar-container'><div style='width:"+item["score_rating"]+"%'></div></div></div></div></a>"
            );
        });
    }
}