Docker Demo
General project structure
This demo has two parts
    • app, where the application code resides 
    • runtime, where the Docker related is situated 
App
Under app you will find just two files. One is public/index.php with sample code which uses Monolog for application logging. The second file is composer.json, where the dependency to Monolog is stated.
Runtime
Under runtime you will find 1 directory
    • local 
runtime/local
Under local you will see a bunch of files and directories. This is where you will be most of the time during development.
To save you writing a lot, some commands to Docker and Compose have already been added to a Makefile. make up will start the cluster. make killall will stop it and remove the containers (not the images). And all at once : make killall up To see all available commands type make <tab>.
    • make ps - shows the running containers and some information about them. Here is an example output 
          Name                         Command               State                        Ports                      
--------------------------------------------------------------------------------------------------------------------
internship_app                 docker-php-entrypoint apac ...   Up       0.0.0.0:4080->80/tcp                           
internship_composer                /docker-entrypoint.sh composer       Exit 0                                                                                                  
internship_mailhog             MailHog                          Up       1025/tcp, 8025/tcp                             
internship_mysqldb             docker-entrypoint.sh mysql ...   Up       0.0.0.0:13306->3306/tcp                        
internship_pma_local           /run.sh phpmyadmin               Up       80/tcp, 9000/tcp                               
internship_proxy               /app/docker-entrypoint.sh  ...   Up       0.0.0.0:443->443/tcp, 0.0.0.0:80->80/tcp       

    • make logs-all - dumps at the screen the stdouts of all started containers 
    • make logs-app - dumps at the screen the stdout of the app container 
    • make kill - stops and removes the containers of the cluster. make killall OTOH is a weapon of mass destruction and kills all containers running on the system. 
    • make volumes-clean - because all containers are ephemeral by design, the persistent data should be stored somewhere. Here it is under runtime/local/volumes. This command clean up all data to start from scratch. For example it will delete all MySQL datafiles. 
    • make fix-rights - some of the containers don't run under anything but root. This results in files in the volumes with root as owner and not the application user. This command chowns everything under volumes/ to 1000:1000 which is the first (and probably the only one) GUI user on Ubuntu 
    • make composer-install - starts the composer container to install all dependencies found in app/composer.json. Under normal circumstances the composer container is not running and started only for this command 
    • make shell - starts a non-privileged shell in the app container. Use for quickly checking things from container's inside, like files or install some software for a quick check, which at container restart will vanish automagically. 
    • make hosts-add - for the project to run some server names need to be registered. In this project this is not done with Traefik but just by putting some entries in /etc/hosts. This command add the entries. The command is smart to check for all VIRTUAL_HOST env variables in all docker compose yml definition files and register them. 
    • make hosts-clean - removes the added entries from /etc/hosts 
How does this work?
All services are in own docker-compose.yml
The different containers are split into different networks. For example, the nginx proxy cannot speak to the MySQL database directly. It can't see the database because the database is on a different network. OTOH, PHPMyAdmin sits on the nginx network, so nginx can act as a reverse proxy but also sits on the MySQL network.
For your information, Docker Compose has the notion of projects. The project is a cluster. By default the name of the project is the name of the current directory (only the last part, not the whole path). The project name is also used for naming the default bridge network of the project. However, there is a problem if a directory structure like the one in this source repo is used. In all cases you will be in local and all projects will be named local. Thus -p option is passed to docker-compose to specify specific name. With some variable magic this is done in one place in the Makefile and then reused in the whole Makefile.
