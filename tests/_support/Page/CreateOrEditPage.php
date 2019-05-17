<?php
namespace Page;

class CreateOrEditPage
{
    // include url of next page
    public static $URL = '/reservationform.item.form';

    /**
     * @var string
     */
    public static $tableIDField = '//input[@id="tableID"]';
    /**
     * @var string
     */
    public static $numberOfPersonField = '//input[@id="numberofperson"]';
    /**
     * @var string
     */
    public static $dateField = '//input[@id="date"]';
    /**
     * @var string
     */
    public static $descriptionField = '//textarea[@id="description"]';
    /**
     * @var string
     */
    public static $startTimeField = '//input[@id="startTime"]';
    /**
     * @var string
     */
    public static $addOrEditButton = '//input[@class="t-beaneditor-submit"]';
    /**
     * @var string
     */
    public static $clearHyperlink = '//a[text()="clear"]';
    /**
     * @var string
     */
    public static $errorNotification = '(//div[@class="t-error"])//li';

    //More empty than 2 fields
    /**
     * @var string
     */
    public static $errorNotificatonForTableId = '(//div[@class="t-error"])//li[1]';
    /**
     * @var string
     */
    public static $errorNotificationForNumberOfPerson = '(//div[@class="t-error"])//li[]2';
    /**
     * @var string
     */
    public static $errorNotificationForStartTime = '(//div[@class="t-error"])//li[3]';
    /**
     * @var string
     */
    public static $notExist = '//h2';
    /**
     * @var string
     */
    public static $exceptionReport = '//h1[text()="An unexpected application exception has occurred."]';
    /**
     * @var string
     */
    public static $errorValue = '//div[@class="t-error"]';

}
