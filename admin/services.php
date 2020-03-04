<?php include_once "includes/head.php";
      include_once "includes/header.php";
?>

<?php
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("Location: index.php");
	}
?>
<div class="">
  <div class="container margin_60_35">
    <h2>Create Services</h2> <br>
    <div id="message-contact"></div>
      <form method="post" action="assets/contact.php" id="contactform">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input type="text" class="form-control" id="name_contact" name="title" placeholder="Service name">
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input type="text" class="form-control" id="lastname_contact" name="Address" placeholder="Address">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <input type="file" name="image" class="form-control" placeholder="Upload Image">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <textarea rows="5" id="message_contact" name="message_contact" class="form-control" style="height:100px;" placeholder="Service Description"></textarea>
            </div>
          </div>
        </div>
        <input type="submit" value="Submit" class="btn_1 add_top_20" id="submit-contact">
      </form>
  </div>
  </div>
</div>

<?php include_once "includes/foot.php"; ?>
