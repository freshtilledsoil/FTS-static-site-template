<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

  <style>
    .hero {
      background-image: url(http://lorempixel.com/600/400/abstract/);
    }
    
    @media screen and (min-width: 800px) {
      .hero {
        background-image: url(http://lorempixel.com/1200/500/abstract/);
      }
    }
</style>

<div class="slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots": true }'>

  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <div class="hero-content-inner">
          <h1>Content Title</h1>
          <?php include 'includes/ui/m-blurb.php';?>
          
          <p><a href="#" class="btn">CTA Link</a></p>
        </div><!--/.hero-content-inner-->
      </div><!--/.hero-content-->
    </div><!--/.container-->
  </section><!--/.hero-->
  
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <div class="hero-content-inner">
          <h1>Content Title</h1>
          <?php include 'includes/ui/m-blurb.php';?>
          
          <p><a href="#" class="btn">CTA Link</a></p>
        </div><!--/.hero-content-inner-->
      </div><!--/.hero-content-->
    </div><!--/.container-->
  </section><!--/.hero-->
  
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <div class="hero-content-inner">
          <h1>Content Title</h1>
          <?php include 'includes/ui/m-blurb.php';?>
          
          <p><a href="#" class="btn">CTA Link</a></p>
        </div><!--/.hero-content-inner-->
      </div><!--/.hero-content-->
    </div><!--/.container-->
  </section><!--/.hero-->
  
</div><!--/.slider-->

<main id="main" class="main" role="main">

  <section class="content-block">
    <div class="container">
      
      <h1 class="content-block-heading">Optional Content Block Title</h1>
      
      <div class="layout">

        <div class="col sm-w-100 mid-w-33">
          <div class="gutter">
            <?php include 'includes/ui/m-module-embed.php'; ?>
          </div><!--/.gutter-->
        </div><!--/.col-->
        
        <div class="col sm-w-100 mid-w-33">
          <div class="gutter">
            <?php include 'includes/ui/m-module-embed.php'; ?>
          </div><!--/.gutter-->
        </div><!--/.col-->
        
        <div class="col sm-w-100 mid-w-33">
          <div class="gutter">
            <?php include 'includes/ui/m-module-embed.php'; ?>
          </div><!--/.gutter-->
        </div><!--/.col-->
        
      </div><!--/.layout-->
      <div class="content-block-footer">
        <p><a href="#" class="btn">CTA Link For This Content Block</a></p>
      </div><!--/.content-block-footer-->
    </div><!--/.container-->
  </section><!--/.content-block-->
  
  <section class="content-block">
    <div class="container">
      
      <h1 class="content-block-heading">Optional Content Block Title</h1>
      
      <div class="content-block-description">
        <?php include 'includes/ui/m-blurb.php';?>
      </div><!--/.content-block-description-->
      
      <div class="layout">

        <div class="card">
          <div class="col sm-w-100 mid-w-33">
            <div class="gutter">
              <div class="card-media">
                <a href="#">
                  <picture>
                    <source srcset="http://lorempixel.com/320/180/abstract/, http://lorempixel.com/640/360/abstract/ 2x">
                    <img src="http://lorempixel.com/320/180/abstract/" alt="Placeholder Image">
                  </picture>
                </a>
              </div><!--/.card-media-->
            </div><!--/.gutter-->
          </div><!--/.col-->
          <div class="col sm-w-100 mid-w-66">
            <div class="gutter">
              <div class="card-content">
                <h2 class="card-heading"><a href="#">Module Title</a></h2>
              
                <?php include 'includes/ui/m-blurb.php';?>
              </div><!--/.card-content-->
            </div><!--/.gutter-->
          </div><!--/.col-->
       </div><!--/.card-->

      </div><!--/.layout-->
    </div><!--/.container-->
  </section><!--/.content-block-->
  
  <section class="content-block">
    <div class="container">
      <div class="layout">

        <div class="col sm-w-100 mid-w-33">
          <div class="gutter">
            <?php include 'includes/ui/m-module-embed.php'; ?>
          </div><!--/.gutter-->
        </div><!--/.col-->
        
        <div class="col sm-w-100 mid-w-33">
          <div class="gutter">
            <?php include 'includes/ui/m-module-embed.php'; ?>
          </div><!--/.gutter-->
        </div><!--/.col-->
        
      </div><!--/.layout-->
    </div><!--/.container-->
  </section><!--/.content-block-->

  <section class="content-block">
    <div class="container">
      
      <h1 class="content-block-heading">Optional Content Block Title</h1>
      
      <div class="content-block-description">
        <?php include 'includes/ui/m-blurb.php';?>
      </div><!--/.content-block-description-->
      
      <div class="layout">

        <div class="card">
          <div class="col sm-w-100 mid-w-50">
            <div class="gutter">
              <div class="card-media">
                <a href="#">
                  <picture>
                    <source srcset="http://lorempixel.com/500/300/abstract/, http://lorempixel.com/1000/600/abstract/ 2x">
                    <img src="http://lorempixel.com/500/300/abstract/" alt="Placeholder Image">
                  </picture>
                </a>
              </div><!--/.card-media-->
            </div><!--/.gutter-->
          </div><!--/.col-->
          <div class="col sm-w-100 mid-w-50">
            <div class="gutter">
              <div class="card-content">
                <h2 class="card-heading"><a href="#">Module Title</a></h2>
              
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dolor sapien, rutrum non tellus at, posuere finibus purus. Nulla eros eros, gravida in arcu et, sodales ullamcorper eros. Consectetur adipiscing elit. Etiam dolor sapien, rutrum non tellus at, posuere.</p>
                <p><a href="#">More about this module</a></p>
              </div><!--/.card-content-->
            </div><!--/.gutter-->
          </div><!--/.col-->
       </div><!--/.card-->

      </div><!--/.layout-->
    </div><!--/.container-->
  </section><!--/.content-block-->

</main><!--/.main-->

<?php include 'includes/footer.php'; ?>