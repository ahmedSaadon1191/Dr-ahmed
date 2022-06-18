<div class="top_footer">
    <h2>
        Top Quality .. Best Price
    </h2>
  </div>
  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-image: url('assets/user/img/slide/BACKGROUND.jpg');">
    <div class="img_bak"></div>
    <div class="footer-top" style="background-color: transparent;">
      <div class="container">
        <div class="row">

          <div class="col-md-4">
            <div class="footer-info">
                <h4 class="footer_adress" style="color: #fff;font-weight: 700;font-size: 22px;">Our Branches</h4>
                <a href="#contact" style="color: #fff">
                    <p>
                        <h3>Nasr City Branch</h3>
                        <strong>Phone:</strong> +20 1020036341<br>
                        <strong>Email:</strong> care.dental.cdc@gmail.com<br>
                      </p>
                </a><br>

                <a href="#contact" style="color: #fff">
                    <p>
                        <h3>Heliopolis  Branch</h3>
                        <strong>Phone:</strong> +20 1007175878<br>
                        <strong>Email:</strong> swiss.dental.original@gmail.com<br>
                      </p>
                </a>

              <div class="social-links mt-3">
                <a href="tel:+201004911155" class="instagram"><i class="bx bxs-phone"></i></a>
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-messenger"></i></a>

              </div>
            </div>
          </div>

          <div class="col-md-4 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a href="#Our_Services">Services</a></li>
              <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a href="#doctors">doctors</a></li>
              <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a href="#contact">contact us</a></li>
            </ul>
          </div>

          <div class="col-md-4 footer-links">
            <h4>Our Services</h4>
            <ul>
                @if (isset($categories) && $categories->count() > 0)
                    @foreach ($categories as $category)
                        <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a href="#{{ $category->id }}">{{ $category->name }}</a></li>
                    @endforeach
                @endif

            </ul>
          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Saadon</span></strong>. All Rights Reserved
      </div>

    </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="assets/user/vendor/purecounter/purecounter.js"></script>
  <script src="assets/user/vendor/aos/aos.js"></script>
  <script src="assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/user/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/user/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/user/vendor/php-email-form/validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Template Main JS File -->
  <script src="assets/user/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $(document).ready(function()
    {
        $('img').lazyload();
    });
  </script>

</body>

</html>
