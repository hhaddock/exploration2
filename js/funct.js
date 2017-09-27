$(document).ready(function(){
  $("#loginForm").hide();
  $("#title").hide();
  $("#createAcctForm").hide();

  $("#title").fadeIn(800).delay(2000);
  $("#loginForm").slideDown(1000);

  $("#createAcct").click(function(){
    $("#loginForm").slideUp();
    $("#createAcctForm").slideDown();
  });
});
