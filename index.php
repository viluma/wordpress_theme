
<?php  get_header() ?>
 <div class="jumbotron p-3 p-md-5 rounded bg-blue  text-left text-black">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic"><?php the_title(); ?></h1>
          <p class="lead my-3"><?php the_content(); ?></p>
          <p class="lead mb-0"><a href="<?php the_permalink(); ?>" class="text-black font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

     

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>

    <?php
      while(have_posts()){
      the_post();?>
    <h2> <a href="<?php the_permalink(); ?>"> 
     <?php the_title(); ?></a></h2>
     <?php the_content(); 
      }?>
          

          

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

          <div class="p-3">
           <?php  get_sidebar(); ?>
          </div>

          <div class="p-3">
            
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->
    <?php  get_footer(); ?>
