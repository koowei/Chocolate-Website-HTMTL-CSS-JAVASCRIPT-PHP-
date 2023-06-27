function validate(){
    var fn = document.getElementById("firstName");
    var ln = document.getElementById("lastName");
    var pn = document.getElementById("phoneNum");
    var email = document.getElementById("Email");
    var pass = document.getElementById("Password");
    var conf = document.getElementById("Con-Pass");
    var cbox = document.getElementById("terms");
    var emailValidRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(!(/^[a-zA-Z ]+$/.test(fn.value)))
{
    alert("false");
    document.getElementById('fn-input').getElementsByClassName('error-message')[0].innerHTML = "Only allow alphabet and spaces";
    return false;
}
else if (!(/^[a-zA-Z ]+$/.test(ln.value)))
{
    alert("false");
    document.getElementById('ln-input').getElementsByClassName('error-message')[0].innerHTML = "Only allow alphabet and spaces";
    return false;
}
else if (!(/^[0-9]+$/.test(pn.value)))
{
    
    document.getElementById('ph-input').getElementsByClassName('error-message')[0].innerHTML = "Only allow Number";
    return false;
}
else if (!(email.value.match(emailValidRegex)))
{
    document.getElementById('email-input').getElementsByClassName('error-message')[0].innerHTML = "Invalid Email Format";
    return false;
}
else if (!(pass.value === conf.value))
{
    document.getElementById('Conf-Password-input').getElementsByClassName('error-message')[0].innerHTML = "Passwords not match";
    return false;
}
else if(cbox.checked == false)
{
    alert("false");
    return false;
}
else{
    return true;
}
}