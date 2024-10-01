<?php include 'header.php'; ?>
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">Create Your Pet Memorial</h1>
                       
                        <figure class="sub_banner_content_top_shape mb-0 position-absolute left_right_shape">
                            <img src="assets/images/sub_banner_content_top_shape.png" alt="" class="img-fluid">
                        </figure>
                        <figure class="sub_banner_pink_foot_shape mb-0 position-absolute top_bottom_shape">
                            <img src="assets/images/sub_banner_pink_foot.png" alt="" class="img-fluid">
                        </figure>
                        <figure class="sub_banner_green_foot_shape mb-0 position-absolute top_bottom_shape">
                            <img src="assets/images/sub_banner_green_foot.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
            </div>
            <figure class="sub_banner_left_shape mb-0 position-absolute top_bottom_shape">
                <img src="assets/images/sub_banner_left_shape.png" alt="" class="img-fluid">
            </figure>
            <figure class="sub_banner_right_shape mb-0 position-absolute top_bottom_shape">
                <img src="assets/images/sub_banner_right_shape.png" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
</div>
<!-- CHECKOUT SECTION -->
<section class="product-section nft-section checkout-section">
    
<form action="process_payment.php" method="POST">
    <div class="container">
        <div class="row wow fadeInUp" data-aos="fade-up" data-wow-duration="2s">
            <div class="col-lg-12 col-md-12 col-12 mb-md-0 mb-4">
                <h3 class="text-white mb-lg-4 mb-3">Billing details</h3>
                <div class="create-nft-box float-left w-100 position-relative">
                    <div class="form-group">
                        <label>Fur Baby's Name *</label>
                        <input type="text" class="form-control" name="furbaby_name" placeholder="Fur Baby's Name:" required>
                    </div>
                    <div class="form-group">
                        <label>Date of Birth *</label>
                        <input type="date" class="form-control" name="dob" required>
                    </div>
                    <div class="form-group special">
                        <label>Date of Passing *</label>
                        <input type="date" class="form-control" name="dop" required>
                    </div>
                    <div class="form-group special">
                        <label>Please select the most dominant breed of your Furbaby *</label>
                        <select class="form-control" name="breed" required>
                            <option>America</option>
                            <option>Australia</option>
                            <option>Saudia</option>
                            <option>Belgium</option>
                        </select>
                    </div>
                    <div class="form-group special">
                        <label>Parent's Name *</label>
                        <input type="text" class="form-control" name="parent_name" placeholder="Parent's Name" required>
                    </div>
                    <div class="form-group special">
                        <label>Parent's Email address *</label>
                        <input type="email" class="form-control" name="parent_email" placeholder="Email:" required>
                    </div>
                     <div class="form-group special">
                        <label>Epitaph: </label>
                        <textarea class="form-control" name="description" ></textarea>
                        <p>To be displayed at your baby's Memorial.</p>
                        <p>A few words to describe your thoughts about your departed baby.</p>
                        <p>50 more characters (approximately 8 words) maximum please.</p> 
                    </div>
                     <div class="form-group special">
                        <label>Special memories about your departed Baby:</label>
                        <textarea class="form-control" name="memories" ></textarea>
                        <p class="para">Tip: If you have a story already written, copy and paste it into the box below. Use the Enter/Return key if you want to start a new paragraph.
60,000 more characters (approximately 10,000 words) maximum please.</p> 
                    </div>
                    <!-- Location Radio Group -->
                    <div class="form-group special">
                        <label>What area of Rainbow Bridge would you like your Fur Baby to reside in?</label>
                    </div>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="location" value="lake" data-amount="500" required>
                            <div class="radio-item">
                                <img src="assets/images/lake.png" alt="At the Lake">
                                <label>At the Lake</label>
                            </div>
                        </label>
                        <label>
                            <input type="radio" name="location" value="meadow" data-amount="500">
                            <div class="radio-item">
                                <img src="assets/images/meadory.png" alt="At the Meadow">
                                <label>At the Meadow</label>
                            </div>
                        </label>
                        <label>
                            <input type="radio" name="location" value="hillside" data-amount="500">
                            <div class="radio-item">
                                <img src="assets/images/hillside.png" alt="On the Hillside">
                                <label>On the Hillside</label>
                            </div>
                        </label>
                    </div>

                    <!-- Season Radio Group -->
                    <div class="form-group special">
                        <label>In what season of Rainbow Bridge would you like your Fur Baby to reside?</label>
                    </div>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="season" value="spring" data-amount="500" required>
                            <div class="radio-item">
                                <img src="assets/images/apring.png" alt="Spring">
                                <label>Spring</label>
                            </div>
                        </label>
                        <label>
                            <input type="radio" name="season" value="fall" data-amount="500">
                            <div class="radio-item">
                                <img src="assets/images/fall.png" alt="Fall">
                                <label>Fall</label>
                            </div>
                        </label>
                        <label>
                            <input type="radio" name="season" value="summer" data-amount="500">
                            <div class="radio-item">
                                <img src="assets/images/summer.png" alt="Summer">
                                <label>Summer</label>
                            </div>
                        </label>
                        <label>
                            <input type="radio" name="season" value="winter" data-amount="500">
                            <div class="radio-item">
                                <img src="assets/images/winter.png" alt="Winter">
                                <label>Winter</label>
                            </div>
                        </label>
                    </div>

                    <!-- Memorial Stone Radio Group -->
                    <div class="form-group special">
                        <label>Memorial Stone</label>
                    </div>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="stone" value="heart" data-amount="500" required>
                            <div class="radio-item">
                                <img src="assets/images/heart.png" alt="Heart">
                                <label>Heart</label>
                            </div>
                        </label>
                        <label>
                            <input type="radio" name="stone" value="two-tone-granite" data-amount="500">
                            <div class="radio-item">
                                <img src="assets/images/granite.png" alt="Two Tone Granite">
                                <label>Two Tone Granite</label>
                            </div>
                        </label>
                        <label>
                            <input type="radio" name="stone" value="leafy" data-amount="500">
                            <div class="radio-item">
                                <img src="assets/images/leafy.png" alt="Leafy">
                                <label>Leafy</label>
                            </div>
                        </label>
                        <label>
                            <input type="radio" name="stone" value="scroll-stone" data-amount="500">
                            <div class="radio-item">
                                <img src="assets/images/stone.png" alt="Scroll Stone">
                                <label>Scroll Stone</label>
                            </div>
                        </label>
                    </div>

                    <!-- Toys and Articles Checkbox Group -->
                    <div class="form-group special">
                        <label>Toys and Articles you want placed at the Residency:</label>
                    </div>
                    <div class="checkbox-group">
                        <label>
                            <input type="checkbox" name="toys[]" value="australian-flag" data-amount="500">
                            <div class="checkbox-item">
                                <img src="assets/images/Australianflag.gif" alt="Australian Flag">
                                <label>Australian Flag</label>
                            </div>
                        </label>
                        <label>
                            <input type="checkbox" name="toys[]" value="ball-of-yarn" data-amount="500">
                            <div class="checkbox-item">
                                <img src="assets/images/ballyarn.png" alt="Ball Of Yarn">
                                <label>Ball Of Yarn</label>
                            </div>
                        </label>
                        <label>
                            <input type="checkbox" name="toys[]" value="bandana" data-amount="500">
                            <div class="checkbox-item">
                                <img src="assets/images/bandana.png" alt="Bandana">
                                <label>Bandana</label>
                            </div>
                        </label>
                        <label>
                            <input type="checkbox" name="toys[]" value="bird-cage" data-amount="500">
                            <div class="checkbox-item">
                                <img src="assets/images/birdcage.png" alt="Bird Cage">
                                <label>Bird Cage</label>
                            </div>
                        </label>
                    </div>

                    <!-- Shrubbery and Plants Checkbox Group -->
                    <div class="form-group special">
                        <label>Shrubbery, Potted Plants and Articles you want placed at the Residency:</label>
                    </div>
                    <div class="checkbox-group">
                        <label>
                            <input type="checkbox" name="shrubs[]" value="basket-of-leaves" data-amount="500">
                            <div class="checkbox-item">
                                <img src="assets/images/leafbasket.gif" alt="Basket Of Leaves">
                                <label>Basket Of Leaves</label>
                            </div>
                        </label>
                        <label>
                            <input type="checkbox" name="shrubs[]" value="bushes" data-amount="500">
                            <div class="checkbox-item">
                                <img src="assets/images/red_bleeding_heart.gif" alt="Bushes">
                                <label>Bleeding Heart</label>
                            </div>
                        </label>
                        <label>
                            <input type="checkbox" name="shrubs[]" value="cacti" data-amount="500">
                            <div class="checkbox-item">
                                <img src="assets/images/box.gif" alt="Cacti">
                                <label>CardBoard Box</label>
                            </div>
                        </label>
                        <label>
                            <input type="checkbox" name="shrubs[]" value="daisies" data-amount="500">
                            <div class="checkbox-item">
                                <img src="assets/images/ChanukahMenorah.gif" alt="Daisies">
                                <label>Chanukah Manorah</label>
                            </div>
                        </label>
                    </div>

                    <!-- Pay Now Button -->
                    <div class="form-group special">
                        <h4>Total: ₹ <span id="total" name="total_amount">0</span></h4>
                        <input type="hidden" name="total_amount" id="total_amount" value="0">
                        <button type="submit" id="pay-now" class="btn btn-primary">Pay Now</button>
                    </div>

                    <!-- Notes -->
                    <p class="note">
                        *Note: The basic residency package is $10.
                    </p>
                    <p class="note1">
                        *Note: Payment will be taken online with Paypal
                    </p>
                </div>
            </div>
        </div>
    </div>
</form>
</section>
<!-- STATISTICS_NEWSLETTER COMBO SECTION -->
<section class="stats_news_combo_section">
    <!-- STATISTICS SECTION -->
    <div class="statistics_section">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="statistics_box box1">
                        <figure>
                            <img src="assets/images/statistics_image1.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <div class="statistics_span_wrapper">
                            <span class="counter">85</span>
                            <span class="plus">+</span>
                        </div>
                        <p class="text-size-18 mb-0">Awards Win</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="statistics_box box2">
                        <figure>
                            <img src="assets/images/statistics_image2.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <div class="statistics_span_wrapper">
                            <span class="counter">96</span>
                            <span class="plus">k</span>
                        </div>
                        <p class="text-size-18 mb-0">Happy Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="statistics_box box3">
                        <figure>
                            <img src="assets/images/statistics_image3.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <div class="statistics_span_wrapper">
                            <span class="counter">60</span>
                            <span class="plus">+</span>
                        </div>
                        <p class="text-size-18 mb-0">Professional Vets</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="statistics_box box4">
                        <figure>
                            <img src="assets/images/statistics_image4.png" alt="" class="img-fluid hover-effect">
                        </figure>
                        <div class="statistics_span_wrapper">
                            <span class="counter">99</span>
                            <span class="plus">.99%</span>
                        </div>
                        <p class="text-size-18 mb-0">Protection</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- NEWSLETTER SECTION -->
    <div class="newsletter_section">
        <div class="container">
            <div class="newsletter_box position-relative">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-12 order-md-1 order-2">
                        <figure class="newsletter_image mb-0 position-absolute">
                            <img src="assets/images/newsletter_image.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-12 order-md-2 order-1">
                        <div class="newsletter_content">
                            <h6>Newsletter</h6>
                            <h2>Subscribe To Our Newsletter</h2>
                            <form method="POST">
                                <div class="form-row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="email" name="email" id="emailadd" class="form-control" placeholder="Enter Your Email:">
                                        <div class="input-group-append form-button">
                                            <button class="default-btn" name="btnsubmit" id="submitbtn" type="submit">Subscribe Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <figure class="newsletter_yellow_shape mb-0 position-absolute left_right_shape">
                    <img src="assets/images/newsletter_yellow_shape.png" alt="" class="img-fluid">
                </figure>
            </div>
            <figure class="newsletter_purple_foot mb-0 position-absolute top_bottom_shape">
                <img src="assets/images/newsletter_purple_foot.png" alt="" class="img-fluid">
            </figure>
            <figure class="newsletter_green_foot mb-0 position-absolute top_bottom_shape">
                <img src="assets/images/newsletter_green_foot.png" alt="" class="img-fluid">
            </figure>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const totalElement = document.getElementById('total');
        const totalInput = document.getElementById('total_amount');
        const payNowButton = document.getElementById('pay-now');

        // Function to calculate total
        function calculateTotal() {
            let total = 0;

            // Add the value of the selected radio buttons
            const radios = document.querySelectorAll('input[type="radio"]:checked');
            radios.forEach(radio => {
                total += parseFloat(radio.getAttribute('data-amount'));
            });

            // Add the value of the checked checkboxes
            const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            checkboxes.forEach(checkbox => {
                total += parseFloat(checkbox.getAttribute('data-amount'));
            });

            // Update total amount on the page
            totalElement.innerText = total;
            totalInput.value = total;
        }

        // Listen for changes in radio buttons and checkboxes
        const inputs = document.querySelectorAll('input[type="radio"], input[type="checkbox"]');
        inputs.forEach(input => {
            input.addEventListener('change', calculateTotal);
        });

        // Handle Pay Now button click
        payNowButton.addEventListener('click', function () {
            const totalAmount = totalInput.value;
            
            // Proceed with PayPal integration here
            if (totalAmount > 0) {
                window.location.href = `https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=your-paypal-email@example.com&item_name=Rainbow Bridge Residency&amount=${totalAmount}&currency_code=INR`;
            } else {
                alert('Please select some options before proceeding.');
            }
        });
    });
</script>
<?php include 'footer.php'; ?>