<?php
namespace Page;

class MainPage
{
    // include url of current page
    public static $URL = '';

    // include url of next page
    public static $URLNew = '/reservationform';

    /**
     * @var string
     */
    public static $newReservation = '//a[text()="New Reservation"]';
    /**
     * If you're on the second page, this value will exist
     * @var string
     */
    public static $current = '//a[text()="1"]';
    /**
     * @var string
     */
    public static $current2 = '//a[text()="2"]';
    /**
     * @var string
     */
    public static $reloadData = '//a[text()="Reload Data"]';
    /**
     * @var string
     */
    public static $deleteReservation = '(//td[@class="delete"])[3]/a';
    /**
     * @var string
     */
    public static $editReservation = '(//td[@class="edit"])[3]/a';
    /**
     * @var string
     */
    public static $addButton = '//input[@class="t-beaneditor-submit"]';

}
