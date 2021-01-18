<?php
$metadata['https://rcauth-db.esc.rl.ac.uk/'] = array (
  'entityid' => 'https://rcauth-db.esc.rl.ac.uk/',
  'description' =>
  array (
    'en' => 'Test RCauth Pilot Delegation Service for providing end-user proxy certificates to Science Gateways and other portals',
  ),
  'OrganizationName' =>
  array (
    'en' => 'UKRI-STFC',
  ),
  'name' =>
  array (
    'en' => 'Test RCauth Pilot Delegation Service (STFC)',
  ),
  'OrganizationDisplayName' =>
  array (
    'en' => 'UKRI-STFC',
  ),
  'url' =>
  array (
    'en' => 'https://stfc.ukri.org/',
  ),
  'OrganizationURL' =>
  array (
    'en' => 'https://stfc.ukri.org/',
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
      'Location' => 'https://rcauth-db.esc.rl.ac.uk/Shibboleth.sso/SAML2/POST',
      'index' => 1,
    ),
    1 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' => 'https://rcauth-db.esc.rl.ac.uk/Shibboleth.sso/SAML2/POST-SimpleSign',
      'index' => 2,
    ),
    2 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://rcauth-db.esc.rl.ac.uk/Shibboleth.sso/SAML2/Artifact',
      'index' => 3,
    ),
    3 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:PAOS',
      'Location' => 'https://rcauth-db.esc.rl.ac.uk/Shibboleth.sso/SAML2/ECP',
      'index' => 4,
    ),
  ),
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://rcauth-db.esc.rl.ac.uk/Shibboleth.sso/SLO/SOAP',
    ),
    1 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://rcauth-db.esc.rl.ac.uk/Shibboleth.sso/SLO/Redirect',
    ),
    2 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://rcauth-db.esc.rl.ac.uk/Shibboleth.sso/SLO/POST',
    ),
    3 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://rcauth-db.esc.rl.ac.uk/Shibboleth.sso/SLO/Artifact',
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
      'X509Certificate' => 'MIIECTCCAnGgAwIBAgIJALpjmaxOD/bdMA0GCSqGSIb3DQEBCwUAMCExHzAdBgNV
BAMTFnJjYXV0aC1kYi5lc2MucmwuYWMudWswHhcNMjAxMjIzMTI0OTE3WhcNMzAx
MjIxMTI0OTE3WjAhMR8wHQYDVQQDExZyY2F1dGgtZGIuZXNjLnJsLmFjLnVrMIIB
ojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEAnykqK4DmS1gGm7KaD/5SDgeF
M5pOVSFw/jzd9r/b/73NvkGAJPByy6MMrC0zwoTsvve0bc2ioSa9wkn73VrnbmQZ
uDxNkyTMERxXIYulI/rgldpAXnjfk40woXhCwsc1OYtCEgC58XiEt7sf/BeGfrhd
lTMC6O8hfyqpMzBwXiqcEhHFaLEMEZASOZBEGoowsgTUcHKeUeju2Dd8qu+2ZFaI
kHxGtyZMl6izpTe3lPGjFKpTmvoojpXDDDienOE0f07fwk3GAtzJvklysQncER35
MoJiqD4VlcDImkKD36dBSsqQR2gsH2PvUpNMQ4EOvFQwduknYTeRnOPXMg95lasC
wcXdOayX59GqCjQ40UCbsmhEpf1JjcZOjFiWAyrpMXBRhyrqRxyZwznFMDhf/v6D
BW2agF9owUry2LkvRBVXMZaH4A8ZTXhCdHfTxTpQ6OHDwKgUcwzP+txX7Jp9ROqk
S6Y2ibK6gLx8OK1QD8trZGbVh6/p2vUtdIrC+w+TAgMBAAGjRDBCMCEGA1UdEQQa
MBiCFnJjYXV0aC1kYi5lc2MucmwuYWMudWswHQYDVR0OBBYEFDyY6V6VIzR1qeEa
gbV/vM5EpKPbMA0GCSqGSIb3DQEBCwUAA4IBgQAilAv91a1lWTlB3Vb2naToIJ7a
ZeKHIfmhDGubMvH53tXMy+I4Yay/UgzeiwXEciHp077ZiedkFvSLZ9DxmFvjBuyt
Mqn+06HRZfx9PHTqdrhcbLtjOW+SRIE1vix7aLkfOl5R7v1Ca5p8WeXNe51mq3a2
qlRaxlI8HbUJrqHhxzSeKkhKFCpd4QcgFJSTsBnQzHcsY3+bb8zxRBS5a4B0hPcd
2ikFiGK33BmIx+uMlb9HIJfe6ChYu53iguo+WhuemA2olAc5H/Tifb2LgQCyEzC6
DF2jElhvOoQstSR9A1O+BLpbtQ+WLDVOzywbzo2NqjhlMfiwG2uOJdzl4+3QBf5/
YI/GpyYqB/nWQPHMwl5Sa/UnYmh5Kh3iWLsflR13lp7hCrk1NoblqF7lzc/BTx8p
RaPMkfF7FhWt4B35O+AHUEL0L0a+NijKIHBtZaYietwfDbT2rzVXmnGKRni+1DxG
7wiLYQeSBJzv2xXelqpyGXn/nqAmFSKf7UUrXOk=
',
    ),
    1 =>
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIECTCCAnGgAwIBAgIJAMKTZKYfwdxOMA0GCSqGSIb3DQEBCwUAMCExHzAdBgNV
BAMTFnJjYXV0aC1kYi5lc2MucmwuYWMudWswHhcNMjAxMjIzMTI0OTE4WhcNMzAx
MjIxMTI0OTE4WjAhMR8wHQYDVQQDExZyY2F1dGgtZGIuZXNjLnJsLmFjLnVrMIIB
ojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEAqNZGFddMuhGExRJunROJAGip
zJ8o6KqIsfb9zCYyWBbfWuoWesSXRUT/a/rQkpxMHLPyTBK9z+e5J2pQfcxRMy2B
qNZMGHEAxj79uoF7mAmDEUjtNpfPuKoeYNj0ujjBEh0qWgkNy6ystRI9AI3tSgbb
7PSMbidPGAkyFyT16Sv4X26WJNsKHejnYt6hacPlctPxT3xDYrzNdrjIZse6xmbg
mSmQAMUcintA6lLQb+rVSfVUVyFJso2L2cT/St+bju7ZkzGGWdOVr/Sc9VKeYj9T
bExlO+VTivO5xHX/Z+ES0gtP+6/ehwjDnUP1WhLtUPDxfyT0nsXyeXddOxltsXXI
dumOejTPmAlv77e+mIbdq4GlwT18D87Am8DmyoOBKU4WuQBgEyrSMnmJYmdXe+HI
6Mh6E4GhjS7svRpUHR6bUgIPCkyU2QXgJY+qmcQ1DbaPhck0UF3Avn6QU2ti1mjV
piG/y2BdBus3Swizw1DU5y1MzMbUY7I2BM0N1EVbAgMBAAGjRDBCMCEGA1UdEQQa
MBiCFnJjYXV0aC1kYi5lc2MucmwuYWMudWswHQYDVR0OBBYEFBWj8P5r0RzKMMSi
3Yox1dSzWyHJMA0GCSqGSIb3DQEBCwUAA4IBgQBJOutA7Bom3F5UTBO9lhAJziVg
7Yeg+8cFvA5mYQKVRJMfZLEXMWQBNMi5Esi1KKRRBPo4llIBz9hErbkjj7CN4tee
5MR8dXhBBiLLjftABU1n6WYWgIHqbgMXPkhczvuusxC4aOS8Lsi+yt/oMa4kvWXi
hQbbQDXRNs1TuEeaWHADw46x7mgCOWA83vSnqIBRo93UXF09eTaRFb6eIHJPZb+J
1ZnPUWu1EE7QdCFXEdBlRQFS4ygeY/TTBaaqaiyzp8J/d/ns8JnAddIGYBBhuO1X
hhyx5j0N9R0zoHWrQL77vInXsJ6BAoHRQISAKzzMdSpmc8yw0OSfU+s9wKBf/GLX
52mzVfULAB8sXlkhxG93CBowMY2Wg9aoS7ePcXNue4UXoGeIb3rXSkInxHP6uirR
s8KPFF2XIvv3+blvSzFJxnYHh4I9ZZd+h9S3s4QZa80ODxB2sFjQoyd/j5z9aGAH
HggWCXM7Y9Q+64YKdRVeg0GwGtnpvnNzu8XrpT4=
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
      'en' => 'Test RCauth Pilot Delegation Service (STFC)',
    ),
    'Description' =>
    array (
      'en' => 'Test RCauth Pilot Delegation Service for providing end-user proxy certificates to Science Gateways and other portals',
    ),
    'InformationURL' =>
    array (
      'en' => 'https://rcauth-db.esc.rl.ac.uk/',
    ),
    'PrivacyStatementURL' =>
    array (
    ),
  ),
);
