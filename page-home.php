<?php get_header();  ?>

<div class="main">
  <div class="container">
    
    <header class="video">

      <video autoplay loop>
        <source src="<?php bloginfo('template_url'); ?>/images/GroundFog.mp4">
      </video>

        
     <nav class="top-nav">
        <div class="content">
        <div class="logo">
          <img src=" <?php bloginfo('template_url') ?>/images/camille-whitelogo.png" alt="Camille van Groll">
        </div>
       
       <nav class="hamburgerMenu">
          <div class="fa fa-bars fa-2x"></div>
            <div>
             <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'primary'
               )); ?>
            </div>
       </nav>
       </div>
     </nav>

    <div class="content">
       <div class="title">
         <h1>Hi, I'm Camille and I'm a Front-End Developer.</h1>
       </div>
    </div><!-- innerWrapper -->
  </header><!--/.header-->

  <section class="about content" id="about">      
        <p>I'm based in Toronto, where I live in the West end. I have a range of technical skills <a href="#skills">(see below)</a> as well as an ability to work collaboratively and creatively. I enjoy working with people, and being inspired by the work that's being created around me. I have a BA in Psychology from McGill University. Check out some of my <a href="#portfolio">work</a>.  </p>
    
           <div class="headshot">
              <?php the_post_thumbnail(array(250,300)); ?>
              <!-- <div class="btn">
                  <p><a href="#portfolio">View Work</a></p>
              </div> -->
           </div>
  </section>
  

<section class="wrapper portfolio" id="portfolio">

    <h2>Portfolio</h2>

    <?php $portfolioQuery = new WP_Query(
      array(
        'post_type' => 'portfolio',
        'cat' => 7,
        // 'orderby' => 'title',
        // 'order' => 'DESC'

        )

    ); ?>

     <div class="featured"> 

    <?php if ($portfolioQuery->have_posts()): ?>
      <?php while($portfolioQuery->have_posts()): $portfolioQuery->
      the_post();?>
       <!--  stuff goes here -->
      
          <div class="featured-item">
             <?php the_post_thumbnail('full'); ?>

             <div class="portfolio-content">
               <h3><?php the_title(); ?></h3>
               <p><?php the_field('short_description'); ?></p>
               <div class="btn"><p><a href="<?php the_field('live_link');?>" target="_blank">View Site</a></p></div>
             </div>
         </div> 
      

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    </section>

    <section class="skills" id="skills">

      <div>
        <h3>Skills</h3>
          <ul>
            <li>HTML5</li>
            <li>CSS3</li>
            <li>WordPress/PHP</li>
          </ul>
      </div>

       <div>
          <ul>
           <li>Javascript</li>
           <li>JQuery</li>
           <li>Ajax API's</li>
         </ul>
       </div>
    
      <div>
        <h3>Tools</h3>
          <ul>
            <li>Git/Github</li>
            <li>Command Line</li>
            <li>Gulp</li>
          </ul>
      </div>
    </section>

    <section class="contact" id="contact">
    <h2>Get In Touch</h2>
    <div class="form">
      <?php the_content(); ?>
    </div>  

    </section>


    </div> <!--content -->
    
  </div> <!-- /.container -->

</div> <!-- /.main -->

  <?php get_footer(); ?>

 



