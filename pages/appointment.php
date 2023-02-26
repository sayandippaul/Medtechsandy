<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPOINTMENT</title>
    <style>
        body {
            background-color: black
        }

        * {
            margin: 0px;
            padding: 0px;
            color: black;
        }

        .header {

            background-color: 
            rgba(105, 107, 231, 0.897);
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
            box-shadow: 3px 3px blue;
        }

        .firstoption {
            width: 100%;
        }

        .firstoption select {
            width: 50%;
            padding: 1%;
        }

        .all {
            width: 90%;
        }

        /* tr {
            margin-left: 20%;

        } */

        /* #left{
            height: 500px;
            width: 90%;
            background-color: coral;
            margin-top: 70px;
            justify-content: center;
            align-items: center;
        } */
        .lefttop {
            height: 40px;
            justify-content: center;
            text-align: center;
            margin-top: 70px;
            width: 80%;
            background-color: rgba(161, 94, 238, 0.651);
            margin-bottom: 10px;
            padding: 5px;
            border-radius: 12px;
            margin-left: 2%;
            justify-content: center;
            align-items: center;

        }

        .rightmid {
            background-color: rgb(63, 62, 62);
            height: 500px;
            width: 80%;
            margin: auto;
            margin-top: 60px;
            border-radius: 20px;
            justify-content: center;
        }

        .deliver {
            margin: 20px;
            height: 25px;


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
            display: flexbox
        }

        .total {
            display: grid;
            grid-template-columns: 1fr 3fr 1fr;
        }

        .deliver {
            margin: 20px;
            height: 250px;


        }


        #name {
            height: 40px;
            margin: 30px;
            width: 60%;
            color: black;
            padding: 5px;
            border-radius: 12px;

        }

        .search1 {
            height: 50px;
            margin-top: 67px;
            background-color: rgb(95, 108, 228);
            color: white;
            padding: 5px;
            border-radius: 12px;
            width: 28%;

        }

        .search2 {
            height: 52px;

            background-color: rgb(95, 108, 228);
            color: white;
            padding: 5px;
            border-radius: 12px;
            width: 13%;

        }

        #buy {
            height: 32px;

            background-color: rgb(95, 108, 228);
            color: white;
            padding: 5px;
            border-radius: 12px;
            width: 60%;
            margin: auto;

            display: block;

        }

        .midbox {
            height: 500px;
            width: 100%;
            background-color: rgb(63, 62, 62);
            justify-content: center;
            align-items: center;
            border-radius: 20px;
        }


        .leftmid {
            display: flex;
            flex-direction: column;
            height: 500px;
            width: 80%;
            background-color: rgb(63, 62, 62);
            margin-top: 60px;
            margin-left: 10%;
            border-radius: 20px;
        }

        .leftmid {
            display: flex;
            flex-direction: column;
            height: 500px;
            width: 80%;
            background-color: rgb(63, 62, 62);
            margin-top: 60px;
            margin-left: 10%;
            border-radius: 20px;
        }

        .care {
            margin: auto;
            margin-top: 20px;
            height: 250px;
            padding: 5px;
            width: 80%;
            border-radius: 12px;
            justify-content: center;
            margin-top: 50px;


        }

        .firstoption {
            width: 90%;
            margin: auto;
            margin-top: 30px;

        }

        .option {
            color: black;
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
            display: flexbox
        }

        .total {
            display: grid;
            grid-template-columns: 1fr 3fr 1fr;
        }

        #name {
            height: 40px;
            margin: 30px;
            width: 60%;
            color: black;
            padding: 5px;
            border-radius: 12px;

        }

        .search1 {
            height: 50px;
            margin-top: 67px;
            background-color: rgb(95, 108, 228);
            color: white;
            padding: 5px;
            border-radius: 12px;
            width: 28%;

        }

        .search2 {
            height: 52px;

            background-color: rgb(95, 108, 228);
            color: white;
            padding: 5px;
            border-radius: 12px;
            width: 13%;

        }

        #buy {
            height: 32px;

            background-color: rgb(95, 108, 228);
            color: white;
            padding: 5px;
            border-radius: 12px;
            width: 60%;
            margin: auto;

            display: block;

        }

        .midbox {
            height: 500px;
            width: 100%;
            background-color: rgb(63, 62, 62);
            justify-content: center;
            align-items: center;
            border-radius: 20px;
        }

        #tale {
            margin: 30px;
            list-style: none;
            height: 400px;
            color: black;
            text-align: center;
        }

        #date {
            margin-top: 20px;
            margin-left: 30px;
            width: 50%;
            padding: 1%;
            height: 3px;
        }

        .care {
            margin: auto;
            margin-top: 90px;
            height: 150px;
            padding: 5px;
            width: 80%;
            border-radius: 12px;
            justify-content: center;
            background-color: white;
            text-align: center;
            align-items: center;
            display: grid;
            grid-template-rows: 1fr 1fr 1fr 1fr;

        }
        td{
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

    <div class="mid">APPOINTMENT</div>
    <div class="total">
        <div class="box" id="left">
            <div class="lefttop">APPOINTMENT SCHEDULE</div>
            <div class="leftmid">
                <div class="care" id="btn1">
                    <div id="apps1" class="apps"></div>
                    <div id="apps2" class="apps"></div>
                    <div id="apps3" class="apps"></div>
                    <div id="apps4" class="apps"></div>
                </div>
            </div>
        </div>
        <div class="box" id="midmid">
            <input type="text" id="name" placeholder="Enter Doctor Name(In capital)" onkeyup="sch()">
            <button class="search1" id="search">Search</button>
            <div class="midbox" id="midbox">
                <div class="firstoption"><label for="car">Select Time Slot</label>
                    <select name="area" id="option" id="car">
                        <option class="option" value="mo">11AM-1PM(MORNING SHIFT)</option>
                        <option class="option" value="no">2PM-4PM(MIDDAY SHIFT)</option>
                        <option class="option" value="ev" selected>6PM-8PM(EVENING SHIFT)</option>
                    </select>
                    <div>select date: <input id="date" type="date"></div>
                    <!-- <div class="midbox" id="midbox"> -->

                    <table class="all" id="tale">
                        <tbody>
                            <tr>
                                <th>Doctor Name </th>
                                <th>Fees</th>
                                <th>speciality </th>
                            </tr>
                            <tr>
                                <td>ANKIT SENGUPTA</td>
                                <td>300</td>
                                <td><button id="btn" onclick="btn(this)">SKIN CARE</button></td>
                            </tr>
                            <tr>
                                <td>JOY GANGULY</td>
                                <td>1300</td>
                                <td><button id="btn" onclick="btn(this)">EYE AND ENT</button></td>
                            </tr>
                            <tr>
                                <td>ARNAB MUKHERJEE</td>
                                <td>200</td>
                                <td><button id="btn" onclick="btn(this)">HOMEOPATHY</button></td>
                            </tr>
                            <tr>
                                <td>SOURIK DAS</td>
                                <td>170</td>
                                <td><button id="btn" onclick="btn(this)">GENERAL</button></td>
                            </tr>
                            <tr>
                                <td>SAGAR DAS</td>
                                <td>1800</td>
                                <td><button id="btn" onclick="btn(this)">CARDIOLOGY</button></td>
                            </tr>
                            <tr>
                                <td>DIGANTA BANERJEE</td>
                                <td>1500</td>
                                <td><button id="btn" onclick="btn(this)">ANASTHESIOLOGY</button></td>
                            </tr>
                            <tr>
                                <td>PRIYAM DEBNATH</td>
                                <td>1900</td>
                                <td><button id="btn" onclick="btn(this)">OPTHAMOLOGY</button></td>
                            </tr>
                            <tr>
                                <td>DEBOJYOTI BANERJEE</td>
                                <td>1200</td>
                                <td><button id="btn" onclick="btn(this)">PATHOLOGY</button></td>
                            </tr>
                            <tr>
                                <td>DEBANJAN BANERJEE</td>
                                <td>2100</td>
                                <td><button id="btn" onclick="btn(this)">NEUROLOGY</button></td>
                            </tr>
                        </tbody>

                    </table>
                    <!-- </div> -->

                </div>


            </div>
        </div>
        <div class="box" id="left">
            <div class="lefttop">BOOK APPOINTMENT</div>
            <div class="rightmid">
                <input type="text" class="deliver" id="prob" placeholder="Enter Health Problems ">
                <button id="buy" onclick="appoint()">APPOINT NOW</button>



            </div>
        </div>

    </div>



</body>
<script>
    alert("select date first");
   
    function sch() {
        var s = document.getElementById("name").value;
        var table = document.getElementById("tale");
        var alltr = table.getElementsByTagName("tr")


        var count = table.rows.length;
        // alert(count);
        var n = s.length;

        for (i = 1; i < count + 1; i++) {
            var td = alltr[i].getElementsByTagName("td")[0];

            var name = td.innerHTML;
            var l = name.substr(0, n);
            if (s == l) {

                alltr[i].style.display = "";

            }
            else {
                alltr[i].style.display = "none";
            }
        }
    }
    var a = "";
    var b = ""
    var alltd = "";
    // var t = "";
    var v1 ="", v2 ="", v3="", v4="";
    // var ftime=""
    var color="";

    function btn(pick) {
        // alert("hi");
        //alert(color);
        if(pick.style.backgroundColor=="blue"){
            pick.style.backgroundColor="white";
            pick.style.color="black";   
        }
        else{
            pick.style.backgroundColor="blue";
            pick.style.color="white";
        }
        v2 = b;
        b = document.getElementById("option").value;
        var t = document.getElementById("date").value;
        v1 = t;
        var a = pick.parentElement.parentElement;
        var alltd = a.getElementsByTagName("td");
        v3 = alltd[0].innerHTML;
        v4 = alltd[1].innerHTML;

    }
    function appoint() {
        var  p = document.getElementById("prob").value
        // alert(ftime)

        if (p == "") {
            alert("enter health problems")
    


            }
        else  {
            if ("mo" == b) {
                document.getElementById("apps3").innerHTML = "Time:11AM-1PM(MORNING SHIFT)";
                   var ftime="Time:11AM-1PM(MORNING SHIFT)"
            }
            else if (b == "no") {
                document.getElementById("apps3").innerHTML = "Time:2PM-4PM(MIDDAY SHIFT)";
                      var  ftime="Time:2PM-4PM(MIDDAY SHIFT)"
            }
            else {
                document.getElementById("apps3").innerHTML = "Time:6PM-8PM(EVENING SHIFT)";
               var ftime="Time:6PM-8PM(EVENING SHIFT)"
            }
           
            document.getElementById("apps1").innerHTML ="DOCTOR NAME:  "+ v3;
       localStorage.setItem("appointname", v3);
       localStorage.setItem("appointdate", v1);
       localStorage.setItem("appointtime", ftime);
       localStorage.setItem("appointfees", v4);
       document.getElementById("apps2").innerHTML = "FEES: "+v4;
       document.getElementById("apps4").innerHTML ="DATE: "+ v1;
        
            alert("congrats!appointment booking successful")
        }
    }

</script>

</html>