const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click',()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click',()=> {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click',()=> {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click',()=> {
    wrapper.classList.remove('active-popup');
});


//validate email,  and password

function validate(){

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");
    
    error_message.style.padding = "10px";
    error_message.style.color = "red";
    error_message.style.textAlign = "center";
    error_message.style.backgroundColor = "#fe8b8e";
    error_message.style.transition = "all 0.5s ease";
    error_message.style.fontSize = "20px";

    var text;
    if(name.length < 5){
      text = "Please Enter valid Name";
      error_message.innerHTML = text;
      return false;
    }

    if("^[a-zA-Z]+$".test(name)){}else{
      text = "Please Enter alphabetic Name";
      error_message.innerHTML = text;
      return false;
    }
   
    if(isNaN(phone) || phone.length != 10){
      text = "Please Enter valid Phone Number";
      error_message.innerHTML = text;
      return false;
    }

    if(email.indexOf("@") <=0 || email.length <6){
      text = "Please Enter valid Email";
      error_message.innerHTML = text;
      return false;
    }
    if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
      text = "Please Enter valid Email";
      error_message.innerHTML = text;
      return false;
    }
    
    if(message.length <= 1){
      text = "Please Enter Less Than 10 Characters";
      error_message.innerHTML = text;
      return false;
    }
    //alert("Form Submitted Successfully!");
    return true;
  }



  