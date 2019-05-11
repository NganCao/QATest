<?php
namespace Step\Acceptance;
use Page\MainPage as First;
use Page\SortIconPage as Sort;

class MainSteps extends \AcceptanceTester
{
    /**
     * @throws \Exception
     */
    public function SortIconOfId()
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(Sort::$sortIconOfId,2);
        $I->click(Sort::$sortIconOfId);
        $I->pauseExecution();
    }

    /**
     * @throws \Exception
     */
        public function SortIconOfType()
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(Sort::$sortIconOfType,2);
        $I->click(Sort::$sortIconOfType);
        $I->pauseExecution();
    }

    /**
     * @throws \Exception
     */
    public function SortIconOfTableId()
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(Sort::$sortIconOfTableId,2);
        $I->click(Sort::$sortIconOfTableId);
        $I->pauseExecution();
    }

    /**
     * @throws \Exception
     */
    public function SortIconOfNumberofPerson()
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(Sort::$sortIconOfNumberofPerson,2);
        $I->click(Sort::$sortIconOfNumberofPerson);
        $I->pauseExecution();
    }

    /**
     * @throws \Exception
     */
    public function SortIconOfDate()
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(Sort::$sortIconOfDate,2);
        $I->click(Sort::$sortIconOfDate);
        $I->pauseExecution();
    }

    /**
     * @throws \Exception
     */
    public function SortIconOfDecription()
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(Sort::$sortIconOfDecription,2);
        $I->click(Sort::$sortIconOfDecription);
        $I->pauseExecution();
    }

    /**
     * @throws \Exception
     */
    public function SortIconOfDuration()
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(Sort::$sortIconOfDuration,2);
        $I->click(Sort::$sortIconOfDuration);
        $I->pauseExecution();
    }

    /**
     * @throws \Exception
     */
    public function SortIconOfStartTime()
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(Sort::$sortIconOfStartTime,2);
        $I->click(Sort::$sortIconOfStartTime);
        $I->pauseExecution();
    }

    /**
     * @throws \Exception
     */
    public function CreateReservation()
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(First::$newReservation,2);
        $I->click(First::$newReservation);
    }

    /**
     * @throws \Exception
     */
    public function ReloadData()
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(First::$reloadData,2);
        $I->click(First::$reloadData);
    }

    /**
     * @throws \Exception
     */
    public function EditReservation()
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(First::$editReservation,2);
        $I->click(First::$editReservation);
    }

    /**
     * @throws \Exception
     */
    public function DeleteReservation()
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(First::$deleteReservation,2);
        $I->click(First::$deleteReservation);
    }

    /**
     * @throws \Exception
     */
    public function Current1()
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(First::$current,2);
        $I->click(First::$current);
    }

    /**
     * @throws \Exception
     */
    public function Current2()
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->waitForElementVisible(First::$current2,2);
        $I->click(First::$current2);
    }

    /**
     * @throws \Exception
     */
    public function Home()
    {
        $I = $this;
        $I->waitForElementVisible(First::$newReservation,2);
    }

}