

## ✅ Sujet du TP : Créer un mini site avec 3 pages statiques dans Laravel

---

### 🎯 Objectifs pédagogiques

* Comprendre le système de routes dans Laravel
* Intégrer du HTML/CSS existant dans des vues Blade
* Utiliser un contrôleur pour rendre les vues
* Structurer un layout commun avec Blade
* Utiliser les commandes basiques de Git

---

## 📝 Livrables à produire

* Projet Laravel fonctionnel
* Trois pages avec navigation : Home, About, Contact
* Un contrôleur propre (`PageController`)
* Un layout Blade commun
* Une branche `draft`
* Trois commits distincts et explicites
* Lien vers le dépôt GitHub

---

## 📦 Fichiers fournis

Un fichier `.zip` contenant les fichiers suivants :

```
├── index.html       → contenu de la page Home
├── about.html       → contenu de la page About
├── contact.html     → contenu de la page Contact
└── style.css        → style commun aux trois pages
```

---

## 📌 Étapes à suivre

---

### ✅ Étape 0 – Préparation

* Crée un nouveau projet Laravel (`sitepages`)
* Initialise un dépôt Git
* Crée une branche de travail nommée `draft`

```bash
git init
git checkout -b draft
```

---

### ✅ Étape 1 – Intégrer les pages HTML dans des vues Laravel

* Crée trois vues Blade : `home.blade.php`, `about.blade.php`, `contact.blade.php`
* Copie le contenu des fichiers HTML dans les vues correspondantes
* Crée trois routes Laravel (sans contrôleur) pour `/`, `/about`, `/contact`
* Configurer correctmen les liens dans le `header`

🔁 **Commit 1 – Message recommandé :**

```
🎯 Étape 1 : intégration des pages HTML en vues Blade avec routes simples
```

---

### ✅ Étape 2 – Ajouter un contrôleur

* Crée un `PageController`
* Déplace la logique des routes dans les méthodes du contrôleur

🔁 **Commit 2 – Message recommandé :**

```
🚀 Étape 2 : mise en place du contrôleur PageController pour gérer les vues
```

---

### ✅ Étape 3 – Créer un layout Blade

* Crée un layout Blade (`layouts.app`)
* Place dans ce layout le HTML commun (doctype, `<head>`, navigation…)
* Refactore les vues `home`, `about`, `contact` pour utiliser `@extends` et `@section('content')`

🔁 **Commit 3 – Message recommandé :**

```
🎨 Étape 3 : ajout d’un layout Blade commun pour toutes les pages
```

---
## ✅ Résultat attendu

* Un mini-site Laravel avec 3 pages statiques propres
* Navigation fonctionnelle
* Un layout propre et réutilisable
* Une branche `draft` bien organisée
* Trois commits clairs
* Un lien vers ton dépôt GitHub
