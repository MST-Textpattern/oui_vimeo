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

namespace Oui;

if (class_exists('Oui\Player\OEmbed')) {

    class Vimeo extends Player\OEmbed
    {
        protected static $endPoint = 'https://vimeo.com/api/oembed.json';
        protected static $URLBase = 'http://vimeo.com/';

        protected static $srcBase = '//player.vimeo.com/';
        protected static $srcGlue = array('video/', '?', '&amp;');
        protected static $iniDims = array(
            'width'      => '640',
            'height'     => '360',
            'ratio'      => '',
            'responsive' => array(
                'default' => 'false',
                'valid'   => array('true', 'false'),
            ),
        );
        protected static $iniParams = array(
            'api'         => array(
                'default' => '0',
                'valid'   => array('0', '1'),
            ),
            'autopause'   => array(
                'default' => '1',
                'valid'   => array('0', '1'),
            ),
            'autoplay'    => array(
                'default' => '0',
                'valid'   => array('0', '1'),
            ),
            // 'background'  => array(
            //     'default' => '0',
            //     'valid'   => array('0', '1'),
            // ),
            'byline'      => array(
                'default' => '1',
                'valid'   => array('0', '1'),
            ),
            'color'       => array(
                'default' => '#00adef',
                'valid'   => 'color',
            ),
            'dnt'         => array(
                'default' => '0',
                'valid'   => array('0', '1'),
            ),
            // 'fun'         => array(
            //     'default' => '1',
            //     'valid'   => array('0', '1'),
            // ),
            'loop'        => array(
                'default' => '0',
                'valid'   => array('0', '1'),
            ),
            'muted'       => array(
                'default' => '0',
                'valid'   => array('0', '1'),
            ),
            'playsinline' => array(
                'default' => '1',
                'valid'   => array('0', '1'),
            ),
            'portrait'    => array(
                'default' => '1',
                'valid'   => array('0', '1'),
            ),
            // 'quality'     => array(
            //     'default' => 'auto',
            //     'valid'   => array('auto', '360p', '540p', '720p', '1080p', '2k', '4k'),
            // ),
            // 'speed'       => array(
            //     'default' => '0',
            //     'valid'   => array('0', '1'),
            // ),
            'title'       => array(
                'default' => '1',
                'valid'   => array('0', '1'),
            ),
            'transparent' => array(
                'default' => '1',
                'valid'   => array('0', '1'),
            ),
            '#t'          => '0m' // TODO Should not require some glue…
        );
        protected static $mediaPatterns = array(
            'scheme' => '#^https?://((player\.vimeo\.com/video)|(vimeo\.com))/(\d+)$#i',
            'id'     => '4',
        );
    }
}
