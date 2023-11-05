<?php declare(strict_types=1);
use App\Expense;
use App\ExpenseRepositoryInFile;
use App\ExpenseUserCase;
use PHPUnit\Framework\TestCase;


/*
2.2.12 Despesas de casal 1 - 

[] - Um casal divide as despesas domésticas mensalmente. Durante o mês
     cada um anota seus gastos e as contas que paga;

     [] - Criar nova despesa identificando o Mês e quem está Pagando
     [] - Dar o total de Gastos do Mês
     [] - Realizar a Divisão entre o casal
     [] - Trazer a Participação de cada  um na Despesa Geral do Mês
     [] - Retornar o saldo do Casal separadamente
     [] - Verificar se a pessoa atual esta devendo



[] - Implementar Interface 
[] - Gerar um Relarorio dos Gasto


////////////////////////////////////////////////////////////////////////////////////////////////////////
O casal deseja
um programa que facilite o acerto: eles digitariam os gastos de cada um, e o programa mostraria
quem deve a quem. Atualmente eles fazem o acerto manualmente, na forma da seguinte tabela:
ITEM MARIDO ESPOSA TOTAL
DESPESAS PAGAS 1278,60 875,30 2.153,90
% PAGO 59,36 40,64 100
VALOR DEVIDO 1.076,95 1.076,95 2.153,90
SALDO 201,65 -201,65
Portanto, os saldos devem ser iguais, e quem tiver o saldo negativo deve pagar o valor para o
outro. Faça um programa que leia os valores adequados e efetue os cálculos. O total é a soma das
despesas individuais; um percentual é o gasto individual dividido pelo total, multiplicado por 100;
o valor devido por cada um é o mesmo e igual à metade do total; finalmente, cada saldo
corresponde à metade da diferença entre o valor pago pela pessoa e o valor total.
Uma tela para o programa pode ser, com os mesmos dados da tabela acima




*/


define("MARIDO","M");
define("ESPOSA","E");





class DespesasCasaisTest   extends TestCase{

    function testCriarNovaDespesaIdentificandoOMêsEEuemEstaPagandoMarido(){
        
        $mes=10;
        $ano=2023;
        $descricao="conta de Luz";
        $valor=315.45;
        $dataCompletaDeReferencia="25/10/2023 14:52:12";
        $despesa =  new Expense(MARIDO,$mes,$ano,$descricao,$valor,$dataCompletaDeReferencia);
        $DespesaUserCase =  new ExpenseUserCase($despesa,new ExpenseRepositoryInFile());
        $resultData=$DespesaUserCase->execute();
        $this->assertNotEmpty($resultData->getUuid());
    }


    function testCriarNovaDespesaIdentificandoOMêsEEuemEstaPagandoEsposa(){
        
        $mes=10;
        $ano=2023;
        $descricao="Compra do Mercado";
        $valor=605.45;
        $dataCompletaDeReferencia="01/10/2023 14:52:12";
        $despesa =  new Expense(ESPOSA,$mes,$ano,$descricao,$valor,$dataCompletaDeReferencia);
        $DespesaUserCase =  new ExpenseUserCase($despesa,new ExpenseRepositoryInFile());
        $resultData=$DespesaUserCase->execute();
        $this->assertNotEmpty($resultData->getUuid());
    }


}