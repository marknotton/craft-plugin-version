# **Version** for Craft CMS
Twig Extension adds a url parameter to a file based on it's last modified timestamp.

### Usage

GitHub's fenced code blocks are also supported with **Highlight.js** syntax highlighting:

```
// Default parameter name is 'v'
<link rel="stylesheet" href="{{ ('/assets/css/main.css')|version }}" />

// Custom parameter names can be passed too
<link rel="stylesheet" href="{{ ('/assets/css/main.css')|version('cache') }}" />
```

### Output
```
<link rel="stylesheet" href="/assets/css/main.css?v=8989392029" />
<link rel="stylesheet" href="/assets/css/main.css?cache=8989392029" />
```
