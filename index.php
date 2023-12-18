<?php
session_start(); ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>

        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('https://wallpapercave.com/wp/wp4718065.png');
            height: 100vh;
            flex-direction: column;
        }

        * {
            font-family: sans-serif;
        }

        h2 {
            text-align: center;
        }

        form {
            background-color: white;
            display: flex;
            align-items: center;
            flex-direction: column;
            border: 2px solid #392467;
            border-radius: 30px;
            padding: 20px;
            width: 300px;
        }

        input {
            border: 1px solid #163020;
            width: 95%;
            padding: 10px;
            margin: 10px;
            border-radius: 20px;
        }

        label {
            color: #607274;
            font-size: 18px;
            padding-left: 10px;
            align-self: self-start;
        }

        button {
            margin-top: 10px;
            padding: 10px;
            width: 95%;
            border: 1px solid #cccc
            border-radius: 15px;
            background-color: #313866;
            color: white;
        }

        button:hover {
            opacity: .7;
            background-color: #67729D;
        }

        .error {
            background-color: #E5D4FF;
            color: #7752FE;
            padding: 10px;
            width: 90%;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: white;
        }

        .info-login {
            position: absolute;
            top: 0px;
            right: 10px;
            font-weight: bold;
            color: #5D3587;
        }
    </style>
</head>

<body>
    <p class="info-login">Informasi Akun<br>Username : aiwa<br>Password : 131103</p>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_SESSION['error'])) { ?>
            <p class="error">
                <?php echo $_SESSION['error']; ?>
            </p>
            <?php unset($_SESSION['error']); ?>
        <?php } ?>
        <label>Username :</label>
        <input type="text" name="username" placeholder="Username">

        <label>Password :</label>
        <input type="password" name="password" placeholder="Password">

        <button type="submit">Login</button>
    </form>

    <script>
        //check cookie
        function checkCookie() {
            var userIdCookie = getCookie('user_id');
            if (userIdCookie) {
                window.location.href = 'teman.php';
            }
        }

        function getCookie(name) {
            var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
            return match ? match[2] : null;
        }
        checkCookie();
        document.addEventListener("DOMContentLoaded", function () {
            const loginForm = document.querySelector('form');

            loginForm.addEventListener('submit', function (event) {
                event.preventDefault();

                const username = document.getElementsByName("username")[0].value;
                const password = document.getElementsByName("password")[0].value;

                fetch('login.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        'username': username,
                        'password': password,
                    }),
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Set cookie dan redirect
                            document.cookie = "user_id=" + encodeURIComponent(data.user_id) + "; expires=" + new Date(new Date().getTime() + 30 * 24 * 60 * 60 * 1000).toUTCString() + "; path=/";
                            window.location.href = 'teman.php';
                        } else {
                            // Jika gagal
                            window.location.href = 'index.php';
                        }
                    });
            });
        });
    </script>

</body>

</html>