<?php if (isset($_GET['msg'])): ?>
<div class="container" style="margin-top: 30px">
<?php if ($_GET['msg'] == 'null'): ?>
    <div class="alert alert-info">
        <h3>No Bookings</h3>
        <p>There is No New Bookings.</p>
    </div>
    <?php elseif ($_GET['msg'] == 'success'): ?>
    <div class="alert alert-success">
        <h3>Success</h3>
        <p>Booking removed successfully.</p>
    </div>
    <?php elseif ($_GET['msg'] == 'failed'): ?>
    <div class="alert alert-danger">
        <h3>Failure</h3>
        <p>Problem while removing booking! Please try again later!</p>
    </div>
    <?php endif; ?>
</div>
<?php endif;
