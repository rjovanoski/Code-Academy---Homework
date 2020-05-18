<?php
// no need to start session again - results.php is part of index.php and you started session there

// check if session variable 'quiz' exist
 
// Inside IF statement :
// read answers.ini file with parse_ini_file() function
// Create $results array. In foreach loop add to this array 
// 1) question id in form "q1","q2"... ,  user answers from $_SESSION variable and correct answers in 
// 2) user answer from $_SESSION variable
// 3)  correct answer for this question from answers.ini file ( you readed in with parse_ini_file())

 //Below in <tbody> with foreach output $results array as table row for each question

// destroy session to flush the results
 
?>

<h4 style="text-align: center" > Your result is: </h4>
<table class="table">
  <thead>
    <tr>
      <th >Question</th>
      <th >Your answer</th>
      <th >Correct answer</th>
    </tr>
  </thead>
  <tbody>
      <!-- display result here in foreach loop-->

      <!-- Example HTML: -->
      <!-- <tr>
        <td>q1</td>
        <td>1</td>
        <td>1</td>
      </tr> -->
  </tbody>
</table>

 