<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $job = $_POST['job'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $location = $_POST['location'];
    
    

    $email_from = 'geraldhab08@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "Customer Name: $name.\n".
                    "Number: $number.\n".
                    "Job Description: $job.\n".
                    "Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                    "Location: $location.\n";


    $to = "colesitecode@gmail.com";

    $headers = "From: $email_from \r\n";
    
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    //header("Location: index.html");

    //echo "Your message sent Successfully";

    echo "<script type='text/javascript'>alert('Your message sent Successfully');
    window.history.log(-1);
    </script>";
    
    echo '<script>window.location.href="index.html";</script>';

    
?>