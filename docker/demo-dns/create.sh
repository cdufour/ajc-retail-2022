#!/bin/bash

# création d'un réseau docker
echo "[+] création d'un réseau docker (demo)"
docker network create demo

# création de conteneurs
echo "[+] création de conteneurs dans le réseau demo"
docker run -d --name r1 --network demo redis:5-alpine
docker run -d --name r2 --network demo redis:5-alpine
docker run -d --name r3 --network demo redis:5-alpine

# exemple d'utilisation. redis-cli exécuté depuis le conteneur r1 se connecte
# au redis-server du conteneur r2
# docker exec -it r1 sh
# redis-cli -h r2