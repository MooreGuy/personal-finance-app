$(document).ready(function(){

    //Add the active class to the navbar on page load
    $('.navbar-nav > li[name="home"]').addClass('active');

    //Check input for special characters
    $.validator.addMethod("FormRegex", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9_ \-\+\.\!\@\#\$\%\^\&\*\(\)\{\}\[\]\"\'\:\;\?\\\w\s\n]+$/i.test(value);
    }, "HTML characters are not allowed.");


    $('.btn-sign-up').on("click", function(){
      $('#signUpForm').submit();
    });

    $('#signUpForm').validate({
      rules: {
        first_name: {
          required: true,
          maxlength: 64,
          FormRegex: true
        },
        last_name: {
          required: true,
          maxlength: 64,
          FormRegex: true
        },
        email: {
          required: true,
          email: true,
          maxlength: 64,
          FormRegex: true
        },
        username: {
          required: true,
          maxlength: 50,
          FormRegex: true
        },
        password: {
          required: true,
          maxlength: 128,
          FormRegex: true,
          minlength: 8
        },
        passwordConfirm: {
          required: true,
          maxlength: 128,
          FormRegex: true,
        }
      },
      messages: {
        first_name: {
          required: "Required",
          maxlength: "64 character limit"
        },
        last_name: {
          required: "Required",
          maxlength: "64 character limit"
        },
        email: {
          required: "Required",
          maxlength: "64 character limit",
          email: "Must be a valid email",
          remote: "This email is already in use"
        },
        username: {
          required: "Required",
          maxlength: "50 character limit"
        },
        password: {
          maxlength: "128 character limit",
          required: "Required",
          minlength: "Must be at least 8 characters"
        },
        passwordConfirm: {
          required: "Required"
        }
      },
      validClass: "success",

      submitHandler: function(){
        

        //Check if email exists
        emailExists();

       
      }
    });

    function emailExists(){
      var email = $('#email').val();
      $.ajax({
          type: 'post',
          url: "/signup/user_exists",
          dataType: 'text',
          data: {
            email: email
          },

          success: function(){
            //If email exists
            $('#email-error').text("The email you have entered already exists");
            $('#email-error').addClass('error-show');
            $('#email').removeClass('success').addClass('error');
          },

          error: function(xhr, status, error){
            addNewUser();
          }
        });
    }

    function addNewUser(){
      var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var email = $('#email').val();
        var username = $('#username').val();
        var newPass = $('#password').val();
        var confirmPass = $('#passwordConfirm').val();
       $.ajax({
          type: 'post',
          url: "/signup/signup_form",
          dataType: 'text',
          data: {
            first_name: first_name,
            last_name: last_name,
            email: email,
            username: username,
            newPass: newPass,
            confirmPass: confirmPass
          },

          success: function(){
            window.location.href= "../user_profile/home";
          },

          error: function(xhr, status, error){
            
          }
        });
    }





    var chart = new CanvasJS.Chart("avg_phone_bill", {

    	title:{
        	text: "Average Cost of Phone Bills per Month"              
      	},

      	toolTip:{
        	content: "{label}: ${y}"
      	},
      	
      	data: [//array of dataSeries              
        { //dataSeries object

        	type: "column",
        	dataPoints: [
        		{ label: "Verizon", y: 18 },
        		{ label: "AT@T", y: 29 },
        		{ label: "Virgin", y: 40 },                                    
        		{ label: "Sprint", y: 34 }
        	]
       	}],

      	axisY:{
      		prefix: "$"
    	}    
    });

    chart.render();

    var chart = new CanvasJS.Chart("avg_cost_of_rent", {

    	title:{
        	text: "Average Cost of Phone Bills per Month"              
      	},

      	toolTip:{
        	content: "{label}: ${y}"
      	},
      	
      	data: [//array of dataSeries              
        { //dataSeries object

        	type: "column",
        	dataPoints: [
        		{ label: "Verizon", y: 18 },
        		{ label: "AT@T", y: 29 },
        		{ label: "Virgin", y: 40 },                                    
        		{ label: "Sprint", y: 34 }
        	]
       	}],

      	axisY:{
      		prefix: "$"
    	}    
    });

    chart.render();

    var chart = new CanvasJS.Chart("avg_cost_of_dining_out", {

    	title:{
        	text: "Average Cost of Phone Bills per Month"              
      	},
      	
		toolTip:{
        	content: "{label}: ${y}"
      	},

      	data: [//array of dataSeries              
        { //dataSeries object

        	type: "column",
        	dataPoints: [
        		{ label: "Verizon", y: 18 },
        		{ label: "AT@T", y: 29 },
        		{ label: "Virgin", y: 40 },                                    
        		{ label: "Sprint", y: 34 }
        	]
       	}],

      	axisY:{
      		prefix: "$"
    	}    
    });

    chart.render();

});