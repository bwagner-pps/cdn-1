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
        width: 550px;
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
    <h1 style="text-align:center">FlashLight Solution</h1>
<h2>Add Starter Code</h2>
<p>Add the following starter code to the <strong>FlashLight.java</strong> file.</p>
<img src="/csregular/unit08_string/solutions/images/flashLight01.png"><br>
<h2>Step 1 - Create Variables</h2>
  <ol>
      <li>Create a variable of type <strong>String</strong> named <strong>str</strong> and assign it the string "flashlight".</li>
      <li>Create a variable of type <strong>String</strong> named <strong>flash</strong> and assign it the empty string "".</li>
      <li>Create a variable of type <strong>String</strong> named <strong>light</strong> and assign it the empty string "".</li>
      <li>Create a variable of type <strong>String</strong> named <strong>ash</strong> and assign it the empty string "".</li>
      <li>Create a variable of type <strong>String</strong> named <strong>flight</strong> and assign it the empty string "".</li>
      <li>Create a variable of type <strong>String</strong> named <strong>flag</strong> and assign it the empty string "".</li>
      <li>Create a variable of type <strong>String</strong> named <strong>fit</strong> and assign it the empty string "".</li>
      <li>Create a variable of type <strong>String</strong> named <strong>high</strong> and assign it the empty string "".</li>
      <li>Create a variable of type <strong>String</strong> named <strong>gas</strong> and assign it the empty string "".</li>
      <li>Create a variable of type <strong>String</strong> named <strong>fast</strong> and assign it the empty string "".</li>
      <li>Create a variable of type <strong>String</strong> named <strong>shaft</strong> and assign it the empty string "".</li>
  </ol>

  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode1')" id="completedCode1a">Show Code</a>
      <img id="completedCode1" src="/csregular/unit08_string/solutions/images/flashLight02.png">
  </div>
  <h2>Step 2 - Get User Input</h2>
This program does not use user input.
<br><br>

  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode2')" id="completedCode2a">Show Code</a>
      <img id="completedCode2" src="/csregular/unit08_string/solutions/images/flashLight03.png">
  </div>
  <h2>Step 3 - Do Processing (Perform Calculations)</h2>
  <ol>
    <li>Use the String class's <strong>substring</strong> method to extract the specified substrings
        from the string "flashlight" stored in the variable <strong>str</strong>.</li>
    <li>Use the concatenation operator "+" to merge the substrings together, then assign each newly
        created string to its corresponding variable.
    </li>
    <p><strong>Examples</strong></p>
    <div id="csCode"><pre>slight = str.substring(3, 4) + str.substring(5);</pre></div>
    <div id="csCode"><pre>flat = str.substring(0, 3) + str.substring(9);</pre></div>
    <div id="csCode"><pre>fig = str.substring(0, 1) + str.substring(6, 8);</pre></div>
    <div id="csCode"><pre>till = str.substring(9) + str.substring(6, 7) + str.substring(1, 2) + str.substring(1, 2);</pre></div>
  </ol>

  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode3')" id="completedCode3a">Show Code</a>
      <img id="completedCode3" style="width:800px;" src="/csregular/unit08_string/solutions/images/flashLight04.png">
  </div>
  <h2>Step 4 - Display Output (Results of Processing)</h2>
  <ol>
    <li>Display the title "Part 1" using the format shown below.</li>
    <li>Display each of the 10 String variables on a separate line.</li>
    <li>Display the title "Part 2" using the format shown below.</li>
    <li>Display the 4 strings that are formed by combining the variable <strong>light</strong>
        with the given string literals using the concatenation operator "+" within the println statement.</li>
</ol>
<p><strong>Example</strong></p>
<div id="csCode"><pre>System.out.println("b" + light);</pre></div>
  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode4')" id="completedCode4a">Show Code</a>
      <img id="completedCode4" style="width:600px;" src="/csregular/unit08_string/solutions/images/flashLight05.png">
  </div>
  <h2>Sample Run</h2>
  <div id="csSampleRun"> 
    <pre>
Part 1
=================
flash
light
ash
flight
flag
fit
high
gas
fast
shaft

Part 2
=================
lights
lighter
lightning
enlightened
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
