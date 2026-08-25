# Ativiade Diagnóstica - Desafio
titulo = "DESAFIO DE PROGRAMAÇÃO - TECH FOOD"
print(f'{"="*60}\n{titulo.center(60)}\n{"="*60}\n') # Formatação Bonitinha

# OBJETIVO: Desenvolver uma operação de vendas de uma barraca.

# Cardápio e Estoque - Lista de produtos, cada produto é um dicionário
cardapio = [
    {"codigo": 1,"nome": "Hambúrguer", "preco": 18, "estoque": 20},
    {"codigo": 2,"nome": "Batata Frita", "preco": 10, "estoque": 25},
    {"codigo": 3,"nome": "Refrigerante", "preco": 6, "estoque": 30},
    {"codigo": 4,"nome": "Suco", "preco": 8, "estoque": 20},
    {"codigo": 5,"nome": "Combo TechFood", "preco": 30, "estoque": 15}
]

# Estrutura de um pedido em dicionário
pedido = {
    "cliente": "nome",
    "produtos": [],
    "valor_original": 0,
    "desconto": 0,
    "valor_final": 0
}

# Lista para armazenar todos os pedidos
vendas = []

# Função para mostrar o cardápio e estoque
def exibirCardapio():
    print(f'\n{"CARDÁPIO E ESTOQUE":^60}\n{"-"*60}\n {"Código":<10} {"Produto":<20} {"Preço":<15} {"Estoque":<10}\n{"-"*60}')
    for produto in cardapio:
        print(f'{produto['codigo']:<10} {produto['nome']:<20} {f"R${produto['preco']},00":<15} {produto['estoque']:<10}')
    print(f'{"-"*60}')

exibirCardapio() # Mostrar cardápio ao iniciar o programa

def buscarProduto():
    codigos = []
    for produto in pedido['produtos']:
        print(produto['cod'])

def buscarNomeProduto(codigo, menu):
    for produto in menu:
        if codigo == produto['codigo']:
            return produto['nome']
    return produto['nome']

def validarQuantidadeProduto( codigo, quantidade, menu):
    for produto in menu:
        if codigo == produto['codigo']:
            if quantidade <= produto['estoque']:
                return True
            
def buscarPrecoProduto(codigo, menu):
    for produto in menu:
        if codigo == produto['codigo']:
            return produto['preco']

# Função para criar um pedido
def registrarPedido():
    print(f'\n{"-"*60}\n{"INICIANDO REGISTRO DE PEDIDO":^60}\n{"-"*60}')

    nomeCliente = input("Digite o nome do cliente: ")
    pedido['cliente'] = nomeCliente;

    exibirCardapio()

    print(f'Pedido {len(vendas) + 1} | Cliente: {pedido['cliente']}\n')

    while True:
        try:
            produtoCliente = int(input("Digite o código do produto que o cliente deseja ou 0 para encerrar o pedido: "))

            if produtoCliente < 0 or produtoCliente > len(cardapio):
                print("Por gentileza, digite um código válido de um produto.")
                break

            if produtoCliente == 0:
                print("Pedido finalizado.")
                break

            # Busca qual o nome do produto pelo código informado
            produto = buscarNomeProduto(produtoCliente, cardapio)
            print(f'Produto selecionado: {produto} - Preço R${buscarPrecoProduto(produtoCliente, cardapio)},00 \n')

            quantidadeProduto = int(input(f"Digite a quantidade que o cliente deseja de {produto}: "))

            # Verifica se a quantidade desejada cabe no estoque
            isValid = validarQuantidadeProduto(produtoCliente, quantidadeProduto, cardapio)

            if isValid:
                pedido['produtos'].append({
                    "cod": produtoCliente,
                    "qtde": quantidadeProduto
                })

                print(f'\nPedido Atual: ')

                for item in pedido['produtos']:
                    nome = buscarNomeProduto(item['cod'], cardapio)
                    preco = buscarPrecoProduto(item['cod'], cardapio)
                    print(f'{item['qtde']}x - {nome} - R${preco},00')

            else:
                print("Estoque insuficiente.")
                break

        except ValueError:
            print("Por gentileza, digite um código válido de um produto.")

# Inacabado
def consultarVendas():
    for indice, pedido in enumerate(vendas):
        print(f'Pedidos registrados no dia: {len(vendas)}\n')
        print(f'{indice + 1} - Cliente: {pedido['cliente']}')

    buscarProduto()


# Iniciar programa
while True:
    print(f'\n{"-"*60}\n{"TELA INICIAL":^60}\n{"-"*60}')
    print(f'\n [1] - Registrar um novo pedido \n [2] - Consultar situação atual das vendas \n [3] - Encerrar o atendimento')

    try:
        respostaAtendente = int(input(f'\nEscolha uma das opções acima: '))

        match respostaAtendente:
            case 1:
                registrarPedido()
            case 2:
                consultarVendas()
            case 3:
                print("Atendimento finalizado. Muito obrigado e até a próxima!")
                break
            case _:
                print("Por gentileza, digite uma opção válida.")

    except ValueError:
        print("Por gentileza, digite uma das opções entre [1] a [3].")

