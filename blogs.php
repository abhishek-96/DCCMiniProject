<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if(isset($_SESSION['id']))
{
    $user=$_SESSION['id'];
    $name=$_SESSION['name'];
    $username=$name;
     //echo $username;
}


?>
<!DOCTYPE HTML>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/animate.css" rel="stylesheet">

  <link href="css/font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="materialize/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="materialize/js/materialize.min.js"></script>

  <script src="js/wow.min.js"></script>

   <script>

            new WOW().init();

   </script>

<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #2196F3;
  padding: 10px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
body, html {

  background-color:#D0F0F7;
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("6.png");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("7.png");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("9.png");
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
</head>
<body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<div class="bgimg-1">
  <div class="caption">
    <span class="border">Blogs</span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Parallax Demo</h3>
  <p>Parallax scrolling is a web site trend where the background content is moved at a different speed than the foreground content while scrolling. Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">LESS HEIGHT</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">SCROLL UP</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
  </div>
</div>

<div class="bgimg-1">
  <div class="caption">
    <span class="border">COOL!</span>
  </div>
</div>

<div class="container" style='margin-top:10px;'>
		<div class="well" style='border-radius:10px;background-color:#F000F'>
			<ul class="nav nav-pills nav-justified wow bounceInDown">
				<li  class="active" style="padding:10px;"><a href="#commentsection" style="text-size:25px;"><i class="fa fa-comments" style="font-size:25px;padding:10px;"></i>Comments/Reviews</a></li>
			</ul>
			<div class="tab-content wow bounceInDown">

				<div class="tab-pane fade in active" id="commentsection">

					  <!--Dynamic Comments-->
					  <?php
                      if(isset($_SESSION['id']))
                      {
                          //cho "Session-id is set";
					  	$conn = mysqli_connect("localhost","root","","blog") or die(mysql_error());

							//echo "Established Connection";

							//Now extract the username (Name represents the username!)


							//Extract all comments
							$query2 = "SELECT * FROM comment";
							$result = mysqli_query($conn, $query2) or die(mysql_error());
							//echo mysqli_num_rows($result);
					  	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
					  	{
							echo "<div class='well wow fadeInLeft' style='border-radius: 20px; background-color:#B0C4DE;' > ";
					 		echo "<h2 class='lead'><span><i class='fa fa-user' style='font-size:25px;padding:10px;'></i>".$row["username"]."</span></h2>";
					 		echo "<hr style='color:#0000FF'>";
					 		echo "<p class=>".$row["comment"]."</p>";
				 			echo "</div>";
					  	}
                      }
					?>


                      <div id="newComment">

						  </div>
					       <button class="btn-large waves-effect waves-red" type="button" data-toggle="collapse" data-target="#collapseExample">Add comment</button>


				 	<div class="collapse" id="collapseExample">
				 		<div class="well">
				 			<form>

                            <label for="email" class="control-label" >Comment</label>

                             <textarea class="form-control" id="addComments" rows="5" placeholder="Write Your Comment Here....."></textarea>
                            	<hr>
                        	<button class="btn-lg btn-success" type="button" id="submitComment" onclick="postComment()">Submit</button>
				 			</form>

				 	</div><!--well-->
				 </div><!--collapse-->
                 <br>

				</div><!--tab content-->
			</div><!--tab pane-->
		</div><!--well-->
	</div><!--container-->

</div>
<div class='container'>
  <div class='well'>
     <ul class='nav nav-pills nav-justified'>
       <li class="active"><a data-toggle="tab" href="#rss_feed">News</a></li></ul>
<div class='tab-content'>
 <div id="rss_feed" class='tab-pane fade in active well'>
 </div>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>
 <script>
 var buzzfeedurl = 'https://newsapi.org/v2/top-headlines?country=us&apiKey=105dedfd457f4cc78ecd4a870fbec86a';
$.ajax({
  type: 'GET',
  url: 'https://newsapi.org/v2/top-headlines?country=us&apiKey=f5d39a1461334be4a907d0a9baf35604',
  dataType: 'json',
  success: function(data) {

    for( var i=0;i<5;i++){

       console.log(i);
      document.getElementById('rss_feed').innerHTML+='<div class="row well wow fadeInup" style=" margin:5%; color:#0089; border-radius:20px;">';
       document.getElementById('rss_feed').innerHTML+='<div class=" col-sm-4" style="margin-left:10%;">'+'<img style="margin-top:20%; width:200px;hight:200px" class="img-circle img-responsive" src='+data.articles[i].urlToImage+'/img>'+'</div>';
       document.getElementById('rss_feed').innerHTML+='<div class="col-sm-6"><a href='+data.articles[i].url+'>'+'<h4>'+data.articles[i].title+'</h4>'+'</a>'+'<hr style="color:black">'+'<p class="lead">'+data.articles[i].description+'</p>'+'</div>';
        document.getElementById('rss_feed').innerHTML+='</div>';
        document.getElementById('rss_feed').innerHTML+='</div>';
        if (i===3){
          break;
        }

    }

  }
});
 		function postComment(){
 		var session='<?php echo $user; ?>';
 		//document.getElementById("addComments").innerHTML="hello";
 		//alert(comments);
 		//alert("session variable is set: "+session);

 			var comments=document.getElementById("addComments").value;

 		//alert("session variable is set: "+session);

 		if(session!=''){
 				//alert("session variable is set: "+session);

 				$.ajax({
 				type: 'POST',
   				url: 'comment.php',
   				data: { comment : comments,
             name :'<?php echo $username;?>'
 					   },
 				success: function (response)
       {

      document.getElementById("newComment").innerHTML+="<div class='well wow fadeInLeft' style='border-radius: 20px; background-color:#B0C4DE;' ><h2 class='lead'><span><i class='fa fa-user' style='font-size:25px;padding:10px;'></i><?php echo $username;?></span></h3><h3><hr style='color:#0000FF'><p>"+comments+"</p></h2></div>";


       }
 			}).done(function( msg ) {
   if(msg=="Success"){

   }
 });

 	}
 			else
 				alert("Please Sign in to Comment");

 		}
 	</script>
</body>
</html>
