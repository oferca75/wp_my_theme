<?php get_header ( 'archive' );
?>
<aside id="widget-area-top">
    <?php if ( !function_exists ( 'dynamic_sidebar' ) || !dynamic_sidebar ( 'widget-area-top' ) ) {
    } ?>
</aside>

<?php get_sidebar (); ?>
<div id="content" style="text-align: center" class="cf">

    <div class="post">
        <!--        <h1> Brazilian JiuJitsu Techniques</h1>-->
        <br>
        <?php
        ( $post->post_title ) ? $post->post_title : '';
        $next_moves = query_posts ( array( 'posts_per_page' => 20 ,
                'category__in' => array( 1 ) ) );
        ?>
        <div class="home-posts"><?php
            if ( have_posts () ) :
                get_template_part ( 'loop' );
                ?>
                <div class="navigation g3 cf"><p><?php // posts_nav_link();      
                        ?>
                    </p></div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer (); ?>
