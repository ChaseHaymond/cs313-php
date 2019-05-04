<!doctype html>

<html>

<head>
    
	<title>Chase Haymond Home Page</title>
    
	<link rel="stylesheet" href="styles.css">
    
	<script src="main.js"></script>

</head>

<body>
    
	<h1>
        
	Welcome to Chase Haymond's Website
        
	<hr> 
        
	<a id="pageLink" href="home.php"> Home Page </a> 
        
	<a id="pageLink" href="assignments.php"> Assignments Page </a> 
    
	</h1>
    
    

	<div id="left">
        
	<br>
    These are some things I like to do <br> <br>
                
	<div class="dropdown">
                    
	<button class="dropbtn" onclick=test()>Choose a picture</button>
                        
		<div class="dropdown-content">
                            
		<a id="snowboard" onclick=snowboard()>Me snowboarding</a>
                            
		<a id="ramen" onclick=ramen()>Cooking Ramen</a>
                            
		<a id="piano" onclick=piano()>Playing Piano</a>
                        
		</div>
                
	</div>
                
                

	<hr>
                
                
	<img src="ramen2.jpg" alt="Image of things I like to do" id="image">
    
	</div>
     
    
	<div id="right">
        
	<br>About Me <hr> I am from Arvada, Colorado. I was born and raised there. I am studying computer science. If everything goes acording to plan, I should graduate next winter. I like web development but I am not the best at design. To the left are some pictures of things I like to do.
    
	</div>
    <br>
    <div id="time">
         <?php include 'title.php';?>
    </div>

</body>
</html>
