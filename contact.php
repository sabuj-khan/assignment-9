<?php 
    if(isset($_POST['send'])){
        $error = array();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if( $name == NULL ){
            $error['name'] = "Name is required";
        }
        if( $email == NULL ){
            $error['email'] = "Email Address is required";
        }
        if( $subject == NULL ){
            $error['subject'] = "Subject is required";
        }
        if( $message == NULL ){
            $error['message'] = "Message is required";
        }

        if( count($error) == 0 ){
            $success = "Your message has been sent successfully.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Me</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="header-area">
                    <div class="logo-area">
                        <a href="index.php">
                            <img src="images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="menu-area">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="blogs.php">Blog</a></li>
                                <li class="current"><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <header class="contact-header">
        <div class="header-content">
            <h1>contact us</h1>
        </div>
    </header>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-area">
                    <div class="contact-head">
                        <h2>Get In Touch</h2>
                        <p>If you are in need of any help,<br> please feel free to send me message any time</p>
                        <hr>
                    </div>
                    <div class="contact-form">
                        <form action="" method="POST">
                            <label for="name">Full Name</label> <br>
                            <input type="text" name="name" id="name"> <br>
                            <div class="error">
                                <?php
                                    if(isset($error['name'])){
                                        echo $error['name'];
                                    }
                                ?>
                            </div>
                            <label for="email">Email Address</label> <br>
                            <input type="email" name="email" id="email"> <br>
                            <div class="error">
                                <?php
                                    if(isset($error['email'])){
                                        echo $error['email'];
                                    }
                                ?>
                            </div>
                            <label for="subject">Subject</label> <br>
                            <input type="text" name="subject" id="subject"> <br>
                            <div class="error">
                                <?php
                                    if(isset($error['subject'])){
                                        echo $error['subject'];
                                    }
                                ?>
                            </div>
                            <label for="message">Your Message</label> <br>
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                            <div class="error">
                                <?php
                                    if(isset($error['message'])){
                                        echo $error['message'];
                                    }
                                ?>
                            </div>
                            <input type="submit" value="Send" name="send">
                        </form>
                        <div class="success">
                            <?php
                                if(isset($success)){
                                    echo "<p>".$success."</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-area">
                    <hr>
                    <p class="border-top mb-0 mt-4 pt-3 small">&copy; 2023, Shobuj created by <a href="index.php" class="text-muted font-weight-bold" target="_blank">Shobuj. </a>  All rights reserved </p> 
                </div>
            </div>
        </div>
    </footer>
</body>
</html>