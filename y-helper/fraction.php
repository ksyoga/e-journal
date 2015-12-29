$ heroku pg:backups capture
$ curl -o latest.dump `heroku pg:backups public-url`
"Translate" it into a postgres db with

$ pg_restore --verbose --clean --no-acl --no-owner -h localhost -U myuser -d mydb latest.dump
See https://devcenter.heroku.com/articles/heroku-postgres-import-export