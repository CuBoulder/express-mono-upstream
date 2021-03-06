@seo
Feature: Search Engine Optimization Bundle
  In order to optimize my site content for search engines
  As an authenticated user with the proper role
  I should be able access and edit SEO links and functionality

Scenario Outline: Only Devs can verify that the Google Analytics Settings page has been installed
  Given I am logged in as a user with the <role> role
  When I go to "admin/config/system/googleanalytics"
  Then I should see <message>

  Examples:
    | role            | message            |
    | developer       | "General Settings" |
    | administrator   | "Access denied"    |
    | site_owner      | "Access denied"    |
    | edit_my_content | "Access denied"    |
    | edit_only       | "Access denied"    |


# Check that SEO tab ha been activated on dashboard
Scenario Outline: Only upper-level roles are given the SEO tab
  Given I am logged in as a user with the <role> role
  When I go to "admin/dashboard"
  Then I should see the link "User"
  And I should see the link "SEO"

  Examples:
    | role             |
    | developer        |
    | administrator    |
    | site_owner       |

Scenario Outline: a user with the proper role can access the SEO checklist page
  Given I am logged in as a user with the <role> role
  When I go to "admin/dashboard/seo"
  Then I should see <message>

  Examples:
    | role            | message |
    | developer       | "Search Engine Optimization Checklist" |
    | administrator   | "Search Engine Optimization Checklist" |
    | site_owner      | "Search Engine Optimization Checklist" |
    | site_editor     | "Access denied"                       |
    | edit_my_content | "Access denied"                       |
    | edit_only       | "Access denied"                       |


Scenario: An anonymous user can not access the SEO checklist page
  Given I go to "admin/dashboard/seo"
  Then I should see "Access denied"

Scenario: The SEO Checklist is properly populated with SEO functionality
  Given I am logged in as a user with the "site_owner" role
  When I go to "admin/dashboard/seo"
  Then I should see "Google Analytics"
    And I should see "Site Verification"
    And I should see "Link Checker"
    And I should see "Sitemap"
    And I should see "Site Description"
    And I should see "Responsive/Mobile Friendly"
    And I should see "Content Updated"

# Verify access to SEO Link Checker
Scenario Outline: Some roles can access the SEO Link Checker
  Given I am logged in as a user with the <role> role
  When I go to "admin/settings/seo/linkchecker-analyze"
  Then I should see <message>

  Examples:
    | role            | message |
    | developer       | "Analyze your site content for links" |
    | administrator   | "Analyze your site content for links" |
    | site_owner      | "Analyze your site content for links" |
    # | site_editor     | "Access denied" |                    |
    # | edit_my_content | "Access denied"                       |
    # | edit_only       | "Access denied"                       |

# Verify that Link Checker works
@javascript
Scenario: the SEO Link Checker should work
  Given I am logged in as a user with the "site_owner" role
  When I go to "admin/settings/seo/linkchecker-analyze"
  And I press "edit-linkchecker-analyze"
  And I wait for the ".messages" element to appear
  Then I should see "nodes have been scanned"
  And I should see "blocks have been scanned"

# Verify access to Google Analytics account ID page
Scenario Outline: only Devs, Admins and SEOs can access the SEO Link Checker
  Given I am logged in as a user with the <role> role
  When I go to "admin/settings/site-configuration/google-analytics"
  Then I should see <message>

  Examples:
    | role            | message |
    | developer       | "Google Analytics Account IDs" |
    | administrator   | "Google Analytics Account IDs" |
    | site_owner      | "Google Analytics Account IDs" |
    | site_editor     | "Access denied"                       |
    | edit_my_content | "Access denied"                       |
    | edit_only       | "Access denied"                       |

# Verify that a Google Analytics number can be added to site
Scenario: A Google Analytics number can be added to site
  Given I am logged in as a user with the "site_owner" role
  When I go to "admin/settings/site-configuration/google-analytics"
  And I fill in "edit-ga-account" with "UA-654321-1"
  And I press "edit-submit"
  Then I should see "The configuration options have been saved"
  And the "edit-ga-account" field should contain "UA-654321-1"

# Verify access to meta tag description
Scenario Outline: only Devs, Admins and SEOs can access the Site Description setting
  Given I am logged in as a user with the <role> role
  When I go to "admin/settings/site-configuration/site-description"
  Then I should see <message>

  Examples:
    | role            | message |
    | developer       | "This text is added as a meta description for the site homepage." |
    | administrator   | "This text is added as a meta description for the site homepage." |
    | site_owner      | "This text is added as a meta description for the site homepage." |
    | site_editor     | "Access denied"                       |
    | edit_my_content | "Access denied"                       |
    | edit_only       | "Access denied"                       |


# Travis does not add the Meta tag to a basic page; no idea why
@broken
Scenario: Enabling SEO Bundle adds Meta Tag functionality to a Basic Page
  Given I am logged in as a user with the "site_owner" role
  And I am on "node/add/page"
  Then I should see "Meta tags"
  And I should see a "#edit-metatags" element
