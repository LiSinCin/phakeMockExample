<?php

class Item {

    /**
     * @throws \Exception
     *
     * @return true
     */
    public function methodToMock()
    {
        throw new \Exception('Die MF! Die!');
        return true;
    }

    /**
     * @return true
     * @throws \Exception
     */
    public function methodToExecute()
    {
        return $this->methodToMock();
    }
};