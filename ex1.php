<?php
    //iniciar variaveis
    $numero1 = 8;
    $numero2 = 20;
    //soma dos numeros
    $soma = $numero1 + $numero2;
    //exibir resultado
    echo "Soma de $numero1 e $numero2 igual a $soma"

?>
<?php
    //criando arranjo
    $produtos = [
        'maça' => 1.99,
        'laranja' => 2.0,
        'limão' => 2.0,
        'tomate' => 1.99, 
    ];
    //exibir produtos
    echo "lista de produtos:";
    foreach ($produtos as $produto) 
        echo "$produto. 'custa $' .$preco."
    
    
?>
