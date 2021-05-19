<form id="contactForm" method="post">
  <div class="row">
    <div class="col-md-6 form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" class="form-control" required>
    </div>
    <div class="col-md-6 form-group">
      <label for="phone">Phone</label>
      <input type="text" id="phone" name="phone" class="form-control" required>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" class="form-control" required>
    </div>
  </div>
   <div class="row">
    <div class="col-md-12 form-group">
      <label for="message">Write Message</label>
      <textarea name="message" id="message" name="message" class="form-control" cols="2" rows="4" required></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 form-group m-auto">
      <input type="submit" value="Send Message" class="btn btn-primary px-3 py-3">
    </div>
  </div>
</form>