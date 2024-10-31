<?php
/*
Plugin Name: Sensiri
Plugin URI: http://hyperspatial.com/wordpress-development/plugins/sensiri
Description: The Sensiri player is a nature sound controller, designed to load and play nature sounds from our online database. Play multiple sounds at once to create an ambient soundscape. 
Version: 1.0
Requires at least: 2.9.2
Tested up to: 3.0
Author: Adam J Nowak
Author URI: http://hyperspatial.com
License: GPL2
*/

/*
Copyright 2010  Adam J Nowak  (email : adam@hyperspatial.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

$plugin_url = get_bloginfo('wpurl') . '/wp-content/plugins/sensiri/';

//Admin to Plugins page
function register_sensiri_admin_page() {
	add_submenu_page('plugins.php','Sensiri','Sensiri','administrator','sensiri','sensiri_admin_page');
}
add_action('admin_menu', 'register_sensiri_admin_page');

function sensiri_admin_page(){
	global $plugin_url;
	?>
	<style type="text/css">
    <!--
    #sensiri_admin_left {width:386px;margin-bottom:20px;}
    #sensiri_admin_right{float:right; width:300px; clear:right; padding-top:24px;}
    #sensiri_admin pre {margin:3px 0 10px 0;}
    #sensiri_admin code {padding:3px 6px;font-size:12px;}
    #sensiri_admin h4 {border-bottom:1px solid #333;}
    #sensiri_admin li {list-style-type:disc;list-style-position:inside;}
    .wwf {}
    .wwf img {border:1px solid #333; float:left;}
    .the_players {margin-bottom:20px; text-align:center;}
    .the_players img {margin-right:12px;}
	.donate_link {padding-top:7px;float:left;}
    -->
    </style>
    <div class="wrap" id="sensiri_admin">
      <div id="sensiri_admin_right">
      <h4>Sensiri Extras</h4>
      The <a href="http://sensiri.hyperspatial.com/pages/download_sensiri.html">Sensiri desktop player</a> is available for <a href="http://sensiri.hyperspatial.com/pages/download_sensiri.html">purchase</a>. For only 10 dollars!</p>
      <div class="donate_link">
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="S9Z8X7ZU6MJNW">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
	  </div>
      <p class="wwf"><a href="http://www.worldwildlife.org/" title="$2 donated in your name"><img src="<?php echo $plugin_url ?>images/wwf_logofinal.gif" width="60" height="60" alt="WWF" /></a></p>
      <p style="clear:left;padding-top:6px;">Two of those ten dollars will be donated to the <a href="http://www.worldwildlife.org">World Wildlife Fund</a>, in your name. Please help us to preserve our wonderful planet and all of its animals. ~ Adam J Nowak</p>
      <h4>The Sensiri Group</h4>
      <p>Join the <a href="http://myhyperspace.com/groups/sensiri/">Sensiri Group</a> on MyHyperspace.com, help us to preserve wildlife worldwide.</p>
      <h4>Tips</h4>
      <ul>
      <li>Play birds on 'Random', to prevent endless chirping.  Try setting it to 600</li>
      <li>The Arrow Button adds more player channels, up to 7 per player.</li>
      <li>Add multiple instances of Sensiri to your page to get more sounds.</li>
      <li>Don't forget the onboard help, just click 'F1'.</li>
      <li>'Ctrl' acts as a macro, to max out pan/volume and to stop or play all sounds.</li>
      <li>The green display button next to help brings up track info and timing data.</li>
      <li>To display in the sidebar, just add a template tag to your sidebar.php file.</li>
      <li>Sit back and enjoy your ambient soundscape.</li>
      </ul>
      </div>
      <div id="sensiri_admin_left">
        <h2>Sensiri</h2>
        <p>Add the Sensiri nature sound player to your blog pages or posts to enable your readers to create their very own unique ambient soundscapes. <a href="http://sensiri.hyperspatial.com">Learn More</a> about Sensiri</p>
        <p>To display Sensiri, just enter the shortcode into your page or post.  For template files, use the template tag below. Sensiri has not been implemented as a sidebar widget due to it's readability at small sizes (See Tips). For player <a href="http://sensiri.hyperspatial.com/pages/help.html">Help</a>, check out the <a href="http://sensiri.hyperspatial.com/pages/help.html">Interactive help player</a>.</p>
        <p>
        <h4>Shortcode</h4>
        Basic:
        <pre><code>[sensiri]</code></pre>
        With Options:
        <pre><code>[sensiri player=###### width=### id=##]</code></pre>
        Example:
        <pre><code>[sensiri player=drab width=400 id=3]</code></pre>
        </p>
        <p>
        <h4>Template Tag</h4>
        Basic:
        <pre><code>sensiri();</code></pre>
        With Options:
        <pre><code>sensiri('player=######&width=###&id=##');</code></pre>
        Example:
        <pre><code>sensiri('player=silver&width=800&id=12');</code></pre>
        </p>
        <h4>The Options</h4>
        <ul>
          <li><strong>player</strong> - Enter 'drab' or 'silver' to use an alternate player</li>
          <li><strong>width</strong> - Max width for player in large state, default = 575</li>
          <li><strong>id</strong> - The id number that will be used in the CSS id name for individual player styling</li>
        </ul>
      </div>
    </div>
    <div class="the_players">
    <a href="http://sensiri.hyperspatial.com/pages/download_sensiri.html" title="The Original Sensiri"><img src="<?php echo $plugin_url ?>images/colors_sm.jpg" width="230" height="70" alt="Sensiri" /></a>
    <a href="http://sensiri.hyperspatial.com/pages/download_sensiri.html" title="Sensiri Drab"><img src="<?php echo $plugin_url ?>images/drab_sm.jpg" width="230" height="70" alt="Sensiri Drab" /></a>
    <a href="http://sensiri.hyperspatial.com/pages/download_sensiri.html" title="Sensiri Silver"><img src="<?php echo $plugin_url ?>images/silver_sm.jpg" width="230" height="70" alt="Sensiri Silver" /></a>
    </div>
<?php	
}

//Template tag = sensiri('player=######&width=###&id=##'); or pass array as $args
function sensiri($args){
	global $plugin_url;
	$defaults = array(
		'player' => 'wp-sensiri.swf',
		'width' => '575',
		'id' => '1'
	);
	$r = wp_parse_args($args,$defaults);
	extract($r);
	
	//Player Conditionals
	if(strtolower($player) == 'drab') $player ='wp-sensiri-drab.swf';
	else if(strtolower($player) == 'silver') $player ='wp-sensiri-silver.swf';
	else $player ='wp-sensiri.swf';
	
	if(!is_numeric($width)) $width = '575';
	
	//Vars
	$height = round($width/3.2857);
	
	echo '<div id="sensiri-' . $id . '" class="sensiri_player"><object type="application/x-shockwave-flash" data="' . $plugin_url . 'swf/' . $player . '" width="' . $width . '" height="' . $height . '">
		<param name="quality" value="high" />
        <param name="wmode" value="transparent" />
        <param name="swfversion" value="6.0.65.0" />
        <param name="expressinstall" value="/Scripts/expressInstall.swf" />
        <param name="movie" value="' . $plugin_url . 'swf/' . $player . '" />
    </object></div>';      
}

//Shortcode = [sensiri player=###### width=### id=##]
function sensiri_shortcode($atts){
	global $plugin_url;
	extract(shortcode_atts(array(
        'player' => 'wp-sensiri.swf',
		'width' => '575',
		'id' => '1'
    ), $atts));
	
	//Player Conditionals
	if(strtolower($player) == 'drab') $player ='wp-sensiri-drab.swf';
	else if(strtolower($player) == 'silver') $player ='wp-sensiri-silver.swf';
	else $player ='wp-sensiri.swf';
	
	if(!is_numeric($width)) $width = '575';
	
	//Vars
	$height = round($width/3.2857);
	
	return '<div id="sensiri-' . $id . '" class="sensiri_player"><object type="application/x-shockwave-flash" data="' .$plugin_url . 'swf/' . $player . '" width="' . $width . '" height="' . $height . '">
		<param name="quality" value="high" />
        <param name="wmode" value="transparent" />
        <param name="swfversion" value="6.0.65.0" />
        <param name="expressinstall" value="/Scripts/expressInstall.swf" />
        <param name="movie" value="' . $plugin_url . 'swf/' . $player . '" />
	</object></div>';  
}

add_shortcode('sensiri', 'sensiri_shortcode');
?>