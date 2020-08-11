<?php include 'header.html.php'; ?>

<body>
    <main>
        <h1>Contact Us</h1>
        <p>We usually respond within two business days</p>

        <form class="contact" action="contact.html.php" method="post">

            <input type="text" id="name" name="name" placeholder="Full Name..." required><br><br>
            <input type="text" id="email" name="email" placeholder="E-mail.."required><br><br>

            <br>
            <br>
            
            <label for="questions">*Questions and Comments:</label><br>
            <textarea id="questions" name="questions">
            
            </textarea>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <Button type="submit" name="submit">Submit form</Button>
            <br>

            
        </form>

        <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $questions = $_POST['questions'];

            $sql = "INSERT INTO contact (name, email, questions) VALUES ('{$name}', '{$email}', '{$questions}')";

            require_once 'dbconfig.php';

            $conn = mysqli_connect($host, $username, $password, $dbname);
              // Check connection
              if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
             }

             if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
             } else {
               echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }

                

             mysqli_close($conn);

             $conn = null;
            }

            
            ?>

    </main>
  <?php include 'footer.html.php';?>

</body>