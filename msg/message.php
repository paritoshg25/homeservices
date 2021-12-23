<?php if (isset($_GET['msg'])): ?>
<div class="container" style="margin-top: 30px">

    <?php if ($_GET['msg'] == 'success'): ?>
    <div class="alert alert-success">
        <h4>Successful <img style="height: 30px;" src="animation/check-circle.gif" alt="Successful"></h4>
        <p>Message Sent Successfully!</p>


    </div>

    <?php elseif ($_GET['msg'] == 'failed'): ?>
    <div class="alert alert-danger">
        <h4>Failed</h4>
        <p>Problem while sending your Message! Please try again later!</p>
    </div>
    <?php endif;?>

</div>
<?php endif;?>
