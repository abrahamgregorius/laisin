$('#brands_search').keyup(function() {
    let valueSearch = $(this).val()
    const token = $('meta[name="_token"]').attr('content')
    $.ajax({
        type: "POST",
        url: window.location.pathname,
        data: {
            "brand_to_search": valueSearch,
            "_token": token
        },
        dataType: 'json',
        success: (data) => {
            console.log(data)
        }
    })

})