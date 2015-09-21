1.2.0 / 2015-09-21
==================

This is the final release of this driver. The Selenium1 protocol is deprecated.
The MinkSelenium2Driver should be used to interact with Selenium instead.

BC break:

* Changed the behavior of `getValue` for checkboxes according to the BC break in Mink 1.6

New features:

* Updated the driver to use findElementsXpaths for Mink 1.7 and forward compatibility with Mink 2
* Implemented `submitForm`
* Implemented `isSelected`
* Return the condition in the `wait` method
* Allow to specify alternative (not always '127.0.0.1') Selenium server url
* Implemented `getScreenshot`
* Implemented `evaluateScript`
* Implemented `maximizeWindow`
* Implemented `getOuterHtml`
* Added support of non-textual fields in `setValue`
* Changed the finding of elements to use Selenium rather than the source

Bug fixes:

* Fixed the retrieval of HTML attributes in `getAttribute`
* Fixed the support of textareas in `getValue`
* Fixed the removal of cookies
* Fixed the escaping of multiline XPath queries
* Fixed the execution of self-executing functions not wrapped in braces
* Added error handling when using the crawler to avoid fatal errors
* Fixed the execution of long JavaScript code
* Fixed the retrieval of values for radio groups
* Fixed the selection of option in a radio group
* Fixed the custom triggering of change events

Testsuite:

* Updated the testsuite to use the new Mink 1.6 driver testsuite
* Added testing on HHVM

Misc:

* Updated the repository structure to PSR-4
