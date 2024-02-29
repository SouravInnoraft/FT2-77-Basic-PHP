<?php

if (isset($_POST['submit'])) {
  $subjects = $_POST['comment'];
  $myArray = preg_split('\r\/n|\n|\r/', $subjects);
  if (strlen($subjects) > 0) {
    echo '<tr>
                <th>Subject</th>
                <th>Marks</th>
              </tr>';
    for ($x = 0; $x < count($myArray); $x++) {
      $sub = explode('|', $myArray[$x]);
      echo  " <tr
                  <td>$sub[0]</td>
                  <td>$sub[1]</td>
               </tr>";
    }
  } else {
    echo 'Invalid marks';
  }
}
