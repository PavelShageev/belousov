

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
<section id="form" class="bottom15">
    <div class="container">
    <?php 
        session_start();
        //echo "Send script started \n\n";
        //echo "Submit state: ".$_POST["submit"]."\n";
        //echo "Secret: ".$_POST["secret"]."\n";
        //echo "Name: ".$_POST["name"]."\n";
        //echo "Email: ".$_POST["email"]."\n";
        //echo "Phone: ".$_POST["phone"]."\n";
        //echo "Service: ".$_POST["service"]."\n";
        //echo "Message: ".$_POST["message"]."\n\n";
        //echo "Session Secret: ".$_SESSION["secret"]."\n";

        if(isset($_POST['submit']) && //form submitted
            isset($_POST["secret"]) && //form has 'secret' field
            !empty($_POST["secret"]) && //'secret' field is not empty
            $_POST["secret"] == $_SESSION["secret"]) // 'secret' field from form equals stored session 'secret' 
            { 

            $to = "allrefau@gmail.com"; // this is your Email address
            //if(!empty($_POST["email"])){
            //    $from = $_POST["email"];
            //} else {
                $from = "client@allrefrigeration.com"; // this is the sender's Email address
            //}
            
            $subject = "Service Request from allrefrigeration.com.au";
            $message = "Name: " . strip_tags($_POST["name"])."\n" . 
                       "Email: ".strip_tags($_POST["email"])."\n".
                       "Phone: ".strip_tags($_POST["phone"])."\n".
                       "Service: ".strip_tags($_POST["service"])."\n".
                       "Message: \n".strip_tags($_POST["message"]);
        
            $headers = "From:" . $from;
            mail($to,$subject,$message,$headers);
        
            echo "<h3 class='title'>Message Sent</h3> <p class='text-center'> Thank you " . strip_tags($_POST["name"]) . ", we will contact you shortly. </p>";
            $_SESSION["secret"] = 0;
        } else {
            echo "<h3 class='title'>Error</h3> <p class='text-center'> Please try again later or call <a href='tel:04-17-788-564'>04-17-788-564</a> </p>";
        }
    ?>
    <p class="bottom15"></p>
    <div class="text-center">
        <a href="index.html" class="btn btn-primary btn-lg">Close</a>
    </div>
    </div>
</section>
<

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script
  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" >
</script>

</body>
</html>