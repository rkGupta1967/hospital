<!DOCTYPE html>
<html>

<head>
   <link rel="stylesheet" href="appointment.css">
</head>

<body>
<?php
include"database/config.php";
?>
    <h2 class="header">Appointment</h2>

    <p class="pera">For the better treatment fill up the appointment form. in between hospital time.</p>
    <form action="appointment_process.php" method="POST">
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="name">

        <label for="gender">Gender</label>
        <input type="text" id="gender" name="gender">

        <label for="age">Age</label>
        <input type="text" id="age" name="age">

        <label for="Phone">Phone</label>
        <input type="tel" id="phone" name="phone">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="disease">Disease</label>
        <input type="text" id="disease" name="disease">

        <label for="meeting-time" class="dt">Choose a time for your appointment:</label>
        <input type="datetime-local" id="meeting-time" class="dt" name="time" value="2023-10-01T19:30" />

        <h4><span class="note">Note:</span> Please insure that your all details should be correct. if we found any details not valid or Matched with your health & Id then your appointment will be canceled.</h4>
        
        <input type="submit" class="btn" value="Submit">
    </form>

</body>

</html>