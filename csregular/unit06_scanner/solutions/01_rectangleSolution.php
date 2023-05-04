<?php
   session_start();
   if($_SESSION['username'] != 'CompSci_Student') 
       header("Location: /index.html");
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      #container {
        font-size: 1.3em;
      }
      ol li {
        padding-bottom: 5px;
      }
      h2 {
        background-color: lightgray;
      }

      #completedCode1 {
        display: none;
      }

      #completedCode2 {
        display: none;
      }

      #completedCode3 {
        display: none;
      }

      #completedCode4 {
        display: none;
      }

      img {
        width: 800px;
      }
      #csSampleRun
      {
        color: white;
        background-color: black;
        width: 600px;
        padding: 10px;
        margin: 5px;
      }

      a
      {
        text-decoration: none;
        text-align: center;
        background-color: lightgray;
        color: black;
        border: 2px solid darkgray;
        border-radius: 25px;
        width: 143px;
        height: 35px;
        font-size: 1.3rem;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 7px;
        margin-bottom: 10px;
      }
      a:link {
        text-decoration: none;
      }
      a:visited {
        text-decoration: none;
      }
      a:hover {
        text-decoration: none;
        background-color: black;
        color: white;
      }

      .solutionContainer {
        display:flex;
        flex-direction: column;
      }
    </style>
  </head>

<body>
<div id = "container"> 
    <h1 style="text-align:center">Rectangle Solution</h1>
<h2>Add Starter Code</h2>
<p>Add the following starter code to the <strong>Rectangle.java</strong> file.</p>
<img src="/csregular/unit06_scanner/solutions/images/rect01.png"><br>
<h2>Step 1 - Create Variables</h2>
  <ol>
      <li>Create a Scanner object and assign it the name <strong>keyboard</strong>.</li>
      <li>Create a variable of type <strong>int</strong> named <strong>width</strong> and assign it a value of zero.</li>
      <li>Create a variable of type <strong>int</strong> named <strong>length</strong> and assign it a value of zero.</li>
      <li>Create a variable of type <strong>int</strong> named <strong>perimeter</strong> and assign it a value of zero.</li>
      <li>Create a variable of type <strong>int</strong> named <strong>area</strong> and assign it a value of zero.</li>
  </ol>

  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode1')" id="completedCode1a">Show Code</a>
      <img id="completedCode1" src="/csregular/unit06_scanner/solutions/images/rect02.png">
  </div>
  <h2>Step 2 - Get User Input</h2>
  <ol>
      <li>Display a user prompt that says: <span style="font-family: Consolas">"Enter the Length -->"</span></li>
      <li>Use the Scanner class's <strong>nextInt</strong> method to allow the user to input the length of a rectangle and
          store the value in the variable <strong>length</strong>.</li>
      <li>Display a user prompt that says: <span style="font-family: Consolas">"Enter the Width -->"</span></li>
      <li>Use the Scanner class's <strong>nextInt</strong> method to allow the user to input the width of a rectangle and
         store the value in the variable <strong>width</strong>.</li>

  </ol>

  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode2')" id="completedCode2a">Show Code</a>
      <img id="completedCode2" src="/csregular/unit06_scanner/solutions/images/rect03.png">
  </div>
  <h2>Step 3 - Do Processing (Perform Calculations)</h2>
  <ol>
        <li>Use the following formula to calculate the perimeter of a rectangle using the length and 
           width input by the user. To calculate the perimeter you simply add up all four sides of the rectangle or
           multiple the width and length by 2 and add the products together.<br>
          &nbsp;&nbsp;&nbsp;<span style="font-family: Consolas;">Perimeter = 2L + 2W</span>.<br>
          (Note: This formula is not written in Java. You will need to translate it.)</li><br>
        <li>Use this formula to calculate the area of a rectangle using the length and width input by 
            the user. To calculate the area you simply multiply the length times the width.<br>
            &nbsp;&nbsp;&nbsp;<span style="font-family: Consolas">Area = L x W</span>.<br>
        </li>
  </ol>

  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode3')" id="completedCode3a">Show Code</a>
      <img id="completedCode3" src="/csregular/unit06_scanner/solutions/images/rect04.png">
  </div>
  <h2>Step 4 - Display Output (Results of Processing)</h2>
  <ol>
      <li>Display the perimeter of the rectangle using the following format:<br>
        &nbsp;&nbsp;&nbsp;<span style="font-family: Consolas">Perimeter = 60</span> <br>where the number 60 is the value
        stored in the variable <strong>perimeter</strong>.</li>
      <li>Display the perimeter of the rectangle using the following format:<br>
        &nbsp;&nbsp;&nbsp;<span style="font-family: Consolas">Area = 200</span><br> where the number 200 is the value
        stored in the variable <strong>area</strong>.</li>
  </ol>
  
  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode4')" id="completedCode4a">Show Code</a>
      <img id="completedCode4" src="/csregular/unit06_scanner/solutions/images/rect05.png">
  </div>
  <h2>Sample Run</h2>
  <div id="csSampleRun"> 
    <pre>
Enter the Length --> 10
Enter the Width --> 20
        
Perimeter = 60
Area = 200
</pre>
  </div>

  <br>
</div>
<script>
function makeVisible(id)
{
    let element = document.getElementById(id);
    let display = element.currentStyle ? element.currentStyle.display :
        getComputedStyle(element, null).display;

    if(display === "none")
    {
      element.style.display = "block";
      let anchor = id+"a";
      document.getElementById(anchor).innerHTML = "Hide Code";
    }
    else
    {
      element.style.display = "none";
      let anchor = id+"a";
      document.getElementById(anchor).innerHTML = "Show Code";
    }
}
</script>
</body>	
</html>
