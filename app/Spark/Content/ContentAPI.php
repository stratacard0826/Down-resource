<?php namespace Spark\Content;

use GuzzleHttp\Client;
use GuzzleHttp\TransferException;
use Config;
use Cache;
use Storage; 
use App\Downfile;
use App\Exceptions\ContentNotFoundException;

class ContentAPI {

  protected $client;

  protected $bundle;

  protected $content;

  public function __construct($client)
  {

      $this->client = $client;
  
  }

  public function import($bundle)
  {

      $this->bundle = $bundle;

      $this->downloadResource($bundle);

  }

    private function downloadResource($bundle)
    {

         if (Storage::exists(basename($bundle))) return;

         try 
         {
         
            $response = $this->client->get($bundle);

         } 
         catch (TransferException $error) 
         {
         
            
         }

         Storage::put(basename($bundle), $response->getBody());
         Downfile::insert(array('name' => basename($bundle)));
    }

}
