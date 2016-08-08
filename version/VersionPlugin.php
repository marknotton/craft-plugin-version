<?php
namespace Craft;

class VersionPlugin extends BasePlugin {
  public function getName() {
    return Craft::t('Version');
  }

  public function getVersion() {
    return '0.1';
  }

  public function getDeveloper() {
    return 'Yello Studio';
  }

  public function getDeveloperUrl() {
    return 'http://yellostudio.co.uk';
  }

  public function addTwigExtension() {
    Craft::import('plugins.version.twigextensions.version');
    return new version();
  }

  public function getReleaseFeedUrl() {
    return 'https://raw.githubusercontent.com/marknotton/craft-plugin-version/master/version/releases.json';
  }
}
