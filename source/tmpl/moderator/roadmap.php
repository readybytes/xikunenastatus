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
<p>Dear Moderator,<br></p>
<p><b>Topic : </b><a href="<?php echo $forumUrl; ?>"><?php echo $subject;?></a></p>
<p><b>Modified By : </b> <?php echo $doerName?></p>
<p><b>Status : <?php echo $status?></b> (i.e Task should be scheduled)</p>
<p><b>Next Action : </b>Decide whether to schedule this task for our future develpoment or not. If not then mark it close/discuss.</p> 
<p><b>If you do not respond : </b> If you do not mark it (Close / Discuss) then alert mails for this topic, will be sent to you.</p>
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
</p>
<?php 
