<?php
use Step\Acceptance\MainSteps as First;
use Step\Acceptance\NewReservationSteps as Second;

class QATestCest
{
    protected $tableID;
    protected $empty;
    protected $invalidTableId;
    protected $numberOfPerson;
    protected $date;
    protected $description;
    protected $startTime;
    protected $invalidTime;
    public function __construct()
    {
        $this->tableID='3';
        $this->empty='';
        $this->invalidTableId='8';
        $this->numberOfPerson='4';
        $this->date='05/12/2019';
        $this->description='';
        $this->startTime='18';
        $this->invalidTime='15';
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateSuccess(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new reservation successfully");
        $I->CreateReservation();
        $I = new Second($scenario);
        $I->Create($this->tableID, $this->numberOfPerson, $this->date, $this->description, $this->startTime);
        $I->comment("Create Reservation Successfully");
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateSucessWithoutTableId(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new reservation without TableId");
        $I->CreateReservation();
        $I = new Second($scenario);
        $I->Create($this->empty, $this->numberOfPerson, $this->date, $this->description, $this->startTime);
        $I->ErrorNotification();
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateSucessInvalidTableId(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new reservation invalid TableId");
        $I->CreateReservation();
        $I = new Second($scenario);
        $I->Create($this->invalidTableId, $this->numberOfPerson, $this->date, $this->description, $this->startTime);
        $I->Notification();
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateSucessWithoutNumOfPerson(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new reservation without NumberOfPerson");
        $I->CreateReservation();
        $I = new Second($scenario);
        $I->Create($this->tableID, $this->empty, $this->date, $this->description, $this->startTime);
        $I->ErrorNotification();
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateSucessWithoutDate(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new reservation without NumberOfPerson");
        $I->CreateReservation();
        $I = new Second($scenario);
        $I->Create($this->tableID, $this->numberOfPerson, $this->empty, $this->description, $this->startTime);
        $I->DateEmpty();
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateSucessWithoutStartTime(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new reservation without StartTime");
        $I->CreateReservation();
        $I = new Second($scenario);
        $I->Create($this->tableID, $this->numberOfPerson, $this->date, $this->description, $this->empty);
        $I->ErrorNotification();
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
//    public function CreateSucessInvalidStartTime(First $I, $scenario)
//    {
//        $I->wantToTest("I want to create a new reservation without InvalidStartTime");
//        $I->CreateReservation();
//        $I = new Second($scenario);
//        $I->Create($this->tableID, $this->empty, $this->date, $this->description, $this->invalidTime);
//        $I->ErrorNotification();
//        $I->comment("Not yet caught error");
//    }


}
