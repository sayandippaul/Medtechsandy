<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD </title>
    <style>
        body{
            background-color: black;
            background-image: url(pictures/blood3.png);
            background-repeat: no-repeat;
            background-size: cover;
           
        }
        *{
            margin: 0px;
            padding: 0px;
            color: white;
        }
        .header{
            
            background-color: rgb(255, 0, 21);
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
             border: 2px solid red;
        }
        .midtop{
            /* background-color: rgb(80, 80, 75); */
            height: 70px;
            width: 100%;
            /* margin: auto; */
            /* justify-content: center; */
            /* align-items: center; */
            display: flex;
            flex-direction: row;
            float: right;

        }
        .btn{
            border-radius: 12px;
            background-color:red;
            height: 50px;
            padding: 5px;
            margin-top: 10px;
            width: 9%;
            margin: auto;
            margin-right: 11%;
            /* justify-content: center; */
            /* align-items: center; */
            opacity: 2;
        
            
        }
        .left{
            position: absolute;
        }
table,td,th{border: 2px solid white;
    height: 50px;
    

}
.midmid{
    color: white;
}
.box{
    /* position: absolute; */
    float: right;
    height: 100px;
    width: 60%;
    /* background-color: rgb(2, 1, 31); */
    box-shadow: 2px 2px white;
    border: 2px solid red;
    margin: 30px;
    border-radius: 10px;
    margin-right: 10%;
    text-align: center;
    align-items: center;
    font-size: large

}
.icons{
  width: 10%;
  color: black;  
}
#table1{
    margin-top: 80px;
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
    <div class="left"><table id="table1">
        <tr>
            <th>Blood Type</th>
            <th>Donor</th>
            <th>Reciever</th>
        </tr>
        <tr>
            <td>A+</td>
            <td>A+,AB+</td>
            <td>A+,A-,O+,O-</td>
        </tr>
        <tr>
            <td>O+</td>
            <td>O+,A+,B+,AB+</td>
            <td>O+,O-</td>
        </tr>
        <tr>
            <td>B+</td>
            <td>B+,AB+</td>
            <td>B+,B-,O+,O-</td>
        </tr>
        <tr>
            <td>AB+</td>
            <td>AB+</td>
            <td>EVERYONE</td>
        </tr>
        <tr>
            <td>A-</td>
            <td>A+,A-,AB+,AB-</td>
            <td>A-,O-</td>
        </tr>
        <tr>
            <td>O-</td>
            <td>EVERYONE</td>
            <td>O-</td>
        </tr>
        <tr>
            <td>B-</td>
            <td>B+,B-,AB+,AB-</td>
            <td>B-,O-</td>
        </tr>
        <tr>
            <td>AB-</td>
            <td>AB+,AB-</td>
            <td>AB-,A-,B-,O-</td>
        </tr>
    
    
    </table></div>
    <div class="mid">
        <div class="midtop">
            <button class="btn" onclick="donate()">donate blood</button>    
            <button class="btn" onclick="need()">need blood</button>    
        </div>
        <div class="midmid">
            <div class="box" id="box1"><img src="" alt="">
            Total Blood Donators: <span id="show"></span> </div>
            <div class="box">who can give blood?<br>You must be at least 17 years old to donate to the general blood supply, or 16 years old with parental/guardian consent, if allowed by state law. There is no upper age limit for blood donation as long as you are well with no restrictions or limitations to your activities.
            </div>
        <div class="box">Available blood groups<br>
        <button class="icons">A+</button><button class="icons">B+</button><button class="icons">O+</button><button class="icons">AB+</button><button class="icons">A-</button><button class="icons">AB-</button></div>
        </div>
        
        
    </div>
    
</body>
<script>
    var username = localStorage.getItem("username");
    var t=localStorage.getItem("donorvalue1");
// alert(t)
if(t==null){
        t=0;
    }
    
    document.getElementById("navbar").innerHTML = username;
    document.getElementById("show").innerHTML = t;
    
    
    // alert(localStorage.getItem("nam"));
    function donate(){
        window.location="blood-donate.html"
    }function need(){
        window.location="blood-need.html"

    }
</script>
</html>
