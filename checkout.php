<?php include 'header.php'; ?>
<section class="banner-section">
<div class="container">
<div class="row">
<div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
<div class="col-lg-8 col-md-12 col-sm-12 col-12 text-center">
<div class="banner-section-content">
<h1 data-aos="fade-up">Create Your Pet Memorial</h1>
<!-- Other banner content -->
</div>
</div>
<div class="col-lg-2 col-md-12 col-sm-12 col-12 d-lg-block d-none"></div>
</div>
<!-- Other banner images -->
</div>
</section>

<!-- CHECKOUT SECTION -->
<section class="product-section nft-section checkout-section">
<form action="process_payment.php" method="POST">
<div class="container">
<div class="row wow fadeInUp" data-aos="fade-up" data-wow-duration="2s">
<div class="col-lg-12 col-md-12 col-12 mb-md-0 mb-4">
<h3 class="text-white mb-lg-4 mb-3">Billing details</h3>
<div class="create-nft-box float-left w-100 position-relative">
<!-- Form fields -->
<div class="form-group">
<label>Fur Baby's Name *</label>
<input type="text" class="form-control" name="furbaby_name" placeholder="Fur Baby's Name:" required>
</div>
<!-- Other form fields -->
<!-- Preview Button -->
<div class="form-group special">
<button type="button" id="preview-button" class="btn btn-info">Preview</button>
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
</div>
</form>
</section>

<!-- STATISTICS_NEWSLETTER COMBO SECTION -->
<section class="stats_news_combo_section">
<!-- Other sections -->
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

    // Function to preview the form data
    function previewFormData() {
        const formData = {
            furbabyName: document.getElementsByName('furbaby_name').value,
                          dob: document.getElementsByName('dob').value,
                          dop: document.getElementsByName('dop').value,
                          breed: document.getElementsByName('breed').value,
                          parentName: document.getElementsByName('parent_name').value,
                          parentEmail: document.getElementsByName('parent_email').value,
                          epitaph: document.getElementsByName('description').value,
                          memories: document.getElementsByName('memories').value,
                          location: document.querySelector('input[name="location"]:checked').value,
                          season: document.querySelector('input[name="season"]:checked').value,
                          stone: document.querySelector('input[name="stone"]:checked').value,
                          toys: Array.from(document.querySelectorAll('input[name="toys[]"]:checked')).map(toy => toy.value),
                          shrubs: Array.from(document.querySelectorAll('input[name="shrubs[]"]:checked')).map(shrub => shrub.value)
        };

        // Create the preview content
        let previewContent = `
        <h2>Preview of Your Pet Memorial</h2>
        <p><strong>Fur Baby's Name:</strong> ${formData.furbabyName}</p>
        <p><strong>Date of Birth:</strong> ${formData.dob}</p>
        <p><strong>Date of Passing:</strong> ${formData.dop}</p>
        <p><strong>Breed:</strong> ${formData.breed}</p>
        <p><strong>Parent's Name:</strong> ${formData.parentName}</p>
        <p><strong>Parent's Email:</strong> ${formData.parentEmail}</p>
        <p><strong>Epitaph:</strong> ${formData.epitaph}</p>
        <p><strong>Special Memories:</strong> ${formData.memories}</p>
        <p><strong>Location:</strong> ${formData.location}</p>
        <p><strong>Season:</strong> ${formData.season}</p>
        <p><strong>Memorial Stone:</strong> ${formData.stone}</p>
        <p><strong>Toys and Articles:</strong> ${formData.toys.join(', ')}</p>
        <p><strong>Shrubbery and Plants:</strong> ${formData.shrubs.join(', ')}</p>
        `;

        // Display the preview in a new window or popup
        const previewWindow = window.open('', 'preview', 'width=800,height=600');
        previewWindow.document.write(`
        <html>
        <head>
        <title>Preview</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        </style>
        </head>
        <body>
        ${previewContent}
        </body>
        </html>
        `);
    }

    // Add event listener to the preview button
    document.getElementById('preview-button').addEventListener('click', previewFormData);
});
</script>

<?php include 'footer.php'; ?>
