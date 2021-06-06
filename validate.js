
$(document).ready(function(){
$("#register-form").validate({
  rules:
  {
    username:{
      required: true,
      remote: {
       url: 'Server.php',
       type: 'post'
      }

    },
    email:{
      required: true,
      email: true,
      remote:{ 
      url:'Server.php',
      type: 'post'
    }
    },
    password:{
      required: true,
    }
  },
  messages:{
    username:{
      required:'Please enter a username',
      nowhitespace: 'Username must not have whitespaces',
      remote: 'Username already exists.'
    },
    email:{
      required:'Please enter an email address',
      email:'Please enter a valid email adress',
      remote: 'Email already exists'
    }
  }


});


});