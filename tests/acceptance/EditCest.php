<?php
use Step\Acceptance\MainSteps as First;
use Step\Acceptance\NewReservationSteps as Second;

class EditCest
{
    protected $tableID;
    protected $numberOfPerson;
    protected $date;
    protected $description;
    protected $startTime;

    public function __construct()
    {
        $this->tableID='1';
        $this->empty='';
        $this->numberOfPerson='4';
        $this->date='05/12/2019';
        $this->description='';
        $this->startTime='17';
    }

    /**
     * @param First $I
     * @param $scenario
     * @throws Exception
     */
    public function Reload(First $I, $scenario)
    {
        $I->ReloadData();
    }

    /**
     * @param Second $I
     * @param $scenario
     * @throws Exception
     */
    public function Edit(First $I, $scenario)
    {
        $I->EditReservation();
        $I = new Second($scenario);
        $I->Edit($this->tableID, $this->numberOfPerson,$this->date, $this->startTime);
        $I->comment("Edit successfully");
    }

    /**
     * @param Second $I
     * @param $scenario
     * @throws Exception
     */
    public function Delete(First $I, $scenario)
    {
        $I->DeleteReservation();
        $I->comment("Delete successfully");
    }
}
