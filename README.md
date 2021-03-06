<img src="http://i.imgur.com/ZVOOvBp.png" alt="Version" align="left" height="60" />

# Version *for Craft CMS*

> This plugin is no longer maintained. I'm committing to Craft 3 development only. Feel free to use the source code as you like. If you're looking for a Craft 3 version of this plugin, it's likely I've merged parts or all of this plugin into my [Helpers module.](https://github.com/marknotton/craft-module-helpers)

Filter adds a url parameter to a file based on it's last modified timestamp.

Files being queried must be local in order for the timestamp to be retrieved. The current working directory is automatically used if one isn't found. So no need for absolute paths.

### Basic Usage
Default parameter name is 'v'
```
<link rel="stylesheet" href="{{ ('/assets/css/main.css')|version }}" />
```
### Basic Output
```
<link rel="stylesheet" href="/assets/css/main.css?v=8989392029" />
```

### Alternative Usage
A custom parameter names can be passed too
```
<link rel="stylesheet" href="{{ ('/assets/css/main.css')|version('cache') }}" />
```
### Alternative Output
```
<link rel="stylesheet" href="/assets/css/main.css?cache=8989392029" />
```
