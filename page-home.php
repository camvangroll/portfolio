

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

        
   <div class="navContainer">
       <nav class="top-nav">
        <div class="content">
          <div class="logo">
            <img src=" <?php bloginfo('template_url') ?>/images/camille-whitelogo.png" alt="Camille van Groll">
          </div>
            <nav class="hamburgerMenu">
            <i class="fa fa-bars fa-2x"></i>        
           </nav>
       </div>
     </nav>
     
      <div class="dropDownNav">
             <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'primary'
               )); ?>
       </div>
   </div>

    <div class="content" id="home">
       <div class="title">
         <h1>Hi, I'm Camille and I'm a Front-End Developer.</h1>
         <div class="btn"> <!-- animated pulse infinite -->
        <p><i class="fa fa-long-arrow-right fa-3"></i><a href="#portfolio">View Work</a></p>
      </div>
       </div>
      

    </div><!-- innerWrapper -->
  </header><!--/.header-->

  <section class="about content" id="about"> 

         <div class="about-me">
              <div class="about-me-text">
                  <h2 class="about-title">About Me</h2>        
                  <p>Hi, I'm Camille, a front-end developer based in Toronto. I love working in team environments and being inspired by the work being created around me. Before becoming a developer, I interned in tech and advertising, and working in the restaurant industry. As a result, I developed strong communication and problem solving skills,  as well as a talent for working with clients. I like working in fast-paced environments and always maintain a positive attitude. View my <a href="images/resume.pdf">Resume Here.</a></p>
              </div>
                  <div class="headshot">
                    <?php the_post_thumbnail(array(250,300)); ?>
                  </div>
          </div>

             <div class="info">
               <div class="box">
                  <h2>Background</h2>
                  <div class="skills" id="skills"> 
                     <img src=" <?php bloginfo('template_url') ?>/images/noun_168220_cc.jpg" alt="brain stem"> 
                     <img src=" <?php bloginfo('template_url') ?>/images/noun_190283_cc.jpg" alt="chess piece"> 
                     <img src=" <?php bloginfo('template_url') ?>/images/noun_104502_cc.jpg" alt="chess piece"> 
                  </div>   
                   <p>I have a BA in Psychology and enjoy applying those concepts to my work as a developer. When I start a new project I always begin with strategy before breaking down the technical aspects. 
                  </p> 
                </div>

                <div class="box">
                 <h2>Skills</h2>
                   <div class="skills">  
                      <i class="devicon-javascript-plain"></i>         
                      <i class="fa fa-code"></i>  
                      <i class="devicon-wordpress-plain"></i>       
                  </div> 
                   <p>I have an in-depth understanding of HTML5 and CSS3, and experience working with jQuery, JavaScript, APIs, WordPress and PHP. I'm constantly learning and expanding my skills.
                  </p>
              </div>
              
              <div class="box">
                <h2>Tools</h2>
                  <div class="tools">
                    <img src=" <?php bloginfo('template_url') ?>/images/terminal.png" alt="terminal">
                    <i class="devicon-sass-original"></i> 
                    <i class="devicon-git-plain"></i>                                    
                 </div>
                 <p>I've comfortable using a number of tools, such as Git and GitHub, the Command Line, Gulp and Sass. I enjoy working efficiently and integrating new technology into my workflow.</p>
              </div>
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


    <section class="contact" id="contact">

  <div class="content contact-layout">
   
       <div class="form">
          <h2>Drop me a line</h2>
         <?php the_content(); ?>
       </div>

       <div class="social">
        <h3>Contact</h3>
          <p>
          <!-- <i class="fa fa-envelope-o fa-2x"></i> -->
          <a href="mailto:hello@camillevangroll.com" target="_top"> hello@camillevangroll.com </a>
          </p>
          <div>
          <a href="https://twitter.com/camvangroll" target="_blank"><i class="fa fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/camille-van-groll-47a06485" target="_blank"><i class="fa fa-linkedin"></i></a>
          <a href="https://instagram.com/camvangroll/"><i class="fa fa-instagram" target="_blank"></i></a>
          <a href="https://github.com/camvangroll"><i class="fa fa-github" target="_blank"></i></a>
         </div> 
      </div>

    </div>

    </section>



    </div> <!--content -->
    
  </div> <!-- /.container -->

</div> <!-- /.main -->

  <?php get_footer(); ?>

 



