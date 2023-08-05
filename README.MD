echo Building Docker Images

docker build -t amc-img .

echo Docker Image Built Image Name acm-img

echo Creating Container...

docker run -p 3000:8080 --name amc-con -it -v /amazemfgco/node_modules -v "/home/dev/amazemfgco:/amazemfgco" amc-img
