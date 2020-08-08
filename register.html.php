<!Doctype html>
<html lang="en">
<head>
    
    <title>Register form</title>
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

  </head>

    <body>
        <main>
          <h1>Registration Form</h1>

          <form class="registration" action="register_form.php" method="post">

            <label for="rname">Name</label>
            <input type="text" id="name" nam="name" placeholder="Full name.."><br>

            <label for="re-mail">E-mail</label>
            <input type="text" id="email" name="email" placeholder="E-mail.."><br>

            <label for="rphone">Phone Number</label>
            <input type="text" id="phone" name="phone" placeholder="Phone Number.."><br>

            <label for="rhouse">House number</label>
            <input type="text" id="house" name="house" placeholder="House number.."><br>

            <label for="rstreet">Street</label>
            <input type="text" id="street" name="street" placeholder="Street Name.."><br>

            <label for="rcity">City</label>
            <input type="text" id="city" name="city" placeholder="Name of city.."><br>

            <label for="rstate">State</label>
            <input type="text" id="state" name="state" placeholder="Name of State.."><br>

            <label for="rzip">Zip code</label>
            <input type="text" id="zip" name="zip" placeholder="Zip code.."><br>

            <label for="revent">Event</label>
            <input type="text" id="event" name="event" placeholder="Event name.."><br>

            <Button type="submit" name="submit">Submit form</Button>
            

          </form>
        </main>
    </body>
</html>