<?php
    class Stack{
        protected $stack;
        protected $limit;
        
        public function __construct($limit = 10) {
            // initialize the stack
            $this->stack = array();
            // This stack can only contain 10 items
            $this->limit = $limit;
        }
    
        public function push($item) {
            if (count($this->stack) < $this->limit) {
                // adding item to the start of the array
                array_unshift($this->stack, $item);
            } 
            else {
                echo "Stack is full"; 
            }
        }
        public function pop() {
            if ($this->isEmpty()) {
                echo "Stack is empty!";
            } 
            else {
                // pop item from the start of the array
                return array_shift($this->stack);
            }
        }
    
        public function top() {
            return current($this->stack);
        }
    
        public function isEmpty() {
            return empty($this->stack);
        }

        public function display(){
            if($this->limit >= 0){
            for($i = 0; $i < $this->limit; $i++){
                echo "<br>";
                echo $this->stack[$i];
            
            }}            
            else
            echo "The stack is empty";
        }
    }

    $flower = new Stack();

    $flower->push("Jasmine");
    $flower->push("Marigold");
    $flower->push("Sunflower");
    $flower->push("Rose");
    $flower->push("Lily"); 
    $flower->push("Tulip");
    $flower->push("Lotus");
    $flower->push("Orchid");
    $flower->push("Jinia");
    $flower->push("Daffodil");
    $flower->display();  
    echo "<br><br>";
    echo "After poping the element is : <br>";  
    echo $flower->pop()." ";
    echo $flower->pop()." ";
    echo $flower->pop()." ";

    //echo $flower->top();
?>