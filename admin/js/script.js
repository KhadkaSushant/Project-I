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
    
    var email = document.getElementById("email").value;
    if(email =="" || email == null){
        alert("email is required");
        return false;
    }

    var password = document.getElementById("password").value;
    if(password =="" || password == null){
        alert("password is required");
        return false;
    }
}


function isvalid() {
  
    var user = document.getElementById("e").value;
    var user2 = document.getElementById("e");
    var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (re.test(user)) {
        alert("done");
        return true;
    }
    else {
        user2.style.border = "red solid 3px";
        return false;
    }
}
