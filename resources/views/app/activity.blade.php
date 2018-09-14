@extends('layouts.default')
@section('content')
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="{{ route('login') }}">Library</a></li>
  <li class="active">Data</li>
</ol>
<hr />
<div class="container">
        <h1 class="page-header">导航路径与分页器</h1>
        <ul class="breadcrumb"><!-- 把设计好的导航路径的样式引进来 -->
            <li><a href="#">首页</a><span class="divider">/</span></li>
            <li class="active">产品列表</li>
        </ul>
        <div class="pagination">
        <!-- dvi-pagination 分页标签样式
            class-active  标示选中当前页
        -->
        <ul>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>
        </div>
        <!--
             pager  简单分页样式
             previous  最左边
             next      最右边
        -->
        <ul class="pager">
            <li class="previous"><a href="#">上一页</a></li>
            <li class="next"><a href="#">下一页</a></li>
        </ul>
    </div>
    <hr />
    <div class="container">
        <div class="pagination">
         <h2 class="page-header">路径导航</h2>
           <ul class="breadcrumb">   <!--面包屑-->
                <li><a href="#">守望先锋</a></li>
                <li><a href="#">虚幻争霸</a></li>
                <li><a href="#">枪火游侠</a></li>
                <li><a href="#">英雄联盟</a></li>
                <li><a href="#">神之浩劫</a></li>
            </ul>
            </hr>
            <ul class="pagination pagination-lg">   <!--分页-->
                <li><a href="#">上一页</a></li>
                <li><a href="#">虚幻争霸</a></li>
                <li><a href="#">枪火游侠</a></li>
                <li><a href="#">英雄联盟</a></li>
                <li><a href="#">下一页</a></li>
            </ul>
        </div>
    </div>

@stop
