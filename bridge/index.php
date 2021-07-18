<?php

//mysql connection ı ile mysql veritabanına kayıt eder
$productRepository = new ProductRepository(new MysqlConnection("test","test","test","test"));
$productRepository->save(new ProductModel());

//mongo connection ı ile mongo veritabanına kayıt eder
$productRepository->setConnection(new MongoConnection("test","test","test","test"));
$productRepository->save(new ProductModel());
