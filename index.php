<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
  <link href="style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="50">

<!--Navigasi bar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>                      
      </button>
      <a class="navbar-brand" href="#home">Company</a>
    </div>

    <div class="navbar-all">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT</a>
          <ul class="dropdown-menu">
            <li><a href="#">HISTORY</a></li>
            <li><a href="#">VISION MISSION</a></li>
          </ul>
        </li>        
        <li><a href="#">OUR WORK</a></li>
        <li><a href="#">OUR TEAM</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
    </div>
    </div>

  </div>
</nav>

<!-- Images Slider -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/bg.jpg" alt="slider1" width="1200" height="400">
        <div class="carousel-caption">
          <p><strong>THIS IS A PLACE WHERE TECHNOLOGY & <br>
          CREATIVITY FUSED INTO DIGITAL CHEMISTRY</strong></p>
        </div>      
      </div>

      <div class="item">
        <img src="images/rsz_bg1.jpg" alt="slider2" width="1200" height="400">
        <div class="carousel-caption">
          <p><strong>WE DON'T HAVE THE BEST BUT WE HAVE THE <br>
          GREATEST TEAM</strong></p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="margin-left: -90px;"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="margin-right: -90px;"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (Our Values Section) -->
<div class="bg-1">
  <div class="container">
    <h3 class="text-center"><strong>OUR VALUES</strong></h3>
    <div class="row text-center">

      <div class="col-sm-4">
        <div class="thumbnail" style="background-color: #f17f7f; border: 2px solid #ff6666;">
          <img src="images/lightbulb-o.png" alt="innovative" width="15" height="15">
          <h4><strong>INNOVATIVE</strong></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maxime exercitationem dolorem deserunt, unde, eaque ipsa?</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="thumbnail" style="background-color: #669966; border: 2px solid #339966;">
          <img src="images/bank.png" alt="loyalty" width="20" height="20">
          <h4><strong>LOYALTY</strong></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Impedit similique eum itaque facere temporibus dolores.</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="thumbnail" style="background-color: #6699cc; border: 2px solid #3366cc;">
          <img src="images/balance-scale.png" alt="respect" width="25" height="25">
          <h4><strong>RESPECT</strong></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequatur,sit? Tenetur et neque quod incidunt!</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Us Section) -->
<div id="contact" class="container">
  <h3 class="text-center">CONTACT US</h3>
 
    <div class="col-sm-6 col-sm-offset-3">
      <form id="contact_form" method="post" action=" ">
		
		<!-- Text input-->
        <div class="form-group">
          <label class="control-label">Name</label>
          <input name="name" class="form-control" type="text" required>
        </div>

		<!-- Text input-->
        <div class="form-group">
          <label class="control-label">Email</label>
          <input name="email" class="form-control" type="email" required>
        </div>
		
		<!-- Text area -->
        <div class="form-group">
          <label class="control-label">Message</label>
          <textarea name="messages" class="form-control" rows="5" required></textarea>
        </div> 
       
		<!-- Success message -->
		<div class="alert alert-success" role="alert" id="success_message">Success 
			<i class="glyphicon glyphicon-thumbs-up"></i> 
			Thanks for contacting us, we will get back to you shortly.
		</div>

		<!-- Button -->
	    <div class="form-group">
        <button class="btn" type="submit">SUBMIT</button>
		</div>
		
      </form>        
    </div> 
</div>


<!-- Footer -->
<footer class="text-center">
  <p>Copyright &copy; 2016. PT Company</p>
  <div class="socialmedia">
  <p>
  <a href="#"><img src="images/facebook-official.png" alt"facebook" width="30px" height="30px"><i class="icon-facebook"></i></a>
  <a href="#"><img src="images/twitter.png" alt"twitter" width="30px" height="30px"><i class="icon-twitter"></i></a>
  </p>
  </div>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar link
  $(".navbar a").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });

  });

  // Hover dropdown
  $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(100);
  });
  
  //Validator Contact Form
  $('#contact_form').bootstrapValidator({
        fields: {
            name: {
                validators: {
                    notEmpty: {
						message: 'This field is required.'
                    }
                }
            },
   
            email: {
                validators: {
                    notEmpty: {
                        message: 'Invalid email address.'
                    },
                    emailAddress: {
                        message: 'Invalid email address.'
                    }
                }
            },
            
            messages: {
                validators: {
                    notEmpty: {
                        message: 'This field is required.'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        $('#success_message').slideDown({ opacity: "show" }, "slow")
        $('#contact_form').data('bootstrapValidator').resetForm();

        // Prevent form submission
        e.preventDefault();

        // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');

        // Use Ajax to submit form data
        $.post($form.attr('action'), $form.serialize(), function(result) {
            console.log(result);
        }, 'json');
    });
  
})
</script>


</body>
</html>
