$('#brands_search').keyup(function() {
    let valueSearch = $(this).val()
    if (valueSearch.length >= 0) {
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
                updateSearchResults(data)
            },
        })
    } else {
        return
    }
})


const routing = (idParameter, routeAction) => {
    return `${window.location.href}/${idParameter}/${routeAction}`
}


const updateSearchResults = async(results) => {
    let searchResultContainer = $('#brands-data')
    searchResultContainer.empty();
    if (results.length > 0) {
        await results.forEach(function(result) {
            let resultElement = document.createElement('tr')
            resultElement.innerHTML = `<td>${result.id}</td><td><a href="${routing(result.id,'show')}">${result.brand_name}</a></td><td> <a href="${window.location.href + '/' + result.id + '/edit'}" class="btn btn-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                      </svg>
                                   </a>
                                   <a href="${routing(result.id,'delete')}" class="btn btn-danger">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                       <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                     </svg>
                                   </a>
                                   </td>
                                  `
            searchResultContainer.append(resultElement)
        })
    } else {
        searchResultContainer.html(`<td></td><td style="text-align:center">Not Found Brand With Name : "${$('#brands_search').val()}"</td><td></td>`)
    }
}