
# Sprite Generator

Ce projet est un **Sprite Generator** développé en PHP, permettant de générer une image de sprite à partir d’une série d’images individuelles, ainsi que son fichier CSS associé pour faciliter leur utilisation dans le style d’un site web. Ce projet a été réalisé en solo.

## Fonctionnalités

- **Génération d’une image de sprite** : Combine plusieurs images individuelles en une seule image sprite.
- **Création de CSS** : Produit un fichier CSS qui mappe chaque image d’origine dans l’image de sprite, facilitant ainsi l'intégration des images dans une interface web.

## Aperçu du projet

Ce projet a été conçu pour permettre aux développeurs de créer un sprite et un fichier CSS associés en seulement quelques étapes simples.
Il suffit d'ajouter le script dans le même dossier que les images à organiser en sprite.

## Technologies utilisées

- **PHP** : Pour le traitement des images et la génération du CSS.
- **CSS** : Interface utilisateur simple pour charger les images et afficher les résultats.

## Installation

### Prérequis

- PHP 7.4 ou supérieur.

### Étapes d'installation

1. **Cloner le dépôt** :
```bash
   git clone https://github.com/votre-utilisateur/sprite-generator.git
```
2 . ** Accéder au projet** :
```bash
    cd sprite-generator
```

3. **Utilisation** :
```bash
php css_generator.php
```
Cette commande génère : 
Une image de sprite (sprite.png).
Un fichier CSS (sprite.css) qui mappe chaque image individuelle au sprite.


**Améliorations possibles**
Ajout d’une interface utilisateur.
Support de formats d’images multiples : Supporter d’autres formats d’image en plus du PNG.
Fonctionnalité de prévisualisation : Permettre aux utilisateurs de visualiser le sprite avant de le télécharger.

**Auteure**
Projet réalisé par Nahé Hutin. Ce projet a été développé en deux semaines dans le cadre d'un projet école pour explorer les possibilités de PHP dans la manipulation d'images et la génération de CSS.


