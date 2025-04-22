<?php 
$nome_titular = ("Mateus Afonso");
$Saldo_atual = 1000;

$digitar = 0;


while ($digitar != 4 ){
    echo "\n *******************";
    echo "\n Titular: $nome_titular ";
    echo "\n Saldo atual: $Saldo_atual";
    echo "\n *******************";
    echo "\n 1. Consultar Saldo atual";
    echo "\n 2. Sacar valor";
    echo "\n 3. Depositar valor";
    echo "\n 4. Sair";
    
    echo "\n Qual função deseja executar: ";
    $digitar =  fgets(STDIN);

if ($digitar == 1) {
  echo "\n Seu saldo atual é de $Saldo_atual \n";
}
  

if ($digitar == 2) {
   echo "Quanto deseja sacar: ";
   $sacar = fgets(STDIN); 
   $sacar = floatval($sacar);
   if ($sacar > $Saldo_atual) {
    echo "Saldo insuficiente \n";
   }else {
   $Saldo_atual -= $sacar;
   echo "Você sacou $sacar \n";
   }
}

if ($digitar == 3) {
  echo " Quanto deseja depositar:";
  $depositar = fgets(STDIN);
  $depositar = floatval($depositar);
  if ($depositar <= 0) {
    echo "\n Impossível depositar este valor. \n";
  }else {
    $Saldo_atual += $depositar;
    echo "Você depositou $depositar";
  }
}
if ($digitar == 4) {
  echo "Saindo...";
}
}
?>