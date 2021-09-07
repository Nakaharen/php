Se colocarmos uma string que não existe para ser removida do array, será
subtraída a posição 0.

Isso acontece porque no PHP existe uma propriedade nos tipos chamada Type juggling.

Quando o PHP encontra alguma incompatibilidade no tipo, ele tenta fazer um casting
automático. Por exemplo, no código, quando mandamos remover a string Naoexiste,
isso foi passado no método string $elemento e depois para o array_search().
Porém o array_search() retornará "false" quando o elemento não for encontrado.

A $posicao, portanto, armazenará um valor "false". Quando tentarmos dar unset no
array na posição "false", o PHP utilizará o juggling e converterá o "false" para
0. Então, não teremos um erro indicando que a posição "false" não é válida. Em
vez disso, o "false" será convertido para 0 e o PHP tentará executá-lo desse modo.

Por isso a primeira posição será removida. Da mesma forma que ele converte um
valor falso em 0, ele pode converter 0 para falso. Quando o array_search()
encontra o nome "Karen", ele retorna a posição 0. O if, por sua vez, entende que
se o valor for 0, ele será convertido para falso. Então, é executado o else em
vez do unset.