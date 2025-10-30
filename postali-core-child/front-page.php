<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>
<?php
    $banner_background_image = get_field('banner_background_image');
?>

<div class="body-container">
    <section id="hp-banner">
        <div class="hp-container">
            <?php 
            $banner_headline = get_field('banner_headline');
            if($banner_headline):
            ?>
            <div>
                <h1> <?php echo $banner_headline; ?> </h1>
            </div>
            <?php endif;?>  

            <p class="heading"> <?php the_field('banner_subheadline_1'); ?>

            <?php if( have_rows('banner_subheadlines') ): ?>
            <?php while( have_rows('banner_subheadlines') ): the_row(); ?>  
                <span class="animated-text" data-text="<?php the_sub_field('banner_subheadline_2'); ?>"></span>
            <?php endwhile; ?>
            <?php endif; ?> 
                <span class="visible-animated-text"></span>
            </p>

            <div class="banner_cta white columns">
                <?php 
                $banner_copy_headline = get_field('banner_copy_headline');
                $banner_copy = get_field('banner_copy');
                if($banner_copy_headline || $banner_copy):
                ?>
                <div class="column-66">
                    <div>
                        <p class = "copy_heading"> <?php echo $banner_copy_headline; ?> </p>
                        <p> <?php echo $banner_copy; ?> </p>
                    </div>
                </div>
                <?php endif;?> 

                <?php 
                $banner_cta_label = get_field('banner_cta_label');
                $banner_cta = get_field('banner_cta');
                if($banner_cta_label || $banner_cta):
                ?>
                <div class="column-33 centered">
                    <div class="cta_content">
                        <p> <?php echo $banner_cta_label; ?> </p>
                        <a href="<?php echo $banner_cta['url']; ?>" class = "btn primary"><?php echo $banner_cta['title']; ?></a>
                    </div>
                </div>
                <?php endif;?> 
                
            </div>
        </div>
        <div class="banner-bg">
            <img src="<?php echo $banner_background_image; ?>" alt="" class="banner-bg-image">
        </div>
    </section>

    <section id="hp-about">
        <div class="container">
            <div class="columns" id="top_cont">
                <div class="column-50">
                    <div>
                        <?php 
                        $about_section_headline = get_field('about_section_headline');
                        if($about_section_headline):
                        ?>
                            <h2> <?php echo $about_section_headline; ?> </h2>
                        <?php endif;?> 
                        
                        <?php 
                        $about_section_copy = get_field('about_section_copy');
                        if($about_section_copy):
                        ?>
                            <p> <?php echo $about_section_copy; ?> </p>
                        <?php endif;?> 

                        <?php 
                        $about_section_cta = get_field('about_section_cta');
                        if($about_section_cta):
                        ?>
                        <div>
                            <div>
                                <a href="<?php echo $about_section_cta['url']; ?>" class = "btn primary"><?php echo $about_section_cta['title']; ?></a>
                            </div>
                        </div>
                        <?php endif;?> 
                

                    </div>
                </div>
                <div class="column-40 white" id = "icons_cont">
                    <div class="bio_block">
                        <?php 
                        $about_section_block_heading = get_field('about_section_block_heading');
                        if($about_section_block_heading):
                        ?>
                            <p class="desc"> <?php echo $about_section_block_heading; ?> </p>
                        <?php endif;?> 

                        <div>
                            <?php 
                            
                            if( get_field('about_section_copy_block') ):
                                while( have_rows('about_section_copy_block') ) : the_row();
                                $icon = get_sub_field('icon');
                                $text = get_sub_field('text');
                            ?>
                                <div class="item">
                                    <img src="<?php echo $icon; ?>" alt="">
                                    <p><?php echo $text; ?> </p>
                                </div>
                            <?php endwhile; endif;?>  
                        </div>   
                    </div>         
                </div>
            </div>
        </div>

        <div class="attorney_bio">
            <?php
            $about_section_bg = get_field('about_section_bg');
            if( $about_section_bg ) : ?>
                <img src="<?php echo $about_section_bg; ?>" class="bg_image" alt="">
            <?php endif; ?>

            <div class="container">
                <div class="columns">
                    <?php 
                    $about_section_headshot = get_field('about_section_headshot');
                    if($about_section_headshot):
                    ?>
                        <div class ="column-33" id = "attorney_img">
                            <img src="<?php echo $about_section_headshot; ?>" alt="">
                        </div>
                    <?php endif;?> 
                        
                    <div class ="column-66" id = "attorney_text">
                        <div>
                        <?php 
                        $about_section_title = get_field('about_section_title');
                        if($about_section_title):
                        ?>
                            <h3> <?php echo $about_section_title; ?> </h3>
                        <?php endif;?> 
                        <?php 
                        $about_section_description = get_field('about_section_description');
                        if($about_section_description):
                        ?>
                            <p> <?php echo $about_section_description; ?> </p>
                        <?php endif;?> 
                        <?php 
                        $about_section_learn_more = get_field('about_section_learn_more');
                        if($about_section_learn_more):
                        ?>
                            <a href="<?php echo $about_section_learn_more['url']; ?>" class="link">
                                <?php echo $about_section_learn_more['title']; ?>

                                <svg xmlns="http://www.w3.org/2000/svg" width="25.504" height="17.889" viewBox="0 0 25.504 17.889">
                                    <path id="Path_819" data-name="Path 819" d="M16.059,0,14.889,1.171l6.238,6.238H0V9.065H21.128L14.889,15.3l1.171,1.171L24.3,8.237Z" transform="translate(0.5 0.707)" fill="#267dc1" stroke="#267dc1" stroke-width="1"/>
                                </svg>
                            </a>
                        <?php endif;?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="review_badge">
                <div class="review_score">
                    <p>4.9</p>
                    <span>50+ reviews</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="pt-divider" width="2" height="69" viewBox="0 0 2 69">
                    <rect id="Rectangle_1212" data-name="Rectangle 1212" width="2" height="69" fill="#181a21"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" class="pt-badge" width="120.665" height="48.437" viewBox="0 0 120.665 48.437">
                    <g id="Reviews_-_Google" data-name="Reviews - Google" transform="translate(-0.002 -0.004)">
                        <g id="Layer_1-2" transform="translate(0.002 0.004)">
                        <path id="Path_686" data-name="Path 686" d="M725.527,81.322c.145.391.275.8.435,1.232-4.319,1.985-8.754,3.652-13.159,5.464,1.87,4.261,7.217,3.623,9.87.493a23.866,23.866,0,0,1,3.1,2.1,9.794,9.794,0,0,1-17.855-6.391C708.73,74.061,721.527,71.742,725.527,81.322Zm-5.145,0c1.565-.362-1.261-2.29-2-2.174-3.362-.942-6.58,2.319-6.333,5.681C714.831,83.554,717.585,82.525,720.382,81.322Z" transform="translate(-605.297 -64.337)" fill="#181a21"/>
                        <path id="Path_687" data-name="Path 687" d="M3.639,5.409A15.775,15.775,0,0,1,26.03,4l-3,2.956C13.871-.953.7,8.946,5.509,19.9c3.812,9.246,18.666,8.681,20.159-1.855-3.464-.043-6.652.1-10.072-.072a33.486,33.486,0,0,1-.029-4c4.667.043,9.667-.319,14.159.116,1.348,8.42-4.348,16.116-13.014,16.522C3.277,31.511-5.23,15.844,3.639,5.409Z" transform="translate(-0.002 -0.004)" fill="#181a21"/>
                        <path id="Path_688" data-name="Path 688" d="M215.738,86.817c-1.464-13.449,18.043-15.637,19.739-2.319C236.143,97.15,218.027,99.179,215.738,86.817Zm11.609,4.2c6.406-2.391,4.072-13-2.9-11.565-7.565,1.638-4.536,13.927,2.9,11.565Z" transform="translate(-184.405 -64.6)" fill="#181a21"/>
                        <path id="Path_689" data-name="Path 689" d="M44.645,271.622l-1.725-.116c-.174-3.391-.058-6.652-.087-10.058,2.58.246,5.609-.812,7.609,1.232a3.51,3.51,0,0,1-1.551,5.2c.71,1.159,1.435,2.377,2.145,3.594-4.319,1.348-2.8-4.493-5.956-3.348C44.92,269.274,45.471,270.709,44.645,271.622Zm.435-7.942v2.377c1.29-.058,3.826.464,3.739-1.42-.058-1.522-2.768-1.565-3.739-.957Z" transform="translate(-36.616 -223.507)" fill="#181a21"/>
                        <path id="Path_690" data-name="Path 690" d="M668.581,16.575c-.058,6.217.116,12.464-.072,18.666H664.19c.029-9.652-.13-19.29.058-28.942h4.246C668.654,9.764,668.552,13.126,668.581,16.575Z" transform="translate(-567.902 -5.388)" fill="#181a21"/>
                        <path id="Path_691" data-name="Path 691" d="M725.775,283.8c.058.638.116,1.275.188,1.971-3-1.116-1.913-1.391-5.043.043.478-3.913.029-2.261-1.42-4.913a.163.163,0,0,0,.116-.014c3.623-.319,2.058-.884,3.927-2.783.942,2.29,1.551,2.507,3.942,2.841C726.964,281.868,725.4,282.607,725.775,283.8Z" transform="translate(-615.226 -237.797)" fill="#181a21"/>
                        <path id="Path_692" data-name="Path 692" d="M105.051,284.816c-1.13-5,4.7-7.783,7.159-2.927h-.043c0,.667.058,1.319.072,1.986-1.884.029-3.507.043-5.449.029.7,1.956,2.594,2.058,4.275,1.087,1.522,1.812-.42,1.638-1.725,2.188A4.209,4.209,0,0,1,105.051,284.816Zm4.261-2.29h1c-.014-2.174-3.188-2.014-3.478,0Z" transform="translate(-89.704 -238.876)" fill="#181a21"/>
                        <path id="Path_693" data-name="Path 693" d="M364.838,87.055c-2.058-11.826,14.116-16.724,19.014-5.8C388.3,94.953,368.635,100.634,364.838,87.055Zm14.145-5.783c-4.014-5.449-11.9-.1-9.623,5.8.9,3.71,5.927,5.159,8.739,2.623C380.4,87.867,380.795,83.562,378.983,81.272Z" transform="translate(-311.81 -64.273)" fill="#181a21"/>
                        <path id="Path_694" data-name="Path 694" d="M659.358,280.484c-1.928,2.623-1.884,1.464-1.449,4.913-2.29-1.159-2.754-1.275-5.058.014.377-3.072.507-2.609-1.551-4.826,3.145-.739,2.551-.464,4.087-2.985C656.6,279.774,656.488,280.252,659.358,280.484Z" transform="translate(-556.91 -237.369)" fill="#181a21"/>
                        <path id="Path_695" data-name="Path 695" d="M532.648,95.549c-1.406,9.319-13.116,10.638-17.681,2.884-.739-1.188,1.667-1.29,2.319-1.841.652-.2,1.116-.536,1.493.275,2.058,4.159,9.159,3.551,9.739-1.3.087-1.029.188-2.058.275-3.116-6.522,5.522-15.565-.493-14.9-8.493.348-6.9,9.449-12.319,14.768-6.667.029-.667.058-1.145.087-1.667h4.058C532.72,82.259,532.981,88.926,532.648,95.549Zm-14.13-8.681c2.464,6.739,11.159,4.261,10.406-2.9C527.474,75.143,515.967,78.737,518.518,86.868Z" transform="translate(-439.388 -64.072)" fill="#181a21"/>
                        <path id="Path_696" data-name="Path 696" d="M163.371,283.206c.493-1.565.913-2.87,2.956-2.246-.623,1.725-1.3,3.42-1.985,5.116-.333.681-.464,1.71-1.188,2.058-1.7.493-2.275-.725-2.725-2.058-.739-1.812-1.362-3.348-2.029-5.275.855.275,1.7-.377,2.29.507.522,1.478,1.072,2.956,1.609,4.435h.159C162.777,284.9,163.067,284.046,163.371,283.206Z" transform="translate(-135.444 -240.105)" fill="#181a21"/>
                        <path id="Path_697" data-name="Path 697" d="M590.458,279.414c.71.841,1.884.652,2.855.9-1.739,2.725-2.043.884-1.522,4.884-1.072-.2-1.826-1.232-2.826-.986-.464.029-2.362,1.594-2.188.565.71-3.449-.333-2.087-1.377-4.507,2.826-.362,2.551-.42,3.826-2.87a.076.076,0,0,0,.116.014h0Z" transform="translate(-500.561 -237.198)" fill="#181a21"/>
                        <path id="Path_698" data-name="Path 698" d="M220.247,260.7a1.131,1.131,0,0,1-2.261.072A1.131,1.131,0,0,1,220.247,260.7Z" transform="translate(-186.392 -221.995)" fill="#181a21"/>
                        <path id="Path_699" data-name="Path 699" d="M247.835,280.348c1.956.7,2.551,2.449,2.58,4.406h-5.609c1.13,2.348,2.377,1.725,4.333,1.087.246.594,1.072,1.275.087,1.609a6.523,6.523,0,0,1-2.58.7c-3.159-.377-3.826-2.522-3.594-5.348C243.748,280.609,245.835,280.275,247.835,280.348Zm.014,1.841a1.817,1.817,0,0,0-2.942,1.145h3.768Z" transform="translate(-207.792 -239.711)" fill="#181a21"/>
                        <path id="Path_700" data-name="Path 700" d="M303.294,280.917c.884-.145,1.362.217,1.493,1.13.362,1.188.812,2.3,1.145,3.551.594-.812.609-1.986.971-2.942.435-1.681.507-1.638,2.174-1.725.058.2.188.42.13.594-.522,1.87-1.1,3.739-1.7,5.58-.116.8-.464,1.29-1.362,1.217-1.754.449-1.913-3.478-2.522-4.725h-.188c-.333,1.058-.667,2.116-1,3.188-.449,1.391-.449,1.377-1.87,1.493-1.391.116-2.3-5.942-2.87-7.3.739.087,1.7-.333,2.087.435.507,1.377.812,2.812,1.188,4.232l.174-.014C301.671,284.628,302.106,280.773,303.294,280.917Z" transform="translate(-254.556 -240.179)" fill="#181a21"/>
                        <path id="Path_701" data-name="Path 701" d="M516.7,280.384c2.623-.217,2.754-.609,4-2.884,1.014,2.217,1.522,2.623,3.913,2.884-1.667,3.043-1.927.638-1.406,4.913-2.826-1.232-2.1-1.348-5.043,0,.536-3.87.1-2.29-1.565-4.913A.119.119,0,0,0,516.7,280.384Z" transform="translate(-441.732 -237.284)" fill="#181a21"/>
                        <path id="Path_702" data-name="Path 702" d="M219.2,286.759V281.6h2.043v7.2H219.2Z" transform="translate(-187.433 -240.79)" fill="#181a21"/>
                        <path id="Path_703" data-name="Path 703" d="M381.992,281.97c.159-3.087,4.159-3.174,6.116-1.478l-1,1.188c-.841-.826-2.435-1.2-3.174-.116,1.188,1.464,4.478.594,4.377,3.3-.073,2.319-2.565,2.072-4.232,2.29-1.232-.435-2.812-.565-1.725-2.116,1.188-.362,3.725,1.8,4.014-.188C385.166,283.506,382.282,284.448,381.992,281.97Z" transform="translate(-326.631 -238.899)" fill="#181a21"/>
                        <path id="Path_704" data-name="Path 704" d="M454.116,277.9c1.275,2.609,1.043,2.42,3.855,2.826-1.768,2.449-1.927,1.7-1.435,4.9-2.29-1.1-2.754-1.174-5.043.015.362-3.58.536-2.174-1.493-4.913C452.884,280.465,452.609,280.161,454.116,277.9Z" transform="translate(-384.784 -237.626)" fill="#181a21"/>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <div class="attorny_reviews">
            <div class="container">
                <div class="review_slider">
                    <?php 
                    if( get_field('testimonials') ):
                        while( have_rows('testimonials') ) : the_row();
                        $content = get_sub_field('testimonial_content');
                        $author = get_sub_field('testimonial_author');
                    ?>
                        <div class="review-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="98.721" height="17.805" viewBox="0 0 98.721 17.805">
                                <g id="Group_1114" data-name="Group 1114" transform="translate(-214 -2597.592)">
                                <path id="Single_Review_Star" data-name="Single Review Star" d="M9.36,0l-2.2,6.814L0,6.8,5.8,11,3.575,17.8l5.785-4.22,5.785,4.22L12.92,11l5.8-4.2-7.161.014Z" transform="translate(214 2597.592)" fill="#eb9915"/>
                                <path id="Single_Review_Star-2" data-name="Single Review Star" d="M9.36,0l-2.2,6.814L0,6.8,5.8,11,3.575,17.8l5.785-4.22,5.785,4.22L12.92,11l5.8-4.2-7.161.014Z" transform="translate(234 2597.592)" fill="#eb9915"/>
                                <path id="Single_Review_Star-3" data-name="Single Review Star" d="M9.36,0l-2.2,6.814L0,6.8,5.8,11,3.575,17.8l5.785-4.22,5.785,4.22L12.92,11l5.8-4.2-7.161.014Z" transform="translate(254 2597.592)" fill="#eb9915"/>
                                <path id="Single_Review_Star-4" data-name="Single Review Star" d="M9.36,0l-2.2,6.814L0,6.8,5.8,11,3.575,17.8l5.785-4.22,5.785,4.22L12.92,11l5.8-4.2-7.161.014Z" transform="translate(274 2597.592)" fill="#eb9915"/>
                                <path id="Single_Review_Star-5" data-name="Single Review Star" d="M9.36,0l-2.2,6.814L0,6.8,5.8,11,3.575,17.8l5.785-4.22,5.785,4.22L12.92,11l5.8-4.2-7.161.014Z" transform="translate(294 2597.592)" fill="#eb9915"/>
                                </g>
                            </svg>
                            <p class="review-text">"<?php echo $content; ?>"</p>
                            <p class="author"><?php echo $author; ?></p>
                        </div>
                    <?php endwhile; endif;?>  
                </div>
                <?php 
                $about_section_more_testimonials = get_field('about_section_more_testimonials');
                if($about_section_more_testimonials):
                ?>
                    <a href="<?php echo $about_section_more_testimonials['url']; ?>" class = "link more_reviews">
                        <?php echo $about_section_more_testimonials['title']; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25.504" height="17.889" viewBox="0 0 25.504 17.889">
                            <path id="Path_819" data-name="Path 819" d="M16.059,0,14.889,1.171l6.238,6.238H0V9.065H21.128L14.889,15.3l1.171,1.171L24.3,8.237Z" transform="translate(0.5 0.707)" fill="#267dc1" stroke="#267dc1" stroke-width="1"></path>
                        </svg>
                    </a>
                <?php endif;?> 
            </div>
        </div>
    </section>

    <section id="hp_services">
        <div class="container">
            <?php 
            $service_section_headline = get_field('service_section_headline');
            if($service_section_headline):
            ?>
                <h2> <?php echo $service_section_headline; ?> </h2>
            <?php endif;?> 
            <?php 
            $service_section_subhead = get_field('service_section_subhead');
            if($service_section_headline):
            ?>
                <p class="sub_heading"> <?php echo $service_section_subhead; ?> </p>
            <?php endif;?> 

            <?php 
                if( get_field('service_section_services') ):
                    echo '<div class="services">';
                    while( have_rows('service_section_services') ) : the_row();
                    $service = get_sub_field('service');
                ?>
                    <a href="<?php echo $service['url']; ?>" class="link service-item">
                        <span><?php echo $service['title']; ?></span>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25.504" height="17.889" viewBox="0 0 25.504 17.889">
                                <path id="Path_953" data-name="Path 953" d="M16.059,0,14.889,1.171l6.238,6.238H0V9.065H21.128L14.889,15.3l1.171,1.171L24.3,8.237Z" transform="translate(0.5 0.707)" fill="#fff" stroke="#fff" stroke-width="1"/>
                            </svg>
                        </div>
                    </a>       
                <?php endwhile; echo "</div>";endif;?>  
            <?php 
            $service_section_schedule = get_field('service_section_schedule');
            if($service_section_schedule):
            ?>
                <a href="<?php echo $service_section_schedule['url']; ?>" class="btn primary"><?php echo $service_section_schedule['title']; ?></a>
            <?php endif;?>

        </div>
    </section>

    
    <?php
        $how_help_background = get_field('how_help_background');
    ?>
    <section id="hp_help">
        <div class="container">
            <?php 
            $how_help_headline = get_field('how_help_headline');
            if($how_help_headline):
            ?>
                <h2> <?php echo $how_help_headline; ?> </h2>
            <?php endif;?> 
            <div class="columns">
                <div class="mobile_menu" style = "display: none;">
                    <p>Choose Topic <span class="arrow-down"></span></p>
                </div>
                <div class="column-50 lists">
                    <?php 
                    if( get_field('how_help_item') ):
                        $index = 0;
                        while( have_rows('how_help_item') ) : the_row();
                        $heading = get_sub_field('heading');
                    ?>
                        <p class="<?php if($index == 0) { echo "active-list"; }?>" data-id="<?php echo $index; ?>"><?php echo $heading; ?></p>       
                    <?php $index++; endwhile; endif;?>  
                </div>

                <div class="column-50">
                    <?php 
                    if( get_field('how_help_item') ):
                        $index = 0;
                        while( have_rows('how_help_item') ) : the_row();
                        $heading = get_sub_field('heading');
                        $content = get_sub_field('content');
                        $cta = get_sub_field('cta');
                    ?>
                        <div class="help-item <?php if($index == 0) { echo "active_cont"; }?>"  data-id="<?php echo $index; ?>">
                            <p class="heading"><?php echo $heading; ?></p>       
                            <p class="content"><?php echo $content; ?></p>   
                            <a href="<?php echo $cta['url']; ?>" class="link">
                                    <?php echo $cta['title']; ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25.504" height="17.889" viewBox="0 0 25.504 17.889">
                                    <path id="Path_819" data-name="Path 819" d="M16.059,0,14.889,1.171l6.238,6.238H0V9.065H21.128L14.889,15.3l1.171,1.171L24.3,8.237Z" transform="translate(0.5 0.707)" fill="#267dc1" stroke="#267dc1" stroke-width="1"/>
                                </svg>
                            </a>    
                        </div>
                    <?php $index++; endwhile; endif;?>  
                        
                    </div>
            </div>
        </div>
        <?php if($how_help_background): ?>
        <img class ="hp_bg" src="<?php echo $how_help_background; ?>" alt="">
        <?php endif; ?>
    </section>

    <section id="hp_service_area">
        <div class="container">
            <?php 
            $service_area_headline = get_field('service_area_headline');
            if($service_area_headline):
            ?>
                <h2> <?php echo $service_area_headline; ?> </h2>
            <?php endif;?> 
            <?php 
            $service_area_subhead = get_field('service_area_subhead');
            if($service_area_subhead):
            ?>
                <p class="sub-heading"> <?php echo $service_area_subhead; ?> </p>
            <?php endif;?> 

            <div class="columns service_rea">
                <?php 
                $service_area_map_embed = get_field('service_area_map_embed');
                if($service_area_map_embed):
                ?>
                <div class="column-33 map-box">
                    <iframe src="<?php echo $service_area_map_embed; ?>" title="location map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <?php endif;?> 

                <div class="column-66 map-content">
                    <?php 
                    $service_area_content = get_field('service_area_content');
                    if($service_area_content):
                    ?>
                        <?php echo $service_area_content; ?>
                    <?php endif;?> 

                    <div class="map-cta">
                        <?php 
                        $service_area_cta = get_field('service_area_cta');
                        if($service_area_cta):
                        ?>
                            <p>What are Consultations Like?</p>
                            <a href="<?php echo $service_area_cta['url']; ?>" class="btn primary"><?php echo $service_area_cta['title']; ?></a>
                        <?php endif;?> 
                    </div>
                </div>
            </div>

            <div class="columns bottom">
                <?php 
                $service_area_bottom_heading = get_field('service_area_bottom_heading');
                if($service_area_bottom_heading):
                ?>
                <div class="column-33">
                    <p class="bottom-heading"> <?php echo $service_area_bottom_heading; ?> </p>
                </div>
                <?php endif;?> 

                <?php 
                $service_area_bottom_content = get_field('service_area_bottom_content');
                if($service_area_bottom_content):
                ?>
                <div class="column-66">
                    <p class="bottom-text"> <?php echo $service_area_bottom_content; ?> </p>
                </div>
                <?php endif;?>
            </div>
        </div>
    </section>

    <section id="haines_firm">
        <div class="container">
            <?php 
            $why_section_heading = get_field('why_section_heading');
            if($why_section_heading):
            ?>
                <h2> <?php echo $why_section_heading; ?> </h2>
            <?php endif;?> 
            <?php 
            $why_section_subheading = get_field('why_section_subheading');
            if($why_section_subheading):
            ?>
                <p class="sub-heading"> <?php echo $why_section_subheading; ?> </p>
            <?php endif;?> 

            <?php 
            if( get_field('why_section_items')  ):
                echo '<div class="firms">';
                while( have_rows('why_section_items') ) : the_row();
                $heading = get_sub_field('heading');
                $content = get_sub_field('content');
            ?>
                <div class="firm-item">
                    <p class="heading"><?php echo $heading; ?></p>       
                    <p class="content"><?php echo $content; ?></p>   
                </div>
            <?php endwhile;echo '</div>'; endif;?>  
            <?php 
            $why_section_cta = get_field('why_section_cta');
            if($why_section_cta):
            ?>
                <a href="<?php echo $why_section_cta['url']; ?>" class="link haines_firm_cta">
                    <?php echo $why_section_cta['title']; ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25.504" height="17.889" viewBox="0 0 25.504 17.889">
                        <path id="Path_819" data-name="Path 819" d="M16.059,0,14.889,1.171l6.238,6.238H0V9.065H21.128L14.889,15.3l1.171,1.171L24.3,8.237Z" transform="translate(0.5 0.707)" fill="#267dc1" stroke="#267dc1" stroke-width="1"/>
                    </svg>
                </a>
            <?php endif;?> 
        </div>
    </section>

    <section id="faq">
        <div class="container">
            <?php 
            $faq_section_headline_1 = get_field('faq_section_headline_1');
            if($faq_section_headline_1):
            ?>
                <h2>
                    <?php echo $faq_section_headline_1; ?> 
                    <?php $faq_section_headline_2 = get_field('faq_section_headline_2');
                    if($faq_section_headline_2): ?>
                        <span><?php echo $faq_section_headline_2; ?> </span>
                    <?php endif;?> 
                </h2>
            <?php endif;?> 
            <?php 
            $faq_section_subhead = get_field('faq_section_subhead');
            if($faq_section_subhead):
            ?>
                <p class="sub-heading"> <?php echo $faq_section_subhead; ?> </p>
            <?php endif;?>
            <div class="faq_wrap">
                <?php 
                if( get_field('middle_faq')  ):
                    while( have_rows('middle_faq') ) : the_row();
                    $faq_question = get_sub_field('faq_question');
                    $faq_answer = get_sub_field('faq_answer');
                ?>
                    <div class="faq-item">
                        <p class="faq_question">
                            <?php echo $faq_question; ?>
                            <span class="open">+</span>
                            <span class="close hidden">x</span>
                        </p>       
                        <div class="faq_answer"><?php echo $faq_answer; ?></div>   
                    </div>
                <?php endwhile;endif;?>  
            </div>
        </div>
    </section>

    <?php
        $bottom_section_background = get_field('bottom_section_background');
    ?>
    <section id="hp_bottom">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <?php 
                    $bottom_section_headline_1 = get_field('bottom_section_headline_1');
                    if($bottom_section_headline_1):
                    ?>
                        <h2>
                            <?php echo $bottom_section_headline_1; ?> <br />
                            <?php $bottom_section_headline_2 = get_field('bottom_section_headline_2');
                            if($bottom_section_headline_2): ?>
                                <span><?php echo $bottom_section_headline_2; ?> </span>
                            <?php endif;?> 
                        </h2>
                    <?php endif;?> 
                    <div class="content">
                        <?php 
                        $bottom_section_copy_block = get_field('bottom_section_copy_block');
                        if($bottom_section_copy_block):
                        ?>
                            <?php echo $bottom_section_copy_block; ?>
                        <?php endif;?> 
                    </div>

                    <?php 
                    $bottom_section_cta = get_field('bottom_section_cta');
                    if($bottom_section_cta):
                    ?>
                        <a href="<?php echo $bottom_section_cta['url']; ?>" class="btn primary"><?php echo $bottom_section_cta['title']; ?></a>
                    <?php endif;?> 
                </div>
                <div class="column-50">
                <?php 
                    $bottom_section_image = get_field('bottom_section_image');
                    if($bottom_section_image):
                    ?>
                        <img src="<?php echo $bottom_section_image; ?>" alt="">
                    <?php endif;?> 
                </div>
            </div>
        </div>
        <?php if($bottom_section_background): ?>
        <img class ="bottom_bg" src="<?php echo $bottom_section_background; ?>" alt="">
        <?php endif; ?>
    </section>
</div><!-- #front-page -->

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<?php get_footer();?>