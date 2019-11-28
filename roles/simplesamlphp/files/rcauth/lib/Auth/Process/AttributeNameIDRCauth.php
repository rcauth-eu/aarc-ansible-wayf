<?php

namespace SimpleSAML\Module\rcauth\Auth\Process;

/**
 * Authentication processing filter to either pass on the existing NameID or
 * create a new one base on an attribute. The NameQualifier is also either
 * taken over, or set to the remote IdP. In case it is taken over the scope is
 * verified.
 *
 * @package SimpleSAMLphp
 */

class AttributeNameIDRCauth extends \SimpleSAML\Module\saml\Auth\Process\AttributeNameID
{
   /**
     * Generate transient NameID.
     *
     * @param array &$state  The request state.
     */
    public function process(&$state) {
	assert(is_array($state));
	assert(is_string($this->format));

	// Initialize output array
	$nameId = new \SAML2\XML\saml\NameID();

	// Try to use the incoming NameId value
	if (isset($state['saml:sp:NameID']) && 
	    isset($state['saml:sp:NameID']->value) &&
	    $state['saml:sp:NameID']->Format === \SAML2\Constants::NAMEID_PERSISTENT)
	{
	    // We have input value, use it
	    $nameId->setValue($state['saml:sp:NameID']->value);
	    $nameId->setFormat($state['saml:sp:NameID']->Format);
	} else {
	    // Get the 'default attribute' value instead (if available)
	    $val = $this->getValue($state);
	    if (empty($val))	{
		\SimpleSAML\Logger::warning('Cannot get value for NameID');
		return;
	    }
	    $nameId->setValue($val);
	}

	// Try to use the incoming NameId NameQualifier
	if (isset($state['saml:sp:NameID']) && 
	    isset($state['saml:sp:NameID']->NameQualifier) &&
	    $state['saml:sp:NameID']->Format === \SAML2\Constants::NAMEID_PERSISTENT)
	{
	    // Verify the scope of the incoming NameID
	    if ($state['saml:sp:NameID']->NameQualifier !==
		$state['saml:sp:IdP'])
	    {
		\SimpleSAML\Logger::warning(
		    'Invalid scope in NameID: '.
		    'NameQualifier does not match expected IdP: '.$state['saml:sp:NameID']->NameQualifier.' != '.$state['saml:sp:IdP']);
	    } else {
		$nameId->setNameQualifier($state['saml:sp:NameID']->NameQualifier);
	    }
	} else if (isset($state['saml:sp:IdP'])) {
	    // Fall back on remote IdP
	    $nameId->setNameQualifier($state['saml:sp:IdP']);
	} else {
	    // Neither incoming NameId, not remote IdP (?!)
	    \SimpleSAML\Logger::warning('No IdP entity ID, unable to set NameQualifier.');
	}

	// Do we know the remote SP
	if (isset($state['SPMetadata']['entityid'])) {
	    $nameId->setSPNameQualifier($state['SPMetadata']['entityid']);
	} else {
	    \SimpleSAML\Logger::warning('No SP entity ID, unable to set SPNameQualifier.');
	}

	$state['saml:NameID'][$this->format] = $nameId;

	// Override the default SAML2 nameID format
        $state['saml:NameIDFormat'] = $this->format;
    }
}
