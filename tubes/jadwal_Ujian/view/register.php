
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>
    <style>
        .body_register {
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

        input.input_register[type="text"],
        input.input_register[type="password"] {
            border: 2px solid #1c1c1c !important;
            border-radius: 0 !important;
            width: 100%;
            padding: 6px;
        }

        .h1_register {
            text-align: center;
        }

        .table_register tr td {
            padding: 10px;
            vertical-align: middle;
        }

        .setuju {
            font-size: 17px;
        }
        .backgroundCekInput{
            background-color: rgba(255,0,0,0.4);
        }
    </style>
    <script src="view/js/regis.js" defer></script>
    <script src="view/js/InputRegis.js" defer></script>
    <script src="view/js/scriptRegis.js" defer></script>
    <script src="view/js/ajaxRegis.js"defer></script>
</head>

<body class="body_register">
    <h1 class="h1_register">Register</h1>
    <form method="POST">
        <table class="table_register" width="100%">
            <tr>
                <td width="45%">Username</td>
                <td>
                    <input class="input_register" type="text" id="usernameRegis" name="usernameRegis" placeholder="Username"
                    pattern = "[a-zA-Z0-9]{8,16}" title ="username mengandung minimal 8 and maksimal 16 karakter. Cth: abc23232">
                    <span id="auth"></span>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input class="input_register" type="password" name="passwordRegis" placeholder="Password"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}" title ="Mengandung minimal 1 huruf besar, 8 karakter, dan maksimal 16 karakter.">
                </td>
            </tr>
            <!-- <tr>
                <td>Confirm Password</td>
                <td>
                    <input class="input_register" type="password" name="confirm_password" placeholder="Confirm Password"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}" title ="Mengandung minimal 1 huruf besar, 8 karakter, dan maksimal 16 karakter.">
                </td>
            </tr> -->
            <!-- <tr>
                <td colspan="2" align="center">
                    <input type="checkbox" id="setuju">
                    <label class="setuju" for="setuju">Saya setuju dengan ketentuan yang ada</label>
                </td>
            </tr> -->
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Register" class="btn-custom" id="registerButton"></input>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>