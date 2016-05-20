$(document).ready(function(){

   $("#toBegin, #toBegin2").click(function (e){
   	e.preventDefault();
                $('html, body').animate({
                    scrollTop: $("#getStarted").offset().top

                }, 1500);
 $("#toBegin, #toBegin2").attr("href",$("a").attr("href").replace(/#/, "")); 
            }); // end of scroll function

// Step two of the process
   $(".generate-btn").click(function(e){
    e.preventDefault();
      $('html, body').animate({
                    scrollTop: $("#inputBegin").offset().top

                }, 1500);
});


// MAIN PROGRAM LOGIC
///////////////////////////////////////////////////

var ids = "email";
var ids2 = "msg";
var divClass = "divClass";
var area = "textarea1"
var areaId;
var emailArray = [];
var nameArray = [];
///////////generate inputs
    $("#btn1").click(function(){
        var first_value = $("#allOptions").val();
        $(".send-btn-class").css("visibility", "visible");
        for(var i=0; i<first_value; i++){
            $(".appendHere").append('<div class="' + divClass +'"><input type="text" placeholder="E-mail ' + (1+i) + '" id="' + (ids +(1+i))  + '"><br/> <input type="text" placeholder="Name '+ (1+i) +'" id="'+ (ids2 +(1+i))  + '"><br/></div>');
            

           emailArray.push("#" +ids + (i+1)); // create ids
           nameArray.push("#" +ids2 + (i+1)); // create ids


        }

        // Make generate button a START OVER BUTTON
        $(".generate-btn").val("Start Over");
        if ($('.generate-btn').val() == "Start Over") {
    $(".generate-btn").click(function(){ window.location.reload();});
}
        // END OF MAIN PROGRAM
///////////////////////////////////////////////////


   }); 





// For arrow bouncing

function animateArrow(){
  $(".arrow").addClass("animate");
  setTimeout(function(){$(".arrow").removeClass("animate");},1050);
}
setInterval(function(){animateArrow()}, 4000);


}); // end of document ready
