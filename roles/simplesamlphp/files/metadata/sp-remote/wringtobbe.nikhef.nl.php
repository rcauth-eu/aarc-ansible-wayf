<?php
$metadata['https://wringtobbe.nikhef.nl'] = array (
  'entityid' => 'https://wringtobbe.nikhef.nl',
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
        0 => 'mailto:ca@rcauth.eu',
      ),
    ),
    1 => 
    array (
      'contactType' => 'support',
      'company' => 'RCauth',
      'givenName' => 'Operator',
      'emailAddress' => 
      array (
        0 => 'mailto:ca@rcauth.eu',
      ),
    ),
    2 => 
    array (
      'contactType' => 'other',
      'company' => 'Nikhef',
      'givenName' => 'CSIRT',
      'emailAddress' => 
      array (
        0 => 'mailto:security@nikhef.nl',
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
        0 => 'mailto:ca@rcauth.eu',
      ),
    ),
  ),
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://wringtobbe.nikhef.nl/Shibboleth.sso/SAML2/POST',
      'index' => 1,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' => 'https://wringtobbe.nikhef.nl/Shibboleth.sso/SAML2/POST-SimpleSign',
      'index' => 2,
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://wringtobbe.nikhef.nl/Shibboleth.sso/SAML2/Artifact',
      'index' => 3,
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:PAOS',
      'Location' => 'https://wringtobbe.nikhef.nl/Shibboleth.sso/SAML2/ECP',
      'index' => 4,
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://wringtobbe.nikhef.nl/Shibboleth.sso/SLO/SOAP',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://wringtobbe.nikhef.nl/Shibboleth.sso/SLO/Redirect',
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://wringtobbe.nikhef.nl/Shibboleth.sso/SLO/POST',
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://wringtobbe.nikhef.nl/Shibboleth.sso/SLO/Artifact',
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
      'X509Certificate' => 'MIIEAzCCAmugAwIBAgIJAOskUzDo9wDlMA0GCSqGSIb3DQEBCwUAMB8xHTAbBgNV
BAMTFHdyaW5ndG9iYmUubmlraGVmLm5sMB4XDTE4MDgwMzE0MzAwNFoXDTI4MDcz
MTE0MzAwNFowHzEdMBsGA1UEAxMUd3Jpbmd0b2JiZS5uaWtoZWYubmwwggGiMA0G
CSqGSIb3DQEBAQUAA4IBjwAwggGKAoIBgQDAb4XOiDZSY0a3ojTMfEgSTBHLMMOI
3rX+fB4UFtJgWraxoF9MC8+1SGScQvxHef8wnP2cvy5tEmqBpMpGLS/vn83Fu0MD
sBwXm7lMkImgtis1lbXdfdgWgC1d/wQd3mah9pKarW5JgOftBKCklDKcg2JCDjSM
l/N1Uekkjlnwy9dymXGQRlWNWRUCRVSl2ikSPcyOCsSzZ+FiuvrcpqIxFG6Z/2zi
6mL2IxHx5anPE0lgBs4KMccSqoHVlDZV+qWUkrz22ooaVYBz8mtwCKtb3sIyBxH+
HTyLvkj8l23YqVXmo14cZZNWkM1N4avBseqI4LhdOZslTd2srb/ipu+x4n7N4g+t
raNFzpChTc059ejMcDOzxFeYgrGNOeOo+KwST7iE9OHXBXVNCB+7xu83ZbDRfFqx
jPm7PgCs+5RYumcEefSK9bK6zNhT5dgUOPthR2GXrmteKkRaAdNr47UKqegE6kQe
49uXjKTgVmPeybR7qYJK/sxHKx5YGwWz2LMCAwEAAaNCMEAwHwYDVR0RBBgwFoIU
d3Jpbmd0b2JiZS5uaWtoZWYubmwwHQYDVR0OBBYEFCYyigZv2vM+jwquWLSTgo1O
rpSXMA0GCSqGSIb3DQEBCwUAA4IBgQBUtdvLY4rGWK0r1Q3gQU8dlFYtEFOo4qpi
QUZNJ/alVaIcjDPphWxnoalR1+HhGSfwnobW6QaawspjubqhngEMnh47moa+V9At
9RIdFlouFPH4Ar24XBD0TmJa54GOU4Fh8cMn4DPDqurJJmkgEe9CBuk//KgN7Q1/
Y/HPzWn5nkb9ozahBADBau34hhDYwRsN8ok+4Z11/Ivs3ZU9A1EBUGXSDTGjPwXH
ge7fpUC6hoD9QkU3gsGIKrF/1qdv+PTuRvuKDaqUr2eR89qAUwpEJ9lBFCx4jZ+h
B1EpMCTOGhMt9I9FQ18id8iUPmm0c1KSZfyr7tWO//I/l3WpwlbtAgtwr8M5G+T4
J7Xy8Z+o0fo1PcfmL1bpbLvwDVhX6Qd+rc5g8D3NzaJESNdeLVZYVek+8NUIcxoK
I1Q2h6cBtQtdmOeQeYtP8igOCAc3SL+wM6aT4/AQ6JqbBnFLLt5hiR4P3zbwHkT4
orEEftRPqH/cN9HAOFrx/xBz8sw2uOo=
',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIEAzCCAmugAwIBAgIJANf9WAC3tDW0MA0GCSqGSIb3DQEBCwUAMB8xHTAbBgNV
BAMTFHdyaW5ndG9iYmUubmlraGVmLm5sMB4XDTE4MDgwMzE0MzAwNFoXDTI4MDcz
MTE0MzAwNFowHzEdMBsGA1UEAxMUd3Jpbmd0b2JiZS5uaWtoZWYubmwwggGiMA0G
CSqGSIb3DQEBAQUAA4IBjwAwggGKAoIBgQDXB1qsIypk0YzaWJU7E1isNqHSm0vv
f88sMadlaaxf4AlPZp2GVUntDR5uLkfZgEQSMgYCgmy/yCTEUMHVlWiFchCdAm4k
/gpCKvISPNQo7a4NREMjdlw4zlxPOhKA9IsxeEYUeXAbmt26c1Y207jkXG1QQrwJ
eAlw1GjhzQjvAUNGJ+OS4b8EcyyFLltrrWkTE4lLJgv+6Y5ZRuFSfskHP3cPBKVO
6b/BQaPDMVbBy7SlcBA5DvW1pSxhsncxo5ayR2ReKnM/5c4/5mLqSILNiMMUja59
2Y5bW2jaBRBt0wjpx+kYoXa0yHCqcKUxPjROAg16IEjlICUErRBhuLhC9jVCUT2j
yDRQ4ACVGgPK0+HksqMUayFepuPl0kuwL80jv1wQlgYfoR517Avbau47rEhaCTkT
euS7UrJqlHCVtVtyGq45VgoibmV9CaZBc9wCdrydbECtuZq1YAiv9MG9YeDJB1FS
5gc0+8ExnC5X15Mip1QJjWjBRF0RgFXyEVECAwEAAaNCMEAwHwYDVR0RBBgwFoIU
d3Jpbmd0b2JiZS5uaWtoZWYubmwwHQYDVR0OBBYEFMwCHLeBPY0gfeZkHSjPkJ2n
m4sPMA0GCSqGSIb3DQEBCwUAA4IBgQCnSwkeik87qYZ0WLwchR3/D1Crjsu9cB6l
ZOMSyxX7XrlegTuYabLk+qG5Qsav+WjEng5M1Y1Kjxvj5cfCeth745lLwV7k5ohV
Mp3GDo0b3NDGHQ3yF04g9D9krg4pRDbSyv/keMm++TPIWGlQjjpVmkWAHcMzGH4N
LmV7fkobirv0IuC6MISD65XzVTBhzionZXDa4ouY2qO1JH+uvHtN6WE0EQjL+nfE
sgFkW3JBhVpasHlzH7zomZuu7Js+F3t1G7WkKQ3RX2jS/VKuT+ja+/lXjjFs83DF
Gtf1zvhkp+Zi59cqzuQCcVvpKEP6syg99J3GLhd24aWUsCYu8//ai03N9U5yPx5z
FGT+FtUgIhPQtWepIUQODTAnS+229RI7qWj/k3Yjaf7wN6zPgsMR58++C0+8hALg
W2Q7gOneULze7YKflsu5TeO5O5EtmwISRLLy5oim0nTGn45ANOduRzZpTJEhS1sk
My87BTbCogak3sZti6y8PjciSRGwyAI=
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
