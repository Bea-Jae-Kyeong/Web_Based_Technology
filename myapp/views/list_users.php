<?php
if (sizeof($users) > 0)
{
 foreach ($users as $row)
 {
 echo $row->id . " - ";
 echo $row->username . " - ";
 echo $row->email . " - ";
 echo $row->password . " ";
 echo $row->group . " ";
 echo "<br/>";
 }
} else {
 echo "No user";
}
