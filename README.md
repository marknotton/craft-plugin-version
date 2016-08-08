# Version
## for Craft CMS
Twig Extension adds a url parameter to a file, based on it's last modified timestamp.

Add a string parameter if you want to define the variable name. 'v' is used by default if one isn't passed.

Usage:  <link rel="stylesheet" href="{{ ('/assets/css/main.css')|version('cache') }}" />
Output: <link rel="stylesheet" href="/assets/css/main.css?cache=8989392029" />
