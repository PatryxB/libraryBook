<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>

        <div class="banner">
            <img src="{{asset('/img/bannerbook.jpg')}}" alt="">
            <div class="welcome-text">
                Free <br>
                Book <br>
                Collections <br>
                For <br>
                You <br>
            </div>
            <form action="" method="POST">
                <h1>Login</h1>
                <label for="email">Email</label><br>
                <input type="email" id="email"><br>
                <label for="password">Password</label><br>
                <input type="text" id="password"><br>
                <button type="submit">Sign In</button>
            </form>
        </div>

    </body>
</html>
