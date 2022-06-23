// import des dépendances. 
// Express: https://www.npmjs.com/package/express
// Redis: https://www.npmjs.com/package/redis
const express = require('express');
const redis = require('redis');
const app = express();

// routes (endpoints)
app.get("/", (req, res) => {
  res.send("Bienvenue sur mon service web :-)))");
})

app.get('/visits', (req, res) => {
  console.log('[+] HTTP GET request on route /visits')
  
  // nouvelle connexion au serveur Redis
  console.log('[+] Opening Redis connexion')
  const client = redis.createClient({
    host: process.env.REDIS_HOST || 'localhost',
    port: process.env.REDIS_PORT  || 6379
  });

  // requête à Redis. Nombre de visites ?
  client.get('visits', (err, visits) => {

    let num = 1;
    if (visits) num = parseInt(visits) + 1;

    client.set('visits', num, async () => {

      // fermeture de la connexion au serveur Redis
      await client.quit();
      console.log('[+] Closing Redis connexion')
      return res.send('Nombre de visites: ' + num);
    });
  })
})

app.listen(3000, () => console.log("Server listening on port 3000..."));
