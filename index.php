<!-- States what the document should expect, which in this case is HTML-->
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Love</title>
</head>

<style>
	.padding_1st {
		box-shadow: 0 10px 20px rgba(0,0,0,0.19), 10px 6px 50px 50px rgba(0,0,255,0.23) inset; /* adds a box shadow */
		background: linear-gradient(35deg, #CCFFFF, #FFCCCC);
		padding: 20px;
		margin: 10px;
		border: 20px;
		line-height: 50px;
	}
	 /* . is used for classes, padding creates space between objects with border. margin gives space from other elements*/
	 .padding_1st:hover {
	 	transform: scale(.9) skewX(24deg);
	 	
	 }
	 
	[type = "button"] { 
		background-color: green;
	} /* [] is a type selector. You can select based of types such as buttons, radio, checkbox, etc... */

	#dance {
		border-width: 5px;
		border-color: black;
		border-style: dotted;
		margin-top: 150px;
		margin-left: 200px;
		padding: 10px;
	}
	a.change_link:link {
		color: green; 
  		background-color: transparent; 
  		text-decoration: none;
	}	

	a.change_link:visited {
	  color: rgb(50, 100, 50);
	  background-color: red;
	  text-decoration: none;
	}

	a.change_link:hover {
	  color: red;
	  background-color: yellow;
	  text-decoration: underline;
	}

	a.change_link:active {
	  color: yellow;
	  background-color: transparent;
	  text-decoration: underline;
	}
	.b1 {
		background-color: rgba(255, 0, 0, .5);
		width: 100px;
		height: 125px;
		margin: auto; /* centers object to center */
	}
	.b2 {
		position: absolute; /* webpage ignores and it's not "relative" to anything. think of as pushing from the corners of the webpage itself*/
		top: 750px;
		right: 100px;
		background-color: rgba(0, 255, 0, .5);
		animation-name: rainbow;
    	animation-duration: 4s;
    	animation-iteration-count: infinite;
		width: 100px;
		height: 125px;
	}

		 @keyframes rainbow {
		    0% {
		      background-color: blue;
		    }
		    50% {
		      background-color: green;
		      width: 200px;
		      top: 600px;
		      opacity: 0.2;
		    }
		    100% {
		      background-color: yellow;
		 	
		    }
		 }
		 /*This is an animation, takes the animation-name "rainbow" and produces colors at the intervals selected*/

	.b3 {
		position: relative; /* relative to the nearest object. Think of pushing away from the nearest object iself */
		top: 0px;
		left: 50px; 
		background: repeating-linear-gradient( 
	      45deg,
	      yellow 0px,
	      red 40px,
	      pink 40px,
	      yellow 80px
    	);
    	/*repeating-linear-gradient allows you to use multiple colors*/
		width: 100px;
		height: 125px;
	}
	
</style>

<!-- Body includes the html code-->			
<body>
	<!-- headers can have 6 headers h1, h2, h3, h4, etc...-->
	<h1 id="top">Anthony Long</h1>

	<!-- Paragraph is the basics of text -->
	<p class="padding_1st">FUCK I was about to post this quote by Socrates: "An unexamined life is not worth living". Then I thought of contrary, an examined life. This can lead to one not believing themselves not to be worth living either. Or simply put, suicidal people. They examine their lives to the point of death.

	I've never heard of any animal other than a human commit suicide (edit: seems they do, don't know ratio to humans however). Now it makes wonder, why?

	Is our ability to examine our own lives special/unique? or are we just too hard on ourselves than other animals? Should we just go back to the caves away from the stresses of life? Too many questions to ask.</p>

	<div id="shadow">
		<strong>Bold</strong>
		<em>Italic</em>
		<mark>Highlight</mark>
		<small>Small text</small>
		<ins>Underline</ins> <!-- Can also use <u>-->
		<del>Strike</del>  <!-- Can also use <s>-->
		<sub>Subscript</sub>
		<sup>SuperScript</sup>
		<q>This is a quote</q>
		<blockquote cite="http://www.worldwildlife.org/who/index.html">
		Blockquotes indent and also give reference to source
		</blockquote>
		<address style="color: rgba(230, 40, 40, 50);">
		Written by John Doe.<br> 
		Visit us at:<br>
		Example.com<br>
		Box 564, Disneyland<br>
		USA
		</address>
		<bdo dir="rtl">This line will be written from right to left</bdo> <!-- rtl means right to left -->
	</div>

	<br>
	<hr>
		<a class="change_link" href="https://www.youtube.com/" title="click here to go to youtube">Here the link colors are different because of style I applied to them</a>
		<a href="https://www.youtube.com/">This link is reg default because it doesn't have same class marked to change</a>
	<br>
	<pre style="text-align: center;">
	This text

	can

	have spaces

	in it
	</pre>

		<img src="https://media.licdn.com/dms/image/C4E0BAQEI1D9PeRd06w/company-logo_200_200/0?e=2159024400&v=beta&t=9J8tMUXBoHGnpnUogDrHB7hMNIvhu4LF_IzTMzjFUlY"
		alt="holmescustom" width="300" height="300" style="float:right;">

	<p title="YOU FUCK BOI">Hover over me!</p> <!--- "title" causes text to hover over--->

	<p id="demo">A Paragraph.</p>
	<button type="button" onclick="myFunction()" style="text-align: center;">Try it</button>
	<br>
	<p id="random_num"></p>

	<hr> <!-- Causes a kind of break with a horizontal line -->
	<div class="b1">block 1</div>
	<div class="b2">block 2</div>
	<div class="b3">block 3</div>










	<hr>
	<form action="/submit-cat-photo">
	  <label for = check1>
	    <input id = "check1" type="checkbox" name= "fuck-you" checked>FUUUUUUUUUUUUU
	  </label>
	  <label for = indoor>
	    <input id = "indoor" type="radio" name= "indoor-outdoor">Indoor
	  </label>
	  <label for = outdoor>
	    <input id = "outdoor" type="radio" name= "indoor-outdoor">outdoor
	  </label>
		<br>
	    <input type="text" placeholder="cat photo URL" required="BOIIIIIIIIIII">
	    <button type="submit">Submit</button>
	</form>




	<button onclick="alertmsg()">Click to pop up an alert</button>
	<br>

	<a href="https://www.youtube.com/watch?v=yp8EjIAeiws&index=4&t=0s&list=LLxP6_VeSLuJLz20jCIzNEIA">
		<img id = "dance" src="https://media.giphy.com/media/bTzFnjHPuVvva/giphy.gif" alt="dance!">
	</a>

	<br>
	<a href="#top">Back to the top</a> <!-- Call upon h1 ID called "top", goes back to element which is on top-->

	Copyright <?php $date = date('Y'); $date = $date + 1; echo $date; ?>


	<script src="javascript.js"></script>	
	<!-- k -->
</body>
</html>