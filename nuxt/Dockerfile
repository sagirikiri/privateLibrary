FROM node:8.16.0-jessie

# build
RUN npm install -g npm
ADD volume /home/node/PrivateLibrary
WORKDIR /home/node/PrivateLibrary
RUN npm install fibers
RUN npm run build

# setting
ENV HOST 0.0.0.0
EXPOSE 3000

# command
CMD ["npm", "run", "start"]
