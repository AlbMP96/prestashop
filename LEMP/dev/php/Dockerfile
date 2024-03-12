FROM debian:12

RUN apt-get update && apt-get install -y php8.2-fpm php-zip php-intl

RUN apt install -y php8.2-mysql php-xml php-gd php-json php-curl php-mbstring

EXPOSE 9000

WORKDIR /app

ENTRYPOINT ["php-fpm8.2", "-F"]