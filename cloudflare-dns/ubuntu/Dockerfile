FROM ubuntu:latest

# Container info
LABEL maintainer="xalalau@outlook.com"
LABEL version="2"
LABEL description="Cloudflare DDNS updater"

# ENV
ENV BASE_DIR "/cloudflare-ddns-updater"
ENV SCRIPT="$BASE_DIR/cloudflare-template.sh"
ENV CRON_FILE="/var/spool/cron/crontabs/root"
ENV CRON_LOG="/var/log/cron.log"

# Dir
WORKDIR "$BASE_DIR"

# Disable Prompt During Packages Installation
ARG DEBIAN_FRONTEND=noninteractive

# APT
RUN apt update && \
    apt upgrade -y && \
    apt install -y git sed cron nano curl && \
    rm -rf /var/lib/apt/lists/* && \
    apt clean

# Download script
RUN git clone https://github.com/K0p1-Git/cloudflare-ddns-updater.git "$BASE_DIR"

# Redirect logs
RUN sed -i 's/#!\/bin\/bash//g' "$SCRIPT" && \
    echo '#!/bin/bash' > temp && \
    echo 'function logger() {' >> temp && \
    echo "    local out='$CRON_LOG'" >> temp && \
    echo '    echo "$1" >> "$out"' >> temp && \
    echo '}' >> temp && \
    cat "$SCRIPT" >> temp && \
    mv temp "$SCRIPT" && \
    sed -i "s/logger -s/logger/g" "$SCRIPT"

# Add executable permission
RUN chmod +x "$SCRIPT"

# Script settings
ARG AUTH_EMAIL
ARG AUTH_METHOD
ARG AUTH_KEY
ARG ZONE_IDENTIFIER
ARG RECORD_NAME
ARG TTL
ARG PROXY
ARG SITENAME
ARG SLACKCHANNEL
ARG SLACKURI
ARG DISCORDURI

RUN sed -i "s/auth_email=\"\"/auth_email=\"$AUTH_EMAIL\"/g" "$SCRIPT" && \
    sed -i "s/auth_method=\"token\"/auth_method=\"$AUTH_METHOD\"/g" "$SCRIPT" && \
    sed -i "s/auth_key=\"\"/auth_key=\"$AUTH_KEY\"/g" "$SCRIPT" && \
    sed -i "s/zone_identifier=\"\"/zone_identifier=\"$ZONE_IDENTIFIER\"/g" "$SCRIPT" && \
    sed -i "s/record_name=\"\"/record_name=\"$RECORD_NAME\"/g" "$SCRIPT" && \
    sed -i "s/ttl=3600/ttl=$TTL/g" "$SCRIPT" && \
    sed -i "s/proxy=\"false\"/proxy=\"$PROXY\"/g" "$SCRIPT" && \
    sed -i "s/sitename=\"\"/sitename=\"$SITENAME\"/g" "$SCRIPT" && \
    sed -i "s/slackchannel=\"\"/slackchannel=\"$SLACKCHANNEL\"/g" "$SCRIPT" && \
    sed -i "s/slackuri=\"\"/slackuri=\"$SLACKURI\"/g" "$SCRIPT" && \
    sed -i "s/discorduri=\"\"/discorduri=\"$DISCORDURI\"/g" "$SCRIPT"

# Create crontab
ARG INTERVAL_MIN

RUN touch "$CRON_FILE" && \
    chmod 600 "$CRON_FILE" && \
    echo "*/$INTERVAL_MIN * * * * /bin/bash $SCRIPT" >> "$CRON_FILE" && \
    touch "$CRON_LOG" && \
    chmod 644 "$CRON_LOG" && \
    echo "Cloudflare DNS script installed." >> "$CRON_LOG"

# Hook the command
CMD cron && tail -f "$CRON_LOG"
