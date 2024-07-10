#!/bin/bash

# Prompt the user for the current SA password
read -sp "Enter current SA password: " current_password
echo

# Prompt the user for the new SA password
read -sp "Enter new SA password: " new_password
echo

# Execute the sqlcmd command to change the SA password
sudo docker exec -it sql1 /opt/mssql-tools/bin/sqlcmd \
    -S localhost -U SA \
    -P "$current_password" \
    -Q "ALTER LOGIN SA WITH PASSWORD='$new_password'"
