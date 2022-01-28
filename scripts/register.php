    <?php

// require_once 'session.php';
require_once 'DB.php';
require_once 'helpers.php';

if (isset($_POST['register'])) {
    $input = clean($_POST);

    $name = $input['name'];
    $contact = $input['contact'];
    $email = $input['email'];
    $email1= $_POST['email'];
    $descr = $input['descr'];
    $adder1 = $input['adder1'];
    $adder2 = $input['adder2'];
    $city = $input['city'];
    $password = $input['password'];
    $profession = $input['profession'];
    $rating = 0;

    $photo = $_FILES['photo'];

    $file1 = upload($photo);

    if ($file1 === false) {
        header('Location', '../LOGIN/register-provider.php?msg=file');
        exit();
    }
    $con = mysqli_connect('localhost', 'root', '', 'services');
    $email_check = "SELECT * FROM providers WHERE email = '$email1'";
    $res = mysqli_query($con, $email_check);
    if (mysqli_num_rows($res) > 0) {
        header('Location: ../LOGIN/register-provider.php?msg=failed-already-exist');
        exit();
        // $errors['email'] = "Email that you have entered is already exist!";
    } else {


        // $sql = "INSERT INTO providers values(DEFAULT, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";

        // $isProviderCreated1 = DB::query( $sql, [
        //     $name, $contact, $email, $descr, $adder1, $adder2, $city, $password, $file1, $profession, $rating
        // ]);

        $isProviderCreated = DB::query("INSERT INTO providers values(DEFAULT, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [
            $name, $contact, $email, $descr, $adder1, $adder2, $city, $password, $file1, $profession, $rating
        ]);

        if ($isProviderCreated) {
            header('Location: ../LOGIN/register-provider.php?msg=success');
            exit();
        } else {
            unlink('../storage/' . $file1);
            header('Location: ../LOGIN/register-provider.php?msg=failed');
            exit();
        }
    }
}
