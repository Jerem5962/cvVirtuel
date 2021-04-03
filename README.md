# cvVirtuel

## Commande utile pour le développement.

- __symfony new "nomProjet"__ | Création du projet avec la structure minimum Symfony.
- __symfony console__ | Permet de connaire l'ensemble des commandes disponibles.

## Librairie utilisée pour le projet

- __composer req maker --dev__ | Installation de maker-bundle en développement pour la création des entités, formulaires etc ...

_Pour pouvoir créer des controllers, il faut télécharger le bundle annotations_

- __composer require doctrine/annotations__ | Ajoute entre autre, le make:controller
- __composer require symfony/twig-bundle__ | Générer les templates du site (TWIG).
- __composer require symfony/asset__ | Bundle pour utiliser la fonction d'insertion d'image