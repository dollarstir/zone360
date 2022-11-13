<?php include 'top.php'; ?>
  <body>
  <?php include 'nav.php'; ?>
    <!-- Breadcrumb Area-->
    <div class="breadcrumb-wrapper breadcrumb-bg-light">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Checkout</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Checkout Area-->
    <div class="checkout-area">
      <div class="container">
        <div class="row g-5">
          <!-- Checkout Details Area-->
          <div class="col-12 col-lg-6">
            <div class="checkout-details-area">
              <h3 class="mb-4">Billing Details</h3>
              <form action="#" method="post">
                <div class="row">
                  <div class="col-12">
                    <label class="mb-2" for="first-name">First Name</label>
                    <input class="form-control mb-30" id="first-name" type="text" placeholder="First Name" value="" required>
                  </div>
                  <div class="col-12">
                    <label class="mb-2" for="last-name">Last Name</label>
                    <input class="form-control mb-30" id="last-name" type="text" placeholder="Last Name" value="" required>
                  </div>
                  <div class="col-12">
                    <label class="mb-2" for="company">Company Name</label>
                    <input class="form-control mb-30" id="company" type="text" placeholder="Company" value="">
                  </div>
                  <div class="col-12">
                    <label class="mb-2" for="email-address">Email Address</label>
                    <input class="form-control mb-30" id="email-address" type="email" placeholder="Email Address" value="" required>
                  </div>
                  <div class="col-12">
                    <label class="mb-2" for="phone">Phone</label>
                    <input class="form-control mb-30" id="phone" type="text" placeholder="Phone" value="">
                  </div>
                  <!-- <div class="col-12">
                    <label class="mb-2" for="country">Country</label>
                    <select class="form-select form-control w-100 mb-30" id="country">
                      <option value="usa">United States</option>
                      <option value="usa">United Kingdom</option>
                      <option value="usa">Germany</option>
                      <option value="usa">India</option>
                      <option value="usa">Australia</option>
                      <option value="usa">Bangladesh</option>
                    </select>
                  </div> -->
                 
                  <div class="col-12">
                    <label class="mb-2" for="order-notes">Order Notes</label>
                    <textarea class="form-control" id="order-notes" placeholder="Notes about your order, e.g. special notes for delivery." rows="3"></textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- Order Form Area-->
          <div class="col-12 col-lg-6">
            <div class="order-form bg-gray">
              <h4 class="mb-4">Your Order</h4>
              <!-- Order Table-->
              <div class="order-table table-responsive mb-4">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="px-3">Product </th>
                      <th class="text-end px-3">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th class="px-3">Bonsai Tree <span> × 1</span></th>
                      <td class="text-end px-3">$9.63</td>
                    </tr>
                    <tr>
                      <th class="px-3">Sony BS4 <span> × 1</span></th>
                      <td class="text-end px-3">$7.31</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th class="px-3">Subtotal </th>
                      <td class="text-end px-3">$16.94</td>
                    </tr>
                    <tr>
                      <th class="px-3">Shipping </th>
                      <td class="text-end px-3">Flat Rate $5.00</td>
                    </tr>
                    <tr>
                      <th class="px-3">Order Total </th>
                      <td class="text-end px-3">$21.94</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- Checkout Payment-->
              <div class="checkout-payment-area">
                <form action="#">
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" id="bank" type="radio" value="bank" name="checkout-payment" checked>
                      <label class="form-check-label font-weight-bold" for="bank">Direct Bank Transfer</label>
                    </div>
                    <div class="payment-meta">
                      <p>Make your payment directly into our bank account.</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" id="cheque" type="radio" value="cheque" name="checkout-payment">
                      <label class="form-check-label font-weight-bold" for="cheque">Cheque Payments</label>
                    </div>
                    <div class="payment-meta">
                      <p>Please send a check to Store Name, Store Street, Store Town, Store State/County, Store Postcode.</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" id="cash" type="radio" value="cash" name="checkout-payment">
                      <label class="form-check-label font-weight-bold" for="cash">Cash On Delivery</label>
                    </div>
                    <div class="payment-meta">
                      <p>Pay with cash upon delivery.</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" id="paypal" type="radio" value="paypal" name="checkout-payment">
                      <label class="form-check-label font-weight-bold" for="paypal">Payment via PayPal</label>
                    </div>
                    <div class="payment-meta">
                      <p>Pay with PayPal.</p>
                    </div>
                  </div>
                  <div class="form-group mt-4">
                    <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                  </div>
                  <!-- Place Order-->
                  <button class="btn btn-primary w-100 mt-4" type="submit">Place Order</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Cool Facts Area -->
    <div class="cta-area cta4 bg-gray pt-120 pb-120">
      <div class="container">
        <div class="row g-5 align-items-center justify-content-center">
          <div class="col-12 col-sm-9 col-md-6">
            <div class="cta-text">
              <h2 class="text-dark">Ready to start your first project with the Saasbox?</h2>
              <p class="mb-4">Each purchase of Saasbox comes with six months free support — and a lifetime of free updates.</p><a class="btn btn-primary rounded-pill" href="#">Start Now</a>
            </div>
          </div>
          <div class="col-12 col-sm-9 col-md-6">
            <div class="cta-thumb-group">
              <div class="row">
                <div class="col-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="100ms"><img src="img/bg-img/5.jpg" alt=""></div>
                <div class="col-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms"><img src="http://preview.designing-world.com/saasbox-v2.0.0/img/bg-img/13.jpg" alt=""></div>
                <div class="col-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms"><img src="http://preview.designing-world.com/saasbox-v2.0.0/img/bg-img/14.jpg" alt=""></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Footer Area-->
    <footer class="footer-area">
      <div class="container">
        <div class="row g-4 g-lg-5">
          <!-- Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget-area"><a class="d-block mb-4" href="index.html"><img src="img/core-img/logo.png" alt=""></a>
              <p>It's crafted with the latest trend of design &amp; coded with all modern approaches.</p>
              <!-- Newsletter Form -->
              <div class="newsletter-form mb-4">
                <form class="d-flex align-items-stretch" action="#">
                  <input class="form-control rounded-0 rounded-start" type="email" placeholder="Enter email">
                  <button class="btn btn-warning rounded-0 rounded-end px-3" type="submit"><i class="bi bi-arrow-right"></i></button>
                </form>
              </div>
            </div>
          </div>
          <!-- Footer Widget Area-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget-area">
              <h5 class="mb-4">Our Products</h5>
              <ul class="list-unstyled">
                <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Suha Mobile</a></li>
                <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Affan Mobile</a></li>
                <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Newsten Blog</a></li>
                <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Classy Multipurpose</a></li>
                <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Educamp Education</a></li>
              </ul>
            </div>
          </div>
          <!-- Footer Widget Area-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget-area">
              <h5 class="mb-4">Important Links</h5>
              <ul class="list-unstyled">
                <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Community &amp; Forum</a></li>
                <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>About Licences</a></li>
                <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Careers</a></li>
                <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Terms &amp; Conditions</a></li>
                <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <!-- Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget-area">
              <h5 class="mb-4">Our Location</h5>
              <p class="lh-base mb-3">Designing World Inc. <br> 1604 NSD, Dhaka, BD</p>
              <p class="mb-0">Call: +123 456 789 <br> Email: help@example.com</p>
              <!-- Footer Social Icon -->
              <div class="footer-social-icon d-flex align-items-center mt-3"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facbook"><i class="bi bi-facebook"></i></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="bi bi-twitter"></i></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="bi bi-instagram"></i></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="bi bi-linkedin"></i></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube"><i class="bi bi-youtube"></i></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copywrite-wrapper mt-5 rounded d-lg-flex align-items-lg-center justify-content-lg-between">
          <!-- Copywrite Text -->
          <div class="copywrite-text text-center text-lg-start mb-3 mb-lg-0 me-lg-4">
            <p class="mb-0">2021 &copy; All rights reserved by <a href="#" target="_blank">Designing World</a></p>
          </div>
          <!-- Footer Nav -->
          <div class="footer-nav mb-3 mb-lg-0 me-lg-4">
            <ul class="mb-0 d-flex flex-wrap justify-content-center list-unstyled">
              <li><a href="#" target="_blank">Privacy Policy</a></li>
              <li><a href="#" target="_blank">Terms &amp; Conditions</a></li>
              <li><a href="#" target="_blank">Get Support</a></li>
            </ul>
          </div>
          <!-- Dropup -->
          <div class="language-dropdown text-center text-lg-end">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Language</button>
            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"><span class="me-2 flag-icon flag-icon-sa"></span>Arabic</a><a class="dropdown-item" href="#"><span class="me-2 flag-icon flag-icon-bd"></span>Bengali</a><a class="dropdown-item" href="#"><span class="me-2 flag-icon flag-icon-us"></span>English</a><a class="dropdown-item" href="#"><span class="me-2 flag-icon flag-icon-my"></span>Malay</a><a class="dropdown-item" href="#"><span class="me-2 flag-icon flag-icon-es"></span>Spanish</a></div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Scroll To Top  -->
    <div id="scrollTopButton"><i class="bi bi-arrow-up-short"></i></div>
    <div class="mb-120 d-block"></div>
    <!-- All JavaScript Files-->
    <script src="js/all-js-libraries.js"></script>
    <script src="js/active.js"></script>
  </body>
</html>