@extends('layouts.main')

@section('title','發佈新任務')

@section('dialog')
@endsection

@section('content')
	@if(!Auth::Guest() && Auth::user()->auth=='1')
		<div class="container">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<h2 class="text-center">發佈新任務</h2>
            	        <form class="form-horizontal" role="form" method="POST" action="{{ url('/newquest') }}">
                          {{csrf_field()}}
            	        	<div class="form-group">
             	               <label for="catalog" class="col-md-2 col-md-offset-2 control-label">任務分類</label>
             	               <div class="col-md-6">
            	        			<select id="catalog" name="catalog" class="form-control">
										<option value="0">工讀</option>
										<option value="1">活動</option>
										<option value="2">講座</option>
									</select>
								</div>
							</div>
            	            <div class="form-group">
             	               <label for="title" class="col-md-2 col-md-offset-2 control-label">任務標題</label>
             	               <div class="col-md-6">
             	                   <input id="title" class="form-control" name="title">
                                     @if ($errors->has('title'))
                                          <span class="help-block">
                                          <strong>{{ $errors->first('title') }}</strong>
                                          </span>
                                     @endif
             	               </div>
             	            </div>
            	            <div class="form-group">
             	               	<label for="start_date" class="col-md-2 col-md-offset-2 control-label">報名開始日期</label>
             	               	<div class="col-md-6">
             	               		<input data-provide="datepicker" data-date-format="yyyy/mm/dd" data-date-autoclose="true" id="start_date" class="form-control" name="start_date">
                                          @if ($errors->has('start_date'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('start_date') }}</strong>
                                                </span>
                                          @endif
             	           		</div>
             	          	</div>
            	            <div class="form-group">
             	               	<label for="end_date" class="col-md-2 col-md-offset-2 control-label">報名截止日期</label>
             	               	<div class="col-md-6">
             	               		<input data-provide="datepicker" data-date-format="yyyy/mm/dd" data-date-autoclose="true" id="end_date" class="form-control" name="end_date">
                                          @if ($errors->has('end_date'))
                                          <span class="help-block">
                                          <strong>{{ $errors->first('end_date') }}</strong>
                                          </span>
                                          @endif
             	           		</div>
             	          	</div>
            	            <div class="form-group">
             	               	<label for="description" class="col-md-2 col-md-offset-2 control-label">任務描述</label>
             	               	<div class="col-md-6">
             	               		<textarea id="description" rows="5" class="form-control" name="description"></textarea>
                                          @if ($errors->has('description'))
                                          <span class="help-block">
                                          <strong>{{ $errors->first('description') }}</strong>
                                          </span>
                                          @endif
             	           		</div>
             	          	</div>
            	            <div class="form-group">
             	               	<label for="salary" class="col-md-2 col-md-offset-2 control-label">給予薪資</label>
             	               	<div class="col-md-2">
             	               		<input id="salary" class="form-control" name="salary" placeholder="120">
                                          @if ($errors->has('salary'))
                                          <span class="help-block">
                                          <strong>{{ $errors->first('salary') }}</strong>
                                          </span>
                                          @endif
             	           		</div>
             	           		<label for="salary" class="control-label">元</label>
             	          	</div>
            	            <div class="form-group">
             	               	<label for="workforce" class="col-md-2 col-md-offset-2 control-label">需要人數</label>
             	               	<div class="col-md-2">
             	               		<input id="workforce" class="form-control" name="workforce">
                                          @if ($errors->has('workforce'))
                                          <span class="help-block">
                                          <strong>{{ $errors->first('workforce') }}</strong>
                                          </span>
                                          @endif
             	           		</div>
             	           		<label for="workforce" class="control-label">人</label>
             	          	</div>
            	            <div class="form-group">
             	               	<label for="requirement" class="col-md-2 col-md-offset-2 control-label">任務條件</label>
             	               	<div class="col-md-2">
             	               		<input id="requirement" class="form-control" name="requirement">
             	           		</div>
             	          	</div>

                        	<div class="form-group">
                        	    <div class="col-md-6 col-md-offset-4">
                        	        <button type="submit" class="btn btn-primary">
                         	           <i class="fa fa-btn fa-sign-in"></i><span class="glyphicon glyphicon-ok"></span> 送出
                         	       </button>
                            	</div>
                        	</div>
                    	</form>
                	</div>
            	</div>
        	</div>
		</div>

	@endif
@endsection