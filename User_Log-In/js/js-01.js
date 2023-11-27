   $(document).ready(function () {
        $("#unm").blur(function () {
            var username = $(this).val();
            regex = /^[A-Z,a-z,_,0-9]+$/;
            char = /^[A-Z,a-z]+$/;
    
            $.ajax({
                url: document.location.origin+"/refer_prog/User_Log-In/function/_availability.php",
                method: "POST",
                data: { unm : username },
                success: function (data) {
                    if (data != "0" || $("unm").val() == "") {
                        not_available();
                        span_unm.style.display = "none";
                    }
                    else if (!username.match(regex)) {
                        span_unm.innerHTML ="Only allowed [A-Z,a-z,_,0-9] , no space allowed";
                        span_unm.style.display = "block";

                        not_available();
                    } 
                    else if (!username[0].match(char) || !username[1].match(char) || !username[2].match(char)) {
                        span_unm.innerHTML = "First 3 letters must be [A-Z or a-z]";
                        span_unm.style.display = "block";

                        not_available();
                    } 
                    else if (username.length > 20) {
                        span_unm.innerHTML = "Username must be between 20 characters";
                        span_unm.style.display = "block";

                        not_available();

                    } 
                    else if (username.length <= 6) {
                        span_unm.innerHTML = "Username is too short )";
                        span_unm.style.display = "block";
                        
                        not_available();
                    } 
                    else {
                        span_unm.style.display = "none";

                        available();
                    }
                }  
            });
    
        });
    
    });
    
    function not_available() {
        $("#chk_unm").html("NOT-AVAILABLE");
        $("#chk_unm").css("color", "red");
        $("#chk_unm").css("display", "block");
    
        btn_signin_off();
    
    }
    
    function available() {
        $("#chk_unm").html("AVAILABLE");
        $("#chk_unm").css("color", "blue");
        $("#chk_unm").css("display", "block");
    
            btn_signin_on();
    }
    
    function btn_signin_off() {    
        $("#sign-in").attr("disabled", true);
        $("#sign-in").css("background-color", "#696969");
    }

    function btn_signin_on() {
        if(($("#chk_unm").html() == "AVAILABLE") && ($(span_email).css("display") == "none") && ($(span_mono).css("display") == "none") && ($(span_pass).css("display") == "none")) {
            $("#sign-in").attr("disabled" , false);
            $("#sign-in").css("background-color" , "#1873e8");
        }    
    }

    
function check() {

    // for checking all fields
    allFields = document.getElementsByTagName('input');
    
    for(var i=0 ; i<6 ; i++) {
        
            if(allFields[i].value == "") {
               
                alert("ERROR CODE:400 - All fields are required");
                return false;
                
             }
      
    }
    document.title = "PLEASE STAND BY";

    return true;
}
	
    
//email field validation
$(document).ready(function (){
    $("#email").blur(function (){
        email = document.getElementById("email");
        span_email = document.getElementById("span_email");

        var regex = /[.]/; 
     
        if( (email.value.match(" ")) || (email.value == "") || (!email.value.match('@')) || (!(regex.test(email.value))) ) 
        {
            email.style.border = "3px solid red";
         
            if(span_email.style.display != "block")
            {
                span_email.style.display="block";
            }
         
            btn_signin_off();
        }
        else 
        {
            email.style.border = "1px solid #1873e8";

            span_email.style.display="none";
                btn_signin_on()  
        }
    });
});	
    
//mobile number 
 function only_num_mono(box) {
    span_mono = document.getElementById("span_mono");
    var regex = /^[0-9]+$/;

    
    if (!(box.value.match(regex))) {
        if(span_mono.style.display != "block"){
            span_mono.innerHTML="Only number allowed";
            span_mono.style.display="block";
            box.style.border="3px solid red";
        }
    }
    else{
        span_mono.style.display = "none";
        box.style.border="1px solid #1873e8";
    }
    
 }

$(document).ready(function (){
    $("#mono").blur(function (){
        mono = document.getElementById("mono");
    
        if(mono.value.length  != 10 )  {
		    mono.style.border="3px solid red"
            span_mono.innerHTML="NUMBER IS INCORRECT";
            span_mono.style.display="block";
            btn_signin_off();
        }
        else{
            mono.style.border="1px solid #1873e8"
            span_mono.style.display="none";

                btn_signin_on()  
	    }
    });
});
	

//checking the password fields
function pass_check() {

    span = document.getElementById("span_pass");
    pass = document.getElementById("pass").value;
    con_pass = document.getElementById("con_pass").value;
    

    console.log(con_pass);
    if((pass != con_pass) || (pass == "")) {
        span.style.display="block";
        btn_signin_off();
    }
    else{
        span.style.display="none";
        btn_signin_on();

    }
}

function show1(){
    var pass_box = document.getElementById("pass");
    // console.log(pass_box);

    if(pass_box.type=="password"){	
        // console.log("123");
        pass_box.type="text";
    }
    else{
        // console.log(pass_box);
        pass_box.type="password";
    }
}

function show2(){
    var pass_box = document.getElementById("con_pass");
    // console.log(pass_box);

    if(pass_box.type=="password"){	
        // console.log("123");
        pass_box.type="text";
    }
    else{
        // console.log(pass_box);
        pass_box.type="password";
    }
}

 $(document).ready(function () {
        $("#p_ref_cd").blur(function () {
            var p_ref_cd = $(this).val();
			var chk_prc = document.getElementById('chk_prc');
			var span_prc = document.getElementById('span_prc');
            
    
            $.ajax({
                                    // change this URL when using global site
                url: document.location.origin+"/darshit/refer_prog/User_Log-In/function/_prc_validity.php",
                method:"POST",
                data: { prc : p_ref_cd},
                success: function (row) {
                  
					if (p_ref_cd == "") {
                        chk_prc.style.display = "none";
                    } 
					else if(row != 0 ) {
						chk_prc.innerHTML = "VALID"; 
						chk_prc.style.color = "blue";
						chk_prc.style.display= "block";
                    }
                    else {
						chk_prc.innerHTML="INVALID";
						chk_prc.style.color = "RED";
                        chk_prc.style.display = "block";
                    }
                }  
            });
    
        });
    
    });