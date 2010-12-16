<?php

/*

Plugin Name: Comments with OpenId
Plugin URI: http://unixpin.com/wordpress/2009/11/16/wordpress-plugin-comments-with-openid
Description: Third party accounts login plugin enables you to allow users to login via third party accounts like Google, Yandex and so on. Based on 'Third Party Accounts Login' plugin of  Anant Garg
Version: 1.4
Author: Korolev Igor
Author URI: http://unixpin.com
Licence: This WordPress plugin is licenced under the GNU General Public Licence. For more information see: http://www.gnu.org/copyleft/gpl.html

For documentation, please visit http://unixpin.com/wordpress/2009/11/16/wordpress-plugin-comments-with-openid

*/



function comments_with_openid() { 
	/*$plugin_url = '/'.PLUGINDIR.'/'. dirname( plugin_basename(__FILE__) );*/
	$plugin_url = trailingslashit( get_bloginfo('wpurl') ).PLUGINDIR.'/'. dirname( plugin_basename(__FILE__) ); 
	$data = '<div>';
	
	$OpenIDs = 
	array (
		'Yandex' => array( 'url'=> 'http://openid.yandex.ru/USERNAME', 'start'=> 24, 'end'=> 8, 'sprite'=> 0 ),
		'Mail.ru' => array( 'url'=> 'http://USERNAME.id.mail.ru', 'start'=> 7, 'end'=> 8, 'sprite'=> 14 ),
		'Google' => array( 'url'=> 'https://www.google.com/accounts/o8/id', 'start'=> 0, 'end'=> 0, 'sprite'=> 1 ),
		'LiveJournal' => array( 'url'=> 'http://USERNAME.livejournal.com', 'start'=> 7, 'end'=> 8, 'sprite'=> 2 ),
		'myOpenId' => array( 'url'=> 'http://USERNAME.myopenid.com/', 'start'=> 7, 'end'=> 8, 'sprite'=> 3 ),
		'Flickr' => array( 'url'=> 'http://flickr.com/USERNAME/', 'start'=> 18, 'end'=> 8, 'sprite'=> 4  ),
		'claimId' => array( 'url'=> 'http://claimid.com/USERNAME', 'start'=> 19, 'end'=> 8, 'sprite'=> 5  ),
		'Blogger' => array( 'url'=> 'http://USERNAME.blogspot.com', 'start'=> 7, 'end'=> 8, 'sprite'=> 6  ),
		'Wordpress' => array( 'url'=> 'http://USERNAME.wordpress.com', 'start'=> 7, 'end'=> 8, 'sprite'=> 7  ),
		'OpenID' => array( 'url'=> '', 'start'=> 0, 'end'=> 0, 'sprite'=> 8  ),
		'Yahoo' => array( 'url'=> 'http://www.yahoo.com', 'start'=> 0, 'end'=> 0, 'sprite'=> 9  ),
		'Technorati' => array( 'url'=> 'http://technorati.com/people/technorati/USERNAME/', 'start'=> 40, 'end'=> 8, 'sprite'=> 10 ),
		'Vidoop' => array( 'url'=> 'http://USERNAME.myvidoop.com/', 'start'=> 7, 'end'=> 8, 'sprite'=> 11 ),
		'Verisign' => array( 'url'=> 'http://USERNAME.pip.verisignlabs.com/', 'start'=> 7, 'end'=> 8, 'sprite'=> 12 ),
		'AOL' => array( 'url'=> 'http://openid.aol.com/USERNAME', 'start'=> 22, 'end'=> 8 ,'sprite'=> 13)
	);
		
	foreach ($OpenIDs as $openid=>$tp) {
			$data .= '<a href="javascript:void(0);" onclick="javascript:setToVar(\''.$tp['url'].'\',\''.$tp['start'].'\',\''.$tp['end'].'\');">
			';
			$data .= '<img src="'.$plugin_url.'/img/small/'.strtolower($openid).'.png" width="25" height="25" border="0" style="border:1px solid #cccccc; margin: 0 3 3 0;" alt="'.$openid.'" title="'.$openid.'"/>
			'; 
/*
			$data .= '<img src="'.$plugin_url.'/img/1x1.png" width="25" height="25" border="0" style="background-image: url('.$plugin_url.'/img/oi.png);background-repeat: no-repeat 25 25, background-position: -'. $tp['sprite']*25 .' 0;border:1px solid #cccccc;margin: 0 5 5 0;" alt="'.$openid.'" title="'.$openid.'"/>
			';
*/			
			$data .= '</a>
			';
	}
	$data .= '<br/> </div>
	';

	
echo $css;
echo <<<EOD
	<script type="text/javascript">
	function setToVar(url,start,length) {
		document.getElementById('openid_identifier').value = url;
		start = parseInt(start);
		length = start+parseInt(length);
		textbox = document.getElementById('openid_identifier');
		if (textbox.createTextRange) {
			var oRange = textbox.createTextRange();
		    oRange.moveStart("character", start);
		    oRange.moveEnd("character", length - textbox.value.length);
		    oRange.select();
	    } else if (textbox.setSelectionRange) {
	        textbox.setSelectionRange(start, length);
	    }
	    textbox.focus(); 
	}
	</script>
EOD;

	echo $data;
}

?>