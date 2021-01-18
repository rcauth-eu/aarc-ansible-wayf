<?php
 $metadata['https://rcauth-delegation.eosc.grnet.gr'] = array (
  'entityid' => 'https://rcauth-delegation.eosc.grnet.gr',
  'description' => 
  array (
    'en' => 'Test RCauth Pilot Delegation Service for providing end-user proxy certificates to Science Gateways and other portals',
  ),
  'OrganizationName' => 
  array (
    'en' => 'Organization',
  ),
  'name' => 
  array (
    'en' => 'Test RCauth Pilot Delegation Service (GRNET)',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'Organization',
  ),
  'url' => 
  array (
    'en' => 'https://www.example.org/',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'https://www.example.org/',
  ),
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'administrative',
      'company' => 'Example',
      'givenName' => 'Operator',
      'emailAddress' => 
      array (
        0 => 'admin@example.org',
      ),
    ),
    1 => 
    array (
      'contactType' => 'support',
      'company' => 'Example',
      'givenName' => 'Operator',
      'emailAddress' => 
      array (
        0 => 'admin@example.org',
      ),
    ),
    2 => 
    array (
      'contactType' => 'other',
      'company' => 'Example',
      'givenName' => 'CSIRT',
      'emailAddress' => 
      array (
        0 => 'security@example.org',
      ),
      'telephoneNumber' => 
      array (
        0 => '+1-2-34567890',
      ),
    ),
    3 => 
    array (
      'contactType' => 'technical',
      'givenName' => 'Operator',
      'emailAddress' => 
      array (
        0 => 'admin@example.org',
      ),
    ),
  ),
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://rcauth-delegation.eosc.grnet.gr/Shibboleth.sso/SAML2/POST',
      'index' => 1,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' => 'https://rcauth-delegation.eosc.grnet.gr/Shibboleth.sso/SAML2/POST-SimpleSign',
      'index' => 2,
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://rcauth-delegation.eosc.grnet.gr/Shibboleth.sso/SAML2/Artifact',
      'index' => 3,
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:PAOS',
      'Location' => 'https://rcauth-delegation.eosc.grnet.gr/Shibboleth.sso/SAML2/ECP',
      'index' => 4,
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://rcauth-delegation.eosc.grnet.gr/Shibboleth.sso/SLO/SOAP',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://rcauth-delegation.eosc.grnet.gr/Shibboleth.sso/SLO/Redirect',
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://rcauth-delegation.eosc.grnet.gr/Shibboleth.sso/SLO/POST',
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://rcauth-delegation.eosc.grnet.gr/Shibboleth.sso/SLO/Artifact',
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
      'X509Certificate' => 'MIID1jCCAj6gAwIBAgIJAOZ6G+1hJblsMA0GCSqGSIb3DQEBCwUAMBAxDjAMBgNV
BAMTBWRlbGVnMB4XDTIwMTAyOTEwMzMyM1oXDTMwMTAyNzEwMzMyM1owEDEOMAwG
A1UEAxMFZGVsZWcwggGiMA0GCSqGSIb3DQEBAQUAA4IBjwAwggGKAoIBgQDY3+44
0us6QhoTzvjafacx07X13H21mmQ3tTKsMjyY3ncsibKxe7w5DPcBFTWvzVht/Wgl
kJXwAL2sXsCC03oNa2Y19bI03OZrCOoWw6hjAeNldWCA5kWIga4yJPBIM9oadgqv
ZoZ/+UjDn55O1lYciW3NJDoQcnK7L7qBbPZdnPV3MKQfGkgPb9anVBpulQlL7bTw
NJtGBD0KqzgKwrmKxWoRwsdSeJ82QAFIjuugxiPn413wh19aPYMbU1vScc0p4ouX
3bpFpTBRZ5K5dL/8hJktFLrS6NrR3wgRCTxOFNd4l8jSUug0mnHWeybJcut7Qm9c
1Ei0/TMEuhW0+HvSMpIGi7dqOFTfZN/DVmj5vGCh1z5r82a07UIjuFUQi2i0BBpI
0u6Q4KxEneyvv8cuPtLuwK/PiO5etflzvR6vfzEu7zJKa82vqYqdjKFfI1tLllnn
YHi9I+/QZvQ78KOHS1Wp17TsfpmqvQ/ddREp/zifK9c4lY/jvSbyhQJ1UvECAwEA
AaMzMDEwEAYDVR0RBAkwB4IFZGVsZWcwHQYDVR0OBBYEFHvovNxYvzoFILVWqbxK
ISJRs6fFMA0GCSqGSIb3DQEBCwUAA4IBgQB3TIAlSQf3XlZS3PpsZLmjwPUuro9J
qPz9LFzufmKGf+OaLkc1ec899QuMcotUCMOnabXt7giaHC1xiPFv39PvyuuFZtt3
w3b5TR36Eu9EusYB563P0qI1uGFIM6CxvrQjxU4cck9ZyJ4kMdlOhQyFXdTxjZjW
bjk5lUCGibm1s64kNbiDpvanCk4GB2OJNwXRyihRtPnnePDUclpXO2YJ/2mU/3o+
gLePREqgU8Ti+yyCcSNBorJe1bDseAK0gxNxfKgvcbM/kMjpBcRZSqqT2YGyNzdE
pCX94u/lTCVL2WhEHC/QDhDHbkYZlzBwo/ErlfKBubV80BoXQq+DVD70Tm3eqcNm
ItwHeeNN5BP1e+5sjF2rTKAL/zqkfuPtqPtUjiG5j8e0mfDfb74VcrAs28OKr4pC
o60nDUwWpXctrJP1Dp8c50CZCKXHecsHp4Wr61dDnRdL6XOw6rY/8vvbeTme2FLz
rmtN2ToveCp4VXM0kUukOLUChAql/3VGabo=
',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIID1jCCAj6gAwIBAgIJAMga7QOVyHX/MA0GCSqGSIb3DQEBCwUAMBAxDjAMBgNV
BAMTBWRlbGVnMB4XDTIwMTAyOTEwMzMyM1oXDTMwMTAyNzEwMzMyM1owEDEOMAwG
A1UEAxMFZGVsZWcwggGiMA0GCSqGSIb3DQEBAQUAA4IBjwAwggGKAoIBgQC743YW
lvKUqpZFHq924dmEN9HzpooQxvl0MrF2ZsVrJDuXVPYSh4X6+Peb1QD1osuXP4Q4
8qO6wNgufRBKC6fLv/HdQTf0t2y2K3qn0YQWCkWNROtFXZebtyfypMT3bx2ysYJt
CWmGee/Ma6sGrYc8+H669Fg9fx6lkGXsUTIvM0Nv+JVYj7M337P4jy9vmzWu6+/K
RcwnKUuDzGCkQ1rFmS+uPRQ9vNVnoPb8duGMjGT0D56vgVUh77dQBVvhCukzkNW6
UFWJZn9DK0ZOSgmc6PnwDxI8T4Ecfl+oGtjfkYr4Z3R7ZefjaU3OuTgS0LRaslmw
t2an66J7t9XDrHxzGbjSKONGflFOa3ZKw1n6SaOlT3cnEIR96VvGwXCyWsO/L0CX
PKCsxf075lgchyk/LN6NUqn/GKbnhTxo0zNXBW+fAqhhQB7M7yrrmiyKPtjG1sTa
FxaNlfRb+wivpZdjWJ89L9pPyfOwva4yQP8aBI9yleotfnl+6K19DpmOhpUCAwEA
AaMzMDEwEAYDVR0RBAkwB4IFZGVsZWcwHQYDVR0OBBYEFLIJv2JQVzFtELxCM4k2
mb2EShYXMA0GCSqGSIb3DQEBCwUAA4IBgQCAdCwC2rJuV6D6m9i+n5qW2AsPXZ92
j2tGe5VwoK1o9dkG/qIz1ZR1NFneJr+chIZU846W2WyuZoqP7xXdpKdoJR5b0/FP
HA508HR0vHrA8til1THLnZEixcWTgEbGssHYAgHa6sBjo73fG+TUBzIsc44zbzCi
tD++SFBoaCXKyhLOnrzwZQQS0YB/gOvNFSbsBqhaUoy1C/1uZ/rXZAJUcDjoTCL8
W4LQY/KpGCR6b5KEpj//4frFiDOdHOxvzz70d4TR7E6pzx0ZyvPk7pyK1EHFo8kj
OQ6Br4+8fUlmd/0IOY1wABX7OEU6JQ4EZNftc4Dk8tvLAnAi6sKevKuLrPGGOnqU
SN68a9AmDfMB3TptWsB3wm9T5x71nB4Frn5cDBM/pKNb6e8FQmAQiQVon/io4hAR
azhO9CKpAaYhK7Y5Nu3VS2S8Tob3kjxpEwsGEWRLbwTQdyWrz8bXZhFJdM5QAxPF
QvNbijzxYQyjVcSivhQALhrGXjfAU2HXYUE=
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
      'en' => 'Test RCauth Pilot Delegation Service',
    ),
    'Description' => 
    array (
      'en' => 'Test RCauth Pilot Delegation Service for providing end-user proxy certificates to Science Gateways and other portals',
    ),
    'InformationURL' => 
    array (
      'en' => 'https://www.example.org/',
    ),
    'PrivacyStatementURL' => 
    array (
    ),
  ),
);
