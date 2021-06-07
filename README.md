## Requisitos

- Docker
- É necessário clonar o projeto [chatBot-Py](https://github.com/hexti/chatbot-Py)

## Configuração

Na pasta utilize os comandos a baixo:

```bash
git clone https://github.com/hexti/chat-app.git .

composer install

npm install
```
## Iniciar a Aplicação Laravel

Entre na pasta raiz do projeto e digite os comandos a baixo:

```bash
docker-compose up

docker exec -it NAME_CONTAINER bash

php artisan redis:subscribe
```
## Observação

É necessário iniciar a aplicação em Python para haver a comunicação com o Telegram, ver o projeto o README.md do [chatBot-Py](https://github.com/hexti/chatbot-Py)
