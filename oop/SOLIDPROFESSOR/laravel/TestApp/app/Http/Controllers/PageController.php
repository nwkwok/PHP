<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  protected $customLogic;
    
  public function __construct(\CustomLogic $customLogic)
  {
    $this->customLogic = $customLogic;
  }
    
  public function index()
  {
    return $this->customLogic->add(4);
  }
}