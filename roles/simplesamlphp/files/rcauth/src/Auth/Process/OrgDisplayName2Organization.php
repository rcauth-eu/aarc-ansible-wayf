<?php

namespace SimpleSAML\Module\rcauth\Auth\Process;

use SimpleSAML\Auth;

/**
 * Consent Authentication Processing filter
 *
 * Filter for requesting the user to give consent before attributes are
 * released to the SP.
 *
 * @package SimpleSAMLphp
 */
class OrgDisplayName2Organization extends Auth\ProcessingFilter
{
    private static $ORGANIZATION_OID = 'urn:oid:2.5.4.10';

    /**
     * Process a authentication response
     *
     * This function saves the state, and redirects the user to the page where
     * the user can authorize the release of the attributes.
     * If storage is used and the consent has already been given the user is
     * passed on.
     *
     * @param array &$state The state of the response.
     *
     * @return void
     */
    public function process(&$state): void
    {
        assert(is_array($state));
        assert(array_key_exists("entityid", $state["Source"]));
        assert(array_key_exists("metadata-set", $state["Source"]));

        $idpEntityId = $state['Source']['entityid'];

        $metadata = \SimpleSAML\Metadata\MetaDataStorageHandler::getMetadataHandler();

        if (!isset($metadata)) {
            \SimpleSAML\Logger::warning('$metadata is NOT set');
            return;
        }

        /**
         * If the consent module is active on a bridge $state['saml:sp:IdP']
         * will contain an entry id for the remote IdP. If not, then the
         * consent module is active on a local IdP and nothing needs to be
         * done.
         */
        if (isset($state['saml:sp:IdP'])) {
            $idpEntityId = $state['saml:sp:IdP'];
            $idpmeta     = $metadata->getMetaData($idpEntityId, 'saml20-idp-remote');
            if (array_key_exists("OrganizationDisplayName", $idpmeta) &&
                array_key_exists("en", $idpmeta['OrganizationDisplayName']))
            {
                $organization = $idpmeta['OrganizationDisplayName']['en'];
            } else {
                \SimpleSAML\Logger::info('No English OrganizationDisplayName found, will use idpEntityId');
                $organization = $idpEntityId;
            }
            $attributes =& $state['Attributes'];
            $attributes[self::$ORGANIZATION_OID] = array($organization);
            \SimpleSAML\Logger::debug('Added attribute '.self::$ORGANIZATION_OID.' = '.$organization);
        }
     }
}
