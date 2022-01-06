<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PartnerController extends Controller
{
    public function register(Request $request)
    {
        $info = $request->all();
        Session::put('info',$info);
        $output = '<!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Hợp đồng online</title>
                <base href="http://scontract.test:81/">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
            </head>
            <body>
                <div class="container-fluid" style="margin-top: 5%;">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">
                            <span>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</span>
                            <div>
                                <p>
                                    Độc Lập - Tự Do - Hạnh Phúc
                                </p>
                                <div>
                                    <p>
                                        ------o0o------
                                    </p>
                                </div>

                            </div>
                        </h3>
                        <h3 class="text-center">
                            <strong>HỢP ĐỒNG ĐĂNG KÝ ĐẠI LÝ - ĐỐI TÁC</strong>
                            <div>
                                <strong>DOPPELHERZ VIỆT NAM</strong>
                            </div>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <p class="lead">Họ và tên: <b style="color: red">'.$info["namepartner"].'</b></p>
                        <p class="lead">Số điện thoại: <b style="color: red">'.$info["phonepartner"].'</b></p>
                        <p class="lead">
                            Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6" style="text-align: center">
                                 <p>
                                    <b>Chữ ký đối tác</b>
                                </p>
                            </div>
                           <div class="col-md-6" style="text-align: center">
                                 <p>
                                    <b>Chữ ký công ty</b><br>
                                    <img style="width: 100px" src="https://doppelherz.vn/wp-content/uploads/2022/01/LOGO-DOPPELHERZ-Logo-tren-an-pham-792x800.png">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6" style="text-align: center">
                        <a href="'. route("export.pdf").'" class="btn btn-danger" target="blank">Xác nhận thông tin và tạo file PDF</a>
                    </div>
                    <div class="col-md-3"></div>

                </div>
            </div>
            </body>
        </html>';
        return $output;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
