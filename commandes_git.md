# Commandes git


#### permet de verifier la version du git installé.
    git --version

#### permet.
    git config --global user.name "Prénom Nom"

#### permet.
    git config --global user.email nomprenom@example.com

#### permet d'afficher facilement la configuration globale de Git.
    git config --global --list

#### initialiser le projet Git.
    git init

#### permet.
    git add README.md

#### permet.
    git commit -m"Mon premier commit"

#### va automatiquement créer un dépôt Git local lié au dépôt distant.
    git clone git@github.com:danian3wa/reflections.git

#### permet.
    git clone git@github.com:danian3wa/reflections.git nouveau_nom

#### permet de visualiser les fichier non-suivis, modifiés ou indexés.
    git status

#### fichier permet.
    git add .gitignore

#### annuler les modifications effectuées sur un fichier, afin de rétablir son état par rapport au dernier commit en date.
    git restore element_cibe

#### le fichier reviendra dans les fichiers modifiés/non-suivis, selon son état initial. En revanche, les modifications apportées à ce fichier ne seront pas perdues.
    git restore element_cibe --staged

#### Lorsque l'on souhaite déplacer "proprement" un fichier ou un répertoire.
    git mv dossier_cibe nouveau_dossier_cibe

#### perme de supprimer un fichier de l'espace de travail et de l'index de Git.
    git rm element_cibe

#### permet de supprimer un fichier de l'index de Git sans pour autant supprimer celui-ci de l'espace de travail.
    git rm downloads/file.txt --cached


## Fichier .gitignore

    #permet d'ajouter un commentaire

    * permet d'ignorer tous les éléments répondant à un certain pattern, par exemple *.docx ignore tous les documents Word

    ! permet d'ajouter une exception à l'une des règles préalablement écrites, par exemple !documentation.docx

    /fichier-temporaire.tmp permet d'ignorer le fichier fichier-temporaire.tmp situé à la racine du projet

    build/ ignore tous les éléments situés dans le répertoire build

    # pas de fichiers .pdf
    *.pdf

    # mais suivre documentation.pdf malgré la règle précédente
    !documentation.pdf

    # ignorer le fichier TODO à la racine du projet
    /TODO

    # ignorer tous les fichiers dans le répertoire cache
    cache/

    # ignorer tous les fichiers .txt sous le répertoire doc/
    doc/**/*.txt


#### possible de configurer un fichier .gitignore global à l'ensemble du poste de travail.
    git config --global core.excludesfile ~/.gitignore 

#### permet d'effectuer des comparaisons entre plusieurs sources de données Git, permet de comparer l'état des fichiers depuis le dernier commit.
    git diff

#### permet de visualiser le détail de changements par mots plutôt que par ligne.
    git diff --color-words

#### Si des modifications ont déjà été ajoutées à la zone de staging, elles ne seront pas visibles par défaut.
    git diff --cached

#### permet de synchroniser le projet versionné localement avec son dépôt distant.
    git remote add origin git@github.com:danian3wa/reflections.git

#### permet de lister les différents dépôts auxquels le projet est rattaché.
    git remote -v

#### permet de visualiser les détails d'un dépôt déjà configuré.
    git remote show nom_du_depot

#### récupère les informations liées à la branche exemple_fetch_branch présente sur le dépôt distant, mais aucune modification réelle du projet local n'a été effectuée.
    git fetch

#### va quant à elle intégrer localement les modifications présentes sur le dépôt distant.
    git merge

#### permet d'effectuer les commande git fetch et git merge en une seule fois. les modifications présentes sur le dépôt distant sont immédiatement intégrées au projet local.
    git pull

#### envoie les modifications locales vers le dépôt distant nommé origin et met à jour la branche exemple_pull_branch.
    git puch origin exemple_pull_branch

####  permet
    git remote add gitlab https://gitlab.com/dan.ian3wa/reveal.js

####  permet
    git remote rename origin old-origin

####  permet
    git remote add origin https://gitlab.com/dan.ian3wa/reveal.js

####  permet
    git remote remove old-origin

####  permet
    git push origin master

#### affiche tous les commits de la branche, du plus récent au plus ancien.
    git log

#### présente pour chaque commit les éléments modifiés en préfixant par - les suppressions, et par + les ajouts.
    git log -p

#### permet de visualiser de manière concise les modifications réalisées dans chaque commit.
    git log --stat

#### affiche les deux derniers commits présents sur la branche.
    git log -2

#### l'historique des modifications apportées par les deux derniers commits est affiché.
    git log -p -2

#### crée un alias global dans la configuration de Git nommé nom_alias et renvoyant à la commande git commande_git.
    git config --global alias.{nom_alias} {commande_git}

#### crée un alias global dans la configuration de Git nommé logmodif et renvoyant à la commande git log -p.
    git config --global alias.logmodif 'git log -p'

#### utilisation de  l'alias global dans la configuration de Git nommé logmodif et renvoyant à la commande git log -p
    git logmodif

#### Définissez un alias qui permettra d'afficher l'historique de votre projet, avec un résumé condensé des dernières modifications pour les 5 derniers commit.
    git config --global alias.last-5 'log --stat -5' 

#### le résultat obtenu affiche chaque commit de l'historique sur une seule ligne. Chaque ligne contient alors l'identifiant unique du commit, la branche sur laquelle il se trouve, et son commentaire.
    git log --pretty=oneline

#### affiche sur plusieurs lignes, pour chaque commit, son identifiant unique avec la branche concernée, le nom de l'auteur du commit et le commentaire associé.
    git log --pretty=short

#### va afficher des informations supplémentaires à celles déjà présentes avec l'option short.
    git log --pretty=fuller

#### affiche les résultats comme avec l'utilisation de git log --pretty=oneline, en tronquant l'identifiant des commits.
    git log --oneline

#### affichent un résumé de l'identifiant du commit suivi du nom de l'auteur, de la date au format date définie dans la configuration de Git, puis du commentaire du commit.
    git log --pretty=format:"%h - %an, %ad : %s"

#### affiche une version courte des identifiants des commits et les commentaires associés.
    git log --pretty=format:"%h : %s"

#### permet d'afficher sous la forme d'un graphique les arborescences des branches contenues dans l'historique.
    git log --graph

#### affiche l'arborescence des branches et, pour chacun des commits, son identifiant au format court et le commentaire qui lui est associé.
    git log --graph --pretty=format:"%h : %s"

#### affiche tous les commits depuis la veille, et les formate pour n'afficher que leur identifiant au format court et leur commentaire.
    git log --since=yesterday  --pretty=format:"%h : %s"

#### affiche les commits dans le même format que précédemment, mais affiche tous les commits jusqu'à deux jours en arrière.
    git log --since=2.days  --pretty=format:"%h : %s"

####  affiche les commits dont les modification contiennent la chaîne de caractères Hello et affiche les informations par défaut des commits, puis montre le détail des modifications qu'ils contiennent.
    git log -SHello -p

#### Afficher les commits d'un auteur spécifique
    git log --author="author"

#### permet de Basculement sur la nouvelle branche '8.x' la branche '8.x' est paramétrée pour suivre 'origin/8.x'.
    git checkout 8.x

#### permettra d'afficher l'historique de tous les commits depuis 30 jours, ainsi que les branches dont ils proviennent. Ces messages seront affichés sous la forme : identifiant_court - message_commit  - auteur, le date.
    git log --graph --since=30.days --pretty=format:"%h - %s - %an - %ad"


#### Commande permettant l'affichage : identifiant_court_commit [de couleur rouge] : message de commit (il y a X [de couleur verte]) - auteur [de couleur bleue]
    git log --graph --pretty=format:'%Cred%h%Creset -%d %s (%Cgreen%cr%Creset) - %Cblue%an' --abbrev-commit

#### Ajout en tant qu'alias, à nommer selon votre convenance, ici log-defi
    git config --global alias.log-defi "log --graph --pretty=format:'%Cred%h%Creset -%d %s (%Cgreen%cr%Creset) - %Cblue%an' --abbrev-commit"

#### Afficher les commits présents sur une branche et pas une autre
    git log-defi branche1..banche2

#### Afficher les commits de la dernière semaine
    git log-defi --since="1 week ago"

#### Afficher les commits des deux derniers mois
    git log-defi --since="2 months ago"

#### Afficher les commits d'un auteur spécifique
    git log-defi --author="Fabien"

#### Afficher les commits contenant un message spécifique 
    git log-defi --grep="contenu à rechercher"