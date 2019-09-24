<?php

/**
 * Mari kode!
 * 1. melacak pekerja yang saat ini bekerja.
 * 2. melacak pekerja gratis, yang telah dirilis.
 * 3. dapatkan pekerja.
 * 4. membebaskan seorang pekerja.
 */
class WorkerPool{
    private $occupWorker=[];
    private $freeWorker=[];
    private $names = [ 'John' , 'Erika' , 'Alex' , 'Marina' , 'Jessica'];

    public function getWorker(){
        
        if(count($this->freeWorker) == 0){

            $id = count($this->occupWorker) + count($this->freeWorker) + 1;
            $randomName = array_rand($this->names, 1);
            $worker = new WorkerEntity($id, $this->names[$randomName]);

        }else{
            $worker = array_pop($this->freeWorker);
        }
        
            $this->occupWorker[$worker->getId()] = $worker;
            return $worker;
            
        
    } 

    /**
     * Function pelepasan
     */
    public function release(WorkerEntity $worker){
        $id = $worker->getId();

        if(isset($this->occupWorker[$id])){

            unset($this->occupWorker[$id]);
            $this->freeWorker[$id] = $worker;

        }
    }
}

