# image de base (OS layer)
FROM debian:11-slim

WORKDIR /app

# copie le fichier app.sh dans le dossier de travail (/app)
COPY app.sh .

# exécution d'une commande "build time"
RUN chmod +x app.sh

# commande de démarrage (startup command) du conteneur basé sur cette image
CMD ["./app.sh"]
