FROM node:alpine3.17

WORKDIR /amazemfgco

COPY package.json /amazemfgco/

RUN npm install

EXPOSE 8080

CMD [ "npm", "run", "postserver" ]