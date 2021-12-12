<?php

  /*!
   * 疑似乱数生成関数 / PHP
   * (c) 2021 ActiveTK.
   * License: The MIT License
   */

  function GetRand( int $len = 32 ) {

    $bytes = openssl_random_pseudo_bytes( $len );
    $str = bin2hex( $bytes );

    $usestr = '1234567890abcdefghijklmnopqrstuvwxyz';
    $str2 = substr( str_shuffle( $usestr ), 0, 12 );

    return substr( str_shuffle( $str . $str2 ) , 0, -12 );

  }

  /*!
   * 使用例
   */

   // 64桁の乱数を生成
   $randnumber = GetRand(64);
   echo $randnumber;

