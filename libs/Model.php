<?php


class Model
{
    /**
     * @var Database
     */
    protected $db;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }

}