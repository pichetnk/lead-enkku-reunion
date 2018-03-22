
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

 

$("#appRegister").ready(function () {

$("#btnRegister").on("click",function()
{ 
    let data = $("#registerForm").serialize();
    
     $.ajax({
        method :"post",
        url: "/register",
        data: data,
        type : "json",
        success: function( data ) {
           
            if(data.error_code=='00'){
                console.log('valid');
                $('#errorMsgRegister').html(data.error);
                $('#errorMsgRegister').show();
            }if(data.error_code=='01'){
                console.log('user register');
                $('#errorMsgRegister').html(data.error);
                $('#errorMsgRegister').show();
            }else {
               console.log('Not found error');
               window.location.href = '/team';                 

            }
        }
      });
     
   
      
            return false;
  });
});