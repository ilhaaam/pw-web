<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Voucher Language Lines
    |--------------------------------------------------------------------------
    */

    'logged_in' => 'Karakter harus Online',
    'logged_out' => 'Karakter harus Offline',
    'cultivation_unlocked' => 'Harus memiliki Wibawa terlebih dahulu',
    'not_max_level' => 'Level karakter harus lebih rendah dari ' . settings( 'level_up_cap' ),
    'level_40' => 'Karakter harus memiliki Level 40 atau lebih',
    'message' => 'Pesan',
    'quantity' => 'Jumlah',
    'ingame_gold' => 'Koin didalam game',
    'requirements' => 'Persyaratan:',
    'free' => 'Gratis',
    'must_login' => 'Karakter harus Online.',
    'must_logout' => 'Karakter harus Offline.',
    'cultivation_not_unlocked' => 'Harus memiliki Wibawa terlebih dahulu.',
    'max_level' => 'Level karakter sudah maksimal.',
    'not_high_enough_level' => 'Karakter tidak memiliki level yang cukup.',
    'meridian_maxed' => 'Meridian Anda sudah maksimal.',
    'no_stash_password' => 'Karakter tidak memiliki password penyimpanan.',
    'not_enough_gold' => 'Karakter tidak memiliki cukup Koin didalam game.',
    'broadcast' => [
        'title' => 'Siarkan Pesan',
        'description' => 'Buat pengumuman didalam game!',
        'requirements' => [
            0 => 'logged_in'
        ],
        'input' => [
            'name' => 'message',
            'type' => 'text',
            'placeholder' => 'message'
        ],
        'complete' => 'Siaran Anda telah dikirim.',
    ],
    'virtual_to_cubi' => [
        'title' => 'Saldo pada panel untuk Koin didalam game',
        'description' => 'Tukarkan saldo pada panel Anda untuk Koin didalam game.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'input' => [
            'name' => 'quantity',
            'type' => 'number',
            'placeholder' => 'quantity'
        ],
        'complete' => 'Anda akan segera menerima Koin..',
    ],
    'cultivation_change' => [
        'title' => 'Ubah Wibawa',
        'description' => 'Merubah Wibawa dari Heaven ke Hell atau sebaliknya.',
        'requirements' => [
            0 => 'logged_out',
            1 => 'cultivation_unlocked'
        ],
        'complete' => 'Wibawa telah dirubah.',
    ],
    'gold_to_virtual' => [
        'title' => 'Koin didalam game untuk Saldo pada panel',
        'description' => 'Tukarkan Koin didalam game Anda untuk Saldo pada panel.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'input' => [
            'name' => 'quantity',
            'type' => 'number',
            'placeholder' => 'quantity'
        ],
        'complete' => 'Anda menerima :quantity :currency'
    ],
    'level_up' => [
        'title' => 'Level Up',
        'description' => 'Tingkatkan level karakter anda dengan mudah dan cepat.',
        'requirements' => [
            0 => 'logged_out',
            1 => 'not_max_level'
        ],
        'input' => [
            'name' => 'quantity',
            'type' => 'number',
            'placeholder' => 'quantity'
        ],
        'complete' => 'Level karakter bertambah :quantity .'
    ],
    'max_meridian' => [
        'title' => 'Tingkatkan Meridian',
        'description' => 'Tingkatkan Meridian karakter Anda dengan cepat sampai maksimal.',
        'requirements' => [
            0 => 'logged_out',
            1 => 'level_40'
        ],
        'complete' => 'Meridian Anda berhasil ditingkatkan.'
    ],
    'reset_exp' => [
        'title' => 'Reset Exp',
        'description' => 'Reset exp karakter Anda menjadi 0.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'Exp pada karakter Anda berhasil direset.',
    ],
    'reset_sp' => [
        'title' => 'Reset Skillpoint',
        'description' => 'Reset Skillpoint karakter Anda menjadi 0.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'Skillpoint karakter Anda berhasil direset.',
    ],
    'reset_stash_password' => [
        'title' => 'Reset Password Penyimpanan',
        'description' => 'Pulihkan akses penyimpanan Anda.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'Password penyimpanan Anda berhasil dihapus.',
    ],
    'teleport' => [
        'title' => 'Teleport Karakter',
        'description' => 'Teleport karakter Anda jika Anda terjebak dalam game dan tidak dapat memasuki game.',
        'requirements' => [
            0 => 'logged_out'
        ],
        'complete' => 'Karakter Anda telah diteleportasi.',
    ],

    'edit' => 'Edit Pelayanan',
    'fields' => [
        'enabled' => 'Aktif',
        'price' => 'Harga',
        'price_desc' => '0 = Gratis',
        'world_tag' => 'World Tag',
        'x' => 'X Koordinat',
        'y' => 'Y Koordinat',
        'z' => 'Z Koordinat',
        'cap' => 'Maksimal Level'
    ],
    'edit_success' => 'Pengaturan berhasil disimpan!',
];
