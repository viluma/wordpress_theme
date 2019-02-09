<?php get_header(); 
while(have_posts()){
the_post();
?>


<main role="main" class="container ">
      <div class="row">
        <div class="col-md-8 blog-main jumbotron text-left text-black">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
           <?php the_title(); ?>
          </h3>
          <?php the_content(); }?>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
           
          <img src="<?php echo get_template_directory_uri(); ?>/jupiter.jpg" class="img-thumbnail ">
          </div>

        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><

<?php get_footer();  ?>