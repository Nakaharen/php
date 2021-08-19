A ideia de não termos mais acesso direto à propriedade $saldo, fazendo com que
só seja possível sacar, depositar ou transferir para modificá-la, é um dos
pilares da orientação a objetos, e se chama encapsulamento.

O encapsulamento consiste na necessidade de proteger as instâncias da nossa
classe do mundo externo e do próprio usuário, garantindo que ele não viole as
nossas regras de negócio. Além disso, também devemos facilitar a utilização da
classe por meio dos seus métodos.

Por exemplo, se um dia implementarmos uma taxa de saque, o usuário ou mesmo o
desenvolvedor que estiver usando o método saca() não precisa escrevê-la
manualmente, já que ela pode ser aplicada diretamente na definição do método.

Assim, conhecemos até o momento dois pilares fundamentais da orientação a objetos:

### abstração: trazemos o que é necessário do "mundo real" ao nosso sistema
### encapsulamento: só devemos expôr o que for necessário da nossa aplicação