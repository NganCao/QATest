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
    protected $reservation;

    public function __construct()
    {
        $this->tableID='3';
        $this->empty='';
        $this->invalidTableId='8';
        $this->numberOfPerson='4';
        $this->date='05/17/2019';
        $this->description='';
        $this->startTime='18';
        $this->invalidTime='15';

        $this->reservation =
            [
                'id' => "3",
                'number' => "4",
                'date' => "05/17/2019",
                'des' => "",
                'time' => "17"
            ];
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
        $I->Create($this->reservation);
        $I->comment("Create Reservation Successfully");
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateWithoutTableId(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new reservation without TableId");
        $I->CreateReservation();
        $I = new Second($scenario);
        $this->reservation['id'] = "";
        $I->Create($this->reservation);
        $I->ErrorNotification();
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateInvalidTableId(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new reservation invalid TableId");
        $I->CreateReservation();
        $I = new Second($scenario);
        $this->reservation['id'] = "8";
        $I->Create($this->reservation);
        $I->Notification();
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateWithoutNumOfPerson(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new reservation without NumberOfPerson");
        $I->CreateReservation();
        $I = new Second($scenario);
        $this->reservation['id'] = "1";
        $this->reservation['number'] = "";
        $I->Create($this->reservation);
        $I->ErrorNotification();
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateWithoutDate(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new reservation without NumberOfPerson");
        $I->CreateReservation();
        $I = new Second($scenario);
        $this->reservation['number'] = "4";
        $this->reservation['date'] = "";
        $I->Create($this->reservation);
        $I->DateEmpty();
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateWithoutStartTime(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new reservation without StartTime");
        $I->CreateReservation();
        $I = new Second($scenario);
        $this->reservation['date'] = "05/13/2019";
        $this->reservation['time'] = "";
        $I->Create($this->reservation);
        $I->ErrorNotification();
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateSameIdAndStartTime(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new reservation same TableId and StartTime");
        $I->CreateReservation();
        $I = new Second($scenario);
        $this->reservation['time'] = "17";
        $I->Create($this->reservation);
        $I = new First($scenario);
        $I->Home();
        $I->CreateReservation();
        $I = new Second($scenario);
        $I->Create($this->reservation);
        $I->Notification();
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateWithDateincorrect(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new reservation with Date which is incorrect");
        $I->CreateReservation();
        $I = new Second($scenario);
        $this->reservation['date'] = "2019/02/17";
        $I->Create($this->reservation);
        $I->comment("Random date");
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateWithoutAll(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new reservation without all data");
        $I->CreateReservation();
        $I = new Second($scenario);
        $this->reservation['date'] = "";
        $this->reservation['id'] = "";
        $this->reservation['number'] = "";
        $this->reservation['des'] = "";
        $this->reservation['time'] = "";
        $I->Create($this->reservation);
        $I->ErrorNotification();
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function CreateWithText(First $I, $scenario)
    {
        $I->wantToTest("I want to create a new reservation with all data which is text");
        $I->CreateReservation();
        $I = new Second($scenario);
        $this->reservation['date'] = "5/17/2019";
        $this->reservation['id'] = "a";
        $this->reservation['number'] = "a";
        $this->reservation['des'] = "";
        $this->reservation['time'] = "a";
        $I->Create($this->reservation);
        $I->AllDataWithText();
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function ClearData(First $I, $scenario)
    {
        $I->wantToTest("I want to test clear hyperlink");
        $I->CreateReservation();
        $I = new Second($scenario);
        $this->reservation['date'] = "5/17/2019";
        $this->reservation['id'] = "1";
        $this->reservation['number'] = "2";
        $this->reservation['des'] = "Prepare me a bunch of roses";
        $this->reservation['time'] = "20";
        $I->Clear($this->reservation);
        $I->comment("clear all success");
    }
}
