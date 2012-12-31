<?php

/**
 * Description of BPMediaAddon
 *
 * @author Gagandeep Singh <gagandeep.singh@rtcamp.com>
 * @author Joshua Abenazer <joshua.abenazer@rtcamp.com>
 */
if (!class_exists('BPMediaAddon')) {

    class BPMediaAddon {

        public function get_addons() {
            $addons = array(
                array(
                    'title' => 'BuddyPress-Media Kaltura Add-on',
                    'img_src' => 'http://cdn.rtcamp.com/files/2012/10/new-buddypress-media-kaltura-logo-240x184.png',
                    'product_link' => 'http://rtcamp.com/store/buddypress-media-kaltura/',
                    'desc' => '<p>Add support for more video formats using Kaltura video solution.</p>
                <p>Works with Kaltura.com, self-hosted Kaltura-CE and Kaltura-on-premise.</p>',
                    'price' => '$99',
                    'demo_link' => 'http://demo.rtcamp.com/bpm-kaltura/',
                    'buy_now' => 'http://rtcamp.com/store/?add-to-cart=15446'
                ),
                array(
                    'title' => 'BuddyPress-Media FFMPEG Add-on',
                    'img_src' => 'http://cdn.rtcamp.com/files/2012/09/ffmpeg-logo-240x184.png',
                    'product_link' => 'http://rtcamp.com/store/buddypress-media-ffmpeg-converter/',
                    'desc' => '<p>Add supports for more audio & video formats using open-source media-node.</p>
                        <p>Media node comes with automated setup script for Ubuntu/Debian.</p>',
                    'price' => '$49',
                    'demo_link' => 'http://demo.rtcamp.com/bpm-media',
                    'buy_now' => 'http://rtcamp.com/store/?add-to-cart=13677'
                )
            );
            foreach ($addons as $addon) {
                $this->addon($addon);
            }
        }

        public function addon($args) {
            global $bp_media;

            $defaults = array(
                'title' => '',
                'img_src' => '',
                'product_link' => '',
                'desc' => '',
                'price' => '',
                'demo_link' => '',
                'buy_now' => '',
            );
            $args = wp_parse_args($args, $defaults);
            extract($args);
            $addon = '<div class="bp-media-addon">
                <a href="' . $product_link . '"  title="' . $title . '">
                    <img width="240" height="184" title="' . $title . '" alt="' . $title . '" src="' . $img_src . '">
                </a>
                <h4><a href="' . $product_link . '"  title="' . $title . '">' . $title . '</a></h4>
                <div class="product_desc">
                    ' . $desc . '
                </div>
                <div class="product_footer">
                    <span class="price alignleft"><span class="amount">' . $price . '</span></span>
                    <a class="add_to_cart_button  alignright product_type_simple"  href="' . $buy_now . '">' . __('Buy Now', BP_MEDIA_TXT_DOMAIN) . '</a>
                    <a class="alignleft product_demo_link"  href="' . $demo_link . '" title="' . $title . '">' . __('Live Demo', BP_MEDIA_TXT_DOMAIN) . '</a>
                </div>
            </div>';
            echo $addon;
        }

    }

}
?>