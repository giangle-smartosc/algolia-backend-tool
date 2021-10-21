FROM node:14-alpine

WORKDIR /var/www/frontend

RUN yarn install

# Copy existing application directory contents
COPY ./frontend /var/www/frontend

EXPOSE 8081

CMD ["node", "server.js"]