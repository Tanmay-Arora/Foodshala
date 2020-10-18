function validate_registration(){
    var verify =
    var name = document.forms["cust_signup"]["name"].value;
    var mail = document.forms["cust_signup"]["mail"].value;
    var phone = document.forms["cust_signup"]["phone"].value;
    var password = document.forms["cust_signup"]["password"].value;
    var passAgain = document.forms["cust_signup"]["passAgain"].value;

    if(name == "" || name == " "){
        alert("Name Required");
        
    }

    if(mail == ""){
        alert("Mail Address Required");
    }
    else{
        ValidateEmail(mail);
    }

    if(name == "" || name == " "){
        alert("Name Required");
        
    }

    if(name == "" || name == " "){
        alert("Name Required");
        
    }
    if(name == "" || name == " "){
        alert("Name Required");
        
    }

}

function ValidateEmail(mail) 
{
 if (/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g.test(mail))
  {
    return (true);
  }
    alert("You have entered an invalid email address!")
    return (false);
}