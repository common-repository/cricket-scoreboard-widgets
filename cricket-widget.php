<?php

/*

Plugin Name: Cricket Scoreboard

Plugin URI: http://www.vishalbarot.com/blog

Description: Display live Cricket Scoreboard on your website.

Version: 1.0.0

Author: vgbarot

Author URI: http://www.vishalbarot.com

*/

function scoreboard_widget() {

	echo"<div class='widget'><h2>Scoreboard</h2><img src='http://www.bollywoodjalwa.com/cricket-widget.php'></div>";

}

 

function init_scoreboard(){

	register_sidebar_widget("Scoreboard", "scoreboard_widget");     

}

 

add_action("plugins_loaded", "init_scoreboard");

 

?>