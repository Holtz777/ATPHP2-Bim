<?php
$pessoa = [
    'nome' => 'João',
    'notas' => [
        'matematica' => 5,
        'portugues' => 6,
        'historia' => 7,
        'filosofia' => 10,
        'sociologia' => 9,
        'fisica' => 5,
        'quimica' => 1
    ]
];

function passouOuN ($pessoa){   
    $i = 0;

    foreach ($pessoa['notas'] as $verificador) {
        
        if($verificador < 6){
            $i++;
        }

    
}
if($i >= 3){
        echo "não passou";
    }
    else{
        echo "passou";
    }

}
passouOuN ($pessoa);

////////////////////////////////////

$pessoas = [
    ['nome' => 'João', 'idade' => 20],
    ['nome' => 'Maria', 'idade' => 30],
    ['nome' => 'José', 'idade' => 40],
    ['nome' => 'Ana', 'idade' => 50],
];

function calcularMediaIdade($pessoas) {
    $todasAsIdades = 0;
    $quantPessoas = count($pessoas);
    
    foreach ($pessoas as $pessoa) {
        $todasAsIdades += $pessoa['idade'];
    }
    
    return $todasAsIdades / $quantPessoas;
}


echo "A média das idades é: " . $calcularMediaIdade() . "anos";

///////////////////////////////////////


$pessoas = [
    ['nome' => 'João', 'idade' => 20],
    ['nome' => 'Maria', 'idade' => 30],
    ['nome' => 'José', 'idade' => 40],
    ['nome' => 'Ana', 'idade' => 50],
];


function pessoaMaisVelha($pessoas){

    $maiorIdade = $pessoas[0];
    $todasAsIdades = 0;

    foreach ($pessoas as $pessoa) {
        if($pessoa['idade'] > $maiorIdade['idade']){
            $maiorIdade = $pessoa;
        }
    }

    return $maiorIdade;

}

echo "a pessoa masi velha é: " . $pessoaMaisVelha();

/////////////////////////////


function verificarSenhaForte($senha) {
   
    $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';
    
    return preg_match($regex, $senha) === 1;
}
//tive que pesquisar no google esse regex jorge, não fazia ideia do que por :/
$senha = 'SenhaForte123';

if (verificarSenhaForte($senha)) {
    echo "A senha é forte.";
} else {
    echo "A senha é fraca.";
}


/////////////////////////////////
$posts = [
    ['post' => 'Estou aprendendo PHP', 'autor' => 'João'],
    ['post' => 'Aprendi HTML, CSS e JavaScript', 'autor' => 'João'],
    ['post' => 'Estou trabalhando em um projeto', 'autor' => 'Maria'],
    ['post' => 'Estou estudando para o ENEM', 'autor' => 'José'],
    ['post' => 'Fiz um curso de PHP', 'autor' => 'Maria'],
    ['post' => 'Aprendi PHP', 'autor' => 'João'],
    ['post' => 'Estou trabalhando em um site', 'autor' => 'João'],
    ['post' => 'Terminei o curso de PHP', 'autor' => 'Maria']
];

$contagem = array();

foreach ($posts as $post) {
    $autor = $post['autor'];
    if (isset($contagem[$autor])) {
        $contagem[$autor]++;
    } else {
        $contagem[$autor] = 1;
    }
}

var_dump($contagem);



?>
