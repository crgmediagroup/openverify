<?php
  /* ATTRIBUTION NOTICE
    Copyright 2021 (C) CRG Media Group.

    The following code is licensed under the GNU General Public License v3.0.
    You MUST attribute to CRG Media Group and the original source code, hosted on GitHub at the time of writing.
    Any modifications MUST be open source as well.

    You are allowed to use the following code for commercial use, but you must follow the GNU General Public License v3.0.
  END ATTRIBUTION NOTICE */
  
  $code = $_GET['code'];
  //Get the code that must be verified.

  //Check if that code is a genuine code. You may want to check a database, something like this:
  /*
    +----+----------------------------------------------------------------------------------+------+
    | id |                                       code                                       | plan |
    +----+----------------------------------------------------------------------------------+------+
    |  1 | YCNNErrnBtBxp5gRQUdk0UCIxGIEGXH9Vdx5GxvvERCXSEiCkwYC1phFmDWw9uCBQgoxwUrFRHkkDP5F |    0 |
    +----+----------------------------------------------------------------------------------+------+
  */

  //The query to the database or similar should eventually get the values for two variables:

  if ($code == 'YCNNErrnBtBxp5gRQUdk0UCIxGIEGXH9Vdx5GxvvERCXSEiCkwYC1phFmDWw9uCBQgoxwUrFRHkkDP5F') {
    $isExisting = true;
  }
  //If the code exists in the table. For our demo case, we check if the code is YCNNErrnBtBxp5gRQUdk0UCIxGIEGXH9Vdx5GxvvERCXSEiCkwYC1phFmDWw9uCBQgoxwUrFRHkkDP5F because that is the code in the table.

  $plan = 0;
  //The plan code corresponding to the code. For our demo case, this is 0, because in our table the plan is 0.
  
  echo '[['.$isExisting.']](('.$plan.'))';
  //Here we output the values of those variables in a special format that can be easily parsed. In this example, the final output will be "[[1]]((0))".
?>
