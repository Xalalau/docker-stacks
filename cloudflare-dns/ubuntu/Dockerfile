FROM ubuntu:22.04

LABEL maintainer="xalalau@outlook.com"
LABEL version="0.1"
LABEL description="Keep DNS A record updated"

# Disable Prompt During Packages Installation
ARG DEBIAN_FRONTEND=noninteractive

RUN apt update
RUN apt upgrade -y
RUN apt install git sed -y

WORKDIR /cloudflare-ddns-updater

RUN git clone https://github.com/K0p1-Git/cloudflare-ddns-updater.git ./

ARG EMAIL
ARG AUTH_KEY
ARG ZONE_ID
ARG RECORD_NAME
ARG SITENAME
ARG INTERVAL_MIN

ENV SCRIPT="cloudflare-template.sh"

RUN sed -i "s/auth_email=\"\"/auth_email=\"$EMAIL\"/g" "$SCRIPT" && \
    sed -i "s/auth_key=\"\"/auth_key=\"$AUTH_KEY\"/g" "$SCRIPT" && \
    sed -i "s/zone_identifier=\"\"/zone_identifier=\"$ZONE_ID\"/g" "$SCRIPT" && \
    sed -i "s/record_name=\"\"/record_name=\"$RECORD_NAME\"/g" "$SCRIPT" && \
    sed -i "s/sitename=\"\"/sitename=\"$SITENAME\"/g" "$SCRIPT"

RUN crontab -l > mycron
RUN echo "*/$INTERVAL_MIN * * * * /bin/bash /cloudflare-ddns-updater/cloudflare-template.sh" >> mycron
RUN crontab mycron
RUN rm mycron
