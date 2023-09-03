$('#confirmdeletebtn').on('click', function(event) {
    event.preventDefault()
    var form = $(this).closest("form");
    var name = $(this).data("name");
    swal.fire({
        title: `Are you sure you want to delete this Response?`,
        text: "If you delete this, it will Permanently Deleted.",
        type: "warning",
        showCancelButton: !0,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        // reverseButtons: 0,
    }).then(function(e) {
        if (e.value === true) {
            form.submit();
        } else {
            e.dismiss;
        }
    })

})


$('.product-confirm-delete').on('click', function(e) {
    e.preventDefault()
    var form = $(this).closest("form");
    var name = $(this).data("name");
    swal.fire({
        title: `Are you sure you want to delete this Product?`,
        text: "If you delete this, it will Permanently Deleted.",
        type: "warning",
        showCancelButton: !0,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        // reverseButtons: 0,
    }).then(function(e) {
        if (e.value === true) {
            form.submit();
        } else {
            e.dismiss;
        }
    })
})



$('.brand-confirm-delete').on('click', function(e) {
    e.preventDefault()
    var form = $(this).closest("form");
    var name = $(this).data("name");
    swal.fire({
        title: `Are you sure you want to delete this Response?`,
        text: "If you delete this, it will Permanently Deleted.",
        type: "warning",
        showCancelButton: !0,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        // reverseButtons: 0,
    }).then(function(e) {
        if (e.value === true) {
            form.submit();
        } else {
            e.dismiss;
        }
    })
})