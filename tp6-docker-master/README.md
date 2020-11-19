# Instructions

## To-do 

PLease, before using this repo, please make sure to have an amplify account


[Sign up](https://amplify.nginx.com/signup/)


You will need to replace your API key buy yours in this docker file in order to check up the metrics of your container

```
.
├── conf.d
│   └── stub_status.conf            <-- Nginx conf
├── docker-compose.yml              
├── Dockerfile                      <-- replace your API key here
├── entrypoint.sh
├── LICENSE
├── mysql
│   └── mysqld.cnf                  <-- mysql conf
├── php
│   └── Dockerfile
├── public_html
│   ├── css
│   │   └── main.css
│   ├── index.php
│   └── info.php
├── README.md
└── tree.txt

5 directories, 12 files

```
then do a docker-compose up -d --build
wait
.
.
.

then go on http://127.0.0.1:8080/
wait like 5 minutes for the amplify agents to collect data
you must see some calls if you look at the logs

to verify if the amplify agent has start, attach a shell to the nginx container and run this cmd : ps ax | grep -i 'amplify\-'
you should see something like that :   67 ?        Sl     0:06 amplify-agent

## Setting up a development stack

In this exercise you are going to set up a development stack infrastructure. This means that you
will configure a container as a platform for testing your code, and you will develop your code
somewhere else (e.g. your laptop or another container).
You are free to chose the tools to install and the development environment, but you must adhere
to the following requirements:
- Start from one or multiple existing image(s) in the Dockerhub (e.g. ubuntu, fedora, etc.).
- Use docker-compose to customise the image or images.
- The customised image will be the test environment where you will test and debug your
code. But it will also become the production environment that you will give to the client, so
make sure everything is well configured in the container. Think about everything you need
to have installed (Java EE, JRE, Scala, Python, a database, etc.).
- You will develop your code outside the test container, which will mount a volume into the
development directory so that you can run and test your code inside the container. The
code to develop, as well as the tools you will use (your IDE, for example) can be in installed
in your laptop or in another container.
- Once the code, the docker-compose.yml file and everything else you need work perfectly,
commit those files to gitLab or gitHub and send your client (that’s me) the link. I will clone
the files and will run docker-compose up . Then I will grade your work.

# This repo contain my settings for a full web development stack
It includes some Docker images :

- Ngin:1.15.4 & Amplify Agent
- mysql:5.7 [image](https://hub.docker.com/_/mysql)
- phpmyadmin:latest [image](https://hub.docker.com/_/phpmyadmin)
- PHP:7.4-fpm

The docker-compose build new images based on the DockerFiles.


It assigns :

    - containers names,
    - networks to avoid overlapping Ips',
    - volumes in order to get persistent data,
    - environments variables useful for the database.
    
## The set up you will get looks like that


| The nginx server load the the html site on http://127.0.0.1:8080/ |
| ------ | 
|[![Screenshot-from-2020-10-19-14-21-18.png](https://i.postimg.cc/0QNXMhLK/Screenshot-from-2020-10-19-14-21-18.png)](https://postimg.cc/zL9F42Dq)|
| Amplify Metrics interface |
| ------ | 
| [![Screenshot-2020-09-29-NGINX-Monitoring-Made-Easy-1.png](https://i.postimg.cc/JzLtxH9P/Screenshot-2020-09-29-NGINX-Monitoring-Made-Easy-1.png)](https://postimg.cc/4mWJNy49) |
| [![Screenshot-2020-09-29-NGINX-Monitoring-Made-Easy.png](https://i.postimg.cc/xCT07KR3/Screenshot-2020-09-29-NGINX-Monitoring-Made-Easy.png)](https://postimg.cc/WDCLqqxd)|

#### The PhpMyAdmin is the default one, available on 127.0.0.5:8080 with persistent data due to the volume mounted
[![Screenshot-from-2020-10-19-14-25-13.png](https://i.postimg.cc/Gm2jjvX6/Screenshot-from-2020-10-19-14-25-13.png)](https://postimg.cc/2VsvkLRx)

## Enjoy your dev stack !!