function saveEmail() {
    const email = $("#email").val();
    const newsletter = $("#newsletter").is(":checked");
    const analytics = $("#analytics").is(":checked");
    const scheduler = $("#scheduler").is(":checked");
    const features = [newsletter, analytics, scheduler];
    const Uber = $("#Uber").is(":checked");
    const Lyft = $("#Lyft").is(":checked");
    const Uber_Eats = $("#Uber_Eats").is(":checked");
    const Postmates = $("#Postmates").is(":checked");
    const DoorDash = $("#DoorDash").is(":checked");
    const Grubhub = $("#Grubhub").is(":checked");
    const other = $("#otherPlatform").val();
    const platforms = [Uber, Lyft, Uber_Eats, Postmates, DoorDash, Grubhub, other];
    const city = $("#city").val();
    const state = $("#state").val();
    const location = [city, state];
    if(email == "") {
        $("#response").html("Please enter your email");
    }
    else if(newsletter == "" && analytics == "" && scheduler == "") {
        $("#response").html("Please select features to be on the waitlist for");
    }
    else if(Uber == "" && Lyft == "" && Uber_Eats == "" && Postmates == "" && DoorDash == "" && Grubhub == "" && other == "") {
        $("#response").html("Please select your platform(s)");
    }
    else if(city == "" || state == "") {
        $("#response").html("Please enter your city and state");
    } else {
        $("#response").html("Successfully added to the waitlist");
        $.ajax({
            url: "AJAX/waitlist.php",
            method: "POST",
            data: {
                email: email,
                features: features,
                platforms: platforms,
                location: location
            },
            timeout: 0,
            success: (data) => {
                $("#response").html(data);
            },
            error: (xhr, status, error) => {
                $("#response").html(xhr.responseText);
            },
        });
    }
}