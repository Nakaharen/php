Os métodos que devolvem o valor de um atributo da classe são chamados de getters,
e é muito comum que sejam escritos na forma getSaldo(), ou seja, get mais o nome
do atributo da classe. Alguns programadores preferem nomear os métodos e atributos
de maneira mais homogênea - se estão programando em português, evitam usar termos
em inglês. Nesse caso, se tivéssemos uma propriedade $name, poderíamos ter também
um método getName().

Já os métodos setters definem os valores de atributos privados. Porém, que
diferença faz mantermos os atributos privados e criarmos setters para eles?
A resposta é que os métodos setters podem ter algum tipo de validação, por
exemplo definindo que o $nomeTitular tenha pelo menos 5 caracteres e um espaço
(para recebermos nome e sobrenome), ou validar um CPF de modo a garantir que
ele seja adequado.

Portanto, os setters são interessantes para termos certeza de que os valores
passados às nossas instâncias façam sentido, impedindo, por exemplo, que seja
passado um número de telefone no $cpfTitular.

