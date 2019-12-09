<?php
$metadata['https://rcauth-db-dev.esc.rl.ac.uk'] = [
    'entityid' => 'https://rcauth-db-dev.esc.rl.ac.uk',
    'description' => [
        'en' => 'RCauth Pilot Delegation Service for providing end-user proxy certificates to Science Gateways and other portals',
    ],
    'OrganizationName' => [
        'en' => 'UKRI-STFC',
    ],
    'name' => [
        'en' => 'RCauth Pilot Delegation Service',
    ],
    'OrganizationDisplayName' => [
        'en' => 'UKRI-STFC',
    ],
    'url' => [
        'en' => 'https://www.ukri.org/',
    ],
    'OrganizationURL' => [
        'en' => 'https://www.ukri.org/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'company' => 'UKRI-STFC',
            'givenName' => 'RCauth Operator',
            'emailAddress' => [
                'ops-management@rcauth.eu',
            ],
        ],
        [
            'contactType' => 'support',
            'company' => 'UKRI-STFC',
            'givenName' => 'support',
            'emailAddress' => [
                'support@grid-support.ac.uk',
            ],
        ],
        [
            'contactType' => 'other',
            'company' => 'UKRI-STFC',
            'givenName' => 'Jens Jensen',
            'emailAddress' => [
                'jens.jensen@stfc.ac.uk',
            ],
            'telephoneNumber' => [
                '+447917613735',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'Jens Jensen',
            'emailAddress' => [
                'jens.jensen@stfc.ac.uk',
            ],
        ],
    ],
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://rcauth-db-dev.esc.rl.ac.uk/Shibboleth.sso/SAML2/POST',
            'index' => 1,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://rcauth-db-dev.esc.rl.ac.uk/Shibboleth.sso/SAML2/POST-SimpleSign',
            'index' => 2,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://rcauth-db-dev.esc.rl.ac.uk/Shibboleth.sso/SAML2/Artifact',
            'index' => 3,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:PAOS',
            'Location' => 'https://rcauth-db-dev.esc.rl.ac.uk/Shibboleth.sso/SAML2/ECP',
            'index' => 4,
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://rcauth-db-dev.esc.rl.ac.uk/Shibboleth.sso/SLO/SOAP',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://rcauth-db-dev.esc.rl.ac.uk/Shibboleth.sso/SLO/Redirect',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://rcauth-db-dev.esc.rl.ac.uk/Shibboleth.sso/SLO/POST',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://rcauth-db-dev.esc.rl.ac.uk/Shibboleth.sso/SLO/Artifact',
        ],
    ],
    'attributes' => [
        'urn:oid:1.3.6.1.4.1.5923.1.1.1.6',
        'urn:oid:1.3.6.1.4.1.5923.1.1.1.13',
        'urn:oid:1.3.6.1.4.1.5923.1.1.1.10',
        'urn:oid:2.16.840.1.113730.3.1.241',
        'urn:oid:2.5.4.42',
        'urn:oid:2.5.4.4',
        'urn:oid:2.5.4.3',
        'urn:oid:2.5.4.10',
        'urn:oid:0.9.2342.19200300.100.1.3',
        'urn:oid:1.3.6.1.4.1.5923.1.1.1.11',
        'urn:oid:1.3.6.1.4.1.25178.1.2.9',
    ],
    'attributes.NameFormat' => 'urn:oasis:names:tc:SAML:2.0:attrname-format:uri',
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEFTCCAn2gAwIBAgIJANiz9FbC3DyqMA0GCSqGSIb3DQEBCwUAMCUxIzAhBgNVBAMTGnJjYXV0aC1kYi1kZXYuZXNjLnJsLmFjLnVrMB4XDTIxMTAxNTA3Mzg0M1oXDTMxMTAxMzA3Mzg0M1owJTEjMCEGA1UEAxMacmNhdXRoLWRiLWRldi5lc2MucmwuYWMudWswggGiMA0GCSqGSIb3DQEBAQUAA4IBjwAwggGKAoIBgQDZsFl4Ko5FU1CJBH7yhTlyLFYX+C5gReQe+auN7eHCFFhCG2JoyITd4Yn6F1ZxJV07vPSYa0T74JEr4sB74tMqaznJohyq9gI+nDH0roVqQPAbQqXmOhWdacL7s/+Lk8yRdzVDHyXXtQxtSzE2F6phAmugD70VBj/ie8X2q49GPQtD055LE7vi7irj23S2VYVOiEXp7CGtHiI/xuPHHfp/DCLtnCwxyGIegiiEHWR8hl+ba5VrMH/DnAZD2tmVg2RdDgF7Hl8C4o792XevTVA50OoCQr8M/6k2LXWPWLQiuYuDgD1t0dIn89ZTBJZrI61cWMVwSeT49GeUb/iAo+5KA+elzRGzdW3tYWtRy55o5aF8zGHL0WsH8KtECYVytHneH16/qc1FgI7F5+qd3yDejSE53yx9QI1UFmzxpCG1dMIuhEO97FTps6H9pSSYAcjIv2whUr+i3OAj2NvMpug20Cz7Ng282Shuilh2j3rOqjqf2ybSXLM2zycUYkw5XYMCAwEAAaNIMEYwJQYDVR0RBB4wHIIacmNhdXRoLWRiLWRldi5lc2MucmwuYWMudWswHQYDVR0OBBYEFBX2Wt0dqgNW+fPGMoyAeIZROUs7MA0GCSqGSIb3DQEBCwUAA4IBgQCzTCMkKnu1c25TUr8MVoXnHFgH1yjPUQQbOts+UCNCYdivpjZhq+vmvCg/wRSjOWn9yNP4C7ljaWYepXKvYrFI07umf2vs0Bej0zriDNhvsDHi03e/FiE8bA0T1dxMM84Zp6h+BACcc13zJyD4hyfQoZBXgknFkrKWCm92puvWZb9jFNm1dlX8baOKIQhU09w96hb2kQnoU5uDvXjTr1l40udXa4TTtepdjRGDEPn1pDSG10PDdwWScos6cGep0ig+aaO6Bn5LBYzeB2Kn1zxfUvcavIt49Hl0ss6oAVP+QvwmJgHlLRJERPUL0vj5slypUfkB547oISXjI66wstiR4rGvhPakEEdsjMBMYujZ8Tnmwe+bQ2kdNwvaOZhaPoHjOaYBVna6uMT8GkGuk7dsLtvJLG6mN8cfZY6U8wSP2yOuz1UxjDMEODIqwZImTdnDyfQZ7TiHIModfxJ1fBRXhaMXxQte5VtNP4pyWbFPk2OL+5P0EjgYY2I1InUf0fY=',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIEFTCCAn2gAwIBAgIJAMhwdMheLFiNMA0GCSqGSIb3DQEBCwUAMCUxIzAhBgNVBAMTGnJjYXV0aC1kYi1kZXYuZXNjLnJsLmFjLnVrMB4XDTIxMTAxNTA3Mzg0M1oXDTMxMTAxMzA3Mzg0M1owJTEjMCEGA1UEAxMacmNhdXRoLWRiLWRldi5lc2MucmwuYWMudWswggGiMA0GCSqGSIb3DQEBAQUAA4IBjwAwggGKAoIBgQDSgjlIBcfJohGzrdVcZJ3sGpOTohVNR0czSPbGT7chqamVJOuMUe/hmfMzWR2ddfQSFuB2WROXmr/BDYSoeHJV8DSjjKI6l0DR27RAaKwJf097D1FEkRUQIi72sBFdFBMeBqUkeHNl++hBSlvJtr8MTkBS0MFho3m8yZWWxkeuR/3wxfKijDKnIMuZNH7229oTfdwwIM/8iPWNB5CB04rsGeG1R4vsGGdzJxEe0kR3MwqkzDVR8aYFTVaOxfumMTGnSx7fkUaonJeprGHqQZJoJ8t/F94ZLw8z2bElakXZ+e4DRV1+dat0+Fc/Kd62RcuHTVAV+uU7pbzNVIHhZh+8q8WIqctc72RWJVVTQMpz1pVA03OHOIebzYuuaSQExbJxI1yg1T1NuAzfBjSF5heKTqvjpjYBom9KyUVzSa3p04Z5NoSawzF7Bn48AJHFhIQpx3xKzpwkJAaOF5ZhzdQ7b+oKajQlugTFvl4QNNBQ0DyH+pOIqaw+w5tyhPVxV5UCAwEAAaNIMEYwJQYDVR0RBB4wHIIacmNhdXRoLWRiLWRldi5lc2MucmwuYWMudWswHQYDVR0OBBYEFDXgS49tZ9bfeo8oe83Vk75kRfpzMA0GCSqGSIb3DQEBCwUAA4IBgQDK0HDuVqBUmfWHWfAj12pOk0HnJbYo43t3sJmp9R5vXyYkcxuu8oyxYaVO3fN+VDo+skuXYJa2LlBZhHxHWr9g9UGFQKTdBNWRR9n4V8Cfd0hG6yURVj9kfNCZrK39+3MC60R7OpN38atos7qnmdzsxgBhApSS+ZkqustRa2PkHM0yAccDjgCN6NHHfhL+zELspVwvueoQpLhw9AGbQT2b9J0AjfQHUdXaOwrc3Y5IAHN6R/22rh3lTqDJEGEnvCOkak0+s9cmdeCZyw/NeAzJmF4mfdHdCz6FhU7Ast9fV8r3QYVAx9ADv+8tjxEJExn7+DOiR0879h5xC0X0+avHPmnwzOkqGjLhEu/NCXMLFO8mDcIQ9/CptibPQgihDSLklB0dWW4CmnWfmYHeeGu4yH0PgM2pPfY4yzNEyStPJ9zwhL9Z+KlQiV79MjbeFfWau898wtBVUjct1afJQ3bl35iOrE+CpufsW1/TLqst6Pa3zjuBfHyR2NMnVh04BUQ=',
        ],
    ],
    'EntityAttributes' => [
        'http://macedir.org/entity-category' => [
            'http://refeds.org/category/research-and-scholarship',
        ],
        'urn:oasis:names:tc:SAML:attribute:assurance-certification' => [
            'https://refeds.org/sirtfi',
        ],
    ],
    'UIInfo' => [
        'DisplayName' => [
            'en' => 'RCauth Pilot Delegation Service',
        ],
        'Description' => [
            'en' => 'RCauth Pilot Delegation Service for providing end-user proxy certificates to Science Gateways and other portals',
        ],
        'InformationURL' => [
            'en' => 'https://rcauth-db-dev.esc.rl.ac.uk/',
        ],
        'PrivacyStatementURL' => [],
    ],
];
