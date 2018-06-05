$(document).ready(function(){
  $("#hideLogIn").click(function(){
    $("#loginForm").hide();
    $("#registerForm").show();
  });

  $("#hideRegister").click(function(){
    $("#registerForm").hide();
    $("#loginForm").show();
  });
});
