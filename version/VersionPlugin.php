<?php
namespace Craft;

class VersionPlugin extends BasePlugin {
  public function getName() {
    return Craft::t('Version');
  }

  public function getVersion() {
    return '0.1';
  }

  public function getSchemaVersion() {
    return '0.1';
  }

  public function getDescription() {
    return 'Filter adds a url parameter to a file based on it\'s last modified timestamp.';
  }

  public function getDeveloper() {
    return 'Yello Studio';
  }

  public function getDeveloperUrl() {
    return 'http://yellostudio.co.uk';
  }

  public function getDocumentationUrl() {
    return 'https://github.com/marknotton/craft-plugin-version';
  }

  public function getReleaseFeedUrl() {
    return 'https://raw.githubusercontent.com/marknotton/craft-plugin-version/master/version/releases.json';
  }

  public function addTwigExtension() {
    Craft::import('plugins.version.twigextensions.version');
    return new version();
  }
}
