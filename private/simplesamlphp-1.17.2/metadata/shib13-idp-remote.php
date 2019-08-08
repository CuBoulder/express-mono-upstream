<?php
/**
 * SAML 1.1 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://fedauth.colorado.edu/idp/shibboleth'] = [
    'SingleSignOnService'  => 'https://fedauth.colorado.edu/idp/profile/SAML2/Redirect/SSO',
    'certificate' => '../cert/saml.pem',
];

