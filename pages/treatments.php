<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TREATMENTS</title>
    <style>
        body {
            background-color: black;
             background-image: url(pictures/treatment.png);
             background-repeat: no-repeat;
             background-size: 100% 100%;

        }

        * {
            margin: 0px;
            padding: 0px;
            color: white;
        }

        .header {

            background-color: rgba(105, 107, 231, 0.897);
            height: 50px;
            width: 100%;
            margin-top: 0px;
            /* position: sticky; */
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
            border: 2px solid red;
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
            /* margin-top: 15px; */
        }
        .midmid{
    color: white;
}
.box{
    /* position: absolute; */
    float: right;
    height: 100px;
    width: 80%;
    /* background-color: rgb(2, 1, 31); */
    margin: 30px;
    border-radius: 10px;
    margin-right: 10%;
    text-align: center;
    align-items: center;
    font-size: smaller;
    margin-top: 15px;
    border: 2px solid white;
    box-shadow: 2px 2px blue;
    font-weight: bolder;
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

    <div class="mid">TREATMENTS</div>
    <div class="midmid">
        <div class="box">ANASTHESIOLOGY<br>Administration of anesthetic related to surgery. Staff stays throughout your procedure and closely monitors your pain, anxiety and vital organ function<br>SPECIALIST:Diganta Banerjee(7003123456)</div>
        <div class="box">ORTHOPEDICS<br>Care for individuals with issues related to muscles, bones and joints from the simplest to the most complex orthopedic conditions.<br>SPECIALIST:nirupama banerjee(6289295396)
        </div>
        <div class="box">CANCER (ONCOLOGY)<br> team of experts focuses on the diagnosis, assessment and treatment of various types of cancer, as well as your health needs beyond cancer.<br><br>SPECIALIST:Arup Dey(6289295316)</div>
        <div class="box">CARDIAC SURGERY<br>Care and surgical services focusing on the repair and replacement of the heart’s valves, muscles or tissues.<br>SPECIALIST:Sagar Das(6289295316)</div>
        <div class="box">OPTHALMOLOGY<br>We offer basic and comprehensive eye examinations, diagnosis, management and treatment of eye disease and related disorders.<br>Priyam Debnath(9879875646)</div>
        <div class="box">NEUROLOGY<br>Care for individuals with diseases that affect the brain and nervous system.<br>SPECIALIST:Debanjan chakroborty(6290623456)</div>
        <div class="box">PATHOLOGY<br>General and advanced techniques used to examine blood and tissue samples to help your physician diagnose diseases and conditions.<BR>SPECIALIST:Debojyoti Banerjee(6290342586)</div>
        
    </div>
   
    
</body>
<script>
    var username=localStorage.getItem("username");
    document.getElementById("navbar").innerHTML=username;
</script>
</html>