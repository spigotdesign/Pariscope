<?php

/**
 * This is an example module with only the basic
 * setup necessary to get it working.
 *
 * @class FLBasicExampleModule
 */
class FLBasicExampleModule extends FLBuilderModule {

    /** 
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */  
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Portfolio Feed', 'fl-builder'),
            'description'   => __('A custom module for Spigot Portfolio items.', 'fl-builder'),
            'category'		=> __('Custom', 'fl-builder'),
            'group'         => __('Spigot Modules', 'fl-builder'),

        ));
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FLBasicExampleModule', array(
    'general'       => array( // Tab
        'title'         => __('General', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Spigot Portfolio Feed', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'portfolio_items' => array(
                    'type'        => 'unit',
                    'label'       => 'Number of Portfolio Items',
                    'default'     => '3'
                    
                ),
                )
            )
        )
    )
));