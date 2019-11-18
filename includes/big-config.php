<?php 
date_default_timezone_set('America/Los Angeles');

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'BIG Project';
        $logo = 'fa-home';
        $PageID = 'Client Form';
    break;

    case 'siteapp.php':
        $title = 'Research';
        $logo = 'fa-book';
        $PageID = 'Responsive Vs. Mobile';
    break;

    case 'galleries.php':
        $title = 'Research';
        $logo = 'fa-book';
        $PageID = 'Galleries';
    break;

    case 'flexbox.php':
        $title = 'Research';
        $logo = 'fa-book';
        $PageID = 'Flexbox';
    break;

    case 'shoppingcarts.php':
        $title = 'Research';
        $logo = 'fa-book';
        $PageID = 'Shopping Carts';
    break;

    case 'map.php':
        $title = 'Google';
        $logo = 'fa-google';
        $PageID = 'Google Map';
    break;

    case 'calendar.php':
        $title = 'Google';
        $logo = 'fa-google';
        $PageID = 'Google Calendar';
    break;

    case 'youtube.php':
        $title = 'Google';
        $logo = 'fa-google';
        $PageID = 'YouTube';
    break;

    case 'webcam.php':
        $title = 'WebCams';
        $logo = 'fa-play';
        $PageID = 'Webcam';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}
?>