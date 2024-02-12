# Suba os containers do projeto

docker-compose up -d

# Acessar o container

docker-compose exec app bash

# Instalar as dependências do projeto

composer install

# Gerar a key do projeto Laravel

php artisan key:generate

# Executar migrations

php artisan migrate

# Acessar o projeto

http://localhost:8989
