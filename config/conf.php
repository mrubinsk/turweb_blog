<?php
/**
 * Site-wide configuration stuff
 *
 * $Id: conf.php.dist,v 1.1.1.1 2008/05/28 20:30:38 mrubinsk Exp $
 */

/* Define our HORDE_BASE */
define('HORDE_BASE', '/private/var/www/html/horde');

/* File system base of the website root */
$fs_base = '/var/www/html/turweb_new';

/* URL base of the site root. */
$host_base = 'coffee.theupstairsroom.com/turweb_new';

/* This site's name (Used as the banner text) */
$site_name = 'theUpstairsRoom';

$news_feed = 1;
$max_stories = 4;

$news_share_url = 'http://h4.theupstairsroom.com/horde/jonah/stories/share.php';
$feed_base = 'http://theupstairsroom.com/rss.php';
