$(document).ready(function(){
    $("#btn1").click(function(){
    alert("Click the button again to show/hide the video" );
  });
  $("button").click(function(){
    $("iframe").animate({
      height: 'toggle'
    });
  });
});

$(function () {
    $("#mySearch").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#list .contain-game").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});