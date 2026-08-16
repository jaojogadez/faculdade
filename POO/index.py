# Ativiade Diagnóstica
titulo = "DESAFIO DE PROGRAMAÇÃO - TECH FOOD"
print(f'\n\n{"="*50}\n{titulo.center(50)}\n{"="*50}\n\n')

# OBJETIVO: Desenvolver uma operação de vendas de uma barraca.

cardapio = [
    {"nome": "Hambúrguer", "preco": 18, "estoque": 20},
    {"nome": "Batata Frita", "preco": 10, "estoque": 25},
    {"nome": "Refrigerante", "preco": 6, "estoque": 30},
    {"nome": "Suco", "preco": 8, "estoque": 20},
    {"nome": "Combo TechFood", "preco": 30, "estoque": 15}
]

def exibirCardapio():
    print(f'{"CARDÁPIO E ESTOQUE":^50}\n{"-"*50}\n{"Produto":<20} {"Preço":<15} {"Estoque":<10}\n{"-"*50}')
    for produto in cardapio:
        print(f'{produto['nome']:<20} {f"R${produto['preco']},00":<15} {produto['estoque']:<10}')
    print(f'{"-"*50}')

exibirCardapio()