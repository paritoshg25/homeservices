<?php
    include_once "scripts/checklogin.php";
    include_once "include/header.php";
    include_once "scripts/DBUser.php";

    if (!check("admin")) {
        header('Location: logout.php');
        exit();
    }

    // $stmt = DBUser::query("SELECT * FROM usertable WHERE NOT id = 1");
    $stmt = DBUser::query("SELECT * FROM usertable WHERE NOT id = 1");

    $users = $stmt->fetchAll(PDO::FETCH_OBJ);

    include_once "msg/manageuser.php";
?>
<style>
     #admin-manage-user {
        color: rgb(255, 255, 255);
        border-bottom: 4px solid #ffffff;
    }
</style>
<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <h2 class="text-center"> Users </h2>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <!-- <th>Photo</th> -->
                <th>Name</th>
                <th>Contact</th>
                <th>Address</th>
                <!-- <th>Profession</th> -->
                <th>Action</th>
            </tr>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= ucwords($user->name) ?>
                </td>
                <td><?= $user->contact; ?>
                </td>
                <td>
                    <?= ucwords($user->address) ?>,<br>
                    <?= ucwords($user->city) ?>
                </td>


                <td>
                    <form action="deleteuser.php" method="post">
                        <input type="hidden" name="id"
                            value="<?= $user->id ;?>">
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

