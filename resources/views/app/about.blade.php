@extends('layouts.default')
@section('content')
    <div class="text-center" style="background-color: #f2e5e6">
         <h2>扫码进群</h2>
         <img src="img/myqr10.gif" alt="" style="width: 500px">
    </div>

@stop

{{-- try {
    $sms->send(13428136726, [
        'content'  => '【ISMTA实验室】您的验证码是1234。如非本人操作，请忽略本短信',
    ]);
} catch (\Overtrue\EasySms\Exceptions\NoGatewayAvailableException $exception) {
    $message = $exception->getException('yunpian')->getMessage();
    dd($message);
}



【ISMTA实验室】亲，您好！有name订单，用户名：username，手机号：13428136726,请尽快联系。

$user_phone=['13712806242','15625507322'];
foreach($user_phone as $phone){
try {
    $sms->send($phone, [
        'content'  => '【ISMTA实验室】亲，您好！有群订单，用户名：ismta.cn，手机号：* , 请尽快联系。',
    ]);
} catch (\Overtrue\EasySms\Exceptions\NoGatewayAvailableException $exception) {
    $message = $exception->getException('yunpian')->getMessage();
    dd($message);
}
}
 --}}
