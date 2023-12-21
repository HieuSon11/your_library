<?php
$routes = [
  '/' => [
    'controller' => 'HomeController',
    'action' => 'index'
  ],
  'dang-ky' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'index'
  ],
  'danh-sach' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'showPhieuDangKy'
  ]
  ,
  'add' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'createPhieuDangKy'
  ]
];
