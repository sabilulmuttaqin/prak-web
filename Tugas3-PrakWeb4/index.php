<?php
$apiUrl = "http://localhost/Tugas2-PrakWeb4/index.php/api/praktikum4";

$response = file_get_contents($apiUrl);

if ($response === false) {
  die("Error fetching data from API");
}

$responseData = json_decode($response, true);

if (json_last_error() !== JSON_ERROR_NONE) {
  die("Error decoding JSON: " . json_last_error_msg());
}

$products = isset($responseData['data']) ? $responseData['data'] : [];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Paws Kingdom PHP</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" href="/assets/images/logo.png" type="image/png">
  <link

    href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Cookie&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
</head>

<body>
  <header>
    <div class="nav-kanan">
      <div class="nav-logo">
        <!-- <img src="./assets/images/logo.png" height="" alt="" /> -->
        <h2>Paws <br />Kingdom</h2>
      </div>
      <nav class="nav-item">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#tips">Tips</a></li>
          <li><a href="#service">Services</a></li>
          <li><a href="#testi">Testimonials</a></li>
          <li><a href="#bestseller">Product</a></li>
        </ul>
      </nav>
    </div>
    <div class="nav-kiri">
      <button id="cart-button">
        <i class="ri-shopping-cart-line"></i>
      </button>
      <button><i class="ri-search-line"></i></button>
    </div>
  </header>
  <section id="hero" class="hero">
    <div class="hero-content">
      <h1>High Quality <br />Pet Food</h1>
      <p>Sale up to 40% off today</p>
      <a href="#" class="btn">Shop Now</a>
    </div>
  </section>
  <div class="container">
    <main>
      <section id="tips" class="tips-section">
        <h2><span>Tips</span> & <span>Support</span> for pet</h2>
        <p>
          Pet treats packed with nutritious ingredients, vitamins and
          supplements to help dogs.
        </p>
        <div class="tips-cards">
          <div class="card">
            <img src="assets/images/tips/tips1.jpg" alt="Pet and owner" />
            <h3>Understanding Pet Food Labels</h3>
            <p>
              Legos the sky's the limit with inexpensive silicone molds and a
              little imagination!
            </p>
            <!-- <a href="#" class="read-more">Read More</a> -->
          </div>
          <div class="card">
            <img
              src="assets/images/tips/tips2.jpg"
              alt="Kid with dog and snacks" />
            <h3>Healthy & Fun Frozen Yogurt Snaks!</h3>
            <p>Legos the sky's the limit with inexpensive.</p>
            <!-- <a href="#" class="read-more">Read More</a> -->
          </div>
          <div class="card">
            <img
              src="assets/images/tips/tips3.jpg"
              alt="Healthy breakfast for pets" />
            <h3>Everyday Healthy Breakfast for Healthy Body</h3>
            <p>Legos the sky's the limit with inexpensive</p>
            <!-- <a href="#" class="read-more">Read More</a> -->
          </div>
        </div>
      </section>

      <section id="category" class="category">
        <h2><span>Top</span> Categories</h2>
        <div class="category-list">
          <div class="category-item">
            <img src="./assets/images/category/kategori.png" alt="Cat Food" />
            <h3>Cat Food</h3>
          </div>
          <div class="category-item">
            <img
              src="./assets/images/category/suplemen.png"
              alt="Cat suplemen" />
            <h3>Cat Suplement</h3>
          </div>
          <div class="category-item">
            <img src="./assets/images/category/toys.png" alt="Toys" />
            <h3>Cat Toys</h3>
          </div>
        </div>
      </section>

      <section id="brand" class="popular-brand">
        <marquee behavior="" direction="right">
          <div class="brand-container">
            <div class="brand-item">
              <img src="./assets/images/brand/brand1.jpg" alt="" />
            </div>
            <div class="brand-item">
              <img src="./assets/images/brand/brand2.png" alt="" />
            </div>
            <div class="brand-item">
              <img src="./assets/images/brand/brand3.jpg" alt="" />
            </div>
            <div class="brand-item">
              <img src="./assets/images/brand/brand4.jpg" alt="" />
            </div>
          </div>
        </marquee>
      </section>

      <section id="service" class="pet-services-section">
        <img src="./assets/images/logo1.png" width="100" alt="" />
        <div class="intro-text">
          <h2>
            <span class="highlight">What your cat needs</span>, when they need
            it.
          </h2>
        </div>
        <div class="features">
          <div class="feature-item">
            <i class="ri-truck-line icon"></i>
            <h3>Free Same-Day Delivery</h3>
            <p>
              Order by 2pm local time to get free delivery on orders $35+
              today.
            </p>
          </div>
          <div class="feature-item">
            <i class="ri-refund-2-line icon"></i>
            <h3>30 Day Return</h3>
            <p>35% off your first order plus 5% off all future orders.</p>
          </div>
          <div class="feature-item">
            <i class="ri-shield-check-line icon"></i>
            <h3>Security payment</h3>
            <p>
              25% off your online order of $50+. Available at most locations.
            </p>
          </div>
          <div class="feature-item">
            <i class="ri-customer-service-2-line icon"></i>
            <h3>24/7 Support</h3>
            <p>Shop online to get orders over $35 shipped fast and free.</p>
          </div>
        </div>
      </section>

      <section id="testi" class="testimonial-section">
        <h2 class="section-title">
          What Our <span class="highlight">Customers</span> Say
        </h2>
        <div class="testimonials">
          <div class="testimonial-item">
            <img src="./assets/images/testi/testi1.jpg" alt="Customer 1" />
            <p class="testimonial-text">
              "My cat absolutely loves the food from Paws Kingdom! The quality
              is amazing, I'm giving my pet the best."
            </p>
            <h3 class="customer-name">John Doe</h3>
          </div>
          <div class="testimonial-item">
            <img src="./assets/images/testi/testi2.jpg" alt="Customer 2" />
            <p class="testimonial-text">
              "Fast delivery and excellent customer service. I recommend Paws
              Kingdom to all my friends who have pets!"
            </p>
            <h3 class="customer-name">Jane Smith</h3>
          </div>
          <div class="testimonial-item">
            <img src="./assets/images/testi/testi3.jpg" alt="Customer 3" />
            <p class="testimonial-text">
              "Great selection of toys and treats. My dog is always so excited
              when a new package arrives!"
            </p>
            <h3 class="customer-name">Emily Johnson</h3>
          </div>
        </div>
      </section>

      <section id="bestseller" class="best-seller-section">
        <h2 class="section-title">
          Best <span class="highlight">Seller</span>
        </h2>
        <div class="product-list">
          <?php if (count($products) > 0): ?>
            <?php foreach ($products as $product): ?>
              <div class="product-item">
                <img src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['product_name']; ?>" />
                <h3><?php echo $product['product_name']; ?></h3>
                <p><?php echo $product['description']; ?></p>
                <div class="best-seller-bawah">

                  <p class="price"><?php echo $product['price']; ?></p>
                  <p>Stock: <?php echo $product['stock']; ?></p>

                </div>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <p class="no-products">No products found.</p>
          <?php endif; ?>
        </div>
      </section>


      <section id="iklan" class="iklan">
        <div class="iklan-content">
          <div class="iklan-title">
            <div class="iklan-logo">
              <i class="ri-bowl-line"></i>
            </div>
            <h2>
              Taste <br />
              Guarantee
            </h2>
          </div>
          <h1>Taste it, love it or we'll replace it... <br />Guaranteed!</h1>
          <p>
            At Petio, we believe your dog and cat will love their food so much
            that if they don’t … we’ll help you find a replacement. That’s our
            taste guarantee.
          </p>
          <div class="btn">Find out more</div>
        </div>
      </section>

      <section id="faq" class="faq-section">
        <div class="faq-header">
          <h2><span>Frequently</span> Asked Questions</h2>
          <img src="./assets/images/kucingbingung.png" alt="" />
        </div>
        <div class="faq-item">
          <button class="faq-question">What is Paws Kingdom?</button>
          <p class="faq-answer">
            Paws Kingdom is a dedicated pet store offering high-quality food,
            toys, and vitamins specifically for cats. We provide a wide range
            of carefully selected products that are designed to promote the
            health and happiness of your feline companions. Each item we offer
            is chosen with great care to ensure it is safe, nutritious, and
            enjoyable for cats. We believe that cats are an integral part of
            the family, and we are committed to offering products that not
            only meet their basic needs but also enhance their quality of
            life.
          </p>
        </div>
        <div class="faq-item">
          <button class="faq-question">How can I place an order?</button>
          <p class="faq-answer">
            You can place an order by browsing our shop and adding products to
            your cart. Checkout is simple and secure.
          </p>
        </div>
        <div class="faq-item">
          <button class="faq-question">What is the return policy?</button>
          <p class="faq-answer">
            We offer a 30-day return policy. If you're not satisfied with your
            purchase, you can return it within 30 days.
          </p>
        </div>
        <div class="faq-item">
          <button class="faq-question">
            Do you offer international shipping?
          </button>
          <p class="faq-answer">
            Currently, we offer shipping only within the country.
            International shipping is not available at the moment.
          </p>
        </div>
      </section>
    </main>
  </div>
  <footer class="footer">
    <div class="column">
      <h4 class="title-footer">Paws Kingdom</h4>
      <p>
        is a cat-focused pet shop offering high-quality food, toys, and
        vitamin. Your cat’s happiness and health are our priority.
      </p>
    </div>
    <div class="column">
      <h4>Company</h4>
      <ul>
        <li><a href="#about">Home</a></li>
        <li><a href="#partners">Shop</a></li>
        <li><a href="#resources">Customer Reviews</a></li>
        <li><a href="#resources">Collections</a></li>
      </ul>
    </div>
    <div class="column">
      <h4>Products</h4>
      <ul>
        <li><a href="#markets">Product Overview</a></li>
        <li><a href="#markets">Functions</a></li>
        <li><a href="#markets">App Platform</a></li>
      </ul>
    </div>
    <div class="column">
      <h4>Contact</h4>
      <ul>
        <li><a href="#resources">Support</a></li>
        <li><a href="#resources">System Status</a></li>
        <li><a href="#resources">Report Issues</a></li>
        <li><a href="#resources">Share Your Ideas</a></li>
      </ul>
    </div>
  </footer>
  <div id="cart" class="cart">
    <h2>Shopping Cart</h2>
    <ul id="cart-items"></ul>
    <button id="clear-cart">Clear Cart</button>
    <button id="submit-cart">Checkout</button>
  </div>

  <script src="script.js"></script>
</body>

</html>