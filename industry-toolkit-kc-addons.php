<?php

add_action('init', 'industry_toolkit_kc_addons', 99);

function industry_toolkit_kc_addons() {
    
    if (function_exists('kc_add_map')) {
        
        kc_add_map(
            array(
                'industry_section_title' => array(
                    'name' => 'Section Title',
                    'description' => __('Use this addon for displaying section title', 'kingComposer'),
                    'icon' => 'fa fa-table',
                    'category' => 'Industry',
                    'params' => array(
                        array(
                            'name' => 'sub_title',
                            'label' => 'Sub Title',
                            'type' => 'text',
                            'description' => 'Type Section Sub Title.',
                        ),
                        array(
                            'name' => 'title',
                            'label' => 'Title',
                            'type' => 'text',
                            'description' => 'Type Section Title.',
                        ),
                        array(
                            'name' => 'description',
                            'label' => 'Description',
                            'type' => 'textarea',
                            'description' => 'Type Section description.',
                        ),
                    )
                ), //End of element kc_icon
            )       
        ); //End add map        
        
        kc_add_map(
            array(
                'industry_service_box' => array(
                    'name' => 'Service Box',
                    'description' => __('Use this addon for displaying Service Box', 'kingComposer'),
                    'icon' => 'fa fa-tasks',
                    'category' => 'Industry',
                    'params' => array(
                        array(
                            'name' => 'icon_type',
                            'label' => 'Icon Type',
                            'type' => 'select',
                            'options' => array(
                                '1' => 'Select Icon',
                                '2' => 'Upload Icon',
                            ),
                            'description' => 'Select Service Box Icon Type',
                            'value' => '1',
                        ),
                        array(
                            'name' => 'fa_icon',
                            'label' => 'Icon',
                            'type' => 'icon_picker',
                            'description' => 'Choose Service Box Icon.',
                            'relation' => array(
                                'parent' => 'icon_type',
                                'show_when' => '1',
                            ),
                        ),
                        array(
                            'name' => 'img_icon',
                            'label' => 'Upload Icon',
                            'type' => 'attach_image',
                            'description' => 'Upload service box Icon',
                            'relation' => array(
                                'parent' => 'icon_type',
                                'hide_when' => '1',
                                ),
                        ),
                        array(
                            'name' => 'title',
                            'label' => 'Title',
                            'type' => 'text',
                            'description' => 'Type your title',
                        ),
                        array(
                            'name' => 'description',
                            'label' => 'Description',
                            'type' => 'text',
                            'description' => 'Type your description',
                        ),
                    )
                ), //End of element kc_icon
            )       
        ); //End add map        
        
        kc_add_map(
            array(
                'industry_service_box_2' => array(
                    'name' => 'Service Box 2',
                    'description' => __('Use this addon for displaying Service Box', 'kingComposer'),
                    'icon' => 'fa fa-tasks',
                    'category' => 'Industry',
                    'params' => array(
                        array(
                            'name' => 'img',
                            'label' => 'Upload Service Image',
                            'type' => 'attach_image',
                            'description' => 'Upload service Image',
                        ),
                        array(
                            'name' => 'title',
                            'label' => 'Title',
                            'type' => 'text',
                            'description' => 'Type your title',
                        ),
                        array(
                            'name' => 'description', 
                            'label' => 'Description',
                            'type' => 'text',
                            'description' => 'Type your description',
                        ),
                        array(
                            'name' => 'link', 
                            'label' => 'Link',
                            'type' => 'link',
                            'description' => 'Select Service Link',
                        ),
                    )
                ), //End of element kc_icon
            )       
        ); //End add map


        kc_add_map(
            array(
                'industry_service_box_3' => array(
                    'name' => 'Service Box 3',
                    'description' => __('Use this addon for displaying Service Box', 'kingComposer'),
                    'icon' => 'fa fa-tasks',
                    'category' => 'Industry',
                    'params' => array(
                        array(
                            'name' => 'icon_type',
                            'label' => 'Icon Type',
                            'type' => 'select',
                            'options' => array(
                                '1' => 'Select Icon',
                                '2' => 'Upload Icon',
                            ),
                            'description' => 'Select Service Box Icon Type',
                            'value' => '1',
                        ),
                        array(
                            'name' => 'fa_icon',
                            'label' => 'Icon',
                            'type' => 'icon_picker',
                            'description' => 'Choose Service Box Icon.',
                            'relation' => array(
                                'parent' => 'icon_type',
                                'show_when' => '1',
                            ),
                        ),
                        array(
                            'name' => 'img_icon',
                            'label' => 'Upload Icon',
                            'type' => 'attach_image',
                            'description' => 'Upload service box Icon',
                            'relation' => array(
                                'parent' => 'icon_type',
                                'hide_when' => '1',
                                ),
                        ),
                        array(
                            'name' => 'title',
                            'label' => 'Title',
                            'type' => 'text',
                            'description' => 'Type your title',
                        ),
                        array(
                            'name' => 'description', 
                            'label' => 'Description',
                            'type' => 'text',
                            'description' => 'Type your description',
                        ),
                        array(
                            'name' => 'link', 
                            'label' => 'Link',
                            'type' => 'link',
                            'description' => 'Select Service Link',
                        ),
                    )
                ), //End of element kc_icon
            )       
        ); //End add map     

         kc_add_map(
            array(
                'industry_case_study' => array(
                    'name' => 'Case Study',
                    'description' => __('Use this addon for displaying Case Study', 'kingComposer'),
                    'icon' => 'fa fa-tasks',
                    'category' => 'Industry',
                    'params' => array(
                        array(
                            'name' => 'img',
                            'label' => 'Case Study thumbnail',
                            'type' => 'attach_image',
                            'description' => 'Upload Case Study thumbnail',
                        ),
                        array(
                            'name' => 'title',
                            'label' => 'Title',
                            'type' => 'text',
                            'description' => 'Type your title',
                        ),
                        array(
                            'name' => 'description', 
                            'label' => 'Description',
                            'type' => 'text',
                            'description' => 'Type your description',
                        ),
                        array(
                            'name' => 'link', 
                            'label' => 'Link',
                            'type' => 'link',
                            'description' => 'Select Service Link',
                        ),
                    )
                ), //End of element kc_icon
            )       
        ); //End add map


         kc_add_map(
            array(
                'industry_counter_box' => array(
                    'name' => 'Counter Box',
                    'description' => __('Use this addon for displaying Counter Box', 'kingComposer'),
                    'icon' => 'fa fa-tasks',
                    'category' => 'Industry',
                    'params' => array(
                        array(
                            'name' => 'icon_type',
                            'label' => 'Icon Type',
                            'type' => 'select',
                            'options' => array(
                                '1' => 'Select Icon',
                                '2' => 'Upload Icon',
                            ),
                            'description' => 'Select counter Box Icon Type',
                        ),
                        array(
                            'name' => 'fa_icon',
                            'label' => 'Icon',
                            'type' => 'icon_picker',
                            'description' => 'Choose counter Box Icon.',
                            'relation' => array(
                                'parent' => 'icon_type',
                                'show_when' => '1',
                            ),
                        ),
                        array(
                            'name' => 'img_icon',
                            'label' => 'Upload Icon',
                            'type' => 'attach_image',
                            'description' => 'Upload counter box Icon',
                            'relation' => array(
                                'parent' => 'icon_type',
                                'hide_when' => '1',
                                ),
                        ),
                        array(
                            'name' => 'sub_title',
                            'label' => 'Sub Title',
                            'type' => 'text',
                            'description' => 'Type your title',
                        ),
                        array(
                            'name' => 'count_number',
                            'label' => 'Count Number',
                            'type' => 'text',
                            'description' => 'Type your Counter Number',
                        ),
                    )
                ), //End of element kc_icon
            )       
        ); //End add map        
        
        kc_add_map(
            array(
                'industry_slides' => array(
                    'name' => 'Industry Slides',
                    'description' => __('Use this addon for displaying Service Box', 'kingComposer'),
                    'icon' => 'fa fa-arrows-h',
                    'category' => 'Industry',
                    'params' => array(
                        array(
                            'name' => 'count',
                            'label' => 'Slide count',
                            'type' => 'text',
                            'description' => '',
                            'value' => 3,
                        ),
                        array(
                            'name' => 'category',
                            'label' => 'Category',
                            'type' => 'select',
                            'options' => industry_theme_slide_cat_list(),
                        ),
                        array(
                            'name' => 'loop',
                            'label' => 'Loop',
                            'type' => 'select',
                            'options' => array(
                                'true' => 'Yes',
                                'false' => 'No',
                            ),
                            'value' => 'true',
                        ),
                        array(
                            'name' => 'dots',
                            'label' => 'Dots',
                            'type' => 'select',
                            'options' => array(
                                'true' => 'Yes',
                                'false' => 'No',
                            ),
                            'value' => 'true',
                        ),
                        array(
                            'name' => 'nav',
                            'label' => 'Nav',
                            'type' => 'select',
                            'options' => array(
                                'true' => 'Yes',
                                'false' => 'No',
                            ),
                            'value' => 'true',
                        ),
                        array(
                            'name' => 'autoplay',
                            'label' => 'Autoplay',
                            'type' => 'select',
                            'options' => array(
                                'true' => 'Yes',
                                'false' => 'No',
                            ),
                            'value' => 'true',
                        ),
                        array(
                            'name' => 'autoplayTimeout',
                            'label' => 'Slide Timeout',
                            'type' => 'text',
                            'description' => 'Type Slide time in mili Seconds',
                            'value' => 5000,
                            'relation' => array(
                                'parent' => 'autoplay',
                                'show_when' => 'true',
                            ),
                        ),
                    )
                ), //End of element kc_icon
            )       
        ); //End add map
    } //End if
}