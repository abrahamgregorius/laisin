@extends('layout.app')
@section('content')


{{-- No shadow hero --}}
<div class="laisin-hero">
    <img src="{{ asset('assets/image.jpg') }}" alt="hero" loading="lazy">
    <div class="hero-text">
        <h1>Laisindo Autoparts</h1>
        <p>Welcome to Laisindo Autoparts – your trusted source for premium automotive solutions. Find genuine parts and expert advice to keep your vehicles running smoothly. Elevate your driving experience with us.</p>
        <div class="hero-buttons">
            <a href="" class="find-part">Find A Part</a>
            <a href="" class="contact">Contact</a>
        </div>
    </div>
</div>
<div class="laisin-products">
  <div class="container mx-auto">
        <div class="products-text">
            <h3 class="text-white text-center">Our Products</h3>
        </div>
        <div class="product-lists row">
            @for ($i=0; $i<3; $i++)
            <div class="col-md-4">
                <div class="product-card">
                    <div class="product-img">
                        <img class="img-product" src="https://autoimage.templines.info/wp-content/uploads/2018/10/audi_e_tron_2019_4k-1280x720-1-640x362.jpg" alt="picture">
                    </div>
                    <div class="product-description">
                        <div class="description-title">
                             Toyota
                        </div>
                        <div class="descriptions">
                              Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, quibusdam!
                        </div>
                        <div class="description-details">
                            <div class="detail detail-part">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                  </svg>
                                      112265
                            </div>
                            <div class="detail detail-brand">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                    <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
                                  </svg> 
                                      Toyota
                            </div>
                            <div class="detail detail-year">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                  </svg>
                                      2018
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        <div class="products-more">
            <a href="{{ route('products.index') }}">
                <div class="button">
                    MORE PRODUCTS 
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                    </svg>
                </div>
            </a>
            </div>
    </div>
</div>
<div class="laisin-aboutus">
    <div class="container mx-auto">
        <div class="about-us-title">
            <img class="aboutus-laisin-img" src="{{ asset('assets/laisin.png') }}" style="position: absolute; z-index:-3; height: 300px; opacity: 5%" loading="lazy">
            <h3 class="text-center">About Us</h3>
        </div>
        <div class="about-us-wrappers row">
            <div class="wrappers-left col-md-6">
                <div class="img">
                    <img src="https://autoimage.templines.info/wp-content/uploads/2018/10/g01.jpg" alt="">
                </div>
            </div>
            <div class="wrappers-right col-md-6">
               <div class="text-content">
                   <h4>We offer high quality vehicles at unbelievable prices & creates pleasant buying experience.</h4>
                   <p>Laisin is nisi aliquip consequat duis velit esse cillum dolore fugiat nulla pariatur excepteur sint occaecat. Lorem ipsum dolor sit amt consectetur adipisicing elit sed eiusmod tempor incididuntu labore et dolore magna aliqua enimad minim veniam quis nostrud area exercitation ullamco laboris nisi aliquip. Freebet Slot Duis aute irure dolor in reprehenderitn voluptate velit ese cillum dolore fugiat free chip nulla pariatur excepteur sint occaecat cupidatat non proident.
                    Duis aute irure dolor in reprehenderitn voluptate velit ese cillum dolore fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p>
                </div>
                <div class="content-promotion">
                      <div class="promotion-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f8470a" class="bi bi-tags" viewBox="0 0 16 16">
                            <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                            <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                          </svg>
                      </div>
                      <div class="promotion-text">
                        <h5>
                            Affordable Auto Prices
                          </h5>
                          <p>Laisin is nisi aliquip consequat duis velit esse</p>
                      </div>
                </div>
                <div class="content-promotion">
                      <div class="promotion-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f8470a" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                          </svg>
                      </div>
                      <div class="promotion-text">
                        <h5>
                            Trusted & Genuine Parts
                          </h5>
                          <p>Laisin is nisi aliquip consequat duis ted</p>
                      </div>
                    
                </div>
                <div class="content-promotion">
                      <div class="promotion-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#f8470a" class="bi bi-shield-check" viewBox="0 0 16 16">
                            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                            <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                          </svg>
                      </div>
                      <div class="promotion-text">
                        <h5>
                            20 Years in Bussiness
                          </h5>
                          <p>Vehicles is nisi aliquip consequat duis velit
                        </p>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="laisin-testimonials">
    <div class="container mx-auto">
          <div class="testimonials-title">
            <h3 class="text-center text-white">Testimonial</h3>
          </div>
          <div class="testi-list row">
              <div class="col-md-6">
                  <div class="testi-card">
                    <svg style="position: absolute; z-index:1; top:0; left: 0; opacity: 8%;" xmlns="http://www.w3.org/2000/svg" width="330" height="330" fill="#f8470a" class="bi bi-quote" viewBox="0 0 16 16">
                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                      </svg>
                    <div class="testi-wrappers" style="z-index: 2">
                        <div class="testi-img">
                            <img src="https://this-person-does-not-exist.com/img/avatar-gen11b86bbc4d3eafa111bd71e9a9d9fe2a.jpg" alt="person">
                        </div>
                        <div class="testi-description">
                            <h5>Jonh Doe</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nam eveniet illo, maxime culpa saepe repudiandae esse eligendi architecto deserunt?
                            </p>
                        </div>
                    </div>  
                  </div>
              </div>
              <div class="col-md-6">
                <div class="testi-card">
                    <svg style="position: absolute; z-index:1; top:0; left: 0; opacity: 8%;" xmlns="http://www.w3.org/2000/svg" width="330" height="330" fill="#f8470a" class="bi bi-quote" viewBox="0 0 16 16">
                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                      </svg>
                    <div class="testi-wrappers">
                        <div class="testi-img">
                            <img src="https://this-person-does-not-exist.com/img/avatar-gen11b86bbc4d3eafa111bd71e9a9d9fe2a.jpg" alt="person">
                        </div>
                        <div class="testi-description">
                            <h5>Faris Maulana</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nam eveniet illo, maxime culpa saepe repudiandae esse eligendi architecto deserunt?
                            </p>
                        </div>
                    </div>  
                  </div>
              </div>
          </div>
    </div>
</div>
<div class="laisin-more_info">
    <div class="container mx-auto">
        <div class="row">
            <div class="col-md-6">
                <div class="left-wrappers">
                    <div class="img">
                        <img src="https://autoimage.templines.info/wp-content/uploads/2016/10/a03.jpg" alt="img">
                    </div>
                 
                </div>        
            </div>
            <div class="col-md-6">
                <div class="right-wrappers-more-info">
                    <div class="text-buttons">
                        <div class="need-more-text">
                            <h1>Need More Info?</h1>
                        </div>
                        <div class="need-more-buttons">
                            <a href="" class="contact-us-button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                              </svg>Contact Us</a>
                            <a href="" class="find-parts-button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>Find A Parts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <img src="{{ asset("assets/image3.jpg") }}" alt="img" loading="lazy" style="position: absolute; object-fit: cover; width: 100%; height: 70%; opacity:5%; top:0; user-select: none; pointer-events: none; z-index:1">
    <div class="container mx-auto">
        
        <div class="footer-top row">
            
            <div class="footer-brands col-md-4">
                <img src="{{ asset('assets/laisin.png') }}" alt="">
            </div>
            <div class="footer-menus col-md-8">
                <ul class="menu-1">
                     <li class="menu-head">LINKS<li>
                     <li class="menu-link">Home</li>
                     <li class="menu-link">Products</li>
                     <li class="menu-link">Contact</li>
                     <li class="menu-link">Find A Parts</li>
                </ul>
                <ul class="menu-2">
                   <li class="menu-head">PRODUCTS</li>
                   <li class="menu-link">Toyota</li>
                   <li class="menu-link">Ford</li>
                   <li class="menu-link">Scania</li>
                   <li class="menu-link">Mitsubishi</li>
                </ul>
                <ul class="menu-3">
                  <li class="menu-head">OFFICE</li>
                  <li class="company-name">
                    PT. LAISINDO ANUGERAH JAYAABADI
                  </li>
                  <li class="address">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                      </svg>
                    JL. RAYA PERANCIS KOMP. PERGUD 75 BLOK J NO 3 AB, RT.004/RW.008, Benda, Kec. Benda, Kota Tangerang, Banten 15125</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container mx-auto">
                <p>Copyright © 2023 Laisindo . All Rights Reserved.</p>
            </div>
        </div>
        
    </div>
</footer>








@endsection
