<?php
/*
Plugin Name: DirtySuds - Category Thumbnail
Plugin URI: http://dirtysuds.com
Description: Adds shortcode to embed a category thumbnail image link
Author: Dirty Suds
Version: 1.00.20110226
Author URI: http://blog.dirtysuds.com
License: GPL2

Updates:
1.00.20110226 - First Version

  Copyright 2011 Pat Hawks  (email : pat@pathawks.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// [catthumb id="Category ID" link="ture"]

function dirtysuds_category_thumb( $atts ) {
	extract( shortcode_atts( array(
		'id' => 1,
		'link' => 'true',
	), $atts ) );
	
	$embed = '';
	$posts = get_posts('cat='.$id.'&showposts=1&meta_key=_thumbnail_id');
	foreach( $posts as $post ) : setup_postdata($post);
		if ($link == 'true') {
			$embed = '<a href="'.get_category_link($id).'" title="'.get_cat_name($id).'">';
		}
		$imageid = get_post_thumbnail_id($post->ID);
		$embed .= '<img src="'.wp_get_attachment_thumb_url($imageid).'" alt="'.get_the_title($imageid).'" />';
		if ($link == 'true') {$embed .= '</a>';}
	endforeach;
	
	return $embed;
}

add_shortcode( 'catthumb', 'dirtysuds_category_thumb' );