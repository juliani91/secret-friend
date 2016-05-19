$(document).ready(function(){

   $("#toBegin, #toBegin2").click(function (e){
   	e.preventDefault();
                $('html, body').animate({
                    scrollTop: $("#getStarted").offset().top

                }, 1500);
 $("#toBegin, #toBegin2").attr("href",$("a").attr("href").replace(/#/, "")); 
            }); // end of scroll function

}); // end of document ready
