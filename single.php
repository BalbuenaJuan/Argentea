

<?php get_header("header") ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <main class="main--single">
    <div class="texto">
        <h2 class="header-single"><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        <p class="tags">Tags: <?php the_tags(" ", " ", " "); ?></p>
        <p class="parrafo--inline"> <?php the_author(); ?>  </p>
        <small class="parrafo--inline"> - <?php the_date(); ?></small>
        <section class="comments">
          <?php comments_template(); ?>
          <hr>
        </section>
    </div>
  </main>

<?php endwhile; else: ?>

<?php endif; ?>

<?php get_footer("footer") ?>
