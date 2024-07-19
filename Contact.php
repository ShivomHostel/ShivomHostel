
<?php

$error = '';
$name = '';
$email = '';
$contact = '';
$comment = '';
$address = '';
$subject='';

function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if(isset($_POST["submit"]))
{
    if(empty($_POST["name"]))
    {
        $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
    }
    else
    {
        $name = clean_text($_POST["name"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$name))
        {
            $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
        }
    }
    if(empty($_POST["email"]))
    {
        $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
    }
    else
    {
        $email = clean_text($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $error .= '<p><label class="text-danger">Invalid email format</label></p>';
        }
    }
    if(empty($_POST["contact"]))
    {
        $error .= '<p><label class="text-danger">Phone No. is required</label></p>';
    }
    else
    {
        $contact = clean_text($_POST["contact"]);
    }
    if(empty($_POST["comment"]))
    {
        $error .= '<p><label class="text-danger">Message is required</label></p>';
    }
    else
    {
        $comment = clean_text($_POST["comment"]);
    }



if(empty($_POST["address"]))
    {
        $error .= '<p><label class="text-danger">Address is required</label></p>';
    }
    else
    {
        $address = clean_text($_POST["address"]);
    }


if(empty($_POST["subject"]))
    {
        $error .= '<p><label class="text-danger">Subject is required</label></p>';
    }
    else
    {
        $subject = clean_text($_POST["subject"]);
    }




    if($error == '')
    {
        require 'class/class.phpmailer.php';
        $mail = new PHPMailer;
        $mail->IsSMTP();                                //Sets Mailer to send message using SMTP
        $mail->Host = 'localhost';      //Sets the SMTP hosts of your Email hosting, this for Godaddy
        $mail->Port = '25';                             //Sets the default SMTP server port
        $mail->SMTPAuth = true;                         //Sets SMTP authentication. Utilizes the Username and Password variables
        $mail->Username = 'info@shivomsecuranation.com';                  //Sets SMTP username
        $mail->Password = 'shivom@info';                  //Sets SMTP password
        $mail->SMTPSecure = '';                         //Sets connection prefix. Options are "", "ssl" or "tls"
        $mail->From = $_POST["email"];                  //Sets the From email address for the message
        $mail->FromName = $_POST["name"];               //Sets the From name of the message
        $mail->AddAddress('info@shivomsecuranation.com', 'ShivomSecuranation');        //Adds a "To" address
        $mail->AddCC('info@shivomsecuranation.com', $_POST["name"]);  //Adds a "Cc" address
        $mail->WordWrap = 50;                           //Sets word wrapping on the body of the message to a given number of characters
        $mail->IsHTML(true);                            //Sets message type to HTML             
        $mail->Subject = $_POST["subject"];               //Sets the Subject of the message
        $mail->Body =$_POST['name']."<br>". $_POST['comment']."<br>".$_POST['contact']."<br>". $_POST["address"] ;                //An HTML or plain text message body
        if($mail->Send())                               //Send an Email. Return true on success or false on error
        {
            $error = '<label class="text-success">Thank you for contacting us</label>';
        }
        else
        {
            $error = '<label class="text-danger">There is an Error</label>';
        }
        
$error = '';
$name = '';
$email = '';
$contact = '';
$comment = '';
$address = '';
$subject='';
    }
}

?>




<html>
<head>
    <link rel="shortcut icon" href="childs_image/shivom_logo_7V8_1.ico" />
        <title>S-trax One Step Towards Securing Generation</title>
    <link rel="stylesheet" href="myweb.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
         body {
            overflow-x: hidden;
            }
            .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1%;
        }
        .text-center {
            text-align: center;
        }
        .heading {
            font-size: 2.4vw;
            padding-top: 1%;
        }
        .map-class iframe {
            width: 100%;
            height: 400px;
            border: 0;
        }
        @media (max-width: 768px) {
            .heading {
                font-size: 5vw;
            }
            .map-class iframe {
                height: 300px;
            }
        }
        @media (max-width: 480px) {
            .heading {
                font-size: 6vw;
            }
            .map-class iframe {
                height: 200px;
            }
        }
    </style>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery.cycle.all.js" type="text/javascript"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
           
    <!-- Bootstrap CSS V4.5-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="d-flex flex-row justify-content-end pt-3 pb-2" >
        <img src="childs_image\shree-logo.webp" alt="shree-logo" width="32px" height="30px"/>
        <h1 class="shree-logo"><span class="shivom">SHIVOM</span>  GROUP</h1>
    </div>
    <div class="header" id="myHeader">
        <?php include('navbar.php');?>
    </div>

<body>

    <div class="contactimage">
        <div class="img-responsive " >
            <h2>
                <b>Get In Touch</b>
            </h2>
            <h4>
                <b>We operate from our office located in the heart of Bhopal city.
                    <br>Feel free to contact us for any support or visit our office during business hours.</b>
            </h4>
        </div>
    </div>



    <div class="col-lg-12 col-md-12 col-xs-12" style="padding-left: 42%;padding-top: 1.5%">
        <p style="font-size: 2.7vw">
            <b>Contact Us</b>
        </p>
    </div>

    <div style="height: 2vw;"></div>

    <div  style="background-color: rgba(211, 211, 211, 0.2)">
    <div class="row">
        <div class="col-12 col-md-6 col-sm-12 col-lg-4" style="border: 1px solid black">
        <div style="padding-left: 40%;padding-top: 10%">
                <img src="childs_image/phone%20logo.png" class="img-responsive" width="30%"/>
            </div>
            <div class="contact-section">
            <p style="font-size: 1.8vw;padding-top: 9%;padding-left: 1%">
                    <b>CALL US</b>
                </p>
                <p class="whyusdata">
                    <b>0755-4937957
                        <br>+91-77709-63303</b>
                </p>
            </div>
        </div>

        <div class="col-12 col-md-6 col-sm-12 col-lg-4" style="border: 1px solid black">
            <div style="padding-left: 40%;padding-top: 10%">
                <img src="childs_image/house.png" class="img-responsive" width="30%"/>
            </div>
            <div class="contact-section">
            <p style="font-size: 1.8vw;padding-top: 9%;padding-left: 1% ">
                    <b>VISIT US</b>
                </p>
                <p class="whyusdata">
                    <b>B-33, 1st floor,
                        <br>Kasturba Nagar,Near
                        <br>Chetak Bridge, Bhopal-462023</b>
                </p>
            </div>
        </div>

        <div class="col-12 col-md-12 col-sm-12 col-lg-4" style="border: 1px solid black">
            <div style="padding-left: 40%; padding-top: 10%">
                <img src="childs_image/mail.png" class="img-responsive" width="30%"/>
            </div>
            <div class="contact-section">
            <p style="font-size: 1.8vw;padding-top: 9%;padding-left:1%">
                    <b >CONTACT US</b>
                </p>
                <p class="whyusdata" style=" font-weight: bold;">contact@shivomsecuranation.com</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
        <div class="text-center">
            <p class="heading"><b>Find Us</b></p>
            <div class="map-class">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d58660.65055592322!2d77.39887795128725!3d23.232507830682255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x397c4269e09fe1bf%3A0x680f5a969dc28a6c!2sShivom%20Securanation%2C%20Choudhary%20Villa%2C%20B-33%2C%20Sector%20B%2C%20Kasturba%20Nagar%2C%20Bhopal%2C%20Madhya%20Pradesh%20462023!3m2!1d23.232504!2d77.4400797!5e0!3m2!1sen!2sin!4v1715161702734!5m2!1sen!2sin"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
        </div>
    </div>


<div id="contactform12">
    </div>

    <div style="background-color: rgba(211, 211, 211, 0.2)">
    <div style="text-align: center">
        <h3 style="padding-left: 2%; font-size: 2.7vw; padding-top: 40px; margin-top:10px">
            <b>Enquiry Here</b>
        </h3>
        <p style="padding-left: 2%; color: grey">Fields marked with an * are required</p>
    </div>
    <?php echo $error; ?>


    <form action="https://api.web3forms.com/submit" method="POST">
    <input type="hidden" name="access_key" value="dfe014a7-07a5-466e-802a-2bc28b97b5c1">
    <input type="hidden" name="redirect" value="contact-thankyou-page.html">
    <input type="hidden" name="subject" value="Hey Team New feedback for your website">

    <div style="padding-top: 20px;">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Contact Number" name="contact" required>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Address" name="address" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="form-group">
                    <textarea class="form-control" name="comment" rows="5" id="comment" placeholder="Enter Your Message" required></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="padding: 10px; text-align: center">
        <input type="submit" name="submit" value="Submit" id="button1"/>
    </div>
</form>

</div>
    <?php include('footer.php');?>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl8RlrxC7JsPVrxoaKOpIbpid3vIfX76E&callback=myMap"></script>
               
    <!-- Bootstrap CSS V4.5-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
