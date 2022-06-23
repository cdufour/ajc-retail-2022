#!/bin/bash

echo "[+] construction de l'image demandée dans l'exo2 (redis perso) - variante alpine"
docker build . -f Dockerfile.alpine -t exo2/myredis:0.1-alpine --no-cache