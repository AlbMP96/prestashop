#!/bin/bash
docker compose exec basedatos bash -c "mysqldump -u user -p db" > db/backup.sql