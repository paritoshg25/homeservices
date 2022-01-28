<?php

include_once "./include/header.php";
// $cities = ["Ahmednagar", "Akola", "Akot", "Amalner", "Ambejogai", "Amravati", "Anjangaon", "Arvi", "Aurangabad", "Bhiwandi", "Dhule", "Kalyan-Dombivali", "Ichalkaranji", "Kalyan-Dombivali", "Karjat", "Latur", "Loha", "Lonar", "Lonavla", "Mahad", "Malegaon", "Malkapur", "Mangalvedhe", "Mangrulpir", "Manjlegaon", "Manmad", "Manwath", "Mehkar", "Mhaswad", "Mira-Bhayandar", "Morshi", "Mukhed", "Mul", "Greater Mumbai*", "Murtijapur", "Nagpur", "Nanded-Waghala", "Nandgaon", "Nandura", "Nandurbar", "Narkhed", "Nashik", "Navi Mumbai", "Nawapur", "Nilanga", "Osmanabad", "Ozar", "Pachora", "Paithan", "Palghar", "Pandharkaoda", "Pandharpur", "Panvel", "Parbhani", "Parli", "Partur", "Pathardi", "Pathri", "Patur", "Pauni", "Pen", "Phaltan", "Pulgaon", "Pune", "Purna", "Pusad", "Rahuri", "Rajura", "Ramtek", "Ratnagiri", "Raver", "Risod", "Sailu", "Sangamner", "Sangli", "Sangole", "Sasvad", "Satana", "Satara", "Savner", "Sawantwadi", "Shahade", "Shegaon", "Shendurjana", "Shirdi", "Shirpur-Warwade", "Shirur", "Shrigonda", "Shrirampur", "Sillod", "Sinnar", "Solapur", "Soyagaon", "Talegaon Dabhade", "Talode", "Tasgaon", "Thane", "Tirora", "Tuljapur", "Tumsar", "Uchgaon", "Udgir", "Umarga", "Umarkhed", "Umred", "Uran", "Uran Islampur", "Vadgaon Kasba", "Vaijapur", "Vasai-Virar", "Vita", "Wadgaon Road", "Wai", "Wani", "Wardha", "Warora", "Warud", "Washim", "Yavatmal", "Yawal", "Yevla"];
$cities = ["Ahmedabad", "Amreli", "Anand", "Bhuj", "Bopal", "Dahod", "Godhra", "Kadi", "Kalol", "Kheda", "Mandvi", "Navsari", "Rajkot", "Vadodara"];
$services = ["Electrician", "Plumber", "Mobile Repairer", "Appliance Repair"];
?>

<head>
    <link rel="stylesheet" href="./css/loader.css">
</head>

<script>

    window.addEventListener("load", function() {
        setTimeout(function() {
            const loader = document.querySelector(".loader");
            loader.className += " hidden";
        }, 300)

    });



</script>


<style>
    body {
        box-sizing: border-box;
        overflow-x: hidden;
        background: linear-gradient(0deg, #306788, #182942);
    }

    .main-background {
        background: linear-gradient(rgba(0, 0, 0, 0.18), rgba(0, 0, 0, 0.8)), url(./animation/people-renovating-house-concept.jpg);
        background-position: 50%;
        background-size: cover;
        height: 504px;
    }

    .title {
        font-family: axiforma-regular, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        height: 376px;
    }


    #find-provider {
        opacity: 10;
        /* background-color: white; */
        color: rgb(255, 255, 255);
        /* border-radius: 7px; */
        border-bottom: 4px solid #ffffff;
    }

    .center-anime {
        display: flex;
        justify-content: center;
    }

    .logo {
        /* margin-top: 20px; */
        display: flex;
        justify-content: center;
    }

    .logo img {
        height: 60rem;
    }

    hr {
        border-top: 2px solid rgb(132 215 255 / 10%);
        margin-top: 10px;
        margin-bottom: 0;
    }

    #search:hover {
        background: #485f85;
        border-color: #485f85;
    }

    /* #search:before{
        background-color: #4e74ab;
    } */

    .btn-success {
        background-color: #4e74ab;
        border-color: #4e74ab;
    }

</style>



<div class="loader" id="loader">
    <img src="animation/loading2.svg" alt="loading..." />
</div>

<div class="main">


    <section class="main-background">

        <div class="title">
            <h2 class="" style="margin-top: 20px;">Servify 24x7</h2>
            <label class="" style="font-size: 1.97rem;"><b>Best Services at Your Doorstep</b></label>
            <!-- <label class="" style="font-size: 1.6rem;"> <a href="#">Home</a>  >  <a href="#">Page</a> > Page2</label> -->
            <!-- <div class="logo"><img src="animation/logo2.png" alt=""></div> -->
            <!-- <div class="logo"><img src="./animation/Servify 24x7-logo/profile.png" alt=""></div> -->
            <!-- <div class="logo"><img src="./animation/Servify 24x7-logo/logo3.png" alt=""></div> -->
        </div>

        <!-- <div class="logo"><img src="animation/logo3.png" alt=""></div> -->

        <!-- <hr style="margin: 10px;"> -->
        <!-- <div class="lottie-anime">
                <div class="center-anime">
                    <lottie-player src='https://assets9.lottiefiles.com/packages/lf20_lkm4p8hp.json' background='transparent' speed='0.9' loop style='width: 300px; height: 300px;z-index:50;' autoplay></lottie-player>
                </div>
            </div> -->

        <div class="container" style="margin-top: 77px; margin-bottom: 60px;">


            <div class="row">
                <div class="form-group col-5">
                    <label for="">City</label>
                    <select class="form-control" name="city" id="city">
                        <option value="none">-- Select City --</option>
                        <?php foreach ($cities as $city) : ?>
                            <option value="<?= $city ?>"> <?= $city ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group col-5">
                    <label for="">Who's Required</label>
                    <select class="form-control" name="profession" id="profession">
                        <option value="none">Select Profession</option>
                        <!-- <option value="electrician">Electrician</option>
                        <option value="plumber">Plumber</option>
                        <option value="mobile">Mobile Repairer</option> -->
                        <?php foreach ($services as $service) : ?>
                            <option value="<?= $service ?>"> <?= $service ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group col-2">
                    <label for="">Action</label>
                    <button id="search" class="form-control btn btn-success" type="button">Search</button>
                </div>
            </div>

            <div class="table-responsive">
                <table id="providers" class="table">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Profession</th>
                            <th>Ratings</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan='5'>Select city and profession..</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<script src="js/jquery.js"></script>

<!-- lottie anime -->
<!-- <script src='https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js'></script> -->

<script>
    $(function() {
        $("#search").click(function() {
            var city = $("#city").val();
            var profession = $("#profession").val();

            if (city == "none" || profession == "none") {
                alert("Don't leave fields empty!");
                tbody = "<tr><td colspan='5'>please </td></tr>";
            } else {
                $.post('scripts/searchproviders.php', {
                    city: city,
                    profession: profession
                }, function(res) {
                    var providers = JSON.parse(res);
                    var tbody = "";

                    if (providers.failed == true) {
                        tbody = "<tr><td colspan='5'>No Service Providers found...</td></tr>";
                    } else {
                        providers.forEach(function(provider, i) {
                            tbody += "<tr>" +
                                "<td><img style='height:150px' src='images/" + provider
                                .photo +
                                "'/></td>" +
                                "<td>" + provider.name + "</td>" +
                                "<td>" + provider.adder1 + ",<br>" + provider.adder2 +
                                ",<br>" +
                                provider.city + "</td>" +
                                "<td>" + provider.profession + "</td>" +
                                "<td>" + provider.rating + "</td>" +
                                "<td><a href='booking.php?provider=" + provider.id +
                                "' class='btn btn-primary btn-block'style='border-radius: 7px;'>Book</a></td>";
                        });
                    }
                    $("#providers tbody").html(tbody);
                });
            }
        });
    });
</script>

<?php include_once "./include/footer.php";
