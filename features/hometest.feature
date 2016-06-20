Feature: Registation form
    In order to test register on this site
    As a visitor
    I need to fill in the necessary info
Scenario: 
    Given I am on the homepage
    When I fill in "name" with "Chrismo" 
    And I fill in "email" with "chris@chrismo.com"
    And I press "Register"
    Then I should see "THank you"