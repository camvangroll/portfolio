

<?php get_header();  ?>

<!-- Toolkit icon by Plainicon from The Noun Project-->
<!-- Terminal icon by useicon.com from The Noun Project -->
<!-- Nodes by Emily van den Heever from The Noun Project -->
<!-- chess piece 'rook' by by anbileru adaleru -->
<!-- brain by by Amy Schwartz -->
<!-- hammer by by Edward Boatman -->


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
         <div class="btn">
        <p><i class="fa fa-long-arrow-right fa-3"></i><a href="#portfolio">View Work</a></p>
      </div>
       </div>
      

    </div><!-- innerWrapper -->
  </header><!--/.header-->

  <section class="about content" id="about">  
          <h2 class="about-title">About Me</h2>  
            <div class="info">
              <p>I'm from Toronto, where I live in the West end. I love working in team environments 
                 and being inspired by the work that's being created around me. I have a background in 
                 the service industry (Grand Electric, Terroni), and resultantly a strong ability to 
                 communicate, problem solve under pressure, and work client side. I enjoy working in fast-paced environments
                  and always maintain a positive attitude.</p>
                <div class="headshot">
                  <?php the_post_thumbnail(array(250,300)); ?>
                </div>
            <!--  </div>

             <div class="info"> -->
               <div>
                  <h2>How I work</h2>
                  <div class="skills"> 
                     <img src=" <?php bloginfo('template_url') ?>/images/noun_168220_cc.jpg" alt="brain stem"> 
                     <img src=" <?php bloginfo('template_url') ?>/images/noun_190283_cc.jpg" alt="chess piece"> 
                     <img src=" <?php bloginfo('template_url') ?>/images/noun_104502_cc.jpg" alt="chess piece"> 
                  </div>   
                   <p> I have a strong work ethic, and can apply to both critical thinking and creativity to a project. I have a BA in Psychology and enjoy applying those concepts to
                      my work as a developer. When I start a new project I always begin with strategy before breaking down the technical aspects. I like thinking about how a user will interact with a site, 
                      and what the goal is that I'm trying to communicate. 
                  </p> 
                </div>

                <div>
                 <h2>Skills</h2>
                   <div class="skills">           
                     <i class="fa fa-code"></i>
                     <img  class="hammer" src=" <?php bloginfo('template_url') ?>/images/noun_168_cc.jpg" alt="hammer"> 
                     <i class="devicon-git-plain"></i>         
                  </div> 
                   <p>I have an in depth understanding of HTML5 and CSS3, and experience working with JQuery, 
                    Javascript, Ajax Api's, WordPress and PHP. I'm also comfortable using Git and GitHub, the Command Line, 
                    Gulp and Sass. Check out some of my work below.
                  </p>
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
               <h3>
                  <?php the_title(); ?>
                </h3>

               <h4>
                 Tools Used:
                 <?php while( has_sub_field('technologies')): ?>

                   <span> <?php the_sub_field('technology') ?></span>
                    <?php endwhile; ?>
                </h4>
               

               <p><?php the_field('short_description'); ?></p>
               
               <div class="btn"><p><a href="<?php the_field('live_link');?>" target="_blank">View Site</a></p></div>
             </div>
         </div> 
      

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    </section>
    <section class="contact content" id="contact">
   
       <div class="form">
          <h2>Drop me a line</h2>
         <?php the_content(); ?>
       </div>

       <div class="social">
         <h3>Find Me here</h3>
           <p>
             <img src=" <?php bloginfo('template_url') ?>/images/noun_119359_cc.jpg" alt="">
              220 Gladstone Ave.
              Toronto, ON.
          </p>
        <h3>Contact</h3>
          <p>
            <img src=" <?php bloginfo('template_url')?>/images/noun_106122_cc.jpg " alt="envelope">
            hello@camillevangroll.com
          </p>
          <p>
           <img src=" <?php bloginfo('template_url')?>/images/noun_70720_cc.jpg " alt="phone">
           647 400 9902 
          </p>
        <h3>Connect</h3>
        <p>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-linkedin"></i>
          <i class="fa fa-instagram"></i>
          <i class="fa fa-github"></i>
        </p>
      </div>

    </section>

    </div> <!--content -->
    
  </div> <!-- /.container -->

</div> <!-- /.main -->

  <?php get_footer(); ?>

 



