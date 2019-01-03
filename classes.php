<?php


class Task {

    protected $description;

    protected $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
       $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }

}


$tasks = [
    new Task('Enable expedited shipping.'),
    new Task('Send email'),
    new Task('clean database')
];



