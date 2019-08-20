<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://fedauth.colorado.edu/idp/shibboleth'] = array(
    'SingleSignOnService'  => 'https://fedauth.colorado.edu/idp/profile/SAML2/Redirect/SSO',
    // 'SingleLogoutService'  => 'https://example.com/simplesaml/saml2/idp/SingleLogoutService.php',
    'certificate'          => '../cert/saml.crt',
);
