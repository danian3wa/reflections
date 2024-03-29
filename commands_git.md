# Commands git


#### permet de verifier la version de git installé.

```bash
git --version
```

#### permet.

```bash
git config --global user.name "Prénom Nom"
```

#### permet.

```bash
git config --global user.email nomprenom@example.com
```

#### permet d'afficher facilement la configuration globale de Git.

```bash
git config --global --list
```

#### initialiser le projet Git.

```bash
git init
```

#### permet.

```bash
git add README.md
```

#### permet.
   
```bash
git commit -m"Mon premier commit"
```

#### va automatiquement créer un dépôt Git local lié au dépôt distant.

```bash
git clone git@github.com:danian3wa/reflections.git
```

#### permet.

```bash
git clone git@github.com:danian3wa/reflections.git nouveau_nom
```

#### permet de visualiser les fichier non-suivis, modifiés ou indexés.

```bash
git status
```

#### fichier permet.

```bash
git add .gitignore
```

#### annuler les modifications effectuées sur un fichier, afin de rétablir son état par rapport au dernier commit en date.

```bash
git restore element_cibe
```

#### le fichier reviendra dans les fichiers modifiés/non-suivis, selon son état initial. En revanche, les modifications apportées à ce fichier ne seront pas perdues.

```bash
git restore element_cibe --staged
```

#### Lorsque l'on souhaite déplacer "proprement" un fichier ou un répertoire.

```bash
git mv dossier_cibe nouveau_dossier_cibe
```

#### perme de supprimer un fichier de l'espace de travail et de l'index de Git.

```bash
git rm element_cibe
```

#### permet de supprimer un fichier de l'index de Git sans pour autant supprimer celui-ci de l'espace de travail.

```bash
git rm downloads/file.txt --cached
```

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

```bash
git config --global core.excludesfile ~/.gitignore 
```

#### permet d'effectuer des comparaisons entre plusieurs sources de données Git, permet de comparer l'état des fichiers depuis le dernier commit.

```bash
git diff
```

#### permet de visualiser le détail de changements par mots plutôt que par ligne.

```bash
git diff --color-words
```

#### Si des modifications ont déjà été ajoutées à la zone de staging, elles ne seront pas visibles par défaut.

```bash
git diff --cached
```

#### permet de synchroniser le projet versionné localement avec son dépôt distant.

```bash
git remote add origin git@github.com:danian3wa/reflections.git
```

#### permet de lister les différents dépôts auxquels le projet est rattaché.

```bash
git remote -v
```

#### permet de visualiser les détails d'un dépôt déjà configuré.

```bash
git remote show nom_du_depot
```

#### récupère les informations liées à la branche exemple_fetch_branch présente sur le dépôt distant, mais aucune modification réelle du projet local n'a été effectuée.

```bash
git fetch
```

#### va quant à elle intégrer localement les modifications présentes sur le dépôt distant.

```bash
git merge
```

#### permet d'effectuer les commande git fetch et git merge en une seule fois. les modifications présentes sur le dépôt distant sont immédiatement intégrées au projet local.

```bash
git pull
```

#### envoie les modifications locales vers le dépôt distant nommé origin et met à jour la branche exemple_pull_branch.

```bash
git puch origin exemple_pull_branch
```

####  permet

```bash
git remote add gitlab https://gitlab.com/dan.ian3wa/reveal.js
```

####  permet

```bash
git remote rename origin old-origin
```

####  permet

```bash
git remote add origin https://gitlab.com/dan.ian3wa/reveal.js
```

####  permet

```bash
git remote remove old-origin
```

####  permet

```bash
git push origin master
```

#### affiche tous les commits de la branche, du plus récent au plus ancien.

```bash
git log
```

#### présente pour chaque commit les éléments modifiés en préfixant par - les suppressions, et par + les ajouts.

```bash
git log -p
```

#### permet de visualiser de manière concise les modifications réalisées dans chaque commit.

```bash
git log --stat
```

#### affiche les deux derniers commits présents sur la branche.

```bash
git log -2
```

#### l'historique des modifications apportées par les deux derniers commits est affiché.

```bash
git log -p -2
```

#### crée un alias global dans la configuration de Git nommé nom_alias et renvoyant à la commande git commande_git.

```bash
git config --global alias.{nom_alias} {commande_git}
```

#### crée un alias global dans la configuration de Git nommé logmodif et renvoyant à la commande git log -p.

```bash
git config --global alias.logmodif 'git log -p'
```

#### utilisation de  l'alias global dans la configuration de Git nommé logmodif et renvoyant à la commande git log -p

```bash
git logmodif
```

#### Définissez un alias qui permettra d'afficher l'historique de votre projet, avec un résumé condensé des dernières modifications pour les 5 derniers commit.

```bash
git config --global alias.last-5 'log --stat -5' 
```

#### le résultat obtenu affiche chaque commit de l'historique sur une seule ligne. Chaque ligne contient alors l'identifiant unique du commit, la branche sur laquelle il se trouve, et son commentaire.

```bash
git log --pretty=oneline
```

#### affiche sur plusieurs lignes, pour chaque commit, son identifiant unique avec la branche concernée, le nom de l'auteur du commit et le commentaire associé.
   
```bash
 git log --pretty=short
```

#### va afficher des informations supplémentaires à celles déjà présentes avec l'option short.

```bash
git log --pretty=fuller
```

#### affiche les résultats comme avec l'utilisation de git log --pretty=oneline, en tronquant l'identifiant des commits.

```bash
git log --oneline
```

#### affichent un résumé de l'identifiant du commit suivi du nom de l'auteur, de la date au format date définie dans la configuration de Git, puis du commentaire du commit.

```bash
git log --pretty=format:"%h - %an, %ad : %s"
```

#### affiche une version courte des identifiants des commits et les commentaires associés.

```bash
git log --pretty=format:"%h : %s"
```

#### permet d'afficher sous la forme d'un graphique les arborescences des branches contenues dans l'historique.

```bash
git log --graph
```

#### affiche l'arborescence des branches et, pour chacun des commits, son identifiant au format court et le commentaire qui lui est associé.

```bash
git log --graph --pretty=format:"%h : %s"
```

#### affiche tous les commits depuis la veille, et les formate pour n'afficher que leur identifiant au format court et leur commentaire.

```bash
git log --since=yesterday  --pretty=format:"%h : %s"
```

#### affiche les commits dans le même format que précédemment, mais affiche tous les commits jusqu'à deux jours en arrière.

```bash
git log --since=2.days  --pretty=format:"%h : %s"
```

####  affiche les commits dont les modification contiennent la chaîne de caractères Hello et affiche les informations par défaut des commits, puis montre le détail des modifications qu'ils contiennent.

```bash
git log -SHello -p
```

#### Afficher les commits d'un auteur spécifique

```bash
git log --author="author"
```

#### permet de Basculement sur la nouvelle branche '8.x' la branche '8.x' est paramétrée pour suivre 'origin/8.x'.

```bash
git checkout 8.x
```

#### permettra d'afficher l'historique de tous les commits depuis 30 jours, ainsi que les branches dont ils proviennent. Ces messages seront affichés sous la forme : identifiant_court - message_commit  - auteur, le date.

```bash
git log --graph --since=30.days --pretty=format:"%h - %s - %an - %ad"
```

#### Commande permettant l'affichage : identifiant_court_commit [de couleur rouge] : message de commit (il y a X [de couleur verte]) - auteur [de couleur bleue]

```bash
git log --graph --pretty=format:'%Cred%h%Creset -%d %s (%Cgreen%cr%Creset) - %Cblue%an' --abbrev-commit
```

#### Ajout en tant qu'alias, à nommer selon votre convenance, ici log-defi

```bash
git config --global alias.log-defi "log --graph --pretty=format:'%Cred%h%Creset -%d %s (%Cgreen%cr%Creset) - %Cblue%an' --abbrev-commit"
```

#### Afficher les commits présents sur une branche et pas une autre

```bash
git log-defi branche1..banche2
```

#### Afficher les commits de la dernière semaine

```bash
git log-defi --since="1 week ago"
```

#### Afficher les commits des deux derniers mois

```bash
git log-defi --since="2 months ago"
```

#### Afficher les commits d'un auteur spécifique

```bash
git log-defi --author="Fabien"
```

#### Afficher les commits contenant un message spécifique 

```bash
git log-defi --grep="contenu à rechercher"
```

#### ajoute des informations supplémentaires, telles que les noms de branches et les tags, aux commits.

```bash
git log --decorate
```

#### donne l'historique des commits pour toutes les branches, et pas seulement la branche actuelle.

```bash
git log --all
```

#### affiche les commits effectués après une date spécifique.

```bash
git log --since=<date>
```

#### affiche les commits effectués après une date spécifique.

```bash
git log --after=<date>
```

#### renseigne sur les commits effectués avant une date spécifique.

```bash
git log --until=<date>
```

#### renseigne sur les commits effectués avant une date spécifique.

```bash
git log --before=<date>
```

#### afficher un graphique en texte de l'historique des commits avec une ligne par commi avec les noms de branches et le tags pour toutes les branches

```bash
git log --graph --oneline --decorate --all
```

#### Créez une nouvelle branche

```bash
$ git branch ma-branche
```

#### permet de basculer entre différentes branches ou de récupérer des fichiers individuels depuis une branche spécifique

```bash
git checkout nom-de-la-branche
```

#### git checkout peut également être utilisé pour créer une nouvelle branche et y basculer en une seule commande

```bash
git checkout -b nom-de-la-nouvelle-branche
```

#### on peut également créer une branche enfant d’une branche parent à partir de n’importe quelle branche existante, même si vous êtes sur la branche master

```bash
git checkout -b nom-branche-enfant branche-existante
```

#### Pour connaître la liste des branches existantes dans votre projet et savoir sur quelle branche vous êtes

```bash
git branch –list
```

#### permet de basculer sur la dernière branche ou vous étiez

```bash
git checkout -
```

#### permet créer « nouvelle-branche » et de travailler dessus. La commande git switch a été introduite dans la version 2.23 de Git, c’est une alternative à la commande git checkout. Elle permet de basculer facilement entre les branches et de créer de nouvelles branches en une seule commande.

```bash
git switch -c nom-de-la-branche
```

#### permet de supprimer une branche qui a été fusionée

```bash
git branch -d nom-de-la-branche
```

#### permet de supprimer une branche qui n'a été fusionée

```bash
git branch -D nom-de-la-branche
```

#### permet de fusionner nos commits à la suite des commits d'une branche commune

```bash
git merge nom-de-la-branche
```

#### permet de récupérer des commits d'une branche commune sur notre branche en cours

```bash
git rebase nom-de-la-branche
```

#### Dans le cas de conflits, il suffit de les résoudre à la main, d'ajouter les fichiers concernés et d'exécuter la commande

```bash
git rebase --continue
```

#### Si, à un moment ou à un autre, nous souhaitons arrêter le rebase

```bash
git rebase --abort
```

#### permet de vérifier que l'upstream n'a pas été modifié entre le moment où nous poussons et la dernière fois que nous avons récupéré la branche
 
```bash
git push --force-with-lease
```

#### Un simple git push --force supprimerait les commits d'autres personnes, là où l'option --force-with-lease fera la vérification et refusera le push le cas échéant.

```bash
git push --force
```

#### 

```bash
git push -u origin master
```

#### permet de faire cela en réécrivant l'historique à partir de notre propre branche, et plus à partir d'une autre branche, grâce à l'option -i. L'option -i, ou --interactive, va nous permettre d'influer sur la liste des commits et les modifier.Le paramètre HEAD\~3 est une notation relative signifiant trois commits avant HEAD (HEAD étant notre dernier commit), en spécifiant le nombre de commits avec \~, par exemple HEAD (le dernier commit), HEAD\~1 (l'avant dernier commit), HEAD\~2 (le troisième commit)...

```bash
git rebase -i HEAD~3
```

#### en spécifiant autant de ^ que de commits en arrière, par exemple HEAD (le dernier commit), HEAD^ (l'avant dernier commit), HEAD^^ (le troisième commit)...

```bash
git rebase -i HEAD^^^
```

#### notation absolue qui est le fait de fournir son hash (court ou long), par exemple f8fe732 ou f8fe732d0d002beb5fdb0ed606226bc36cd51e05

```bash
git rebase -i f8fe732
```

#### Ce que Git nous indique, c'est que nous pouvons préfixer nos lignes par un des choix possibles, les réordonner ou en supprimer. Parmi les choix qui s'offrent à nous, les plus courants sont :

    pick : utilise le commit tel quel, ne le modifie pas

    reword : utilise le commit tel quel, mais propose de modifier son message

    edit : applique le code, mais ne commit pas tout de suite, permettant de modifier le code ; git commit et git rebase --continue permettent de terminer l'opération

    squash : permet de fusionner le commit dans le commit précédent (celui du haut) et permet de modifier son message

    fixup : pareil que squash, mais garde seulement le message du commit précédent

    drop : supprime le commit

#### permet d'agir sur le dernier commit. Par exemple, si vous souhaitez modifier le dernier message de commi

```bash
git commit --amend
```

#### permet de ajuter de modification dans le commit precedent 

```bash
git add file_name
git commit --amend --no-edit
```

#### permet de visualiser 

```bash
git show
```

#### permet de rajouter les fichiers modifiée et les nouveaux fichiers au stage, aussi les fichiers a qui le nom commence par un .

```bash
git add .
```

#### permet de rajouter tout les fichiers dans le repertoire courant au stage, a l'exception au ficier a qui le nom commence par un .

```bash
git add *
```

#### Pour ne plus avoir à rename la branche principale de votre projet de "master" à "main" 

```bash
git config --global init.defaultBranch main
```

#### permet de creer un commit vide

```bash
git commit -m"Initial revision" --allow-emty
```

#### permet d'efacer la branche distante

```bash
git push origin --delete nom_de_la branche
```

#### permet de push sur la branche master apres git reset ou git reverse

```bash
git push origin master --forcee
```

#### permet de fusioner des branche en incluant un seul commit

```bash
git cherry-pick 9245693612b451c7be67a093d1703891eaa3da41
```

#### Cible un commit et créer un nouveau commit qui applique l'inverse de ses modifications

```bash
git revert 9245693612b451c7be67a093d1703891eaa3da41
```

#### Avec cette commande on peut annuler la sélection de fichier faite avec git add, mais on peut aussi annuler des commits

```bash
git reset --hard HEAD~2
```

#### show git flow options

```bash
git flow -h
```

#### initialize flow with default values

```bash
git flow init -d
```

#### show branch

```bash
git branch -avv
```

#### starts a new branch 

```bash
git flow feature start pages
```

#### partager une brance en cours d'eleboration

```bash
git flow  feature publish
```

####

```bash
git flow feature finish
```

####

```bash
git flow release start v1
```

####

```bash
git flow release finish
```

####

```bash
git config --global core.autocrlf false
```

####

```bash
git config core.autocrlf
```

#### sets your global Git username to Firstname Lastname

```bash
git config --global user.name "Jhon DOE"
```

#### sets your global Git email address

```bash
git config --global user.email jhon.doe@gmail.com
```

#### lists all of your global Git configuration settings

```bash
git config --global --list
```

####

```bash
ssh -T git@github.com
```

####

```bash
ssh -vT git@github.com
```

####

```bash
 ssh -T jhondoe@github.com
```