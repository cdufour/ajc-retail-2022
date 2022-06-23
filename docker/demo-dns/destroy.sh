#!/bin/bash

echo "[+] destruction des conteneurs"
docker stop r1 r2 r3
docker rm r1 r2 r3

echo "[+] destruction du réseau demo"
docker network rm demo