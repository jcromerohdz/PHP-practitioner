<?php 


// Todo Application
require 'functions.php';



class Task {

  public $description;

  public $completed = false;

  public function __construct($description) {
    $this->description = $description;
  }

  public function complete() {
    $this->completed = true; 
  }

  public function isComplete() {
    return $this->completed;

  }

  public function description() {
    return $this->description;
  }
}


//$task = new Task('Go to the movies');
//$task->complete();
//var_dump($task->isComplete());

$tasks = [
  new Task('Go to the store'),
  new Task('Finish my course'),
  new Task('Clean my room'),
];

$tasks[0]->complete();

require 'index.view.php'

?>