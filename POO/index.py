# Ativiade Diagnóstica
titulo = "DESAFIO DE PROGRAMAÇÃO - TECH FOOD"
print(f'\n\n{"="*60}\n{titulo.center(60)}\n{"="*60}\n\n')

# OBJETIVO: Desenvolver uma operação de vendas de uma barraca.

cardapio = [
    {"codigo": 1,"nome": "Hambúrguer", "preco": 18, "estoque": 20},
    {"codigo": 2,"nome": "Batata Frita", "preco": 10, "estoque": 25},
    {"codigo": 3,"nome": "Refrigerante", "preco": 6, "estoque": 30},
    {"codigo": 4,"nome": "Suco", "preco": 8, "estoque": 20},
    {"codigo": 5,"nome": "Combo TechFood", "preco": 30, "estoque": 15}
]

def exibirCardapio():
    print(f'{"CARDÁPIO E ESTOQUE":^60}\n{"-"*60}\n {"Código":<10} {"Produto":<20} {"Preço":<15} {"Estoque":<10}\n{"-"*60}')
         
    for produto in cardapio:         
        print(f'{produto['codigo']:<10} {produto['nome']:<20} {f"R${produto['preco']},00":<15} {produto['estoque']:<10}')     

    print(f'{"-"*60}')
        
exibirCardapio()