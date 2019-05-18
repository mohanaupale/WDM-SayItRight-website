function sub_validate(email) {
  var check=regex_email(email);
  if (check==true){
    alert("You have successfully subscribed!");
  }

}

function regex_email(email){
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(email.value.match(mailformat))
  {
    return true;
  }
  else
  {
    alert("You have entered an invalid email address!");
    return false;
  }
}

function login_val(user){
  var check=regex_email(user);
  if (check==true){
    alert("You have successfully logged in.");
  }
}

function contact_val(f_name,l_name,phone){
  var fname_check=regex_name(f_name);
  if (fname_check==true){
    var lname_check=regex_name(l_name);
    if (lname_check==true){
      var phone_check=regex_phone(phone);
      if (phone_check==true){
        alert("mail sent Successfully.")
      }
    }
  }
  }


function regex_name(name){
  nameformat=/^[a-zA-z]{2,16}/;
  if(name.value.match(nameformat))
  {
    return true;
  }
  else
  {
    alert("You have entered an invalid name!");
    return false;
  }
}


function regex_phone(phone){
  phoneformat=/[0-9]{10}/;
  if (phone.value.match(phoneformat)){
    return true
  }
  else{
    alert("You have entered an invalid contact number!");
  }
}



function signup_I(fname,lname,work,school,email){
  var check_fname=regex_name(fname);
  var check_lname=regex_name(lname);
  var check_work=regex_name(work);
  var check_school=regex_name(school);
  var check_email =regex_email(email);

  // var check_lname=regex_name(lname);
  // var check_work=regex_name(work);
  // var check_school=regex_name(school);
  // var check_email=regex_email(email);
  //
}
function sign_up_B(lname,email){
  var check_lname=regex_name(lname);
  var check_email =regex_email(email);

  // var check_lname=regex_name(lname);
  // var check_work=regex_name(work);
  // var check_school=regex_name(school);
  // var check_email=regex_email(email);
  //
}

function Sign_up_E(fname,lname,email){
  var check_fname=regex_name(fname);
  var check_lname=regex_name(lname);
  var check_email =regex_email(email);
}


function Quantity(){
  alert(document.getElementsByName("img").style.display = "block")
}


function sign_up_Event(date){
  var d=Date();
  alert(d);
}
