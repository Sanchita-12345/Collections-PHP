<?php
class Queue {
    public $queue = array();

    // Get the length of the queue
    public function getLength() {
        return count($this->queue);
    }
    // Check whether the queue is empty
    public function isEmpty() {
        return $this->getLength() == 0;
    }
    // Add data at the end of the team.
    public function enqueue($element) {
        $this->queue[] = $element;
    }
    //Remove the data
    public function dequeue() {
        if (!$this->isEmpty()) {
            return array_shift($this->queue);
        }
        return false;
    }
    // Traverse the queue and dissplay the output
    public function display() {
        if (!$this->isEmpty()) {
            for ($i = 0; $i < $this->getLength(); $i++) {
                echo $this->queue[$i];
                echo "<br>";
            }
        } 
        else {
            return "The Queue is empty";
        }
    }
}

$fruit = new Queue();
$fruit->enqueue("Mango");
$fruit->enqueue("Banana");
$fruit->enqueue("Lichi");
$fruit->enqueue("Pineapple");
$fruit->enqueue("Orange");
$fruit->enqueue("Appple");
$fruit->enqueue("Strawberry");
$fruit->enqueue("Blueberry");

echo "The length of the queue is : " . $fruit->getLength();
echo "<br>";
echo "The queue is : <br>";
$fruit->display();
echo "<br>";
echo "After deleting the first element from queue the new queue is : ";
$fruit->dequeue();
echo "<br>";
$fruit->display();
?>