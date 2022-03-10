
EXECUÇÃO DO PROJETO:
Projeto Desenvolvido na estrutura MVC em Laravel.

Para executar o projeto de forma correta siga os seguintes passos:

1 - Abra o arquivo .env e modifique as seguintes linhas:

DB_HOST=localhost (seu host)
DB_PORT=3306 (sua porta sql)
DB_DATABASE=magazord (nome do banco de dados)
DB_USERNAME=root (usuário mysql)
DB_PASSWORD= (senha mysql)

2 - Após a etapa 1 for concluída baixe o export do banco de dados com o nome de magazord.sql 

3 - Faça a importação deste arquivo no seu banco de dados.

4 - Entre na pasta raiz do projeto e execute o seguinte comando no terminal: php artisan serve
 
5 - Este comando irá fazer com que um servidor seja iniciado na porta 8000. Acesse na seguinte URL: localhost:8000

6 - Nisto o projeto já estará funcionando.

ESTRUTURA DO PROJETO
- Controllers está localizado na pasta: /App/Http/Controllers;
- As Views do projeto está localizado em /resources/views;

Espero que gostem da forma em que foi desenvolvido! xD
