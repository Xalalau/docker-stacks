# Base on the mediawiki image
FROM mediawiki:1.38.4

# Update
RUN apt-get update && apt-get upgrade -y

# install runtime packages
RUN set -eux; \
	\
	apt-get update; \
	apt-get install -y --no-install-recommends \
		lua5.4 \
		ffmpeg \
	; \
	rm -rf /var/lib/apt/lists/*

# environment settings
ENV MEDIAWIKI_VERSION_MAJOR=1
ENV MEDIAWIKI_VERSION_MINOR=38
ENV MEDIAWIKI_VERSION_BUGFIX=4
ENV MEDIAWIKI_VERSION=v$MEDIAWIKI_VERSION_MAJOR\_$MEDIAWIKI_VERSION_MINOR\_$MEDIAWIKI_VERSION_BUGFIX
ENV MEDIAWIKI_BRANCH=REL$MEDIAWIKI_VERSION_MAJOR\_$MEDIAWIKI_VERSION_MINOR
ENV MEDIAWIKI_STORAGE_PATH=/var/www/html

# copy configs
COPY ./mediawiki/LocalSettings.php $MEDIAWIKI_STORAGE_PATH/LocalSettings.php

# config the database
ARG MYSQL_HOST
ARG MYSQL_DATABASE
ARG MYSQL_USER
ARG MYSQL_PASSWORD

RUN sed -i "s/MYSQL_HOST/$MYSQL_HOST/g" "$MEDIAWIKI_STORAGE_PATH/LocalSettings.php" && \
    sed -i "s/MYSQL_USER/$MYSQL_USER/g" "$MEDIAWIKI_STORAGE_PATH/LocalSettings.php"  && \
    sed -i "s/MYSQL_PASSWORD/$MYSQL_PASSWORD/g" "$MEDIAWIKI_STORAGE_PATH/LocalSettings.php" && \
    sed -i "s/MYSQL_DATABASE/$MYSQL_DATABASE/g" "$MEDIAWIKI_STORAGE_PATH/LocalSettings.php"

# download UploadWizard extension
RUN mkdir -p $MEDIAWIKI_STORAGE_PATH/extensions/UploadWizard && \
    git clone \
        --branch ${MEDIAWIKI_BRANCH} \
        --single-branch \
        --depth 1 \
        https://gerrit.wikimedia.org/r/mediawiki/extensions/UploadWizard \
        $MEDIAWIKI_STORAGE_PATH/extensions/UploadWizard && \
    rm -rf $MEDIAWIKI_STORAGE_PATH/extensions/UploadWizard/.git*

# download UserMerge extension
RUN mkdir -p $MEDIAWIKI_STORAGE_PATH/extensions/UserMerge && \
    git clone \
        --branch ${MEDIAWIKI_BRANCH} \
        --single-branch \
        --depth 1 \
        https://gerrit.wikimedia.org/r/mediawiki/extensions/UserMerge \
        $MEDIAWIKI_STORAGE_PATH/extensions/UserMerge && \
    rm -rf $MEDIAWIKI_STORAGE_PATH/extensions/UserMerge/.git*

# download TemplateStyles extension
RUN mkdir -p $MEDIAWIKI_STORAGE_PATH/extensions/TemplateStyles && \
        git clone \
        --branch ${MEDIAWIKI_BRANCH} \
        --single-branch \
        --depth 1 \
        https://gerrit.wikimedia.org/r/mediawiki/extensions/TemplateStyles \
        $MEDIAWIKI_STORAGE_PATH/extensions/TemplateStyles && \
    rm -rf $MEDIAWIKI_STORAGE_PATH/extensions/TemplateStyles/.git*

# download TemplateWizard extension
RUN mkdir -p $MEDIAWIKI_STORAGE_PATH/extensions/TemplateWizard && \
        git clone \
        --branch ${MEDIAWIKI_BRANCH} \
        --single-branch \
        --depth 1 \
        https://gerrit.wikimedia.org/r/mediawiki/extensions/TemplateWizard \
        $MEDIAWIKI_STORAGE_PATH/extensions/TemplateWizard && \
    rm -rf $MEDIAWIKI_STORAGE_PATH/extensions/TemplateWizard/.git*

# download TimedMediaHandler extension
RUN mkdir -p $MEDIAWIKI_STORAGE_PATH/extensions/TimedMediaHandler && \
        git clone \
        --branch ${MEDIAWIKI_BRANCH} \
        --single-branch \
        --depth 1 \
        https://gerrit.wikimedia.org/r/mediawiki/extensions/TimedMediaHandler \
        $MEDIAWIKI_STORAGE_PATH/extensions/TimedMediaHandler && \
    rm -rf $MEDIAWIKI_STORAGE_PATH/extensions/TimedMediaHandler/.git*

# download YouTube extension
RUN mkdir -p $MEDIAWIKI_STORAGE_PATH/extensions/YouTube && \
        git clone \
        --branch ${MEDIAWIKI_BRANCH} \
        --single-branch \
        --depth 1 \
        https://gerrit.wikimedia.org/r/mediawiki/extensions/YouTube \
        $MEDIAWIKI_STORAGE_PATH/extensions/YouTube && \
    rm -rf $MEDIAWIKI_STORAGE_PATH/extensions/YouTube/.git*
