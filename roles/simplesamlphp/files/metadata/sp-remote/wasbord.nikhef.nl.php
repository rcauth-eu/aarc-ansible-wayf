<?php
$metadata['https://wasbord.nikhef.nl'] = array (
  'entityid' => 'https://wasbord.nikhef.nl',
  'description' => 
  array (
    'en' => 'RCauth Pilot Online CA for providing end-user proxy certificates to Science Gateways and other portals',
  ),
  'OrganizationName' => 
  array (
    'en' => 'Nikhef',
  ),
  'name' => 
  array (
    'en' => 'RCauth Pilot Online CA',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'Nikhef',
  ),
  'url' => 
  array (
    'en' => 'http://www.nikhef.nl',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'http://www.nikhef.nl',
  ),
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'administrative',
      'company' => 'RCauth',
      'givenName' => 'Operator',
      'emailAddress' => 
      array (
        0 => 'ca@rcauth.eu',
      ),
    ),
    1 => 
    array (
      'contactType' => 'support',
      'company' => 'RCauth',
      'givenName' => 'Operator',
      'emailAddress' => 
      array (
        0 => 'ca@rcauth.eu',
      ),
    ),
    2 => 
    array (
      'contactType' => 'other',
      'company' => 'Nikhef',
      'givenName' => 'CSIRT',
      'emailAddress' => 
      array (
        0 => 'security@nikhef.nl',
      ),
      'telephoneNumber' => 
      array (
        0 => '+31205925090',
      ),
    ),
    3 => 
    array (
      'contactType' => 'technical',
      'givenName' => 'Operator',
      'emailAddress' => 
      array (
        0 => 'ca@rcauth.eu',
      ),
    ),
  ),
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://wasbord.nikhef.nl/Shibboleth.sso/SAML2/POST',
      'index' => 1,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' => 'https://wasbord.nikhef.nl/Shibboleth.sso/SAML2/POST-SimpleSign',
      'index' => 2,
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://wasbord.nikhef.nl/Shibboleth.sso/SAML2/Artifact',
      'index' => 3,
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:PAOS',
      'Location' => 'https://wasbord.nikhef.nl/Shibboleth.sso/SAML2/ECP',
      'index' => 4,
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://wasbord.nikhef.nl/Shibboleth.sso/SLO/SOAP',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://wasbord.nikhef.nl/Shibboleth.sso/SLO/Redirect',
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://wasbord.nikhef.nl/Shibboleth.sso/SLO/POST',
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://wasbord.nikhef.nl/Shibboleth.sso/SLO/Artifact',
    ),
  ),
  'attributes' => 
  array (
    0 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.6',
    1 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.13',
    2 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.10',
    3 => 'urn:oid:2.16.840.1.113730.3.1.241',
    4 => 'urn:oid:2.5.4.42',
    5 => 'urn:oid:2.5.4.4',
    6 => 'urn:oid:2.5.4.3',
    7 => 'urn:oid:2.5.4.10',
    8 => 'urn:oid:0.9.2342.19200300.100.1.3',
    9 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.11',
    10 => 'urn:oid:1.3.6.1.4.1.25178.1.2.9',
  ),
  'attributes.NameFormat' => 'urn:oasis:names:tc:SAML:2.0:attrname-format:uri',
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIID+jCCAmKgAwIBAgIJAMpbxa82ZdC2MA0GCSqGSIb3DQEBCwUAMBwxGjAYBgNV
BAMTEXdhc2JvcmQubmlraGVmLm5sMB4XDTIwMDkyNTEyNTY0M1oXDTMwMDkyMzEy
NTY0M1owHDEaMBgGA1UEAxMRd2FzYm9yZC5uaWtoZWYubmwwggGiMA0GCSqGSIb3
DQEBAQUAA4IBjwAwggGKAoIBgQDI0e38VUzbtzNUB1WeR60UVxAmyAUQB0DF4yfN
hsBEb9huA1aPj5Cz4oSPvCRU6gKFxyI1dvJibvjvNWMwoO0y0Zondu0y04TyUOKE
VQ/CxFx6/Uto15f4WlsvHlbhlyNpox0NuRGAnv5xNftlzr3Vk586A7nLoMur617R
7HjX7LiIChV8bxh1MtCq88j/mmPx7RpeKJPeNrzHLch0Pq+EZdSD1fdFdabdzO0s
/XyjPwa8nZXcMdQwiFtwr9kVyvASi+hr0+Obt/7/s52V8eeXgyDJ0ybUXIGpj52z
I+P2sAb+in5MWiqOnanNXJ3Su5VWSTUEwD6Szv+FNi7DM9H3N74M2kVcrtnVD1WT
o6bSYg52g84GXHp/YLk1hBYyXyrFDc9IY6Tb4T1Km/s0gjJHLhP6Qkso7AoMbaKD
pXR6VDAW8tFrix8K6RKBAZz8UHWqLR2EuGH9mCAJHZ7a0OOmfO8rdCnQ9+/OP6ws
8XWQmh/miBkGbO88cncWRTGzZOMCAwEAAaM/MD0wHAYDVR0RBBUwE4IRd2FzYm9y
ZC5uaWtoZWYubmwwHQYDVR0OBBYEFF9NKulxT04cR6cqnFgmS4qmYgzyMA0GCSqG
SIb3DQEBCwUAA4IBgQBQGkGCxPvTZiggGgXTKVrG3IcP6i2SJC0LoEoard9KBgX7
JxHmVA99y8y8GGkFcwXij/REmge97nbVHdhTru4DFFh1OW3S4WZHB9dArr/DNuO7
by8njzLTFf6ClUUz80JwBD8Fncyn5xEiThrenp8/T8bqKeNxehaEiT61lAhmbnuT
YR+xBDudRXCQIMy8Fky7K1b+7RBb0czNHLo0Ih5Urb4BwJ0pf3cCjLrTlSTdFcaO
no6uLDgfKMQUeEYkkoC0Z8CNhRovY6FuxQaJiXPWjJPvasUsFBwoTUkFaLnnGhZq
a7Txvo+vl7G5oBtty8sNWdb+kWjobfT9/AicPLK3GeVGjWnZOA+FPOyGs/Oz/QtP
92L15/2AaC7yuj9xLfOeAIfMjbNCcAac5WvXqw+VFFNOXNNMx/kw1zgfJL0K4dR8
Mr5Q0x7fyqAFWYaF7O1+ENcZDQ/aGr2LQ0oOazasRkVfMFgd4NrSw+BRMD/B5Vie
5DG+ItnUc1QskNAbpdc=
',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIID+jCCAmKgAwIBAgIJAOCgeZHVlQ3NMA0GCSqGSIb3DQEBCwUAMBwxGjAYBgNV
BAMTEXdhc2JvcmQubmlraGVmLm5sMB4XDTIwMDkyNTEyNTY0NFoXDTMwMDkyMzEy
NTY0NFowHDEaMBgGA1UEAxMRd2FzYm9yZC5uaWtoZWYubmwwggGiMA0GCSqGSIb3
DQEBAQUAA4IBjwAwggGKAoIBgQDLXog+QA0BQp3h9TmCgYTlaEfayvxWl/7LbFFx
dapm+i3MqzA5di3oosTTf4FuvWVfRm3XuGLKnQdfLgVtFhkVt62/ISTUz4gJ1g7t
8JB80EXPeN7udK4W2egHh9d3hqhfWkP21tnTz7bsV1jFxBuEWmo2rZ5tn7zxLPbf
BpfQgILOMGm9c4t2REFgXoiMxTk6I49TQFhNnUr7V2CW2cgCZmBV1jhVCWqE6B+e
geX6F3e0lT8ARQcC5KDOPDBn2T1KxvzrC4GE5m5w/emtnce2gC9GQ4ebyAoZGnvr
5M6HfeYpjiCssvSZBriG6Ohaa2q9VYRqdVrxEnyJvgsu/yikzLYwtYXYoZ2mgO6a
pph3Zm8WPzO3fgLMZgu2Ivyie+4DFLcItmz7YBJ1s2eUWJJ8YjJhGTYZfY8GVZuw
L8sWfZDWMwYaZbXqhYaPQ/T7K2h2oOADNj5r4L8/X+SdV1Ukry/6k0wb9GSeUG6X
EULVVFQs7JpE5tsFAT6FDOJqeQsCAwEAAaM/MD0wHAYDVR0RBBUwE4IRd2FzYm9y
ZC5uaWtoZWYubmwwHQYDVR0OBBYEFA9T4ytmUCgpP8PigAou9Flc/uqPMA0GCSqG
SIb3DQEBCwUAA4IBgQAyBfNP0QmN336ZQSpiAvFb3oK5IdlfjccZCTKKXJWHx4UY
hK5skp2pKp+yuc2+50CQJp8dbqKIKexgJNw1HrvVnfBNViuAynWFVaE5QvrP9X1Z
HoWBzHhs2bBkCU9bL5AUXx0GS+4KfaBkaF+EVx0sdT+TAGQD1HnBY+Gh1thEatSe
xDCNEQfSyT/lSEMHms9UlR51egd2DjmRkGpyD+5VnrdJaU41Ny8ENA20YNu1E/gz
3kseOicV7L0miYLeYU8X+J7dcWdxQmRW5TmBjB+3yD/G4PtqAoJ2jKEI1Z9h/siH
PGpxNoNqzQEkjksa3qsglkwhjUzgphmkmSZMslnDDCkRIQ3ew6SDZSnCFLZ+Jrks
Q94DwcBv+HA6ov32MStA+b1s7KVpx3ye+6Wjwj9U0WjLBUtLxPk+MGcAMI2T4i4n
Xo19dFb/4yry3xYQIg0lFz3uOxiYW5Ut3wDKkgeEk8nlgLAtaRWPco6d8D7DeOlE
ucmwTI+Knd1Y0jb4olk=
',
    ),
  ),
  'EntityAttributes' => 
  array (
    'http://macedir.org/entity-category' => 
    array (
      0 => 'http://refeds.org/category/research-and-scholarship',
    ),
    'urn:oasis:names:tc:SAML:attribute:assurance-certification' => 
    array (
      0 => 'https://refeds.org/sirtfi',
    ),
  ),
  'UIInfo' => 
  array (
    'DisplayName' => 
    array (
      'en' => 'RCauth Pilot Online CA',
    ),
    'Description' => 
    array (
      'en' => 'RCauth Pilot Online CA for providing end-user proxy certificates to Science Gateways and other portals',
    ),
    'InformationURL' => 
    array (
      'en' => 'https://rcauth.eu/',
    ),
    'PrivacyStatementURL' => 
    array (
    ),
  ),
);
