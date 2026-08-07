## servidor de Desenvolvimento
Será uma interface de desenvonvimento, utilizada para projetar aplicações e banco de dados.

```mermaid
graph LR
A[Cliente]
<--Dados-->
B[Servidor.Datacenter]
```
---
## Servidor de Arquivos Educacional
É um servidor para armazenar arquivos e facilitar na hora de realizar a transferencia.

> O endereço para acesso ao servidor de arquivos é: `\\10.87.36.10`
>`Credenciais de acesso: E-mail: aluno, Senha: aluno IP:192.168.10.84`, Username:`root` e Porta:`2222`, Senha:`22102009@`

---
## Servidor Pessoal
O Moba será a interface para acesso ao meu servidor de desenvolvimento.
>O acesso, será realizado via SSH

Para alterar a senha, utilizamos o comando:
```bash
passwd
```

Para vizualizar os recursos do meu servidor foi utilizado o seguinte comando:
```bash
htop
```

---
|Recurso|Configuração
|----|-------|
|Processador|2 cores|
|RAM|512MB|
|Armazenamento|6 GB|
|Sistema Operacional|Ubuntu 26.04 LTS|
---
A utilização de um servidor de desenvolvimento, simula um ambiente real de produção são:

- Deploy de projetos
- Aplicação de bancos de dados
- Experiencia real de mercado


## Banco De Dados
Antigamente, os dados eram salvos em arquivos/planilhas.

```mermaid
graph TD
P[Guardar dados]-->A[Arquivo de texto]
P[Guardar dados]-->B[Banco de dados]
A-->A1[um usuario por vez]
A-->A2[não possui Backup]
A-->A3[Detalhes importantes ocultos]
B-->B1[Varios acessos simultaneos]
B-->B2[consultas mais eficientes]
B-->B3[controle de acessos]
B-->B4[backup]
```
Mas afinal onde entra um banco de dados em aplicações WEB 🤔?

```mermaid
graph LR
A[usuario]-->B[Aplicações WEB]-->C[(Banco de Dados)]
```
## SGBD
Sistema Gerenciador de Banco de Dados

>Função: Gerenciar, controle e permitir consultas nos nossos bancos de dados.

```mermaid
graph TD
A[SGBD-PostgreSQL]-->B[(Banco de dados)]
A-->C[Armazena Usuarios]
A-->D[realizar consulta]
A-->E[controle de acesso]