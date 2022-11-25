<?php
$metadata['https://rcauth.stfc.ac.uk/'] = [
    'entityid' => 'https://rcauth.stfc.ac.uk/',
    'description' => [
        'en' => 'Test RCauth Pilot Delegation Service for providing end-user proxy certificates to Science Gateways and other portals',
    ],
    'OrganizationName' => [
        'en' => 'Organization',
    ],
    'name' => [
        'en' => 'Test RCauth Pilot Delegation Service',
    ],
    'OrganizationDisplayName' => [
        'en' => 'Organization',
    ],
    'url' => [
        'en' => 'https://www.example.org/',
    ],
    'OrganizationURL' => [
        'en' => 'https://www.example.org/',
    ],
    'contacts' => [
        [
            'contactType' => 'administrative',
            'company' => 'Example',
            'givenName' => 'Operator',
            'emailAddress' => [
                'admin@example.org',
            ],
        ],
        [
            'contactType' => 'support',
            'company' => 'Example',
            'givenName' => 'Operator',
            'emailAddress' => [
                'admin@example.org',
            ],
        ],
        [
            'contactType' => 'other',
            'company' => 'Example',
            'givenName' => 'CSIRT',
            'emailAddress' => [
                'security@example.org',
            ],
            'telephoneNumber' => [
                '+1-2-34567890',
            ],
        ],
        [
            'contactType' => 'technical',
            'givenName' => 'Operator',
            'emailAddress' => [
                'admin@example.org',
            ],
        ],
    ],
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://rcauth-demo-delegation.eosc.grnet.gr/Shibboleth.sso/SAML2/POST',
            'index' => 1,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://rcauth-demo-delegation.eosc.grnet.gr/Shibboleth.sso/SAML2/POST-SimpleSign',
            'index' => 2,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://rcauth-demo-delegation.eosc.grnet.gr/Shibboleth.sso/SAML2/Artifact',
            'index' => 3,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:PAOS',
            'Location' => 'https://rcauth-demo-delegation.eosc.grnet.gr/Shibboleth.sso/SAML2/ECP',
            'index' => 4,
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://rcauth-demo-delegation.eosc.grnet.gr/Shibboleth.sso/SLO/SOAP',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://rcauth-demo-delegation.eosc.grnet.gr/Shibboleth.sso/SLO/Redirect',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://rcauth-demo-delegation.eosc.grnet.gr/Shibboleth.sso/SLO/POST',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://rcauth-demo-delegation.eosc.grnet.gr/Shibboleth.sso/SLO/Artifact',
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
            'X509Certificate' => 'MIID5TCCAk2gAwIBAgIJALN1aN4Soq1AMA0GCSqGSIb3DQEBCwUAMBUxEzARBgNVBAMTCmRlbGVnLWRlbW8wHhcNMjEwOTE3MDA1MzM0WhcNMzEwOTE1MDA1MzM0WjAVMRMwEQYDVQQDEwpkZWxlZy1kZW1vMIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEA0LXtrESIbp7px7xInFK3MNf87cVoOQZdquZ2NNQWSZ+bvU2cS1FaaS++hQVH8IDty5Qwih7BrG+FKtV8nqMnsxKdoGFphnCwo5m4ucuWluZ/9zcHuDzdK3Tmg+ZctlB2cjjJshakkQxcywJp6YSYKaXtvVpt9gPE+HmUkAHGC+6XFWVxVUyDnEBcCPQAJnCsezJlH+ynolR6OskYYVIbZrmaOhZWyFYIQTIRdiPfW8c8CrWSMYAtBXJNPs5wLQrG6RFGxYKRClW1otdWkAoB0mci48Iic4mh/KJ2tJPWxNNfvIQlewdRLxiHNBGqR8gSKc7nYtCu/WekTkUxjQ9UeRfQVmiEphVf2aBmO/yHF5DjMQlZ64PMyx2MtN5w+EaoHEjxYypWLH+yZAGWf3p1S9l2yfAAli1qmv5IzdlRzIYVnBPEQIcumqj70PW2biBCJUS+j2+qalKZf/3Jb5oU8shKz5St7Vfe6hMAtl/EungfJkCCmk3Rc65aUi0xm+kzAgMBAAGjODA2MBUGA1UdEQQOMAyCCmRlbGVnLWRlbW8wHQYDVR0OBBYEFFRaWdVE4TpRQ4kYY2yu+WVG9p/jMA0GCSqGSIb3DQEBCwUAA4IBgQBQWmI6/HmYPYCzPATkcqYl0K6ql9mmFEA96HFoE57IasObD911ckA5W7zpH+bc3R2bEQugnq5Bt1fbq3TvSC32mhtZcOAb9N03VhsXSPQGmYdd09hMhxGXGsXaK/b9Q4XtHvffh0+a+4dlzj1FngYDgrLhoNdclTJeL1yrQYgihJE/gGE07a690KisRtRPMvWApivXwzV+/kBDvRKC7htPz3QJaxe88v7yvD2cfkRrdB7p5k6pFAhpu+1lNGPE/PVtWdwBXSBxo0pWxwDOk5RLt3qQZtnKOcJivCL7UnxVJKo9bsI/FV3SjPqLAwBcHbdkqEQttxpZKrrbW5nIwmpcEgngBGdl8ud3m5+E/7jGNlftO54o3ij5Zcj9SBwxMQ4rbXeq6EoGpnVRNg7XHPusQfLyFxyTvmbcC1UZxBGCCJgNxMJt2tctZn2nkD0NpqvjjbF8SFW5uAxHxxIxVIuvfkqdx4uLKgUXkM2N3/jOSKbKoBQN8ACEgfVHSimQzs8=',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIID5TCCAk2gAwIBAgIJAJ3D85zxrVF0MA0GCSqGSIb3DQEBCwUAMBUxEzARBgNVBAMTCmRlbGVnLWRlbW8wHhcNMjEwOTE3MDA1MzM0WhcNMzEwOTE1MDA1MzM0WjAVMRMwEQYDVQQDEwpkZWxlZy1kZW1vMIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEAxdVpTQJZbo7dTTGhchaHKbh8ecmnHm5WEjaXMeJCQaf+GZG2m071UJzMIX9LqRpEYcrSkeEK+mwknUkGI6zm1R/TRAskG89hCTF97IPZuAjfxxxQNjTM/qQQlUenBJEYXVy1aNgFqX/zbrUmGxPnRcT79rRZBSH7d0D+yyMcxnQ54CwKUxeukfOqUNe045FBHRvmKWZy6zjz73+HrSF6wsE8DhG1Pk+qsVC9Amx3ttTILz3EMwwXxX2PPjalViwS6XdmZPYYMYHVLqzh5IMyUXQkJhkVf5bubfEX0thVZ5RFwmWcnfgCFTcg5D4+VKPvKADyLfsLmrcF6AhP+DkAhBtJVNnWf3PNpTxFkI4ZpKE7THzDlZNtba++azSqhQZJeGgDk9a46xfXzMKBZJgZQ/b+KvNxXSX1ZPqa+sQXQ3YZeXIezCy74p8HZVY4mOohbOTyai3PrbmFgCSVVgolY9EbDTEWqvB0HIhxX20ZHEZxKyuE/Nbg/i3q0X1EG91vAgMBAAGjODA2MBUGA1UdEQQOMAyCCmRlbGVnLWRlbW8wHQYDVR0OBBYEFIM0i0PWbpJCAx+5Ab0RZ8zmGbo8MA0GCSqGSIb3DQEBCwUAA4IBgQC3H2ka69AC341fiRBKc9dArb0CujafjdNML1fhpaw20sqvGsSKsadyOXGYq+EV759r0QjWZTDsT9nln0wibb4+Z6ky7w8wqjDnRE9Pqf6QHye+DpE1lby7BX9Yzs9O/0c+JA5Sql+QVnfCUh449nx6357neue+vwrswoxdzn/RaKKsSCO/fv4MBisfbzt76zt+NIavGQOHkFuZcsXXU2V+5KzhPqkJfpzt2iFJOf9KG28kYf767NATfkZ12T1U1q6/7m7oSXBe6rjK43YeVXaireEeitukqXSBM4maQ/wHQYpoNW5ye5IgXnElD5kJEC2MV3JcOkNWNoRiQzz/I8ZZ53o+X9YkgNiSwayxPPaKr++Hsd6FIily2JTH6zfNvj385jo2nPLLObEK/cQwYnHAxTS5cSjuTDDNol5p0hv36t6xzg/O0W2eBRQtFGUge30iWUs7japkRthWz4ApTdWu3QZsAO2HBHhakSTI0NbNMC7T3nJ8RT8uOWWGJHCtDqA=',
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
            'en' => 'Test RCauth Pilot Delegation Service',
        ],
        'Description' => [
            'en' => 'Test RCauth Pilot Delegation Service for providing end-user proxy certificates to Science Gateways and other portals',
        ],
        'InformationURL' => [
            'en' => 'https://www.example.org/',
        ],
        'PrivacyStatementURL' => [],
    ],
];
