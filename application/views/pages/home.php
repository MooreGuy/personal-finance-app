<!-- Announcements and sign in -->
<div class="jumbotron">
  <div class="container">
    <div class="row">

      <!-- Announcements -->
      <div class="col-md-7">
        <h1>Hello, world!</h1>
        <p>We are currently developing the site! Stay tuned to find out more.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Read More</a></p>
      </div>

      <!-- Sign in -->
      <div class="col-md-5">
        <h2>Sign Up!</h2>
        <form action="<?php echo base_url();?>account/login_form" method="post">
          <div class="form-group">
            <div class="pull-left name-container">
              <label for="first-name">First Name:</label>
              <input type="email" class="form-control" id="first-name" placeholder="First Name">
            </div>

            <div class="pull-right name-container">
              <label for="last-name">Last Name:</label>
              <input type="email" class="form-control" id="last-name" placeholder="Last Name">
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" placeholder="New Username">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control sign-in-password" id="password" placeholder="New Password">
            <input type="password" class="form-control" id="passwordConfirm" placeholder="Confirm Password">
          </div>
          
          <button type="submit" class="btn btn-success"><strong>Sign Up</strong></button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
  

  <!-- Home Page Site Snippits Section -->
  <div class="row site_snippits">
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
    </div>
    <div class="col-md-4">
      <h2>Community Forums</h2>
      <p>Head on over to our community forums to check out money saving tips from people like you!</p>
      <p><a class="btn btn-default" href="#" role="button">Forums</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
    </div>
  </div>

  <!-- Home Page Graphs -->
  <div class="row">
    <div class="col-md-4">
      <div id="avg_phone_bill"></div>
    </div>
    <div class="col-md-4">
      <div id="avg_cost_of_rent"></div>
    </div>
    <div class="col-md-4">
      <div id="avg_cost_of_dining_out"></div>
    </div>
  </div><!-- /.row -->

</div><!-- /.container -->


<!-- home.js -->
<script type="text/javascript" src="/js/home.js"></script>s
