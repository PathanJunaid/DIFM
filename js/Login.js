function signuphover() {
    let id = document.querySelector('#hideover-lay').id = "showover-lay";
    console.log("Done")
    document.body.style.overflow = "hidden"
    document.getElementById('Child').style.overflow = "auto"
}
function signupclose() {
    let id = document.querySelector('#showover-lay').id = "hideover-lay";
    console.log("Done")
    document.body.style.overflow = "scroll"
}
function Login_Page_onclick(event) {
    event.cancelBubble = true; if (event.stopPropagation) event.stopPropagation();
}
function lawyersignup() {
    document.querySelector('#hiddenl').id = "showl";
    document.querySelector('#showu').id = "hiddenu";
    document.querySelector('#colorwl').id = "colorbl";
    document.querySelector('#colorbu').id = "colorwu";
}
function usersignup() {
    document.querySelector('#hiddenu').id = "showu";
    document.querySelector('#showl').id = "hiddenl";
    document.querySelector('#colorwu').id = "colorbu";
    document.querySelector('#colorbl').id = "colorwl";

    console.log("Done")
}
var User_Data = 0;
// User Form Valiation 

function validate_User_Name(value) {
    var regex = /^[a-zA-Z ]{3,30}$/;
    var User_Name = document.querySelector('#User_Name');
    var val = regex.test(User_Name.value);
    var div = document.querySelector('.invalid_User_Name')
    if (User_Name.value != "") {
        if (!val) {
            div.innerHTML = "Invalid Name";
        }
        else {
            div.innerHTML = "";
            User_Data++;
        }

    }
    else {
        div.innerHTML = "";
    }
}
function validate_User_Email(value) {
    var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var User_Email = document.querySelector('#User_Email');
    var val = regex.test(User_Email.value);
    var div = document.querySelector('.invalid_User_Email')
    if (User_Email.value != "") {
        if (!val) {
            div.innerHTML = "Invalid Email";
        }
        else {
            div.innerHTML = "";
            User_Data++;
        }
    }
    else {
        div.innerHTML = "";
    }
}
function validate_User_Number(value) {
    var regex = /[0-9]{10}$/;
    var User_Number = document.querySelector('#User_Number');
    var val = regex.test(User_Number.value);
    var div = document.querySelector('.invalid_User_Number')
    if (User_Number.value != "") {
        if (!val) {
            div.innerHTML = "Invalid Number";
        }
        else {
            div.innerHTML = "";
            User_Data++
        }

    }
    else {
        div.innerHTML = "";
    }
}
function validate_User_State(value) {
    var regex = /^[a-zA-Z ]{3,25}$/;
    var User_Number = document.querySelector('#User_State');
    var val = regex.test(User_Number.value);
    var div = document.querySelector('.invalid_User_State')
    if (User_Number.value != "") {
        if (!val) {
            div.innerHTML = "Invalid State";
        }
        else {
            div.innerHTML = "";
            User_Data++
        }

    }
    else {
        div.innerHTML = "";
    }
}
function validate_User_Password(value) {
    var regex = /^[a-zA-Z0-9!@#$%^&*]{6,20}$/;
    var User_Number = document.querySelector('#User_Password');
    var val = regex.test(User_Number.value);
    var div = document.querySelector('.invalid_User_Password')
    if (User_Number.value != "") {
        if (!val) {
            div.innerHTML = "Password Must be of Least 7 digits";
        }
        else {
            div.innerHTML = "";
            User_Data++;
        }

    }
    else {
        div.innerHTML = "";
    }
}
function Confirm_User_Password(val) {
    var User_Password = document.querySelector('#User_Password').value;
    var User_CPassword = document.querySelector('#User_CPassword').value;
    var div = document.querySelector('.invalid_User_CPassword');
    console.log(User_CPassword + " " + User_Password)
    if (User_Password != User_CPassword) {
        div.innerHTML = "Enter Same password";

    }
    else {
        div.innerHTML = "";
        User_Data++
    }
}
// User Form Validation End
var Laywer_Data = 0;
// Lawyers Form Validation
function validate_Lawyer_Name(value) {
    var regex = /^[a-zA-Z ]{3,30}$/;
    var User_Name = document.querySelector('#Lawyer_Name');
    var val = regex.test(User_Name.value);
    var div = document.querySelector('.invalid_Lawyer_Name')
    if (User_Name.value != "") {
        if (!val) {
            div.innerHTML = "Invalid Name";
        }
        else {
            div.innerHTML = "";
            Laywer_Data++
        }
    }
    else {
        div.innerHTML = "";
    }
}
function validate_Lawyer_Email(value) {
    var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var User_Email = document.querySelector('#Lawyer_Email');
    var val = regex.test(User_Email.value);
    var div = document.querySelector('.invalid_Lawyer_Email')
    if (User_Email.value != "") {
        if (!val) {
            div.innerHTML = "Invalid Email";
        }
        else {
            div.innerHTML = "";
            Laywer_Data++
        }

    }
    else {
        div.innerHTML = "";
    }
}
function validate_Lawyer_Number(value) {
    var regex = /[0-9]{10}$/;
    var User_Number = document.querySelector('#Lawyer_Number');
    var val = regex.test(User_Number.value);
    var div = document.querySelector('.invalid_Lawyer_Number')
    if (User_Number.value != "") {
        if (!val) {
            div.innerHTML = "Invalid Number";
        }
        else {
            Laywer_Data++
            div.innerHTML = "";
        }
    }
    else {
        div.innerHTML = "";
    }
}
function validate_Lawyer_Exper(value) {
    var regex = /^\S[0-9]{0,1}$/;
    var User_Number = document.querySelector('#Lawyer_Exper');
    var val = regex.test(User_Number.value);
    var div = document.querySelector('.invalid_Lawyer_Exper')
    if (User_Number.value != "") {
        console.log(User_Number.value)
        if (!val) {
            div.innerHTML = "Invalid Experience";
        }
        else {
            div.innerHTML = "";
            Laywer_Data++
        }

    }
    else {
        div.innerHTML = "";
    }

}
function validate_Lawyer_Password(value) {
    var regex = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    var User_Number = document.querySelector('#Lawyer_Password');
    var val = regex.test(User_Number.value);
    var div = document.querySelector('.invalid_Lawyer_Password')
    if (User_Number.value != "") {

        if (User_Name.value != "") {
            if (!val) {
                div.innerHTML = "Password Must be of Least 10 digits";
            }
            else {
                div.innerHTML = "";
                Laywer_Data++
            }
        }
    }
}
function Confirm_Lawyer_Password(val) {
    var User_Password = document.querySelector('#Lawyer_Password').value;
    var User_CPassword = document.querySelector('#Lawyer_CPassword').value;
    var div = document.querySelector('.invalid_Lawyer_CPassword');
    console.log(User_CPassword + " " + User_Password)
    if (User_Password != User_CPassword) {
        div.innerHTML = "Enter Same password";
    }
    else {
        div.innerHTML = "";
        Laywer_Data++
    }
}

// Laywer Form End 

// Submit Button 
function Alert_Msg_User() {
    var User_Name = document.querySelector('#User_Name').value;
    console.log(User_Name)

    if (User_Name != "") {
        if (User_Data == 6) {
            alert(User_Name + "\nThank You for Your Registration")
        }
    }

}
function Alert_Msg_Lawyer() {
    var Lawyer_Name = document.querySelector('#Lawyer_Name').value;
    console.log(Lawyer_Name)
    if (Lawyer_Name != "") {
        if (Laywer_Data >= 6) {
            alert(Lawyer_Name + "\nThank You for Your Registration")
        }
    }
}