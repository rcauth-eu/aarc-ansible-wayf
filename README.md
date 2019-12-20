# Ansible Deploy Scripts for RCauth WAYF

### What are these scripts for?

These scripts are for deploying a Where-Are-You-From (WAYF) service for an
RCauth online CA. It is running as an Identity Provider-proxy in front of an
RCauth Delegation Server.

### Layout

There are three roles:
- common - contains only the variables common to the every role.
- basic - sets up the host apart from the SimpleSAMLphp installation
- simplesamlphp - sets up SimpleSAMLphp, starting from a upstream tarball,
  with a large number of patches installed on top. In addition, there is a
  special `rcauth` module installed, providing two filters and a theme.

There is only a single playbook, _wayf.yml_, that runs all the roles.

### Prerequisites

 1. You need to have a host certificate ready for the WAYF. Place your PEM
    formatted certificate and key file in the _roles/basic/files/_
    directory (see the _*.crt.PLACEHOLDER_ and _*.key.PLACEHOLDER_ files).  
    It is assumed you will be using a certificate from one of the standard
    browser-supported CAs. In case of a sub-CA you also will need to specify
    the `hostcert_intermediate` variable to the correct PEM file on the remote
    host (see further below on how to configure variables) and make sure it is
    present in the _roles/basic/files/_ (see the _*.chain.PLACEHOLDER_).

 2. You need to have a SAML metadata certificate ready for the WAYF. Place
    the PEM formatted certificate and key file in the _roles/basic/files/_
    directory. If you don't have them yet, you can create one using e.g.

        FQDN=<ssp_hostname>
        openssl req -newkey rsa:3072 -new -x509 -days 3652 -nodes \
          -out saml-cert-${FQDN}.pem -keyout saml-key-${FQDN}.pem \
          -subj "/CN=${FQDN}"`

 3. Create a directory under _config/_ with the files as indicated in
    the example _config/PLACEHOLDER/_ directory. You will need to
    change several of the default variables.  
    Note that the defaults are set in the _defaults/main.yml_ files of the
    different roles, while the files under the config directory are there to
    override those defaults.

 4. You need to make an 'inventory' file containing the FQDN of the host, see
    _hosts.inventory.PLACEHOLDER_ for an example. Note that the FQDN set in the
    'inventory' file can be different from the hostname used in the WAYF's URL,
    the latter being set using the `ssp_hostname` variable by the common role.
    The inventory file also should point to the configuration directory as
    described in the previous point.

 5. You will need to provide the correct certificate and URL for the eduGAIN
    metadata feed you will be using. Specify both as `edugain_cert` and
    `edugain_url` in the _simplesamlphp_env.yml_ file. Put the certificate in
    the _roles/simplesamlphp/files_ directory. For SURFconext you can find the
    URL and certificate at https://metadata.surfconext.nl/.

 6. You will need to create and set the different secrets as indicated in the
    example _secrets_env.yml_ file.

 7. The current scripts have been tested against SimpleSAMLphp version 1.18,
    for different versions you will need to adapt the patches.

 8. Several remote IdP and SP metadata files are included under
    _roles/simplesamlphp/files/metadata_. For the IdPs in the form of an .orig
    file plus a corresponding .patch. Which metadata is installed is defined
    by the 4 variables {prod,test}_{idp,sp}_remotes defined in the
    simplesamlphp role.

