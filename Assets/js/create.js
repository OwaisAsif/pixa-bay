$(document).ready(function () {
  $("#addImageForm").on("submit", function (e) {
    e.preventDefault(); 

    let formData = new FormData(this);

    $.ajax({
      url: "http://localhost/PIXA-BAY/app/RequestManager/RequestManager.php?request-type=add_image", 
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,  
      success: function (response) {
        console.log(response);
          let res = JSON.parse(response);
          if (res.status === "success") {
    
            $("#addImageForm")[0].reset(); 
          } 
          
        
        
      },
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
  });
});
