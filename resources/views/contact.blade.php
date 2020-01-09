<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
    	<div class="col-md-8 offset-2 mt-5">
    		<form accept="{{ route('contact') }}" method="post">
    			@csrf
    		  	<div class="form-group row">
    		    	<label for="inputName" class="col-sm-2 col-form-label">Your Name</label>
    		    	<div class="col-sm-10">
    		      		<input type="text" name="name" class="form-control" id="inputName">
    		    	</div>
    		  	</div>
    		  	<div class="form-group row">
    		    	<label for="inputEmail" class="col-sm-2 col-form-label">Your Email</label>
    		    	<div class="col-sm-10">
    		      		<input type="email" name="email" class="form-control" id="inputEmail">
    		    	</div>
    		  	</div>
    		  	<div class="form-group row">
    		    	<label for="inputMessage" class="col-sm-2 col-form-label">Message</label>
    		    	<div class="col-sm-10">
    		      		<textarea class="form-control" name="message" cols="30" rows="10" id="inputMessage" placeholder="Write your query here.."></textarea> 
    		    	</div>
    		  	</div>

				<div class="form-group float-right">
				  	<button type="submit" class="btn btn-primary ">Submit</button>
				</div>
    		</form>
    	</div>
    </div>
</div>




</body>
</html>