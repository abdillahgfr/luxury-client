<div id="preloader" class="preloader">
  <div class="preloader-inner">
    <img src="assets/img/Frame-2.png" width="500" alt="" />
  </div>
</div>
<div class="popup-search-box">
  <button class="searchClose"><i class="fal fa-times"></i></button>
  <form action="#">
    <input type="text" placeholder="What are you looking for?" />
    <button type="submit"><i class="fal fa-search"></i></button>
  </form>
</div>
<div class="th-menu-wrapper onepage-nav">
  <div class="th-menu-area text-center">
    <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
    <div class="mobile-logo">
      <a href="home-travel.html"
        ><img src="assets/img/logo2.svg" alt="Tourm"
      /></a>
    </div>
    <div class="th-mobile-menu">
      <ul>
        <li class="menu-item-has-children">
          <a class="active" href="home-travel.html">Home</a>
          <ul class="sub-menu">
            <li><a href="home-travel.html">Home Travel</a></li>
            <li><a href="home-tour.html">Home Tour</a></li>
            <li><a href="home-agency.html">Home Agency</a></li>
          </ul>
        </li>
        <li><a href="{{route('fe-tentang')}}">About Us</a></li>
        <li class="menu-item-has-children">
          <a href="#">Destination</a>
          <ul class="sub-menu">
            <li><a href="destination.html">Destination</a></li>
            <li>
              <a href="destination-details.html">Destination Details</a>
            </li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="#">Service</a>
          <ul class="sub-menu">
            <li><a href="service.html">Services</a></li>
            <li><a href="service-details.html">Service Details</a></li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="#">Activities</a>
          <ul class="sub-menu">
            <li><a href="activities.html">activities</a></li>
            <li>
              <a href="activities-details.html">activities Details</a>
            </li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="#">Pages</a>
          <ul class="sub-menu">
            <li class="menu-item-has-children">
              <a href="#">Shop</a>
              <ul class="sub-menu">
                <li><a href="shop.html">Shop</a></li>
                <li><a href="shop-details.html">Shop Details</a></li>
                <li><a href="cart.html">Cart Page</a></li>
                <li><a href="checkout.html">Checkout</a></li>
                <li><a href="wishlist.html">Wishlist</a></li>
              </ul>
            </li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="tour.html">Our Tour</a></li>
            <li><a href="tour-details.html">Tour Details</a></li>
            <li><a href="tour-guide.html">Tour Guider</a></li>
            <li>
              <a href="tour-guider-details.html">Tour Guider Details</a>
            </li>
            <li><a href="faq.html">Faq Page</a></li>
            <li><a href="price.html">Price Package</a></li>
            <li><a href="error.html">Error Page</a></li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="#">Blog</a>
          <ul class="sub-menu">
            <li><a href="blog.html">Blog</a></li>
            <li><a href="blog-details.html">Blog Details</a></li>
          </ul>
        </li>
        <li><a href="contact.html">Contact us</a></li>
      </ul>
    </div>
  </div>
</div>
<header class="th-header header-layout1 header-layout2">
  <div class="header-top">
    <div class="container th-container">
      <div
        class="row justify-content-center justify-content-lg-between align-items-center"
      >
        <div class="col-auto d-none d-md-block">
          <div class="header-links">
            <ul>
              <li class="d-none d-xl-inline-block">
                <i class="fa-sharp fa-regular fa-location-dot"></i>
                <span>Muscat, Oman</span>
              </li>
              <li class="d-none d-xl-inline-block">
                <i class="fa-regular fa-clock"></i>
                <span>Mon to Friday: 8.00 am - 5.00 pm</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-auto">
          <div class="header-right">
            <div class="header-links">
              <ul>
                <li class="d-none d-xl-inline-block">
                  <a href="faq.html">FAQ</a>
                </li>
                <li>
                  <a href="#login-form" class="popup-content"
                    >Sign In<i class="fa-regular fa-user"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sticky-wrapper">
    <div class="menu-area" data-bg-src="assets/img/bg/line-pattern.png">
      <div class="container th-container">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto">
            <div class="header-logo">
              <a href="{{route('fe-home')}}"
                ><img src="assets/img/Frame-2.png" width="195" alt="Tourm"
              /></a>
            </div>
          </div>
          <div class="col-auto">
            <nav class="main-menu d-none d-xl-inline-block">
              <ul>
                <li><a href="{{route('fe-home')}}">Home</a></li>
                <li><a href="{{route('fe-tentang')}}">About Us</a></li>
                <li><a href="{{route('fe-services')}}">Services</a></li>
                <li><a href="{{route('fe-gallery')}}">Gallery</a></li>
              </ul>
            </nav>
            <button type="button" class="th-menu-toggle d-block d-xl-none">
              <i class="far fa-bars"></i>
            </button>
          </div>
          <div class="col-auto d-none d-xl-block">
            <div class="header-button">
              <a href="{{route('fe-kontak')}}" class="th-btn style3 th-icon"
                >Book Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>