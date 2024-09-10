<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CreatAIGenie</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/tailwind.css">

  <!-- ==== WOW JS ==== -->
  <script src="assets/js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
</head>

<body>
  <!-- ====== Navbar Section Start -->
  <?php include 'navbar.php'; ?>
  <!-- ====== Navbar Section End -->

  <!-- Waitlist Start -->
  <section class="text-gray-400 bg-gray-900 body-font  wow fadeInUp" data-wow-duration="2s">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
      <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
        <h1 class="title-font  text-4xl text-white font-bold">Join Our Waitlist!</h1>
        <p class="leading-relaxed mt-4 text-2xl">Be the first to experience our latest updates, exclusive offers, and exciting features!</p>
        <p class="leading-relaxed mt-4">Our waitlist members enjoy:</p>
        <ul class="list-disc pl-5">
          <li>Early access to new features and updates</li>
          <li>Exclusive discounts and promotions</li>
          <li>Priority support and assistance</li>
          <li>And much more!</li>
        </ul>
        <p class="leading-relaxed mt-4">Don't miss out - sign up now!</p>
      </div>
      <div class="lg:w-2/6 md:w-1/2 bg-gray-800 bg-opacity-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
        <h2 class="text-white text-lg font-medium title-font mb-5">Sign Up</h2>
        <form id="waitlistForm" action="insert.php" method="post" onsubmit="return validateForm()">
          <div class="relative mb-4">
            <label for="fullname" class="leading-7 text-sm text-gray-400">Full Name</label>
            <input type="text" id="fullname" name="fullname" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
          <p class="text-xs mt-3">You will receive an email upon form submission</p>
        </form>
      </div>
    </div>
  </section>
  <!-- Waitlist End -->

  <!-- Footer Section Start -->
  <?php include 'footer.php'; ?>
  <!-- Footer Section End -->

  <!-- JavaScript for form validation -->
  <script>
    function validateForm() {
      var fullName = document.getElementById('fullname').value.trim();
      var email = document.getElementById('email').value.trim();

      if (fullName === '' || email === '') {
        alert('Please fill in all fields.');
        return false;
      }

      // Regular expression for email validation
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email)) {
        alert('Please enter a valid email address.');
        return false;
      }

      return true;
    }
  </script>
</body>

</html>
