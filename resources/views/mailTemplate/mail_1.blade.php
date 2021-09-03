<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Email</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        /* start jumbotron */
        .jumbotron {
            width: 100%;
            height: 200px;
            background-color: blueviolet;
            position: relative;
            z-index: 1;
        }

        .jumbotron h1 {
            color: white;
            text-align: center;
            line-height: 200px;
        }

        .jumbotron .layout {
            width: 100%;
            height: 200px;
            position: absolute;
            z-index: -1;
        }

        /* end jumbotron */

        /* content start */

        .container {
            width: 60%;
            height: auto;
            margin: 40px auto;
        }

        .container h2 {
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .container p {
            text-indent: 50px;
            text-align: justify;
            letter-spacing: 2px;
        }

        /* content end */

        /* footer */
        .footer {
            width: 100%;
            height: 100px;
            background-color: rgb(48, 48, 48);
            margin-top: 50px;
        }

        .footer .icon {
            width: 30%;
            margin: 5px auto;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .footer .icon img {
            width: 50px;
            height: 50px;
            cursor: pointer;
        }

        .form-unsub {
            width: 30%;
            margin: auto;
            display: flex;
            justify-content: center;
        }

        .form-unsub button {
            width: 100px;
            border: none;
            text-decoration: none;
            background-color: yellowgreen;
            cursor: pointer;
            margin-top: 15px;
            border-radius: 5px;
        }

        /*footer end  */

    </style>
</head>

<body>

    <div class="jumbotron">
        <img src="https://cutewallpaper.org/21/jumbotron-background-image/new-jumbotron-background-Gold-Bond-Ultimate.png"
            alt="" class="layout">

        <h1>Welcome to our land</h1>
    </div>

    <div class="container">

        <h2>Your title</h2>
        <p>
            {{ $body }}
        </p>
    </div>

    <div class="footer">
        <div class="icon">
            <img src="https://www.searchpng.com/wp-content/uploads/2018/12/Splash-Facebook-Icon-Png.png" alt="">
            <img src="https://www.searchpng.com/wp-content/uploads/2019/03/Twitter-Splash-715x715.png" alt="">
            <img src="https://www.searchpng.com/wp-content/uploads/2018/12/Splash-Instagraam-Icon-Png-715x715.png"
                alt="">
            <img src="https://findicons.com/files/icons/2844/creative_blot_icons_set/512/social_media_icons_blot_icons_set_512x512_0010_linkedin.png"
                alt="">
        </div>
        <form action="" class="form-unsub">
            <input type="hidden">
            <button class="btn btn-info">Unsubscribe</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>
