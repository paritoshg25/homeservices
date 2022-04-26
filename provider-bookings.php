<?php
    include_once "scripts/checklogin.php";
    include_once "scripts/DB.php";
    include_once "include/header.php";

    // $sql = "SELECT b.*, p.name AS provider_name FROM bookings AS b, providers AS p WHERE b.provider_id = p.id ORDER BY b.date DESC";
    $provider_id=  $_SESSION['user']->id;
    $sql= "SELECT * FROM bookings WHERE provider_id= $provider_id  ORDER BY date DESC" ;
    $bookings = DB::query($sql)->fetchAll(PDO::FETCH_OBJ);


    include_once "msg/admin.php";
?>
<style>
    #provider-manage-booking {
        opacity: 10;
        /* background-color: white; */
        color: black !important;
        /* border-radius: 7px; */
        border-bottom: 3px solid #ffffff;
        color: rgb(255, 255, 255) !important;
    }
    body{
        height: 100vh;
        overflow-x: hidden;
    }
    
</style>
<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <h2 class="text-center"> Bookings </h2>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Date</th>
                <th>Payment Method</th>
                <th>Queries</th>
                <!-- <th>Provider Name</th> -->
                <th>Action</th>
            </tr>
            <?php foreach ($bookings as $booking): ?>
            <tr>
                <td>
                    <?= $booking->fname; ?> <?= $booking->lname; ?>
                </td>
                <td>
                    <?= $booking->contact; ?>
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
                    <a class="btn btn-danger" style="border-radius: 7px;" onclick="return deleteBooking()" href="deletebooking-provider.php?id=<?= $booking->id; ?>" >Remove</a>
                    <!-- <a class="btn btn-danger" style="border-radius: 7px;" onclick="deleteBooking()" href="deletebooking-provider.php?id=<?= $booking->id; ?>">Remove</a> -->
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<script>
    function deleteBooking(){
        return confirm('Are you sure you want to remove it?');
    }
</script>

<?php include_once "include/footer.php";
