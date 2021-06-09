
$(document).ready(function(){
$("#register-form").validate({
  rules:
  {
    username:{
      required: true,
      minlength: 3,
      maxlength: 50,
      remote: {
       url: 'Server.php',
       type: 'post'
      }

    },
    email:{
      required: true,
      email: true,
      maxlength: 50,
      remote:{ 
      url:'Server.php',
      type: 'post'
    }
    },
    password:{
      required: true,
      minlength: 3,
      maxlength: 50,
    }
  },
  messages:{
    username:{
      minlength: 'Username must contain between 3-50 letters',
      maxlength: 'Username must contain between 3-50 letters',
      required:'Please enter a username',
      nowhitespace: 'Username must not have whitespaces',
      remote: 'Username already exists.'
    },
    email:{
      maxlength: 'email must contain between 3-50 letters',
      required:'Please enter an email address',
      email:'Please enter a valid email adress',
      remote: 'Email already exists'
    },
    password:{
      required: 'Please enter your password',
      minlength: 'Password must contain between 3-50 letters',
      maxlength: 'Password must contain between 3-50 letters',
    }
  }


});


});