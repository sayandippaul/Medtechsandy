<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEALTH CAMPAIGN PROJECTS</title>
    <style>
        body {
            background-color: black;
            background-image: url(pictures/health.png);
            background-repeat: no-repeat;
            background-size: 110% 110%;
            image-resolution: 3dpi;
            /* font-size: xx-large; */
            font-weight: bolder;
            color:black;


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
    box-shadow: 2px 2px blue;

            /* margin-top: 15px; */
        }
        .midmid{
    color: white;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;

}
.box{
    /* position: absolute; */
    float: right;
    height: 200px;
    width: 80%;
    /* background-color: rgb(2, 1, 31); */
    border: 2px solid black;
    color: black;
    box-shadow: 2px 2px blue;
    margin: 30px;
    border-radius: 10px;
    margin-right: 10%;
    text-align: center;
    align-items: center;
    font-size: smaller;
    margin-top: 100px;

}
.heading{
    margin: auto;
    margin-top: 20px;
    border-radius: 30px;
    text-align: center;
    background-color: rgb(238, 244, 248);
    box-shadow: 3px 3px black;
    color: black;
    width: 20%;
    height: 40px;
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

    <div class="mid">HEALTH CAMPAIGN PROJECTS</div>
    
    <div class="heading">RECENT PROJECTS</div>
    <div class="midmid">
        <div class="box">18-24 TH NOVEMBER<br>WORLD ANTIMICROBIAL DAY<br> annually, the World Antimicrobial Awareness Week (WAAW) aims to increase awareness of global antimicrobial resistance and to encourage best practices among the general public, health workers and policy makers to avoid the further emergence and spread of drug-resistant infections.</div>
        <div class="box">1ST DECEMBER<br>WORLD AIDS DAY <br> day is an opportunity for public and private partners to spread awareness about the status of the pandemic and encourage progress in HIV/AIDS prevention, treatment and care around the world. It has become one of the most widely recognized international health days and a key opportunity to raise awareness, commemorate those who have died, and celebrate victories such as increased access to treatment and prevention services.</div>
        <div class="box">12ND DECEMBER<br>UNIVERSAL HEALTH COVERAGE DAY<BR>Universal Health Coverage Day on 12 December is the annual rallying point for the growing movement for health for all. It marks the anniversary of the United Nations’ historic and unanimous endorsement of universal health coverage in 2012.</div>
        </div>
        <div class="heading">UPCOMING PROJECTS</div>
        <div class="midmid">
        <div class="box">24TH MARCH<br>WORLD TB DAY<br>Each year we commemorate World TB Day to raise public awareness about the devastating health, social and economic consequences of tuberculosis (TB) and to step up efforts to end the global TB epidemic.</div>
        <div class="box">25 TH APRIL<br>WORLD MALARIA DAY<br>World Malaria Day is an occasion to highlight the need for continued investment and sustained political commitment for malaria prevention and control. It was instituted by WHO Member States during the World Health Assembly of 2007.</div>
        <div class="box">31ST MAY<br>WORLD NO TOBACCO DAY<br>This yearly celebration informs the public on the dangers of using tobacco, the business practices of tobacco companies, what WHO is doing to fight the tobacco epidemic, and what people around the world can do to claim their right to health and healthy living and to protect future generations.</div>
        
    </div>
   
    
</body>
<script>
  var username=localStorage.getItem("username");
    document.getElementById("navbar").innerHTML=username;
  
</script>
</html>