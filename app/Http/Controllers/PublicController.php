<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function update(Request $request)
    {
        $file = fopen("archivo.txt", "w");
        fwrite($file, $request->getContent() . PHP_EOL);
        fclose($file);
        return 'ok';
    }
}
