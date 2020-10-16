<!--
Author: Mark Sweeney
Date: 2017-31-03
-->

<!DOCTYPE html>
<html>
    <head> 
		<title> Add News Story </title>
		<link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/form.css">
        <link rel="stylesheet" type="text/css" href="css/hover.css">
        <link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="author" content="Mark Sweeney">
        <script type="text/javascript" src="js/form.js"></script>
	</head>
    
    <body>
        
          <div class = "header"><h3>Add News Story</h3></div>
        
        <div class="container alpha omega">
<!--            <h5 class="logout alpha omega"> <a href="index.php">logout</a> &nbsp; <img src="images/login.png"> </h5>-->
        <div class="story-form twelve alpha omega">
<!--        <h5>Add News Story</h5>-->
        <h5 class="add-story-heading nine alpha omega">Add News Story<img src="images/topstory.png"></h5>
         <h5 class="login three alpha omega"> <a href="index.php">logout</a> &nbsp; <img src="images/login.png"> </h5>
<!--        form posts articles to the database-->
        <form action="addStory.php" method="post"> <!--<form action= "addStory.php">-->
        <table> <!--putting form elements in a table-->
        
            <tr>
            <td><label>Category:</label></td>
               
            <td>
                <select name="type" id="type">
                    <option value=""></option>
                    <option value="Top Story">Top Story</option>
                    <option value="Latest">Latest</option>
                    <option value="Trending">Trending</option>
					<option value="Tech">Tech</option>
                    <option value="Business">Business</option>
					 <option value="Sport">Sport</option>
                </select>
            </td>
             
            </tr>
            
            <!--js validation error message-->
            <tr><td><span id="typeError" class="error"></span></td></tr>
            
            <tr> <!--<tr> establishes table row-->
            <td> <!--<td> means table data-->
                <label>Headline:</label>    
                </td>
            
            <td>
            <input type="text" placeholder="Enter Headline" name="headline" id="headline">
            </td>
             </tr>
            
            <!--js validation error message-->
            <tr><td><span id="headlineError" class="error"></span></td></tr> 
                     
            <tr>
            <td><label>News Story:</label></td>
                <td><textarea name="storyText" id="storyText" placeholder="Enter News Story" rows="10" cols="30"></textarea></td>
            
            </tr>
            <!--js validation error message-->
            <tr><td><span id="storyTextError" class="error"></span></td></tr>
            
            <tr><td><label>Date:</label></td>
                <td>
                <input type="date" name="date" id="date">
                </td>
            </tr>
               <!--js validation error message-->
              <tr><td><span id="dateError" class="error"></span></td></tr>
            
            <tr>
            <td><label>Time:</label></td>
            <td><input type="time" name="time" id="time"></td>
            </tr>
            
            <!--js validation error message-->
            <tr><td><span id="timeError" class="error"></span></td></tr>
            
            <tr>
            <td><label>Author:</label></td>
            <td><input type="text" placeholder="Enter Author" name="author" id="author"></td>
            </tr>
            <!--js validation error message-->
            <tr><td><span id="authorError" class="error"></span></td></tr>
            
            <tr>
            <td><label>Job Title:</label></td>
            <td><input type="text" placeholder="Enter Job Title" name="title" id="title"></td>
            </tr>
            <!--js validation error message-->
            <tr><td><span id="titleError" class="error"></span></td></tr>
            
            <tr>
                <td><input type="submit" id="submit" value="Post Story" class="button submit"></td>
                <td><input type="reset" value="Reset Form" class="button"></td>
            </tr>
            
        </table>
        
        
        </form>
            </div>
          
        </div>
    </body>


</html>