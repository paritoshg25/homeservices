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

<head>
    <link rel="stylesheet" href="./css/loader.css">
</head>

<style>
    .card {
        background: linear-gradient(322deg, #82afbd, #20395f);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgb(0 0 0 / 19%);
    }

    /* loading gif css */
    /* #preloader{
        background: url(images/spinner-1s-200px(1).gif) no-repeat center center;
        height: 100vh;
        width: 100%;
        position: fixed;
        z-index: 100;
    } */
</style>


<script>
    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
            document.querySelector("body").style.visibility = "hidden";
            document.querySelector("#loader").style.visibility = "visible";
        } else {
            document.querySelector("#loader").style.display = "none";
            document.querySelector("body").style.visibility = "visible";
        }
    };
</script>


<body>

    <div class="loader" id="loader">
        <img src="images/loading.gif" alt="loading..." />
    </div>


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

    <!-- loading gif -->
    <!-- <div id="preloader"></div> -->

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
                        <label for="">Time (Between 8 a.m. to 8 p.m.)</label>
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
</body>
<script type="text/javascript">
    // window.addEventListener("load", function() {
    //     const loader = document.querySelector(".loader");
    //     loader.className += " hidden";
    // });
</script>


<?php include_once "include/footer.php"; ?>