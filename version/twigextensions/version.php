<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class version extends \Twig_Extension {

  public function getName() {
    return Craft::t('Version');
  }

  public function getFilters() {
    return array(
      'version' => new Twig_Filter_Method( $this, 'version')
    );
  }

  // Add a string parameter if you want to define the variable name. 'v' is used by default if one isn't passed.
  public function version($filefull, $param=null) {

    // Remove all parameters from $filefull. Validate and check the url is relative or absolute and apply amendments if necessary
    $fileClean = ltrim(strtok($filefull, '?'), '/');

    // Validate and check the url is relative or absolute and apply amendments if necessary
    $fileVal = getcwd().'/'.rtrim(ltrim(parse_url($filefull)["path"], '/'), '/');

    if(file_exists($fileVal)) {

      // The second argument defines what variable name will be used within the string. This gets also slugified.
      $param = !empty((string)$param) ? ElementHelper::createSlug((string)func_get_arg(1)) : 'v';

      $version = filemtime($fileClean);

      return $fileClean.'?'.$param.'='.$version;

    } else {

      return $filefull;

    }
  }

}
