$(document).on("click", ".edit-btn", function () {
    let userId = $(this).data("id");

  $.ajax({
                url: "http://localhost/PIXA-BAY/app/RequestManager/RequestManager.php?request-type=get-all-users",
                method: "GET",
                dataType: "json",
                success: function (response) {
                    console.log("Full response:", response);

                    if (response.success) {
                        let user = response.users.find(u => u.id == userId);

                        if (user) {
                            $("#userId").val(user.id);
                            $("#edit-firstName").val(user.first_name);
                            $("#edit-lastName").val(user.last_name);
                            $("#edit-email").val(user.email);
                            $("#edit-password").val(user.password);
                            $("#edit-phone").val(user.phone);
                            $("#edit-gender").val(user.gender);

                            $("#EditUser").modal("show");
                        }
                            
                    } 
                       
                },
                error: function (xhr, _, e) {
                    console.error("Fetch User Error:", e, xhr.responseText);
                }
            });
});


$("#EditUserForm").submit(function (e) {
    e.preventDefault();

    let data = new FormData(this);

    $.ajax({
        url: "http://localhost/PIXA-BAY/app/RequestManager/RequestManager.php?request-type=update_user",
        method: "POST",
        data: data,
        dataType: "json",
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.success) {
                swal("Updated!", "User details updated successfully.", "success");

                $("#EditUser").modal("hide"); 


                listAllUsers();
            } else {
                swal("Error", "Failed to update user", "error");
            }
        },
        error: function (xhr, _, e) {
            console.error("Update Error:", e, xhr.responseText);
            swal("Error", "Something went wrong!", "error");
        }
    });
});
