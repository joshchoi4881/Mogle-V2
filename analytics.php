<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Maximizing Human Capital in the Gig Economy">
        <meta name="keywords" content="Mogle, Gig Economy, Human Capital">
        <meta name="author" content="Josh Choi">
        <title>Mogle</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="css/mogle.css"/>
        <!-- Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138974831-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-138974831-2');
        </script>
    </head>
    <body>
        <header id="header">
            <a href="homepage.php"><img id="logo" src="photos/design/mogle.png" alt="Mogle Logo"/></a>
            <nav>
                <a href='homepage.php'>Home</a>
                <a href='questionnaire.php'>Questionnaire</a>
                <a href='search.php'>Search</a>
                <a id='analytics' href='analytics.php'>Analytics</a>
                <a href='scheduler.php'>Scheduler</a>
                <a href='waitlist.php'>Waitlist</a>
            </nav>
        </header>
        <section class="center">
            <div class="card">
                <h1>Analytics</h1>
                <p>Join our <a href="waitlist.php">waitlist</a> to request tailored analytics for your platform(s) and city.</p>
            </div>
            <div class="card">
                <h1>DoorDash (Kenosha, WI)</h1>
                <br/>
                <p>Delivery Breakdown Stats:</p>
                <br/>
                <div class="center">
                    <img class="analytics" style="width:80%;height:80%;" src="photos/analytics/Kenosha;WI/1.png"></img>
                </div>
                <br/>
                <p>Deliveries Per Hour (DPH) and Total Earnings Per Hour (TEPH):</p>
                <br/>
                <div class="center">
                    <img class="analytics" style="width:50%;height:50%;" src="photos/analytics/Kenosha;WI/2.png"></img>
                </div>
                <br/>
                <p>Weekly Averages:</p>
                <br/>
                <div class="center">
                    <img class="analytics" style="width:75%;height:75%;" src="photos/analytics/Kenosha;WI/3.png"></img>
                </div>
                <br/>
            </div>
            <div class="card center">
                <h1>DoorDash (Hackensack, NJ)</h1>
                <br/>
                <p>Delivery Breakdown Stats:</p>
                <br/>
                <div class="center">
                    <img class="analytics" style="width:80%;height:80%;" src="photos/analytics/Hackensack;NJ/1.png"></img>
                </div>
                <br/>
                <p>Deliveries Per Hour (DPH) and Total Earnings Per Hour (TEPH):</p>
                <br/>
                <div class="center">
                    <img class="analytics" style="width:50%;height:50%;" src="photos/analytics/Hackensack;NJ/2.png"></img>
                </div>
                <br/>
                <p>Weekly Averages:</p>
                <br/>
                <div class="center">
                    <img class="analytics" style="width:75%;height:75%;" src="photos/analytics/Hackensack;NJ/3.png"></img>
                </div>
                <br/>
            </div>
		</section>
        <script>
            $(function() {
				$("#analytics").css({"background-color": "#800000", "color": "#fff"});
            });
        </script>
        <script src="js/mogle.js"></script>
    </body>
</html>