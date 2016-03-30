<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

  <style>
    .hero-slim {
      background-image: url(http://lorempixel.com/600/400/abstract/);
    }
    
    @media screen and (min-width: 800px) {
      .hero-slim {
        background-image: url(http://lorempixel.com/1200/500/abstract/);
      }
    }
</style>

<section class="hero-slim">
  <div class="container">
    <div class="hero-content">
      <div class="hero-content-inner">
        <h1>Search Results: Hello for the Whole World</h1>
      </div><!--/.hero-content-inner-->
    </div><!--/.hero-content-->
  </div><!--/.container-->
</section><!--/.hero-->

<main id="main" class="main" role="main">
  <div class="container">
    <div class="page-content">
      
      <form role="search" method="get" class="search-form" action="">
        <label>
          <span class="screen-reader-text">Search</span>
          <input type="search" class="search-field" placeholder="Search..." value="" name="s" title="" />
        </label>
        <input type="submit" class="search-submit" value="Search" />
      </form>
      
      <div class="listing">
        
        <ol class="list-output">
          <li class="list-item">
            <h2 class="list-heading"><a href="page.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dolor orci,</a></h2>
            <p class="list-meta">Posted on May 15, 2013</p>
            <p class="list-excerpt">Nulla tellus arcu, sollicitudin quis nisi ut, elementum euismod velit. Pellentesque ligula risus, vulputate vitae urna dignissim, venenatis vestibulum ipsum. Donec eleifend ornare augue&hellip;</p>
          </li>
          <li class="list-item">
            <h2 class="list-heading"><a href="page.php">Aliquam eget quam sit</a></h2>
            <p class="list-excerpt">Integer posuere pharetra pellentesque. Nullam hendrerit mattis porta. Ut tincidunt erat faucibus neque tincidunt cursus. Cras nisi ligula, porttitor vitae ultrices id, scelerisque et nulla. &hellip;</p>
          </li>
          <li class="list-item">
            <h2 class="list-heading"><a href="page.php">Suspendisse a dui faucibus, vestibulum diam vel</a></h2>
            <p class="list-excerpt">Nulla tellus arcu, sollicitudin quis nisi ut, elementum euismod velit. Pellentesque ligula risus, vulputate vitae urna dignissim, venenatis vestibulum ipsum. Donec eleifend ornare augue&hellip;</p>
          </li>
          <li class="list-item">
            <h2 class="list-heading"><a href="page.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dolor orci,</a></h2>
            <p class="list-excerpt">Ut sodales dui et metus cursus consectetur. Curabitur eu interdum dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas placerat, nibh at varius vestibulum, purus mauris vestibulum justo, vel ornare ligula ligula sed turpis.&hellip;</p>
          </li>
          <li class="list-item">
            <h2 class="list-heading"><a href="page.php">Donec</a></h2>
            <p class="list-excerpt">Aenean egestas non dolor eget luctus. Praesent maximus euismod augue, vitae sagittis justo lobortis vitae. Vivamus interdum tristique dolor vitae condimentum. Maecenas in massa nec lectus vestibulum &hellip;</p>
          </li>
          <li class="list-item">
            <h2 class="list-heading"><a href="page.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dolor orci,</a></h2>
            <p class="list-excerpt">Nulla tellus arcu, sollicitudin quis nisi ut, elementum euismod velit. Pellentesque ligula risus, vulputate vitae urna dignissim, venenatis vestibulum ipsum. Donec eleifend ornare augue&hellip;</p>
          </li>
        </ol>
        
      </div><!--/.listing-->
      
      <div class="pagination">
        <a class="prev page-numbers" href="#">« Newer</a>
        <a class="page-numbers" href="#">1</a>
        <span class="page-numbers current">2</span>
        <a class="page-numbers" href="#">3</a>
        <a class="page-numbers" href="#">4</a>
        <span class="page-numbers dots">…</span>
        <a class="page-numbers" href="#">27</a>
        <a class="next page-numbers" href="#">Older »</a>  
      </div><!--/.pagination-->
      
    </div><!--/.page-content-->
  </div><!--/.container-->
</main><!--/.main-->

<?php include 'includes/footer.php'; ?>