<?php

include_once "./include/header.php";
include_once "./scripts/DB.php";

if (!isset($_GET['provider'])) {
    header('Location: index.php');
    exit();
}

$provider = DB::query("SELECT * FROM providers WHERE id=?", [$_GET['provider']])->fetch(PDO::FETCH_OBJ);

if ($provider === false) {
    header('Location: index.php');
    exit();
}

include_once "msg/booking.php";

?>
<style>
    .card {
        background: linear-gradient(322deg, #82afbd, #20395f);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgb(0 0 0 / 19%);
    }
</style>
<div class="container" style="margin-top: 30px;">
    <div class="card text-center">
        <div class="card-header">
            <h3>Details about <?= $provider->name; ?></h3>
        </div>
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col">
                    <img style="height: 250px; border-radius:0%;" src="images/<?= $provider->photo; ?>">
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <td>
                        <?= $provider->name; ?>
                    </td>
                    <th>Profession</th>
                    <td>
                        <?= $provider->profession; ?>
                    </td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>
                        <?= $provider->adder1; ?>,
                        <?= $provider->adder2; ?>
                    </td>
                    <th>City</th>
                    <td>
                        <?= $provider->city; ?>
                    </td>
                </tr>
            </table>
        </div>

    </div>
</div>


<div class="container" style="margin-bottom: 60px;margin-top: 20px;">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Book Appointment from <?= $provider->name; ?>
                </h3>
            </div>
            <hr>

            <form action="scripts/bookhall.php" method="post">
                <input type="hidden" name="provider" value="<?= $provider->id; ?>">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input id="fname" name="fname" type="text" class="form-control" placeholder="First Name" required>
                </div>

                <div class="form-group">
                    <label for="">Last Name</label>
                    <input id="lname" name="lname" type="text" class="form-control" placeholder="Last Name" required>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input id="email" name="email" type="email" class="form-control" placeholder="Email" value=" <?php echo $_SESSION['email']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="">Contact No.</label>
                    <input id="contact" name="contact" type="text" class="form-control" placeholder="Contact No." minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                </div>

                <div class="form-group">
                    <label for="">Address</label>
                    <input id="adder" name="adder" type="text" class="form-control" placeholder="Address" maxlength="255" required>
                </div>

                <div class="form-group">
                    <label for="">Date</label>
                    <input class="form-control" type="date" min=<?= date("Y-m-d") ?> name="date" id="date" required>
                </div>

                <div class="form-group">
                    <label for="">Time</label>
                    <input class="form-control" type="time" name="time" id="time" min="08:00" max="20:00" required>
                </div>

                <div class="form-group">
                    <label for="">Payment Mode</label>
                    <select class="form-control" name="payment" id="payment" required>
                        <option value="cash">Cash</option>
                        <option value="card">Debit Card</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Problem</label>
                    <textarea id="queries" name="queries" class="form-control" maxlength="255" placeholder="What is the Problem..?"></textarea>
                </div>

                <!-- loading logic -->
                <!-- <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div> -->
                <!-- loading logic -->

                <button style="margin-top: 30px" class="btn btn-block btn-primary" type="submit" name="book" id="book">Book
                    Hall</button>
            </form>

        </div>
    </div>
</div>

<?php include_once "include/footer.php";?>

<!-- <div class="loadingio-spinner-spinner-prrqg8rgorq"><div class="ldio-ysi86c5lmi">
<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
</div></div>
<style type="text/css">
@keyframes ldio-ysi86c5lmi {
  0% { opacity: 1 }
  100% { opacity: 0 }
}
.ldio-ysi86c5lmi div {
  left: 94px;
  top: 48px;
  position: absolute;
  animation: ldio-ysi86c5lmi linear 1s infinite;
  background: #4291b5;
  width: 12px;
  height: 24px;
  border-radius: 6px / 12px;
  transform-origin: 6px 52px;
}.ldio-ysi86c5lmi div:nth-child(1) {
  transform: rotate(0deg);
  animation-delay: -0.9166666666666666s;
  background: #4291b5;
}.ldio-ysi86c5lmi div:nth-child(2) {
  transform: rotate(30deg);
  animation-delay: -0.8333333333333334s;
  background: #4291b5;
}.ldio-ysi86c5lmi div:nth-child(3) {
  transform: rotate(60deg);
  animation-delay: -0.75s;
  background: #4291b5;
}.ldio-ysi86c5lmi div:nth-child(4) {
  transform: rotate(90deg);
  animation-delay: -0.6666666666666666s;
  background: #4291b5;
}.ldio-ysi86c5lmi div:nth-child(5) {
  transform: rotate(120deg);
  animation-delay: -0.5833333333333334s;
  background: #4291b5;
}.ldio-ysi86c5lmi div:nth-child(6) {
  transform: rotate(150deg);
  animation-delay: -0.5s;
  background: #4291b5;
}.ldio-ysi86c5lmi div:nth-child(7) {
  transform: rotate(180deg);
  animation-delay: -0.4166666666666667s;
  background: #4291b5;
}.ldio-ysi86c5lmi div:nth-child(8) {
  transform: rotate(210deg);
  animation-delay: -0.3333333333333333s;
  background: #4291b5;
}.ldio-ysi86c5lmi div:nth-child(9) {
  transform: rotate(240deg);
  animation-delay: -0.25s;
  background: #4291b5;
}.ldio-ysi86c5lmi div:nth-child(10) {
  transform: rotate(270deg);
  animation-delay: -0.16666666666666666s;
  background: #4291b5;
}.ldio-ysi86c5lmi div:nth-child(11) {
  transform: rotate(300deg);
  animation-delay: -0.08333333333333333s;
  background: #4291b5;
}.ldio-ysi86c5lmi div:nth-child(12) {
  transform: rotate(330deg);
  animation-delay: 0s;
  background: #4291b5;
}
.loadingio-spinner-spinner-prrqg8rgorq {
  width: 200px;
  height: 200px;
  display: inline-block;
  overflow: hidden;
  background: #f1f2f3;
}
.ldio-ysi86c5lmi {
  width: 100%;
  height: 100%;
  position: relative;
  transform: translateZ(0) scale(1);
  backface-visibility: hidden;
  transform-origin: 0 0; /* see note above */
}
.ldio-ysi86c5lmi div { box-sizing: content-box; }
/* generated by https://loading.io/ */
</style> -->