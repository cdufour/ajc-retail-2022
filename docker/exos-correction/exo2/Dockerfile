FROM redis:6.2

RUN apt update -y && apt install -y curl zip procps

# ici la clause CMD n'est pas nécessaire, on hérite du CMD provenant de l'image de base
# CMD ["redis-server"]