<?php

/**
 * Template Name: Home Page
 * Description: Custom home page template for Twenty Twenty-One Child theme.
 * Author: Your Name
 * Version: 1.0
 *
 * @package TwentyTwentyOneChild
 */
?>

<?php get_header(); ?>

<style>
  body {
    --baner-image: url('<?= get_stylesheet_directory_uri(); ?>/images/img/banner.jpg');
  }

  .chose-icon-container {
    /* height: 12rem; */
    display: flex;
    align-items: end;
    justify-content: center;
  }
</style>
<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/home_page.css">


<section id="billboard-1" class="bg-banner ">
  <div class="py-5">
    <div class="container h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="">
          <h1 class="section-title text-center mt-4 text-white" data-aos="fade-up">The Kitchen Inventory</h1>
          <h3 class="fs-2 text-center text-white" data-aos="fade-up" data-aos-delay="300">Your Complete Industrial Kitchen & Gas Pipeline Partner</h3>
          <div class="text-center" data-aos="fade-up" data-aos-delay="600">
            <p class="text-white fs-5">From LPG & PNG pipeline installation to world-class industrial kitchen equipment – all under one roof.</p>
          </div>
          <div class="text-center pt-5">
            <button class="btn header-cta btn-lg rounded-3 text-uppercase mx-auto" data-aos="zoom-out" data-aos-delay="900">Get a Quote</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="billboard" class="bg-light py-5 position-relative rellax" data-rellax-speed="20"
  data-rellax-xs-speed="-5">
  <div class="container">
    <div class="row justify-content-center">
      <h1 class="section-title text-center mt-4" data-aos="fade-up">Our Services</h1>
      <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="300">
        <p class="text-black fs-5">At <strong>The Kitchen Inventory</strong>, we provide end-to-end solutions for industrial kitchens, combining safe gas pipeline installations, premium equipment supply, and reliable maintenance support. Whether you are building a new facility or upgrading an existing one, we ensure efficiency, safety, and long-term reliability.</p>
      </div>
    </div>
    <div class="open-up services-grid" data-aos="zoom-out">
      <div class="row">
        <div class="col-md-4">
          <div class="cat-item image-zoom-effect position-relative">
            <div class="image-holder rounded-3">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/img/pipeline.jpg" alt="categories" class="product-image img-fluid rounded-3">
              </a>
            </div>
            <div class="category-content position-absolute bottom-0 w-100">
              <div class="product-button">
                <a href="index.html" class="btn btn-common text-uppercase text-black text-center fs-5 w-100">Pipeline Solutions</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cat-item image-zoom-effect position-relative">
            <div class="image-holder rounded-3">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/img/equipment.jpg" alt="categories" class="product-image img-fluid rounded-3">
              </a>
            </div>
            <div class="category-content position-absolute bottom-0 w-100">
              <div class="product-button">
                <a href="index.html" class="btn btn-common text-uppercase text-black text-center fs-5 w-100">Kitchen Equipment Supply</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cat-item image-zoom-effect position-relative">
            <div class="image-holder rounded-3">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/img/maintenance.jpg" alt="categories" class="product-image img-fluid rounded-3">
              </a>
            </div>
            <div class="category-content position-absolute bottom-0 w-100">
              <div class="product-button">
                <a href="index.html" class="btn btn-common text-uppercase text-black text-center fs-5 w-100">Maintenance & Support</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center pt-5">
      <button class="btn header-cta btn-lg rounded-3 text-uppercase mx-auto" >Get a Quote</button>
    </div>
  </div>
</section>



<section class="features py-5 rellax" data-rellax-speed="20">
  <div class="container">
    <div class="row justify-content-center">
      <h1 class="section-title text-center mt-4" data-aos="fade-up">Why Choose Us</h1>
      <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="300">
        <p class="text-black fs-5">At <strong>The Kitchen Inventory</strong>, we don’t just deliver products — we provide <strong>complete industrial solutions</strong> that ensure your kitchen is safe, reliable, and built to perform at scale. Here’s why businesses trust us:</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="py-5 row">
          <div class="chose-icon-container col-md-6 " data-aos="zoom-out-right" >
            <img src="<?= get_stylesheet_directory_uri(); ?>/images/img/Safety-Compliance.svg" alt="" class="img-fluid">
          </div>
          <div class="col-md-6 align-self-center" data-aos="zoom-out-left" data-aos-delay="300">
            <h4 class="element-title text-capitalize my-3">Safety & Compliance</h4>
            <p class="text-black fs-6">Every pipeline and equipment installation follows strict <strong>industry safety standards</strong> and regulations, giving you complete peace of mind.</p>
          </div>
        </div>
      </div>
      <div class="col-md-12 text-center" >
        <div class="py-5 row">
          <div class="col-md-6 align-self-center" data-aos="zoom-out-right" data-aos-delay="300">
            <h4 class="element-title text-capitalize my-3">Industrial-Grade Solutions</h4>
            <p class="text-black fs-6">We specialise in <strong>heavy-duty equipment and systems</strong> designed for continuous use in large-scale operations.</p>
          </div>
          <div class="chose-icon-container col-md-6" data-aos="zoom-out-left" >
            <img src="<?= get_stylesheet_directory_uri(); ?>/images/img/Industrial-Grade-Solutions.svg" alt="" class="img-fluid">
          </div>

        </div>
      </div>
      <div class="col-md-12 text-center" >
        <div class="py-5 row">
          <div class="chose-icon-container col-md-6" data-aos="zoom-out-right" >
            <img src="<?= get_stylesheet_directory_uri(); ?>/images/img/expert-Engineering-Team.svg" alt="" class="img-fluid">
          </div>
          <div class="col-md-6 align-self-center" data-aos="zoom-out-left" data-aos-delay="300">
            <h4 class="element-title text-capitalize my-3">Expert Engineering Team</h4>
            <p class="text-black fs-6">Our team of <strong>skilled engineers and technicians</strong> bring years of experience in industrial kitchen projects.</p>
          </div>
        </div>
      </div>
      <div class="col-md-12 text-center" >
        <div class="py-5 row">
          <div class="col-md-6 align-self-center" data-aos="zoom-out-right" data-aos-delay="300">
            <h4 class="element-title text-capitalize my-3">End-to-End B2B Services</h4>
            <p class="text-black fs-6">From <strong>design and installation to maintenance and support</strong>, we provide everything under one roof.</p>
          </div>
          <div class="chose-icon-container col-md-6" data-aos="zoom-out-left" >
            <img src="<?= get_stylesheet_directory_uri(); ?>/images/img/B2B-Services.svg" alt="" class="img-fluid">
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="categories overflow-hidden">
  <div class="container">
    <div class="open-up" data-aos="zoom-out">
      <div class="row">
        <div class="col-md-4">
          <div class="cat-item image-zoom-effect">
            <div class="image-holder">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/cat-item1.jpg" alt="categories" class="product-image img-fluid">
              </a>
            </div>
            <div class="category-content">
              <div class="product-button">
                <a href="index.html" class="btn btn-common text-uppercase">Shop for men</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cat-item image-zoom-effect">
            <div class="image-holder">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/cat-item2.jpg" alt="categories" class="product-image img-fluid">
              </a>
            </div>
            <div class="category-content">
              <div class="product-button">
                <a href="index.html" class="btn btn-common text-uppercase">Shop for women</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cat-item image-zoom-effect">
            <div class="image-holder">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/cat-item3.jpg" alt="categories" class="product-image img-fluid">
              </a>
            </div>
            <div class="category-content">
              <div class="product-button">
                <a href="index.html" class="btn btn-common text-uppercase">Shop accessories</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="new-arrival" class="new-arrival product-carousel py-5 position-relative overflow-hidden">
  <div class="container">
    <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
      <h4 class="text-uppercase">Our New Arrivals</h4>
      <a href="index.html" class="btn-link">View All Products</a>
    </div>
    <div class="swiper product-swiper open-up" data-aos="zoom-out">
      <div class="swiper-wrapper d-flex">
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder position-relative">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-1.jpg" alt="categories" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="element-title text-uppercase fs-5 mt-3">
                  <a href="index.html">Dark florish onepiece</a>
                </h5>
                <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder position-relative">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-2.jpg" alt="categories" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3">
                  <a href="index.html">Baggy Shirt</a>
                </h5>
                <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$55.00</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder position-relative">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-3.jpg" alt="categories" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3">
                  <a href="index.html">Cotton off-white shirt</a>
                </h5>
                <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$65.00</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder position-relative">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-4.jpg" alt="categories" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3">
                  <a href="index.html">Crop sweater</a>
                </h5>
                <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$50.00</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder position-relative">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-10.jpg" alt="categories" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3">
                  <a href="index.html">Crop sweater</a>
                </h5>
                <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
        <use xlink:href="#arrow-left"></use>
      </svg></div>
    <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
        <use xlink:href="#arrow-right"></use>
      </svg></div>
  </div>
</section>

<section class="collection bg-light position-relative py-5">
  <div class="container">
    <div class="row">
      <div class="title-xlarge text-uppercase txt-fx domino">Collection</div>
      <div class="collection-item d-flex flex-wrap my-5">
        <div class="col-md-6 column-container">
          <div class="image-holder">
            <img src="<?= get_stylesheet_directory_uri(); ?>/images/single-image-2.jpg" alt="collection" class="product-image img-fluid">
          </div>
        </div>
        <div class="col-md-6 column-container bg-white">
          <div class="collection-content p-5 m-0 m-md-5">
            <h3 class="element-title text-uppercase">Classic winter collection</h3>
            <p>Dignissim lacus, turpis ut suspendisse vel tellus. Turpis purus, gravida orci, fringilla a. Ac sed eu
              fringilla odio mi. Consequat pharetra at magna imperdiet cursus ac faucibus sit libero. Ultricies quam
              nunc, lorem sit lorem urna, pretium aliquam ut. In vel, quis donec dolor id in. Pulvinar commodo mollis
              diam sed facilisis at cursus imperdiet cursus ac faucibus sit faucibus sit libero.</p>
            <a href="#" class="btn btn-dark text-uppercase mt-3">Shop Collection</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="best-sellers" class="best-sellers product-carousel py-5 position-relative overflow-hidden">
  <div class="container">
    <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
      <h4 class="text-uppercase">Best Selling Items</h4>
      <a href="index.html" class="btn-link">View All Products</a>
    </div>
    <div class="swiper product-swiper open-up" data-aos="zoom-out">
      <div class="swiper-wrapper d-flex">
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-4.jpg" alt="categories" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3">
                  <a href="index.html">Dark florish onepiece</a>
                </h5>
                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-3.jpg" alt="product" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3">
                  <a href="index.html">Baggy Shirt</a>
                </h5>
                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$55.00</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-5.jpg" alt="categories" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3">
                  <a href="index.html">Cotton off-white shirt</a>
                </h5>
                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$65.00</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-6.jpg" alt="categories" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3">
                  <a href="index.html">Handmade crop sweater</a>
                </h5>
                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$50.00</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-9.jpg" alt="categories" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3">
                  <a href="index.html">Dark florish onepiece</a>
                </h5>
                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-10.jpg" alt="categories" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3">
                  <a href="index.html">Cotton off-white shirt</a>
                </h5>
                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
        <use xlink:href="#arrow-left"></use>
      </svg></div>
    <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
        <use xlink:href="#arrow-right"></use>
      </svg></div>
  </div>
</section>

<section class="video py-5 overflow-hidden">
  <div class="container-fluid">
    <div class="row">
      <div class="video-content open-up" data-aos="zoom-out">
        <div class="video-bg">
          <img src="<?= get_stylesheet_directory_uri(); ?>/images/video-image.jpg" alt="video" class="video-image img-fluid">
        </div>
        <div class="video-player">
          <a class="youtube" href="https://www.youtube.com/embed/pjtsGzQjFM4">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#play"></use>
            </svg>
            <img src="<?= get_stylesheet_directory_uri(); ?>/images/text-pattern.png" alt="pattern" class="text-rotate">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="testimonials py-5 bg-light">
  <div class="section-header text-center mt-5">
    <h3 class="section-title">WE LOVE GOOD COMPLIMENT</h3>
  </div>
  <div class="swiper testimonial-swiper overflow-hidden my-5">
    <div class="swiper-wrapper d-flex">
      <div class="swiper-slide">
        <div class="testimonial-item text-center">
          <blockquote>
            <p>“More than expected crazy soft, flexible and best fitted white simple denim shirt.”</p>
            <div class="review-title text-uppercase">casual way</div>
          </blockquote>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="testimonial-item text-center">
          <blockquote>
            <p>“Best fitted white denim shirt more than expected crazy soft, flexible</p>
            <div class="review-title text-uppercase">uptop</div>
          </blockquote>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="testimonial-item text-center">
          <blockquote>
            <p>“Best fitted white denim shirt more white denim than expected flexible crazy soft.”</p>
            <div class="review-title text-uppercase">Denim craze</div>
          </blockquote>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="testimonial-item text-center">
          <blockquote>
            <p>“Best fitted white denim shirt more than expected crazy soft, flexible</p>
            <div class="review-title text-uppercase">uptop</div>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
  <div class="testimonial-swiper-pagination d-flex justify-content-center mb-5"></div>
</section>

<section id="related-products" class="related-products product-carousel py-5 position-relative overflow-hidden">
  <div class="container">
    <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
      <h4 class="text-uppercase">You May Also Like</h4>
      <a href="index.html" class="btn-link">View All Products</a>
    </div>
    <div class="swiper product-swiper open-up" data-aos="zoom-out">
      <div class="swiper-wrapper d-flex">
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-5.jpg" alt="product" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3">
                  <a href="index.html">Dark florish onepiece</a>
                </h5>
                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-6.jpg" alt="product" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3">
                  <a href="index.html">Baggy Shirt</a>
                </h5>
                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$55.00</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-7.jpg" alt="product" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3">
                  <a href="index.html">Cotton off-white shirt</a>
                </h5>
                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$65.00</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-8.jpg" alt="product" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3">
                  <a href="index.html">Handmade crop sweater</a>
                </h5>
                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$50.00</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder">
              <a href="index.html">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/product-item-1.jpg" alt="product" class="product-image img-fluid">
              </a>
              <a href="index.html" class="btn-icon btn-wishlist">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
              <div class="product-content">
                <h5 class="text-uppercase fs-5 mt-3">
                  <a href="index.html">Handmade crop sweater</a>
                </h5>
                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
        <use xlink:href="#arrow-left"></use>
      </svg></div>
    <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
        <use xlink:href="#arrow-right"></use>
      </svg></div>
  </div>
</section>

<section class="blog py-5">
  <div class="container">
    <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
      <h4 class="text-uppercase">Read Blog Posts</h4>
      <a href="index.html" class="btn-link">View All</a>
    </div>
    <div class="row">
      <div class="col-md-4">
        <article class="post-item">
          <div class="post-image">
            <a href="index.html">
              <img src="<?= get_stylesheet_directory_uri(); ?>/images/post-image1.jpg" alt="image" class="post-grid-image img-fluid">
            </a>
          </div>
          <div class="post-content d-flex flex-wrap gap-2 my-3">
            <div class="post-meta text-uppercase fs-6 text-secondary">
              <span class="post-category">Fashion /</span>
              <span class="meta-day"> jul 11, 2022</span>
            </div>
            <h5 class="post-title text-uppercase">
              <a href="index.html">How to look outstanding in pastel</a>
            </h5>
            <p>Dignissim lacus,turpis ut suspendisse vel tellus.Turpis purus,gravida orci,fringilla...</p>
          </div>
        </article>
      </div>
      <div class="col-md-4">
        <article class="post-item">
          <div class="post-image">
            <a href="index.html">
              <img src="<?= get_stylesheet_directory_uri(); ?>/images/post-image2.jpg" alt="image" class="post-grid-image img-fluid">
            </a>
          </div>
          <div class="post-content d-flex flex-wrap gap-2 my-3">
            <div class="post-meta text-uppercase fs-6 text-secondary">
              <span class="post-category">Fashion /</span>
              <span class="meta-day"> jul 11, 2022</span>
            </div>
            <h5 class="post-title text-uppercase">
              <a href="index.html">Top 10 fashion trend for summer</a>
            </h5>
            <p>Turpis purus, gravida orci, fringilla dignissim lacus, turpis ut suspendisse vel tellus...</p>
          </div>
        </article>
      </div>
      <div class="col-md-4">
        <article class="post-item">
          <div class="post-image">
            <a href="index.html">
              <img src="<?= get_stylesheet_directory_uri(); ?>/images/post-image3.jpg" alt="image" class="post-grid-image img-fluid">
            </a>
          </div>
          <div class="post-content d-flex flex-wrap gap-2 my-3">
            <div class="post-meta text-uppercase fs-6 text-secondary">
              <span class="post-category">Fashion /</span>
              <span class="meta-day"> jul 11, 2022</span>
            </div>
            <h5 class="post-title text-uppercase">
              <a href="index.html">Crazy fashion with unique moment</a>
            </h5>
            <p>Turpis purus, gravida orci, fringilla dignissim lacus, turpis ut suspendisse vel tellus...</p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<section class="logo-bar py-5 my-5">
  <div class="container">
    <div class="row">
      <div class="logo-content d-flex flex-wrap justify-content-between">
        <img src="<?= get_stylesheet_directory_uri(); ?>/images/logo1.png" alt="logo" class="logo-image img-fluid">
        <img src="<?= get_stylesheet_directory_uri(); ?>/images/logo2.png" alt="logo" class="logo-image img-fluid">
        <img src="<?= get_stylesheet_directory_uri(); ?>/images/logo3.png" alt="logo" class="logo-image img-fluid">
        <img src="<?= get_stylesheet_directory_uri(); ?>/images/logo4.png" alt="logo" class="logo-image img-fluid">
        <img src="<?= get_stylesheet_directory_uri(); ?>/images/logo5.png" alt="logo" class="logo-image img-fluid">
      </div>
    </div>
  </div>
</section>

<section class="newsletter bg-light" style="background: url(<?= get_stylesheet_directory_uri(); ?>/images/pattern-bg.png) no-repeat;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 py-5 my-5">
        <div class="subscribe-header text-center pb-3">
          <h3 class="section-title text-uppercase">Sign Up for our newsletter</h3>
        </div>
        <form id="form" class="d-flex flex-wrap gap-2">
          <input type="text" name="email" placeholder="Your Email Addresss" class="form-control form-control-lg">
          <button class="btn btn-dark btn-lg text-uppercase w-100">Sign Up</button>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="instagram position-relative">
  <div class="d-flex justify-content-center w-100 position-absolute bottom-0 z-1">
    <a href="https://www.instagram.com/templatesjungle/" class="btn btn-dark px-5">Follow us on Instagram</a>
  </div>
  <div class="row g-0">
    <div class="col-6 col-sm-4 col-md-2">
      <div class="insta-item">
        <a href="https://www.instagram.com/templatesjungle/" target="_blank">
          <img src="<?= get_stylesheet_directory_uri(); ?>/images/insta-item1.jpg" alt="instagram" class="insta-image img-fluid">
        </a>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-2">
      <div class="insta-item">
        <a href="https://www.instagram.com/templatesjungle/" target="_blank">
          <img src="<?= get_stylesheet_directory_uri(); ?>/images/insta-item2.jpg" alt="instagram" class="insta-image img-fluid">
        </a>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-2">
      <div class="insta-item">
        <a href="https://www.instagram.com/templatesjungle/" target="_blank">
          <img src="<?= get_stylesheet_directory_uri(); ?>/images/insta-item3.jpg" alt="instagram" class="insta-image img-fluid">
        </a>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-2">
      <div class="insta-item">
        <a href="https://www.instagram.com/templatesjungle/" target="_blank">
          <img src="<?= get_stylesheet_directory_uri(); ?>/images/insta-item4.jpg" alt="instagram" class="insta-image img-fluid">
        </a>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-2">
      <div class="insta-item">
        <a href="https://www.instagram.com/templatesjungle/" target="_blank">
          <img src="<?= get_stylesheet_directory_uri(); ?>/images/insta-item5.jpg" alt="instagram" class="insta-image img-fluid">
        </a>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-2">
      <div class="insta-item">
        <a href="https://www.instagram.com/templatesjungle/" target="_blank">
          <img src="<?= get_stylesheet_directory_uri(); ?>/images/insta-item6.jpg" alt="instagram" class="insta-image img-fluid">
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>