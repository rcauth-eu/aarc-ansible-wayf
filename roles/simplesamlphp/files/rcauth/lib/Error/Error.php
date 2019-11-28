<?php

namespace SimpleSAML\Module\rcauth\Error;

use SimpleSAML\Logger;
use SimpleSAML\Session;
use SimpleSAML\Utils;
use SimpleSAML\XHTML\Template;


class Error 
{
	public static function show(\SimpleSAML\Configuration $config, array $data) {

	    $logfile=$config->getString('loggingdir','/var/tmp').$data['error']['reportId'].".txt";
	    $lfh = fopen("$logfile","w");
	    if ( isset($lfh) ) {
		fwrite($lfh,print_r($data,true));
	        fclose($lfh);
	    }

	    /*
	     * the stanza below taken from the original, as these will not be called anymore
	     * if 'errors.show_function' is used
	     */
            $t = new Template($config, 'error.php', 'errors');
            $translator = $t->getTranslator();
            $t->data = array_merge($t->data, $data);
            $t->data['dictTitleTranslated'] = $translator->t($t->data['dictTitle']);
            $t->data['dictDescrTranslated'] = $translator->t($t->data['dictDescr'], $t->data['parameters']);
            $t->show();
	}
}
