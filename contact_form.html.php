<?php include 'header.html.php'; ?>

<body>
    <main>
        <h1>Contact Us</h1>
        <p>We usually respond within two business days</p>

        <form class="contact" action="contact_form.php" method="post">

            <input type="text" id="name" placeholder="Full Name..."><br><br>
            <input type="text" id="email" placeholder="E-mail.."><br><br>
            <input type="text" id="subject" placeholder="Subject.."><br><br>
            
            <textarea id="comment" name="comment">Put your comment here..</textarea>
            <br>
            <br>
            <br>

            <Button type="submit" name="submit">Submit form</Button>
            <br>

            
        </form>
    </main>
  <?php include 'footer.html.php';?>
</body>