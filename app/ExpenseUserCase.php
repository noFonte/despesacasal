<?php

namespace App;

use App\Expense;

class ExpenseUserCase implements UserCase{

    private Expense $expense;
    private IExpenseRepository $expenseRepository;
  
    public function __construct(Expense $expense,IExpenseRepository $expenseRepository)
    {
        $this->expense = $expense;
        $this->expenseRepository = $expenseRepository;

    }
    public  function execute(){
        $resulData = $this->expenseRepository->save($this->expense);

        $this->expenseRepository->All();

        
        return $resulData ;
    }


    
}