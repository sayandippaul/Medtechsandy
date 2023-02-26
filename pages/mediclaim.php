<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDICLAIM</title>
    <style>
        body {
            background-color: black;
            z-index: -1;
            background: url(pictures/mediclaim3.png);
            background-repeat: no-repeat;
            /* opacity: 0.3; */
            background-size: 100% 100%;
            
            
            }
             ::placeholder{
                color: black;
            }
            * {
            margin: 0px;
            padding: 0px;
            opacity: 2;
            z-index: 1;
            font-weight: bolder;
            /* font-style:arial; */
                font-style: oblique;
            color: black;
        }

        .header {

            background-color: rgba(105, 107, 231, 0.897);
            height: 50px;
            width: 100%;
            margin-top: 0px;
            position: sticky;
            top: 0px;
            /* border-radius: 12px; */
            color: white;
            box-shadow: 2px 2px white;
        }

        #navbar {
            /* border-color: 2px solid rgb(12, 12, 12); */
            float: right;
            font-size: large;
            background-color:black ;
            border-radius: 12px;
            color: white
            ;
            margin-right: 5%;
            margin-top: 10px;
            padding: 5px;
            /* border: 2px solid red; */
        }

        .mid {
            height: 40px;
            width: 20%;
            border-radius: 12px;
            background-color: black;
            color: white;
            margin: auto;
            text-align: center;
            padding-top: 10px;
            margin-top: 15px;
            background-size: 30% 100%;
            background-repeat: no-repeat;
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
            color: black;
            background: none;
            border: 2px solid black;
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
            background: none;
            color: blue;
            

        }
        .options1 {
            height: 25px;
            width:50%;
            
            margin: auto;
            border-radius: 20px;
            padding: auto;
            padding-left: 1%;
            /* align-items: center;
            display: flex; */
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
            width: 70%;
            /* margin-right: 0%; */
            height: 30px;
            border-radius: 12px;
            color: black;
        }
        #text{
            color: black;
        }
        #img{
            width: 10%;
            height: 100%;
        }
    </style>
</head>

<body>
    <!-- <img src="pictures/mediclaim.png" alt=""> -->
    <div class="header">

        <img id="img" src="pictures/logonew2.png" alt="logo">
        

        <span id="navbar">sayandip</span>
    </div>

    <div class="mid">MEDICLAIM </div>
    <div class="midmid">
        <div class="box">POLICY:20% off
            <br> Get Rs 5 Lac Health Cover @this offer. Maximum 4 members Can Be Benifitted
        </div>
        <div class="box">POLICY:50% off
            <br> Get Rs 4 Lac Health Cover @this offer. Maximum 3 members Can Be Benifitted
        </div>
        <div class="box">POLICY:90% off
            <br> Get Rs 1 Lac Health Cover @this offer. Maximum 1 members Can Be Benifitted
        </div>

    </div>
    <div class="midend">
        <div>
            <input type="text" class="options" id="name" placeholder="Enter Card Holder Name">
            <input type="number" class="options" id="card" onblur="card()" placeholder="Enter Card Number(Put Demo:12345)">
            <input type="password" class="options" id="password" onblur="pass()" placeholder="Enter Password">
            <div class="firstoption"> <span id="text">Select Mediclaim Policy</span></label>
                <select name="area" id="option" >
                    <option class="option" value="m1">20% off(5 times available)</option>
                    <option class="option" value="m2">50% off(1 time available)</option>
                    <option class="option" value="m3" >90% off(2 times available)</option>
                </select><br>
            </div>
            <input type="number" class="options" id="bill" placeholder="Enter Total Bill Amount">
            <button class="options1" onclick="app()">APPLY NOW</button>
        </div>
    </div>
    <div class="box" id="show">

    </div>
   

</body>
<script>
    var offer=""
     var username = localStorage.getItem("username");
    document.getElementById("navbar").innerHTML = username;
    document.getElementById("name").value = username;
    var show=document.getElementById("show");
    show.style.display="none";
    var count=0;
   function card() {
       var card=document.getElementById("card").value;
       if(card!=12345){
           alert("Put This Demo Number");
       }
       else{
           count++;
       }

   }
   function pass() {
        var bloodpassword = document.getElementById("password").value;
        if (password != bloodpassword) {
            alert("ENTER CORRECT PASSWORD ")
        }
        else {
            count++;
        }

    }
    var password = localStorage.getItem("password");
    
    function app() {
        var name=document.getElementById("name").value;
    var number=document.getElementById("card").value;
    var bill=document.getElementById("bill").value;
   
        
    if(count==2){

        localStorage.setItem("mediname",name );
       localStorage.setItem("medicardnumber",number );
       localStorage.setItem("medibill",bill );

   var a= document.getElementById("option").value;
   var n=document.getElementById("bill").value
    show.style.display="";
//    alert(m);
   
     if(a=="m1"){
     var p=n-(n/5);
     document.getElementById("show").innerHTML="your payable amount is:"+p;
      offer="20% off(4 times available)"
     
 }
 
   else if(a=="m2"){
       var p=n-(n/2);
       document.getElementById("show").innerHTML="your payable amount is:"+p;
      offer="50% off(no longer available)"

    }
   else if(a=="m3"){
        var p=n-(9*n/10);
        document.getElementById("show").innerHTML="your payable amount is:"+p;
      offer="90% off(1 time available)"

    }}
    else{
        alert("ENTER CORRECT DETAILS")
    }
    localStorage.setItem("medioffer",offer );



}
</script>
</html>