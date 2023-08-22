class LiveSearch {
    constructor(searchInputId, resultsContainerId, resultTemplate) {
        this.searchInput = $(searchInputId);
        this.resultsContainer = $(resultsContainerId);
        this.token = $('meta[name="_token"]').attr('content');
        this.resultTemplate = resultTemplate
        this.setupEventListeners();
    }

    setupEventListeners() {
        this.searchInput.on('keyup', () => {
            const valueSearch = this.searchInput.val();
            if (valueSearch.length >= 0) {
                this.performSearch(valueSearch);
            } else {
                this.clearResults();
            }
        });
    }

    performSearch(valueSearch) {
        $.ajax({
            type: "POST",
            url: window.location.pathname,
            data: {
                "value_to_search": valueSearch,
                "_token": this.token
            },
            dataType: 'json',
            success: (data) => {
                this.updateSearchResults(data);
            },
        });
    }

    clearResults() {
        this.resultsContainer.empty();
    }

    updateSearchResults(results) {
        this.clearResults();
        if (results.length > 0) {
            results.forEach((result) => {
                const resultElement = this.createResultElement(result);
                this.resultsContainer.append(resultElement);
            });
        } else {
            this.resultsContainer.html(`<td></td><td style="text-align:center">Not Found Brand With Name : "${this.searchInput.val()}"</td><td></td>`);
            results.length = 0
        }
    }

    createResultElement(result) {
        const resultElement = document.createElement('tr');
        const self = this;
        const template = this.resultTemplate(result, (idParameter, routeAction) => self.routing(idParameter, routeAction), (id) => self.createButtons(id));
        resultElement.innerHTML = template;
        return resultElement;
    }

    routing(idParameter, routeAction) {
        return `${window.location.href}/${idParameter}/${routeAction}`;
    }

    createButtons(idParameter) {
        return `
            <a href="${this.routing(idParameter, 'edit')}" class="btn btn-warning"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pen-fill" viewBox="0 0 16 16">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
          </svg></a>
            <a href="${this.routing(idParameter, 'delete')}" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-trash-fill" viewBox="0 0 16 16">
            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
          </svg></a>
        `;
    }
}

const brandSearch = new LiveSearch('#brands_search', '#brands-data', function(result, routing, createButtons) {
    return '<td>' + result.id + '</td>' +
        '<td><a href="' + routing(result.id, 'show') + '">' + result.brand_name + '</a></td>' +
        '<td>' + createButtons(result.id) + '</td>';
});

const productSearch = new LiveSearch('#product_search', '#product-data', function(result, routing, createButtons) {
    return '<td>' + result.id + '</td>' +
        '<td><a href="' + routing(result.id, 'show') + '">' + result.name + '</a></td>' +
        '<td>' + result.part_number + '</td>' +
        '<td>' + result.description + '</td>' +
        '<td>' + result.brand_id + '</td>' +
        '<td>' + result.category_id + '</td>' +
        '<td>' + result.car_year + '</td>' +
        '<td>' + createButtons(result.id) + '</td>';
});

const categorySearch = new LiveSearch('#search_category_input', '#category_data', function(result, routing, createButtons) {
    return '<td>' + result.id + '</td>' +
        '<td><a href="' + routing(result.id, 'show') + '">' + result.name + '</a></td>' +
        '<td>' + createButtons(result.id) + '</td>';
})