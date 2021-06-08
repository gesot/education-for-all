
$(document).ready(function(){
  $(".contact-form").validate({
    rules:
    {
      name:{
        required: true,
        minlength: 3,
        maxlength: 50,
  
      },
      email:{
        required: true,
        email: true,
        maxlength: 50,
      },
      phonenumber:{
        required: false,
        digits: true,
        maxlength:15
      },
      message:{
        required:true,
        maxlength:255

      }
    },
    messages:{
      name:{
        required:'Please enter your name.',
        minlength: 'Username must contain between 3-50 letters.',
        maxlength: 'Username must contain between 3-50 letters.',
        required:'Please enter a username.',
        nowhitespace: 'Username must not have whitespaces.',
        remote: 'Username already exists.'
      },
      email:{
        required:'Please enter your email.',
        maxlength: 'Email must contain between 3-50 letters.',
        required:'Please enter an email address.',
        email:'Please enter a valid email address.',
        remote: 'Email already exists.'
      },
      phonenumber:{
        maxlength: 'Phone number must contain at most 15 digits.'
      },
      message:{
        required: 'Please enter your message.',
        maxlength:'Message must contain at most 255 characters.'
      }
    }
  
  
  });
  
  
  });