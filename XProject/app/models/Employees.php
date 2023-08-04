<?php
class Employees{
    private $employees_id;
    private $fullname;
    private $address;
    private $salary;

    /**
     * @param $employees_id
     * @param $fullname
     * @param $address
     * @param $salary
     */
    public function __construct($employees_id, $fullname, $address, $salary)
    {
        $this->employees_id = $employees_id;
        $this->fullname = $fullname;
        $this->address = $address;
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getEmployeesId()
    {
        return $this->employees_id;
    }

    /**
     * @param mixed $employees_id
     */
    public function setEmployeesId($employees_id): void
    {
        $this->employees_id = $employees_id;
    }

    /**
     * @return mixed
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     */
    public function setFullname($fullname): void
    {
        $this->fullname = $fullname;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
}