# image de base (contient node et npm)
FROM node:16-alpine

WORKDIR /app

COPY package.json .

# installation des dépendances listées dans le fichier package.json (node_modules)
RUN npm install

COPY server.js .

CMD ["node", "server.js"]