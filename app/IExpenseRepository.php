<?php

namespace App;

use App\Expense;



interface IExpenseRepository{
    public function save(Expense $expense);
    public function All();
    

}