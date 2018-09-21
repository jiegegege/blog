@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row" style="padding-top: 60px; line-height: 20px;">

            <div class="col-md-5">
                <img src="/img/1.jpg" style="width: 360px;" >
            </div>
            <div class="col-md-7">
                <h2>古人云:“近朱者赤，近墨者黑”</h2>
                <h4>
                    环境对于每个人的发展起着至关重要的影响。古有“孟母三迁”的典故，讲的也是这方面的道理。孟子的母亲为了防止孟子沾染恶习，不惜三次举家搬迁，
                    最终落户“学宫之院”。而孟子也正是由于被学院 里传来的琅琅读书声所引，继而对学习产生了浓厚的兴趣
                    从此发奋读书，终成大儒的。
                </h4>
            </div>
        </div>
    </div>
    @include('layouts._back_to_home')
@stop
