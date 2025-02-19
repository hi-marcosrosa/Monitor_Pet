
Este projeto foi criado para permitir o cadastro de Animais e suas descrições e necessidades diárias como medicamentos específicos e horários de administração, tudo armazenado em um banco de dados. Com ele, você pode cadastrar informações como Nome e descrição. Gerar relatório dos animais.



Este projeto foi desenvolvido por Marcos da Rosa Sotomaior.


Cadastro de Animais.

• Adicione informações de um novo Pet: nome e descrição.


Listagem de Pets.

• Visualize todos os Pets cadastrados em uma tabela organizada.
As informações são carregadas diretamente do banco de dados.
Você pode atualizar a lista a qualquer momento para visualizar novos usuários.

Exclusão de Pets

• Exclua animais da lista com um simples clique.
A exclusão é feita no Banco de Dados e a tabela é atualizada automaticamente.


 Tecnologias Utilizadas
• HTML; CSS; JavaScript; Bootstrap; Banco de Dados; FrameWork Laravel.




Como Usar
1. Clone ou Baixe o Repositório
Você pode clonar o repositório ou baixar como um arquivo zip:

git clone https://github.com/seu-usuario/nome-do-projeto.git

2. Abra o Projeto no Navegador
Após clonar o repositório, abra o arquivo Pet.html no seu navegador. A página de cadastro estará pronta para ser usada!

3. Cadastro de Pets

Clique no botão "Novo Pet" para cadastrar.
Preencha os campos de cadastro com as informações do animal.
Caso algum campo não esteja preenchido ou seja inválido, o sistema irá exibir um alerta.

4. Relatório de Pets
Para gerar relatório dos animais cadastrados, clique no botão "Gerar relatório".
A lista de animais será exibida, e você poderá atualizar a tabela sempre que desejar.
Para excluir um animal, basta clicar no botão "Excluir" ao lado do nome do animal.

A interface foi projetada para ser simples, mas pode não ser totalmente otimizada para todos os dispositivos móveis. Ajustes podem ser necessários para telas muito pequenas.

Configuração do Banco de dados PostgreSQL:

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=animaisestimacao
DB_USERNAME=postgres
DB_PASSWORD=postgres
-----------------------------------------
CREATE DATABASE animaisestimacao;

CREATE TABLE pets(
	codigo serial  NOT NULL,
	nome varchar(300) NOT NULL,
	descricao varchar(500) NOT NULL,
	primary key (codigo)
);


insert into pets(nome,descricao)
values( 'Spyke','  Spyke é um Labrador Retriever enérgico e brincalhão. Adora nadar e buscar objetos. Aspectos: Pelagem amarela, olhos castanhos, porte grande. Possíveis Problemas de Saúde: Displasia coxofemoral, otite Medicamentos:
    Condroitina e Glucosamina (diariamente às 8h) Otomax (pomada auricular, 2x por semana)');

insert into pets(nome,descricao)
values('Poly',' Poly é uma gata Maine Coon sociável e afetuosa, conhecida por sua grande pelagem e presença majestosa. Aspectos: Pelagem longa e cinza, olhos verdes, porte grande. Possíveis Problemas de Saúde: Cardiomiopatia hipertrófica, obesidade Medicamentos: Atenolol (diariamente às 8h)
    Ração para controle de peso (3x ao dia, 7h, 12h, 19h)');
