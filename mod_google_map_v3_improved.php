<?php
/**
 * @version      $Id$
 * @package      Google Map API3 - Improved
 * @subpackage   mod_google_map_v3_improved
 * @copyright    Copyright (C) 2009-2011 Noxidsoft. All rights reserved.
 * @license      GNU General Public License <http://www.gnu.org/copyleft/gpl.html>
 * @author       Noel Dixon <noel.dixon@noxidsoft.com>
 */

//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die();

$baseUrl = JUri::base(true);

$address				= $params->get( 'address' );
$height 				= $params->get( 'height' );
$width 					= $params->get( 'width' );
$zoom 					= $params->get( 'zoom' );
$marker_icon			= $params->get( 'marker_icon' );
$toggle_search 			= $params->get( 'toggle_search' );
$toggle_buttontext 		= $params->get( 'toggle_buttontext' );
$toggle_topbottom 		= $params->get( 'toggle_topbottom' );
$toggle_leftmiddleright = $params->get( 'toggle_leftmiddleright' );
$toggle_mapcontrols		= $params->get( 'toggle_mapcontrols' );
?>

<html>
<head>
<title>Google Map v3 - Improved</title>
<jdoc:include type="head" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="<?php echo $baseUrl ?>/modules/mod_google_map_v3_improved/css/template.css" type="text/css" />
<?php
	$document = &JFactory::getDocument();
	$document->addScript( 'http://maps.google.com/maps/api/js?sensor=false' );
	$document->addScript( $baseUrl.'/modules/mod_google_map_v3_improved/js/geocoder.js' );
?>
</head>
<body onload="codeAddress()">

<div id="wrap_map<?php echo $params->get( 'moduleclass_sfx'); ?>" style="width:<?php echo $width; ?>px">

	<?php if($toggle_leftmiddleright == 0) {  // position search left ?>
		<div class="map_left_pos<?php echo $params->get( 'moduleclass_sfx'); ?>">
			<?php
				if($toggle_topbottom == 0){
					if($toggle_search == 1){
						echo '<input id="address" type="textbox" value="'.$address.'">';
						echo '<input type="button" value="'.$toggle_buttontext.'" onclick="codeAddress()">';
					}
				}				
			?>

			<?php				
				echo '<div id="map_canvas" style="width: '.$width.'px; height: '.$height.'px;"></div>';
				echo '<input id="zoom_level" type="hidden" value="'.$zoom.'">';
				echo '<input id="address" type="hidden" value="'.$address.'">';
				echo '<input id="marker_icon" type="hidden" value="'.$marker_icon.'">';
				echo '<input id="toggle_mapcontrols" type="hidden" value="'.$toggle_mapcontrols.'">';
			?>

			<?php				
				if($toggle_topbottom == 1){
					if($toggle_search == 1){
						echo '<input id="address" type="textbox" value="'.$address.'">';
						echo '<input type="button" value="'.$toggle_buttontext.'" onclick="codeAddress()">';
					}
				}
			?>
		</div>
	<?php } ?>
	
	<?php if($toggle_leftmiddleright == 1) {  // position search centered ?>
		<div class="map_middle_pos<?php echo $params->get( 'moduleclass_sfx'); ?>">
			<?php
				if($toggle_topbottom == 0){
					if($toggle_search == 1){
						echo '<input id="address" type="textbox" value="'.$address.'">';
						echo '<input type="button" value="'.$toggle_buttontext.'" onclick="codeAddress()">';
					}
				}				
			?>

			<?php				
				echo '<div id="map_canvas" style="width: '.$width.'px; height: '.$height.'px;"></div>';
				echo '<input id="zoom_level" type="hidden" value="'.$zoom.'">';
				echo '<input id="address" type="hidden" value="'.$address.'">';
				echo '<input id="marker_icon" type="hidden" value="'.$marker_icon.'">';
				echo '<input id="toggle_mapcontrols" type="hidden" value="'.$toggle_mapcontrols.'">';
			?>

			<?php				
				if($toggle_topbottom == 1){
					if($toggle_search == 1){
						echo '<input id="address" type="textbox" value="'.$address.'">';
						echo '<input type="button" value="'.$toggle_buttontext.'" onclick="codeAddress()">';
					}
				}
			?>
		</div>
	<?php } ?>
	
	<?php if($toggle_leftmiddleright == 2) {  // position search right ?>
		<div class="map_right_pos<?php echo $params->get( 'moduleclass_sfx'); ?>">
			<?php
				if($toggle_topbottom == 0){
					if($toggle_search == 1){
						echo '<input id="address" type="textbox" value="'.$address.'">';
						echo '<input type="button" value="'.$toggle_buttontext.'" onclick="codeAddress()">';
					}
				}				
			?>

			<?php				
				echo '<div id="map_canvas" style="width: '.$width.'px; height: '.$height.'px;"></div>';
				echo '<input id="zoom_level" type="hidden" value="'.$zoom.'">';
				echo '<input id="address" type="hidden" value="'.$address.'">';
				echo '<input id="marker_icon" type="hidden" value="'.$marker_icon.'">';
				echo '<input id="toggle_mapcontrols" type="hidden" value="'.$toggle_mapcontrols.'">';
			?>

			<?php				
				if($toggle_topbottom == 1){
					if($toggle_search == 1){
						echo '<input id="address" type="textbox" value="'.$address.'">';
						echo '<input type="button" value="'.$toggle_buttontext.'" onclick="codeAddress()">';
					}
				}
			?>
		</div>
	<?php } ?>
</div>

</body>
</html>