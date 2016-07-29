<?php
namespace Flycartinc\Events\Platforms;

class Wordpress
{

    /**
     * @param $tag
     * @param array $args
     * @param string $type
     * @return mixed
     */

    public static function trigger($tag, $args = array(),$type = 'action')
    {
        if($type == 'filter'){
            return apply_filters($tag, $args);
        }
        else{
            $args = array_filter($args);
            if (!empty($args)) {
                do_action($tag, $args);
            } else {
               do_action($tag);
            }
        }

    }

}