FROM webdevops/php-nginx:8.2-alpine

# Copiar arquivos de configuração da raiz do projeto
COPY php.ini /opt/docker/etc/php/php.ini
COPY vhost.conf /opt/docker/etc/nginx/vhost.conf

# Copiar todo o código da aplicação
COPY . /app

# Definir o diretório de trabalho
WORKDIR /app

# Garantir permissões corretas
RUN chown -R application:application /app
