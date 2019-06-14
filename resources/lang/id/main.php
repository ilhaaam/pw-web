<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Main Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used all across the panel
    |
    */

    'home' => 'Utama',
    'dashboard' => 'Dasbor',
    'apps' => [
        'news' => 'Berita',
        'shop' => 'Toko',
        'donate' => 'Donasi',
        'voucher' => 'Voucher',
        'vote' => 'Voting',
        'services' => 'Layanan',
        'ranking' => 'Peringkat',
        'manage' => 'Manajemen',
        'system' => 'Sistem',
        'members' => 'Anggota'
    ],
    'acp_link' => 'Admin Control Panel',
    'acc_settings' => 'Pengaturan Akun',
    'select_character' => 'Pilih Karakter',
    'site' => 'Go to Site',

    /* Class Names */
    'classes' => [
        0 => 'Warrior',
        1 => 'Mage',
        2 => 'Psychic',
        3 => 'Foxlady',
        4 => 'Bestial',
        5 => 'Assassin',
        6 => 'Archer',
        7 => 'Priest',
        8 => 'Seeker',
        9 => 'Mystic',
        10 => 'Duskblade',
        11 => 'Stormbringer'
    ],

    /* Login/Register Language Lines */
    'login' => 'Masuk',
    'login_link' => 'Masuk | Daftar',
    'logout' => 'Log Out',
    'signin' => [
        'title' => 'Sign In',
        'error' => 'Masukan Username dan Password',
        'username' => 'Username',
        'password' => 'Password',
        'button' => 'Masuk',
        'create' => 'Buat Akun',
    ],
    'signup' => [
        'title' => 'Sign Up',
        'info' => 'Masukkan detail akun Anda:',
        'email' => 'Email',
        'username' => 'Username',
        'password' => 'Password',
        'confirm' => 'Konfirmasi Password',
        'truename' => 'Nama Asli',
        'pin' => 'Nomor PIN',
        'submit' => 'Daftar',
        'back' => 'Kembali',
    ],

    'char_list_error' => 'Kami tidak dapat menemukan karakter Anda, silakan coba lagi nanti.',
    'server_not_online' => 'Server tidak online, silakan coba lagi nanti.',
    'server_offline' => [
        'title' => 'Perhatian',
        'message' => 'Beberapa halaman mungkin memuat dengan lambat karena server tidak online.'
    ],
    'no_results' => 'Maaf, tidak ada yang dapat ditampilkan...',
    'reg_complete' => 'Akun Anda telah terdaftar, sekarang Anda dapat masuk!',
    'acc_balance' => 'Saldo: :money :currency',
    'buy' => 'Beli',
    'no_character_selected' => 'Anda harus memilih karakter sebelum memproses.',
    'no_characters' => 'Anda belum membuat karakter apapun.',
    'not_enough' => 'Anda tidak memiliki cukup :currency.',
    'not_enough_gold' => 'Anda tidak memiliki cukup Coin.',

    'save' => 'Simpan',
    'save_settings' => 'Simpan Pengaturan',
    'settings' => 'Pengaturan',
    'account' => 'Akun',
    'edit' => 'Edit',
    'remove' => 'Hapus',
    'loading' => 'Memuat...',
    'settings_saved' => 'Pengaturan Anda telah disimpan!',

    'cron' => [
        'add' => 'Otomatiskan Panel Anda',
        'info' => 'Adding this cron job will automate the voting transfer and ranking updates.',
        'info' => 'Tambahkan baris berikut ke Cron job agar Voting Transfer dan Pembaruan Ranking menjadi otomatis.',
        'job' => '* * * * * php ' . base_path( 'artisan' ) . ' schedule:run >> /dev/null 2>&1'
    ],

    'acc_tabs' => [
        'overview' => [
            'title' => 'Tinjau',
            'fields' => [
                'name' => 'Nama',
                'email' => 'Email',
                'password' => 'Password'
            ]
        ],
        'email' => [
            'title' => 'Alamat Email',
            'fields' => [
                'email' => 'Alamat Email',
                'password' => 'Password'
            ]
        ],
        'pin' => [
            'title' => 'Nomor PIN',
            'fields' => [
                'current' => 'Nomor PIN saat ini',
                'current_desc' => 'Untuk memastikan perubahan ini aman',
                'new' => 'Nomor PIN baru',
                'password' => 'Password'
            ]
        ],
        'password' => [
            'title' => 'Password',
            'fields' => [
                'pin' => 'Nomor PIN',
                'current' => 'Password saat ini',
                'current_desc' => 'Untuk memastikan perubahan ini aman',
                'new' => 'Password Baru',
                'confirm' => 'Konfirmasi Password Baru'
            ]
        ]
    ],

    'char_list' => [
        'title' => 'Karakter Saya',
        'id' => 'ID: :n'
    ],

    '404' => [
        'title' => 'Oops, Kita punya masalah.',
        'content' => 'Sebenarnya, halaman yang Anda cari tidak ada.',
        'button' => 'Kembali'
    ],
    '500' => [
        'title' => 'Oops! Ada yang salah.',
        'content' => 'Kami sedang memperbaikinya! Harap kembali sebentar lagi.',
        'button' => 'Kembali'
    ]

];
