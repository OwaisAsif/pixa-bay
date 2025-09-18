function listAllUsers() {
  $.ajax({
    url: "http://localhost/PIXA-BAY/app/RequestManager/RequestManager.php?request-type=get-all-users",
    method: "GET",
    dataType: "json",
    success: function (response) {
      console.log(response)
      let html = ""
      response.users.forEach(function (user) {
        html += `
         <tr>
          <td >${user.id}</td>
          <td>${user.first_name}</td>
          <td>${user.last_name}</td>
          <td>${user.email}</td>
          <td>${user.password}</td>
          <td>${user.phone}</td>
          <td>
            <button class="btn btn-sm btn-primary edit-btn"  data-id="${user.id}">Edit</button>
            <button class="btn btn-sm btn-danger delete-btn"  data-id="${user.id}">Delete</button>
          </td>
           </tr>
      `
      })
      $("#userTable tbody").append(html)
      $("#userTable").DataTable({
         destroy: true,
        pageLength: 5,
        responsive: true
      });

    },
    error: function (_, xhr, e) {
      console.error(e)
    }


  })  
}

listAllUsers()