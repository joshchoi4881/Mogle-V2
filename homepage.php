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
                <a id='home' href='homepage.php'>Home</a>
                <a href='questionnaire.php'>Questionnaire</a>
                <a href='search.php'>Search</a>
                <a href='analytics.php'>Analytics</a>
                <a href='scheduler.php'>Scheduler</a>
                <a href='waitlist.php'>Waitlist</a>
            </nav>
        </header>
        <section class="center">
            <p>Mogle is a suite of tools designed to help gig economy workers manage and optimize
            their multiple sources of income.</p>
            <div class="card">
                <h3>Step 1: <a href="questionnaire.php">Questionnaire</a> or <a href="search.php">Search</a></h3>
                <p>Find out different ways you can make money by inputting your specific and unique set
                of skills. Mogle will match you to some of the 150+ gig economy platforms out there, ranging
                from Zeel for massage therapists to Fiverr for music teachers.</p>
            </div>
            <div class="card">
                <h3>Step 2: <a href="analytics.php">Analytics</a></h3>
                <p>We will provide you with analytics that help you make the best decisions about which gig
                platforms, hours, and locations to choose to make the most of your time and income.</p>
            </div>
            <div class="card">
                <h3>Step 3: <a href="scheduler.php">Scheduler</a></h3>
                <p>Although the gig economy offers more flexibility, it comes at the cost of income instability.
                Figure out how much you can make hourly, weekly, monthly, and yearly by filling out a schedule
                that will estimate how much you can make in advance based on which gigs you work and how many
                hours you can put in.</p>
            </div>
		</section>
        <script>
            $(function() {
				$("#home").css({"background-color": "#800000", "color": "#fff"});
            });
        </script>
        <script src="js/mogle.js"></script>
    </body>
</html>