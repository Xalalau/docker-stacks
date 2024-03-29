# Pulling Alpine image
FROM alpine:latest

# Updating the packages
RUN apk update && \
apk upgrade --available && sync

# Get mysqldump and nano
RUN apk add --no-cache mysql-client nano

# https://gist.github.com/AntonFriberg/692eb1a95d61aa001dbb4ab5ce00d291

# Alpine built in cron schedules
# min   hour    day     month   weekday command
# */15    *       *       *       *       run-parts /etc/periodic/15min
# 0       *       *       *       *       run-parts /etc/periodic/hourly
# 0       2       *       *       *       run-parts /etc/periodic/daily
# 0       3       *       *       6       run-parts /etc/periodic/weekly
# 0       5       1       *       *       run-parts /etc/periodic/monthly

# Place script in appropriate folder
COPY ./backup/backup.sh /etc/periodic/daily/backup

# Change env vars to their actual values
ARG MYSQL_HOST
ARG MYSQL_DATABASE
ARG MYSQL_USER
ARG MYSQL_PASSWORD
ARG BACKUP_RETENTION

RUN sed -i "s/MYSQL_HOST/$MYSQL_HOST/g" "/etc/periodic/daily/backup" && \
    sed -i "s/MYSQL_USER/$MYSQL_USER/g" "/etc/periodic/daily/backup"  && \
    sed -i "s/MYSQL_PASSWORD/$MYSQL_PASSWORD/g" "/etc/periodic/daily/backup" && \
    sed -i "s/MYSQL_DATABASE/$MYSQL_DATABASE/g" "/etc/periodic/daily/backup" && \
    sed -i "s/BACKUP_RETENTION/$BACKUP_RETENTION/g" "/etc/periodic/daily/backup"

# Giving executable permission to script file
RUN chmod +x /etc/periodic/daily/backup

# bash-4.4# crond --help
# BusyBox v1.28.4 (2018-05-30 10:45:57 UTC) multi-call binary.
# Usage: crond -fbS -l N -d N -L LOGFILE -c DIR
#        -f      Foreground
#        -b      Background (default)
#        -S      Log to syslog (default)
#        -l N    Set log level. Most verbose 0, default 8
#        -d N    Set log level, log to stderr
#        -L FILE Log to FILE
#        -c DIR  Cron dir. Default:/var/spool/cron/crontabs 

# This runs cron in the foreground with loglevel 2
CMD [ "crond", "-l", "2", "-f" ]
