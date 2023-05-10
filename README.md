# fbd-vgsales-test
- Pour initialiser le projet avec les données du fichier .csv, j'ai créé une commande pour effectuer l'import des jeux vidéos, ```php artisan app:import-games```
- La recherche et le filtrage sur le module Vue.js permettant d'afficher les jeux ne se fait que sur les jeux affichés à l'instant T par la pagination, j'ai fait ce choix pour éviter de parcourir 16500 jeux lorsque l'utilisateur effectue une recherche/filtrage.
