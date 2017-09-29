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

  $("#loginLink").click(function(){
    $("#createAcctForm").addClass("hidden");
    $("#createAcctForm").slideUp();
    $("#loginForm").slideDown();
  });

  $("#loginForm").submit(function(event){
    $(".login").each(function(){
      if($(this).length <= 1){
        alert("Error: you must fill out all form elements");
        event.preventDefault();
        return;
      }
    })
  });
});
