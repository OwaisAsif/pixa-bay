    $(".side-bar-body-icons").click(function () {
        let item = $(this);
        let list = item.closest(".side-bar-body").find(".side-bar-dropdown");

        // Remove active class from all and add to the clicked one
        $(".side-bar-body-icons").not(item).removeClass("active-side-bar-body");
        item.toggleClass("active-side-bar-body");

        // Close other dropdowns
        $(".side-bar-dropdown").not(list).slideUp(300);

        // Toggle current dropdown
        list.slideToggle(300);
    });
