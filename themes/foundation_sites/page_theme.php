<?php
namespace Concrete\Package\FoundationSites\Theme\FoundationSites;

class PageTheme extends \Concrete\Core\Page\Theme\Theme
{

	public function registerAssets() {
        //$this->providesAsset('javascript', 'bootstrap/*');
        $this->providesAsset('modernizr', '/bower_components/modernizr/modernizr.js');
        $this->providesAsset('fastclick', '/bower_components/fastclick/lib/fastclick.js');
        //$this->providesAsset('jquery', '/bower_components/jquery/dist/jquery.min.js');
        
        $this->requireAsset('javascript', 'jquery');
	}

    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function getThemeBlockClasses()
    {
        return array(
            'feature' => array('feature-home-page'),
            'page_list' => array(
                'recent-blog-entry',
                'blog-entry-list',
                'page-list-with-buttons',
                'block-sidebar-wrapped'
            ),
            'next_previous' => array('block-sidebar-wrapped'),
            'share_this_page' => array('block-sidebar-wrapped'),
            'content' => array(
                'block-sidebar-wrapped',
                'block-sidebar-padded'
            ),
            'date_navigation' => array('block-sidebar-padded'),
            'topic_list' => array('block-sidebar-wrapped'),
            'testimonial' => array('testimonial-bio'),
            'image' => array(
                'image-right-tilt',
                'image-circle'
            )
        );
    }

    public function getThemeAreaClasses()
    {
        return array(
            'Page Footer' => array('area-content-accent')
        );
    }

    public function getThemeDefaultBlockTemplates()
    {
        /*
        return array(
            'image' => 'some_special_image_template'
        );
        */
    }

    public function getThemeResponsiveImageMap()
    {
        return array(
            'large' => '900px',
            'medium' => '768px',
            'small' => '0'
        );
    }

    public function getThemeEditorClasses()
    {
        return array(
            array('title' => t('Title Thin'), 'menuClass' => 'title-thin', 'spanClass' => 'title-thin'),
            array('title' => t('Title Caps Bold'), 'menuClass' => 'title-caps-bold', 'spanClass' => 'title-caps-bold'),
            array('title' => t('Title Caps'), 'menuClass' => 'title-caps', 'spanClass' => 'title-caps'),
            array('title' => t('Image Caption'), 'menuClass' => 'image-caption', 'spanClass' => 'image-caption'),
            array('title' => t('Standard Button'), 'menuClass' => '', 'spanClass' => 'btn btn-default'),
            array('title' => t('Success Button'), 'menuClass' => '', 'spanClass' => 'btn btn-success'),
            array('title' => t('Primary Button'), 'menuClass' => '', 'spanClass' => 'btn btn-primary')
        );
    }

}
