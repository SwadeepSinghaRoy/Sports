<?php
  require_once '../config.php';
  $stmt=$pdo->prepare('select * from country');
  $stmt->execute();
  $countrys= $stmt->fetchAll(PDO::FETCH_ASSOC);

  $stmt=$pdo->prepare('select * from ');
  $stmt->execute();
  $countrys= $stmt->fetchAll(PDO::FETCH_ASSOC);
  //print_r($country);
?> 
<form class="row g-3">
  <div class="col-4">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Name">
  </div>
  <div class="col-4">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="text" class="form-control" id="inputPassword4" placeholder="Email">
  </div>
  <div class="col-4">
    <label for="inputAddress" class="form-label">Password</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Password">
  </div>
  <div class="col-1">
    <label for="inputAddress2" class="form-label">Age</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Age">
  </div>
  <div class="col-4">
    <label for="inputCity" class="form-label">Country</label>
    <select id="inputState" class="form-select">
      <option selected>Choose your country</option>
      <?php
        foreach ($countrys as $country) {
          echo '<option value='.$country['id'].'>'.$country['name'].'</option>';
        }
      ?>
    </select>
  </div>
  <div class="col-2">
    <label for="inputState" class="form-label">Experience</label>
    <input type="number" class="form-control" min="0" id="inputAddress2" placeholder="Experience">
  </div>
  <div class="col-4">
    <p>click on "choose" button to upload your image</p>
    <input type="file" id="myfile" name="filename">
    <input type="submit">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>