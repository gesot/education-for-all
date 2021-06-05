
$(document).ready(function(){
$("#register-form").validate({
  rules:
  {
    username:{
      minlength : 3,
      maxlength: 50,
      required: true,
      nowhitespace: true
    },
    email:{
      required: true,
      email: true
    },
    password:{
      required: true,
      minlength : 4,
      maxlength: 50

    }
  },
  messages:{
    username:{
      required:'Please enter a username',
      nowhitespace: 'Username must not have whitespaces'
    },
    email:{
      required:'Please enter an email address',
      email:'Please enter a valid email adress'
    }
  }


});



 // console.log("xaxa");

// $('[name=username').focus(function(){
//   var usernameLength = $('[name=username]').val().replace(/\s+/g, '').length;
//   if  ((usernameLength<4) || (usernameLength>50)){
//     $(".username-error").text("Username must be between 4-50 characters");
//     $(".username-error").show();
//   }
//   else{
//     $(".username-error").hide();
//   }
// });




//  $('.register-form').submit(function(e){
//   var usernameLength = $('[name=username]').val().replace(/\s+/g, '').length;
//   var passwordLength = $('#register-password').val().replace(/\s+/g, '').length;
//   console.log(usernameLength);
//   console.log(passwordLength);
//   //username number of letters validation


//   if  ((usernameLength<4) || (usernameLength>50))
//    {
//     $(".username-error").text("Username must be between 4-50 characters");      
//     if  ((passwordLength<4) || (passwordLength>50)){
//       $(".password-error").text("Password must be between 4-50 characters"); 
//       $(".password-error").show();
//       return false;
//     }
//     else{
//       $(".password-error").hide();
//       return false;
//     }
    
//   }

//   if  ((passwordLength<4) || (passwordLength>50))
//   {
//     $(".password-error").text("Username must be between 4-50 characters");      
//     if  ((usernameLength<4) || (usernameLength>50)){
//       $(".username-error").text("Password must be between 4-50 characters"); 
//       $(".username-error").show();
//       return false;
//     }
//     else{
//       $(".username-error").hide();
//       return false;
//     }
    
//   }






    $('.register-form').attr("action","user-interaction/register.php");
  




 //});

});//