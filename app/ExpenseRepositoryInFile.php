<?php

namespace App;


class ExpenseRepositoryInFile implements IExpenseRepository{

    private $path=__DIR__."./../data/expense.dat";
    


    public function __construct()
    {
      if(!file_exists($this->path)){
        fopen($this->path,"a+");
      }
    }


    private function persist($json){
        $context = fopen($this->path,"a+");
        fwrite($context,$json);
        fwrite($context,"\n");
        fclose($context);
        return true;
    }

    private function readingAll(){
        $result = explode("\n",file_get_contents($this->path));
        $expenses=[];
        foreach($result  as $key => $expense){
            $expenses[] = json_decode($expense,true);
        }


        return  $expenses;
    }



    public function save(Expense $expense){
        $parserExpenseInJson = json_encode($expense);
        $this->persist($parserExpenseInJson);
        return $expense;
    }

    public function All(){
        print_r($this->readingAll());
    }
}