  $.ajax({
        url: `https://jsonplaceholder.typicode.com/todos/${id}`,
        method: "GET",
        dataType: "json",
        success: function (task) {
          let html = `
            <div class="col-6">
              <div class="card shadow">
                <div class="card-body">
                  <h2 class="card-title">Task #${task.id}</h2>
                  <p class="card-text"><strong>Title:</strong> ${task.title}</p>
                  <p class="card-text"><strong>Completed:</strong> ${task.completed}</p>
                  <h4 class="card-subtitle text-muted">User ID: ${task.userId}</h4>
                </div>
              </div>
            </div>
          `
          $(".row").html(html)
        },
        error: function (err) {
          $(".row").html(`<p class="text-danger">Error loading task!</p>`)
          console.error(err)
        }
      })