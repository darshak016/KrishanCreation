function email_validation() {

    var email = document.getElementById('email').value

    reg_email = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

    if (!email.match(reg_email)) {
        document.getElementById('email_error').innerHTML = "enter valid email";
    }
    else {
        document.getElementById('email_error').innerHTML = "";
    }

}

function mobile_validation() {
    var mobile = document.getElementById('phone_number').value;
    reg_mobile = "^[69][0-9]{8}";

    if (!mobile.match(reg_mobile)) {
        document.getElementById('mobile_error').innerHTML = "Mobile Number is Invalid";
    }
    else {
        document.getElementById('mobile_error').innerHTML = "";
    }
}

function password1_validation() {
    var password1 = document.getElementById('password1').value;

    if(password1.length < 8){
        document.getElementById('password1_error').innerHTML = "Password must contain more then 8 character";
    }
    else{
        document.getElementById('password1_error').innerHTML = "";
    }

}
function password2_validation(){
    var password1 = document.getElementById('password1').value;
    var password2 = document.getElementById('password2').value;

    if(password1 !== password2){
        document.getElementById('password2_error').innerHTML = "Password Doesn't match";
    }
    else{
        document.getElementById('password2_error').innerHTML = "";
    }
}
