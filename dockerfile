FROM node:alpine3.17

WORKDIR /amazemfgco

RUN npm install normalize.css live-server --save

RUN npm install autoprefixer postcss-cli postcss postcss-discard-comments postcss imports postcss-mixins postcss-nested postcss-preset-env postcss-simple-vars concurrently live-server --save-dev

EXPOSE 8080

CMD [ "npm", "run", "postcss" ]