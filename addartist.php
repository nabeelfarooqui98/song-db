  <?php include_once("./templates/header.php"); ?>




<form method="POST" action="./queryhandler.php">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">First Name</label>
    <div class="col-10">
      <input class="form-control" type="text" value="Artisanal kale"  name="fname">
    </div>
  </div>

  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Last Name</label>
    <div class="col-10">
      <input class="form-control" type="text" value="Artisanal kale" name="lname">
    </div>
  </div>


  <div class="form-group row">
    <label for="example-date-input" class="col-2 col-form-label">Date of Birth</label>
    <div class="col-10">
      <input class="form-control" type="date" value="2011-08-19" name="dob">
    </div>
  </div>

<button type="submit" name="addartist_btn" class="btn btn-primary">Insert Artist</button>
</form>