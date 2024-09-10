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
  <style>
    /* Sticky header styles */
    .ud-header.sticky {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>
  <!-- Navbar Section -->
  <div class="ud-header bg-transparent absolute top-0 left-0 z-40 w-full flex items-center">
    <div class="container">
      <div class="flex -mx-4 items-center justify-between relative">
        <div class="px-4 w-60 max-w-full">
          <a href="index.php" class="navbar-logo w-full block py-5 text-[#ae27eb] text-2xl font-bold" style="color:#ae27eb">CreatAIGenie</a>
        </div>
        <div class="flex px-4 justify-between items-center w-full">
          <div>
            <button id="navbarToggler" class="block absolute right-4 top-1/2 -translate-y-1/2 lg:hidden focus:ring-2 ring-primary px-3 py-[6px] rounded-lg">
              <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
              <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
              <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
            </button>
            <nav id="navbarCollapse" class="absolute py-5 lg:py-0 lg:px-4 xl:px-6 bg-white lg:bg-transparent shadow-lg rounded-lg max-w-[250px] w-full lg:max-w-full lg:w-full right-4 top-full hidden lg:block lg:static lg:shadow-none">
              <ul class="blcok lg:flex">
                <li class="relative group">
                  <a href="index.php" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0">Home</a>
                </li>
                <li class="relative group">
                  <a href="#about" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">About</a>
                </li>
                <li class="relative group">
                  <a href="blog-grids.php" class="text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">Blogs</a>
                </li>
                <li class="relative group">
                  <a href="#team" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">Team</a>
                </li>
                <li class="relative group">
                  <a href="#contact" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
            <a href="waitlist.php" class="text-base font-medium text-white bg-white bg-opacity-20 rounded-lg py-3 px-6 hover:bg-opacity-100 hover:text-dark signUpBtn duration-300 ease-in-out">Join Our Waitlist</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Navbar Section End -->

  <!-- JavaScript to make header sticky -->
  <script>
    window.addEventListener('scroll', function() {
      const header = document.querySelector('.ud-header');
      if (window.scrollY > 0) {
        header.classList.add('sticky');
      } else {
        header.classList.remove('sticky');
      }
    });
  </script>
</body>

</html>
