<?php
get_header();
the_post();
?>
<style>
    about-container 
    .wp-block-columns{
        margin: 45px;
        display: flex;
        gap: 45px;
        flex-wrap: wrap;
    }
    .wp-block-column p{
       
        margin: 20px;
    }
    .wp-block-image{
        width: 100%;
    }
    .wp-block-pullquote{
        color: #637381;
        line-height: 25px;
        font-size: 20px;    }
    .has-black-color{
        color: #637381;
        line-height: 25px;
    }
</style>
<section id="about" class="pt-20 lg:pt-[120px] pb-20 lg:pb-[120px] bg-[#f3f4fe]">
  <div class="container">
    <div class="bg-white wow fadeInUp" data-wow-delay=".2s">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4">
        <span class="
                      text-sm
                      font-medium
                      text-white
                      py-2
                      px-5
                      bg-primary
                      inline-block
                      mb-5
                    ">
                <?php the_title()?>
              </span>
              <h2 class="
                      font-bold
                      text-3xl
                      sm:text-4xl
                      2xl:text-[40px]
                      sm:leading-snug
                      text-dark
                      mb-6
                    ">
                    About Us
              </h2>
          <div class="width-full
                  lg:flex
                  items-center
                  justify-between
                  border
                  overflow-hidden
                ">
                
              <div class="about-container mt-5 flex   xxl:flex-wrap gap-[5px] text-base text-body-color mb-9 leading-relaxed">
              <?php the_post_thumbnail(array(700,700));?>
              <?php echo get_the_content();?> 
              
</div>
            
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>
