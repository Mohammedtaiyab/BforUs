<!--Start Footer-->
	<footer>

		<div class="footer-svg">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 80" style="enable-background:new 0 0 1920 80;" xml:space="preserve">
				<path class="st0" d="M0,27.2c589.2,129.4,1044-69,1920,31v-60H3.2L0,27.2z" />
			</svg>
		</div>
<!-- 	<div class="whatsapp">
		<button class="btn">Whatsapp</button>
	</div> -->
		<div class="footer-row2">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<h5>Contact Us</h5>
						<ul class="footer-address-list">
							<li>
								<span><i class="fa fa-envelope"></i></span>
								<p>Email <span> <a href="mailto:bforus.in@gmail.com">BforUS.in@gmail.com</a></span></p>
							</li>
							<li>
								<span><i class="fa fa-phone"></i></span>
								<p>Phone <span> <a href="tel:+918080096927">+91 8080096927</a></span></p>
							</li>
							<li>
								<span><i class="fa fa-map-marker"></i></span>
								<p>Address <span>Kondhwa,Pune IN</span></p>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6">
						<h5>Company</h5>
						<ul class="footer-address-list link-hover">
							<li><a href="home.php">About us</a></li>
							<li><a href="Service.php">Services</a></li>
							<li><a href="portfolio.php">Portfolio</a></li>
							<li><a href=""></a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6">
						<h5>Service</h5>
						<ul class="footer-address-list link-hover">
							<li><a href="Service.php">Website Development</a></li>
							<li><a href="#">Mobile App Development</a></li>
							<li><a href="#">Graphic Design</a></li>
							<li><a href="#">Digital Marketing</a></li>
							
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6">
						<h5>Support</h5>
						<ul class="footer-address-list link-hover">
							<li><a href="contact.php">Contact</a></li>
							<li><a href="javascript:void(0)">Privacy Policy</a></li>
							<li><a href="javascript:void(0)">Sitemap</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<hr class="hline">
		<div class="footer-row3">
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer-social-media-icons">
						
							</div>
							<div class="footer-">
								<p>Copyright &copy; 2020 BforUS. All rights reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--End Footer-->
	<!--Responsive Mobile Menu-->
	 <div id="menu" class="res-menu p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content full">
        <div class="modal-header" data-dismiss="modal">
          <img src="images/bforus.png" alt="Logo" width="100"/> <i class="fa fa-times-circle"></i>
        </div>
        <div class="menu modal-body">
          <div class="m-nav">
            <nav class="navbar p0">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link " href="home.php" id="homepage">Home</a>
                 
                </li>
              <li class="nav-item dropdown">
							<a class="nav-link" href="service.php" id="Services" aria-haspopup="true" aria-expanded="false">Services</a>
							
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="portfolio.php" id="Portfolio" aria-haspopup="true" aria-expanded="false">Portfolio</a>
							
						</li>
						
						<li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("mynav");
var btns = header.getElementsByClassName("nav-item");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace("active", "");
  this.className += " active";
  });
    <script>
	<!--scroll to top-->
	<a id="scrollUp" href="#top"></a>
	<!-- js placed at the end of the document so the pages load fater -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/isotope-min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/index.js"></script>
	<!--common script file-->
    <script src="js/main.js"></script>
<script type="text/javascript">
			$(document).ready(function () {
				$('.wide-block').click(function () {
					$(this).toggleClass('para');
					
				});

			});
				$(document).ready(function () {
				$('.click').click(function () {
					$(this).toggleClass('ckl');

				});

			});
		</script>
</body>

</html>