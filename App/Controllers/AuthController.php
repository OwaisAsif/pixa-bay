<?php 
class AuthController {
    public function signup($conn, $data) {
        $first_name = $data["first_name"];
        $last_name = $data["last_name"];
        $email = $data["email"];
        $phone = $data["phone"];
        $pass = $data["pass"];
        $gender = $data["gender"];
        $sql = "INSERT INTO users(first_name,last_name,phone,email,password,gender) 
        VALUES ('$first_name','$last_name','$phone','$email','$pass','$gender')";
        $result = $conn->query($sql);
        header("Location: ../../views/auth/login.php");
              exit();
        $conn->close(); 
    }

    public function login($conn, $data) {
        session_start();
        $email =$data['email'];
        $pass =$data['pass']; 
        $sql = "SELECT * FROM  `users` where email = '$email'";
        $result = $conn->query($sql);   
        $user = $result->fetch_assoc();
        if(isset($user) && $user['password'] == $pass) {
            $_SESSION["logged_in_id"] = $user["id"]; 
            header("Location: ../../views/layout/main.php");
            exit();
        }
        $conn->close();
    }
    
  public function logout($conn) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../../views/auth/login.php");
    exit();
}


}



?>