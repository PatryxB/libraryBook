<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Library</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>

        <header>
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
                    <h1 style="opacity: .6;">Login</h1>
                    <label for="email">Email</label><br>
                    <input type="email" id="email"><br><br>
                    <label for="password">Password</label><br>
                    <input type="text" id="password"><br>
                    <button type="submit" class="btn">Sign In</button>
                </form>
            </div>
        </header>

        <section id="info">
            <div class="container">
                <div class="text">
                    We opened the biggest free source of book for you for free!
                    <p>What's going on</p>
                </div>
                <div class="column-container">
                    <div class="column">
                        <img src="{{asset('/img/booksvg1.svg')}}" style="float:left;" width="400" height="200">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing <br>
                            Sequi nemo exercitationembr <br>
                            doloremque saepe voluptatum recusandae magni nostrum? <br>
                            Veniam non deserunt officiis voluptatibus distinctio <br>
                            , ad obcaecati nobis provident facilis. Nostrum, officiis! <br>
                        </p>
                    </div>
                    <div class="column">
                        <p style="float:left">Lorem ipsum dolor sit, amet consectetur adipisicing <br>
                            Sequi nemo exercitationembr <br>
                            doloremque saepe voluptatum recusandae magni nostrum? <br>
                            Veniam non deserunt officiis voluptatibus distinctio <br>
                            , ad obcaecati nobis provident facilis. Nostrum, officiis! <br>
                            Sequi nemo exercitationembr <br>
                            doloremque saepe voluptatum recusandae magni nostrum? <br>
                            Veniam non deserunt officiis voluptatibus distinctio <br>
                            , ad obcaecati nobis provident facilis. Nostrum, officiis! <br>
                        </p>
                        <img src="{{asset('/img/booksvg2.svg')}}" style="margin-left:70px" width="400" height="200">
                    </div>
                    <div class="column" style="height:60vh;">
                        <img src="{{asset('/img/booksvg3.svg')}}" style="float:left" width="400" height="200">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing <br>
                            Sequi nemo exercitationembr <br>
                            doloremque saepe voluptatum recusandae magni nostrum? <br>
                            Veniam non deserunt officiis voluptatibus distinctio <br>
                            , ad obcaecati nobis provident facilis. Nostrum, officiis! <br>
                            Veniam non deserunt officiis voluptatibus distinctio <br>
                            , ad obcaecati nobis provident facilis. Nostrum, officiis! <br>
                            Sequi nemo exercitationembr <br>
                            doloremque saepe voluptatum recusandae magni nostrum? <br>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <footer>XD</footer>

    </body>
</html>
