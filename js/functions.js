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
   }); // end of step two

// For arrow bouncing

function animateArrow(){
  $(".arrow").addClass("animate");
  setTimeout(function(){$(".arrow").removeClass("animate");},1050);
}
setInterval(function(){animateArrow()}, 4000);


}); // end of document ready
