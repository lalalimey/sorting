<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <style>
        body {
            font-family: Chonburi;
            margin: 0;
            background-color: rgb(218, 231, 255);
        }
        .header{
            width:100%;
            height: 40px;
            background-color: cornflowerblue;
            margin-bottom: 10px;
            padding-left: 40px;
            padding-top: 20px;
            position: fixed;
        }
        .fonthead{
            font-size: 16px;
            font-weight: 400;
        }
        .button {
            position: fixed;
            right: 0px;
            top: 0px;
            display: inline-block;
            background-color: #5a80c7;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 24px;
            padding: 20px;
            width: 200px;
            height: 60px;
            transition: all 0.5s;
            cursor: pointer;
            margin:0px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
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
            margin-top: 25px;
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
            padding: 15px 0;
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
            height: 20px;
            background-color: cornflowerblue;
            position: fixed;
            left: 0;
            bottom: 0;
            font-weight: 400;
            padding-top: 20px;
            padding-bottom: 18px;
            padding-left: 40px;
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
<div class="header">
    <font class="fonthead" color="white">
        ระบบรับสมัคร Staff กิจกรรม MDCU NIGHT 2023
    </font>
    <a id="submit" href="https://www.md.chula.ac.th/" target="_blank" class="mdcu">
        <button class="button" style="vertical-align:middle">
                <span>
                    <font color="white">
                        MDCU
                    </font>
                </span>
        </button>
    </a>
</div>
<div class="container">

    <form id="signup">
        <div class="login_header">

            <h1>MDCU NIGHT</h1>

            <p>Staff Recruitment</p>

        </div>

        <div class="sep"></div>

        <div class="inputs">

            <a id="submit" href="{{ url('auth/google') }}">♦ LOG IN WITH DOCCHULA ACCOUNT ♦</a>

        </div>

    </form>

</div>
<div class="footer">
    <font class="fontfoot" color="white">
        IT Division, The Student Union of the Faculty of Medicine, Chulalongkorn University
    </font>
</div>
</body>
</html>

<a href="{{ url('auth/google') }}">
    log-in
</a>

