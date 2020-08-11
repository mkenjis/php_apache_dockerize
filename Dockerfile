FROM httpd

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update \
  && apt-get install --yes php \
  && apt-get install --yes php-mysql
  
WORKDIR /usr/local/apache2/htdocs
COPY . .

EXPOSE 80