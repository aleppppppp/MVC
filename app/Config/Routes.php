<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/datamahasiswa', 'Datamahasiswa::index');
$routes->get('/datamahasiswa/add', 'Datamahasiswa::add');
$routes->post('/datamahasiswa/create', 'Datamahasiswa::create');
$routes->get('/datadosen', 'Datadosen::index');
$routes->get('/datamatkul', 'Datamatkul::index');
$routes->get('/datakelas', 'Datakelas::index');
$routes->get('/pembayaran', 'Datapembayaran::index');
$routes->get('/contactus', 'Home::contactus');