<?php 
    session_start();
    $secret = rand();
    $_SESSION["secret"] = $secret;
?>
<html>
<head>
<title>All Refrigeration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/site.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
</head>
<body>
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="index.html">
                        <img src="images/logo2.png" alt="All Refrigeration Logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>


<section id="contact-form" class="bottom15 inverse">
    <div class="container">
        <h3 class="title">Service Request</h3>
    </div>
</section>
<section id="form" class=" bottom15">
    <div class="container">
        <form method="POST" action="s.php">
            <input type="hidden" name="secret" value="<?=$secret?>">
            <div class="form-group">
                <label for="name">Name (*)</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="true">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="phone" class="form-control" id="phone" name="phone" placeholder="0404-123-123">
            </div>                
            <div class="form-group">
                <label for="service">Service required for</label>
                <select class="form-control" id="service" name="service">
                <option>Cold Room</option>
                <option>Freezer Room</option>
                <option>Display Cabinet</option>
                <option>Display Fridge</option>
                <option>Display Freezer</option>
                <option>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Message (*)</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Describe your issue here" required="true"></textarea>
            </div>
            <a class="btn btn-lg btn-info" href="index.html">Cancel</a>
            <button type="submit" class="btn btn-lg btn-primary right" name="submit">Send</button>
        </form>
    </div>
</section>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script
  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" >
</script>

</body>
</html>