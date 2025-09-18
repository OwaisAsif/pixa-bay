// $(document).ready(function () {
//   $("#addImageForm").on("submit", function (e) {
//     e.preventDefault(); 

//     let formData = new FormData(this);

//     $.ajax({
//       url: "../../Controllers/upload.php", 
//       type: "POST",
//       data: formData,
//       contentType: false,
//       processData: false,  
//       success: function (response) {
//         console.log(response);
//         try {
//           let res = JSON.parse(response);
//           if (res.status === "success") {
//             alert("✅ Image uploaded successfully!");
//             $("#addImageForm")[0].reset(); 
//           } else {
//             alert("❌ " + res.message);
//           }
//         } catch (e) {
//           alert("❌ Unexpected response from server.");
//         }
//       },
//       error: function (xhr, status, error) {
//         console.error(error);
//         alert("❌ Something went wrong. Please try again.");
//       },
//     });
//   });
// });
