#*********************************************************************************
# The contents of this file are subject to the vtiger CRM Public License Version 1.0
# ("License"); You may not use this file except in compliance with the License
# The Original Code is:  vtiger CRM Open Source
# The Initial Developer of the Original Code is vtiger.
# Portions created by vtiger are Copyright (C) vtiger.
# All Rights Reserved.
#
# ********************************************************************************

export VTIGERCRM_ROOTDIR=`dirname "$0"`/..
export USE_PHP=/opt/alt/php82/usr/bin/php

cd $VTIGERCRM_ROOTDIR
# TO RUN ALL CORN JOBS
$USE_PHP -f vtigercron.php 
