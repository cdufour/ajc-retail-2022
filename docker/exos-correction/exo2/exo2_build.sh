#!/bin/bash

echo "[+] construction de l'image demandée dans l'exo2 (redis perso)"
docker build . -t exo2/myredis:0.1 --no-cache