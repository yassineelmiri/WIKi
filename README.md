Contexte du projet
Wiki a besoin d'un système de gestionnaire de contenu efficace, associé à un front office, pour offrir une expérience utilisateur exceptionnelle.

​

Ce système devrait permettre aux administrateurs de gérer facilement les catégories, les tags et les wikis, tout en offrant aux auteurs la possibilité de créer, modifier et supprimer leur propre contenu.

​

Du côté du front office, l'accent sera mis sur une interface utilisateur, avec des fonctionnalités telles que l'inscription simplifiée, une barre de recherche efficace, et des affichages dynamiques des derniers wikis et catégories pour une navigation.

​

L'objectif principal est de faire un endroit où tout le monde peut travailler ensemble, créer, trouver et partager des wikis de manière facile et intéressante.

​

Fonctionalités clés:

​

Partie Back office:

​

Gestion des Catégories (effectuée par l'admin):

L'administrateur doit avoir la capacité de créer, modifier et supprimer des catégories pour organiser le contenu.

Il devrait étre possibe d'associer plusieurs wikis à une catégorie.

​

Gestion des Tags (effectuée par l'admin):

L'administrateur doit pouvoir créer, modifier et supprimer des tags pour faciliter la recherche et le regroupement du contenu.

Les tags doivent être associés aux wikis pour une navigation plus précise.

​

Inscription des auteurs:

Les auteurs doivent pouvoir s'inscrire sur la plateforme en fournissant des informations de base, telles que le nom, l'adresse e-mail et un mot de passe sécurisé.

​

Gestion des Wikis (effectuée par les auteurs et les admins)

Les auteurs doivent avoir la capacité de créer, modifier et supprimer leurs propres wikis.

Les auteurs devraient pouvoir associer une seul catégorie et plusieurs tags à leurs wikis pour faciliter l'organisation et la recherche.

Les administrateurs doivent avoir la possibilité d'archiver les wikis inappropriés pour maintenir un environnement sûr et pertinent.

​

Page d'accueil du Tableau de bord (Home page - Dashboard):

Consultation des statistiques des entités via le tableau de bord.

​

Partie Front Office:

​

Login et Register:

Les utilisateurs doivent avoir la possibilité de créer un compte (Register) en fournissant des informations de base, ainsi que de se connecter (Login) à leurs comptes existants. Si l'utilisateur possède un rôle administrateur, il sera redirigé vers la page du tableau de bord (dashboard), sinon, il sera redirigé vers la page d'accueil (Home).

​

Barre de recherche:

Une barre de recherche doit être disponible pour permettre aux visiteurs de rechercher des wikis, des catégories, des tags sans nécessiter d'actualisation de la page (utilisation de AJAX)

​

Affichage des derniers wikis:

La page d'accueil ou une section dédiée doit afficher les derniers wikis ajoutés sur la plateforme, offrant ainsi aux utilisateurs un accès rapide au contenu le plus récent.

​

Affichage des Dernières catégories:

Une section distincte doit présenter les dernières catégories créées ou mises à jour, permettant aux utilisateurs de découvrir rapidement les thèmes récemment ajoutés à la plateforme.

​

Redirection ver la page single des wikis:

En cliquant sur un wiki, les utilisateurs doivent être redirigés vers une page unique dédiée à ce wiki, offrant des détails complets tels que le contenu, les catégories associées, les tags, et les informations sur l'auteur.

​

Technologies requises:

​

Technologie Frontend: HTML5, CSS Framework et Javascript

Technologie Backend: PHP 8 avec une architecture MVC

Database: PDO driver

​

Bonus:

​

Upload des images en PHP:
La possibilité d'uploader des images sur la plateforme pour enrichir le contenu. Cela peut inclure la gestion de formats d'images courants, la validation des types de fichiers, et le stockage sécurisé des images associées aux wikis.

​

Architecture MVC:
-- Système de routage La mise en place d'un système de routage selon l'architecture Modèle-Vue-Contrôleur (MVC)

-- Autoload: inclure l'utilisation de namespace pour l'organisation des classes.

Modalités pédagogiques
Travail: individuel
Durée de travail: 4 jours
Date de lancement du brief: 08/01/2023 à 09:00 am
Date limite de soumission: 12/01/2023 avant 05:30 pm
Modalités d'évaluation
Une durée de 45 min organisée comme suit :
- Présenter une défense publique de son travail devant les jurys.
- Chaque apprenants n'aura que ~15 minutes pour Démontrer le contenu et la fonctionnalité du site Web (Démonstration, explication de la conception, la base de donnée, code source).
- Code Review \ Questions culture Web (15 minutes)
- Mise en situation (15 minutes)

Livrables
- La gestion des tâches sur un Scrum Board avec tous les User  stories.
- Lien de Repository Github du projet (Code source + script sql)
- Les diagrammes UML
---- Diagramme de classes
---- Diagramme de cas d'utilisations
- Lien de la présentation

Critères de performance
Planification des tâches sur un Outil de gestion:
Utilisation d'un outil de gestion des tâches tel que Jira ou Trello pour planifier et suivre les tâches du projet.
Elaboration des User Stories pour comprendre les besoins.

Commits Journaliers sur github:
Les commits journaliers peuvent aider à suivre les changements, améliorer la traçabilité et simplifier la résolution des conflits.

Adaptabilité à différents écrans: (Responsive Design avec Framework Css)
Les pages web doivent bien s'ajuster à tous les types d'écrans pour que tout le monde puisse utiliser le site de la même façon, peu importe l'appareil utilisé.

Validation du formulaire: 
-- Validation Frontale: 
Utilisation de la validation côté client avec HTML5 et JavaScript (Natif) pour minimiser les erreurs avant même la soumission du formulaire.

-- Validation Backend: La validation côté serveur doit inclure des mesures pour éviter les attaques de type Cross-Site Scripting (XSS) et Cross-Site Request Forgery (CSRF)

Séparation des Responsabilités : MVC
Critère : La logique métier (modèle), l'interface utilisateur (vue), et le traitement des requêtes (contrôleur) doivent être clairement séparés.

Sécurité:
-- SQL Injection:
Utilisez des requêtes préparées ou des requêtes paramétrées pour interagir avec la base de données, afin de prévenir les attaques SQL 
injection.
Effectuez une validation et une échappement des données d'entrée pour éviter toute injection malveillante.

-- XSS (Cross-Site Scripting) :
Appliquez une échappement approprié aux données avant de les afficher dans les pages HTML pour éviter les attaques XSS.

