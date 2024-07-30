<?php


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$conn = new mysqli('localhost','root','','HopeEvent');
if($conn->connect_error){die('connection failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO HopeEvent(name,email,message)
    values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$message);
    $stmt->execute();
    echo '
        <!DOCTYPE html>
        <html>
        <head>
            <title>Thank You</title>
        </head>
        <body>
            <div style="text-align: center; margin-top: 50px;">
                <h1>The team has recieved your email</h1>
                <p>We will get back to you shortly.</p>
                <button onclick="history.back()" style="padding: 10px 20px; font-size: 16px; cursor: pointer;">Go Back</button>
            </div>
        </body>
        </html>';
    $stmt->close();
    $conn->close();
}
