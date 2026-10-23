# Aula - Relacionamento de Tabelas.

## Ideia Principal

- **Clientes**: Quem compra
- **Pedidos**: Aquilo que foi vendido
- Cada pedido guarda o **Número do cliente** (id), não o seu nome.
- O **JOIN** junta duas tabelas para mostrar o  nome do cliente do lado do seu pedido.

## Diagrama
```mermaid
erDiagram
    CLIENTE ||--O{
    PEDIDOS : faz
    
    CLIENTES{
        int id PK
        varchar nome
    }    

    PEDIDOS{
        int id PK
        varchar produto
        int id_cliente FK
    }
```
- **PK**: O número que identifica cada cliente e cada pedido.
- **FK**: (Chave estrangeira) O número que irá apontar para a outra tabela.
- ||--o{ Signifixa que um cliente podera ter varios pedidos

## Passo a Passo

1. Criamos a tabela clientes.

```sql
CREATE TABLE clientes(
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100)

);
```

2. Criamos a tabela de pedidos (criando a chave estranngeira):

```sql
CREATE TABLE pedidos(
    id SERIAL PRIMARY KEY,
    produto VARCHAR(100),
    id_cliente INT REFERENCES clientes(id)
);
```

3. iserimos os clientes (Daniel não vai compara nada na cantina)

```sql
INSERT INTO clientes (nome) VALUES
('Caio'),
('Carla'),
('Daniel')
```
4. inserimos os produtos na tabela 

```sql
INSERT INTO pedido(produto,id_cliente)
VALUES
('Pão de queijo',2),
('Café expresso',2),
('Almoço',1)
```

5. Comando INNER JOIN

```sql
SELECT clientes.nome, pedidos.produto
FROM pedidos
INNER JOIN clientes ON pedidos.id_cliente = clientes.id;
```
- O Daniel não aparece, pois não possui pedido algum.

6. Ultilizando o comando LEFT

```sql
SELECT clientes.nome,pedidos.produto
FROM clientes
LEFT JOIN pedidos ON clientes.id = pedidos.id_cliente;
```

- O LEFT mostra tudo da tabela da esquerda (basicamente, é a tabela após o FROM).