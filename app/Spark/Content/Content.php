<?php namespace Spark\Content;

use Illuminate\Support\Facades\Facade;

class Content extends Facade {

  public static function getFacadeAccessor()
  {
      return 'content';
  }

}
