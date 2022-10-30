<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent</title>
    <link rel="stylesheet" href="Css\style.css">
    <link rel="stylesheet" href="Css\welcome.css">
</head>

<body>
    <div class="nav">
        <nav>
            <label class="logo"><img src="images\brandlabs-logo 1.png" alt="brand logo"></label>
            <ul class="nav_links">
                <li class="Brandpages">Brand Pages</li>
                <li class="Solutions">Solutions</li>
                <li class="Utilities">Utilities</li>
                <li class="Successstories">Success Stories</li>
                <div class="Login">
                    <li class="log">
                        <a class="loki" href="logout.php">Logout</a>
                    </li>
                </div>
            </ul>

        </nav>
    </div>


    <section class="second">
        <div class="container1">
        <p class="text11"> <?php echo "Welcome ". $_SESSION['username']?></p>
            <p class="bigtext">Parents do play favorites with bands</p>
            <p class="smalltext">A new mom is born every 8 seconds. She needs your brand now more than ever.</p>
            <!-- <div class="regi">
                <div class="r1">
                    <li class="register">
                        <a class="reei" href="register.php">Register</a>
                    </li>
                </div>
                <div class="r2">
                    <li class="login2nd">
                        <a class="loki" href="login.php">Login</a>
                    </li>
                </div>
            </div> -->
            <div>
                <div class="container2">
                    <div class="img506"><img src="images\image506.png" alt="image506"></div>
                    <div class="img509"><img src="images\image509.png" alt="image509"></div>
                </div>

    </section>


    <section class="third">
        <div class="container33">
            <div class="line"></div>
            <p class="com1">Your perfect solution!</p>
            <div class="logo1"><img src="images\Group.png" alt=""></div>
        </div>
        <div class="container31">
            <p>Our innovative blend of marketing and advertising solutions connect brands with parents in powerful ways, at key decision-making moments throughout the journey called life.</p>
        </div>
        <div class="container32">
            <div class="img351"><img src="images\Rectangle351.png" alt="image351"></div>
            <div class="boximg353">
                <div class="img353"><img src="images\Rectangle353.png" alt="image353"></div>
            </div>
        </div>

    </section>

    <section class="fourth">
        <div class="container46"><img src="images\Ellipse 35.png" alt=""></div>
        <div class="container47"><img src="images\Ellipse 34.png" alt=""></div>
        <div class="container48"><img src="images\Ellipse 32.png" alt=""></div>
        <div class="container41">
            <div class="com411">
                <p class="text411">Build an active and engaged audience for your business. Build a lasting relationship with Parents for long term impacts</p>
                <p class="text412">Build relationship that lasts</p>
            </div>
            <div class="com412"><img src="images\BTP Landing Page 3.png" alt=""></div>
        </div>
        <div class="container42">
            <div class="com421">
                <div class="group424"><img src="images\BTP Landing Page 2.png" alt=""></div>
                <div class="group421"><img src="images\Group 2098.png" alt=""></div>
                <div class="group422"><img src="images\Group 2097.png" alt=""></div>
                <div class="group423"><img src="images\Group 2096.png" alt=""></div>

            </div>
            <div class="com422">
                <p class="text421">Precise Ad Targeting</p>
                <p class="text422">Innovative blend of life-stage marketing solutions to Reach and engage new, expectant, and experienced moms.</p>
                <ul class="text423">
                    <li>Set clear objectives</li>
                    <li>Define your audience</li>
                    <li>Make impact</li>
                </ul>
            </div>
        </div>
        <div class="container43">
            <div class="com431"><img src="images\Macbook Air (2022).png" alt=""></div>
            <div class="com432">
                <p class="text431">See Brand Pages</p>
                <p class="text432">Increase awareness of your business with a free brand page that you can make in minutes.</p>
                <p class="text433">Brand page Showcase</p>
            </div>
        </div>
        <div class="container44">
            <p>Ready to start advertising?</p>
        </div>
        <div class="container45">
            <p>Do more with Brand Labs</p>
        </div>


    </section>

    <section class="fifth">
        <div class="container54"><img src="images\Rectangle 339.png" alt=""></div>
        <div class="container51">
            <p class="text51">Take steps towards your goals</p>
        </div>
        <div class="container52"><img src="images\Group 2050.png" alt=""></div>
        <div class="container53">
            <p>Our secret sauce for your success</p>
        </div>

    </section>

    <section class="sixth">
        <div class="container64"><img src="images\Rectangle 338.png" alt=""></div>
        <div class="container61">
            <img src="images\Frame 10323.png" alt="">
        </div>
        <div class="container62">
            <p>A complete business toolkit</p>
        </div>
        <div class="container63">
            <p>Simple tools for every business</p>
        </div>

    </section>

    <section class="seventh">
        <div class="container71"><img src="images\Group 2103.png" alt=""></div>
        <div class="container72"><img src="images\Group 2102.png" alt=""></div>
        <div class="container73"><img src="images\bxs_quote-alt-left.png" alt=""></div>
        <div class="container74"><img src="images\Group 2070.png" alt=""></div>

    </section>

    <section class="eighth">
        <div class="container83"><img src="images\Rect 33.png" alt=""></div>
        <div class="container82"><img src="images\Mask group.png" alt=""></div>
        <div class="container81"><img src="images\Group 2086.png" alt=""></div>

    </section>

    <section class="ninth">
        <div class="container91"><img src="images\Group 2034.png" alt=""></div>
        <div class="container92"><img src="images\Group 2022.png" alt=""></div>
        <div class="container93"><img src="images\Group 2020.png" alt=""></div>
        <div class="container94"><img src="images\Group 2036.png" alt=""></div>
    </section>


</body>

</html>