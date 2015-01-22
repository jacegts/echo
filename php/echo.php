<?php

function echotest()
{
  for($i=0;$i<func_num_args();$i++)
  {
    $argc = func_get_arg($i);
    echo "$argc";
  }
}

echotest();
echotest('bla');
echotest('foo', 'bar', 'baz');
