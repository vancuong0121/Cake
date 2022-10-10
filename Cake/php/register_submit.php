<?php 
    session_start();
    include 'config.php';

    if(isset(
        $_POST['submit']) 
        && $_POST["firstName"] != "" 
        && $_POST["lastName"] != "" 
        && $_POST["email"] != "" 
        && $_POST["birthday"] != "" 
        && $_POST["postcode"] != "" 
        && $_POST["password"] != "" 
        && $_POST["confirmpassword"] != "" 
        && $_POST["check"] != "" 
    ){
    // Thực hiện xử lý khi người dùng ấn nút register và điền đầy đủ thông tin
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $birthday = $_POST["birthday"];
    $postcode = $_POST["postcode"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $check = $_POST["check"];

        if ( $password != $confirmpassword) {
            $_SESSION["message"] = "Password nhap khong chinh xac";
            header("Location: login.php");
            die();
        };

        $sql = "SELECT * FROM user WHERE email = '$email'";
        $old = mysqli_query($connection,$sql);
        $password = md5($password);

        if(mysqli_num_rows($old) > 0){
            $_SESSION["message"] = "User da ton tai";
            header("Location: login.php");
            die();
        };

        $sql = "INSERT INTO user (email,password,firstName,lastName,birthday,postcode) VALUES ('$email','$password','$firstName','$lastName','$birthday','$postcode')";
        mysqli_query($connection,$sql);
        echo $_SESSION["name"];
        // $_SESSION["message"] = "Dang ky thanh cong";

        echo "<br/> Dang ky thanh cong";
        header("Location: index.php");

    }else {
        $_SESSION["message"] = "Vui long nhap day du thong tin";
        header("Location: login.php");
    };
?>

