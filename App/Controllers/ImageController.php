<?php
class ImageController {
    
  public function addimages($conn, $data) {
    try { 
        $name = $data["name"];  
        $description = $data["description"];       
        $categories = isset($data["category"]) ? json_encode($data["category"]) : json_encode([]); 
        $file_name = basename($_FILES["image"]["name"]);
        $temp_name = $_FILES["image"]["tmp_name"];
        $uploadDir = __DIR__ . "/../../assets/image/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); 
        }
        $targetFile = $uploadDir . $file_name;

        if (move_uploaded_file($temp_name, $targetFile)) {
            $fileMessage = "File uploaded successfully";
        } else {
            $fileMessage = "File not uploaded";
        }

        $stmt = $conn->prepare("INSERT INTO image (description, name, file, categories) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $description, $name, $file_name, $categories);

        if ($stmt->execute()) {
            return [
                "success" => true, 
                "message" => "Image added successfully", 
                "file_status" => $fileMessage
            ];
        } else {
            return [
                "success" => false, 
                "message" => $stmt->error
            ];
        }

    } catch (\Exception $e) {
        return [
            "success" => false, 
            "message" => $e->getMessage()
        ];
    }
}


   public function getAllimages($conn) {
    $images = [];
    $sql = "SELECT image.*, users.id AS user_id, users.first_name, users.last_name 
            FROM image 
            JOIN users ON image.user_id = users.id";

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
           
            if (!empty($row['categories'])) {
                $row['categories'] = json_decode($row['categories'], true);
            }
            $images[] = $row;
        }
    }

    return ["images" => $images, "success" => true];
}

        
//   public function delete_image($conn, $data) {
//     try {
//         $id = $data['id'];

//         $sql = "DELETE FROM image WHERE id = '$id'";
//         if ($conn->query($sql) === TRUE) {
//             return ["success" => true, "message" => "image deleted successfully"];
//         } else {
//             return ["success" => false, "message" => "Error: " . $conn->error];
//         }
//     } catch (\Exception $e) {
//         return ["success" => false, "message" => $e->getMessage()];
//     }
// }

//     public function getimage($conn,$data){   
      
//         $id = $data["id"];
//         $sql = "SELECT * FROM image WHERE id = '$id'" ;
//         $result = $conn->query($sql);
//         $users = array();
//         if ($result->num_rows > 0) {
//             while($row = $result->fetch_assoc()) {
//                 $usersf = [...$users,$row];
//             }
               
//         } 
//         return ["image" => $images, "success" => true];
//     }    

//   public function UpdateImages($conn, $data) {
//     try { 
//         $id         = $data["id"];
//         $first_name = $data["first_name"];
//         $last_name  = $data["last_name"];
//         $email      = $data["email"];
//         $phone      = $data["phone"];
//         $pass       = $data["pass"];      
//         $gender     = $data["gender"];     

//         if (!$id) {
//             return ["success" => false, "message" => "Missing user id"];
//         }

//         $sql = "UPDATE image 
//                 SET first_name = '$first_name',
//                     last_name  = '$last_name',
//                     email      = '$email',
//                     phone      = '$phone',
//                     password   = '$pass',
//                     gender     = '$gender'
//                 WHERE id = '$id'";

//         if ($conn->query($sql) === TRUE) {
//             return ["success" => true, "message" => "User updated successfully"];
//         } else {
//             return ["success" => false, "message" => "Error: " . $conn->error];
//         }
//     } catch (\Exception $e) {
//         return ["success" => false, "message" => $e->getMessage()];
//     }
// }



}
?>