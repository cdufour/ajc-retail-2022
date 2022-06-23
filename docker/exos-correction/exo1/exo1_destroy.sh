#!/bin/bash

echo "[+] arrêt et destruction des conteneurs de l'exo1"
docker stop redis1 redis2 mysql1 mysql2
docker rm redis1 redis2 mysql1 mysql2