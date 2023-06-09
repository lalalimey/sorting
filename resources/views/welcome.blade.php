<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8"/>
    <meta name="theme-color" content="cornflowerblue"/>
    <meta name="google" content="notranslate"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha256-OweaP/Ic6rsV+lysfyS4h+LM6sRwuO3euTYfr6M124g=" crossorigin="anonymous"/>
    <link rel="shortcut icon" href="/favicon.png"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="/css/app.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <link href="/dist/output.css" rel="stylesheet">
    <style>
        body {
            font-family: Chonburi;
            margin: 0;
            background-color: rgb(218, 231, 255);
        }
        .nav{
    width: 100%;
    height: 65px;
    position: fixed;
    line-height: 65px;
    text-align: center;
    background-color: cornflowerblue;
}

.nav div.logo{
    width: 250px;
    height: 10px;
    position: fixed;
    font-size: 16px;
}

.nav div.logo a{
    text-decoration: none;
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
}

.nav div.main_list{
    width: 275px;
    height: 65px;
    float: right;
    position: relative;
}

.nav div.main_list ul{
    width:100%;
    height: 65px;
    display: flex;
    list-style: none;
}

.nav div.main_list ul li{
    width: 150px;
    height: 65px;
    float: right;
}

.nav div.main_list ul li a{
    text-decoration: none;
    color: #fff;
    line-height: 65px;
    text-transform: uppercase;
}

.nav div.main_list ul li a:hover{
    color: #c0c0c0;
}

.nav div.media_button {
    width: 40px;
    height: 40px;
    background-color: transparent;
    position: absolute;
    right: 15px;
    top: 12px;
    display: none;
}

.nav div.media_button button.main_media_button {
    width: 100%;
    height: 100%;
    background-color: transparent;
    outline: 0;
    border: none;
    cursor: pointer;
}

.nav div.media_button button.main_media_button span{
    width: 98%;
    height: 1px;
    display: block;
    background-color: #fff;
    margin-top: 9px;
    margin-bottom: 10px;
}

.nav div.media_button button.main_media_button:hover span:nth-of-type(1){
    transform: rotateY(180deg);
    transition: all 0.5s;
    background-color: #c0c0c0;
}

.nav div.media_button button.main_media_button:hover span:nth-of-type(2){
    transform: rotateY(180deg);
    transition: all 0.4s;
    background-color: #c0c0c0;
}

.nav div.media_button button.main_media_button:hover span:nth-of-type(3){
    transform: rotateY(180deg);
    transition: all 0.3s;
    background-color: #c0c0c0;
}

.nav div.media_button button.active span:nth-of-type(1) {
    transform: rotate3d(0, 0, 1, 45deg);
    position: absolute;
    margin: 0;
}

.nav div.media_button button.active span:nth-of-type(2) {
    display: none;
}

.nav div.media_button button.active span:nth-of-type(3) {
    transform: rotate3d(0, 0, 1, -45deg);
    position: absolute;
    margin: 0;
}

.nav div.media_button button.active:hover span:nth-of-type(1) {
    transform: rotate3d(0, 0, 1, 20deg);
}

.nav div.media_button button.active:hover span:nth-of-type(3) {
    transform: rotate3d(0, 0, 1, -20deg);
}
@media screen and (min-width: 768px) and (max-width: 1024px) {
    
    .nav_container{
        margin: 0;
    }
    
}

@media screen and (max-width:768px) {
    
    .nav_container{
        margin: 0;
    }
    
    
    .nav div.main_list{
        width: 100%;
        margin-top: 65px;
        height: 0px;
        overflow: hidden;
    }
    
    .nav div.show_list{
        height: 200px;
    }
    
    .nav div.main_list ul{
        flex-direction: column;
        width: 100%;
        height: 200px;
        top: 80px;
        right: 0;
        left: 0;
    }
    
    .nav div.main_list ul li{
        width: 100%;
        height: 50px;
        background-color: cornflowerblue;
    }
    .nav div.main_list ul li a{
      text-align: center;
        line-height: 40px;
        width: 100%;
        height: 40px;
        display: table;
    }
    
    .nav div.media_button{
        display: block;
    }
}
.nav_container{
    margin-left: 10px;
    margin-right: 5%;
}
        .container {
            width: 406px;
            max-width: 406px;
            margin: 0 auto;
        }

        #signup {
            padding: 0px 25px 25px;
            background: #fff;
            box-shadow:
                0px 0px 0px 5px rgba( 255,255,255,0.4 ),
                0px 4px 20px rgba( 0,0,0,0.33 );
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            display: table;
            position: static;
            height: 200px;
            position: absolute;
            top: 30%;
        }

        #signup .login_header {
            text-align: center;
        }

        #signup .login_header h1 {
            color: #000000;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: -15px;
        }

        .login_header p {
            color: #8f8f8f;
            font-size: 18px;
            font-weight: 800;
        }

        #signup .sep {
            height: 1px;
            background: #e8e8e8;
            width: 406px;
            margin: 0px -25px;
        }

        #signup .inputs {
            margin-top: 19px;
        }

        #signup .inputs label {
            color: #86d0fe;
            font-size: 12px;
            font-weight: 300;
            letter-spacing: 1px;
            margin-bottom: 7px;
            display: block;
        }

        input::-webkit-input-placeholder {
            color:    #b5b5b5;
        }

        input:-moz-placeholder {
            color:    #b5b5b5;
        }

        #signup .inputs input[type=email], input[type=password] {
            background: #f5f5f5;
            font-size: 0.8rem;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            border: none;
            padding: 13px 10px;
            width: 330px;
            margin-bottom: 20px;
            box-shadow: inset 0px 2px 3px rgba( 0,0,0,0.1 );
            clear: both;
        }

        #signup .inputs input[type=email]:focus, input[type=password]:focus {
            background: #fff;
            box-shadow: 0px 0px 0px 3px #fff38e, inset 0px 2px 3px rgba( 0,0,0,0.2 ), 0px 5px 5px rgba( 0,0,0,0.15 );
            outline: none;
        }

        #signup .inputs .checkboxy {
            display: block;
            position: static;
            height: 25px;
            margin-top: 10px;
            clear: both;
        }

        #signup .inputs input[type=checkbox] {
            float: left;
            margin-right: 10px;
            margin-top: 3px;
        }

        #signup .inputs label.terms {
            float: left;
            font-size: 14px;
            font-style: italic;
        }

        #signup .inputs #submit {
            width: 100%;
            margin-top: 20px;
            padding: 15px 20px;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
            text-align: center;
            text-decoration: none;
            background: -moz-linear-gradient(
                top,
                #b9c5dd 0%,
                #a4b0cb);
            background: -webkit-gradient(
                linear, left top, left bottom,
                from(#b9c5dd),
                to(#a4b0cb));
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            border: 1px solid #737b8d;
            -moz-box-shadow:
                0px 5px 5px rgba(000,000,000,0.1),
                inset 0px 1px 0px rgba(255,255,255,0.5);
            -webkit-box-shadow:
                0px 5px 5px rgba(000,000,000,0.1),
                inset 0px 1px 0px rgba(255,255,255,0.5);
            box-shadow:
                0px 5px 5px rgba(000,000,000,0.1),
                inset 0px 1px 0px rgba(255,255,255,0.5);
            text-shadow:
                0px 1px 3px rgba(000,000,000,0.3),
                0px 0px 0px rgba(255,255,255,0);
            display: table;
            position: static;
            clear: both;
        }

        #signup .inputs #submit:hover {
            background: -moz-linear-gradient(
                top,
                #a4b0cb 0%,
                #b9c5dd);
            background: -webkit-gradient(
                linear, left top, left bottom,
                from(#a4b0cb),
                to(#b9c5dd));
        }
        .footer{
            width: 100%;
            height: 60px;
            background-color: cornflowerblue;
            position: fixed;
            left: 0;
            bottom: 0;
            font-weight: 400;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 53px;
        }
        .fontfoot{
            font-size: 13px;
        }
        .mdcu{
            text-decoration: none;
        }
    </style>
</head>
<body>
<nav class="nav">
    <div class="nav_container">
        <div class="logo">
            <a href="#">MDCU77 Sorting</a>
        </div>
        <div class="main_list" id="mainListDiv">
            <ul>
                <li><a href="https://www.md.chula.ac.th/" target="_blank">MDCU</a></li>
                <li><a href="https://sites.google.com/docchula.com/mdcu77/home?pli=1&authuser=0" target="_blank">เว็บไซต์รุ่น 77</a></li>
            </ul>
        </div>
        <div class="media_button">
            <button class="main_media_button" id="mediaButton">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</nav>
<div class="container">

    <form id="signup">
        <div class="login_header">

            <h1>MDCU NIGHT</h1>

            <p>Staff Recruitment</p>

        </div>

        <div class="sep"></div>

        <div class="inputs">
            <a id="submit" href="{{ url('auth/google') }}"> <i class="material-icons left">lock</i>เข้าสู่ระบบด้วยบัญชี Docchula</a>
        </div>

    </form>

</div>
<div class="footer">
    <font class="fontfoot" color="white">
        IT Division, The Student Union of the Faculty of Medicine, Chulalongkorn University
    </font>
</div>
<script>
            var mainListDiv = document.getElementById("mainListDiv"),
    mediaButton = document.getElementById("mediaButton");

mediaButton.onclick = function () {
    
    "use strict";
    
    mainListDiv.classList.toggle("show_list");
    mediaButton.classList.toggle("active");
    
};
    </script>
</body>
</html>

<a href="{{ url('auth/google') }}">
    log-in
</a>

