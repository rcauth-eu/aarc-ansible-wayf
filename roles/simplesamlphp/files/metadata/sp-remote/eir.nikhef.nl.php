<?php
$metadata['https://eir.nikhef.nl'] = array (
  'entityid' => 'https://eir.nikhef.nl',
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
    'en' => 'Test RCauth Pilot Delegation Service',
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
        0 => 'msalle@nikhef.nl',
      ),
    ),
    1 => 
    array (
      'contactType' => 'support',
      'company' => 'Example',
      'givenName' => 'Operator',
      'emailAddress' => 
      array (
        0 => 'msalle@nikhef.nl',
      ),
    ),
    2 => 
    array (
      'contactType' => 'other',
      'company' => 'Example',
      'givenName' => 'CSIRT',
      'emailAddress' => 
      array (
        0 => 'msalle@nikhef.nl',
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
        0 => 'msalle@nikhef.nl',
      ),
    ),
  ),
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://eir.nikhef.nl/Shibboleth.sso/SAML2/POST',
      'index' => 1,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' => 'https://eir.nikhef.nl/Shibboleth.sso/SAML2/POST-SimpleSign',
      'index' => 2,
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://eir.nikhef.nl/Shibboleth.sso/SAML2/Artifact',
      'index' => 3,
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:PAOS',
      'Location' => 'https://eir.nikhef.nl/Shibboleth.sso/SAML2/ECP',
      'index' => 4,
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://eir.nikhef.nl/Shibboleth.sso/SLO/SOAP',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://eir.nikhef.nl/Shibboleth.sso/SLO/Redirect',
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://eir.nikhef.nl/Shibboleth.sso/SLO/POST',
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://eir.nikhef.nl/Shibboleth.sso/SLO/Artifact',
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
      'X509Certificate' => 'MIID7jCCAlagAwIBAgIJAL7ws6Ow5W11MA0GCSqGSIb3DQEBCwUAMBgxFjAUBgNV
BAMTDWVpci5uaWtoZWYubmwwHhcNMjAwOTIxMTMxNjE1WhcNMzAwOTE5MTMxNjE1
WjAYMRYwFAYDVQQDEw1laXIubmlraGVmLm5sMIIBojANBgkqhkiG9w0BAQEFAAOC
AY8AMIIBigKCAYEA+N2cPhsmFyu8AWtE9+xPxbrrAIbGZ0qD7mKIdYtpO1hVTOCl
STC5tq2C6jMk7dVJDwvgXMQye6OGUcyAZuVjqwyldBFxa4fRucXub2Rz8V+QpPdz
xdUB41ka3j9o9OjKuPBgZ7ijgTH1EdGKa4p+dbVH9To+iirOuWoGUuNT0/me/w1l
H1/Gy0X4Z09VT42us3RZrIPHZvzf5WTzb/Mqk+l4a3Ro1hqoPIdWVyMzRdagvvDx
Ce+1yGGJ9/9LP5MEY9gWoQMwNlb4ZRhi/s4iKqk3eAy2juxzVcWDltkH/dPjJQAQ
VsAkCgs/GGO1M9xCgmR3XSgcL8NmF9drgwWIuu1kgyZ3qqFc44et0zEK02Qm3q86
3UqnhkKvIqxPtP/b1OwPsrgaoxD14j6/3yUkN3L98YeZGgLmdJnzZTak109BdebX
Q85ERqDgNGPBBcL8J8rLyCv+zhCUwKD2yY20J5laHdjU1LWMI+1RVxsKy6ldH3Do
gsogeilafLw3nyW1AgMBAAGjOzA5MBgGA1UdEQQRMA+CDWVpci5uaWtoZWYubmww
HQYDVR0OBBYEFN3UbL+Z7J/dpXzcE8usoKQUFUuzMA0GCSqGSIb3DQEBCwUAA4IB
gQDgVWn81w3qfx9A5NP90GOx+Ueq9g5RKTODVlcs/oesD9H+aeBCSjTsBIoNEb37
G9bPLeeFmWGmJIDkChpqU4Mkpi9i94k2OixYi/7yefJYNP8+9DNJ5lKZOH+LWYJK
g4Bt85nYCsPjgFYecy+HCFB5flGFntPV5tcMHyf2Cld0fcBbNCwW82FGeZaZmjOd
PFEICII7fE9Pi9DtVIVGobH+cHxJ3sT2//f1htFSHAL+8HvG+grUtNcqQrkwMCrx
5bmm1SdP7bZCTcJDId7fMHhLALRE8OuyDBtQGMgDOom52PkFV8yhoPiTkrGqCO/T
0cZfVxMezXOivVf8FNa7LlKAQmHoQ1K8SAmnd2GoU3Qrr9TW1vBuCN8NzaZRHgr1
7aWfWHXXpAtRy3DgSybP0Bx4w3qfds6Rk4OsYC8VCJxDf4Jkgz7pG131rmN3l8AU
9BMxBJ+ZxULIXscgy5saJceYRzYwVARqIN4DBrHipDSvRGEpEfEh78Hg0ZGBI/65
0qM=
',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIID7jCCAlagAwIBAgIJAM3LwMw6IuoMMA0GCSqGSIb3DQEBCwUAMBgxFjAUBgNV
BAMTDWVpci5uaWtoZWYubmwwHhcNMjAwOTIxMTMxNjE2WhcNMzAwOTE5MTMxNjE2
WjAYMRYwFAYDVQQDEw1laXIubmlraGVmLm5sMIIBojANBgkqhkiG9w0BAQEFAAOC
AY8AMIIBigKCAYEA8V01vs/KvGNq1ZyTpoI+XzHxiAYlQkRp4aUsQoM4Tox4gtMk
W78I8S7yAfcSiUMfK5qBxcNDtiDY/wgMBnD6pHsUCKHjJEoJAUTi9omc1aBLWbUt
riOt/Xq88WmYcXX+uqXCIt7TWOavs6Xgx83UMpbgPVN9hXCXF+sb1zsPeE74qNOk
HtCWzxfePZIWHCypk8cw7qxaGhdrlQhUpTLyZAVHnkCZ1yzK7bjJIGF3Rg4iGuli
e6SP8C7nttaeXXn1gzWMUm22tiI1SgTaKt8zBMnObw9Rdkk6k4GPWHbPv8o3YcEl
WjSwvI4H6Mt414cx837HU5yhveR9OilhfG0f9R0hSUl6ctCPQxEUGHVjXV2x51KS
RC/WhRtI4OJC5IYGElVzICRqWcwJXqQhpvlyZgAr6dD5bCEkwNNcQTp14baVuGld
gBhgAxwcKHE2UiznpxZ4eeDMMLAsDV4ASCH5R9d6awE28hMYnVZEGZCh/wcgCjnp
3atoVa1E95m2mj4ZAgMBAAGjOzA5MBgGA1UdEQQRMA+CDWVpci5uaWtoZWYubmww
HQYDVR0OBBYEFJW8L3XJEosl8IqzYjXD4VshVD4SMA0GCSqGSIb3DQEBCwUAA4IB
gQAk1Gq90HrgUYma3g6hmM2LGAIdxPkf6eEW6uI77mP2fOqdeyTLBv3aPFfELZZQ
DQIENSaD0hJhHnpH7K+GSGggxTb5dEvcWYZ8LB9sO7IALml8oNlqJ56mj6unQNPL
Eh85V6pLr74bf8qmG8/AwI7mf8ow3GL/2RV3za8FYN7n/byEPvEGKkzTq7u2bLo6
V2mQfCIH7c7m1t/pi4lQCtZAxXVdAu3+JJ58OBZ2/IfxfUd4pM6buvNgpFZZJLKY
jLf05pOSpiL1IJ1ZS+pjgX+Pt5mI/wz5RFp9qxsw4lh5r/ShaUdwaa6w3zg+wiy6
hgizHxRKcfr/SNvieDHeqyM+FGq5wsUEDTNbbIBA7+Uu0BukBtNckkvCtYhXuE0e
lsXc3yH7jZ6G2t3Nu6umd1MAsT3BduCQzvSYkofBaQrK2ZqWp1Ck8rgiOMnaZ1k0
zpN0c3l9/e0B1/q71OzWRrQKL2EaGlpEgrKdBeHFaogig+ecIVA8pL5/kY+vWCWu
mRk=
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
