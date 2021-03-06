@extends('main.MDmain') 
@section('title')
	{{$found->Item}}
@endsection

@section('graphs') 
    <meta property ="og:url" content="http://commcycle.co/product-view/{{$found->id}}"/> 
    <meta property ="og:type" content="website"> 
    <meta property="og:title" content="{{$found->Item}}"/>
    <meta property="og:image" content="http://commcycle.co/{{$found->Pics}}"/>
    <meta property="og:image:width" content="620" />
    <meta property="og:image:height" content="541" />
    <meta property="og:fb:page_id" content="168780823705676" />
    <meta property="og:description" content="Go check this out! Its only R {{$found->Price}}." />
@endsection


@section('content') 
	<div class='container' style='height:100%;'> 
		<div class='row'> 
			<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12' style='margin-top:70px;'> 
				<div class='thumbnail solid-two'>
					<img src='{{asset("$found->Pics")}}' style='height:100%; width:100%;'>
				</div>
			</div>
			<div class='col-lg-5 col-md-5 col-sm-6 col-xs-12' style='margin-top:70px;'> 
				<h3>{{$found->Item}}</h3>
				<h4 class=''>{{$found->Brand}} bag</h4>
				<p>{{$found->Info}}</p>
				@if(Session::get('staffulty') == 'Yes')
						<h2 class='text text-danger'>R {{ $found->Price + 100 }}</h2> 		
					
					@else
						<h2 class='text text-danger'>R {{$found->Price }}</h2> 		
				@endif
				<hr style=''>
				<p class='label label-default solid-two-light'>IN STOCK</p>
				<br><small class='text text-info'><span class='fa fa-check'></span> Personal note from us!</small><br>
				<br><small class='text text-info'><span class='fa fa-check'></span> 30 days warranty. You can return this item if it shows any defect within 29 days after purchase.</small><br>
				<br><small class='text text-info'><span class='fa fa-check'></span> 100% african print.</small><br>
				<br><small class='text text-info'><span class='fa fa-check'></span> No defects</small><br>
				<br><small class='text text-info'><span class='fa fa-check'></span> *Staff price= 300 ZAR</small><br>
	
			</div>
			<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12' style='margin-top:70px;'> 
				<div class='thumbnail ' style='padding:25px;'>
					<center>
					@if(Session::get('staffulty') == 'Yes')
						<center> 
							<small><span class='fa fa-check'></span> STAFF MEMBER</small>
						</center>
						<h2 class='text text-danger'>R {{ $found->Price + 100 }}</h2> 		
					@else
						<h2 class='text text-danger'>R {{$found->Price }}</h2> 		
					@endif			
						<a href='/add-to-cart/commcycle/{{ $found->id }}' class='btn btn-success solid-two-light' style='width:90%;'><span class='fa fa-plus'></span> <span class='fa fa-shopping-cart'></span> Add to Cart</a>
					
					</center>

					
				</div>
			</div>
		
		</div>
	</div>
	<div style='margin-bottom:300px;'> 
	</div>



@endsection