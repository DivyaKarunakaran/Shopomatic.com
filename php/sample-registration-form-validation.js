    function formValidation()  
    {  
    var uid = document.registration.user;  
    var passid = document.registration.password;  
    var uemail = document.registration.email;  
    var umsex = document.registration.msex;  
    var ufsex = document.registration.fsex;
     if(user_validation(uid,5,12))  
    {  
    if(password_validation(passid,8,12))  
    {  
    if(ValidateEmail(uemail))  
    {  
    if(validsex(umsex,ufsex))  
    {  
    }  
    }   
    }  
    }   
    return false;  
    }
        function user_validation(uid,mx,my)  
    {  
    var uid_len = uid.value.length;  
    if (uid_len == 0 || uid_len >= my || uid_len < mx)  
    {  
    alert("User Id should not be empty. Please enter alphabets,numbers or symbols length be between "+mx+" to "+my);  
    uid.focus();  
    return false;  
    }  
    return true;  
    }  
        function password_validation(passid,mx,my)  
    {  
    var passid_len = passid.value.length;  
    if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
    {  
    alert("Password should not be empty .Please enter alphabets,numbers or symbols length be between  "+mx+" to "+my);  
    passid.focus();  
    return false;  
    }  
    return true;  
    }  
        
        function ValidateEmail(uemail)  
    {  
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    if(uemail.value.match(mailformat))  
    {  
    return true;  
    }  
    else  
    {  
    alert("Enter a valid email address!");  
    uemail.focus();  
    return false;  
    }  
    }
    function validsex(umsex, ufsex) {
        x = 0;

        if (umsex.checked) {
            x++;
        } if (ufsex.checked) {
            x++;
        }
        if (x == 0) {
            alert('Select Male/Female');
            umsex.focus();
            return false;
        }
        else {
            alert('Form Successfully Submitted');
            window.location.reload()
            return true;
        }
    }