<?php
    include_once "scripts/checklogin.php";
    include_once "include/header.php";
    include_once "scripts/DB.php";

    if (!check("admin")) {
        header('Location: logout.php');
        exit();
    }

    $stmt = DB::query("SELECT * FROM providers");

    $providers = $stmt->fetchAll(PDO::FETCH_OBJ);

    include_once "msg/managehall.php";
?>
<style>
     #admin-manage-provider {
        color: rgb(255, 255, 255);
        border-bottom: 4px solid #ffffff;
    }
</style>
<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <h2 class="text-center"> Providers </h2>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Profession</th>
                <th>Action</th>
            </tr>
            <?php foreach ($providers as $provider): ?>
            <tr>
                <td>
                    <img style="height: 150px"
                        src="images/<?= $provider->photo; ?>"
                        alt="photo">
                </td>
                <td><?= ucwords($provider->name) ?>
                </td>
                <td><?= $provider->contact; ?>
                </td>
                <td>
                    <?= ucwords($provider->adder1) ?>,<br>
                    <?= ucwords($provider->adder2) ?>,<br>
                    <?= ucwords($provider->city) ?>
                </td>
                <td><?= ucwords($provider->profession) ?>
                </td>
                <td>
                    <form action="deletehall.php" method="post">
                        <input type="hidden" name="id"
                            value="<?= $provider->id ;?>">
                        <button type="submit" name="remove" onclick="return deleteBooking()" class="btn btn-danger btn-block">Remove</a>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<script>
    function deleteBooking(){
        return confirm('Are you sure you want to remove it?');
    }
</script>

<?php include_once "include/footer.php";

