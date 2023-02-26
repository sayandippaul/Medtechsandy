<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>LOGIN</title>
    <style>
        body {
            background-color: black;
            background-color: black;
            background: url(pictures/loginnew.png);
            background-repeat: no-repeat;
            /* opacity: 0.3; */
            background-size: 100% 100%;
           
        }

        * {
            margin: 0px;
            padding: 0px;
            color: rgb(0, 0, 0);
        }

        .header {

            background-color: rgba(105, 107, 231, 0.897);
            height: 50px;
            width: 100%;
            margin-top: 0px;
        }

        #navbar {
            /* border-color: 2px solid rgb(12, 12, 12); */
            float: right;
            font-size: large;
            background-color: black;
            border-radius: 12px;
            color: white;
            margin-right: 5%;
            margin-top: 10px;
            padding: 5px;
            /* border: 2px solid red; */
        }

        .mid {
            height: 40px;
            width: 20%;
            border-radius: 12px;
            background-color: whitesmoke;
            color: black;
            margin: auto;
            text-align: center;
            padding-top: 10px;
            margin-top: 15px;
            box-shadow: 2px 2px blue;
        }

        .midmid {
            color: white;
        }

        .box {
            /* position: absolute; */
            float: right;
            height: 50px;
            width: 80%;
            background-color: rgb(2, 1, 31);
            margin: 30px;
            border-radius: 10px;
            margin-right: 10%;
            text-align: center;
            align-items: center;
            font-size: medium;
            color: white;



        }

        .midend {
            display: flex;
            width: 100%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 10%;
            height: 500px;
        }

        .options {
            height: 30px;
            width: 100%;
            margin: auto;
            margin: 10px;
            border-radius: 12px;
            padding: auto;
            padding-left: 1%;
            background: none;
            color:white;
            font-weight: bolder;

        }
        ::placeholder{
            color: white;
        }
        .options1 {
            height: 25px;
            width:50%;
            
            margin: auto;
            border-radius: 20px;
            padding: auto;
            padding-left: 1%;
            /* align-items: center;display: flex; */
            display: grid;
            color: black;
            text-align: center;
            margin-top: 10px;
            justify-content: center;
            background-color: rgb(158, 135, 222);


        }


        .firstoption {
            margin-left: 3%;
        }

        #option {
            width: 70%;
            /* margin-right: 0%; */
            height: 30px;
            border-radius: 12px;
            color: black;
        }
        #text{
            color: white;
        }
        #img{
            width: 10%;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="header">

        <img id="img" src="pictures/logonew2.png" alt="logo">
        

        <span id="navbar">sayandip</span>
    </div>

    <div class="mid">LOGIN </div>
    <div class="midend">
        <div>
            <input type="text" class="options" id="loginshowname" placeholder="Enter User Name">
            <input type="password" class="options" id="pass" placeholder="Enter Password">
            <div class="firstoption" > <span id="text">Select Catagory</span></label>
                <select name="area" onblur="cata()" id="option" >
                    <option class="option" value="m1">LOGIN AS DOCTOR</option>
                    <option class="option" value="m2">LOGIN AS PATIENT</option>
                </select><br>
            </div>
            <!-- <input type="text" class="options"  id="phone" name="phone" value="" maxlength="10" placeholder="Enter valid mobile number" required=""> -->

            <!-- <button type="submit" name="sendopt" onclick="otpsend()" class="options1">Send OTP</button> -->
            <button class="options1" onclick="app()">LOGIN</button>

        </div>
    </div>
    

</body>
<script>
   var username= localStorage.getItem("username");
//    var usernamep= localStorage.getItem("username2");
    // var scatagory=document.getElementById("option").value
    // document.getElementById("phone").value=phone;

   var password= localStorage.getItem("password");
   var scatagory="doctor"
   //   var a=""
   //    alert(password)
   {
    var catagory= localStorage.getItem("catagory");
    // var phone= localStorage.getItem("phone");

if(catagory=="doctor"){

    document.getElementById("loginshowname").value=username;
    document.getElementById("navbar").innerHTML=username;
    // document.getElementById("phone").value=phone;

}
else{
    document.getElementById("loginshowname").value=username;
    document.getElementById("navbar").innerHTML=username;
    // document.getElementById("phone").value=phone;


}
}

function app() {
    // alert(scatagory)
    // alert(catagory)
    // alert(a)
    // alert(username)
    if(scatagory==localStorage.getItem("catagory")){
        
    

    var loginpassword=document.getElementById("pass").value;
    var namee=document.getElementById("loginshowname").value;

    
    // alert(loginpassword)
    // var phone= document.getElementById("phone").value;
    // alert(namee+loginpassword);
    $.ajax({
              type: "POST",
              url: "otpsend.php",
            //   beforeSend: function() {
    // },
   
              data: {name:namee,password:loginpassword},

              success: function (result, status, xhr){
                // alert(result);
                if(result==1){
                    localStorage.setItem("username", namee);
                    localStorage.setItem("password", loginpassword);
        window.location="/medtech/index.php"

                }
                else{
                    alert("wrong user credentials");
                }
              }
          });
    // if(loginpassword!=password){
    //     alert("enter correct password")
    // }
    // else{
        

    //     // window.location="/SIOPP/index.php"
    // }
}
else{
    alert("enter correct catagory")
}   
}
function cata() {
    var a= document.getElementById("option").value;
    if(a=="m2"){
        scatagory="patient"
    }
    else{
        scatagory="doctor"

    }
    
}
function otpsend(){
       

}

</script>
</html>
