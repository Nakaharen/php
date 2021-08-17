<?php

require 'funcoes-sc.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Karen',
        'saldo' => 100
    ],
    '123.456.789-11' => [
        'titular' => 'Guilherme',
        'saldo' => 1000
    ],
    '123.456.789-12' => [
        'titular' => 'Sophie',
        'saldo' => 10000
    ]
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 50);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 300);
$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], 900);


titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo']; ?>
            </dd>
        <?php } ?>
    </dl>

</body>
</html>
