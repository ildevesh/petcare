<?php include 'header.php'; ?>
    <!-- SUB BANNER SECTION -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">All Memorials</h1>
                      
                       
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
<!-- OUR PACKAGES SECTION -->
<section class="our_packages_section">
    <div class="container">
        <!-- <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="our_packages_content">
                    <h6>Our Packages</h6>
                    <h2>Our Plans & Pricing</h2>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-8">
                <div class="row position-relative" data-aos="fade-up">
                    <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petcare";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data
$sql = "SELECT * FROM furbaby_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data for each row
    while($row = $result->fetch_assoc()) {
        // Display each row in the structure
        ?>
                    <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                        <div class="our_packages_box_content">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="first_portion">
                                        <!-- <h4>Friendly Package</h4>
                                        <div class="price_wrapper">
                                            <sup>$</sup>
                                            <span>100/</span>
                                            <span class="visit">Visit</span>
                                        </div> -->
                                        <img src="assets/images/<?php echo $row['image_path']; ?>">
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="second_portion">
                                        <h4><?php echo $row['furbaby_name']; ?></h4>
                                        <p>From<?php echo $row['dob']; ?> to <?php echo $row['dop']; ?></p>
                                        <p><?php echo $row['description']; ?></p>
                                       
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <figure class="mb-0 packages_box_shape position-absolute left_right_shape">
                        <img src="assets/images/packages_box_left_shape.png" alt="" class="img-fluid">
                    </figure>
                    <?php
    }
} else {
    echo "0 results";
}

$conn->close();
?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="our_packages_content">
                            <h6>Recent Memorials</h6>
                        </div>
                    </div>
                </div>
                <div class="row position-relative" data-aos="fade-up">
                    <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                        <div class="our_packages_box_content">
                             
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="first_portion">
                                        <!-- <h4>Friendly Package</h4>
                                        <div class="price_wrapper">
                                            <sup>$</sup>
                                            <span>100/</span>
                                            <span class="visit">Visit</span>
                                        </div> -->
                                        <img src="assets/images/dog.jpg" style="max-width: 100%">
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="second_portion">
                                        <h4>Tommy</h4>
                                        <p class="date">From 24th August, 2013 to 28th August, 2024</p>
                                        
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <figure class="mb-0 packages_box_shape position-absolute left_right_shape">
                        <img src="assets/images/packages_box_left_shape.png" alt="" class="img-fluid">
                    </figure>
                   <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                        <div class="our_packages_box_content">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="first_portion">
                                        <!-- <h4>Friendly Package</h4>
                                        <div class="price_wrapper">
                                            <sup>$</sup>
                                            <span>100/</span>
                                            <span class="visit">Visit</span>
                                        </div> -->
                                        <img src="assets/images/dog.jpg" style="max-width: 100%">
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="second_portion">
                                        <h4>Tommy</h4>
                                        <p class="date">From 24th August, 2013 to 28th August, 2024</p>
                                       
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                        <div class="our_packages_box_content">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="first_portion">
                                        <!-- <h4>Friendly Package</h4>
                                        <div class="price_wrapper">
                                            <sup>$</sup>
                                            <span>100/</span>
                                            <span class="visit">Visit</span>
                                        </div> -->
                                        <img src="assets/images/dog.jpg" style="max-width: 100%">
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="second_portion">
                                        <h4>Tommy</h4>
                                        <p class="date">From 24th August, 2013 to 28th August, 2024</p>
                                       
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <figure class="mb-0 packages_left_shape position-absolute top_bottom_shape">
            <img src="assets/images/packages_left_shape.png" alt="" class="img-fluid">
        </figure>
        <figure class="mb-0 packages_right_shape position-absolute">
            <img src="assets/images/packages_right_shape.png" alt="" class="img-fluid">
        </figure>
    </div>
</section>

<?php include 'footer.php'; ?>