# Mise en place Docker

> Les commandes doivent être executées avec les droits administrateurs.

- `$ cd Test_2021/`
- `$ docker-compose up -d`
- `$ docker ps -a`
- Récupérer l'**identifiant** du container
- `$ docker exec -ti [identifiant] bash`

# Mise en place du projet Symfony

- `$ cd /var/www/Projet_Test`
- `$ composer install`
- `$ bin/console doctrine:database:create`
- `$ bin/console doctrine:migrations:migrate`
- `$ bin/console doctine:fixtures:load`

# Démarrer le serveur Symfony

- `$ symfony serve`
- Accéder à l'URL sur navigateur : `localhost:5000/api`



