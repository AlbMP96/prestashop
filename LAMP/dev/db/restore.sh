#!/bin/bash
docker compose exec basedatos bash -c "mysql -u user -p db < backup/backup.sql"