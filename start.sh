echo '###### Build image ######'
docker image build -t myapp:3.0 .

echo '###### Run Docker compose ######'
docker-compose up
