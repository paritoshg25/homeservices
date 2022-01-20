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

    /* pop up css */
    .cd-popup {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s 0s, visibility 0s 0.3s;
    }

    .cd-popup.is-visible {
        opacity: 1;
        visibility: visible;
        transition: opacity 0.3s 0s, visibility 0s 0s;
    }

    .cd-popup-container {
        transform: translateY(-40px);
        transition-property: transform;
        transition-duration: 0.3s;
    }

    .is-visible .cd-popup-container {
        transform: translateY(0);
    }
</style>


<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
</style>



<script type="text/javascript">
    window.addEventListener("load", function() {
        const loader = document.querySelector(".loader");
        loader.className += " hidden";
    });

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

                    <button style="margin-top: 30px" class="btn btn-block btn-primary twoToneButton" type="submit" name="book" id="book">Book
                        Hall</button>
                </form>

                <!-- for pop up -->
                <div class="cd-popup" role="alert">
                     <div class="cd-popup-container">
                        <p>Are you sure you want to delete this element?</p>
                        <ul class="cd-buttons">
                            <li><a href="#0">Yes</a></li>
                            <li><a href="#0">No</a></li>
                        </ul>
                        <a href="#0" class="cd-popup-close img-replace">Close</a>
                    </div> <!-- cd-popup-container -->
                </div> <!-- cd-popup -->

            </div>
        </div>
    </div>
</body>

<script>
    jQuery(document).ready(function($){
	//open popup
	$('#book').on('click', function(event){
		event.preventDefault();
		$('.cd-popup').addClass('is-visible');
	});
	
	//close popup
	$('.cd-popup').on('click', function(event){
		if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
		}
	});
	//close popup when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$('.cd-popup').removeClass('is-visible');
	    }
    });
});
</script>
<?php include_once "include/footer.php"; ?>