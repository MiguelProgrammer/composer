# Composer ![Profile View Counter](https://komarev.com/ghpvc/?username=MiguelProgrammer)
Gerenciamento de dependências

# Erros
Ao tentar ralizar uma busca por método http get utilizando a função request do Client é 
possível se deparar com o seguinte erro [cURL error 60: SSL certificate problem: unable to get local issuer certificat].

Para solucionar o problema de listagem foi necessário realizar um download do arquivo https://curl.se/ca/cacert.pem, inserilo no
caminho C:\xampp\php\extras\ssl, abrir o php.ini, desccomentar o item curl.cainfo e atribuir a ele o valor do "C:\xampp\php\extras\ssl".
Após reiniciar o servidor interno, foi possível obter a listagem que obtive através do client->request.

# Phan & php-ast
Mesmo realizando a instalação via composer require --dev phan/phan, não foi possível realizar a analise, ele retorna algumas mensagens
como 'Warning: PHP Startup: Unable to load dynamic library 'ast.so', 'The php-ast extension must be loaded in order for Phan to work'.
Para solucionar, foi necessário usar Phan 5 que depende da version PHP 7.2+ com a extensão php-ast (1.0.16+). Além disso, adicionei 
extension=ast.soa no php.ini. Encontre algumas dicas no git [Nikita Popov](https://github.com/nikic/php-ast#installation), Nikita
é contribuidor para o ecossitema PHP que é um dos responsáveis pela versão do php 7, agora faz parte da equite JetBrains.

# Script no Json - Resultados
# composer phan 
![img](https://i.imgur.com/4lK0DGV.jpeg)
# composer cs 
![img](https://i.imgur.com/kFmLUjp.jpg)
# composer check
![img](https://i.imgur.com/gEBkSla.jpg)
