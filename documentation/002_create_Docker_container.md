A Docker container will be used in order to create isolated and disposable environment.
As this is WIP (Work in Progress) the requirements and goals may change. There is no need to interfere with the base OS and reinstall Windows, when Docker containers can be easily recreated.

Assumptions: 
- WSL is installed
- WSL Linux distribution is updated (Debian will be used in this case)
- docker.io package is installed


Check the available images
```bash
docker image ls
```

Pull the Docker image (if not present) for the chosen Linux distribution. In this case again Debian will be used.
``` bash
docker pull debian
```

List all docker containers
``` bash
docker ps -a
```

Create new docker container. Some settings are set up when creating the container. Settings can also be added later, but in some cases this would require to save the Docker container as image and then create new container. So the ports and the folders are set at the container creation with:
``` bash
docker run -it -d --name web_crawler01 \
    -p 127.0.128.129:8080:80 \
    -v /home/gergo/gitrepos/web_crawler_01_AA_jobs/local_files/databases:/crawler_dbs \
    -v /home/gergo/gitrepos/web_crawler_01_AA_jobs/local_files/www:/var/www/html \
    -v /home/gergo/gitrepos/web_crawler_01_AA_jobs/local_files/settings:/crawler_settings \
    debian
```


connect to the container
``` bash
docker start -i web_crawler01
```


stop container and then remove container
``` bash
docker stop web_crawler01
docker rm web_crawler01
```

Copy from or to container is done using something like
``` bash
docker cp <container_name>:/pfad/im/container/datei.db /pfad/auf/dem/host/
```


