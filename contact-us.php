<?php include_once "./include/header.php"; ?>
<style>
     body{
        background: linear-gradient(0deg, #306788, #182942);
    }
    #contact-us {
        opacity: 10;
        /* background-color: white; */
        color: black !important;
        /* border-radius: 7px; */
        border-bottom: 4px solid #ffffff;
        color: rgb(255, 255, 255) !important;
    }

    .container {
        justify-content: space-around;
    }

    .card {
        width: 65% !important;
        background: linear-gradient(322deg, #82afbd, #20395f);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgb(0 0 0 / 19%);
    }

    .content {
        margin-top: 9%;
        margin-right: 65px;
    }

    .box {
        margin: 5px 0px 5px 0px;
        position: relative;
        padding: 20px 0;
        display: flex;
    }

    .icon {
        min-width: 60px;
        height: 60px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        color: black;
        border-radius: 50%;
        margin-right: 30px;
        font-size: 27px;
    }
    .icon:hover{
        transform: scale(1.2);
        transition: all 0.3s ease;
        background: #ffffffbd;
    }

    .text h3 {
        border-bottom: 1px solid #6bdce0;
        border-width: 1px;
        width: 13rem;
    }
</style>
<?php include_once "msg/message.php"; ?>
<div class="container d-flex" style="margin-top: 30px;margin-bottom: 60px;">
    <div class="content">
        <div class="box">
            <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
            <div class="text">
                <h3>Address</h3>
                <p>Kadi - 382715, <br> Gujarat, <br> India</p>
            </div>
        </div>
        <div class="box">
            <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
            <div class="text">
                <h3>Phone</h3>
                <p>999-989-999</p>
            </div>
        </div>
        <div class="box">
            <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
            <div class="text">
                <h3>Email</h3>
                <p>servify.24x7@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Contact Us</h3>
            </div>
            <hr>


            <form action="scripts/sendmessage.php" method="post">
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
                    <input id="email" name="email" type="email" class="form-control" placeholder="Email" value=" <?php echo $_SESSION['email']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="">Message</label>
                    <textarea name="message" id="message" class="form-control" cols="30" rows="5" placeholder="Message" required></textarea>
                </div>

                <button style="margin-top: 30px;" class="btn btn-block btn-primary" type="submit" name="send" id="send">Send</button>
            </form>

        </div>
    </div>
</div>

<?php include_once "./include/footer.php";
