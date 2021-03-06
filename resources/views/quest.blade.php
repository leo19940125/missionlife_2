@extends('layouts.main')

@section('title','任務大廳')

@section('dialog')
@endsection

@section('content')
	
	@if (Auth::guest())
		<div class="container-fluid">
			<!--<img class="img-responsive center-block" style="width:100%" alt="Responsive image" src="http://i.imgur.com/WL6lmMz.jpg"></img>-->
			<br>
			@include('layouts.partials.dialog',['dialogs' => $dialogs])
		</div>
	@elseif (Auth::user()->activation == 'false')
		<div class="alert alert-danger">
			唔喔！還沒完成「認證」的話，無法使用完整的Mission Life喔！點擊<a href="{{ url('/active') }}">這裡</a>完成認證吧！
		</div>
	@else
		<div class="container">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="{{ url('/') }}">首頁</a></li>
					<li class="active">任務大廳</li>
				</ol>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<div style="height:400px;text-align:center;">
								<!--- 打工介紹放這 -->
								<div class="col-md-12">
									<h3 class="text-center">工讀任務</h3><br>
									<p>然後這邊放著一堆介紹</p>
									<a href="{{ url('/work') }}" style="position: relative;top: 240px;" class="btn btn-primary">進入</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<div style="height:400px;text-align:center;">
								<!--- 活動介紹放這 -->
								<div class="col-md-12">
									<h3 class="text-center">活動任務</h3><br>
									<p>然後這邊放著一堆介紹</p>
									<a href="{{ url('/activity') }}" style="position: relative;top: 240px;" class="btn btn-primary">進入</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<div style="height:400px;text-align:center;">
								<!--- 講座介紹放這 -->
								<div class="col-md-12">
									<h3 class="text-center">講座任務</h3><br>
									<p>然後這邊放著一堆介紹</p>
									<a href="{{ url('/conf') }}" style="position: relative;top: 240px;" class="btn btn-primary">進入</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endif


@endsection