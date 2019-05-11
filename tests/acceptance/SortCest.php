<?php
use Step\Acceptance\MainSteps as First;

class SortCest
{

    /**
     * @param First $I
     * @throws Exception
     */
    public function SortId(First $I)
    {
        $I->SortIconOfId();
    }

    /**
     * @param First $I
     * @throws Exception
     */
    public function SortType(First $I)
    {
        $I->SortIconOfType();
    }

    /**
     * @param First $I
     * @throws Exception
     */
    public function SortTableId(First $I)
    {
        $I->SortIconOfTableId();
    }

    /**
     * @param First $I
     * @throws Exception
     */
    public function SortNumberofPerson(First $I)
    {
        $I->SortIconOfNumberofPerson();
    }

    /**
     * @param First $I
     * @throws Exception
     */
    public function SortDate(First $I)
    {
        $I->SortIconOfDate();
    }

    /**
     * @param First $I
     * @throws Exception
     */
    public function SortDes(First $I)
    {
        $I->SortIconOfDecription();
    }

    /**
     * @param First $I
     * @throws Exception
     */
    public function SortDuration(First $I)
    {
        $I->SortIconOfDuration();
    }

    /**
     * @param First $I
     * @throws Exception
     */
    public function SortStartTime(First $I)
    {
        $I->SortIconOfStartTime();
    }
}
