<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Officer Sign in - sing up</title>

    <style>
        .form
        {
            padding: 50px 100px 50px 100px;
        }
        
        #form-bg
        {
            padding: 50px 200px 50px 200px;
        }

        .h1 {
            color: white;
            font-size: 20px;
            text-align: center;
        }

        .h2 {
            font-size: 20px;
            color: white;
        }

        h1 {
            color: white;
            font-size: 30px;
            text-shadow: 2px black solid;
        }

        /* Centered text */
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .container1 {
            position: relative;
        }

        .bg-dark {
            padding: 20px;
            opacity: ;
        }

        .footer {
            opacity: 0.8;
            display: block;
            display: flex;
        }

        #findus {
            text-align: center;
        }

        #findus h4 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 20px;
        }

        #findus img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            width: 150px;
        }

        #findus img:hover {
            box-shadow: 0 0 2px 1px darkblue;

        }

        #address {
            text-align: center;
        }

        #address h4 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 20px;
        }

        #address a {

            text-decoration: none;
        }

        #address a:hover {
            color: darkblue;
            opacity: 0.8;
            text-decoration: none;
        }

        #contactus {
            text-align: center;

        }

        #contactus a {
            text-decoration: none;
            display: inline-flex;

        }

        #contactus a:hover {
            text-decoration: none;
            display: inline-flex;
            color: darkblue;
        }

        #contactus h4 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 20px;
        }
    </style>

</head>

<body>
    <header>
        <div class="h1 p-3 mb-2 bg-secondary">
            <h1>Sign-up Recycler</h1>
        </div>
    </header>
    <hr>

    <section>
        <div class="bg-dark">
            <div id="form-bg" class="bg-dark rounded">
                <form method="POST" action="recyclersignup.php" class="form bg-light rounded was-validated">
                    <fieldset>
                        <legend>Sign up</legend>
                         Username: <br>
                         <input type="text" class="form-control" name="Username" placeholder="abc" required><br>
                         Password: <br>
                         <input type="password" class="form-control" name="Password" placeholder="**********"
                             required><br>
                        Email: <br>
                        <input type="text" class="form-control" name="Email" placeholder="abcg@gmail.com"
                            required><br>
                        Fullname: <br>
                        <input type="text" class="form-control" name="Fullname" placeholder="James" required><br>

                        <input type="submit" name="recyclersignup" value="Sign-up" class="btn btn-lg btn-success">
                    </fieldset>

                </form>
            </div>
            </div>
    </section>
    <hr>

    <div class="container1">
        <img src="footer bg.JPG" alt="img" width="100%" height="400">
        <footer class="bg-dark centered text-white">
        
            <div id="address">
                <h4>Address</h4>
                <a href="https://help.edu.my/" target="_blank">
                    <address>15, Jalan Semantan, Bukit Damansara, 50490 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur
                    </address>
                </a>
            </div>

            <div id="contactus">
                <h4>Contact Us</h4>
                <a href="03-123412341">+03-123412341</a>
                <a href="03-234123123">+03-234123123</a>
            </div>

        </footer>
    </div>


    <div class="bg-dark text-center text-white">
        CopyRight @ Reserved. BIT216
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>