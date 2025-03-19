# Gestion de Tâches - Tests Automatisés

Ce projet est une application de gestion de tâches avec des tests automatisés utilisant **PHPUnit, Selenium, Cypress et JMeter/k6**. Il permet d'ajouter, supprimer et récupérer des tâches tout en assurant la qualité du code grâce aux tests unitaires, end-to-end et de performance.

-----

## Fonctionnalités

- Ajouter une tâche
- Supprimer une tâche  
- Récupérer une tâche spécifique  
- Exécuter des tests unitaires avec **PHPUnit**  
- Tester l'interface utilisateur avec **Selenium & Cypress**  
- Simuler des charges utilisateur avec **JMeter/k6**  

-----

## Technologies utilisées

- **PHP 8.4.4** - Langage backend  
- **PHPUnit** - Tests unitaires  
- **Selenium IDE** - Tests end-to-end  
- **Cypress** - Automatisation des scénarios utilisateur  
- **JMeter / k6** - Tests de performance  

-----

## Installation

### 1. Cloner le projet
```sh
git clone https://github.com/votre-utilisateur/gestion-taches.git
cd gestion-taches

```

### 2. Installer les dépendances PHP
```sh
composer install
```

### 3. Configurer Selenium

### 4. Installer JMeter
JMeter : https://jmeter.apache.org/download_jmeter.cgi

## Éxécution des tests

### Tests unitaires avec PHPUnit
```sh
php ./vendor/bin/phpunit tests
OU
vendor/bin/phpunit --testdox tests
```

## Résulat des tests

```sh
Type de Test	          Outil    	    Statut
Tests unitaires	          PHPUnit	    ✅ OK
Tests E2E	          Selenium	    ✅ OK
Tests de charge	          JMeter	    ✅ OK
```

## Améliorations futures

Améliorer l’interface utilisateur pour une meilleure expérience.
Optimiser les performances pour gérer un nombre d’utilisateurs plus élevé.
Ajouter une base de données pour la persistance des tâches
Automatiser le déploiement avec CI/CD

 ## Rapport de validation
 Lien vers le rapport de validation: https://docs.google.com/document/d/10AS7alcnS9GJPg2dSo2YC_3MKvb3Lfkfh0suGH4c9vE/edit?tab=t.0
