<?php include_once "../include/background.php"; ?>

<?php
// $cities = ["Ahmednagar", "Akola", "Akot", "Amalner", "Ambejogai", "Amravati", "Anjangaon", "Arvi", "Aurangabad", "Bhiwandi", "Dhule", "Kalyan-Dombivali", "Ichalkaranji", "Kalyan-Dombivali", "Karjat", "Latur", "Loha", "Lonar", "Lonavla", "Mahad", "Malegaon", "Malkapur", "Mangalvedhe", "Mangrulpir", "Manjlegaon", "Manmad", "Manwath", "Mehkar", "Mhaswad", "Mira-Bhayandar", "Morshi", "Mukhed", "Mul", "Greater Mumbai*", "Murtijapur", "Nagpur", "Nanded-Waghala", "Nandgaon", "Nandura", "Nandurbar", "Narkhed", "Nashik", "Navi Mumbai", "Nawapur", "Nilanga", "Osmanabad", "Ozar", "Pachora", "Paithan", "Palghar", "Pandharkaoda", "Pandharpur", "Panvel", "Parbhani", "Parli", "Partur", "Pathardi", "Pathri", "Patur", "Pauni", "Pen", "Phaltan", "Pulgaon", "Pune", "Purna", "Pusad", "Rahuri", "Rajura", "Ramtek", "Ratnagiri", "Raver", "Risod", "Sailu", "Sangamner", "Sangli", "Sangole", "Sasvad", "Satana", "Satara", "Savner", "Sawantwadi", "Shahade", "Shegaon", "Shendurjana", "Shirdi", "Shirpur-Warwade", "Shirur", "Shrigonda", "Shrirampur", "Sillod", "Sinnar", "Solapur", "Soyagaon", "Talegaon Dabhade", "Talode", "Tasgaon", "Thane", "Tirora", "Tuljapur", "Tumsar", "Uchgaon", "Udgir", "Umarga", "Umarkhed", "Umred", "Uran", "Uran Islampur", "Vadgaon Kasba", "Vaijapur", "Vasai-Virar", "Vita", "Wadgaon Road", "Wai", "Wani", "Wardha", "Warora", "Warud", "Washim", "Yavatmal", "Yawal", "Yevla"];
$cities = ["Ahmedabad", "Amreli", "Anand", "Bhuj", "Bopal", "Dahod", "Godhra", "Kadi", "Kalol", "Kheda", "Mandvi", "Navsari", "Rajkot", "Vadodara"];
$services = ["Electrician", "Plumber", "Mobile Repairer", "Appliance Repair"];
?>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="style3.css">

<style>
    #register-provider {
        opacity: 10;
        background-color: white;
        color: black !important;
        border-radius: 7px;
    }
    a{
        font-size: 16px;
    }
    a:hover{
        background: none;
    }
    .bg-img {
        /* height: 170vh; */
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://businesscentre.yp.ca/documents/20515/38089/Importance+of+Search+for+Home+Services/f0b6e871-7fe7-4b97-8d66-c4f9b9be8ab9?t=1446211421000);
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        filter: blur(3px);
    }

    .container-main {
        position: absolute;
        top: 1%;
        left: 21%;
    }

    .card {
        margin-bottom: 40px;
        width: 800px;
        background: linear-gradient(0deg, #a9968ae0, #5782c1);
    }

    #register:hover{
        background: #485f85;
        border-color: #485f85;
    }

    .btn-primary{
        background-color: #6983ad;
        border-color: #6983ad;
    }
</style>


<div class="bg-img"></div>

<div class="container-main" style="margin-top: 30px; max-width: 800px;margin-bottom: 60px;">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Register as Service Provider</h3>
            </div>
            <hr>
            <?php include_once "../msg/register.php"; ?>

            <!-- <?php if (isset($_GET['msg'])) : ?>
                <?php if ($_GET['msg'] == 'success') : ?>
                    <script>
                        // alert("Registraction Successful! Please Login Again");
                        // location.replace("login-provider.php");
                    </script>
                    <div class="alert alert-success">
                        <h4>Registering</h4>
                        <p>Service provider registered.</p>
                    </div>

                <?php endif; ?>
            <?php endif; ?> -->


            <form action="../scripts/register.php" method="post"  enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <label for="">Contact No.</label>
                    <input id="contact" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="contact" type="text" class="form-control" placeholder="Contact" minlength="10" maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input id="email" name="email" type="email" class="form-control" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <label for="">Address Line 1</label>
                    <input id="adder1" name="adder1" type="text" class="form-control" placeholder="Enter Address line-1" required>
                </div>

                <div class="form-group">
                    <label for="">Address Line 2</label>
                    <input id="adder2" name="adder2" type="text" class="form-control" placeholder="Enter Address line-2" required>
                </div>

                <div class="form-group">
                    <label for="">City</label>
                    <select class="form-control" name="city" id="city">
                        <?php foreach ($cities as $city) : ?>
                            <option value="<?= $city ?>"> <?= $city ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Photo(Square Size)</label>
                    <input id="photo" name="photo" type="file" class="form-control-file" placeholder="Select Photo 1" required>
                </div>

                <div class="form-group">
                    <label for="">Add Description</label>
                    <textarea name="descr" id="descr" class="form-control" cols="30" rows="5" placeholder="Tell something about you..." required></textarea>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input id="password" name="password" type="password" class="form-control" placeholder="Enter 4 Character Password" minlength="4" required>
                </div>

                <div class="form-group">
                    <label for="">Profession</label>
                    <select class="form-control" name="profession" id="profession">
                        <!-- <option value="Electrician">Electrician</option>
                        <option value="Plumber">Plumber</option>
                        <option value="Mobile">Mobile Repairer</option> -->

                        <?php foreach ($services as $service) : ?>
                            <option value="<?= $service ?>"> <?= $service ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button style="margin-top: 30px;" class="btn btn-block btn-primary" onclick="register()" type="submit" name="register" id="register">Register</button>
            </form>

        </div>
    </div>
</div>

<script>
   setTimeout(register(),3000)
</script>


