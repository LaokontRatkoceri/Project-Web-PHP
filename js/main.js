
function signupValidation(){
    var username=document.querySelector("#un");
    var password=document.querySelector("#pass");
    var confirmPass=document.querySelector("#confirm-pass");
    var email=document.querySelector("#email");
    if(username.value.length<5||password.value.length<5||confirmPass.value.length<5||email.value.length<5)
    {
        var x=document.getElementById("msg");
        x.innerHTML="Please fill your data";
        x.className="show";
        setTimeout(function(){x.className = x.className.replace("show", "")},3000);
    }else
    {
       if(password.value!=confirmPass.value)
       {
        var x=document.getElementById("msg");
        x.innerHTML="Password does not match";
        x.className="show";
        setTimeout(function(){x.className = x.className.replace("show", "")},3000);
       }else
       {
        var x=document.getElementById("msg");
      
        x.innerHTML="You are registered successfully";
        x.className="show";
        setTimeout(function(){x.className = x.className.replace("show", "")},3000);
       }

    }

   
}

function fFunction(){
    var x=document.getElementById("fp");
    x.className="show";
    setTimeout(function(){x.className=x.className.replace("show","")},3000);
  }



function loginValidation(){
    var user="admin";
    var pass="admin";
    var username=document.querySelector("#un");
    var password=document.querySelector("#pass");
    if(username.value.length<5||password.value.length<5)
    {
     var x=document.getElementById("msg");
        x.innerHTML="Please fill your data";
        x.className="show";
        setTimeout(function(){x.className = x.className.replace("show", "")},3000);


    }
    else
    {
        if(username.value=="admin"&&password.value=="admin")
        {
            var x=document.getElementById("msg");

        x.innerHTML="You are logged in";
        x.className="show";
        
        setTimeout(function(){x.className = x.className.replace("show", "")},3000);
        }
        else
        {
            var x=document.getElementById("msg");

        x.innerHTML="This user does not exist";
        x.className="show";
        
        setTimeout(function(){x.className = x.className.replace("show", "")},3000);   
        }
    }

}