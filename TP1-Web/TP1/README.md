#  Instructions

## Objectifs

- Identifier la vulnérabilité d'injection SQL présente dans le code de l'application ;
- Créer un script Python permettant de l'exploiter pour récupérer le mot de passe du compte `admin` :
  - Dans un premier temps, le script doit extraire la longueur du mot de passe ;
  - Puis il doit extraire le mot de passe en lui-même en s'aidant de la longueur précédemment extraite ;
  - Vous pouvez utiliser l'algorithme de votre choix mais une recherche binaire (`https://en.wikipedia.org/wiki/Binary_search_algorithm`) est fortement conseillée ;
  - Une fois le mot de passe récupéré, connectez-vous (`POST /login.php`) et récupérez le flag (`GET /home.php`). *Pensez à prendre le cookie de connexion !*

Vous pouvez déployer le code en local avec docker-compose : `docker-compose up` pour tester votre script.

La validation du TP se fera en exploitant en live une version déployée autre part (la longueur du mot de passe et son contenu seront différents).

## Notation 

- Exactitude de la longueur du mot de passe : moitié des points
- Exactitude du mot de passe récupéré : l'autre moitié des points

Vous avez droit à autant de tentatives d'exploitation que possible avant la fin de la séance.

