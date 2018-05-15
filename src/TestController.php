<?php
namespace Tjl\Test;
use Illuminate\Routing\Controller;
use Test;

class TestController extends Controller{

    public function index(){

        var_dump(Test::index());
        return view("vendor.test.index");
    }


}
?>