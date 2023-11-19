<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index() {
        $basePath = public_path('Help'); 
    
        $resources = [
            'userManual' => url('/Help/userManual.pdf'),
            'faq' => url('/Help/faq.pdf'),
            'quickStartGuides' => url('/Help/quickStartGuides.pdf'),
            'visualGuides' => url('/Help/visualGuides.pdf')
        ];
    
        return view('help.index', ['resources' => $resources]);
    }

    //*public function __construct() {
      //  $this->middleware('admin');
  //  }
    
}
