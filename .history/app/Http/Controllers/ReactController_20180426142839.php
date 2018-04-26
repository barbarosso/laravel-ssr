<?php

namespace App\Http\Controllers;


class MyObject {
  private $property;

  public function  __construct($property) {
    $this->Property = $property;
  }
}


class ReactController extends Controller
{
     public function __invoke()
    {
        return view('react', [
            'packages' => $this->getPackages(),
        ]);
    }
    
    public function home(){
        return view('react', [
            'data' => [
                'packages' => $this->getPackages(),
            ]
        ]);
    }

    public function test(){
        $ListOfObjects[] = new myObject(1); 
        $ListOfObjects[] = new myObject(2); 
        $ListOfObjects[] = new myObject(3); 
        $ListOfObjects[] = new myObject(4); 
        return view('react', [
            'data' => [
                'test' => $ListOfObjects
            ]
        ]);
    }

    private function getPackages() : array
    {
        $path = public_path('packages.json');

        $contents = file_get_contents($path);

        return json_decode($contents, true);
    }
}
