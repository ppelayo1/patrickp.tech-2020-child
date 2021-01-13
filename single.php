<?php get_header('post');?>
<div class='container-fluid'>
    <article>


        <?php 
        //get the posts ID
        global $post;
        $p = $post->ID;

        //prepare the querry
        $arg = array('p' => $p);
        $q = new WP_Query($arg);

        //Output the post 
        if($q->have_posts()){
            $q->the_post();
            the_title("<h2 class='postTitle mb-5'>","</h2>");
            the_content();    
            the_date('',"<p class='text-left mt-5'> ",'</p>');   
            wp_reset_postdata();
        }
        ?>


    </article>
</div>





<?php get_footer('post'); ?>