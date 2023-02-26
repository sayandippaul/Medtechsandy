<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
    <style>
        body {
            background-color: black;
            background: url(pictures/contact1.png);
            background-repeat: no-repeat;
            /* opacity: 0.3; */
            background-size: cover;
            
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
            position: sticky;
            top: 0px;
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
            height: 600px;
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
            border: 2px solid black;
            color: black;
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

    <div class="mid">CONTACT US </div>
    <div class="midend" id="midshow">
        <div>
            <input type="text" class="options" id="name" placeholder="Enter Your Name">
            <input type="number" class="options" id="no" onblur="phone()" placeholder="Enter Phone Number">
            <input type="email" class="options" id=""  placeholder="Enter Email Id">
            <input type="text" class="options" id="problem" placeholder="Type Concern">
            <button class="options1" onclick="app()">SEND FEEDBACK</button>
        </div>
    </div>
    <div class="box" id="show">
        FEEDBACK SUBMITTED.OUR TEAM WILL CONTACT YOU SOON. 
    </div>
    
   

</body>
<script>
     var username = localStorage.getItem("username");
    document.getElementById("navbar").innerHTML = username;
    document.getElementById("name").value = username;
    var count=0;
    var post=document.getElementById("show");
    var pre=document.getElementById("midshow");
    post.style.display="none";
  
    function phone() {
        var a=document.getElementById("no").value;
        var n=a.length;
        // alert(a[0])
        if(n!=10 || a[0]==1 || a[0]==3 || a[0]==4 || a[0]==0|| a[0]==4|| a[0]==5)
        {
            alert("enter valid number")
        }
        else{
                count++;
            }
            
    }
 
    function app() {
        
    if(count==1){
    post.style.display="block";
    pre.style.display="none";

    }
    else{
        alert("ENTER CORRECT DETAILS")
    }

}
</script>
</html>