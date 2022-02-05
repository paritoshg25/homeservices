<?php
include_once "scripts/checklogin.php";
include_once "include/header.php";
// include_once "scripts/DB.php";
include_once "scripts/DBUser.php";

// if (!check()) {
//     header('Location: logout.php');
//     exit();
// }


$user_email = $_SESSION['email'];
// $user_id=  $_SESSION['username']->id;
// $sql= "SELECT * FROM usertable WHERE email= $user_email O*--

$stmt = DBUser::query(
    "SELECT * FROM usertable WHERE email=?",
    [$user_email]
);
$user = $stmt->fetch(PDO::FETCH_OBJ);




// $cities = ["Ahmednagar", "Akola", "Akot", "Amalner", "Ambejogai", "Amravati", "Anjangaon", "Arvi", "Aurangabad", "Bhiwandi", "Dhule", "Kalyan-Dombivali", "Ichalkaranji", "Kalyan-Dombivali", "Karjat", "Latur", "Loha", "Lonar", "Lonavla", "Mahad", "Malegaon", "Malkapur", "Mangalvedhe", "Mangrulpir", "Manjlegaon", "Manmad", "Manwath", "Mehkar", "Mhaswad", "Mira-Bhayandar", "Morshi", "Mukhed", "Mul", "Greater Mumbai*", "Murtijapur", "Nagpur", "Nanded-Waghala", "Nandgaon", "Nandura", "Nandurbar", "Narkhed", "Nashik", "Navi Mumbai", "Nawapur", "Nilanga", "Osmanabad", "Ozar", "Pachora", "Paithan", "Palghar", "Pandharkaoda", "Pandharpur", "Panvel", "Parbhani", "Parli", "Partur", "Pathardi", "Pathri", "Patur", "Pauni", "Pen", "Phaltan", "Pulgaon", "Pune", "Purna", "Pusad", "Rahuri", "Rajura", "Ramtek", "Ratnagiri", "Raver", "Risod", "Sailu", "Sangamner", "Sangli", "Sangole", "Sasvad", "Satana", "Satara", "Savner", "Sawantwadi", "Shahade", "Shegaon", "Shendurjana", "Shirdi", "Shirpur-Warwade", "Shirur", "Shrigonda", "Shrirampur", "Sillod", "Sinnar", "Solapur", "Soyagaon", "Talegaon Dabhade", "Talode", "Tasgaon", "Thane", "Tirora", "Tuljapur", "Tumsar", "Uchgaon", "Udgir", "Umarga", "Umarkhed", "Umred", "Uran", "Uran Islampur", "Vadgaon Kasba", "Vaijapur", "Vasai-Virar", "Vita", "Wadgaon Road", "Wai", "Wani", "Wardha", "Warora", "Warud", "Washim", "Yavatmal", "Yawal", "Yevla"];
$cities = ["Ahmedabad", "Amreli", "Anand", "Bhuj", "Bopal", "Dahod" , "Godhra", "Kadi", "Kalol", "Kheda", "Mandvi", "Navsari", "Rajkot", "Vadodara"];

?>
<style>
    #provider-update-profile {
        opacity: 10;
        /* background-color: white !important; */
        color: black !important;
        /* border-radius: 7px; */
        border-bottom: 3px solid #ffffff;
        color: rgb(255, 255, 255) !important;
    }
    .card{
        background: linear-gradient(322deg, #82afbd, #20395f);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgb(0 0 0 / 19%);
    }
</style>
<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Update User Information</h3>
            </div>
            <hr>

            <form action="scripts/user-updatehall.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input value="<?= $user->name;  ?>" id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                    <input value="<?= $user->id;  ?>" id="id" name="id" type="hidden" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Contact No.</label>
                    <input value="<?= $user->contact; ?>" id="contact" name="contact" type="text" class="form-control" placeholder="Contact" minlength="10" maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input value="<?= $user->email; ?>" id="email" name="email" type="email" class="form-control" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <label for="">Address Line 1</label>
                    <input value="<?= $user->address; ?>" id="adder1" name="adder1" type="text" class="form-control" placeholder="Enter Address line-1" required>
                </div>

                <!-- <div class="form-group">
                    <label for="">Address
                        Line 2</label>
                    <input value="<?= $provider->adder2; ?>" id="adder2" name="adder2" type="text" class="form-control" placeholder="Enter Address line-2" required>
                </div> -->

                <div class="form-group">
                    <label for="">City</label>
                    <select value="<?= $user->city; ?>" class="form-control" name="city" id="city">
                        <?php foreach ($cities as $city) : ?>
                            <option value="<?= $city ?>"> <?= $city ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-2 text-center">
                            <img style=" height: 100px;" src="images/<?= $user->photo; ?>">
                            <div class="text-center">Old Photo</div>
                        </div>
                        <div class="col">
                            <label for="">New Photo</label>
                            <input id="photo" name="photo" type="file" class="form-control-file" placeholder="Select Photo 1" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input value="<?= $_SESSION['password'] ?>" id="password" name="password" type="password" class="form-control" placeholder="Enter 4 Charectar Password" minlength="4" required>
                </div>

                <button style="margin-top: 20px;" class="btn btn-success btn-block" type="submit" name="register" id="register">Update</button>
            </form>

        </div>
    </div>
</div>

<?php include_once "./include/footer.php";
