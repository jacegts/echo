<?php

function echotest()
{
  for($i=0;$i<func_num_args();$i++)
  {
    $arg = func_get_arg($i);
    echo "$arg";
  }
}

echotest();
//echotest('bla');
echotest('foo', 'bar', 'baz');
