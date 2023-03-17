# Movie Rating

To build the images, run the following commands:

```bash
# Build the database image
docker image build -t db-app -f Dockerfile.db .

# Build the web image
docker image build -t web-app -f Dockerfile.web .

```
Both containers should be attached to the same network (network-app) for name resolution to work.
```bash
docker network create network-app
```

To run the containers, use the following commands:

```bash
# Run the database container
docker container run -d --name db --net network-app -e MYSQL_ROOT_PASSWORD=<some-pass> db-app

# Run the web container with external files
docker container run -d --name web --net network-app -p 80:80 web-app

```


