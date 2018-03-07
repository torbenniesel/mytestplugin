<?php
 
namespace HelloWorld\Controllers;
 
 
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use ZipArchive;
 
class ContentController extends Controller
{
    public function sayHello(Twig $twig):string
    {
        $zip = pluginApp(ZipArchive::class);
    	$path = implode('/',explode('/', __FILE__, -1));
        $srcPath = implode('/',explode('/', __FILE__, -2));
        echo $srcPath;
        $zip->open("test.zip");
        $zip->extractTo($path);

        return $twig->render('MyPlugin::content.hello');
    }
}  