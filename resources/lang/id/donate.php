<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Donate Language Lines
    |--------------------------------------------------------------------------
    */

    'paypal_title' => 'PayPal',
    'paymentwall_title' => 'Paymentwall',
    'no_methods' => 'Metode donasi belum disiapkan, silakan hubungi administrator.',
    'error' => [
        'title' => 'Error',
        'message' => 'Silakan masukkan jumlah dolar yang ingin Anda sumbangkan <b> ATAU </b> jumlah: :currency yang ingin Anda terima.',
        'minimum' => 'Kamu tidak dapat donasi kurang dari :min.'
    ],
    'double_notice' => '<b>Perhatian:</b> Double donasi aktif!',

    'double_donation' => 'Double Donasi',
    'paypal_currency' => 'Mata Uang',
    'paypal_client_id' => 'ID ',
    'paypal_client_id_desc' => 'Untuk mendapatkan ID dan rahasia klien, <a href="https://developer.paypal.com/developer/applications/" target="_blank">create an application on PayPal\'s developer site</a>. Pastikan Anda menggunakan <strong> kredensial asli </strong>, bukan kredensial pengujian.',
    'paypal_secret' => 'Rahasia',
    'paypal_per' => 'Mata Uang per :currency',
    'paypal_min' => 'Jumlah Minimal',
    'paypal' => [
        'description' => ':amount :currency',
        'success' => 'Terima kasih telah mendukung server kami, kami menghargai sumbangan Anda.'
    ],
    'paymentwall_link' => 'iFrame Link',
    'paymentwall_link_desc' => '',
    'paymentwall_key' => 'Secret Key',
    'paymentwall_setup' => [
        'title' => 'Cara Pengaturan Paymentwall',
        'steps' => [
            1 => 'Masuk ke Paymentwall',
            2 => 'Edit application settings',
            3 => 'Ubah pingback tipe ke URL',
            4 => 'Ubah URL to :url',
            5 => "<i class=\"icon-info font-red\"></i> Ubah PINGBACK SIGNATURE VERSION menjadi '1'"
        ]
    ],
    'currency' => [
        'AUD'   => "Australian Dollar",
        'BRL'   => "Brazilian Real",
        'CAD'   => "Canadian Dollar",
        'CZK'   => "Czech Koruna",
        'DKK'   => "Danish Krone",
        'EUR'   => "Euro",
        'HKD'   => "Hong Kong Dollar",
        'HUF'   => "Hungarian Forint",
        'ILS'   => "Israeli New Sheqel",
        'JPY'   => "Japanese Yen",
        'MYR'   => "Malaysian Ringgit",
        'MXN'   => "Mexican Peso",
        'NOK'   => "Norwegian Krone",
        'NZD'   => "New Zealand Dollar",
        'PHP'   => "Philippine Peso",
        'PLN'   => "Polish Zloty",
        'GBP'   => "Pound Sterling",
        'SGD'   => "Singapore Dollar",
        'SEK'   => "Swedish Krona",
        'CHF'   => "Swiss Franc",
        'TWD'   => "Taiwan New Dollar",
        'THB'   => "Thai Baht",
        'TRY'   => "Turkish Lira",
        'USD'   => "U.S. Dollar",
    ]

];
