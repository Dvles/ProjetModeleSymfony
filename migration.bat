@REM effacer les fichier de migration

echo coucou
del migrations\V*
@REM effacer la BD
symfony console doctrine:database:drop --force

@REM créer la BD
symfony console doctrine:database:create

@REM créer une migration
symfony console make:migration --no-interaction

@REM lancer la migration
symfony console doctrine:migrations:migrate --no-interaction