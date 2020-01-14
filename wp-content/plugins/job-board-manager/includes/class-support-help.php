<?php
if ( ! defined('ABSPATH')) exit;  // if direct access


class class_job_bm_support_help{
	
	public function __construct(){


		}


    public function addons_list($addons_data = array()){

        $addons_data_new = array(

            'widgets'=>array(	'title'=>'Widgets',
                'content'=>'Widgets for Job Board Manager.',
                'item_link'=>'https://wordpress.org/plugins/job-board-manager-widgets/',
                'zip_link'=>'https://downloads.wordpress.org/plugin/job-board-manager-widgets.zip',
                'wp_org_slug'=>'job-board-manager-widgets',
                'thumb'=>job_bm_plugin_url.'assets/admin/images/addons/widgets.png',
            ),

            'company-profile'=>array(	'title'=>'Company Profile',
                'content'=>'Addon for creating company profile.',
                'item_link'=>'https://wordpress.org/plugins/job-board-manager-company-profile/',
                'zip_link'=>'https://downloads.wordpress.org/plugin/job-board-manager-company-profile.zip',
                'wp_org_slug'=>'job-board-manager-company-profile',
                'thumb'=>job_bm_plugin_url.'assets/admin/images/addons/company-profile.png',
            ),

            'locations'=>array(	'title'=>'Locations',
                'price'=>'15',
                'content'=>'Awesome location single page and display job list under any location via single page.',
                'item_link'=>'https://wordpress.org/plugins/job-board-manager-locations/',
                'zip_link'=>'https://downloads.wordpress.org/plugin/job-board-manager-locations.zip',
                'wp_org_slug'=>'job-board-manager-locations',
                'thumb'=>job_bm_plugin_url.'assets/admin/images/addons/locations.png',
            ),




            'saved-jobs'=>array(	'title'=>'Saved Jobs',
                'content'=>'Allow visitors to save job link as bookmarks to thier account.',
                'item_link'=>'http://www.pickplugins.com/item/job-board-manager-saved-jobs/',
                'thumb'=>job_bm_plugin_url.'assets/admin/images/addons/saved-jobs.png',
            ),



            'application-manager'=>array('title'=>'Application Manager',

                'content'=>'Manage application for every job.',
                'item_link'=>'http://www.pickplugins.com/item/job-board-manager-application-manager/',
                'thumb'=>job_bm_plugin_url.'assets/admin/images/addons/application-manager.png',
            ),

            'stats'=>array(	'title'=>'Stats',

                'content'=>'Display job stats.',
                'item_link'=>'http://www.pickplugins.com/item/job-board-manager-stats/',
                'thumb'=>job_bm_plugin_url.'assets/admin/images/addons/stats.png',
            ),

//            'categories'=>array(	'title'=>'Categories',
//
//                'content'=>'Display Job Categories.',
//                'item_link'=>'http://www.pickplugins.com/item/job-board-manager-categories/',
//                'thumb'=>job_bm_plugin_url.'assets/admin/images/addons/categories.png',
//            ),

            'paid-listing'=>array(	'title'=>'Paid Listing',

                'content'=>'Get paid by listing jobs via WooCommerce.',
                'item_link'=>'http://www.pickplugins.com/item/job-board-manager-woocommerce-paid-listing/',
                'thumb'=>job_bm_plugin_url.'assets/admin/images/addons/paid-listing.png',
            ),


            'job-list-ads'=>array(	'title'=>'Job List Ads',
                'content'=>'Display ads/custom html content inside job list.',
                'item_link'=>'http://www.pickplugins.com/item/job-board-manager-job-list-ads/',
                'thumb'=>job_bm_plugin_url.'assets/admin/images/addons/job-list-ads.png',
            ),


            'search'=>array(	'title'=>'Search & Filter',
                'content'=>'Search & filter job by different input.',
                'item_link'=>'http://www.pickplugins.com/item/job-board-manager-search/',
                'thumb'=>job_bm_plugin_url.'assets/admin/images/addons/search.png',
            ),

            'job-feed'=>array(	'title'=>'Job Feed',
                'content'=>'Display jobs by followed companies, like social feed, once you follow any company job published from these company will display as like social feed.',
                'item_link'=>'http://www.pickplugins.com/item/job-board-manager-job-feed/',
                'thumb'=>job_bm_plugin_url.'assets/admin/images/addons/job-feed.png',
            ),

            'report-job'=>array(	'title'=>'Report Job',
                'content'=>'add functionality to report/flag/moderate  a job.',
                'item_link'=>'http://www.pickplugins.com/item/job-board-manager-report-job/',
                'thumb'=>job_bm_plugin_url.'assets/admin/images/addons/report-job.png',
            ),

            'related-jobs'=>array(	'title'=>'Related Jobs',
                'content'=>'Display related jobs under single job page.',
                'item_link'=>'https://www.pickplugins.com/item/job-board-manager-related-jobs/',
                'thumb'=>job_bm_plugin_url.'assets/admin/images/addons/related-jobs.png',
            ),



        );

        $addons_data = array_merge($addons_data_new,$addons_data);

        $addons_data = apply_filters('job_bm_addons_list', $addons_data);

        return $addons_data;


    }




}
	
