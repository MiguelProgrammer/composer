# Composer ![Profile View Counter](https://komarev.com/ghpvc/?username=MiguelProgrammer)
Gerenciamento de dependências

## Erros
Ao tentar ralizar uma busca por método http get utilizando a função request do Client é 
possível se deparar com o seguinte erro [cURL error 60: SSL certificate problem: unable to get local issuer certificat].

Para solucionar o problema de listagem foi necessário realizar um download do arquivo https://curl.se/ca/cacert.pem, inserilo no
caminho C:\xampp\php\extras\ssl, abrir o php.ini, desccomentar o item curl.cainfo e atribuir a ele o valor do "C:\xampp\php\extras\ssl".
Após reiniciar o servidor interno, foi possível obter a listagem que obtive através do client->request.

