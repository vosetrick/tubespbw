<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>
    <style>
        .body_login {
            padding-top: 15rem;
            padding-left: 48rem;
            padding-right: 48rem;
            color: #1c1c1c;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 22px;
        }

        .btn-custom {
            background: white;
            border: 2px solid #1c1c1c;
            padding: 5px 25px;
            border-radius: 0;
            -webkit-box-shadow: 3px 3px 3px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 3px 3px 3px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 3px 3px 3px 0px rgba(0, 0, 0, 0.75);
        }

        input.input_login[type="text"],
        input.input_login[type="password"] {
            border: 2px solid #1c1c1c !important;
            border-radius: 0 !important;
            width: 100%;
            padding: 6px;
        }

        .h1_login {
            text-align: center;
        }

        .table_login tr td {
            padding: 10px;
            vertical-align: middle;
        }

        .remember_me {
            font-size: 18px;
        }

        .a_forgot {
            text-decoration: none;
            font-size: 14px;
        }

        .no-pd {
            padding-top: 0!important;
        }
    </style>
</head>

<body class="body_login">
    <h1 class="h1_login">Login</h1>
    <form action="login" method="POST">
        <table class="table_login" width="100%">
            <tr>
                <td width="45%">Username</td>
                <td>
                    <input class="input_login" type="text" name="usernameLogin" placeholder="Username">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input class="input_login" type="password" name="passwordLogin" placeholder="Password">
                </td>
            </tr>
            <tr>
                <td class="no-pd"></td>
                <td class="no-pd" align="center">
                    <a class="a_forgot" href="#">Forgot Password?</a>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" id="buttonLogin" class="btn-custom" value="Login"></input>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="button" id="buttonRegister" value="Register" class="btn-custom"></input>
                </td>
            </tr>
        </table>
    </form>
    <script>
        let button = document.getElementById("buttonRegister");
        button.addEventListener("click",function(){
        window.location="register";
        });
    </script>
</body>

</html>