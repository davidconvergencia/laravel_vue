# Use uma imagem Node.js como base
FROM node:18-alpine

# Defina o diretório de trabalho
WORKDIR /app

# Copie os arquivos package.json e package-lock.json para o contêiner
COPY frontend/package*.json /app

# Instale as dependências do projeto Vue.js
RUN npm install

# Copie todos os arquivos do cliente para o contêiner
COPY frontend /app


