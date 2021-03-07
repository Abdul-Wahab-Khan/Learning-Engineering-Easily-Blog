

  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>{{config('app.name')}}</h3>
            <p>
              Qamber square <br>
              5th avenue, Kabul<br>
              Afghanistan <br><br>
              <strong>Whatsapp:</strong> +93779507879<br>
              <strong>Email:</strong> aw.hewadmal@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/services">Services</a></li>
            </ul>
          </div>

          {{-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> --}}

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Developer</h4>
            <ul>
                <a href="/aboutDeveloper" class="btn btn-outline-secondary mt-1">Abdout Developer</a>
                <a href="https://github.com/abdul-wahab-khan" target="_blank" class="btn btn-outline-secondary mt-1"><i class="fa fa-github" aria-hidden="true"></i> Fork me on GitHub</a>
                <a href="https://twitter.com/abdul-wahab-khan" target="_blank" class="btn btn-outline-secondary mt-1"><i class="fa fa-twitter" aria-hidden="true"></i> Say Hi on Twitter !</a>
            </ul>
        </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe if you want more of these information</p>
            <form action="{{route('newsletter-subscriptions.store')}}" method="post">
                @csrf
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>LEE</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Developed by <a href="https://hewadmalgraphics.com/">Hewadmal Graphics</a><br>
          Theme Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/hewadmal.graphics" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
