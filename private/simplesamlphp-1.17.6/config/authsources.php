<?php

$config = [

    // This is a authentication source which handles admin authentication.
    'admin' => [
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.

        'core:AdminPassword',
    ],


    // An authentication source which can authenticate against both SAML 2.0
    // and Shibboleth 1.3 IdPs.
    'cu_boulder' => [
        'saml:SP',
        'privatekey' => 'saml.pem',
        'certificate' => 'saml.crt',
        
        // Whether to sign authentication requests sent from this SP
        'sign.authnrequest' => true,

        // The entity ID of this SP.
        // Can be NULL/unset, in which case an entity ID is generated based on the metadata URL.
        // This is where we put the url of the site/application we're adding SSO to
        // 'entityID' => 'https://www.someapplication.com',

        // The entity ID of the IdP this SP should contact.
        // Can be NULL/unset, in which case the user will be shown a list of available IdPs.
        'idp' => 'https://fedauth.colorado.edu/idp/shibboleth',

        // The URL to the discovery service.
        // Can be NULL/unset, in which case a builtin discovery service will be used.
        'discoURL' => null,

        /*
         * The attributes parameter must contain an array of desired attributes by the SP.
         * The attributes can be expressed as an array of names or as an associative array
         * in the form of 'friendlyName' => 'name'. This feature requires 'name' to be set.
         * The metadata will then be created as follows:
         * <md:RequestedAttribute FriendlyName="friendlyName" Name="name" />
         */
        
        'name' => [
            'en' => 'Web Express',
        ],

        'attributes' => [
            'cuEduPersonUUID' => 'urn:oid:1.3.6.1.4.1.632.11.1.30',
            'displayName' => 'urn:oid:0.9.2342.19200300.100.1.1',
            'givenName' => 'urn:oid:2.5.4.42',
            'sn' => 'urn:oid:2.5.4.4',
            'uid' => 'urn:oid:0.9.2342.19200300.100.1.1',
            'mail' => 'urn:oid:0.9.2342.19200300.100.1.3',
            'eduPersonAffiliation' => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.1'
        ],
        /*
        'attributes.required' => [
            'urn:oid:x.x.x.x',
        ],
        */
    ],
];
