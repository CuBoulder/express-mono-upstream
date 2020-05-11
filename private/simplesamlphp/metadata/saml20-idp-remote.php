<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://fedauth.colorado.edu/idp/shibboleth'] = array(
    'entityid' => 'https://fedauth.colorado.edu/idp/shibboleth',
    'description' =>
    array(
        'en' => 'University of Colorado Boulder',
    ),
    'OrganizationName' =>
    array(
        'en' => 'University of Colorado Boulder',
    ),
    'name' =>
    array(
        'en' => 'University of Colorado Boulder',
    ),
    'OrganizationDisplayName' =>
    array(
        'en' => 'University of Colorado Boulder',
    ),
    'url' =>
    array(
        'en' => 'http://www.colorado.edu/',
    ),
    'OrganizationURL' =>
    array(
        'en' => 'http://www.colorado.edu/',
    ),
    'contacts' =>
    array(
        0 =>
        array(
            'contactType' => 'technical',
            'givenName' => 'Marwan Shaher',
            'emailAddress' =>
            array(
                0 => 'shibboleth@colorado.edu',
            ),
        ),
        1 =>
        array(
            'contactType' => 'technical',
            'givenName' => 'Kevin Foote',
            'emailAddress' =>
            array(
                0 => 'shibboleth@colorado.edu',
            ),
        ),
        2 =>
        array(
            'contactType' => 'administrative',
            'givenName' => 'Kerry Havens',
            'emailAddress' =>
            array(
                0 => 'shibboleth@colorado.edu',
            ),
        ),
        3 =>
        array(
            'contactType' => 'support',
            'givenName' => 'IT Service Center',
            'emailAddress' =>
            array(
                0 => 'help@colorado.edu',
            ),
        ),
        4 =>
        array(
            'contactType' => 'other',
            'givenName' => 'IT Security Office',
            'emailAddress' =>
            array(
                0 => 'security@colorado.edu',
            ),
        ),
    ),
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' =>
    array(
        0 =>
        array(
            'Binding' => 'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
            'Location' => 'https://fedauth.colorado.edu/idp/profile/Shibboleth/SSO',
        ),
        1 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://fedauth.colorado.edu/idp/profile/SAML2/POST/SSO',
        ),
        2 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://fedauth.colorado.edu/idp/profile/SAML2/POST-SimpleSign/SSO',
        ),
        3 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://fedauth.colorado.edu/idp/profile/SAML2/Redirect/SSO',
        ),
    ),
    'SingleLogoutService' =>
    array(
        0 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://fedauth.colorado.edu/idp/profile/SAML2/Redirect/SLO',
        ),
        1 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://fedauth.colorado.edu/idp/profile/SAML2/POST/SLO',
        ),
        2 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://fedauth.colorado.edu/idp/profile/SAML2/POST-SimpleSign/SLO',
        ),
        3 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://fedauth.colorado.edu:8443/idp/profile/SAML2/SOAP/SLO',
        ),
    ),
    'ArtifactResolutionService' =>
    array(
        0 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
            'Location' => 'https://fedauth.colorado.edu:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
            'index' => 1,
        ),
        1 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://fedauth.colorado.edu:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
            'index' => 2,
        ),
    ),
    'NameIDFormats' =>
    array(),
    'keys' =>
    array(
        0 =>
        array(
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => '
MIIDOzCCAiOgAwIBAgIUISKLp/LUBR62UD3eacuMlgyq1mEwDQYJKoZIhvcNAQEF
BQAwHzEdMBsGA1UEAxMUZmVkYXV0aC5jb2xvcmFkby5lZHUwHhcNMTEwNDA3MjEx
OTI3WhcNMzEwNDA3MjExOTI3WjAfMR0wGwYDVQQDExRmZWRhdXRoLmNvbG9yYWRv
LmVkdTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAKKfxWBCz6RGXDaM
+Td/GX14ozBjZgctgcOOduUWf1Y6awzXJgRlC7k4LGCJZscZLsuZgfzdO6qTxDwk
Bbk6UiwUn+dHng6DNBNpuCkUdoCEv6F5gUzZG+aR1NBWk+n565c/u/OAZKt/TgQz
ni+zSKGR78DVu/FMrgEtFL37mGjy3qcHe9c/y4fVh+TuFpZOvK5TTMsy/OI0Jx2q
tLL/At7Od5oWEm32UH7NtZl5qBg36SYHcDYeVkaCyCoQrFw03W3i+2Q5PUo5FwG6
GpeAoZEn1pU1iQ4rowdgafHH8xAg7boLdsax6J02pMem732e7VXUk9pkaDewUfSl
OwU391kCAwEAAaNvMG0wTAYDVR0RBEUwQ4IUZmVkYXV0aC5jb2xvcmFkby5lZHWG
K2h0dHBzOi8vZmVkYXV0aC5jb2xvcmFkby5lZHUvaWRwL3NoaWJib2xldGgwHQYD
VR0OBBYEFLtp54NAL/CFuBokXwZxmltg52+6MA0GCSqGSIb3DQEBBQUAA4IBAQBJ
KfBAodCf7pfUUBo/y2htFEUEc1EVyyzLardzvxncQBY76KLQKzynkXdzynmtWWdX
ERDsBWyM5idtMwanSXZhLBxKZ0BLx0whe0QrP26bFjD3hDc54jxWucfK7gbVkaG+
0U07hjYazpz6YuAXQ/n4+McCnqw5vI7aEreIWH6ky5kU3+KkNuEBsuOfsPCpfhHG
d/zUrol9WKi0oBE/3A3WluEsKobPTI+Df3UOQbWnujwquIWpR7PYqotR2BYrAuPI
2ijwqoxQck0dHwpdffo+4STtjJN1LMGDAOgVBZEBX5HQkgt5Z9fxKHw1ok0ygPyD
aE45z9S0D3Rt1IJs3AeI
                    ',
        ),
    ),
    'scope' =>
    array(
        0 => 'colorado.edu',
    ),
);
