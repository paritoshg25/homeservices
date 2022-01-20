<?php

require_once 'helpers.php';
require_once 'DB.php';
$conn = mysqli_connect('localhost', 'root', '', 'services');
if (isset($_POST['book'])) {
    $input = clean($_POST);
 
    $provider = $_POST['provider'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $adder = $_POST['adder'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $queries = $_POST['queries'];
    $payment = $_POST['payment'];
    $status= 'PENDING';
    $sql = "INSERT INTO bookings values(DEFAULT, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
    $isBooked = DB::query( $sql, [
        $provider, $fname, $lname,$email, $contact, $adder, $date, $time, $payment, $queries, $status
    ]);


    if ($isBooked) {
        // $provider_data = DB::query("SELECT * FROM providers WHERE id=?", [$_GET['provider']])->fetch(PDO::FETCH_OBJ);
        $provider_data = DB::query("SELECT * FROM providers WHERE id=$provider")->fetch(PDO::FETCH_OBJ);
        $code = rand(999999, 111111);

        // FOR CUSTOMER
        $subject1 = "Appointment Booked Successfully";
        $message1 = "Hello, $fname $lname
        Your Appointment with our Service Provider has been booked successfully!!
        The Appointment Details are mentioned Below:

        Service Provider Name: $provider_data->name
        Contact No.:  $provider_data->contact
        Appointment Date: $date
        Appointment time: $time    

        PIN for Verification : $code

        Our Service Provider will be reach out to you very soon! Thank You. Have a nice Day.
        
        Team Home Service"; 
        $sender = "From:  servify.24x7@gmail.com";
        mail($email, $subject1, $message1, $sender);
        

        // FOR SERVICE PROVIDER
        $subject2 = "New Appointment";
        $message2 = "Hello, $provider_data->name
        
        You Got an Appointment Booked. The details have been mentioned Below:

        Customer Name: $fname $lname
        Contact No.: $contact
        Address: $adder
        Date: $date
        Time: $time
        Queries: $queries
        Payment Method: $payment

        Verification Code: $code


        Contact Us/Customer for any Query.
        Thanks,
        Team Home Service"; 
        $sender = "From: servify.24x7@gmail.com";
        mail($provider_data->email, $subject2, $message2, $sender);


        header("Location: ../booking.php?provider=$provider&msg=success");
        exit();
    } else {
        header("Location: ../booking.php?provider=$provider&msg=failed");
        exit();
    }
}
