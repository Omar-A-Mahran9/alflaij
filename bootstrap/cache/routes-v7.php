<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::59e9QAxvLBN1Qepv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TyGoRX94ulLtCmsz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/careers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D0rqcv7mNkJ1Vwq1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/filterCar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z91c79eanx5qaXKU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HipilBQw0hwJnJpH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aM6gG9HAdyO48Ri5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/send-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lKCu3hDoe9VqbsMh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/resend-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MDMsBVd6Ikzt7GM3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NWfpScqET1YnljCw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verify-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q9Mx0806VvPF77Zc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/act_mod' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GfISHO3baJqTwTWl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/resend-otp-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ooMjZz1B6f1eAxu2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MeV4ZsT5OjbiDfFh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/add-Your-addss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eqBxouEa8sf9Hd5g',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N9Hjsu5m4QLP4Roy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/changestatuenotificaton' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kX1DnCNpvkC1hCQQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hbau1LVkSlEZTIIK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QYsLb5021yrS4c6R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VX9tgPNAuJgutiUK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tkR6RbkGkrck0CjG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/filter-addss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tAahdXbE0oIF0Ri6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/requests_auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get-requests',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/finance-Order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance.order2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/add-favorite-withoutauth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dnvgwuUx6Z3uiNfX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/bankSelection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ccf6xDLWywT5AUcc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/models' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZtsRxw3GL6mxY7Pd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cars' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J5AfZf9VyKCTlY6A',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/brands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XvvokPlzT5m6f5by',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/questions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U0dnMvzp0CZ5mg2o',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/getAllData' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rcipVSLt9wvo3c8M',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/banks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pcdhMLbEWHyMwvSq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/brands-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KJXI2UTK3Iipq6V1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/why-code-car' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6z9bAT9IjTSfssZZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/financing-advantage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kunxznmvCchUSe5L',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/financing-body' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QbawSSUAek76KdVC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/normal-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oZDTByCazHmAsGua',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/latest-models' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TDchY7j9ZV2RSrHi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/exclusive-offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T4FFtE8fsN8xmVZ4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/advanced-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zwQSn1b5HTPlRjQt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/getAllCars' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jLYiudtPhe5FDJQ8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/calc_data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N6d8s14lbpZIWqov',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/partners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XIsYwE45DA5BbSb6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/footer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fL3JvESM3XYLhR0t',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/finance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OzinIDu3qtftna0G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/social' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DaOKmMz66X7o8QD6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cars-news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HvPTOQ1vPrTaOIjs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contact-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TGhhHLKwaBbJhVBb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BmtEjjbFEDaJy8rG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/filter_count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oQvDkYbCmUKqLtMw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/offer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::riPYskorLesgk0uy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ga50F5b0iEDWxBhe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/privacy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VToWoI7nimF2iSPJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/terms-condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F0alWnZN4PqmRp28',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OuEfiCiWfA64bQ12',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/allsettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UoSz7PGxglp71ia8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cashing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RI9utuQZX2n4qTHU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/subscriber/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pmQuJUcBfg8uj2j5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1EqGLJSDQ980kbIj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/car-option' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aJWIGmp38yK8tu3K',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7mJJXHYlN08y0MHY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/car-model' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mbAQUquiJGlEekOB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verify-otp-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q6QKvnYrn1BUSKx1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cash-Order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kd0w3Uz3vGIGnzTm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/financecar-Order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mO8iqt0lQZgzxp0J',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NFsfy7FJfovnrSdc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/service-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LYIL2XnXYiYzfL3R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/service-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i00Gr0Lq63TKKohn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y3akPBRgEdKhiWfw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/service-city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dlKqWkSVeT1i3zLD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5SgU2agzYPaGONjP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/best-selling-cars' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MLKx8ccxWFR3F2BJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cars-biggest-discount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HmYGhcdKFNtNlEPd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/current-year' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BZ1KZAypuMg32e17',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/filter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aGJhM6uJiUrZXaY0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/filterData' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JZ5Gck9tJqcDKaEa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oYDpgFqb05F4d3Ux',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Km1DbVkkXw1F0iSZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/car-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uFaCLGkjbNx7gOsO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vfBIebvpTtraJHAe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/search-car-prices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dr93NYE4V7dIQpei',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/calculator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calculator',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/amount-calculator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amount-calculator',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/calculate-installments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'calculateInstallments',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/order/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jdY9RUuEDYuZPBAf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/individuals-finance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'individualsFinance',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/individuals-cash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'individualsCash',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/company-finance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'companyFinance',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/company-cash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'companyCash',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/Cars' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5UuwdwMfYdxJV92O',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/requests-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GGsgUPtdd988aazy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/find' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HUUBkk1nmv13skkx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get-requests-without-auth',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/valid/otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::awDeheer7wOigpa4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/resend/otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UVgU29FAzKW8lEbg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update/cars' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0UABRze2oQ9uAEtA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pay.form',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment/form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dIGbQi2Rt4LagILy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.login-form',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employee.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employee/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/calculator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home.calculator',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/amount-calculator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home.amount-calculator',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/calculate-installments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home.calculateInstallments',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/individuals-finance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home.individualsFinance',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W5xyL9a4DDlt1agU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/allemployees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::JyFRPmdTpuWtR7Iv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/open-calculator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.calculator',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/calculate-installment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.calculateInstallment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sort/image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::YftYUwt4XhdNdvVy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/features' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.features.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.features.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/brands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/models' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.models.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.models.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/features/get-options' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::pWML6zO9fkWJwXkb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/features/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.features.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/partners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.partners.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.partners.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/partners/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.partners.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/orders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/questions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.questions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.questions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/questions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.questions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/brands/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/models/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.models.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/cars' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cars.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cars.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/cars/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cars.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/colors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.colors.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.colors.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/colors/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.colors.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tags.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tags.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/tags/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tags.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employees.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employees.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employees/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employees.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/vendors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.vendors.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.vendors.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/vendors/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.vendors.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/banks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.banks.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.banks.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/banks/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.banks.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/financeing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.financeing.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.financeing.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/financeing/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.financeing.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.services.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.services.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.services.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/branches' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.branches.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.branches.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/branches/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.branches.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/cities/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.news.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.news.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/news/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.news.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.faqs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.faqs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/faqs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.faqs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.offers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.offers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/offers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.offers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/contact-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.contact-us.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/news-subscribers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.news-subscribers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/applicants' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::SrArnVoSSsblFV1b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/careers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.careers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.careers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/careers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.careers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/finance-approvals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.finance-approvals.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.finance-approvals.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/finance-approvals/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.finance-approvals.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/dropzone/validate-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::jGwgkBELwS1b48cm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/save-token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.save-token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/notifications/mark-all-as-read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.notifications.mark_all_as_read',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/notifications/change-status-sound' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.notifications.change-sound-status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/edit-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.edit-profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/update-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.update-profile',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/update-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.update-password',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/request/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.requestService.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/export-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.export.orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/export-request-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.export.request-service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/export-subscriber' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.export.subscriber',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/moyasar/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::gcpFv5OAensXYG6B',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/thanks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.payment.thanks',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/api/(?|a(?|pply/([^/]++)(*:106)|d(?|dss/(?|delete/([^/]++)(*:140)|edit/([^/]++)(*:161)|update/([^/]++)(*:184))|vanced\\-se(?|arch\\-selects/([^/]++)/([^/]++)(*:237)|lect\\-search/([^/]++)(*:266))))|update\\-status/([^/]++)(*:300)|bran(?|d(?|/([^/]++)(*:328)|s/([^/]++)/models(*:353))|ches(?:/([^/]++))?(*:380))|models\\-search/([^/]++)(*:412)|getColorsWithPrice/([^/]++)(*:447)|car(?|s/([^/]++)/color(?|s(?:/([^/]++))?(*:495)|Ids(*:506))|/([^/]++)(*:524))|news/([^/]++)(*:546)|s(?|ervices/([^/]++)(*:574)|imilar\\-services/([^/]++)(*:607))|offers/([^/]++)(*:631))|/language/([^/]++)(*:658)|/dashboard/(?|c(?|hange\\-(?|theme\\-mode/([^/]++)(*:714)|status/([^/]++)(*:737))|a(?|r(?|s/([^/]++)(?|(*:767)|/(?|edit(*:783)|duplicate(*:800)|images(*:814)|update\\-images(*:836))|(*:845))|eers/([^/]++)(?|(*:870)|/edit(*:883)|(*:891))|\\-validate(?:/([^/]++))?(*:924))|tegories/([^/]++)(?|(*:953)|/edit(*:966)|(*:974)))|o(?|lors/([^/]++)(?|(*:1004)|/edit(*:1018)|(*:1027))|ntact\\-us/([^/]++)(?|(*:1058)|/edit(*:1072)|(*:1081)))|ities/([^/]++)(?|(*:1109)|/edit(*:1123)|(*:1132)))|get\\-(?|models/([^/]++)(*:1166)|categories/([^/]++)(*:1194))|f(?|eatures/([^/]++)(?|(*:1227)|/edit(*:1241)|(*:1250))|inance(?|ing/([^/]++)(?|(*:1284)|/edit(*:1298)|(*:1307))|\\-approvals/(?|([^/]++)(?|(*:1343)|/edit(*:1357)|(*:1366))|pdf/([^/]++)(*:1388)))|aqs/([^/]++)(?|(*:1414)|/edit(*:1428)|(*:1437)))|partners/([^/]++)(?|(*:1468)|/edit(*:1482)|(*:1491))|o(?|rders/([^/]++)(?|(*:1522)|/edit(*:1536)|(*:1545))|ffers/([^/]++)(?|(*:1572)|/edit(*:1586)|(*:1595)))|questions/([^/]++)(?|(*:1627)|/edit(*:1641)|(*:1650))|role(?|s/([^/]++)(?|(*:1680)|/edit(*:1694)|(*:1703))|/([^/]++)/employees(*:1732))|b(?|ran(?|ds/([^/]++)(?|(*:1766)|/edit(*:1780)|(*:1789))|ches/([^/]++)(?|(*:1815)|/edit(*:1829)|(*:1838)))|anks/([^/]++)(?|(*:1865)|/edit(*:1879)|(*:1888)))|models/([^/]++)(?|(*:1917)|/edit(*:1931)|(*:1940))|t(?|ags/([^/]++)(?|(*:1969)|/edit(*:1983)|(*:1992))|rash(?|(?:/([^/]++))?(*:2023)|/([^/]++)/([^/]++)(?|(*:2053))))|employees/([^/]++)(?|(*:2086)|/edit(*:2100)|(*:2109))|vendors/([^/]++)(?|(*:2138)|/edit(*:2152)|(*:2161))|services/([^/]++)(?|(*:2191)|/edit(*:2205)|(*:2214))|n(?|ews(?|/([^/]++)(?|(*:2246)|/edit(*:2260)|(*:2269))|\\-subscribers/([^/]++)(?|/edit(*:2309)|(*:2318)))|otifications/([^/]++)/(?|mark_as_read(*:2366)|load\\-more/([^/]++)(*:2394)))|assigntoemployee/([^/]++)(*:2430)|Images/([^/]++)(*:2454))|/get\\-(?|brand\\-parent\\-models/([^/]++)(*:2503)|model\\-categories/([^/]++)(*:2538)|category\\-cars/([^/]++)(*:2570)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2VfmI8qfzLcCX6ea',
          ),
          1 => 
          array (
            0 => 'career_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wTRUgvUkwnKvid24',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YmLiUUyzKteU3EHm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      184 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zivwSTdqN1h4XLEx',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      237 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9Llc9oF7hujdOOp5',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'step',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      266 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0wGRwAG7tp53ngQL',
          ),
          1 => 
          array (
            0 => 'modelId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      300 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O4n9KiaYuWvFGoHw',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9Mw23IebXNGvp9ku',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      353 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PWkiPFFV73nmtwLP',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      380 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xGfhjCzAEEU10Pj0',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jP6vtVcTD3UwHi6o',
          ),
          1 => 
          array (
            0 => 'brandId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RE7HGUXYcVebiSDF',
          ),
          1 => 
          array (
            0 => 'car',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DWjn83ShMJ8BMNgU',
            'color' => NULL,
          ),
          1 => 
          array (
            0 => 'car',
            1 => 'color',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      506 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qt4PRI1V7oOicMyo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9Vf3ycYpRyEqj1ZK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      546 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gJwqhChz7VoBs6u3',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5UnaI6wFuPSaMYB4',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nqeCpHRxbZPxYgX9',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kfOCRXkhvVhBOLL8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      658 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'change-language',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.',
          ),
          1 => 
          array (
            0 => 'mode',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      737 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::DMz4Dw71FAWJvArk',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      767 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cars.show',
          ),
          1 => 
          array (
            0 => 'car',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      783 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cars.edit',
          ),
          1 => 
          array (
            0 => 'car',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      800 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::jY8RKcZ7ugWx16Bv',
          ),
          1 => 
          array (
            0 => 'car',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      814 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::fGOjngJgKemnkDDU',
          ),
          1 => 
          array (
            0 => 'car',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::7ibmZshlvFw6y50c',
          ),
          1 => 
          array (
            0 => 'carId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      845 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cars.update',
          ),
          1 => 
          array (
            0 => 'car',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cars.destroy',
          ),
          1 => 
          array (
            0 => 'car',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      870 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.careers.show',
          ),
          1 => 
          array (
            0 => 'career',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      883 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.careers.edit',
          ),
          1 => 
          array (
            0 => 'career',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      891 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.careers.update',
          ),
          1 => 
          array (
            0 => 'career',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.careers.destroy',
          ),
          1 => 
          array (
            0 => 'career',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      924 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::aiEV1HW3WU5QVSe8',
            'car' => NULL,
          ),
          1 => 
          array (
            0 => 'car',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      974 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.categories.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1004 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.colors.show',
          ),
          1 => 
          array (
            0 => 'color',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1018 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.colors.edit',
          ),
          1 => 
          array (
            0 => 'color',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1027 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.colors.update',
          ),
          1 => 
          array (
            0 => 'color',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.colors.destroy',
          ),
          1 => 
          array (
            0 => 'color',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1058 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.contact-us.show',
          ),
          1 => 
          array (
            0 => 'contact_u',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1072 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.contact-us.edit',
          ),
          1 => 
          array (
            0 => 'contact_u',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1081 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.contact-us.update',
          ),
          1 => 
          array (
            0 => 'contact_u',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.show',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.edit',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1132 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.update',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cities.destroy',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::qlF7MwE80EIVhWVw',
          ),
          1 => 
          array (
            0 => 'brandId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::qxIhqh9K2VL0BzCA',
          ),
          1 => 
          array (
            0 => 'modelId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.features.show',
          ),
          1 => 
          array (
            0 => 'feature',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1241 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.features.edit',
          ),
          1 => 
          array (
            0 => 'feature',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.features.update',
          ),
          1 => 
          array (
            0 => 'feature',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.features.destroy',
          ),
          1 => 
          array (
            0 => 'feature',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1284 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.financeing.show',
          ),
          1 => 
          array (
            0 => 'financeing',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.financeing.edit',
          ),
          1 => 
          array (
            0 => 'financeing',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.financeing.update',
          ),
          1 => 
          array (
            0 => 'financeing',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.financeing.destroy',
          ),
          1 => 
          array (
            0 => 'financeing',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1343 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.finance-approvals.show',
          ),
          1 => 
          array (
            0 => 'finance_approval',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1357 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.finance-approvals.edit',
          ),
          1 => 
          array (
            0 => 'finance_approval',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.finance-approvals.update',
          ),
          1 => 
          array (
            0 => 'finance_approval',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.finance-approvals.destroy',
          ),
          1 => 
          array (
            0 => 'finance_approval',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1388 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::Sy8UqtqQILEVye0i',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.faqs.show',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.faqs.edit',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.faqs.update',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.faqs.destroy',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1468 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.partners.show',
          ),
          1 => 
          array (
            0 => 'partner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1482 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.partners.edit',
          ),
          1 => 
          array (
            0 => 'partner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.partners.update',
          ),
          1 => 
          array (
            0 => 'partner',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.partners.destroy',
          ),
          1 => 
          array (
            0 => 'partner',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.show',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1536 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.edit',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.update',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.orders.destroy',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.offers.show',
          ),
          1 => 
          array (
            0 => 'offer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.offers.edit',
          ),
          1 => 
          array (
            0 => 'offer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.offers.update',
          ),
          1 => 
          array (
            0 => 'offer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.offers.destroy',
          ),
          1 => 
          array (
            0 => 'offer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1627 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.questions.show',
          ),
          1 => 
          array (
            0 => 'question',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1641 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.questions.edit',
          ),
          1 => 
          array (
            0 => 'question',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1650 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.questions.update',
          ),
          1 => 
          array (
            0 => 'question',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.questions.destroy',
          ),
          1 => 
          array (
            0 => 'question',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1694 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1703 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1732 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::54ukqIOhdvHmpWz0',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1766 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.show',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1780 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.edit',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1789 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.update',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brands.destroy',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1815 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.branches.show',
          ),
          1 => 
          array (
            0 => 'branch',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1829 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.branches.edit',
          ),
          1 => 
          array (
            0 => 'branch',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1838 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.branches.update',
          ),
          1 => 
          array (
            0 => 'branch',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.branches.destroy',
          ),
          1 => 
          array (
            0 => 'branch',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1865 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.banks.show',
          ),
          1 => 
          array (
            0 => 'bank',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1879 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.banks.edit',
          ),
          1 => 
          array (
            0 => 'bank',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1888 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.banks.update',
          ),
          1 => 
          array (
            0 => 'bank',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.banks.destroy',
          ),
          1 => 
          array (
            0 => 'bank',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.models.show',
          ),
          1 => 
          array (
            0 => 'model',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1931 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.models.edit',
          ),
          1 => 
          array (
            0 => 'model',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1940 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.models.update',
          ),
          1 => 
          array (
            0 => 'model',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.models.destroy',
          ),
          1 => 
          array (
            0 => 'model',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1969 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tags.show',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1983 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tags.edit',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1992 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tags.update',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tags.destroy',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2023 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.trash',
            'modelName' => NULL,
          ),
          1 => 
          array (
            0 => 'modelName',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2053 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.trash.restore',
          ),
          1 => 
          array (
            0 => 'modelName',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::oadO7NAJAAsr3Goo',
          ),
          1 => 
          array (
            0 => 'modelName',
            1 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2086 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employees.show',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2100 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employees.edit',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employees.update',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employees.destroy',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2138 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.vendors.show',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.vendors.edit',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.vendors.update',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.vendors.destroy',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.services.show',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.services.edit',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2214 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.services.update',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.services.destroy',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2246 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.news.show',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.news.edit',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.news.update',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.news.destroy',
          ),
          1 => 
          array (
            0 => 'news',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.news-subscribers.edit',
          ),
          1 => 
          array (
            0 => 'news_subscriber',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2318 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.news-subscribers.update',
          ),
          1 => 
          array (
            0 => 'news_subscriber',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.news-subscribers.destroy',
          ),
          1 => 
          array (
            0 => 'news_subscriber',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.notifications.mark_as_read',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.notifications.load_more',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'next',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2430 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::PrKyORAlw4wt6A6I',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.files.download',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J3ZS2Qu9GYn4a5iP',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KnXC4TxL179yStGi',
          ),
          1 => 
          array (
            0 => 'model',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CZHa7XXrG5Etm0zg',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::59e9QAxvLBN1Qepv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::59e9QAxvLBN1Qepv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TyGoRX94ulLtCmsz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
          2 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:305:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:87:"function (\\Illuminate\\Http\\Request $request) {
        return $request->user();
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000d160000000000000000";}";s:4:"hash";s:44:"wbqHWL9SV1782d6kBIV8aiemAE/keJWo8QFkbpcGOZ4=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TyGoRX94ulLtCmsz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D0rqcv7mNkJ1Vwq1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/careers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CareerController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\CareerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::D0rqcv7mNkJ1Vwq1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2VfmI8qfzLcCX6ea' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/apply/{career_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CareerController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\CareerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2VfmI8qfzLcCX6ea',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z91c79eanx5qaXKU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/filterCar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@carFilter',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@carFilter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::z91c79eanx5qaXKU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HipilBQw0hwJnJpH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Auth\\AuthController@register',
        'controller' => 'App\\Http\\Controllers\\Api\\Auth\\AuthController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HipilBQw0hwJnJpH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aM6gG9HAdyO48Ri5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Auth\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Api\\Auth\\AuthController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::aM6gG9HAdyO48Ri5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lKCu3hDoe9VqbsMh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/send-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Auth\\ForgetPasswordController@sendOtp',
        'controller' => 'App\\Http\\Controllers\\Api\\Auth\\ForgetPasswordController@sendOtp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::lKCu3hDoe9VqbsMh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MDMsBVd6Ikzt7GM3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/resend-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Auth\\ForgetPasswordController@resendOtp',
        'controller' => 'App\\Http\\Controllers\\Api\\Auth\\ForgetPasswordController@resendOtp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MDMsBVd6Ikzt7GM3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NWfpScqET1YnljCw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Auth\\ForgetPasswordController@resetPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\Auth\\ForgetPasswordController@resetPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::NWfpScqET1YnljCw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q9Mx0806VvPF77Zc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/verify-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Auth\\VerificationController@verifyOtp',
        'controller' => 'App\\Http\\Controllers\\Api\\Auth\\VerificationController@verifyOtp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::q9Mx0806VvPF77Zc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GfISHO3baJqTwTWl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/act_mod',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@act_mod',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@act_mod',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GfISHO3baJqTwTWl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ooMjZz1B6f1eAxu2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/resend-otp-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\FinanceController@resendOtp',
        'controller' => 'App\\Http\\Controllers\\Api\\FinanceController@resendOtp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ooMjZz1B6f1eAxu2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MeV4ZsT5OjbiDfFh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Auth\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Api\\Auth\\AuthController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MeV4ZsT5OjbiDfFh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eqBxouEa8sf9Hd5g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/add-Your-addss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AdsController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\AdsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::eqBxouEa8sf9Hd5g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wTRUgvUkwnKvid24' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/addss/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::wTRUgvUkwnKvid24',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YmLiUUyzKteU3EHm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addss/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YmLiUUyzKteU3EHm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N9Hjsu5m4QLP4Roy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@notification',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@notification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::N9Hjsu5m4QLP4Roy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kX1DnCNpvkC1hCQQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/changestatuenotificaton',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@changestatue',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@changestatue',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::kX1DnCNpvkC1hCQQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zivwSTdqN1h4XLEx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addss/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::zivwSTdqN1h4XLEx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hbau1LVkSlEZTIIK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@profile',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Hbau1LVkSlEZTIIK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QYsLb5021yrS4c6R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@updateProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::QYsLb5021yrS4c6R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VX9tgPNAuJgutiUK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@changPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@changPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VX9tgPNAuJgutiUK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tkR6RbkGkrck0CjG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@ads',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@ads',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::tkR6RbkGkrck0CjG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O4n9KiaYuWvFGoHw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@updateAdsShowInHomePage',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@updateAdsShowInHomePage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::O4n9KiaYuWvFGoHw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tAahdXbE0oIF0Ri6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/filter-addss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@filter',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@filter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::tAahdXbE0oIF0Ri6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get-requests' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/requests_auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\RequestController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\RequestController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'get-requests',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance.order2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/finance-Order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\FinanceController@financeOrder',
        'controller' => 'App\\Http\\Controllers\\Api\\FinanceController@financeOrder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'finance.order2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dnvgwuUx6Z3uiNfX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/add-favorite-withoutauth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\FavoriteController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\FavoriteController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dnvgwuUx6Z3uiNfX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ccf6xDLWywT5AUcc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/bankSelection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\BankController@bankSelection',
        'controller' => 'App\\Http\\Controllers\\Api\\BankController@bankSelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ccf6xDLWywT5AUcc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZtsRxw3GL6mxY7Pd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/models',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@models',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@models',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZtsRxw3GL6mxY7Pd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J5AfZf9VyKCTlY6A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@carsdetails',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@carsdetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::J5AfZf9VyKCTlY6A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XvvokPlzT5m6f5by' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@brands',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@brands',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XvvokPlzT5m6f5by',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U0dnMvzp0CZ5mg2o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@questions',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@questions',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::U0dnMvzp0CZ5mg2o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rcipVSLt9wvo3c8M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getAllData',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@getAllData',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@getAllData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rcipVSLt9wvo3c8M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pcdhMLbEWHyMwvSq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/banks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\BankController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\BankController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::pcdhMLbEWHyMwvSq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9Mw23IebXNGvp9ku' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/brand/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@carsbrand',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@carsbrand',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9Mw23IebXNGvp9ku',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KJXI2UTK3Iipq6V1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/brands-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@brandsSearch',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@brandsSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KJXI2UTK3Iipq6V1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9Llc9oF7hujdOOp5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/advanced-search-selects/{id}/{step}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@advancedSelect',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@advancedSelect',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9Llc9oF7hujdOOp5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0wGRwAG7tp53ngQL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/advanced-select-search/{modelId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@advancedSelect2',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@advancedSelect2',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0wGRwAG7tp53ngQL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6z9bAT9IjTSfssZZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/why-code-car',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@why_code_car',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@why_code_car',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6z9bAT9IjTSfssZZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kunxznmvCchUSe5L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/financing-advantage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@financing_advantage',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@financing_advantage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::kunxznmvCchUSe5L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QbawSSUAek76KdVC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/financing-body',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@financing_bodies',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@financing_bodies',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::QbawSSUAek76KdVC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jP6vtVcTD3UwHi6o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/models-search/{brandId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@modelsSearch',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@modelsSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jP6vtVcTD3UwHi6o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oZDTByCazHmAsGua' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/normal-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@normalSearch',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@normalSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::oZDTByCazHmAsGua',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TDchY7j9ZV2RSrHi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/latest-models',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@latestModel',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@latestModel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TDchY7j9ZV2RSrHi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T4FFtE8fsN8xmVZ4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/exclusive-offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@exclusiveOffers',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@exclusiveOffers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::T4FFtE8fsN8xmVZ4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zwQSn1b5HTPlRjQt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/advanced-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@advancedSearchCar',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@advancedSearchCar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::zwQSn1b5HTPlRjQt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jLYiudtPhe5FDJQ8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getAllCars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@getAllCars',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@getAllCars',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jLYiudtPhe5FDJQ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RE7HGUXYcVebiSDF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getColorsWithPrice/{car}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@getColorsWithPrice',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@getColorsWithPrice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RE7HGUXYcVebiSDF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DWjn83ShMJ8BMNgU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cars/{car}/colors/{color?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@getColorImages',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@getColorImages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DWjn83ShMJ8BMNgU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N6d8s14lbpZIWqov' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/calc_data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\HomeController@act_mod',
        'controller' => 'App\\Http\\Controllers\\Api\\HomeController@act_mod',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::N6d8s14lbpZIWqov',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XIsYwE45DA5BbSb6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/partners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PartnerController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\PartnerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XIsYwE45DA5BbSb6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fL3JvESM3XYLhR0t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/footer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SettingController@footer',
        'controller' => 'App\\Http\\Controllers\\Api\\SettingController@footer',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fL3JvESM3XYLhR0t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OzinIDu3qtftna0G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/finance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SettingController@finance',
        'controller' => 'App\\Http\\Controllers\\Api\\SettingController@finance',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::OzinIDu3qtftna0G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DaOKmMz66X7o8QD6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/social',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SettingController@social',
        'controller' => 'App\\Http\\Controllers\\Api\\SettingController@social',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DaOKmMz66X7o8QD6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HvPTOQ1vPrTaOIjs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cars-news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SettingController@cars_news',
        'controller' => 'App\\Http\\Controllers\\Api\\SettingController@cars_news',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HvPTOQ1vPrTaOIjs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TGhhHLKwaBbJhVBb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SettingController@contact_us',
        'controller' => 'App\\Http\\Controllers\\Api\\SettingController@contact_us',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TGhhHLKwaBbJhVBb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BmtEjjbFEDaJy8rG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SettingController@aboutUs',
        'controller' => 'App\\Http\\Controllers\\Api\\SettingController@aboutUs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BmtEjjbFEDaJy8rG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oQvDkYbCmUKqLtMw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/filter_count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SettingController@filter_count',
        'controller' => 'App\\Http\\Controllers\\Api\\SettingController@filter_count',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::oQvDkYbCmUKqLtMw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::riPYskorLesgk0uy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/offer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SettingController@offer',
        'controller' => 'App\\Http\\Controllers\\Api\\SettingController@offer',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::riPYskorLesgk0uy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ga50F5b0iEDWxBhe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SettingController@setting',
        'controller' => 'App\\Http\\Controllers\\Api\\SettingController@setting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ga50F5b0iEDWxBhe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VToWoI7nimF2iSPJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/privacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SettingController@privacy',
        'controller' => 'App\\Http\\Controllers\\Api\\SettingController@privacy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VToWoI7nimF2iSPJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F0alWnZN4PqmRp28' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/terms-condition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SettingController@termsCondition',
        'controller' => 'App\\Http\\Controllers\\Api\\SettingController@termsCondition',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::F0alWnZN4PqmRp28',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OuEfiCiWfA64bQ12' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SettingController@setting',
        'controller' => 'App\\Http\\Controllers\\Api\\SettingController@setting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::OuEfiCiWfA64bQ12',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UoSz7PGxglp71ia8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/allsettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SettingController@AllDescription',
        'controller' => 'App\\Http\\Controllers\\Api\\SettingController@AllDescription',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UoSz7PGxglp71ia8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RI9utuQZX2n4qTHU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cashing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SettingController@cach',
        'controller' => 'App\\Http\\Controllers\\Api\\SettingController@cach',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RI9utuQZX2n4qTHU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PWkiPFFV73nmtwLP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/brands/{id}/models',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@getModels',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@getModels',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::PWkiPFFV73nmtwLP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pmQuJUcBfg8uj2j5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/subscriber/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SubscriberController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\SubscriberController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::pmQuJUcBfg8uj2j5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gJwqhChz7VoBs6u3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/news/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\NewsController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\NewsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::gJwqhChz7VoBs6u3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1EqGLJSDQ980kbIj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\NewsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\NewsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::1EqGLJSDQ980kbIj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aJWIGmp38yK8tu3K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/car-option',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@CarOption',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@CarOption',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::aJWIGmp38yK8tu3K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9Vf3ycYpRyEqj1ZK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/car/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@cardetails',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@cardetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9Vf3ycYpRyEqj1ZK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7mJJXHYlN08y0MHY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ContactController@contact',
        'controller' => 'App\\Http\\Controllers\\Api\\ContactController@contact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::7mJJXHYlN08y0MHY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mbAQUquiJGlEekOB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/car-model',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@carmodel',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@carmodel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mbAQUquiJGlEekOB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q6QKvnYrn1BUSKx1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/verify-otp-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\FinanceController@verifyOtp',
        'controller' => 'App\\Http\\Controllers\\Api\\FinanceController@verifyOtp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Q6QKvnYrn1BUSKx1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kd0w3Uz3vGIGnzTm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/cash-Order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\FinanceController@validationcash',
        'controller' => 'App\\Http\\Controllers\\Api\\FinanceController@validationcash',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Kd0w3Uz3vGIGnzTm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mO8iqt0lQZgzxp0J' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/financecar-Order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\FinanceController@validationfinance',
        'controller' => 'App\\Http\\Controllers\\Api\\FinanceController@validationfinance',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mO8iqt0lQZgzxp0J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NFsfy7FJfovnrSdc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\citiyController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\citiyController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::NFsfy7FJfovnrSdc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LYIL2XnXYiYzfL3R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/service-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ServiceController@requestService',
        'controller' => 'App\\Http\\Controllers\\Api\\ServiceController@requestService',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LYIL2XnXYiYzfL3R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i00Gr0Lq63TKKohn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/service-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ServiceController@OrderServiceList',
        'controller' => 'App\\Http\\Controllers\\Api\\ServiceController@OrderServiceList',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::i00Gr0Lq63TKKohn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y3akPBRgEdKhiWfw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ServiceController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\ServiceController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Y3akPBRgEdKhiWfw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5UnaI6wFuPSaMYB4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ServiceController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\ServiceController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5UnaI6wFuPSaMYB4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nqeCpHRxbZPxYgX9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/similar-services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ServiceController@similarService',
        'controller' => 'App\\Http\\Controllers\\Api\\ServiceController@similarService',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::nqeCpHRxbZPxYgX9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dlKqWkSVeT1i3zLD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/service-city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ServiceController@revieveCity',
        'controller' => 'App\\Http\\Controllers\\Api\\ServiceController@revieveCity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dlKqWkSVeT1i3zLD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kfOCRXkhvVhBOLL8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/offers/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OfferController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\OfferController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::kfOCRXkhvVhBOLL8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5SgU2agzYPaGONjP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OfferController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\OfferController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5SgU2agzYPaGONjP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MLKx8ccxWFR3F2BJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/best-selling-cars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@BestSellingCars',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@BestSellingCars',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MLKx8ccxWFR3F2BJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HmYGhcdKFNtNlEPd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cars-biggest-discount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@carsWithBiggestDiscount',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@carsWithBiggestDiscount',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HmYGhcdKFNtNlEPd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BZ1KZAypuMg32e17' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/current-year',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@currentyear',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@currentyear',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BZ1KZAypuMg32e17',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aGJhM6uJiUrZXaY0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@filter',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@filter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::aGJhM6uJiUrZXaY0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JZ5Gck9tJqcDKaEa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/filterData',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@filterGetApi',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@filterGetApi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::JZ5Gck9tJqcDKaEa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oYDpgFqb05F4d3Ux' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SearchController@search',
        'controller' => 'App\\Http\\Controllers\\Api\\SearchController@search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::oYDpgFqb05F4d3Ux',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Km1DbVkkXw1F0iSZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@categories',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@categories',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Km1DbVkkXw1F0iSZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uFaCLGkjbNx7gOsO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/car-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@cartype',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@cartype',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::uFaCLGkjbNx7gOsO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vfBIebvpTtraJHAe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@getMaxMinPrices',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@getMaxMinPrices',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::vfBIebvpTtraJHAe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dr93NYE4V7dIQpei' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/search-car-prices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CarController@searchCar',
        'controller' => 'App\\Http\\Controllers\\Api\\CarController@searchCar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dr93NYE4V7dIQpei',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calculator' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/calculator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Home\\CalculatorController@index',
        'controller' => 'App\\Http\\Controllers\\Home\\CalculatorController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'calculator',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amount-calculator' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/amount-calculator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Home\\CalculatorController@calculate',
        'controller' => 'App\\Http\\Controllers\\Home\\CalculatorController@calculate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'amount-calculator',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'calculateInstallments' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/calculate-installments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Home\\CalculatorController@calculateInstallmentss',
        'controller' => 'App\\Http\\Controllers\\Home\\CalculatorController@calculateInstallmentss',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'calculateInstallments',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jdY9RUuEDYuZPBAf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/order/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jdY9RUuEDYuZPBAf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'individualsFinance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/individuals-finance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@individualsFinance',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@individualsFinance',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'individualsFinance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'individualsCash' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/individuals-cash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@individualsCash',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@individualsCash',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'individualsCash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'companyFinance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/company-finance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@companyFinance',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@companyFinance',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'companyFinance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'companyCash' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/company-cash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@companyCash',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@companyCash',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'companyCash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5UuwdwMfYdxJV92O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/Cars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@allCar',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@allCar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5UuwdwMfYdxJV92O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qt4PRI1V7oOicMyo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cars/{id}/colorIds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@getColorsByCarId',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@getColorsByCarId',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Qt4PRI1V7oOicMyo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GGsgUPtdd988aazy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/requests-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\RequestController@search',
        'controller' => 'App\\Http\\Controllers\\Api\\RequestController@search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GGsgUPtdd988aazy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HUUBkk1nmv13skkx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/find',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\financecalc@encry',
        'controller' => 'App\\Http\\Controllers\\Api\\financecalc@encry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HUUBkk1nmv13skkx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get-requests-without-auth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\RequestController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\RequestController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'get-requests-without-auth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::awDeheer7wOigpa4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/valid/otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OtpController@validOtp',
        'controller' => 'App\\Http\\Controllers\\Api\\OtpController@validOtp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::awDeheer7wOigpa4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UVgU29FAzKW8lEbg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/resend/otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OtpController@resendOtp',
        'controller' => 'App\\Http\\Controllers\\Api\\OtpController@resendOtp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UVgU29FAzKW8lEbg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xGfhjCzAEEU10Pj0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/branches/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\BranchController@get',
        'controller' => 'App\\Http\\Controllers\\Api\\BranchController@get',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::xGfhjCzAEEU10Pj0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0UABRze2oQ9uAEtA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update/cars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:503:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:284:"function(\\Illuminate\\Http\\Request $request){
    $cars = \\App\\Models\\Car::all();

    foreach ($cars as $car) {
        $car->update([
            \'price_after_tax\'=>$car->price * (1 + \\settings()->getSettings(\'tax\') / 100),
        ]);
        # code...
    }
     
    
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000d860000000000000000";}";s:4:"hash";s:44:"GRMi6AiVrQ9X9AmwgZAomDJVJtH+uwk7oK0nYcnbaU4=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0UABRze2oQ9uAEtA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pay.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'pay.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'pay.payment',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dIGbQi2Rt4LagILy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment/form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:325:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:106:"function(){

        return \\response()->json([
            \'url\'=>\\url(\'api/pay\'),
        ]);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000d890000000000000000";}";s:4:"hash";s:44:"vwtJqMe3ymq3wuI0RLTeTaIvaq1aG5UO270PB5FrzZE=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dIGbQi2Rt4LagILy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'change-language' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'language/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingController@changeLanguage',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingController@changeLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'change-language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'set_locale',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:279:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:61:"function () {
        return \\redirect(\'/dashboard\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000d900000000000000000";}";s:4:"hash";s:44:"tK6chpa+qHhcmi7otyXD1VDelv/ZmHWsLoGu+H4Q3dk=";}}',
        'namespace' => 'App\\Http\\Controllers\\Auth',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.login-form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employee/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmployeeAuthController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmployeeAuthController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers\\Auth',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.login-form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'employee/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmployeeAuthController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmployeeAuthController@login',
        'namespace' => 'App\\Http\\Controllers\\Auth',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'employee/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmployeeAuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmployeeAuthController@logout',
        'namespace' => 'App\\Http\\Controllers\\Auth',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'employee.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home.calculator' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'calculator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Home\\CalculatorController@index',
        'controller' => 'App\\Http\\Controllers\\Home\\CalculatorController@index',
        'as' => 'home.calculator',
        'namespace' => 'App\\Http\\Controllers\\Home',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home.amount-calculator' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'amount-calculator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Home\\CalculatorController@calculate',
        'controller' => 'App\\Http\\Controllers\\Home\\CalculatorController@calculate',
        'as' => 'home.amount-calculator',
        'namespace' => 'App\\Http\\Controllers\\Home',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home.calculateInstallments' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'calculate-installments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Home\\CalculatorController@calculateInstallmentss',
        'controller' => 'App\\Http\\Controllers\\Home\\CalculatorController@calculateInstallmentss',
        'as' => 'home.calculateInstallments',
        'namespace' => 'App\\Http\\Controllers\\Home',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home.individualsFinance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'individuals-finance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Home\\OrderController@individualsFinance',
        'controller' => 'App\\Http\\Controllers\\Home\\OrderController@individualsFinance',
        'as' => 'home.individualsFinance',
        'namespace' => 'App\\Http\\Controllers\\Home',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W5xyL9a4DDlt1agU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:2599:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:2379:"function () {
    \\storeAndPushNotification(\'موعد صيانة جديد\', \'New appointment\', \'تم حجز موعد صيانة جديد من بتاري 31-05-2023 الساعة 1:00 م اضغط لعرض التفاصيل\', \'تم حجز موعد صيانة جديد من بتاري 31-05-2023 الساعة 1:00 م اضغط لعرض التفاصيل\', \'<svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.40094 3.4401V2.10677C7.40033 1.76658 7.52977 1.43903 7.76277 1.19116C7.99577 0.943285 8.3147 0.793848 8.65427 0.773438H16.0009C16.3381 0.797099 16.6538 0.947953 16.884 1.19548C17.1142 1.44301 17.2418 1.76874 17.2409 2.10677V3.4401C17.2418 3.77813 17.1142 4.10386 16.884 4.35139C16.6538 4.59892 16.3381 4.74978 16.0009 4.77344H8.65427C8.3147 4.75303 7.99577 4.60359 7.76277 4.35572C7.52977 4.10785 7.40033 3.78029 7.40094 3.4401ZM24.0009 10.3068V19.9334C24.0168 20.8755 23.847 21.8114 23.5011 22.6878C23.1552 23.5642 22.6401 24.3639 21.9851 25.0412C21.3301 25.7185 20.5481 26.2601 19.6837 26.6351C18.8194 27.0101 17.8897 27.2111 16.9476 27.2268H7.08094C5.18074 27.2022 3.36795 26.4246 2.04054 25.0646C0.713134 23.7047 -0.0204132 21.8737 0.000939745 19.9734V10.3468C-0.0270515 8.61371 0.571086 6.92871 1.68552 5.60118C2.79996 4.27366 4.35589 3.39271 6.06761 3.1201V3.4401C6.06729 4.1337 6.33724 4.80013 6.82016 5.29799C7.30309 5.79585 7.96099 6.08596 8.65427 6.10677H16.0009C16.6919 6.08257 17.3464 5.79097 17.8265 5.29348C18.3066 4.79598 18.5747 4.13147 18.5743 3.4401V3.21344C20.1405 3.62092 21.5255 4.54049 22.5088 5.82584C23.4921 7.1112 24.0174 8.68849 24.0009 10.3068ZM7.80094 15.4134L10.9743 19.3334C11.0666 19.4457 11.1826 19.5362 11.314 19.5985C11.4454 19.6607 11.5889 19.6931 11.7343 19.6934C11.8856 19.6924 12.0345 19.6557 12.1689 19.5861C12.3033 19.5166 12.4193 19.4163 12.5076 19.2934L16.8543 13.4401C16.9828 13.2317 17.0357 12.9855 17.0041 12.7427C16.9726 12.4999 16.8585 12.2754 16.6809 12.1068C16.4748 11.9647 16.2224 11.9064 15.9748 11.9435C15.7272 11.9806 15.503 12.1105 15.3476 12.3068L11.7476 17.1468L9.33427 14.1601C9.17326 13.9701 8.94633 13.8479 8.69903 13.8183C8.45172 13.7886 8.20234 13.8536 8.00094 14.0001C7.79628 14.1676 7.66209 14.4059 7.62504 14.6677C7.58799 14.9296 7.65078 15.1958 7.80094 15.4134Z" fill="currentColor"/>
</svg>\', \'success\', \'/dashboard/appointments\');
    \\dd("done");
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000d970000000000000000";}";s:4:"hash";s:44:"ACgoSc7eepdpEdp99v2O9QE3iK38yWHsyQf90Ic6FQs=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::W5xyL9a4DDlt1agU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/change-theme-mode/{mode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingController@changeThemeMode',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingController@changeThemeMode',
        'as' => 'dashboard.',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@index',
        'as' => 'dashboard.index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::JyFRPmdTpuWtR7Iv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/allemployees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OrderController@employeeapi',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OrderController@employeeapi',
        'as' => 'dashboard.generated::JyFRPmdTpuWtR7Iv',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.calculator' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/open-calculator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@openCalculator',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@openCalculator',
        'as' => 'dashboard.calculator',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.calculateInstallment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/calculate-installment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@calculateInstallment',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@calculateInstallment',
        'as' => 'dashboard.calculateInstallment',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::qlF7MwE80EIVhWVw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/get-models/{brandId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CarController@getModels',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CarController@getModels',
        'as' => 'dashboard.generated::qlF7MwE80EIVhWVw',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::qxIhqh9K2VL0BzCA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/get-categories/{modelId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CarController@getcategories',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CarController@getcategories',
        'as' => 'dashboard.generated::qxIhqh9K2VL0BzCA',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::YftYUwt4XhdNdvVy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/sort/image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CarController@updateImageOrder',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CarController@updateImageOrder',
        'as' => 'dashboard.generated::YftYUwt4XhdNdvVy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.features.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/features',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.features.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.brands.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.models.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/models',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.models.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ModelController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ModelController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.categories.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::pWML6zO9fkWJwXkb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/features/get-options',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@getOptions',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@getOptions',
        'as' => 'dashboard.generated::pWML6zO9fkWJwXkb',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.features.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/features/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.features.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.features.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/features',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.features.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.features.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/features/{feature}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.features.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.features.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/features/{feature}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.features.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.features.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/features/{feature}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.features.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.features.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/features/{feature}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.features.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FeatureController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.partners.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/partners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.partners.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PartnerController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PartnerController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.partners.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/partners/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.partners.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PartnerController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PartnerController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.partners.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/partners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.partners.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PartnerController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PartnerController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.partners.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/partners/{partner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.partners.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PartnerController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PartnerController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.partners.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/partners/{partner}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.partners.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PartnerController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PartnerController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.partners.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/partners/{partner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.partners.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PartnerController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PartnerController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.partners.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/partners/{partner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.partners.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\PartnerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\PartnerController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.orders.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OrderController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.orders.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OrderController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OrderController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.orders.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OrderController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OrderController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.orders.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OrderController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders/{order}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.orders.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OrderController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OrderController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.orders.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OrderController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OrderController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.orders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.orders.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OrderController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.questions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.questions.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\QuestionController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\QuestionController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.questions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/questions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.questions.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\QuestionController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\QuestionController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.questions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.questions.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\QuestionController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\QuestionController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.questions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/questions/{question}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.questions.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\QuestionController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\QuestionController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.questions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/questions/{question}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.questions.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\QuestionController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\QuestionController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.questions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/questions/{question}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.questions.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\QuestionController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\QuestionController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.questions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/questions/{question}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.questions.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\QuestionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\QuestionController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.roles.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RoleController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.roles.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RoleController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.roles.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RoleController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.roles.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RoleController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RoleController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.roles.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RoleController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.roles.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RoleController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.roles.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RoleController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/brands/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.brands.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.brands.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.brands.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/brands/{brand}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.brands.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.brands.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brands.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.brands.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BrandController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BrandController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.models.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/models/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.models.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ModelController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ModelController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.models.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/models',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.models.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ModelController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ModelController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.models.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/models/{model}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.models.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ModelController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ModelController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.models.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/models/{model}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.models.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ModelController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ModelController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.models.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/models/{model}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.models.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ModelController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ModelController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.models.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/models/{model}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.models.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ModelController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ModelController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cars.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.cars.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CarController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CarController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cars.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cars/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.cars.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CarController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CarController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cars.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/cars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.cars.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CarController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CarController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cars.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cars/{car}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.cars.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CarController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CarController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cars.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cars/{car}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.cars.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CarController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CarController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cars.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/cars/{car}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.cars.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CarController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CarController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cars.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/cars/{car}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.cars.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CarController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CarController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.categories.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.categories.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.categories.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.categories.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.categories.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.categories.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CategoriesController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.colors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/colors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.colors.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ColorController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ColorController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.colors.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/colors/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.colors.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ColorController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ColorController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.colors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/colors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.colors.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ColorController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ColorController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.colors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/colors/{color}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.colors.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ColorController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ColorController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.colors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/colors/{color}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.colors.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ColorController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ColorController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.colors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/colors/{color}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.colors.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ColorController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ColorController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.colors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/colors/{color}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.colors.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ColorController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ColorController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tags.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.tags.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TagController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TagController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tags.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/tags/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.tags.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TagController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TagController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tags.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.tags.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TagController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TagController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tags.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/tags/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.tags.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TagController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TagController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tags.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/tags/{tag}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.tags.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TagController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TagController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tags.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/tags/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.tags.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TagController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TagController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tags.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/tags/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.tags.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TagController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TagController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employees.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.employees.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employees.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employees/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.employees.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employees.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.employees.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employees.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employees/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.employees.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employees.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employees/{employee}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.employees.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employees.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/employees/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.employees.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employees.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/employees/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.employees.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.vendors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/vendors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.vendors.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\VendorController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\VendorController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.vendors.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/vendors/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.vendors.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\VendorController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\VendorController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.vendors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/vendors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.vendors.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\VendorController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\VendorController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.vendors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/vendors/{vendor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.vendors.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\VendorController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\VendorController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.vendors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/vendors/{vendor}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.vendors.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\VendorController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\VendorController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.vendors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/vendors/{vendor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.vendors.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\VendorController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\VendorController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.vendors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/vendors/{vendor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.vendors.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\VendorController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\VendorController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.banks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/banks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.banks.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BankController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BankController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.banks.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/banks/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.banks.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BankController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BankController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.banks.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/banks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.banks.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BankController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BankController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.banks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/banks/{bank}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.banks.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BankController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BankController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.banks.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/banks/{bank}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.banks.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BankController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BankController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.banks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/banks/{bank}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.banks.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BankController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BankController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.banks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/banks/{bank}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.banks.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BankController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BankController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.financeing.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/financeing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.financeing.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FiananceController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FiananceController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.financeing.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/financeing/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.financeing.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FiananceController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FiananceController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.financeing.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/financeing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.financeing.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FiananceController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FiananceController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.financeing.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/financeing/{financeing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.financeing.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FiananceController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FiananceController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.financeing.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/financeing/{financeing}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.financeing.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FiananceController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FiananceController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.financeing.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/financeing/{financeing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.financeing.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FiananceController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FiananceController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.financeing.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/financeing/{financeing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.financeing.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FiananceController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FiananceController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.services.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.services.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.services.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.services.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.services.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.services.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.services.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.services.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.services.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/{service}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.services.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.services.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.services.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.services.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.services.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ServiceController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.branches.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/branches',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.branches.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BranchController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BranchController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.branches.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/branches/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.branches.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BranchController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BranchController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.branches.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/branches',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.branches.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BranchController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BranchController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.branches.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/branches/{branch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.branches.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BranchController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BranchController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.branches.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/branches/{branch}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.branches.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BranchController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BranchController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.branches.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/branches/{branch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.branches.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BranchController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BranchController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.branches.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/branches/{branch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.branches.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\BranchController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\BranchController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.cities.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CityController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CityController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cities/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.cities.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CityController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CityController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.cities.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CityController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CityController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.cities.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CityController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CityController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cities/{city}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.cities.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CityController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CityController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.cities.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CityController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CityController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cities.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.cities.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CityController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CityController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.news.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.news.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NewsController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NewsController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.news.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/news/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.news.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NewsController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NewsController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.news.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.news.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NewsController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NewsController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.news.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.news.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NewsController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NewsController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.news.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/news/{news}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.news.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NewsController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NewsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.news.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.news.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NewsController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NewsController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.news.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/news/{news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.news.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NewsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NewsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.faqs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.faqs.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FaqController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FaqController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.faqs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/faqs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.faqs.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FaqController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FaqController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.faqs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.faqs.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FaqController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FaqController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.faqs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/faqs/{faq}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.faqs.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FaqController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FaqController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.faqs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/faqs/{faq}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.faqs.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FaqController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FaqController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.faqs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/faqs/{faq}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.faqs.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FaqController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FaqController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.faqs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/faqs/{faq}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.faqs.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FaqController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FaqController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.offers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.offers.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OfferController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OfferController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.offers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/offers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.offers.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OfferController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OfferController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.offers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.offers.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OfferController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OfferController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.offers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/offers/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.offers.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OfferController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OfferController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.offers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/offers/{offer}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.offers.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OfferController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OfferController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.offers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/offers/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.offers.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OfferController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OfferController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.offers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/offers/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.offers.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OfferController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OfferController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.contact-us.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.contact-us.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactUsController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactUsController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.contact-us.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/contact-us/{contact_u}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.contact-us.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactUsController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactUsController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.contact-us.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/contact-us/{contact_u}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.contact-us.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactUsController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactUsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.contact-us.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/contact-us/{contact_u}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.contact-us.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\ContactUsController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\ContactUsController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.news-subscribers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/news-subscribers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.news-subscribers.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NewsSubscriberController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NewsSubscriberController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.news-subscribers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/news-subscribers/{news_subscriber}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.news-subscribers.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NewsSubscriberController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NewsSubscriberController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.news-subscribers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/news-subscribers/{news_subscriber}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.news-subscribers.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NewsSubscriberController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NewsSubscriberController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.news-subscribers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/news-subscribers/{news_subscriber}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.news-subscribers.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NewsSubscriberController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NewsSubscriberController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.settings.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.settings.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\SettingController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\SettingController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::SrArnVoSSsblFV1b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/applicants',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CareerController@applicants',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CareerController@applicants',
        'as' => 'dashboard.generated::SrArnVoSSsblFV1b',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.careers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/careers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.careers.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CareerController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CareerController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.careers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/careers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.careers.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CareerController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CareerController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.careers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/careers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.careers.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CareerController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CareerController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.careers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/careers/{career}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.careers.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CareerController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CareerController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.careers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/careers/{career}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.careers.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CareerController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CareerController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.careers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/careers/{career}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.careers.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CareerController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CareerController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.careers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/careers/{career}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.careers.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CareerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CareerController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.finance-approvals.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/finance-approvals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.finance-approvals.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.finance-approvals.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/finance-approvals/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.finance-approvals.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@create',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.finance-approvals.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/finance-approvals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.finance-approvals.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@store',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.finance-approvals.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/finance-approvals/{finance_approval}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.finance-approvals.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@show',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.finance-approvals.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/finance-approvals/{finance_approval}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.finance-approvals.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@edit',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.finance-approvals.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/finance-approvals/{finance_approval}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.finance-approvals.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@update',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.finance-approvals.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/finance-approvals/{finance_approval}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'as' => 'dashboard.finance-approvals.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::Sy8UqtqQILEVye0i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/finance-approvals/pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@financeapprovalPDF',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\FinanceApprovalsController@financeapprovalPDF',
        'as' => 'dashboard.generated::Sy8UqtqQILEVye0i',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::jY8RKcZ7ugWx16Bv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cars/{car}/duplicate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CarController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CarController@edit',
        'as' => 'dashboard.generated::jY8RKcZ7ugWx16Bv',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::fGOjngJgKemnkDDU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cars/{car}/images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CarController@images',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CarController@images',
        'as' => 'dashboard.generated::fGOjngJgKemnkDDU',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::jGwgkBELwS1b48cm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/dropzone/validate-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\DropzoneController@validateImage',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\DropzoneController@validateImage',
        'as' => 'dashboard.generated::jGwgkBELwS1b48cm',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.save-token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/save-token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@saveToken',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@saveToken',
        'as' => 'dashboard.save-token',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.notifications.mark_as_read' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/notifications/{id}/mark_as_read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@markAsRead',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@markAsRead',
        'as' => 'dashboard.notifications.mark_as_read',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.notifications.load_more' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/notifications/{type}/load-more/{next}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@loadMore',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@loadMore',
        'as' => 'dashboard.notifications.load_more',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.notifications.mark_all_as_read' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/notifications/mark-all-as-read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@markAllAsRead',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@markAllAsRead',
        'as' => 'dashboard.notifications.mark_all_as_read',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.notifications.change-sound-status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/notifications/change-status-sound',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@changeSoundStatus',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\NotificationController@changeSoundStatus',
        'as' => 'dashboard.notifications.change-sound-status',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::54ukqIOhdvHmpWz0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/role/{role}/employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RoleController@employees',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RoleController@employees',
        'as' => 'dashboard.generated::54ukqIOhdvHmpWz0',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::aiEV1HW3WU5QVSe8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/car-validate/{car?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CarController@validateStep',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CarController@validateStep',
        'as' => 'dashboard.generated::aiEV1HW3WU5QVSe8',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::DMz4Dw71FAWJvArk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/change-status/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OrderController@changeStatus',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OrderController@changeStatus',
        'as' => 'dashboard.generated::DMz4Dw71FAWJvArk',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::PrKyORAlw4wt6A6I' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/assigntoemployee/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OrderController@assignToEmployee',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OrderController@assignToEmployee',
        'as' => 'dashboard.generated::PrKyORAlw4wt6A6I',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::7ibmZshlvFw6y50c' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/cars/{carId}/update-images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\CarController@updateCarImages',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\CarController@updateCarImages',
        'as' => 'dashboard.generated::7ibmZshlvFw6y50c',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.edit-profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/edit-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'dashboard.edit-profile',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'dashboard.employees.edit-profile',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.update-profile' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/update-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@updateProfile',
        'as' => 'dashboard.update-profile',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.update-password' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/update-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\EmployeeController@updatePassword',
        'as' => 'dashboard.update-password',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.trash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/trash/{modelName?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TrashController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TrashController@index',
        'as' => 'dashboard.trash',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.trash.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/trash/{modelName}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TrashController@restore',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TrashController@restore',
        'as' => 'dashboard.trash.restore',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::oadO7NAJAAsr3Goo' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/trash/{modelName}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\TrashController@forceDelete',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\TrashController@forceDelete',
        'as' => 'dashboard.generated::oadO7NAJAAsr3Goo',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.requestService.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/request/service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\RequestServiceController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\RequestServiceController@index',
        'as' => 'dashboard.requestService.index',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.export.orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/export-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OrderController@exportAllOrders',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OrderController@exportAllOrders',
        'as' => 'dashboard.export.orders',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.export.request-service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/export-request-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OrderController@exportAllRequestService',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OrderController@exportAllRequestService',
        'as' => 'dashboard.export.request-service',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.export.subscriber' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/export-subscriber',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\OrderController@exportAllSubscriber',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\OrderController@exportAllSubscriber',
        'as' => 'dashboard.export.subscriber',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.files.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/Images/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
          4 => 'auth',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:924:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:705:"function ($type) {
        $fileUrl = \\getImagePathFromDirectory($type, \'Orders\');

        if (!$fileUrl)
        {
            \\abort(404, \'File not found.\');
        }

        $fileName = \\basename($fileUrl);

        // Fetch file content from URL
        $fileContent = \\file_get_contents($fileUrl);
        if ($fileContent === false)
        {
            \\abort(404, \'Failed to download file.\');
        }

        // Serve file with appropriate headers to force download
        return \\response($fileContent, 200, [
            \'Content-Type\' => \'application/octet-stream\',
            \'Content-Disposition\' => \'attachment; filename="\' . $fileName . \'"\',
        ]);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000e680000000000000000";}";s:4:"hash";s:44:"qP4+CnCNcCnkbw5RNEhMxyRujTWkE+MRFOTSzO4N6Tc=";}}',
        'as' => 'dashboard.files.download',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::gcpFv5OAensXYG6B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/moyasar/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@handleCallback',
        'controller' => 'App\\Http\\Controllers\\PaymentController@handleCallback',
        'as' => 'dashboard.generated::gcpFv5OAensXYG6B',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.payment.thanks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/thanks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:employee',
          3 => 'set_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@thanks',
        'controller' => 'App\\Http\\Controllers\\PaymentController@thanks',
        'as' => 'dashboard.payment.thanks',
        'namespace' => 'App\\Http\\Controllers\\Dashboard',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J3ZS2Qu9GYn4a5iP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-brand-parent-models/{brand}',
      'action' => 
      array (
        'uses' => '\\App\\Http\\Controllers\\SharedController@getParentModels',
        'controller' => '\\App\\Http\\Controllers\\SharedController@getParentModels',
        'namespace' => '',
        'prefix' => '',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
          1 => 'set_locale',
        ),
        'as' => 'generated::J3ZS2Qu9GYn4a5iP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KnXC4TxL179yStGi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-model-categories/{model}',
      'action' => 
      array (
        'uses' => '\\App\\Http\\Controllers\\SharedController@getModelCategories',
        'controller' => '\\App\\Http\\Controllers\\SharedController@getModelCategories',
        'namespace' => '',
        'prefix' => '',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
          1 => 'set_locale',
        ),
        'as' => 'generated::KnXC4TxL179yStGi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CZHa7XXrG5Etm0zg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-category-cars/{category}',
      'action' => 
      array (
        'uses' => '\\App\\Http\\Controllers\\SharedController@getCategoryCars',
        'controller' => '\\App\\Http\\Controllers\\SharedController@getCategoryCars',
        'namespace' => '',
        'prefix' => '',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
          1 => 'set_locale',
        ),
        'as' => 'generated::CZHa7XXrG5Etm0zg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
