<!DOCTYPE html>
     <html class="no-js" lang="en"> 
     <head>
        <meta charset="utf-8">
         <title>Kards</title>
         <meta name="description" content="">  
         <meta name="author" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     
	     <link rel="stylesheet" href="<?php echo url('/'); ?>/css/base.css">  
  		 <link rel="stylesheet" href="<?php echo url('/'); ?>/css/main.css">
   
       
	

     
     
     </head>
<body>
    

    <div class="navbar1" style="background-color: white;">
		<div class="eachnav"><a href=" {{ route('home') }} ">Home</a></div>
        <div class="eachnav"><a href=" {{ route('skills') }} ">Skills</a></div>
        <div class="eachnav"><a href=" {{ route('contact') }} ">Contact</a></div>
    </div>
   
     <section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contact</h5>
   			<h1>I'd Love To Hear From You.</h1>

   			<p class="lead">If you have some questions you can leave information below, so that later I will consider your request.</p>

   		</div> 
   	</div> 

   	<div class="row contact-form">

   		<div class="col-twelve">

           
            <form name="contactForm" id="contactForm" method="post" action="">
      			<fieldset>

                  <div class="form-field">
 						   <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
	               </div>
                  <div class="form-field">
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	               </div>                      
                 <div class="form-field">
                     <button class="submitform">Submit</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form>

          
            <div id="message-warning">            	
            </div>            
           
      		<div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      		</div>

         </div> 
   		
   	</div>

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>

   			<p>
                Abylai Khan street 1/1<br>
                Kaskelen, Almaty<br>
                Kazakhstan
            </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>

   			<p>190103412@stu.sdu.edu.kz<br>
			   	muhammedalikhamzaev@gmail.com			     
			   </p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Me At</h5>

   			<p>Phone: 87081003517<br>
			
			     	
			   </p>

   		</div>
   		
   	</div> 
		
	</section>
</body> 
    </html>