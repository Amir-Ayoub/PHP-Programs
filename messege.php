<!DOCTYPE html>
<html lang="en">
       <style>
           body{
               margin: 0;
               padding: 0;
               text-align: center;
               background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5));
               background-size: cover;
               font-family: sans-serif;
           }
           contact-title{
               margin-top: 1oopx;
               color: #fff;
               text-transform: uppercase;
               transition: all 4s ease-in-out;
           }
             contact-title h1{
                 font-size: 32px;
                 line-height: 10px;
             }
             contact-title h2{
                 font-size: 16px;
             }

           
        

           }
       </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<>>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <div class="contact-title">
        <h1>SAY HELLO</h1>
        <h2>WE ARE ALWAYS READY TO SERVE YOU</h2>
        </div>


        <div class="contact-form">
         <form id="contact-form"   method="POST"action="message.php">
         <input type="name" type="text" class="form-control"placeholder="YOUR NAME"required><br>
         <input type="email" type="email" class="form-control"placeholder="YOUR EMAIL"required><br>
         <textarea name="message" class="form-control"placeholder="message"
         row="4"required></textarea><br>
         <input type="submit" class="form-control" value="SEND MESSAGE">

                </form>
                 </div>
</body>
<?php
         $name=$_POST["name"];
        $visitor_email=$_POST["email"];
        $message=$_POST["message"];

             $email_from="ratheramir101@gmail.com";

             $email_subject="New Form Submission";
             $email_body="User Name:$name.\n".
                    "User Email:$visitor_email.\n".
                    "User Message:$message.\n";


                      $to="ratheramir102@gmail.com";

                      $headers="From:$email\r\n";
                      $headers="Reply-To:$visitor_email\r\n".
                      mail($to,$email_subject,$email_body,$headers);
                      header("Location: index.html");
                      ?>
</html>