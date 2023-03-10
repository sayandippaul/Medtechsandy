<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Registration</title>
    <style>
        body{
        /* background-color: rgb(0, 0, 0); */
        background: url(pictures/registernew.png);
            background-repeat: no-repeat;
            /* opacity: 0.3; */
            background-size: cover;
            /* background-position: 100%; */
            
           
    }
    
    *{
        margin: 0px;
        padding: 0px;
        color: white;
        font-weight: bolder;
    }
    .header{
        
        background-color: rgba(105, 107, 231, 0.897);
        height: 50px;
        width: 100%;
        margin-top: 0px;
    }
    #navbar{
        /* border-color: 2px solid rgb(12, 12, 12); */
        float: right;
        font-size: large;
        background-color: black;
        border-radius: 12px;
        color: white;
        margin-right: 5%;
         margin-top:10px ;
         padding: 5px;
         /* border: 2px solid red; */
    }
    .mid{
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
    #fom{
        display: flex;
        flex-direction: column;
        
        margin: auto;
        margin-top: 50px;
        display: none;
        
    }
    #fom1{
        display: flex;
        flex-direction: column;
        
        margin: auto;
        margin-top: 50px;
        display: none;
        background: none;
        box-shadow: 2px 2px white;

    }
    .item{
        height:50px;
        width:60%;
        margin: auto;
        padding:6px ;
        margin-top: 10px;
        border-radius: 11px;
        color: white;
        background: none;
        box-shadow: 2px 2px white;
        /* font-size: 2s0px; */
        
    }
    ::placeholder{
        color: white;
    }
    #sub{
        margin: auto;
        margin-top: 20px;
        padding: 5px;
        color: black;
        background-color: rgb(112, 116, 182);
        width: 10%;
        height: 40px;
        border-radius: 30px;
    }
    .midtop{
            /* background-color: rgb(80, 80, 75); */
            height: 70px;
            width: 100%;
            /* margin: auto; */
            /* justify-content: center; */
            /* align-items: center; */
            /* display: grid; */
            display: flex;
            flex-direction: row;
            /* grid-template-columns: 1fr 1fr; */
            margin-left: 0%;

            /* float: right; */

        }
        .btn{
            border-radius: 12px;
            background-color:rgb(106, 79, 202);
            height: 50px;
            padding: 5px;
            margin-top: 10px;
            width: 9%;
            margin: auto;
            /* margin-right: 11%; */
            /* justify-content: center; */
            /* align-items: center; */
            opacity: 2;
            box-shadow: 5px 3px white;
            
        }
        #img{
            width: 10%;
            height: 100%;
        }

        .lds-dual-ring.hidden { 
display: none;
}
.lds-dual-ring {
  display: inline-block;
  width: 80px;
  height: 80px;
}
.lds-dual-ring:after {
  content: " ";
  display: block;
  width: 64px;
  height: 64px;
  margin: 5% auto;
  border-radius: 50%;
  border: 6px solid #fff;
  border-color: #fff transparent #fff transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}


.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: rgba(0,0,0,.8);
    z-index: 999;
    opacity: 1;
    transition: all 0.5s;
}
    </style>
</head>
<body>
    <div class="header">
    
        <img id="img" src="pictures/logonew2.png" alt="logo">
        
        
        <span id="navbar">USER</span>
    </div>

    <div class="mid">REGISTRATION</div>
    <div class="midtop">
        <button class="btn" onclick="doctor()">REGISTER AS DOCTOR</button>    
        <button class="btn" onclick="patient()">REGISTER AS PATIENT</button>    
    </div>
    <div id="loader" class="lds-dual-ring hidden overlay"></div>
    <div id="show"></div>

    
    <div id="fom1">
        <input type="text" class="item"id="name1"  placeholder="ENTER YOUR NAME HERE" name="name">
        <input type="text" class="item"id="aged" onblur="age1()" placeholder="ENTER YOUR AGE HERE" name="age">
        <input type="number" class="item"id="no1" onblur="phone1()" placeholder="ENTER YOUR PHONE NUMBER" name="phone">
        <input type="email" class="item"id="em1"  placeholder="ENTER YOUR EMAIL ID" name="email">

        <!-- <button style="width: 10%; color: blue;">send otp</button> -->
        <input type="text" class="item"id="special" placeholder="ENTER SPECIALITY" name="speciality">
        <input type="text" class="item"id="address1" placeholder="ENTER CURRENT ADDRESS" name="address">
        <input type="text" class="item"id="group1" onblur="blood1()" placeholder="ENTER YOUR BLOOD GROUP(enter in capital words)" name="blood">
        <input type="PASSWORD" class="item"id="password1" placeholder="ENTER THE PASSWORD " name="password">
        <input type="PASSWORD" class="item"id="confirm1"onblur="pass1()" placeholder="CONFIRM PASSWORD">
        <button id="sub" onclick="sop1()">Send Otp</button>
        <input type="text" style="display: none;" class="item"id="otp1" placeholder="Enter otp">


        <button id="sub" onclick="reg1()">REGISTER</button>

        <!-- <button id="sub" onclick="back()">Go Back</button> -->
    </form></div>

    
    <div id="fom">
        <input type="text" class="item"id="name2" placeholder="ENTER YOUR NAME HERE" name="name_p">
        <input type="text" class="item"id="agep" onblur="age2()" placeholder="ENTER YOUR AGE HERE" name="age_p">
        <input type="number" class="item"id="no2" onblur="phone2()" placeholder="ENTER YOUR PHONE NUMBER" name="phone_p">
        <!-- <button>send otp</button> -->
        <input type="email" class="item"id="em2"  placeholder="ENTER YOUR EMAIL ID" name="email">

        <input type="text" class="item"id="address2" placeholder="ENTER CURRENT ADDRESS" name="address_p">
        <input type="text" class="item"id="group2" onblur="blood2()"placeholder="ENTER YOUR BLOOD GROUP(enter in capital words)" name="blood_p">
        <input type="PASSWORD" class="item"id="password2" placeholder="ENTER THE PASSWORD " name="password_p">
        <input type="PASSWORD" class="item"id="confirm2" onblur="pass2()"placeholder="CONFIRM PASSWORD">
        <button id="sub" onclick="sop2()">Send Otp</button>
        <input type="text" style="display: none;" class="item"id="otp2" placeholder="Enter otp">

        <button id="sub" onclick="reg2()">Register</button>
        <!-- <button id="sub" onclick="back()">Go Back</button> -->
    </form></div>
    
    
    
    
</body>
<script>
        bloods=["A+","B+","AB+","O+","A-","B-","O-","AB-"];
        var count1=0
        var count2=0
        var catagory=""
    function doctor() {
        var a=document.getElementById("fom");
        a.style.display="none";
        var b=document.getElementById("fom1")
         b.style.display="flex";
        catagory="doctor"
    }
    function patient(){

var b=document.getElementById("fom1")
b.style.display="none";

var a=document.getElementById("fom");
a.style.display="flex";
catagory="patient"


}
function sop1(){
    // console.log("jj");
    document.getElementById("otp1").style.display="block";
    // alert("sending email");
        var em=document.getElementById("em1").value;
        // var con=document.getElementById("content").value;
        $('#loader').removeClass('hidden')


        $.ajax({
              type: "POST",
              url: "mainpage11.php",
            //   beforeSend: function() {
    // },
   
              data: {email:em},

              success: function (result, status, xhr){
        $('#loader').addClass('hidden')

                // $("#show").html(result);
                 otpt=parseInt(result);
                // alert(otpt+1);
                
            // showm();

              }
            //   complete: function(){
    // },
          });
}
var otpt;
function sop2(){
    // console.log("jj");
    document.getElementById("otp2").style.display="block";
    // document.getElementById("otp1").style.display="block";
    // alert("sending email");
        var em=document.getElementById("em2").value;
        // var con=document.getElementById("content").value;
        $('#loader').removeClass('hidden')


        $.ajax({
              type: "POST",
              url: "mainpage11.php",
            //   beforeSend: function() {
    // },
   
              data: {email:em},

              success: function (result, status, xhr){
        $('#loader').addClass('hidden')

                // $("#show").html(result);
                 otpt=parseInt(result);
                // alert(otpt+1);
                
            // showm();

              }
            //   complete: function(){
    // },
          });
}


        function  age1() {
            
            var b=document.getElementById("aged").value;
            
            if(b<0||b>150){
                alert("enter valid age");
            }
            else{
                count1++;
            }
            
        }
        function  age2() {
            
            var b=document.getElementById("agep").value;
            
            if(b<0||b>150){
                alert("enter valid age");
            }
            else{
                count2++;
            }
            
            
        }
    
    function phone1() {

        var a=document.getElementById("no1").value;
        var n=a.length;
        // alert(n)
        // alert(a[0])
        if(n!=10 || a[0]==1 || a[0]==3 || a[0]==4 || a[0]==0|| a[0]==4|| a[0]==5)
        {
            alert("enter valid number")
        }
        else{
                count1++;
            }
            
    }
    function phone2() {
        var a=document.getElementById("no2").value;
        var n=a.length;
        // alert(a[0])
        if(n!=10 || a[0]==1 || a[0]==3 || a[0]==4 || a[0]==0|| a[0]==4|| a[0]==5)
        {
            alert("enter valid number")
        }
        else{
                count2++;
            }
            
    }

    function blood1(){

var count=0;
var n=document.getElementById("group1").value;
var p=bloods.length;
for(i=0;i<p;i++){
    if(n==bloods[i]){
        count=1;
    }
}
if(count==0){
alert("enter valid group")
}
else{
                count1++;
            }
            
}
    function blood2(){

var count=0;
var n=document.getElementById("group2").value;
var p=bloods.length;
for(i=0;i<p;i++){
    if(n==bloods[i]){
        count=1;
    }
}
if(count==0){
alert("enter valid group")
}
else{
                count2++;
            }
            
}
    
   
function pass1() {
        var n1= document.getElementById("password1").value;
        var n2= document.getElementById("confirm1").value;
        if(n1!=n2){
            alert("confirm password should be same as enterred password ")
        }
        else{
                count1++;
            }
            
    }
    function pass2() {
        var n1= document.getElementById("password2").value;
        var n2= document.getElementById("confirm2").value;
        if(n1!=n2){
            alert("confirm password should be same as enterred password ")
        }
        else{
                count2++;
            }
            
    }
   var username=""
    function reg1(){
        var otpg=document.getElementById("otp1").value;
        if(otpg==otpt){
        if(count1==4){
       document.getElementById("navbar").innerHTML= document.getElementById("name1").value;
       var name1= document.getElementById("name1").value;
       var age1= document.getElementById("aged").value;
       var bgroup1= document.getElementById("group1").value;
       var address1= document.getElementById("address1").value;
       var phone1= document.getElementById("no1").value;
       var password1= document.getElementById("password1").value;
    
       alert("account created successfully")
       localStorage.setItem("username",name1 );
       localStorage.setItem("password",password1 );
       localStorage.setItem("bgroup", bgroup1);
       localStorage.setItem("catagory", catagory);
       localStorage.setItem("age", age1);
       localStorage.setItem("phone", phone1);
       localStorage.setItem("address",address1);
       adduser();
       window.location="login.html"
      
        }
        else{
            alert("enter correct details")
        }}
        else{
            alert("enter correct otp")       

        }

    }
    function reg2(){
        var otpg=document.getElementById("otp2").value;
        if(otpg==otpt){
        
        if(count2==4){ 
       document.getElementById("navbar").innerHTML= document.getElementById("name2").value;
       var name2= document.getElementById("name2").value;
       var age2= document.getElementById("agep").value;
       var bgroup2= document.getElementById("group2").value;
       var address2= document.getElementById("address2").value;
       var phone2= document.getElementById("no2").value;
       
       var password2= document.getElementById("password2").value;

       localStorage.setItem("username", name2);
       localStorage.setItem("bgroup", bgroup2);
       localStorage.setItem("age", age2);
       localStorage.setItem("phone", phone2);
       localStorage.setItem("catagory", catagory);

       localStorage.setItem("address",address2);
       localStorage.setItem("password", password2);
            adduser();
       window.location="login.php"
       alert("account created successfully")
    }
    else{
            alert("enter correct details")
        }
    }

        else{
            alert("enter correct otp")       

        }
}
// adduser();

function adduser(){
    var username = localStorage.getItem("username");
    var password = localStorage.getItem("password");
    var phone = localStorage.getItem("phone");
    // alert(
    //     phone
    // );
    
    $.ajax({
              type: "POST",
              url: "adduser.php",
            //   beforeSend: function() {
    // },
   
              data: {name:username,password:password,phone:phone},

              success: function (result, status, xhr){
        // $('#loader').addClass('hidden')

                // $("#show").html(result);
                //  otpt=parseInt(result);

                // alert(result);
                
            // showm();

              }
            //   complete: function(){
    // },
          });
}
</script>
</html>


