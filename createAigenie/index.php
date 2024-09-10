<?php
get_header()
  ?>


<section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
      <div class="container">
        <div class="flex flex-wrap -mx-4">
        <?php while (have_posts()) {
        the_post();
        $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); // Corrected
      ?>
          <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div class="mb-10 group wow fadeInUp" data-wow-delay=".2s">
              <div class="rounded overflow-hidden mb-8">
                <a href="blog-details.html" class="block">
                  <img
                    src="<?php echo $imagepath[0]?>"
                    alt="image"
                    class="
                      w-full
                      transition
                      group-hover:scale-125 group-hover:rotate-6
                    "
                  />
                </a>
              </div>
              <div>
                <span
                  class="
                    bg-primary
                    rounded
                    inline-block
                    text-center
                    py-1
                    px-4
                    text-xs
                    leading-loose
                    font-semibold
                    text-white
                    mb-5
                  "
                >
                <?php echo the_time('M d, Y'); ?> <!-- Dynamic date -->
                </span>
                <h3>
                  <a
                    href="<?php the_permalink()?>"
                    class="
                      font-semibold
                      text-xl
                      sm:text-2xl
                      lg:text-xl
                      xl:text-2xl
                      mb-4
                      inline-block
                      text-dark
                      hover:text-primary
                    "
                  >
                    <?php the_title(); ?>
                  </a>
                </h3>
                <p class="text-base text-body-color">
                <?php the_excerpt(); ?> <!-- Post excerpt -->
                </p>
               
              </div>
            </div>
          </div>
         <?php }?>
      </div>
    </section>
<!-- ====== Footer Section Start -->
<?php
get_footer()
  ?>

<!-- ====== Footer Section End -->

<!-- ====== Back To Top Start -->
<a href="javascript:void(0)" class="
        hidden
        items-center
        justify-center
        bg-primary
        text-white
        w-10
        h-10
        rounded-md
        fixed
        bottom-8
        right-8
        left-auto
        z-[999]
        hover:bg-dark
        back-to-top
        shadow-md
        transition
        duration-300
        ease-in-out
      ">
  <span class="w-3 h-3 border-t border-l border-white rotate-45 mt-[6px]"></span>
</a>
<!-- ====== Back To Top End -->

<!-- ====== All Scripts -->

<script src="assets/js/main.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("myForm").addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent form submission

      // Perform AJAX request
      var formData = new FormData(this);
      var xhr = new XMLHttpRequest();
      xhr.open("POST", this.action, true);
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            // Data saved successfully, show modal
            showModal();
          } else {
            // Handle error
            console.error("Error:", xhr.statusText);
          }
        }
      };
      xhr.send(formData);
    });
  });

  // Function to show the modal
  function showModal() {
    document.getElementById('modalBackdrop').classList.remove('hidden');
  }

  // Function to hide the modal
  function hideModal() {
    document.getElementById('modalBackdrop').classList.add('hidden');
  }

  // Event listener to close the modal when the close button is clicked
  document.getElementById('closeModal').addEventListener('click', hideModal);




  // for video


  // ==== for menu scroll
  const pageLink = document.querySelectorAll(".ud-menu-scroll");

  pageLink.forEach((elem) => {
    elem.addEventListener("click", (e) => {
      e.preventDefault();
      document.querySelector(elem.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
        offsetTop: 1 - 60,
      });
    });
  });

  // section menu active
  function onScroll(event) {
    const sections = document.querySelectorAll(".ud-menu-scroll");
    const scrollPos =
      window.pageYOffset ||
      document.documentElement.scrollTop ||
      document.body.scrollTop;

    for (let i = 0; i < sections.length; i++) {
      const currLink = sections[i];
      const val = currLink.getAttribute("href");
      const refElement = document.querySelector(val);
      const scrollTopMinus = scrollPos + 73;
      if (
        refElement.offsetTop <= scrollTopMinus &&
        refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
      ) {
        document
          .querySelector(".ud-menu-scroll")
          .classList.remove("active");
        currLink.classList.add("active");
      } else {
        currLink.classList.remove("active");
      }
    }
  }
  var video = document.getElementById("myVideo");

  // Play the video when the page loads
  video.play();

  // Loop the video when it ends
  video.addEventListener('ended', function () {
    video.currentTime = 0; // Restart the video
    video.play();
  }, false);
  window.document.addEventListener("scroll", onScroll);
</script>
</body>

</html>