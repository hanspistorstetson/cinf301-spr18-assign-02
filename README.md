# Part 1

docker network create webapps1
docker run --name=mysql --network=webapps1 -e MYSQL\_ROOT\_PASSWORD=password -d mysql
docker run --name=ubuntu --network=webapps1 -d ubuntu
docker run -it --name=ubuntu --network=webapps1 ubuntu /bin/bash
apt-get update
apt-get install net-tools nmap mysql-client
nmap -sL 172.18.0.\* | grep \(1
* mysql 172.18.0.2
* ubuntu 172.18.0.3

mysql -u root -p -h 172.18.0.2


# Part 2
docker build .
 * notes
 * ADD app /var/www/html
 Needed for this to work
docker run -d --name=lamp -p 80:80 -v $(PWD)/app:/var/www/html 93007d873fe0
