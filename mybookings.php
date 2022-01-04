<?php
// include_once "./include/header.php";
include_once "scripts/checklogin.php";
include_once "scripts/DB.php";
include_once "include/header.php";
include_once "LOGIN/connection.php";

// $sql = "SELECT b.*, p.name AS provider_name FROM bookings AS b, providers AS p WHERE b.provider_id = p.id ORDER BY b.date DESC";
// $provider_id=  $_SESSION['user']->id;
$user_email = $_SESSION['email'];
$sql = "SELECT * FROM bookings WHERE email='$user_email' ORDER BY date ";
$bookings = DB::query($sql)->fetchAll(PDO::FETCH_OBJ);
// $provider_id =  $bookings->provider_id;
// $provider_name = "SELECT name from providers where id=$provider_id";
?>
<style>
    .title {
        text-align: center;
        margin-top: 20px;
    }

    #my-bookings {
        opacity: 10;
        /* background-color: white; */
        color: black !important;
        /* border-radius: 7px; */
        border-bottom: 4px solid #ffffff;
        color: rgb(255, 255, 255) !important;
    }

    body {
        height: 100vh;
    }

    p.status {
        width: 100%;
        justify-content: center;
        padding: 5px 27px;
        font-size: 1rem;

    }

    .green {
        background-color: green;
    }

    .red {
        background-color: red;
    }
</style>
<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <h2 class="text-center"> My Bookings </h2>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Booking ID</th>
                <th>Provider Name</th>
                <th>Your Address</th>
                <th>Date of Appointment</th>
                <th>Payment Method</th>
                <th>Your Queries</th>
                <!-- <th>Provider Name</th> -->
                <th>Status</th>
            </tr>
            <?php foreach ($bookings as $booking) : ?>
                <tr>
                    <td>
                        <?= $booking->id; ?>
                    </td>
                    <td>
                        <!-- <?php echo "$booking->provider_id";?> -->
                        <?php $provider_id= $booking->provider_id;
                        $provider_query = "SELECT * FROM providers where id=$provider_id";
                        $provider_name = mysqli_query($conn,$provider_query);
                        $fetch = mysqli_fetch_assoc($provider_name);
                        echo $fetch['name'];
                        ?>
                    </td>
                   
                    <td>
                        <?= $booking->adder; ?>
                    </td>
                    <td>
                        <?= $booking->date; ?>
                    </td>
                    <td>
                        <?= $booking->payment; ?>
                    </td>
                    <td>
                        <?= $booking->queries; ?>
                    </td>
                    <td>
                        <?php if ($booking->status == 'DONE') : ?>
                            <p class="status green"> Done </p>
                        <?php endif; ?>

                        <?php if ($booking->status == 'PENDING' || $booking->status == null) : ?>
                            <p class="status red"> Pending </p>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<?php include_once "include/footer.php";
