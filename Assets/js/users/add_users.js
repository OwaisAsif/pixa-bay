$("#addUserForm").submit(function (e) {
    e.preventDefault();

    let data = new FormData(this);
        data.append("request-type", "add_user"); 


    $.ajax({
        url: "http://localhost/PIXA-BAY/app/RequestManager/RequestManager.php?request-type=add_user",
        method: "POST",
        data: data,
        dataType: "json",
        processData: false,
        contentType: false,

        success: function (response) {
             if (response.success) {
                swal("Added!", "User added successfully.", "success");

                $("#AddUser").modal("hide"); 


                listAllUsers();
            } else {
                swal("Error", "Failed to add user", "error");
            }
            console.log("Response:", response);
        },
        error: function (xhr, _, e) {
            console.error("AJAX Error:", e, xhr.responseText);
                        swal("Error", "Something went wrong!", "error");

        }
    });
});