<?php
/**
 * Description
 *
 * @package     RobMcDonald\Developers
 * @since       1.0.0
 * @author      Rob McDonald
 * @link        https://www.robmcdonald.net
 * @license     GNU General Public License 2.0+
 */
namespace RobMcDonald\Developers;

add_filter( 'genesis_author_box_gravatar_size', __NAMESPACE__ . '\setup_author_box_gravatar_size' );
/**
 * Modify size of the Gravatar in the author box
 *
 * @since 1.0.0
 *
 * @param $size
 *
 * @return int
 */

function setup_author_box_gravatar_size( $size ) {

	return 90;

}