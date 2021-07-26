<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/login/css/login.css">
    <style>
        body{
            font-family: 'Poppins', sans-serif !important;
        }
        .head{
            text-align: center;
            margin-bottom: 40px;
            color: #001a6f;
            position: relative;
        }
        .head span{
            color: #8c8c8c;
        }
        .head::after{
            content: "";
            width: 100px;
            position: absolute;
            margin: 0 auto;
            height: 1px;
            background: #001a6f;
            left: 42%;
            /* right: 0; */
            bottom: -14px;
        }
        .forgot_password{
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .forgot_confirm{
            width: 100%;
            max-width: 570px;
            margin: 0 auto;
            color: gray;
            padding: 15px;
            box-shadow: 0px 1px 7px 2px grey;
        }

        .forgot_confirm input{
            width: 100%;
            border: 1px solid gray;
            padding: 8px 5px;
            border-radius: 5px;
            margin: 10px 0;
            font-size: 14px;
        }
        .forgot_confirm .group{
            margin: 16px 0;
        }
        .buttonsubmit{
            text-align: center;
        }
        .buttonsubmit input{
            background-color: #001a6f;
            color: #fff;
            padding: 10px 5px;
            width: 100%;
            max-width: 200px;
            transition: color 0.35s ease-in-out,background-color 0.35s ease-in-out,border-color 0.35s ease-in-out,box-shadow 0.35s ease-in-out;
        }
        .buttonsubmit input:hover{
            color: #001a6f;
            border: 1px solid #001a6f;
            background-color: #fff;
        }
        @media (max-width: 319px){}
    </style>
</head>

<body>
    <div class="forgot_password">
        <div class="forgot_confirm">
            <form method="post" action="">
                <div class="head">
                    <h2><span>Forgot</span> Password</h2>
                </div>
                <!-- <div class="group newpass">
                    <label for="pass" class="label">New Password</label> 
                    <input id="newpass" type="password" name="newpassword" class="input" data-type="password" placeholder="Enter new password">
                </div> -->
                <div class="group confirmpass">
                    <!-- <label for="pass" class="label">Enter Your mail Id</label>  -->
                    <input id="confirmpass" type="email" name="confirmpassword" class="input" data-type="password" placeholder="Enter Your mail Id">
                </div>
                <div class="group buttonsubmit">
                    <a href=""><input name="submit" type="submit" class="button" value="Submit"></a>
                </div>
            </form>
        </div>
    </div>

    <script src="assets/home/js/jquery.min.js"></script>
    <script src="js/jQuery/jquery.monte.js"></script>
    <script src="assets/home/js/popper.min.js"></script>
    <script src="assets/home/js/bootstrap.min.js"></script>
</body>

</html>
