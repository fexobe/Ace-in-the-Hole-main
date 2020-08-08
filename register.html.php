<?php include 'header.html.php'; ?>
    <body>
        <main>
          <h1>Registration Form</h1>

          <form class="registration" action="register_form.php" method="post">

            <input type="text" id="name" name="name" placeholder="Full name.."><br><br>

            <input type="text" id="email" name="email" placeholder="E-mail.."><br><br>

            <input type="text" id="phone" name="phone" placeholder="Phone Number.."><br><br>

            <input type="text" id="house" name="house" placeholder="House number.."><br><br>

            <input type="text" id="street" name="street" placeholder="Street Name.."><br><br>

            <input type="text" id="city" name="city" placeholder="Name of city.."><br><br>

            <input type="text" id="state" name="state" placeholder="Name of State.."><br><br>

            <input type="text" id="zip" name="zip" placeholder="Zip code.."><br><br>

            <input type="text" id="event" name="event" placeholder="Event name.."><br><br><br>

            <Button type="submit" name="submit">Submit form</Button>
            <br>
      
          </form>
        </main>
        <?php include 'footer.html.php';?>
    </body>