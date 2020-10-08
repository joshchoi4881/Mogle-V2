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
                <a href='analytics.php'>Analytics</a>
                <a href='scheduler.php'>Scheduler</a>
                <a id='waitlist' href='waitlist.php'>Waitlist</a>
            </nav>
        </header>
        <section class="center">
            <div class="card">
                <h1>Waitlist</h1>
                <p>Enter your email to join our waitlist.</p>
                <input id="email" type="email"/>
                <br/>
                <p>Which features would you like to be on the waitlist for?</p>
                <br/>
                <div class="left">
                    <input type="checkbox" id="newsletter" name="newsletter" value="Newsletter">
                    <label for="newsletter"> Newsletter</label>
                    <br/>
                    <input type="checkbox" id="analytics" name="analytics" value="Analytics">
                    <label for="analytics"> Analytics</label>
                    <br>
                    <input type="checkbox" id="scheduler" name="scheduler" value="Scheduler">
                    <label for="scheduler"> Scheduler</label>
                </div>
                <br>
                <p>Which platforms do you currently use?</p>
                <br/>
                <div class="left">
                    <input type="checkbox" id="Uber" name="Uber" value="Uber">
                    <label for="Uber"> Uber</label>
                    <br/>
                    <input type="checkbox" id="Lyft" name="Lyft" value="Lyft">
                    <label for="Lyft"> Lyft</label>
                    <br>
                    <input type="checkbox" id="Uber_Eats" name="Uber_Eats" value="Uber_Eats">
                    <label for="Uber_Eats"> Uber Eats</label>
                    <br>
                    <input type="checkbox" id="Postmates" name="Postmates" value="Postmates">
                    <label for="Postmates"> Postmates</label>
                    <br>
                    <input type="checkbox" id="DoorDash" name="DoorDash" value="DoorDash">
                    <label for="DoorDash"> DoorDash</label>
                    <br>
                    <input type="checkbox" id="Grubhub" name="Grubhub" value="Grubhub">
                    <label for="Grubhub"> Grubhub</label>
                    <br>
                    <input type="checkbox" id="other" name="other" value="other">
                    <label for="other"> Other</label>
                    <br/>
                    <div id="otherDiv" style="display:none;">
                        <p>Other: </p>
                        <input id="otherPlatform" type="text"/>
                    </div>
                </div>
                <br/>
                <p>City: </p>
                <input id="city" type="text"/>
                <br/>
                <p>State: </p>
                <select id="state">
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
                <br/>
                <div class="buttons">
                    <button onclick="saveEmail()" class="btn btn-success">Join</button>
                </div>
                <br/>
                <p id="response"></p>
            </div>
		</section>
        <script>
            $(function() {
                $("#waitlist").css({"background-color": "#800000", "color": "#fff"});
                $("#other").change(function() {
                    if($(this).is(":checked")) {
                        $("#otherDiv").show();
                    } else {
                        $("#otherPlatform").val("");
                        $("#otherDiv").hide();
                    }
                });
            });
        </script>
        <script src="js/mogle.js"></script>
        <script src="js/mogle/waitlist.js"></script>
    </body>
</html>