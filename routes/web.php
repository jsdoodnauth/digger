<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SourceListController;

require __DIR__.'/../vendor/autoload.php'; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('sourcelist', SourceListController::class);

// Route::get('/digdeep', function() {
//     echo base_path("drivers\chromedriver.exe");
//     $url = "https://shopee.co.id/shop/127192295/search";
//     $client = Client::createChromeClient(base_path("drivers/chromedriver"));
//     $crawler = $client->request('GET', $url);
//     $client->waitFor('.shopee-page-controller');                                         // wait for the element with this css class until appear in DOM
//     echo $crawler->filter('.shopee-page-controller')->text();
// });

// Route::get('/dig', function() {
//     $client = new \Goutte\Client();

//     $crawler = $client->request('GET', 'https://www.imdb.com/search/name/?birth_monthday=12-10');

//     $links = $crawler->evaluate('//div[@class="lister-list"][1]//h3/a');

//     foreach ($links as $link) {
//         echo $link->textContent.PHP_EOL;
//     }
// });