// import des dépendances
// https://www.npmjs.com/package/express
const express = require('express');
const app = express();

// routes
app.get("/", (req, res) => {
  res.send("Bienvenue sur mon service web :-)))");
})

app.listen(3000, () => console.log("Server listening on port 3000..."));
