<?php
if($_SERVER['HTTP_HOST'] == 'redeem.bittip.co')
	header("Location: http://www.bittip.co/redeem.htm",TRUE,301);
if($_SERVER['REQUEST_URI'] == '/')
	header("Location: http://www.bittip.co/index.htm",TRUE,301);