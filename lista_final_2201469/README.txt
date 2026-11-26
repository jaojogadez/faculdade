LISTA FINAL - PROGRAMAÇÃO ORIENTADA A OBJETOS
2º BCC 2026 | PHP 8.4

Aluno(a):
RA:
Turma:

1. COMO COMEÇAR

Baixe o arquivo lista_final.zip fornecido pelo professor e extraia seu conteúdo.
Abra a pasta lista_final no editor de código. Antes de começar a programar,
entre em CADA pasta de exercício pelo terminal e execute composer install.
Cada exercício é um projeto independente e possui sua própria instalação.

É necessário ter PHP 8.4 e Composer instalados. Confira no terminal:

    php --version
    composer --version

2. PREPARAR E EXECUTAR CADA EXERCÍCIO

Partindo da pasta lista_final, execute os comandos abaixo, um por vez.

Exercício 1 - O acervo do clube de cultura pop

    cd ex1
    composer install
    php index.php
    cd ..

Exercício 2 - A maratona de filmes e séries

    cd ex2
    composer install
    php index.php
    cd ..

Exercício 3 - A mochila antes da batalha final

    cd ex3
    composer install
    php index.php
    cd ..

Exercício 4 - A auditoria do escritório

    cd ex4
    composer install
    php index.php
    cd ..

O comando composer install prepara o autoload em vendor/autoload.php.
Os exercícios utilizam os recursos nativos de PHP, por isso não há pacotes
externos obrigatórios. O requisito de PHP já está definido em cada composer.json.
Não é necessário executar composer init nem criar outro composer.json.

Ao executar o index.php inicial, você verá uma mensagem confirmando que o
autoload foi carregado. Depois, substitua essa mensagem por sua demonstração.

3. ONDE ESCREVER O CÓDIGO

Cada exercício já contém:

    composer.json - configuração do projeto e do autoload
    index.php     - ponto de entrada e demonstração da solução
    src/          - local para as classes, interfaces e classes abstratas

O mapeamento PSR-4 em TODOS os projetos é:

    "App\\": "src/"

No JSON, as duas barras representam uma única barra do namespace PHP.
Arquivos diretamente em src/ devem declarar namespace App;.
Se você criar subpastas, o namespace deve acompanhar o caminho delas.
Os nomes dos arquivos devem corresponder aos nomes das classes ou interfaces,
respeitando letras maiúsculas e minúsculas.

Cada index.php já carrega seu próprio vendor/autoload.php. Importe os tipos
necessários com use e escreva nele a demonstração solicitada pelo enunciado.
O autoload deve ser carregado no ponto de entrada; os arquivos de src/ usam
namespace e, quando necessário, use para referenciar outros tipos.

As pastas src/ estão vazias de propósito: a modelagem e a implementação
fazem parte da atividade. Os quatro projetos usam App, mas são executados
separadamente, cada um com seu próprio autoload.

Depois de criar ou editar o código, execute php index.php dentro do exercício.
Se alterar a configuração de autoload do composer.json, execute:

    composer dump-autoload

4. ERROS COMUNS

Se vendor/autoload.php não for encontrado, execute composer install dentro
da pasta do exercício correspondente.

Se uma classe não for encontrada, confira namespace, use, caminho e nome
do arquivo. O nome do tipo e o nome do arquivo devem coincidir.

Se o Composer informar versão de PHP incompatível, confira php --version
no mesmo terminal e selecione PHP 8.4 no ambiente utilizado.

5. REGISTRO DA ATIVIDADE

Para cada exercício, preencha abaixo os requisitos identificados, uma breve
justificativa da modelagem, as suposições adotadas e onde foram aplicados os
conceitos de POO exigidos na lista. Registre também os casos demonstrados.

EXERCÍCIO 1
Requisitos:
- Cadastrar livros, jogos e pessoas.
- Controlar a disponibilidade dos materiais.
- Limitar a dois empréstimos por pessoa.
- Calcular prazos e multas conforme o material.
- Realizar empréstimos e devoluções.

Modelagem e conceitos utilizados:
A classe abstrata Material reunirá os atributos comuns
de livros e jogos. As classes Livro e Jogo utilizarão
herança e polimorfismo para definir seus próprios
prazos e valores de multa.

Suposições:
Casos demonstrados:

EXERCÍCIO 2
Requisitos:
Modelagem e conceitos utilizados:
Suposições:
Casos demonstrados:

EXERCÍCIO 3
Requisitos:
Modelagem e conceitos utilizados:
Suposições:
Casos demonstrados:

EXERCÍCIO 4
Requisitos:
Modelagem e conceitos utilizados:
Suposições:
Casos demonstrados:

6. ENTREGA

Mantenha os quatro exercícios em suas respectivas pastas e preencha seus
dados neste README.txt. Confira a execução de cada index.php.
Compacte a pasta lista_final em ZIP conforme as orientações da atividade.
Inclua os arquivos composer.json, os composer.lock gerados, os index.php,
o código de src/ e este README.txt preenchido.
As pastas vendor/ são recriadas com composer install e podem ser excluídas
da cópia destinada ao ZIP de entrega.
