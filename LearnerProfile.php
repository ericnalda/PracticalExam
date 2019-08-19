<?php
include 'mybootstrap.php';
?>
<!DOCTYPE html>
<html>
<head></head>
<body>

  <div class="conatiner">
    <br><br>
    <h1>Learner's Profile</h1>
    <br><br>
  </div>
  <div class="container">
    <form method="GET" action="LearnerDetail.php">

      <div class="form-group">
        <div>
          <label>First Name</label><br>
          <input type="text" name="firstname" class="form-control" required>
        </div>
        <div>
          <label>Last Name</label><br>
          <input type="text" name="lastname" class="form-control" required>
        </div>
        <div>
          <label>Birthday</label><br>
          <input type="text" name="bday" class="form-control" required>
        </div>
        <div>
          <label>Address</label><br>
          <input type="text" name="address" class="form-control" required>
        </div>
        <div>
          <label>Contact</label><br>
          <input type="text" name="email" class="form-control" required>
        </div>
        <div>
          <br><br>
          <input type="submit" value="Submit" class="btn-dafault">
        </div>



      </div>
    </form>
  </div>
</body>
</html>