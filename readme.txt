=== Sensiri ===
Contributors: Adam J Nowak
Donate link: http://hyperspatial.com/sensiri-donation
Tags: nature sounds,flash player,music,relaxing,sound player
Requires at least: 2.9
Tested up to: 3.0
Stable tag: 1.0

The Sensiri player is a nature sound controller, designed to load and play nature sounds from our online database. 

== Description ==

Use shortcode or template tags to display this player in your posts or on your pages.  Add multiple instances to get more nature sounds, each player is capable of playing seven at once.

The Sensiri player is a sound controller, designed to load and play nature sounds from our online database. What's the big deal you might be asking yourself? Well the big deal is that you can control and play up to seven separate sounds at once. If you download all three different player models you can play up to 21 separate sounds at once. That seems like a lot but consider this. The Sensiri player repeats each nature sound over and over again, creating loops. You can utilize the players random setting to add a silent pause at the end of each loop. You just type in the maximum length of the pause and the computer will repeat the sound with a different pause each time. This simple setting will bring the sounds of animals, birds and whatever else you want to life. I like to get seven birds going all at once, with a 600 second random delay. Each of the seven will sing after a random pause somewhere between zero and 600 seconds. There is no limit you could set an sparrow to sing sometime today, or once a day using the manual setting.

== Installation ==

1. Upload `sensiri` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

Instructions: 

1. Access plugin info under the plugins menu from the Wordpress dashboard, under 'Sensiri'
2. Add the player to a post or page using shortcode: 
Basic = [sensiri], With Options = [sensiri player=###### width=### id=##], Example = [sensiri player=drab width=400 id=3]
3. Add the player to a template file with a template tag: Basic = `<?php sensiri() ?>`, With Options = `<?php sensiri('player=######&width=###&id=##'); ?>`, Example = `<?php sensiri('player=silver&width=800&id=12'); ?>`
4. Options are as follows: 'player' = Enter 'drab' or 'silver' to use an alternate player, 'width' = Max width for player in large state, default = 575, and 'id' = The id number that will be used in the CSS id name for individual player styling

5. Access player instruction from the player help or go to [the help page](http://sensiri.hyperspatial.com/pages/help.html "The Help Page")

== Changelog ==

= 1.0 =
* Enjoy Sensiri!  controller, designed to load and play nature sounds from our online database. 

== Description ==

Use shortcode or template tags to display this player in your posts or on your pages.  Add multiple instances to get more nature sounds, each player is capable of playing seven at once.

The Sensiri player is a sound controller, designed to load and play nature sounds from our online database. What's the big deal you might be asking yourself? Well the big deal is that you can control and play up to seven seperate sounds at once. If you download all three different player models you can play up to 21 seperate sounds at once. That seems like alot but consider this. The Sensiri player repeats each nature sound over and over again, creating loops. You can utilize the players random setting to add a silent pause at the end of each loop. You just type in the maximum length of the pause and the computer will repeat the sound with a dfferent pause each time. This simple setting will bring the sounds of animals, birds and whatever else you want to life. I like to get seven birds going all at once, with a 600 second random delay. Each of the seven will sing after a random pause somewhere between zero and 600 seconds. There is no limit you could set an sparrow to sing sometime today, or once a day using the manual setting.

== Installation ==

1. Upload `sensiri` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

Instructions: 

1. Access plugin info under the plugins menu from the Wordpress dashboard, under 'Sensiri'
2. Add the player to a post or page using shortcode: 
Basic = [sensiri], With Options = [sensiri player=###### width=### id=##], Example = [sensiri player=drab width=400 id=3]
3. Add the player to a template file with a template tag: Basic = `<?php sensiri() ?>`, With Options = `<?php sensiri('player=######&width=###&id=##'); ?>`, Example = `<?php sensiri('player=silver&width=800&id=12'); ?>`
4. Options are as follows: 'player' = Enter 'drab' or 'silver' to use an alternate player, 'width' = Max width for player in large state, default = 575, and 'id' = The id number that will be used in the CSS id name for individual player styling

5. Access player instruction from the player help or go to [the help page](http://sensiri.hyperspatial.com/pages/help.html "The Help Page")

== Frequently Asked Questions ==

= The text looks miss-aligned when I resize the player =

Flash does a lot of rounding mathmateically when calculating vector locations, so just experiment by changing the player width a couple of pixels until you get the text to look better.

= How do keep listening while browsing the web? =

Open whatever page that has Sensiri and keep it open by opening a new tab to do your browsing.

== Screenshots ==

1. This is the player in its medium state on a blog post

== Changelog ==

= 1.0 =
* Enjoy Sensiri! 