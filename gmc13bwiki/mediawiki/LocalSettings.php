<?php
# This file was automatically generated by the MediaWiki 1.39.1
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See docs/Configuration.md for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "gm_construct 13 beta";
$wgMetaNamespace = "gm_construct_13_beta";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";
$wgArticlePath = "/wiki/$1";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "https://gm13.xalalau.com";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [
	'1x' => "data:image/png;base64,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",
	'icon' => "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAABhWlDQ1BJQ0MgcHJvZmlsZQAAKJF9kT1Iw1AUhU9TS0UqDnYQcQhSnSyIijpKFYtgobQVWnUweekfNGlIUlwcBdeCgz+LVQcXZ10dXAVB8AfE1cVJ0UVKvC8ptIjxwuN9nHfP4b37AKFRYarZNQ6ommWk4jExm1sVg68IYAA+zGBYYqaeSC9m4Flf99RJdRflWd59f1avkjcZ4BOJ55huWMQbxNObls55nzjMSpJCfE48ZtAFiR+5Lrv8xrnosMAzw0YmNU8cJhaLHSx3MCsZKvEUcURRNcoXsi4rnLc4q5Uaa92TvzCU11bSXKc1hDiWkEASImTUUEYFFqK0a6SYSNF5zMM/6PiT5JLJVQYjxwKqUCE5fvA/+D1bszA54SaFYkDgxbY/RoDgLtCs2/b3sW03TwD/M3Cltf3VBjD7SXq9rUWOgL5t4OK6rcl7wOUOMPCkS4bkSH5aQqEAvJ/RN+WA/lugZ82dW+scpw9Ahma1fAMcHAKjRcpe93h3d+fc/u1pze8HuwpyxFn4RMMAAAAGYktHRAAAAAAAAPlDu38AAAAJcEhZcwAACxMAAAsTAQCanBgAAAAHdElNRQfnBRgBOiJr04QwAAAGzUlEQVRo3u2Za4ycVRnH/88571x3Zna7093ZS7v2wnbrdrfUbXpLrW0pRQigVfpB0pCKDRqVqJFoakSqRg0mIop8EEKMH0wkJAajiEQTQ/qhNq1G0/RiKdmytFS3Ze87t/d9z/P3w8xeipCC3WWH6JOcZCZ55zzP7zzX8w7wf/lPOXj/rv1P/uDAYzfkkO3IITWfumSuN7xz9/JlX3ng08cYBkVYLwxhzx188OG9x/86MjkfAGauN7xp1/Y7iGCxsZoUEyz3rH9Lb2/nrvnywJwDxOKRzaQLxbg0NCTUybZNW296TwC056LJrlWrekRknGRUREasCFLx2Lb3BICIpIzx2gEzCHoQscegRK4p27Jp7ZJFNQ9A0lPVOIDXxAj7+/tPkg7GakYRtNU8gApERATA61QG586dfY2idHAGhnY+ALy53CydqodjBGAsoMg4TfokkYBDNHS0xZr2wKLGtHzs43fvGZuwiXP9Y7dfuBxKc1v3zsClkC9Y19q2sm4+AObMrU3NzckNGzf+dHx0smWyECZHRktJ35kPlYtOLlwYjLe23bDhwsV//nx4eNjVZAgZawOFyfu+gYgHtYQ6h8tDZQBJkNHuumR9A4DLNRlCA/0Dwcjw6DMiVgEDoQHoARKDagShmoEgCIZrNoQAoFwqn+ju6syJsA+gGAEUBhQzOTo69sXnfvfrkzUNMDg4GKSTyRcPfHL/vvr6hoau1avRuaprdHR8Ys+hQ19/vubH6I72Jebo4Re/zNAnnXJKfN9/ZsuWrbbmAb79zYfeTw1GqY6ctl9JDa7cf2B/R80DDJzv/yFZNV5JupBkmeS4PvvEd++t+U5cnz9fQNkDjAFIAAogBIoj0jhyenXNAxz5yRdO7fjgJiQyKYAGMAT8IiYvvYLlQ+d2fUIgTxOsWYBMJrX91ZfPQosTECgicAADeHAw6tb23oj2p/+OizVZRg8euKvv3kOPPLx4/c6EF1+MEiNwiQyQXoywYSkae262y3d8ZORPh/985MqkrzWXwD976sm9dCVHf5T0L5H5U+TYcXLsKDnxN7I8QPqvl77z4Fe31ZzxuVyrIflcpQKVyTBP+mOkP0QGQ2Q4Qro8qWW+0v/St2ouB+748M0tQLATUEAsYOMzU5bMGruoiML11dwwF2VhDOUrI3ATAMOq4aa6fXURgIbIBOO5mkvizJUzur7Jfaa5KZ5FwgIsAToJaB7QAuDygJsAwiHw1OHgxB+ef+rsJIKaCaG9K7Ahc+bZlUPnX0Bj5wcgK9YA6UbAeoASoALFPPDqSxg6caT9zjV2+2/+5eZkuLvuV4u3A/L9fXh8ZdZ+TpQo2gx8E0cgUdDzoKEPzwhECY8lJF0eY5HmF9ofGbitJkLos2vQuWtN4kcRZcIo4UERVR8JLSAWTiDNMqLBJBJaRMwFiCKEqK5YGyv98VcD19/UrjuJb9my+PMRV24UdTAQRMIAcS0h6opIuRLiLo86V0JMS4i4IoyGiLmC2bxU7rtrDvRf1wb7s2hoTkU/6oEwQhgoxJAAZ1xb6bnOKGFlSqmgtaH+1pX1aFpQgO42rIppqcWQMCQqtXLWrMZZn2ayjVZAy6ClrxdbFxRgaRbrBBp7g7lyjWrnSA2IQNZ2Ne9eUIA6h9aIluUtDZdZa4pS6Qk1aoXIpuNb72lCbMEAdq+re1+E/rUL9SwAMQKIQhDC0m+POeQWDCCqpfWC/2YyruRKhKW6javRvCAAjy1BWk10xbWe06klgIqgkvAVxVHmo60W695VgNsA88vN2LKtD98jNfW24mZKGXlVtlgEsu3G2HX9f/aOOvGtgP3aHvPo9u7GH7emdWtUQggVkMoJUwChVM9FAAEoUjX+zYcYMWg50MX6e3pTfSNn/VOnHcrzNgv9dif2be9N/yLpChBoxX3VU1WpGjkFIAqVmZg3b3KVV6k0CAcB4fHlsPnRnicuPjAvIfRQB3p2rK1/PMYCIA4Aq+n7hhMWQI1CZaaxmbd4D2EIQAlPLCIikk2aT+3NvrMJ+W0D5LLIWA3jpvoTwkIpcGKgMuNIJ1f14quMV5Grnp2+9zAENISln25bhI55ATh2EsdOX8jfV9bYGWVCHSNQE4MTD048hDBwItVqU4kkYwCITC8zlcjV7yrTEViNPBm0BsPzlgMA8KU6eEtz6OnpSfYYw1Vi3CKh1nUu72j0GC4zJmixDDM2LEft9JUSECgIo2psyaf4tAmEkBDQUERcqHL6yD8ufuPu34d/eVcvNFOyJQ4TVySWNSLR1Y5sRNHkERGdpcEJCuNlXDp+GuVCBAgFRKUTqiPyR8vw8b8m/wZflTNUYsyXRwAAAABJRU5ErkJggg==",
];

## UPO means: this is also a user preference option

$wgEnableEmail = false;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "nope@nope.com";
$wgPasswordSender = "nope@nope.com";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "MYSQL_HOST";
$wgDBname = "MYSQL_DATABASE";
$wgDBuser = "MYSQL_USER";
$wgDBpassword = "MYSQL_PASSWORD";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

# Site language code, should be one of the list in ./includes/languages/data/Names.php
$wgLanguageCode = "en";

# Time zone
$wgLocaltimezone = "UTC";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
$wgCacheDirectory = "$IP/cache";

$wgSecretKey = "WIKI_SECRET_KEY";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "WIKI_UPGRADE_KEY";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "https://creativecommons.org/licenses/by/4.0/";
$wgRightsText = "Creative Commons Attribution";
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/cc-by.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, e.g. 'vector' or 'monobook':
$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );


# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtension( 'ExtensionName' );
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:
wfLoadExtension( 'AbuseFilter' );
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CiteThisPage' );
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'ConfirmEdit' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'Math' );
wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'OATHAuth' );
wfLoadExtension( 'PageImages' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'Poem' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'Scribunto' );
wfLoadExtension( 'SecureLinkFixer' );
wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'TemplateData' );
wfLoadExtension( 'TextExtracts' );
wfLoadExtension( 'TitleBlacklist' );
wfLoadExtension( 'VisualEditor' );
wfLoadExtension( 'WikiEditor' );

# End of automatically generated settings.
# Add more configuration options below.

# -----------------------------------------------------------------------------------------------------

#error_reporting( -1 );
#ini_set( 'display_errors', 1 );
# Enable more details (like a stack trace) to be shown on the "Fatal error" page.
#$wgShowExceptionDetails = true;
# Shows a toolbar on the page with profiling, log messages and more.
#$wgDebugToolbar = true;
# Adds the "log messages" part of wgDebugToolbar as a raw list to the page.
#$wgShowDebug = true;
# MediaWiki will throw notices for some possible error conditions and for deprecated functions.
#$wgDevelopmentWarnings = true;

#$wgResourceLoaderDebug = true;

$wgInternalServer = "http://127.0.0.1:8080";

$wgGitBin = "/usr/bin/git";
$wgTmpDirectory = "$IP/images/temp";

#$wgCategoryTreeDynamicTag = true;
$wgCategoryTreeDisableCache = true;

$wgVisualEditorUseSingleEditTab = true;
#$wgVisualEditor

# Override the default with a bundle of filetypes:
$wgFileExtensions = [
    'png', 'gif', 'jpg', 'jpeg', 'webp', 'ogg', 'ogv', 'oga',
    'flac', 'opus', 'wav', 'webm', 'mp3', 'midi', 'mid', 'mpg',
    'mpeg', 'mp4' # !!!! Update .htaccess as well after making changes
];

# DEFAULT OPTIMIZATIONS
    # Improve Vector 2010 mobile experience
    $wgVectorResponsive = true;

    # Shared memory settings
    #$wgMainCacheType configured above
    #$wgMessageCacheType configured above
    #$wgCacheDirectory configured above
    $wgUseLocalMessageCache = true;
    $wgParserCacheType = CACHE_DB;
    $wgSessionCacheType = CACHE_DB;
    #$wgMemCachedServers configured above
    $wgUseGzip = true;
    $wgEnableSidebarCache = true;

    # NO DB HITS!
    $wgDisableCounters = true;
    $wgMiserMode = true;

    # Text cache
    $wgRevisionCacheExpiry = 3*24*3600; 
    $wgParserCacheExpireTime = 14*24*3600;

    # Cache
    #$wgUseCdn = true;
    $wgCdnServers = [ '192.168.64.1' ]; # Note: the first entry in this list forces the "recent changes" to get the real ip from non logged in members

# CUSTOM EXTENSIONS --------------------------------------------------------------------------------------

wfLoadExtension( 'Parsoid', 'vendor/wikimedia/parsoid/extension.json' ); #Old

wfLoadExtension( 'TemplateStyles' );
wfLoadExtension( 'TemplateWizard' );
wfLoadExtension( 'YouTube' );

wfLoadExtension( 'UserMerge' );
    $wgGroupPermissions['bureaucrat']['usermerge'] = true; // By default nobody can use this function, enable for bureaucrat?
    $wgUserMergeProtectedGroups = [ 'sysop' ]; // optional: default is [ 'sysop' ]

wfLoadExtension( 'UploadWizard' );
    $wgUseInstantCommons = true;
    $wgUploadNavigationUrl = '/wiki/Special:UploadWizard';
    $wgExtensionFunctions[] = function() {
            $GLOBALS['wgUploadNavigationUrl'] = SpecialPage::getTitleFor( 'UploadWizard' )->getLocalURL();
            return true;
    };

    $wgUploadWizardConfig = [
        'debug' => false,
        'altUploadForm' => 'Special:Upload',
        'feedbackLink' => false, // Disable the link for feedback (default: points to Commons)
        'alternativeUploadToolsPage' => false, // Disable the link to alternative upload tools (default: points to Commons)
        'enableFormData' => true, // Enable FileAPI uploads be used on supported browsers
        'enableMultipleFiles' => true,
        'enableMultiFileSelect' => false,
        'tutorial' => [
            'skip' => true
        ], // Skip the tutorial
        'maxUploads' => 15, // Number of uploads with one form - defaults to 50
        'fileExtensions' => $wgFileExtensions // omitting this may cause errors
    ];

wfLoadExtension( 'TimedMediaHandler' );
    $wgMaxShellMemory = 407200;

    $wgFFmpegLocation = '/usr/bin/ffmpeg'; // Most common ffmpeg path on Linux

    // The minimum size for an embed video player (smaller than this size uses a pop-up player).
    $wgMinimumVideoPlayerSize = 200;

    // If transcoding is enabled for this wiki (if disabled, no transcode jobs are added and no transcode status is displayed).
    // Note if remote embedding an asset we will still check if the remote repo has transcoding enabled and associated flavors
    // for that media embed.
    $wgEnableTranscode = true;

    // The total amout of time a transcoding shell command can take:
    $wgTranscodeBackgroundTimeLimit = 3600 * 8;
    // Maximum amount of virtual memory available to transcoding processes in KB
    $wgTranscodeBackgroundMemoryLimit = 2 * 1024 * 1024; // 2GB avconv, ffmpeg2theora mmap resources so virtual memory needs to be high enough
    // Maximum file size transcoding processes can create, in KB
    $wgTranscodeBackgroundSizeLimit = 3 * 1024 * 1024; // 3GB

    // Number of threads to use in avconv for transcoding
    $wgFFmpegThreads = 1;

    // The NS for TimedText (registered on MediaWiki.org)
    // https://www.mediawiki.org/wiki/Extension_namespace_registration
    // Note commons pre-dates TimedMediaHandler and should set $wgTimedTextNS = 102 in LocalSettings.php
    $wgTimedTextNS = 710;

    // Set TimedText namespace for ForeignDBViaLBRepo on a per wikiID basis
    // $wgTimedTextForeignNamespaces = array( 'commonswiki' => 102 );
    $wgTimedTextForeignNamespaces = array();

    /**
    * Default enabled transcodes
    *
    * -If set to empty array, no derivatives will be created
    * -Derivative keys encode settings are defined in WebVideoTranscode.php
    *
    * -These transcodes are *in addition to* the source file.
    * -Only derivatives with smaller width than the source asset size will be created
    * -Regardless of source size at least one WebM and Ogg source will be created from the $wgEnabledTranscodeSet
    * -Derivative jobs are added to the MediaWiki JobQueue the first time the asset is uploaded
    * -Derivative should be listed min to max
    */
    // Starting from 1.31
    // All valid string values are listed in the extension's extension.json file 
    $wgEnabledTranscodeSet = [
        '160p.webm' => true,
        '240p.webm' => true,
        '360p.webm' => true,
        '480p.webm' => true,
        '720p.webm' => true,
        '1080p.webm' => true,
    ];

    $wgEnabledAudioTranscodeSet = [
        'ogg' => true,   // ogg+vorbis
        'opus' => false, // ogg+opus
        'mp3' => true,   // raw mp3
        'm4a' => false,  // mp4+aac (mp4a.40.5)
    ];

    // If mp3 source assets can be ingested:
    $wgTmhEnableMp3Uploads = true;

    // If mp4 source assets can be ingested:
    $wgTmhEnableMp4Uploads = false;

    // If you use ffmpeg 2 can be set it to true
    $wgUseFFmpeg2 = false;
