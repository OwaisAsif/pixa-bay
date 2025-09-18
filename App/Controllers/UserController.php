<?php
class UserController {
     
     public function getAllUsers($conn) {
    $users = [];
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }

    return ["users" => $users, "success" => true];
}
        
  public function delete_User($conn, $data) {
    try {
        $id = $data['id'];

        $sql = "DELETE FROM users WHERE id = '$id'";
        if ($conn->query($sql) === TRUE) {
            return ["success" => true, "message" => "User deleted successfully"];
        } else {
            return ["success" => false, "message" => "Error: " . $conn->error];
        }
    } catch (\Exception $e) {
        return ["success" => false, "message" => $e->getMessage()];
    }
}

    public function getUser($conn,$data){   
      
        $id = $data["id"];
        $sql = "SELECT * FROM users WHERE id = '$id'" ;
        $result = $conn->query($sql);
        $users = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $users = [...$users,$row];
            }
               
        } 
        return ["users" => $users, "success" => true];
    }    

  public function UpdateUsers($conn, $data) {
    try { 
        $id         = $data["id"];
        $first_name = $data["first_name"];
        $last_name  = $data["last_name"];
        $email      = $data["email"];
        $phone      = $data["phone"];
        $pass       = $data["pass"];      
        $gender     = $data["gender"];     

        if (!$id) {
            return ["success" => false, "message" => "Missing user id"];
        }

        $sql = "UPDATE users 
                SET first_name = '$first_name',
                    last_name  = '$last_name',
                    email      = '$email',
                    phone      = '$phone',
                    password   = '$pass',
                    gender     = '$gender'
                WHERE id = '$id'";

        if ($conn->query($sql) === TRUE) {
            return ["success" => true, "message" => "User updated successfully"];
        } else {
            return ["success" => false, "message" => "Error: " . $conn->error];
        }
    } catch (\Exception $e) {
        return ["success" => false, "message" => $e->getMessage()];
    }
}


       public function adduser($conn, $data) {
    try { 
        $first_name = $data["first_name"];
        $last_name  = $data["last_name"];
        $email      = $data["email"];
        $phone      = $data["phone"];
        $pass       = $data["pass"];
        $gender     = $data["gender"];

        $sql = "INSERT INTO users (first_name,last_name,phone,email,password,gender) 
                VALUES ('$first_name','$last_name','$phone','$email','$pass','$gender')";

        if ($conn->query($sql) === TRUE) {
            return ["success" => true, "message" => "User added successfully"];
        } else {
            return ["success" => false, "message" => $conn->error];
        }
    } catch (\Exception $e) {
        return ["success" => false, "message" => $e->getMessage()];
    }
}

}
?>