# Utilizando a imagem oficial do PHP
FROM php:7.4-fpm

# Instalando as extensões necessárias
RUN docker-php-ext-install pdo_mysql

# Instalando o nginx
RUN apt-get update && apt-get install -y nginx

# Removendo a configuração padrão do nginx
RUN rm /etc/nginx/sites-available/default

# Copiando a configuração personalizada do nginx
COPY nginx.conf /etc/nginx/sites-available/default

# Iniciando o nginx e o php-fpm
CMD ["nginx", "-g", "daemon off;"]
