<?php

namespace SimpleSAML\Module\rcauth\Auth\Process;

/**
 * Authentication processing filter to either pass on the existing NameID or
 * create a new one base on an attribute. The NameQualifier is also either
 * taken over, or set to the remote IdP. In case it is taken over the scope is
 * verified.
 * This class is derived from AttributeNameID
 *
 * @package SimpleSAMLphp
 */

class AttributeNameIDRCauth extends \SimpleSAML\Module\saml\BaseNameIDGenerator
{

    private $attribute;

    /**
     * Initialize this filter, parse configuration.
     *
     * @param array $config Configuration information about this filter.
     * @param mixed $reserved For future use.
     *
     * @throws \SimpleSAML\Error\Exception If the required options 'Format' or 'attribute' are missing.
     */
    public function __construct($config, $reserved)
    {
        parent::__construct($config, $reserved);
        assert(is_array($config));

        if (!isset($config['Format'])) {
            throw new Error\Exception("AttributeNameIDRCauth: Missing required option 'Format'.");
        }
        $this->format = (string) $config['Format'];

        if (!isset($config['attribute'])) {
            throw new Error\Exception("AttributeNameIDRCauth: Missing required option 'attribute'.");
        }
        $this->attribute = (string) $config['attribute'];
    }

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
            $state['saml:sp:NameID']->Format === $this->format)
        {
            // We have input value, use it
            $nameId->setValue($state['saml:sp:NameID']->value);
            $nameId->setFormat($state['saml:sp:NameID']->Format);
        } else {
            // Get the 'default attribute' value instead (if available)
            $val = $this->getValue($state);
            if (empty($val)) {
                \SimpleSAML\Logger::warning(
                    'No appropriate value in attribute ' . var_export($this->attribute, true) .
                    ' on user - not generating attribute NameID.'
                );
                return;
            }
            $nameId->setValue($val);
        }

        // Try to use the incoming NameId NameQualifier
        if (isset($state['saml:sp:NameID']) &&
            isset($state['saml:sp:NameID']->NameQualifier) &&
            $state['saml:sp:NameID']->Format === $this->format)
        {
            // Verify the scope of the incoming NameID
            if ($state['saml:sp:NameID']->NameQualifier !==
                $state['saml:sp:IdP'])
            {
                \SimpleSAML\Logger::warning(
                    'Invalid scope in NameID: '.
                    'NameQualifier does not match expected IdP: '.
                    $state['saml:sp:NameID']->NameQualifier.' != '.$state['saml:sp:IdP']);
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

    /**
     * Get the NameID value.
     * Note: getValue() in the AttributeNameID class does not handle
     * XML-formatted values correctly. Hence we check the type and get the value
     * both for string-valued and NameID-valued attributes.
     *
     * @param array $state The state array.
     * @return string|null The NameID value.
     */
    protected function getValue(array &$state)
    {
        if (!isset($state['Attributes'][$this->attribute]) || count($state['Attributes'][$this->attribute]) === 0) {
            \SimpleSAML\Logger::warning(
                'Missing attribute ' . var_export($this->attribute, true) .
                ' on user - not generating attribute NameID.'
            );
            return null;
        }
        if (count($state['Attributes'][$this->attribute]) > 1) {
            \SimpleSAML\Logger::warning(
                'More than one value in attribute ' . var_export($this->attribute, true) .
                ' on user - not generating attribute NameID.'
            );
            return null;
        }
        $value = array_values($state['Attributes'][$this->attribute]); // just in case the first index is no longer 0
        $value = $value[0];

        if (is_object($value)) {
            if (! $value instanceof \SAML2\XML\saml\NameID) {
                \SimpleSAML\Logger::warning(
                    'Value of Attribute ' . var_export($this->attribute, true) .
                    ' is of unknown class '.get_class($value)
                );
                return null;
            }
            if (isset($value->Format) && $value->Format !== $this->format) {
                \SimpleSAML\Logger::warning(
                    'Format of attribute ' . var_export($this->attribute, true) .
                    ' is unsupported: '.var_export($value->Format, true)
                );
                return null;
            }
            $value = $value->value;
        } elseif (! is_string($value)) {
            \SimpleSAML\Logger::warning(
                'Attribute ' . var_export($this->attribute, true) .
                ' is of unknown type: '.gettype($value)
            );
            return null;
        }

        if (empty($value)) {
            return null;
        }

        return $value;
    }
}
