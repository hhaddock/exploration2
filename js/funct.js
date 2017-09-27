$(document).ready(function(){
  $("#loginForm").hide();
  $("#title").hide();
  $("#createAcctForm").hide();

  $("#title").fadeIn(800).delay(2000);
  $("#loginForm").slideDown(1000);

  $("#createAcctLink").click(function(){
    $("#loginForm").slideUp();
    $("#createAcctForm").removeClass("hidden");
    $("#createAcctForm").slideDown();
  });
});
