# Ativiade Diagnóstica
titulo = "DESAFIO DE PROGRAMAÇÃO - TECH FOOD"
print(f'{"="*60}\n{titulo.center(60)}\n{"="*60}\n\n')

# OBJETIVO: Desenvolver uma operação de vendas de uma barraca.

cardapio = [
    {"codigo": 1,"nome": "Hambúrguer", "preco": 18, "estoque": 20},
    {"codigo": 2,"nome": "Batata Frita", "preco": 10, "estoque": 25},
    {"codigo": 3,"nome": "Refrigerante", "preco": 6, "estoque": 30},
    {"codigo": 4,"nome": "Suco", "preco": 8, "estoque": 20},
    {"codigo": 5,"nome": "Combo TechFood", "preco": 30, "estoque": 15}
]

vendas = [
    {"produto": " ", "qtde": 0, "valorTotal": 0}
]

def exibirCardapio():
    print(f'\n{"CARDÁPIO E ESTOQUE":^60}\n{"-"*60}\n {"Código":<10} {"Produto":<20} {"Preço":<15} {"Estoque":<10}\n{"-"*60}')
    for produto in cardapio:         
        print(f'{produto['codigo']:<10} {produto['nome']:<20} {f"R${produto['preco']},00":<15} {produto['estoque']:<10}')     
    print(f'{"-"*60}')  
    
exibirCardapio()
    
def registrarPedido():
    nomeCliente = input("Digite o nome do cliente: ")
    exibirCardapio()
    
    while True:
        try:
            produtoCliente = int(input("Digite o código do produto que o cliente deseja ou 0 para encerrar o pedido: "))
            quantidadeProduto = int(input("Digite a quantidade que o cliente deseja desse produto: "))    
        except ValueError:
            print("Por gentileza, digite um código válido de um produto.")
            

while True:
    print(f'\n [1] - Registrar um novo pedido \n [2] - Consultar situação atual das vendas \n [3] - Encerrar o atendimento')
    
    try:
        respostaAtendente = int(input(f'\nEscolha uma das opções acima: '))
        
        match respostaAtendente: 
            case 1: 
                registrarPedido()
            case 2: 
                print("Função: Consultando vendas...")
            case 3:
                print("Atendimento finalizado. Muito obrigado e até a próxima!")
                break
            case _:
                print("Por gentileza, digite uma opção válida.")
                
    except ValueError:
        print("Por gentileza, digite uma das opções entre [1] a [3].")
    
