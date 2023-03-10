<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambulance </title>
    <style>

        body {
            background-color: black
        }

        * {
            margin: 0px;
            padding: 0px;
            color: white;
        }

        .header {

            background-color: rgb(49, 105, 209);
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
            box-shadow: 2px 3px blue;
            color: black;
            margin: auto;
            text-align: center;
            padding-top: 10px;
            margin-top: 15px;
            background-image: url('pictures/ambulance heading.png');
            background-size: 30% 100%;
            background-repeat: no-repeat;
            
        }

        #city {
            color: black;
        }

        .option {
            color: black;
            width: 70%;
            margin: auto;
            margin-top: 10px;
            height: 50px;
            padding-left: 5px;
            border-radius: 12px;
        }

        .fom {
            display: flex;
            flex-direction: column;

            margin: auto;
            margin-top: 50px;

        }

        #option1 {
            width: 100%;
            margin-right: 0%;
            height: 50px;
            color: black;
        }

        #option2 {
            width: 100%;
            margin-right: 0%;
            height: 50px;
            color: black;
        }

        .prob {
            margin: auto;
            width: 70%;
        }

        .book {
            color: black;
            width: 40%;
            margin: auto;
            margin-top: 10px;
            height: 50px;
            padding-left: 5px;
            border-radius: 12px;
            background-color: rgb(49, 105, 209);
            color: black;

        }

        .box {
            /* position: absolute; */
            float: right;
            height: 100px;
            width: 60%;
            background-color: rgb(2, 1, 31);
            box-shadow: 2px 3px blue;
            margin: 30px;
            border-radius: 10px;
            margin-right: 10%;
            text-align: center;
            align-items: center;
            font-size: medium;


        }

        .type {
            margin-top: 30px;
        }

        #show {
            height: 100px;
            width: 70%;
            margin: auto;
            /* background-color: rgb(193, 204, 236); */
            display: flex;
            flex-direction: row;
            background: none;
            border: 2px solid blue;
            box-shadow: 3px 3px white;
            border-radius: 20px;
        }

        .items {
            /* background-color: black; */
            color: black;
            width: 28%;
            background: none;
        }

        #phone1,
        #phone2,
        #name1,
        #name2 {
            color: white;
            margin-top: 10px;
        }
        #card,#btn1#btn2{
            border-radius: 12px;
            outline: none;
            color: white;
        }

        #book1,
        #book2 {
            margin: auto;
            margin-top: 15px;
            background-color: rgb(133, 133, 197); 
            color: white;
            background-color: rgb(147, 147, 235);
            border-radius: 12px;
            box-shadow: 3px 3px white;
            width: 120%;
            height: 30px;
            text-align: center;
        }

        /* #book {
            display: grid;
            grid-template-rows: 1fr 1fr;
            margin: auto;
            margin-top: 20px;
            color: white;
            background-color: rgb(147, 147, 235);
            border-radius: 12px;
            box-shadow: 3px 3px white;
            width: 200%;
            height: 30px;
        } */
        .finalitem{
            height: 40px;
            margin: auto;
            background-color: rgb(111, 111, 163);
            color: white;
            margin-top: 20px;
            width: 60%;
            text-align: center;
            border-radius: 12px;
        }
        #final{
            display: flex;
            flex-direction: column;

            margin-right: 60%;
            margin-top: 70px;
            width: 30%;
        }
        #box1{
            background-image: url('pictures/als ambulance.png');
            background-size: 20% 100%;
            background-repeat: no-repeat;
            
        }
        #box2{
            background-image: url('pictures/bls ambulance.png');
            background-size: 20% 100%;
            background-repeat: no-repeat;
            
        } #box3{
            background-image: url('pictures/pts ambulance.png');
            background-size: 20% 100%;
            background-repeat: no-repeat;
            
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
    <marquee behavior="alternate" direction="">
        <div class="mid">AMBULANCE</div>
    </marquee>

    <div class="type">
        <div class="box" id="box1">ALS-Advanced Life Support<br>A Large Vehicle Used For Critical Patients<br>FEES:1800</div>
        <div class="box" id="box2">BLS-Basic Life Support<br>A Large Van With Important And Basic Medical Equipments<br>FEES:1200
        </div>
        <div class="box" id="box3">PTS-Patient Transport Service<br>A Vehicle Used To Transport Non Critical Patients<br>FEES:800
        </div>
    </div>

    <div class="fom" id="fom">
        <input type="text" class="option" id="name" placeholder="Enter Patient Name">
        <input type="text" class="option"onblur="phone()" id="no" placeholder="Enter phone number">
        <!-- <div>
            CITY:  <input type="radio"  name="city" selected>kolkata 
        </div>
        <div> -->
        <div class="prob">
            <label for="area">Area</label>
            <select name="area" id="option1" id="city">
                <option class="option" value="nk">Ranigunj</option>
                <option class="option" value="sk">belakoba</option>
                <option class="option" value="ck" >Coachbehar</option>
                <option class="option" value="ek" selected>Jalpaiguri</option>
                <option class="option" value="wk">siliguri</option>
            </select>
            <label for="car">Type Of Car</label>
            <select name="area" id="option2" id="car">
                <option class="option" value="al">ALS</option>
                <option class="option" value="bl">BLS</option>
                <option class="option" value="pt" selected>PTS</option>
            </select>
        </div>
        <input type="text" id="address" class="option" placeholder="Enter Address">
        <input type="text" id="password"onblur="pass()" class="option" placeholder="Enter password">
        <button id="sub" class="book" onclick="book()">BOOK NOW</button>
    </div>
    <div id="final">
        <div id="show1" class="finalitem"></div>
        <div id="show2" class="finalitem"></div>
        <div id="show3" class="finalitem"></div>
        <div id="show3" class="finalitem">BOOKING CONDITION:SUCCESSFUL</div>
    </div>

    <div id="show">
        <button class="items" id="card"></button>
        <button class="items" id="btn1">
            <div id="name1"></div>
            <div id="name2"></div>
        </button>
        <button class="items" id="btn2">
            <div id="phone1"></div>
            <div id="phone2"></div>
        </button>
        <div id="book">
            <div id="book1" id="rzp-button1" onclick="book1()">BOOK DRIVER 1</div>
            <div id="book2" id="rzp-button1" onclick="book2()">BOOK DRIVER 2</div>
        </div>
    </div>
</body>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var username = localStorage.getItem("username");
    
    document.getElementById("navbar").innerHTML = username;
    var count=0;
    ambulance = [{
        "value": "ck",
        "area": "Coachbehar",
        "fname": "RAMESH KHAN",
        "sname": "JOJIT DUTTA",
        "fphone": "9879869859",
        "sphone": "9876543210",
    }, {
        "value": "ek",

        "area": "Jalpaiguri",
        "fname": "KINGSHUK SARKAR",
        "sname": "PARTHIB DHAR",
        "fphone": "9879912345",
        "sphone": "9878976543",
    }, {
        "value": "wk",

        "area": "Siliguri",
        "fname": "RAJDEEP SEN",
        "sname": "JAYANTA NATH",
        "fphone": "9871223546",
        "sphone": "9764532190",
    }, {
        "value": "nk",

        "area": "Ranigunj",
        "fname": "DEBOJYOTI BHOUMIK",
        "sname": "DEBANJAN MONDAL",
        "fphone": "6290780035",
        "sphone": "7897657432",
    }, {
        "value": "sk",

        "area": "Belakoba",
        "fname": "GOPAL SHAW",
        "sname": "SAYANTAN NATH",
        "fphone": "9087065231",
        "sphone": "987009887",
    }]

    var post = document.getElementById("book");
    post.style.display = "none"
    var final = document.getElementById("final");
    var start = document.getElementById("fom");
    var mid = document.getElementById("show");
    final.style.display = "none"
    mid.style.display = "none"
    var firstname = ""
    var secondname = ""
    var firstphone = ""
    var secondphone = ""
    var fees = ""
    function book() {
        if(count==2){
        var area = document.getElementById("option1").value;
        var ambu = document.getElementById("option2").value;

        if(ambu=="al"){
            fees=1800;
        }
        else if(ambu=="bl"){
            fees=1200;
        }
        else{
            fees=800;
        }
        //   alert(area)
        for (i = 0; i < ambulance.length; i++) {
            if (ambulance[i].value == area) {
                document.getElementById("card").innerHTML = ambulance[i].area
                 firstname = ambulance[i].fname;
                 firstphone = ambulance[i].fphone;
                 secondphone = ambulance[i].sphone;
                 secondname = ambulance[i].sname;
       localStorage.setItem("ambuarea",ambulance[i].area );

                document.getElementById("name1").innerHTML = ambulance[i].fname
                document.getElementById("name2").innerHTML = ambulance[i].sname
                document.getElementById("phone1").innerHTML = ambulance[i].fphone
                document.getElementById("phone2").innerHTML = ambulance[i].sphone
                post.style.display = "block"
                // document.getElementById("book1").innerHTML = '<button  id="bookp" >BOOK DRIVER 1</button>'
                // document.getElementById("book2").innerHTML = '<button onclick="book2()" id="bookp" >BOOK DRIVER 2</button>'
                mid.style.display=""
                // var bookp=document.getElementById("bookp");
                // bookp.style.background.color="blue";
                // bookp.style.color="white";
                // bookp.style.margintop="20px"
            }
        }
    }
    else{
        alert("enter correct details")
    }
    }
    function book1() {
        start.style.display="none";
        mid.style.display="none";
        final.style.display="block";
        
       document.getElementById("show1").innerHTML="DRIVER: "+firstname
       document.getElementById("show2").innerHTML="PHONE NUMBER:  "+firstphone
       document.getElementById("show3").innerHTML="FEES: "+fees
       alert("booking successful");
       localStorage.setItem("ambuname",firstname);
       localStorage.setItem("ambuphone",firstphone);
       localStorage.setItem("ambufees",fees);
       var options = {
                "key": "rzp_test_LWiu5HmVEmmGAW", // Enter the Key ID generated from the Dashboard
                "amount": fees*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                "currency": "INR",
                "name": "Ambulance booking",
                "description": firstname,
                "image": "images/WhatsApp.png",
                "handler": function(response) {
                    alert("Payment Success. Your Transaction Id: " + response.razorpay_payment_id);
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
                    
        
    //    window.location="main page.html"
                       
        }
   function book2() {
        document.getElementById("show1").innerHTML="DRIVER: "+secondname
       document.getElementById("show2").innerHTML="PHONE NUMBER:  "+secondphone
       document.getElementById("show3").innerHTML="FEES: "+fees
       alert("booking successful");
       localStorage.setItem("ambuname",secondname );
       localStorage.setItem("ambuphone",secondphone );
       localStorage.setItem("ambufees",fees);
       var options = {
                "key": "rzp_test_LWiu5HmVEmmGAW", // Enter the Key ID generated from the Dashboard
                "amount": fees * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                "currency": "INR",
                "name": "Ambulance booking",
                "description": secondname,
                "image": "images/WhatsApp.png",
                "handler": function(response) {
                    alert("Payment Success. Your Transaction Id: " + response.razorpay_payment_id);
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();


        
       
    //    window.location="main page.html"
       start.style.display="none";
       mid.style.display="none";
        final.style.display="block";
       
        }
   
   var password=localStorage.getItem("password");

//    alert(password)
   function pass() {
        var bloodpassword= document.getElementById("password").value;
        if(password!=bloodpassword){
            alert("ENTER CORRECT PASSWORD ")
        }
        else{
                count++;
            }
            
    }
    function phone() {

var a=document.getElementById("no").value;
var n=a.length;
// alert(n)
// alert(a[0])
if(n!=10 || a[0]==1 || a[0]==3 || a[0]==4 || a[0]==0|| a[0]==4|| a[0]==5)
{
    alert("enter valid number")
}
else{
        count++;
    }
    
}

// var instance = new Razorpay({ key_id: 'YOUR_KEY_ID', key_secret: 'YOUR_SECRET' })instance.orders.create({  amount: 50000,  currency: "INR",  receipt: "receipt#1",  notes: {    key1: "value3",    key2: "value2"  }})

</script>

</html>