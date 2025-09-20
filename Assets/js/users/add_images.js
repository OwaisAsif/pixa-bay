$.ajax({
  url: "http://localhost/PIXA-BAY/app/RequestManager/RequestManager.php?request-type=get-all-images",
  method: "GET",
  dataType: "json",
  success: function(response) {
    response.images.forEach(function(user, index) {
      let colIndex = index % 4;

      let imgHtml = `
        <div class="col-12 mb-3">
          <img src="http://localhost/PIXA-BAY/Assets/image/${user.file}" 
               alt="${user.first_name}" 
               class="img-fluid rounded shadow-sm">
        </div>
      `;

      $(`#col-${colIndex}`).append(imgHtml);
    });
  },
  error: function(_, xhr, e) {
    console.error(e);
  }
});
