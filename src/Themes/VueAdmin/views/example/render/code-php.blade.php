@example

   <h1 class="mt-3">Light</h1>
    <code-php name="code">{!! <<<'DOC'
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class TestController extends Controller
{
    public function test()
    {
        return view('example');
    }

    public function img_upload($request)
    {
        return json_encode(array('location' => 'la'));
    }

    public function upload(Request $request) {
        print_r($request->input());
        exit();
    }
}
DOC;
; !!}</code-php>

    <h1 class="mt-3">Dark</h1>
    <code-php name="code" dark>{!! <<<'DOC'
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class TestController extends Controller
{
    public function test()
    {
        return view('example');
    }

    public function img_upload($request)
    {
        return json_encode(array('location' => 'la'));
    }

    public function upload(Request $request) {
        print_r($request->input());
        exit();
    }
}
DOC;
; !!}</code-php>

@endexample