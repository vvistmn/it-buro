<?php 

class ArrayWorker
{
    protected $array = [], $count;
    public function __construct($count){
        $this->count = $count;
        $this->fill();
        $this->reindex();
    }

    protected function fill(){
        for($i=0;$i<$this->count;$i++){
             $this->array[] = random_int(1,100);
        }
        var_dump($this->array);
    }
    
    protected function reindex(){
        $min = min($this->array);
        $max = max($this->array);
        $minIndex = array_search($min,$this->array);
        $maxIndex = array_search($max,$this->array);
        $this->array[$minIndex] = $max;
        $this->array[$maxIndex] = $min;
        var_dump($this->array);
    }
    
    public function dump(){
        $min = min($this->array);
        $max = max($this->array);
        $minIndex = array_search($min,$this->array);
        $maxIndex = array_search($max,$this->array);
        
        return $minIndex+$maxIndex;
    }

}

$worker = new ArrayWorker(4);
var_dump($worker->dump());