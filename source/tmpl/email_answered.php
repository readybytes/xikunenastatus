<?php
/**
 *
 * Author : Team Joomlaxi
 * Email  : shyam@joomlaxi.com
 * (C) www.joomlaxi.com
 *
 */
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<p>Dear Customer,<br></p>
<p><b>Topic : </b><a href="<?php echo $forumlink; ?>"><?php echo $ktopic->subject;?></a></p>
<p><b>Modified By : </b> <?php echo $doerName?></p>
<p><b>Status : <?php echo $this->status[$current_status]; ?></b> (i.e the problem have almost been resolved.)</p>
<p><b>Next Action : </b>If problem is still not solved, then you can login to support-forum and reply to this topic.</p> 
<p><b> If you do not respond : </b> This topic will be marked closed within <?php echo $this->params->get('closingTime');?> days.</p>
<br>
<p style="font-size:11px;">
---------------------------------------------------------------------------------------------------------------
<br>This is an automated notification from <a href="mailto:team@readybytes.in">support team JoomlaXi</a>
<br>Please DO NOT REPLY, instead login and update the <a href="<?php echo " ".$forumUrl; ?>">support ticket</a>
<br>----------------------------------------------------------------------------------------------------------------<br></p>
<p>Thanks</p>
<p><b>Support Team</b></p>
<p>http://www.joomlaxi.com
<br>http://www.twitter.com/joomlaxi
<br>http://www.facebook.com/joomlaxi
<?php 
