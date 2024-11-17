<?php
$metadata['https://pilot-ca1.rcauth.eu'] = [
  'entityid' => 'https://pilot-ca1.rcauth.eu',
  'description' => [
    'en' => 'RCAuth Pilot Delegation Service for providing end-user proxy certificates to Science Gateways and other portals',
  ],
  'OrganizationName' => [
    'en' => 'Nikhef',
  ],
  'name' => [
    'en' => 'RCAuth Pilot Delegation Service',
  ],
  'OrganizationDisplayName' => [
    'en' => 'Nikhef',
  ],
  'url' => [
    'en' => 'http://www.nikhef.nl',
  ],
  'OrganizationURL' => [
    'en' => 'http://www.nikhef.nl',
  ],
  'contacts' => [
    0 => [
      'contactType' => 'administrative',
      'company' => 'RCAuth',
      'givenName' => 'Operator',
      'emailAddress' => [
        0 => 'mailto:ca@rcauth.eu',
      ],
    ],
    1 => [
      'contactType' => 'support',
      'company' => 'RCAuth',
      'givenName' => 'Operator',
      'emailAddress' => [
        0 => 'mailto:ca@rcauth.eu',
      ],
    ],
    2 => [
      'contactType' => 'other',
      'company' => 'Nikhef',
      'givenName' => 'CSIRT',
      'emailAddress' => [
        0 => 'mailto:security@nikhef.nl',
      ],
      'telephoneNumber' => [
        0 => '+31205925090',
      ],
    ],
    3 => [
      'contactType' => 'technical',
      'givenName' => 'Operator',
      'emailAddress' => [
        0 => 'mailto:ca@rcauth.eu',
      ],
    ],
  ],
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => [
    0 => [
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://pilot-ca1.rcauth.eu/Shibboleth.sso/SAML2/POST',
      'index' => 1,
    ],
    1 => [
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' => 'https://pilot-ca1.rcauth.eu/Shibboleth.sso/SAML2/POST-SimpleSign',
      'index' => 2,
    ],
    2 => [
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://pilot-ca1.rcauth.eu/Shibboleth.sso/SAML2/Artifact',
      'index' => 3,
    ],
    3 => [
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:PAOS',
      'Location' => 'https://pilot-ca1.rcauth.eu/Shibboleth.sso/SAML2/ECP',
      'index' => 4,
    ],
  ],
  'SingleLogoutService' => [
    0 => [
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://pilot-ca1.rcauth.eu/Shibboleth.sso/SLO/SOAP',
    ],
    1 => [
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://pilot-ca1.rcauth.eu/Shibboleth.sso/SLO/Redirect',
    ],
    2 => [
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://pilot-ca1.rcauth.eu/Shibboleth.sso/SLO/POST',
    ],
    3 => [
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://pilot-ca1.rcauth.eu/Shibboleth.sso/SLO/Artifact',
    ],
  ],
  'attributes' => [
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
  ],
  'attributes.NameFormat' => 'urn:oasis:names:tc:SAML:2.0:attrname-format:uri',
  'keys' => [
    0 => [
      'encryption' => true,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDADCCAeigAwIBAgIJALqHjEZiLy8wMA0GCSqGSIb3DQEBBQUAMB4xHDAaBgNV
BAMTE3BpbG90LWNhMS5yY2F1dGguZXUwHhcNMTYwNDExMTYyNjM2WhcNMjYwNDA5
MTYyNjM2WjAeMRwwGgYDVQQDExNwaWxvdC1jYTEucmNhdXRoLmV1MIIBIjANBgkq
hkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAscUdmN39BNyLHi4FolmEuySN/SJ4RQyR
BGpQCroPfiWXhqaHpj3cMHN3lHQ87SzTH/swKNI+Hdg+BCogRrjWVE6KH7hqz+B1
vqzfEu0YVc1FrwoRxr/xkm9M2W7gEZL1A+F1Z/IFKC7rt51F/XM2k/2nIbveSGEQ
GvWH3iOJWTsr+r1vD9JhSUn3DS7RQGiK/gCAmrZiv2xiBhr/XCVrMFN3NB6ntI8P
2uw+3cRvK9lYnQPd6QcrLDIQlGsEGUWcYo7F7iDacvZDCabmhJiPq5Frfq3QBgL5
IbPrqoOKchSvqVZ83o95LQXV2OUPSdyqXHf8cqISiCnrXytpofJ43wIDAQABo0Ew
PzAeBgNVHREEFzAVghNwaWxvdC1jYTEucmNhdXRoLmV1MB0GA1UdDgQWBBSdzVqO
yWEB2amju2eyvDShS/yHvjANBgkqhkiG9w0BAQUFAAOCAQEAkBnW0Y6jPpyAuWRT
yXxc3TsHydRFRgcxyI2DbKE2kuYua8u+QXE6N/l8u6ptmu949HDNUuHlMeF+mjU+
+4TZDPFcP1FtW+29QI5kzhGQY6qmpvkE48/UDOpESBMUEEcfw4d79+qM+8S+2+PJ
va/uliEKkoSTnRuvWbbVqNJI7hyELFT+npLQ67i7DBSBSgExZ2Fy53ACudHA43CA
zKrKwivmem/1YbhlI4bcJb6BYn9PIkBq9U6LGsqDX6IejgPg5+88gDs2zVsb1DXX
Rb/B338pOZ+QL3dqpPeWAg2uWtP32+X4YT+1bNb3NCc3OmU9Vct4UiUvNeJldqqz
sFnb+A==
',
    ],
  ],
  'EntityAttributes' => [
    'http://macedir.org/entity-category' => [
      0 => 'http://refeds.org/category/research-and-scholarship',
    ],
    'urn:oasis:names:tc:SAML:attribute:assurance-certification' => [
      0 => 'https://refeds.org/sirtfi',
    ],
  ],
  'UIInfo' => [
    'DisplayName' => [
      'en' => 'RCAuth Pilot Delegation Service',
    ],
    'Description' => [
      'en' => 'RCAuth Pilot Delegation Service for providing end-user proxy certificates to Science Gateways and other portals',
    ],
    'InformationURL' => [
      'en' => 'https://wiki.nikhef.nl/grid/CILogon_Pre-Pilot_Work',
    ],
    'PrivacyStatementURL' => [],
  ],
];
