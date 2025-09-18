$(document).on("click", ".delete-btn", function () {
    let userId = $(this).data("id");
    let row = $(this).closest("tr");

    swal({
        title: "Are you sure?",
        text: "You wont be able to recover this user!",
        icon: "warning",
        buttons: ["Cancel", "Yes, delete"],
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: "http://localhost/PIXA-BAY/app/RequestManager/RequestManager.php?request-type=delete_user",
                method: "POST",
                data: { id: userId },
                dataType: "json",
                success: function (response) {
                    console.log("Delete Response:", response);
                    
                    if (response.success) {
                        row.fadeOut();
                        Toastify({
                            text: "User deleted successfully!",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#dc3545"
                        }).showToast();
                        listAllUsers();
                    } else {
                        swal("Error", "Failed to delete user", "error");
                    }
                },
                error: function (_, xhr, e) {
      console.error(e)
                    swal("Error", "Something went wrong!", "error");
                }
            });
        } else {
            Toastify({
                text: "Delete cancelled",
                duration: 3000,
                gravity: "top",
                position: "right",
                backgroundColor: "#6c757d"
            }).showToast();
        }
    });
});
