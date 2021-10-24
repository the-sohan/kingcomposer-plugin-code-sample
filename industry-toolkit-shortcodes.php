<?php
//------------------------------
//Section_title_shortcode
//------------------------------
function industry_section_title_shortcode($atts){
    extract( shortcode_atts( array(
        'sub_title' => '',
        'title' => '',
        'description' => ''
    ), $atts) );
    
    $industry_section_title_markup = '<div class="industry-section-title">';
    
    if(!empty($sub_title)) {
        $industry_section_title_markup .= '<h4>'.esc_html($sub_title).'</h4>';
    }
    
    if(!empty($title)) {
        $industry_section_title_markup.='<h2>'.esc_html($title).'</h2>';
    }
    
    if(!empty($description)) {
        $industry_section_title_markup.=''.wpautop( esc_html($description) ).'';
    }
    
    $industry_section_title_markup .= '</div>';
          
    return $industry_section_title_markup;
}
add_shortcode('industry_section_title', 'industry_section_title_shortcode');


//------------------------------
//Service_box_shortcode
//------------------------------
function industry_service_box_shortcode($atts){
    extract( shortcode_atts( array(
        'icon_type' => 1,
        'fa_icon' => '',
        'img_icon' => '',
        'title' => '',
        'description' => ''
    ), $atts) );
    
    $industry_service_box_markup = '<div class="industry-service-box">';
    
    if($icon_type == 1) {
        $industry_service_box_markup .= '<div class="service-icon">
            <i class="'.esc_attr($fa_icon).'"></i>
        </div>';
    } else {
        $service_icon_img_array = wp_get_attachment_image_src( $img_icon, 'thumbnail' );
        $industry_service_box_markup .= '<div class="service-img-icon">
            <img src="'.esc_url($service_icon_img_array[0]).'" alt="'.esc_html($title).'">
        </div>';
    }
    
    if(!empty($title)) {
        $industry_service_box_markup .='<h2>'.esc_html($title).'</h2>';
    }
    
    if(!empty($description)) {
        $industry_service_box_markup .=''.wpautop( esc_html($description) ).'';
    }
    
    $industry_service_box_markup .= '</div>';
    

          
    return $industry_service_box_markup;
}
add_shortcode('industry_service_box', 'industry_service_box_shortcode');


//------------------------------
//Service_box_2_shortcode
//------------------------------
function industry_service_box_shortcode_2($atts){
    extract( shortcode_atts( array(
        'img' => '',
        'title' => '',
        'description' => '',
        'link' => ''
    ), $atts) );
    
    $industry_service_box_markup_2 = '<div class="industry-service-box-2">';
    
        $service_icon_img_array = wp_get_attachment_image_src($img, 'large');
        $industry_service_box_markup_2 .= '<div class="industry-service-box-img">
            <img src="'.esc_url($service_icon_img_array[0]).'" alt="'.esc_html($title).'">
        </div>';
    
    if(!empty($title)) {
        $industry_service_box_markup_2 .='<h3>'.esc_html($title).'</h3>';
    }
    
    if(!empty($description)) {
        $industry_service_box_markup_2 .=''.wpautop( esc_html($description) ).'';
    }
    
    //$industry_service_box_markup_2 .= '<pre>'.var_dump($link).'</pre>'
    
    if(!empty($link)){
        $link_array = explode('|', $link);
        
        $industry_service_box_markup_2 .='<a href="'.$link_array[0].'" target="'.$link_array[2].'" class="boxed-btn">'.$link_array[1].'</a>';
    }
    
    $industry_service_box_markup_2 .= '</div>';
    

          
    return $industry_service_box_markup_2;
}
add_shortcode('industry_service_box_2', 'industry_service_box_shortcode_2');

//------------------------------
//Service_box_3_shortcode
//------------------------------
function industry_service_box_shortcode_3($atts){
    extract( shortcode_atts( array(
        'icon_type' => '1',
        'fa_icon' => 'fa fa-star',
        'img_icon' => '',
        'title' => '',
        'description' => '',
        'link' => ''
    ), $atts) );
    
    $industry_service_box_markup_3 = '<div class="industry-service-box-3">';

    if($icon_type == 1) {
        $industry_service_box_markup_3 .= '<div class="service-icon float-left">
            <i class="'.esc_attr($fa_icon).'"></i>
        </div>';
    } else {
        $service_icon_img_array = wp_get_attachment_image_src( $img_icon, 'thumbnail' );
        $industry_service_box_markup_3 .= '<div class="service-img-icon float-left">
            <img src="'.esc_url($service_icon_img_array[0]).'" alt="'.esc_html($title).'">
        </div>';
    }
    
    
    if(!empty($title)) {
        $industry_service_box_markup_3 .='<h4>'.esc_html($title).'</h4>';
    }
    
    if(!empty($description)) {
        $industry_service_box_markup_3 .=''.wpautop( esc_html($description) ).'';
    }
    
    //$industry_service_box_markup_3 .= '<pre>'.var_dump($link).'</pre>'
    
    if(!empty($link)){
        $link_array = explode('|', $link);
        
        $industry_service_box_markup_3 .='<a href="'.$link_array[0].'" target="'.$link_array[2].'" class="inline-btn">'.$link_array[1].'<i class="fa fa-caret-right"></i></a>';
    }
    
    $industry_service_box_markup_3 .= '</div>';
    

          
    return $industry_service_box_markup_3;
}
add_shortcode('industry_service_box_3', 'industry_service_box_shortcode_3');

//------------------------------
//Case_study_shortcode
//------------------------------
function industry_case_study_shortcode($atts){
    extract( shortcode_atts( array(
        'img' => '',
        'title' => '',
        'description' => '',
        'link' => ''
    ), $atts) );
    
    $industry_case_study_markup = '<div class="industry_case_study">';
    
        $case_study_img_array = wp_get_attachment_image_src($img, 'large');
        $industry_case_study_markup .= '<div class="case-study-bg" style="background-image:url('.esc_url($case_study_img_array[0]).')"></div>';
    
    if(!empty($title)) {
        $industry_case_study_markup .='<h3>'.esc_html($title).'</h3>';
    }
    
    if(!empty($description)) {
        $industry_case_study_markup .=''.wpautop( esc_html($description) ).'';
    }
    
    if(!empty($link)){
        $link_array = explode('|', $link);
        
        $industry_case_study_markup .='<a href="'.$link_array[0].'" target="'.$link_array[2].'" class="case-study-readmore-btn">'.$link_array[1].'</a>';
    }
    
    $industry_case_study_markup .= '</div>';
         
    return $industry_case_study_markup;
}
add_shortcode('industry_case_study', 'industry_case_study_shortcode');


//------------------------------
//Counter_box_shortcode
//------------------------------
function industry_counter_box_shortcode($atts){
    extract( shortcode_atts( array(
        'icon_type' => 1,
        'fa_icon' => '',
        'img_icon' => '',
        'sub_title' => '',
        'count_number' => ''
    ), $atts) );
    
    $industry_counter_box_markup = '<div class="industry-counter-box">';
    
    if($icon_type == 1) {
        $industry_counter_box_markup .= '<div class="counter-icon">
            <i class="'.esc_attr($fa_icon).'"></i>
        </div>';
    } else {
        $counter_icon_img_array = wp_get_attachment_image_src( $img_icon, 'thumbnail' );
        $industry_counter_box_markup .= '<div class="counter-img-icon">
            <img src="'.esc_url($counter_icon_img_array[0]).'" alt="'.esc_html($sub_title).'">
        </div>';
    }
    
    if(!empty($sub_title)) {
        $industry_counter_box_markup .=''.wpautop( esc_html($sub_title) ).'';
    }
        
    if(!empty($count_number)) {
        $industry_counter_box_markup .='<h2>'.esc_html($count_number).'</h2>';
    }

    $industry_counter_box_markup .= '</div>';
    

          
    return $industry_counter_box_markup;
}
add_shortcode('industry_counter_box', 'industry_counter_box_shortcode');


//------------------------------
//Add-shortcode-for-slider
//------------------------------
function industry_slides_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => 2,
        'category' => '',
        'loop' => 'true',
        'dots' => 'true',
        'nav' => 'true',
        'autoplay' => 'true',
        'autoplayTimeout' => 5000
    ), $atts) );

    if( !empty($category) ) {
        $arg = array(
            'post_type' => 'industry-slide',
            'posts_per_page' => $count,
            'tax_qury' => array(
                array(
                    'taxonomy'  => 'slide_cat',
                    'field'     => 'term_id',
                    'terms'      => $category,
                ),
            )
        ); 
    } else {
        $arg = array(
            'post_type' => 'industry-slide',
            'posts_per_page' => $count
        );   
    }
    

    
    $get_post = new WP_Query($arg);
    
    $slide_random_number = rand(686868, 786868);
    
    $industry_slides_markup = '

    <script>
        jQuery(window).load(function(){
            jQuery("#industry-slides-'.$slide_random_number.'").owlCarousel({
                items: 1,
                loop: '.$loop.',
                dots: '.$dots.',
                nav: '.$nav.',
                navText: ["<i class=\'fa fa-angle-left\'>", "<i class=\'fa fa-angle-right\'>"],
                autoplay: '.$autoplay.',
                autoplayTimeout: '.$autoplayTimeout.',
                mouseDrag: false,
                touchDrag: false,
            });
        });
    </script>
    
    <div id="industry-slides-'.$slide_random_number.'" class="industry-slides">';
        while($get_post->have_posts()) : $get_post->the_post();
        $post_id = get_the_ID();
    
        if(get_post_meta( $post_id, 'industry_rrfonline_slide_meta', true ) ){
            $slide_meta = get_post_meta( $post_id, 'industry_rrfonline_slide_meta', true ); 
        } else {
            $slide_meta = array();
        }
    
        if(array_key_exists('width', $slide_meta)) {
            $width = $slide_meta['width'];
        } else{
            $width = 'col-md-6';
        }
    
        if(array_key_exists('offset', $slide_meta)) {
            $offset = $slide_meta['offset'];
        } else{
            $offset = 'no-offset';
        }
    
        if(array_key_exists('align', $slide_meta)) {
            $align = $slide_meta['align'];
        } else{
            $align = 'left';
        }

        if(array_key_exists('text_color', $slide_meta)) {
            $text_color = $slide_meta['text_color'];
        } else{
            $text_color = '#333';
        }
    
        if(array_key_exists('enable_overlay', $slide_meta)) {
            $enable_overlay = $slide_meta['enable_overlay'];
        } else{
            $enable_overlay = false;
        }   
    
        if(array_key_exists('overlay_color', $slide_meta)) {
            $overlay_color = $slide_meta['overlay_color'];
        } else{
            $overlay_color = '#333';
        } 
    
        if(array_key_exists('overlay_opacity', $slide_meta)) {
            $overlay_opacity = $slide_meta['overlay_opacity'];
        } else{
            $overlay_opacity = 70;
        }
        
        $industry_slides_markup .= '
            <div style="background-image:url('.get_the_post_thumbnail_url($post_id, 'large').')" class="industry-single-slide">';
            
            if( $enable_overlay == true) {
                $industry_slides_markup .= '<div style="opacity:.'.$overlay_opacity.';background:'.$overlay_color.'" class="industry-slide-overlay"></div>';
            }
     
        $industry_slides_markup .= '
                <div class="industry-single-slide-inner">
                    <div class="container">
                        <div class="row">
                            <div style="color:'.$text_color.'" class="'.$width.' '.$offset.' text-'.$align.'">
                                <h2>'.get_the_title($post_id).'</h2>
                                
                                '.wpautop(get_the_content($post_id)).'
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';
        endwhile;
    
    $industry_slides_markup .= '</div>';
    
    wp_reset_Query();
          
    return $industry_slides_markup;
}
add_shortcode('industry_slides', 'industry_slides_shortcode');