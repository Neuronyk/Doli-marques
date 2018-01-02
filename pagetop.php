<?php
/******************************************************************
 * Marques is a Dolibarr module
 * It allows multi-brand owner to handle their specifics needs in Dolibarr.
 * 
 *
 * Marques is distributed under GNU/GPLv3 license
 * (see COPYING file)
 *
 *     use at your own risks, personal work, pre-ALPHA stage
 * 
 * 
 * Author : NickHERMET | Daolinks.com 
 *
 ******************************************************************/



/**
 *   	\file       marques/marques.php
 *		\ingroup    marques
 *		\brief      This page enable multi brand management
 *	
 */

// Change this following line to use the correct relative path (../, ../../, etc)
if(is_file('../main.inc.php'))
	$dir = '../';
elseif(is_file('../../../main.inc.php'))
	$dir = '../../../';
else 
	$dir = '../../';
	
require $dir.'main.inc.php';	// Load $user and permissions


require_once DOL_DOCUMENT_ROOT.'/core/lib/admin.lib.php';

function base64url_encode($data) {
  return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

// Load traductions files requiredby by page
$langs->load("marques");

// Get parameters
$id			= GETPOST('id','int');
$action		= GETPOST('action','alpha');
$backtopage = GETPOST('backtopage');

// Protection if external user
if ($user->societe_id > 0)
{
	accessforbidden();
}

/***************************************************
* VIEW
*
* Put here all code to build page
****************************************************/

echo "page pagetop.php ";


/***************************************************/
$db->close();