<link rel="stylesheet" href="css/contact-form.css">
<script src="js/contact-form.js"></script>
<div>
        <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Contact Us Today!</legend>

<!-- Text input-->

<div class="form-group">
  <div class="col-md-12 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control width-100"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
      <textarea name="" id="" cols="50" rows="10" placeholder="Message Here..."></textarea>
    </div>
  </div>
</div>



<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group" id="btnSend">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
</div>

</fieldset>
</form>
</div>
      