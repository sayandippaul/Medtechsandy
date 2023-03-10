<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PATIENT DETAILS</title>
    <style>
        body {
            background-color: black;
            background: url(pictures/patient-admit1.png);
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
            box-shadow: 2px 2px blue;




        }
        .box1 {
            /* position: absolute; */
            float: right;
            height: 250px;
            width: 30%;
            /* background-color: rgb(2, 1, 31); */
            border: 2px solid black;
            margin: 30px;
            border-radius: 10px;
            margin-right: 35%;
            text-align: center;
            align-items: center;
            font-size: medium;
            color: black;
            /* font-size: ; */
            font-weight: bolder;
            box-shadow: 2px 2px blue;



        }


        .midend {
            display: flex;
            width: 100%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .options {
            height: 30px;
            width: 100%;
            margin: auto;
            margin: 10px;
            border-radius: 12px;
            padding: auto;
            padding-left: 1%;

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
            background-color: burlywood;


        }


        .firstoption {
            margin-left: 3%;
        }

        #option {
            width: 100%;
            /* margin-right: 0%; */
            height: 30px;
            border-radius: 12px;
            color: black;
        }
        #text{
            color: black;
        }.show{
            color: black;
            height: 40px;
            border-radius: 20px;
            margin: auto;
            margin-top: 10px;
            width: 80%;
            background-color: rgb(140, 146, 240);
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
        

        <span id="navbar">USER</span>
    </div>

    <div class="mid">PATIENT DETAILS </div>
    <div class="midmid">
        <div class="box">
            GET THE DETAILS OF PATIENT AND AMOUNT OF BILL.
            <BR>GET THE ROOM NUMBER AND OTHER DETAILS.
        </div>
        
    </div>
    <div class="midend">
        <div>
            <input type="text" class="options" id="option" placeholder="Enter Patient Name">
            <input type="number" class="options" id="card"onblur="card()" placeholder="Enter Patient Id(PUT DEMO:12345)">
            <input type="text" class="options"onblur="pass()" id="password" placeholder="Enter Password">
            <button class="options1" onclick="app()">APPLY NOW</button>
        </div>
    </div>
    <div class="box1" id="box1" >
        <div class="show" id="show1"></div>
        <div class="show" id="show2"></div>
        <div class="show" id="show3"></div>
        <div class="show" id="show4"></div>
    </div>
   

</body>
<script>
    var count=0;
    var password = localStorage.getItem("password");
    var username = localStorage.getItem("username");
    document.getElementById("navbar").innerHTML = username;
    var show=document.getElementById("box1");
    show.style.visibility="hidden"
    
    function pass() {
        var bloodpassword= document.getElementById("password").value;
        if(password!=bloodpassword){
            alert("ENTER CORRECT PASSWORD ")
        }
        else{
                count++;
            }
            
    }
    function card() {
       var card=document.getElementById("card").value;
       if(card!=12345){
           alert("Put This Demo Number");
       }
       else{
           count++;
       }

   }
  
    function app() {
        
    if(count==2){
   var a= document.getElementById("option").value;
   var n=document.getElementById("card").value
   show.style.visibility="visible"

//    alert(m);
   
     document.getElementById("show1").innerHTML="PATIENT NAME:  "+a;
     document.getElementById("show2").innerHTML="PATIENT ID:  "+n;
     document.getElementById("show3").innerHTML="ROOM NUMBER:  "+"231A";
     document.getElementById("show4").innerHTML="PATIENT BILL:  "+"21235.00";
    }
    else{
        alert("Enter Correct Details")
    }
}
</script>
</html>