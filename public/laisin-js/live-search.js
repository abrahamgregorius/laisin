class LiveSearch {
    constructor(searchInputId, resultsContainerId, resultTemplate, errorHandlingTitle) {
        this.searchInput = $(searchInputId);
        this.resultsContainer = $(resultsContainerId);
        this.token = $('meta[name="_token"]').attr('content');
        this.resultTemplate = resultTemplate
        this.currentSlug = $('.form-control').attr('alt')
        this.errorHandlingTitle = errorHandlingTitle
        this.setupEventListeners();
    }

    setupEventListeners() {
        this.searchInput.on('click', (e) => {
            const parameterToAdd = 'page=show_all';
            if (window.location.search === '?' + parameterToAdd) {
                e.preventDefault();
            } else {
                const newUrl = window.location.origin + window.location.pathname + '?' + parameterToAdd;
                window.location.href = newUrl;
            }
        });



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
        this.resultsContainer.html('<div class="loading">Loading...</div>');
        console.log(this.currentSlug)
        $.ajax({
            type: "POST",
            url: window.location.pathname,
            data: {
                "value_to_search": valueSearch,
                "current_slug": this.currentSlug,
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
                console.log(result)
                const resultElement = this.createResultElement(result);
                this.resultsContainer.append(resultElement);
            });
        } else {
            this.resultsContainer.html(`<div class="no-results">Not Found ${this.errorHandlingTitle} With Name: "${this.searchInput.val()}"</div>`);
            results.length = 0
        }
    }

    createResultElement(result) {
        const resultElement = document.createElement('tr');
        resultElement.setAttribute('class', 'table-item')
        const self = this;
        const template = this.resultTemplate(result, (idParameter, routeAction, UsingCustomUrl, Url) => self.routing(idParameter, routeAction, UsingCustomUrl, Url), (id) => self.createButtons(id));
        resultElement.innerHTML = template;
        return resultElement;
    }

    routing(idParameter, routeAction, UsingCustomUrl, Url) {
        let returnedValue;
        const urlObject = new URL(window.location.href);

        if (UsingCustomUrl) {
            urlObject.pathname = `/${Url}/${idParameter}`;
            returnedValue = urlObject.toString();
        } else {
            returnedValue = `${window.location.href}/${idParameter}/${routeAction}`;
        }

        return returnedValue;
    }


    createButtons(idParameter) {
        return `
            <a href="${this.routing(idParameter, 'edit', false)}" class="btn btn-warning"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pen-fill" viewBox="0 0 16 16">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
          </svg></a>
            <a href="${this.routing(idParameter, 'delete',false)}" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-trash-fill" viewBox="0 0 16 16">
            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
          </svg></a>
        `;
    }
}

const brandSearch = new LiveSearch('#brands_search', '#brands-data', function(result, routing, createButtons) {
    return '<td>' + result.id + '</td>' +
        '<td><a href="' + routing(result.id, 'show', false) + '">' + result.brand_name + '</a></td>' +
        '<td>' + createButtons(result.id) + '</td>';
}, 'Brand');

const productSearch = new LiveSearch('#product_search', '#product-data', function(result, routing, createButtons) {
    return '<td>' + result.id + '</td>' +
        '<td><a href="' + routing(result.id, 'show', false) + '">' + result.name + '</a></td>' +
        '<td>' + result.part_number + '</td>' +
        '<td>' + result.description + '</td>' +
        '<td>' + result.brand.brand_name + '</td>' +
        '<td>' + result.car_year + '</td>' +
        '<td>' + createButtons(result.id) + '</td>';
}, 'Product');

const categorySearch = new LiveSearch('#search_category_input', '#category_data', function(result, routing, createButtons) {
    return '<td>' + result.id + '</td>' +
        '<td><a href="' + routing(result.id, 'show', false) + '">' + result.name + '</a></td>' +
        '<td>' + createButtons(result.id) + '</td>';
}, 'Category')

const productHomepageSearch = new LiveSearch('#search_homepage_product', '#product-homepage-data', function(result, routing) {
    return '<td><a href="' + routing(result.slug, '', true, 'product') + '">' + result.name + '</a></td>' +
        '<td>' + result.part_number + '</td>' +
        '<td><a href="' + routing(result.category.slug, '', true, 'products/category') + '">' + result.category.name + '</a></td>' +
        '<td><a href="' + routing(result.brand.slug, '', true, 'products/brand') + '">' + result.brand.brand_name + '</a></td>' +
        '<td><a href="' + routing(result.car_year, '', true, 'products/year') + '">' + result.car_year + '</a></td>'
}, 'Product')

const categoryHomepageSearch = new LiveSearch('#search_category_homepage_input', '#category_homepage_data', function(result, routing) {
    return '<td><a href="' + routing(result.slug, '', true, 'products/category') + '">' + result.name + '</a></td>' +
        '<td>' + result.productCount + '</td>'
}, 'Category')

const categoryHomepageDetailSearch = new LiveSearch('#search-category-detail-search', '#category-detail-data', function(result, routing) {
    return '<td><a href="' + routing(result.slug, '', true, 'product') + '">' + result.name + '</a></td>' +
        '<td>' + result.part_number + '</td>' +
        '<td><a href="' + routing(result.category.slug, '', true, 'products/category') + '">' + result.category.name + '</a></td>' +
        '<td><a href="' + routing(result.brand.slug, '', true, 'products/brand') + '">' + result.brand.brand_name + '</a></td>' +
        '<td><a href="' + routing(result.car_year, '', true, 'products/year') + '">' + result.car_year + '</a></td>'
}, 'Category')

const brandsHomepageSearch = new LiveSearch('#search-homepage-brand', '#search-homepage-brand-data', function(result, routing) {
    return '<td><a href="' + routing(result.slug, '', true, 'products/brand') + '">' + result.brand_name + '</a></td>' +
        '<td>' + result.productCount + '</td>'
}, 'Brand')

const brandsDetailSearch = new LiveSearch('#brand-detail-search', '#brand-detail-data', function(result, routing) {
    return '<td><a href="' + routing(result.slug, '', true, 'product') + '">' + result.name + '</a></td>' +
        '<td>' + result.part_number + '</td>' +
        '<td><a href="' + routing(result.category.slug, '', true, 'products/category') + '">' + result.category.name + '</a></td>' +
        '<td><a href="' + routing(result.brand.slug, '', true, 'products/brand') + '">' + result.brand.brand_name + '</a></td>' +
        '<td><a href="' + routing(result.car_year, '', true, 'products/year') + '">' + result.car_year + '</a></td>'
}, 'Brand')

const yearHomepageSearch = new LiveSearch('#search_homepage_year', '#search_homepage_year_data', function(result, routing) {
    return '<td><a href="' + routing(result.car_year, '', true, 'products/year') + '">' + result.car_year + '</a></td>' +
        '<td>' + result.product_count + '</td>'
}, 'Year')

const yearHomepageDetailSearch = new LiveSearch('#search-homepageyearshow', '#search-homepageyearshow-data', function(result, routing) {
    return '<td><a href="' + routing(result.slug, '', true, 'product') + '">' + result.name + '</a></td>' +
        '<td>' + result.part_number + '</td>' +
        '<td><a href="' + routing(result.category.slug, '', true, 'products/category') + '">' + result.category.name + '</a></td>' +
        '<td><a href="' + routing(result.brand.slug, '', true, 'products/brand') + '">' + result.brand.brand_name + '</a></td>' +
        '<td><a href="' + routing(result.car_year, '', true, 'products/year') + '">' + result.car_year + '</a></td>'
})