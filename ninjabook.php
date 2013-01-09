#front page, so enter titles and submits into MySQL database.  Then click first link to sort titles.


<?php
/*  Program name: ninjabook.php
 *  Description:  Script displays a form that asks for 
 *                the user to input book titles
 */
$labels = array ( "bookTitle" => "Book title"
                       );
?>
<html>
<head>

<title>Ninja Book Sorter</title>

<style>
h1 {text-align: center; border-style: outset; font-size: 3em; font-family: "serif", "arial"}
p {text-align: left; font-size:1em; font-family: "serif", "arial"}

</style>
</head>

<body>
<h1>Input Book Title</h1>
<hr />

<a href="display 2.php" onClick='this.form.submit()'>Click here</a> to sort the titles you entered.

<p> Input your ninja book title into the box and click the button. </p>

<form action='savetitle.php' method='POST'>
<?php
  /* Loop that displays the form fields */
  foreach($labels as $field => $label)
  {
    echo "<div class='field'>
           <label for='$field'>$label</label>
            <input type='text' name='$field' id='$field'
              size='65' maxlength='65' /></div>\n";
  }
  echo "<div id='submit'><input type='submit' 
                   value='Submit Information' />\n";
  echo "</div>\n</form>\n</body>\n</html>";

 
?>