# samplephpwebsite-tp

## Versions
3 branches, chaque branche correspond à une version.
- v1 
- v2
- v3

## Files
Dans chaque branche est present :
- Dockerfile
- Docker Compose
- Jenkinsfile pour la pipeline
- Dossier Tests pour les test des functions
- Fichier `start.sh` pour compiler la version

## Start
Pour  lancer le projet entrer la  commande suivante sur la version de votre choix:
```
./start.sh
```

## Jenkins
Pour la pipeline Jenkins, configuer une pipeline avec le Jenkinsfile, en entrant dans la configuration un Trigger pour configuer le cron de la pipeline toutes les heures en mettant : 
```
0 * * * *
```


La pipeline package automatiquement l'application dans une image Docker.

Il execute egalement un script de test pour verifier les functions du site.

Pour lancer un container Docker Jenkins : 
```
docker run -p 8080:8080 -v /var/run/docker.sock:/var/run/docker.sock --name jenkins jenkins/jenkins:lts
```

 Ne pas oublier de mettre Docker sur le container Docker.

 Executer ensuite:
 ```
 docker exec -it jenkins bash
 apt-get update && apt-get install php && apt-get install phpunit
 ```
 Cela permet d'installer php et phpunit sur le container docker afin d'effectuer les tests  des functions.


