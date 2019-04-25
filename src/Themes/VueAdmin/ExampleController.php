<?php

namespace Yb\LVT\VueAdmin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ExampleController extends BaseController
{
    public function checkSubmit(Request $request)
    {
        dd($request->all());
    }

    public function imgUpload(Request $request)
    {
        return [
            'location' => $uploaded_file = '/images/img.jpg'
        ];
    }

    public function fileUpload(Request $request)
    {
        dd($request->all());
    }
}
