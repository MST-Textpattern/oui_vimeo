<?php

/*
 * This file is part of oui_vimeo,
 * a oui_player v2+ extension to easily embed
 * Vimeo customizable video players in Textpattern CMS.
 *
 * https://github.com/NicolasGraph/oui_vimeo
 *
 * Copyright (C) 2018 Nicolas Morand
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 2 of the License.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA..
 */

/**
 * Vimeo
 *
 * @package Oui\Player
 */

namespace Oui\Player {

    if (class_exists('Oui\Provider')) {

        class Vimeo extends Provider
        {
            protected static $patterns = array(
                'video' => array(
                    'scheme' => '#^(http|https)://((player\.vimeo\.com/video)|(vimeo\.com))/(\d+)$#i',
                    'id'     => '5',
                ),
            );
            protected static $src = '//player.vimeo.com/';
            protected static $glue = array('video/', '?', '&amp;');
            protected static $dims = array(
                'width'     => array(
                    'default' => '640',
                ),
                'height'    => array(
                    'default' => '360',
                ),
                'ratio'     => array(
                    'default' => '',
                ),
            );
            protected static $params = array(
                'api' => array(
                    'default' => '0',
                    'valid'   => array('0', '1'),
                ),
                'autopause' => array(
                    'default' => '1',
                    'valid'   => array('0', '1'),
                ),
                'autoplay'  => array(
                    'default' => '0',
                    'valid'   => array('0', '1'),
                ),
                'byline'    => array(
                    'default' => '1',
                    'valid'   => array('0', '1'),
                ),
                'color'     => array(
                    'default' => '#00adef',
                    'valid'   => 'color',
                ),
                'loop'      => array(
                    'default' => '0',
                    'valid'   => array('0', '1'),
                ),
                'portrait'  => array(
                    'default' => '1',
                    'valid'   => array('0', '1'),
                ),
                'title'     => array(
                    'default' => '1',
                    'valid'   => array('0', '1'),
                ),
            );
        }
    }
}

namespace {
    function oui_vimeo($atts) {
        return oui_player(array_merge(array('provider' => 'vimeo'), $atts));
    }

    function oui_if_vimeo($atts, $thing) {
        return oui_if_player(array_merge(array('provider' => 'vimeo'), $atts), $thing);
    }
}
