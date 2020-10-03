$(document).ready(function(){
 
  // Click event of the showPassword button
  $('.view-pass').on('click', function(){
     
    // Get the password field
    var passwordField = $('#password');
 
    // Get the current type of the password field will be password or text
    var passwordFieldType = passwordField.attr('type');
 
    // Check to see if the type is a password field
    if(passwordFieldType == 'password')
    {
        // Change the password field to text
        passwordField.attr('type', 'text');
 
        // Change the Text on the show password button to Hide
        $(this).val('Hide');
    } else {
        // If the password field type is not a password field then set it to password
        passwordField.attr('type', 'password');
 
        // Change the value of the show password button to Show
        $(this).val('Show');
    }
  });
});

$(document).ready(function(){
 
  // Click event of the showPassword button
  $('.view-pass').on('click', function(){
     
    // Get the password field
    var passwordField = $('#new');
 
    // Get the current type of the password field will be password or text
    var passwordFieldType = passwordField.attr('type');
 
    // Check to see if the type is a password field
    if(passwordFieldType == 'password')
    {
        // Change the password field to text
        passwordField.attr('type', 'text');
 
        // Change the Text on the show password button to Hide
        $(this).val('Hide');
    } else {
        // If the password field type is not a password field then set it to password
        passwordField.attr('type', 'password');
 
        // Change the value of the show password button to Show
        $(this).val('Show');
    }
  });
});


$(document).ready(function(){
 
  // Click event of the showPassword button
  $('.view-pass1').on('click', function(){
     
    // Get the password field
    var passwordField = $('#new_confirm');
 
    // Get the current type of the password field will be password or text
    var passwordFieldType = passwordField.attr('type');
 
    // Check to see if the type is a password field
    if(passwordFieldType == 'password')
    {
        // Change the password field to text
        passwordField.attr('type', 'text');
 
        // Change the Text on the show password button to Hide
        $(this).val('Hide');
    } else {
        // If the password field type is not a password field then set it to password
        passwordField.attr('type', 'password');
 
        // Change the value of the show password button to Show
        $(this).val('Show');
    }
  });
});

$(document).ready(function () { 
  $('.test').on('click', function () {
    
        $('.login-conteudo').toggleClass('active');
        $('body').toggleClass('active');
        $('.login-logo').toggleClass('active');
        $('.login-input').toggleClass('active');
        $('input').toggleClass('active');
        $('i').toggleClass('active');
        $('.login-input2').toggleClass('active');   
        $('#lc1').toggleClass('active');
        $('#lc2').toggleClass('active');
        $('i').toggleClass('active');
        $('i').toggleClass('active');
        $('.login_btn').toggleClass('active');
        $('input-lg').toggleClass('active');

     
  });  
});

$(document).ready(function () { 
  $('.view-pass').on('click', function () {
    $('#v1').toggleClass('active');
    $('#v2').toggleClass('active');
  });  
});

$(document).ready(function () { 
  $('.view-pass1').on('click', function () {
    $('#v3').toggleClass('active');
    $('#v4').toggleClass('active');
  });  
});

$(document).ready(function () { 
  $('.test').on('click', function () {
    $('#lc2').toggleClass('active');
    $('#lc1').toggleClass('active');
  });  
});


