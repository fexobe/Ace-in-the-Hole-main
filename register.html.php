<?php include 'header.html.php'; ?>
    <body>
        <main>
          <h1>Registration Form</h1>

          <form class="registration" action="register.html.php" method="post">

            <input type="text" id="name" name="name" placeholder="Full name.." required><br><br>

            <input type="text" id="age" name="age" placeholder="age.." required><br><br>
            
            <label for="role">*Role:</label><br><br>
          <select size="1" name="role" id="role">
            <option>Select an role</option>
            <option value="athlete">Athlete</option>
            <option value="volunteer">Volunteer</option>
         </select>
<br>
<br>

            <input type="text" id="phone" name="phone" placeholder="Phone Number.." required><br><br>

            <input type="text" id="email" name="email" placeholder="Email Address.." required ><br><br>

            <input type="text" id="emergency" name="emergency" placeholder="Emergency Contact Name.."required><br><br>

            <input type="text" id="" name="contact" placeholder="Emergency Contact Phone Number.." required><br><br>

            <label for="gender">*Gender:</label><br><br>
            <select size="1" name="gender" id="gender">
              <option>Select an gender</option>
              <option value="female">Female</option>
              <option value="male">Male</option>
              <option value="other">Non-binary/Other</options>
           </select>

        <br>
        <br>

<!--tshirts-->
        <label for="tshirt">*T-shirt Size:</label><br><br>
            <select size="1" name="tshirt" id="tshirt">
              <option>Select an T-shirt size</option>
              <option value="small">Small</option>
              <option value="medium">Medium</option>
              <option value="large">Large</option>
              <option value="extra-large">Extra Large</options>
            </select>
        <br>
        <br>

<!--Saturday-->
        <label for="saturday">*Saturday Events Registering For:</label><br><br>
            <select size="1" name="saturday" id="saturday">
              <option>Select Event</option>
              <option value="long">Long Course Triathlon: 7:00am</option>
              <option value="olympic">Olympic Triathlon: 7:30am</option>
              <option value="marathon">Half Marathon: 7:15am</option>
            </select>          
            <br>
            <br>

<!--Sunday-->
            <label for="sunday">*Sunday Events Registering For:</label><br><br>
            <select size="1" name="sunday" id="sunday">
              <option>Select Event</option>
              <option value="sprint">Sprint Thriathlon: 8:00am</option>
              <option value="try">Try-a-Tri: 8:20am</option>
              <option value="splash">Splash n Dash: 12:00pm </option>
            </select>
            
            <br>
            <br>
          
          <br>
            <label for="special">*Special accomidations needed:</label><br><br>
            <textarea id="special" name="special" rows="6" cols="70">
          
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
                $age = $_POST['age'];
                $role = $_POST['role'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $emergency = $_POST['emergency'];
                $contact = $_POST['contact'];
                $gender = $_POST['gender'];
                $tshirt = $_POST['tshirt'];
                $saturday = $_POST['saturday'];
                $sunday = $_POST['sunday'];
                $special = $_POST['special'];


                $sql = "INSERT INTO registration (name, age, role, phone, email, emergency, contact, gender, tshirt, saturday, sunday, special) VALUES ('{$name}', '{$age}','{$role}','{$phone}','{$email}','{$emergency}','{$contact}','{$gender}','{$tshirt}', '{$saturday}','{$sunday}','{$special}')";
                
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