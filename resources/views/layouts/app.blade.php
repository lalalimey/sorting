<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8"/>
    <meta name="theme-color" content="cornflowerblue"/>
    <meta name="google" content="notranslate"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha256-OweaP/Ic6rsV+lysfyS4h+LM6sRwuO3euTYfr6M124g=" crossorigin="anonymous"/>
    <link rel="shortcut icon" href="/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="/css/app.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    @vite('resources/css/app.css')
    <title>sorting</title>
    <style>
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    transition: all 0.4s;
    font-family: Chonburi;
}

.container{
    margin-left: 10px;
    margin-right: 5%;
}

/* Navbar section */

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
    width:375px;
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
    width: 120px;
    height: 65px;
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

/* Home section */

.home{
    width: 100%;
    height: 100vh;
    background-color: rgb(218, 231, 255);
}

/* Medai qurey section */

@media screen and (min-width: 768px) and (max-width: 1024px) {
    
    .container{
        margin: 0;
    }
    
}

@media screen and (max-width:768px) {
    
    .container{
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
        height: 40px;
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
    </style>
</head>
<body>
<header>

</header>
<main>
    @yield('content')
    <nav class="nav">
    <div class="container">
        <div class="logo">
            <a href="#">MDCU77 Sorting</a>
        </div>
        <div class="main_list" id="mainListDiv">
            <ul>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Sorting</a></li>
                <li><a href="#">Log Out</a></li>
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
    
<section class="home"></section>
</main>
    <footer class="footer">
        <font class="fontfoot" color="white">
            IT Division, The Student Union of the Faculty of Medicine, Chulalongkorn University
        </font>
    </footer>
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
