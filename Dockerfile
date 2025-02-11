FROM php:8.1.12
RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR .
COPY . .
RUN composer update --ignore-platform-reqs
RUN composer install --ignore-platform-reqs

CMD php artisan serve --host=0.0.0.0 --port=8181
CMD npm run dev
EXPOSE 8181

# FROM node:18-alpine

# WORKDIR /app

# COPY package.json .

# RUN npm install

# COPY . .

# EXPOSE 8080

# CMD [ "npm", "run", "dev" ]