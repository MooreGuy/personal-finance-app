<!-- Announcements and sign in -->
<div class="jumbotron">
  <div class="container">
    <div class="row">

      

      <?php 

        if($loginStatus == False){
          ?>

          <!-- Announcements -->
      <div class="col-md-7">
        <h1>Hello, world!</h1>
        <p>We are currently developing the site! Stay tuned to find out more.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Read More</a></p>
      </div>
      <!-- Sign up -->
      <div class="col-md-5">
        <h2>Sign Up!</h2>
        <form id="signUpForm" method="post">
          <div class="form-group">
            <div class="pull-left name-container">
              <label for="first_name">First Name:</label><label id="first-name-error" class="error" for="first_name"></label>
              <input name="first_name" type="text" class="form-control" id="first_name" placeholder="First Name" maxlength="64">
            </div>

            <div class="pull-right name-container">
              <label for="last_name">Last Name:</label><label id="last-name-error" class="error" for="last_name"></label>
              <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Last Name" maxlength="64">
            </div>
        
            <label for="email">Email Address:</label><label id="email-error" class="error" for="email"></label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email" >
          
         
            <label for="username">Username:</label><label id="username-error" class="error" for="username"></label>
            <input name="username" type="text" class="form-control" id="username" placeholder="New Username">
  
            <label for="password">Password:</label><label id="password-error" class="error" for="password"></label><label id="passwordConfirm-error" class="error" for="passwordConfirm"></label>
            <input name="password" type="password" class="form-control sign-in-password" id="password" placeholder="New Password" data-rule-equalto="input[id=passwordConfirm]" data-msg-equalto="Passwords do not match">
            <input name="passwordConfirm" type="password" class="form-control" id="passwordConfirm" placeholder="Confirm Password" data-rule-equalto="input[id=password]">
          </div>
          
         
        </form>
         <button type="button" class="btn btn-success pull-right btn-sign-up">Sign Up</button>
      </div>
        <?php
          }else{
        ?>
             <!-- Announcements -->
      <div class="col-md-12">
        <h1>Hello, world!</h1>
        <p>We are currently developing the site! Stay tuned to find out more.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Read More</a></p>
      </div>

        <?php
          }
        ?>
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
