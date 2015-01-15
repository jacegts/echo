<?php

function echo()
{
  for($i=0;$i<func_num_args();$i++)
  {
    $arg = func_get_arg($i);
    echo"<script>console.log('$arg')</script>";
  }
}

echo();
echo('bla');
echo('foo', 'bar', 'baz');
