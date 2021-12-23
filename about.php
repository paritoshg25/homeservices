<?php include_once "./include/header.php"; ?>
<style>
    body {
        background: linear-gradient(0deg, #306788, #182942);
        height: 100vh;
    }

    #about {
        opacity: 10;
        background-color: white;
        color: black !important;
        border-radius: 7px;
    }

    .card{
        background: linear-gradient(322deg, #82afbd, #20395f);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgb(0 0 0 / 19%);
    }
</style>
<div class="container">
    <div class="row">
        <div class="lottie-anime">
            <div class="center-anime">
                <!-- <lottie-player src='https://assets4.lottiefiles.com/datafiles/Hc0DflKIkYg1j3u/data.json' background='transparent' speed='0.7' loop style='width: 300px; height: 300px;z-index:50;' autoplay></lottie-player> -->
                <lottie-player src='https://assets8.lottiefiles.com/packages/lf20_99VKMQ.json' background='transparent' speed='0.7' loop style='width: 300px; height: 300px;z-index:50;' autoplay></lottie-player>
            </div>
        </div>
        <!-- <img src="images/demo.png" class="col-4 card-img-top" alt="Logo"> -->

        <div class="container col-8" style="margin-top: 50px;">
            <div class="card">
                <div class="card-header text-center">
                    <strong>VSITR</strong>
                </div>

                <div class="card-body">

                    <strong class="card-title">Project Members</strong>
                    <ul>
                        <li>Paritosh Gupta</li>
                        <li>Suraj Mehta</li>
                        <li>Tirth</li>
                        <li>Utkarsh</li>
                    </ul>
                </div>

                <div class="card-footer text-center">
                    Project-Guide: Prof. Kaushal Jani
                </div>
            </div>
        </div>
    </div>
</div>

<script src='https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js'></script>
<?php include_once "./include/footer.php"; ?>