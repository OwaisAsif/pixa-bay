$.ajax({
  url: "http://localhost/PIXA-BAY/app/RequestManager/RequestManager.php?request-type=get-all-images",
  method: "GET",
  dataType: "json",
  success: function (response) {
    let html = ""
    response.users.forEach(function (user) {
      html += `
       

          <section style="padding: 20px;">
        <div class="row">
            <div class="col-3">
                <div class="row">
                    <div class="col-12"><img src="${user.image}" alt=""></div>
                    
                </div>
            </div>
           
    </section>
      `
    })
    $("section row").append(html)

  },
  error: function (_, xhr, e) {
    console.error(e)
  }
})












