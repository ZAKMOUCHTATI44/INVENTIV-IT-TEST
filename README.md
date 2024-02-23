# INVENTIV IT TEST

Ce projet consiste à créer une calculatrice simple en utilisant Laravel. La calculatrice doit être capable de gérer les opérations suivantes : addition, soustraction, multiplication et division.

## Installation

1. Clonez ce dépôt sur votre machine locale.
2. Exécutez `composer install` pour installer les dépendances de Laravel.
3. Copiez le fichier `.env.example` et renommez-le en `.env`.
4. Générez une clé d'application en utilisant la commande `php artisan key:generate`.
5. Configurez votre base de données dans le fichier `.env`.
6. Exécutez les migrations avec la commande `php artisan migrate`.

## Utilisation

1. Lancez le serveur Laravel avec la commande `php artisan serve`.
2. Accédez à l'URL `http://localhost:8000/calculator` dans votre navigateur pour utiliser la calculatrice.
3. Remplissez les champs avec les nombres et l'opération souhaitée, puis cliquez sur le bouton "Calculer".
4. Le résultat de l'opération s'affichera sur la page.

## Tests

Ce projet inclut des tests unitaires pour le `CalculatorController`. Pour exécuter les tests, utilisez la commande suivante :

```bash
php artisan test
