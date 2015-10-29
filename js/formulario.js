function checkForm(obj) {	
	$(document).ready(function () {
	 // Se usa para validar el corroes
    emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    // Alpha se usa para validar solo letras
    alpha = /^[a-zA-Z]+\w+$/;
    pass = /^[a-zA-Z0-9@\._\-]+$/;
    
    username = $("#name"); 
	 lastname = $("#lastname");    
    password = $("#password"); 
    email = $("#email");
    confirmpass = $("#confirmpass");
    birthday = $("#bday");
    phone = $("#phone");
    
      $("#btnSubmit").click(function (){
        $(".alert").remove();
        if( username.val() != "" )  {
        		if(!isNaN(username.val()) || !alpha.test( username.val() ) ){
            	username.focus().after("<div class='alert alert-danger'><span>Invalid Name</span>");
            }
        }
        else{
        		username.focus().after("<div class='alert alert-danger'><span>Name cannot be blank!</span>");
        }
        if( lastname.val() != ""){
        		if( !isNaN( lastname.val() ) || !alpha.test( lastname.val()  ) ){
            	lastname.after("<div class='alert alert-danger'><span>Invalid lastame </span>");
            }
        }
        else{
        		lastname.after("<div class='alert alert-danger'><span>Please insert your lastname </span>");
        }
        
        if( email.val() != ""){
        		if(!emailreg.test(email.val()) ){
            	email.after("<div class='alert alert-danger'><span>Invalid Email</span>");
            	
            }
        }
        else{
				email.after("<div class='alert alert-danger'><span>Email can't be empty</span>");
        }
        if( password.val()!=""){
        		if(pass.test( password ) ){
        			password.after("<div class='alert alert-danger'><span>The password only can contain alphabetic characters, numbers,'_' , '-' , '.'. </span>");
        			
        		}
        }
        else{
        		password.after("<div class='alert alert-danger'><span>Password can't be empty</span>");
        }
        if (phone.val != ""){
        		if (isNaN(phone.val() ) || phone.val().length<8)  {
        			phone.after("<div class='alert alert-danger'>Invalid number<span></span>");
        		}
        }
   });
    
});
}