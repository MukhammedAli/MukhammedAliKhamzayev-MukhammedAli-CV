<!DOCTYPE html>
<html  lang="en"> 
<head>
   <meta charset="utf-8">
	<title>Kards</title>
	<meta name="description" content="">  
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
   

   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">
	   			<h5>{{__("Hello, World.")}}</h5>
	   			<h1>{{__("I'm Khamzayev Mukhammed Ali")}}</h1>

	   			<p class="intro-position">
	   				<span>{{__("Software Engineer")}}</span>
	   				<span>{{__("Application Developer")}}</span> 
	   			</p>

	   			<a class="button stroke smoothscroll" href="#about" title="">{{__("More About Me")}}</a>

	   		</div>  
   			
   		</div>   		 		
   	</div>
	   <ul class="intro-social">        
		<li><a href="https://www.linkedin.com/in/mukhammed-ali-khamzayev-0596a01b1/"><i class="fa fa-linkedin"></i></a></li>
		<li><a href="https://twitter.com/AliKhamzaev"><i class="fa fa-twitter"></i></a></li>
		<li><a href="https://vk.com/khamzayev06"><i class="fa fa-vk"></i></a></li>
		<li><a href="https://www.instagram.com/khamzayev06/"><i class="fa fa-instagram"></i></a></li>
	 </ul>
   </section> 


   
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>{{__("About")}}</h5>
   			<h1>{{__("Let me introduce myself.")}}</h1>

   			<div class="intro-info">

   				<img src="<?php echo url('/'); ?>/images/Image.jpg" alt="Profile Picture">

   				<p class="lead">{{__("Hi! My name is Khamzayev Mukhammed Ali. And I'm a sophomore at Suleiman demirel University.This is my own CV web page. Here you can email me and acquire some information about myself.")}}
                   </p>
   			</div>   			

   		</div>   		
   	</div> 
	@endsection
	<main class="py-4">
            @yield('content')
        </main>
</body>
</html>

      














