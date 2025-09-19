  $.ajax({
        url: "http://localhost/PIXA-BAY/app/RequestManager/RequestManager.php?request-type=get-all-images",
        method: "GET",
        dataType: "json",
        success: function (task) {
          let html = `
            <section style="padding: 20px;">
        <div class="row">
            <div class="col-3">
                <div class="row">
                    <div class="col-12"><img src="" alt=""></div>
                    <div class="col-12"><img src=""alt=""></div>
                    <div class="col-12"><img src="" alt=""></div>
                    <div class="col-12"><img src="" alt=""></div>
                    <div class="col-12"><img src="" alt=""></div>
                    <div class="col-12"><img src="" alt=""></div>
                    <div class="col-12"><img src="" alt=""></div>
                </div>
            </div>
           
    </section>
          `
          $(".row").html(html)
        },
        error: function (err) {
          $(".row").html(`<p class="text-danger">Error loading task!</p>`)
          console.error(err)
        }
      })