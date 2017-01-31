<?php
###############################
## ResourceSpace
## Local Configuration Script
###############################

# All custom settings should be entered in this file.
# Options may be copied from config.default.php and configured here.

# MySQL database settings
$mysql_server = '127.0.0.1:3306';
$mysql_username = 'bn_resourcespace';
$mysql_password = '27dc6655da';
$mysql_db = 'bitnami_resourcespace';

# Base URL of the installation
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $baseurl   = 'https://' . $_SERVER['HTTP_HOST'] . '/resourcespace';
} else {
    $baseurl   = 'http://' . $_SERVER['HTTP_HOST'] . '/resourcespace';
}

# Email settings
$email_notify = 'support@kboo.org';
$email_from = 'support@kboo.org';
# Secure keys
$spider_password = 'WemY4EMypehY';
$scramble_key = 'NEQy4eWYMEry';
$api_scramble_key = 'TebYWEQyQe5Y';

# Paths
$applicationname = '';



/*

New Installation Defaults
-------------------------

The following configuration options are set for new installations only.
This provides a mechanism for enabling new features for new installations without affecting existing installations (as would occur with changes to config.default.php)

*/
                                
// Set imagemagick default for new installs to expect the newer version with the sRGB bug fixed.
$imagemagick_colorspace = "sRGB";

// No "contact us" link for new installations
$contact_link=false;

$slideshow_big=true;
$home_slideshow_width=1400;
$home_slideshow_height=900;

$homeanim_folder = 'filestore/system/slideshow';

$mysql_bin_path = 'D:\bitnami\mysql\bin';
$imagemagick_path = 'D:\bitnami\imagemagick';
$ghostscript_path = 'D:\bitnami\common\bin';

#Paths
$ftp_server = 'my.ftp.server';
$ftp_username = 'my_username';
$ftp_password = 'my_password';
$ftp_defaultfolder = 'temp/';
$thumbs_display_fields = array(8,3);
$list_display_fields = array(8,3,12);
$sort_fields = array(12);

$storagedir = 'D:\bitnami/apps/resourcespace/htdocs/filestore/';
$imagemagick_colorspace= 'sRGB';
$mysql_charset = 'utf8';
$use_smtp=true;
$smtp_secure='tls'; # '', 'tls' or 'ssl'. For Gmail, 'tls' or 'ssl' is required.
$smtp_host='smtp.gmail.com'; # Hostname, e.g. 'smtp.gmail.com'.
$smtp_port='587'; # Port number, e.g. 465 for Gmail using SSL.
$smtp_auth=true; # Send credentials to SMTP server (false to use anonymous access)
$smtp_username='abe@kboo.org'; # Username (full email address).
$smtp_password='d7y8kma2'; # Password.
$use_phpmailer=true;



/*

New Installation Defaults
-------------------------

The following configuration options are set for new installations only.
This provides a mechanism for enabling new features for new installations without affecting existing installations (as would occur with changes to config.default.php)

*/
$list_display_fields = array(8,25,76,12); //Fields should correspond to title, description, Unique Identifier, date
$list_search_results_title_trim=45;
$disable_geocoding=true; 
$enable_find_similar=false;
$show_resourceid=false;
$show_contributed_by=false;
$show_access_field=false;
$basic_simple_search=true;
$use_recent_as_home=true;
$id_column=false;
$resource_type_column=false;
$anonymous_login="guest"; 
$default_advanced_search_mode="4";
$default_res_types="";
$linkedheaderimgsrc="filestore/system/config/linkedheaderimgsrc.png";
$slimheader=true;
$slimheader_fixed_position=true;
$original_filenames_when_downloading=true;
$advanced_search_nav=true;
$custom_top_nav[0]["title"]="Digitized items";
$custom_top_nav[0]["link"]="/resourcespace/pages/search.php?search=%21propertiesfext%3Amp3+&archive=0&restypes=4";
$reset_date_upload_template=false;
$xml_metadump=true;
$file_checksums=true;
# Block duplicate files based on checksums? (has performance impact). May not work reliably with $file_checksums_offline=true unless checksum script is run frequently. 
$file_upload_block_duplicates=true;
$filename_field=100;
$prefix_resource_id_to_filename=false;
$download_filename_id_only = false;
$propose_changes_always_allow =true;
$hide_resource_share_link=false;
$mysql_force_strict_mode=true;
$embedded_data_user_select_fields=array(115,100);
#$mysql_log_transactions=true;
#$mysql_log_location="/var/resourcespace_backups/sql_log.sql";
$metadata_report=false;

$xml_metadump_dc_map=array
	(
	"uniqueID" => "instantiationIdentifier",
	"itemTitle" => "pbcoreTitle",
	"date" => "instantiationDate"
	);
# Configures mapping between metadata and PBCore fields, which are used in the XML metadata dump instead if a match is found.
$xml_metadump_pbcore_map=array
	(
	"Identifier2" => "pbcoreIdentifier",
	"itemTitle" => "pbcoreTitle",
	"assetType" => "pbcoreAssetType",
	"subject" => "pbcoreSubject",
	"description" => "pbcoreDescription",
	"epsID" => "pbcoreRelationIdentifier",
	"programName" => "pbcoreRelationIdentifier",
	"contributor" => "contributor",
	"rightsStatement" => "rightsSummary",
	"publisher" => "publisher",
	"ancillaryMaterials" => "pbcoreAnnotation",
	"spatialCoverage" => "coverage",
	"temporalCoverage" => "coverage",
	"date" => "instantiationDate",
	"storageLocation" => "instantiationLocation",
	"physicalFormat" => "instantiationPhysical", 
	"condition" => "instantiationAnnotation",
	"notesOnCasing" => "instantiationAnnotation",
	"durationPhysical" => "instantiationDuration",
	"channelConfigPhysical" => "instantiationChannelConfiguration",
	"language" => "instantiationLanguage",
	"proxyFilename" => "instantiationIdentifier",
	"generations" => "instantiationGenerations",
	"fileLocation" => "instantiationLocation",
	"preservationFilename" => "instantiationIdentifier",
	"fileLocation" => "instantiationLocation",
	"dateDigitized" => "instantiationDate",
	"filesize" => "instantiationFileSize",
	"channelConfigDigital" => "instantiationChannelConfiguration",
	"sampleRate" => "essenceTrackSamplingRate",
	"bitDepth" => "essenceTrackBitDepth",
	"durationDigital" => "instantiationDuration",
	"audioTimeStart" => "instantiationTimeStart",
	"checksumValue" => "instantiationIdentifier",
	"digitalQC" => "instantiationAnnotation",
	"relatedIDs" => "pbcoreRelationIdentifier",
	"uniqueID" => "instantiationIdentifier",
	"date" => "instantiationDate",
	"storageLocation" => "instantiationLocation",
	"physicalFormat" => "instantiationPhysical", 
	"generations" => "instantiationGenerations",
	"condition" => "instantiationAnnotation",
	"notesOnCasing" => "instantiationAnnotation",
	"durationPhysical" => "instantiationDuration",
	"channelConfigPhysical" => "instantiationChannelConfiguration",
	"language" => "instantiationLanguage",
	);