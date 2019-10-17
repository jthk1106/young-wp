<!-- front-page.php will be the home page for a wordpress project and if none exists, the index.php will be the default -->

<?php get_header(); ?>

    <div id="banner">
        <h1>WORDPRESS<br>CUSTOM THEME</h1>
        <br>
        <h3>by Jeremy Kim</h3>
    </div>

    <main>
        <div style="text-align: center; padding: 20px;">
            <a href="<?php echo site_url("/blog"); ?>">
                <h2 class="section-heading">THE BLOG</h2>
            </a>
        </div>

        <section>

            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                );

                $blogposts = new WP_Query($args);

                while($blogposts->have_posts()) {
                    $blogposts->the_post();
                
            ?>

            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                    </a>
                </div>
            
                <div class="card-description">
                    <a href="<?php the_permalink() ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <!-- this gets the excerpt then trims it to 30 words -->
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
                </div>
            </div>

            <!-- resetting query if using a custom query is "a good idea" -->
            <?php }
                wp_reset_query(); 
            ?>

        </section>
        <hr>

        <div style="text-align: center; padding: 20px;">
            <a href="<?php echo site_url("/projects"); ?>">
                <h2 class="section-heading">MY PROJECTS</h2>
            </a>
        </div>

        <section>

        <?php 
                $args = array(
                    'post_type' => 'project',
                    'posts_per_page' => 2,
                );

                $projects = new WP_Query($args);

                while($projects->have_posts()) {
                    $projects->the_post();
                
            ?>

            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                    </a>
                </div>
            
                <div class="card-description">
                    <a href="<?php the_permalink() ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <!-- this gets the excerpt then trims it to 30 words -->
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
                </div>
            </div>

            <!-- resetting query if using a custom query is "a good idea" -->
            <?php }
                wp_reset_query(); 
            ?>

        </section>
        <hr>

        <div style="text-align: center; padding: 20px;">
            <h2 class="section-heading">SOURCE CODE</h2>
        </div>

        <section id="section-source">
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima molestiae repudiandae harum blanditiis iusto magni? Cumque eius et officiis fugit voluptatum quisquam asperiores molestiae voluptates error, deleniti sed libero tenetur.
            </p>
            <a href="#" class="btn-readmore">Github Profile</a>
        </section>

<?php get_footer(); ?>