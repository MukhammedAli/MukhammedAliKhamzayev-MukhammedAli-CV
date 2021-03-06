<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   

   <link rel="stylesheet" href="<?php echo url('/'); ?>/css/base.css">  
   <link rel="stylesheet" href="<?php echo url('/'); ?>/css/main.css">
   
   <style>
		ul{
			display: flex;
			float:left;
			justify-content: flex-end;
			list-style-type: none;
			position: absolute;
			left: 1200px;
			top: 35px;
		}
	</style>
</head>
<body>

<div class="navbar1" style="background-color: white;">
        <div class="eachnav"><a href=" {{ route('home') }} ">{{__("Home")}}</a></div>
        <div class="eachnav"><a href=" {{ route('skills') }} ">{{__("Skills")}}</a></div>
        <div class="eachnav"><a href=" {{ route('contact') }} ">{{__("Contact")}}</a></div>
		<div class="new">       @php $locale = session()->get('locale'); @endphp
                        <ul class="floatstart">
                        <li class="floatone"><a href="en">EN</a></li>
                        <li class="floatone"><a href="ru">RU</a></li>
                        <li class="floatone"><a href="kz">KZ</a></li>
                        </ul>
@section('content')</div>
    </div>
   
   

	<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>{{__("Services")}}</h5>
   			<h1>{{__("What am I capable of?")}}</h1>

   			<p class="lead">{{__("Here you find some additional services and my abilities.")}}</p>
   		</div>   		
   	</div> 

   	<div class="row services-content">

   		<div id="owl-slider" class="owl-carousel services-list">

	      	<div class="service">	

	      		<span class="icon"><i class="icon-earth"></i></span>            

	            <div class="service-content">	

	            	 <h3>{{__("Database")}}</h3>

		            <p class="desc">{{__("I am introduced with database applications.Data manipulating languages like SQL Server and Oracle PL/SQL languages are my best tools.")}}</p>
	         		
	         	</div> 	         	 

				</div>

				<div class="service">	

					<span class="icon"><i class="icon-window"></i></span>                          

	            <div class="service-content">	

	            	<h3>{{__("Web Development")}}</h3>  

		            <p class="desc">{{__("I have some fundamental experience in web technologies. Currently , I code on some basic web programming languages like html css and javascript.Designing of web sites is fully own idea.So I create web applications only by own understanding.")}} </p>

	            </div>	                          

			   </div> 

			   

				<div class="service">

					<span class="icon"><i class="icon-toggles"></i></span>	              

	            <div class="service-content">

	            	<h3>{{__("Back End")}}</h3>

		            <p class="desc">
                        {{__("Only basic knowledge of PHP language and laravel framework a little bit.")}}
	         		</p> 
	         		
	            </div>                

				</div> 

			  

			  

	      </div>
   		
   	</div> 
		
	</section> 
	@endsection
	<main class="py-4">
            @yield('content')
        </main>
</body>
</html>