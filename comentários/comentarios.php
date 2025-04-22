<?php 
#Inputs:
#argv é utilizado para acessar os argumentos passados na linha de comando quando o script é executado.

#argc é usado para ver quantos argumentos foram passados no script ao executá-lo pelo terminal
#ele funciona como um argv que você passa os parâmetros direto pelo terminal, porém ele conta quantos argumentos foram passados.


#stdin é utilizado para ler dados enquanto o script está em execução, geralmente quando o usuário digita algo interativamente.
#Exemplo: $nome = fgets(STDIN);

#readline: Faz com que o usuário digite uma string no terminal
#Exemplo usando o redline: $string = readline("Digite uma frase ou palavra: ");

#----------------------
#Laços de repetição

#break: ele quebra o laço, ele para o laço na hora

#For: É composta por três partes: inicialização, condição e incremento
#inicialização: aonde ele deseja começar o for
#condição: a condição para rodar o looping, até aonde ele deseja ir
#incremento: para não cair em um looping infinito

#While: O while funciona da seguinte forma, ele executa enquanto a condição dentro dele não for verdadeira.



#---------------------- 
#Outros

#strlen: Ele conta o número de caracteres que contém em uma string

#array_sum(): É uma função que retorna a soam dos valores da variável inserida no parâmetro 
#Exemplo: $notas [6, 7.8, 5, 9];
#$soma_notas = array_sum($notas; 
#Ele irá retornar a soma dos valores dentro da variável $notas

#array_unique: É uma função que retorna o valor do array sem colocar os repetidos 

#array_push: É para adicionar elementos dentro de um array

#print_r: Serve para exibir um array ou objeto

#floatval: Você usa para forçar um número a ser float

#---------------
#Array: 
#Array é tudo entre conchete []. 
#Exemplo: $notasParaOFilme = [1, 2 , 6.7, 10];

#Tem como utilizar o array em parentêses também 

#Para acessar algum elemnto de um array
#Exemplo echo $notasParaOFilme [0];

#Array associativo:
# É quando defino nome as minhas informações dentro do meu array
#Exemplo: 
# $filme = [
#           "nome" => "Thor: Ragnarock",
#           "ano" => 2021,    
#           "nota" => 7.8,      
#           "genero" => "super-heroi",    
#];
#É a parte de definir o "nome", "ano", "nota" e "genero"
#Para acessar esse array associativo basta eu colocar echo $filme["genero"];
#Assim ele irá imprimir no terminal "super-heroi"
#-------------------

#foreach:
#O foreach basicamente você usa ele para percorrer um array e trazer algo deste array
#Exemplo fácil:
# Você tem uma caixa de brinquedos, dentro dessa caixa existem brinquedos e você quer pegar um de cada vez, ai entra o foreach 
#Exemplo no código:
# $brinquedos = ["Boneca", "Carrinho", "Bola"];
# foreach($brinquedos as $brinquedo){
#           echo "\n Eu peguei a(o) $brinquedo";
#}
#Aqui ele irá trazer um brinquedo de cada vez desta caixa de brinquedos