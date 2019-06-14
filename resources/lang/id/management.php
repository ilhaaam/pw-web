<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Management Language Lines
    |--------------------------------------------------------------------------
    */

    'broadcast' => 'Siaran',
    'mailer' => 'Pesan',
    'forbid' => 'Larangan',
    'gm' => 'Kelola GM\'s',
    'chat' => 'Chat',
    'watch' => 'Lihat',

    'edit_gm' => 'Meruabah Izin :user\'s',
    'change_permissions' => 'Ubah Izin',
    'gm_permissions' => [
        0 => 'Switch player\'s name and ID',
        1 => 'Turn hidden or invincible',
        2 => 'Switch online status',
        3 => 'Hide online status in wisper',
        4 => 'Teleport to player',
        5 => 'Teleport player to GM',
        6 => 'Teleport by ctrl+clicking map',
        11 => 'Show online number',
        100 => 'Ban player account/character',
        101 => 'Mute player account/character',
        102 => 'Ban trading for a player',
        103 => 'Ban selling for a player',
        104 => 'GM announcement broadcast',
        105 => 'Restart gameserver',
        200 => 'Create Monster',
        206 => 'Activate Monster Creator',
    ],

    'table' => [
        'gm' => [
            'id' => 'ID Akun',
            'name' => 'Username',
            'actions' => 'Aksi'
        ],
        'chat' => [
            'date' => 'Tanggal',
            'user_id' => 'ID/Nama Karakter',
            'channel' => 'Saluran',
            'destination' => 'Tujuan',
            'message' => 'Pesan'
        ]
    ],

    'fields' => [
        'broadcast' => [
            'user' => 'ID Karakter',
            'user_desc' => 'Pengguna yang ingin Anda sampaikan pesannya (Opsional)',
            'channel' => 'Saluran',
            'message' => 'Pesan'
        ],
        'mailer' => [
            'type' => 'Berikan kepada',
            'types' => [
                'list' => 'Daftar Pemain',
                'all' => 'Semua Pemain',
                'online' => 'Pemain yang sedang Online'
            ],
            'roles' => 'ID Karakter',
            'roles_desc' => 'pisahkan dengan (,)',
            'item_id' => 'ID Item',
            'quantity' => 'Jumlah',
            'protection_type' => 'Tipe Proteksi',
            'time_limit' => 'Jangka Waktu',
            'octet' => 'Octet',
            'mask' => 'Mask',
            'gold' => 'Coin',
            'subject' => 'Judul',
            'message' => 'Pesan'
        ],
        'forbid' => [
            'types' => [
                'ban_acc' => 'Ban Akun',
                'ban_char' => 'Ban Karakter',
                'mute_acc' => 'Mute Akun',
                'mute_char' => 'Mute Karakter'
            ],
            'type' => 'Tipe',
            'user_id' => 'ID User',
            'user_id_desc' => 'ID Akun atau Karakter',
            'length' => 'Waktu',
            'length_desc' => 'Dalam detik',
            'reason' => 'Alasan'
        ],
        'gm' => [
            'account_id' => 'ID Akun'
        ],
        'chat' => [
            'path' => 'Log Folder Path',
            'path_desc' => 'Folder tempat file <b>world2.chat</b> berada.',
            'num' => 'Log Num Rows',
            'num_desc' => 'Jumlah baris chat yang akan ditampilkan.'
        ]
    ],
    'submit' => [
        'broadcast' => 'Kirim Pesan',
        'mailer' => 'Kirim Surat',
        'forbid' => 'Submit',
        'gm' => [
            'add' => 'Tambah GM',
            'save' => 'Simpan Izin'
        ]
    ],
    'error' => [
        'gm' => [
            'no_user' => 'Akun :acc tidak ada.',
            'already_gm' => 'Akun :acc sudah menjadi GM.',
        ]
    ],
    'complete' => [
        'broadcast' => 'Pesan Anda berhasil dikirim!',
        'mailer' => [
            'list' => 'Surat telah dikirim kepada Daftar Pemain!',
            'all' => 'Surat telah dikirim kepada Semua Pemain!',
            'online' => 'Surat telah dikirim kepada Pemain yang sedang Online!'
        ],
        'forbid' => [
            'ban' => [
                'account' => 'Akun :user telah di banned untuk :seconds detik!',
                'character' => 'Karakter :user telah di banned untuk :seconds detik!'
            ],
            'mute' => [
                'account' => 'Akun :user telah di mute untuk :seconds detik!',
                'character' => 'Karakter :user telah di mute untuk :seconds detik!'
            ]
        ],
        'gm' => [
            'add' => ':acc sekarang memiliki izin GM!',
            'edit' => ':acc\'s izin telah dirubah!',
            'remove' => ':acc\'s izin sudah dicabut!',
        ]
    ],

    'buttons' => [
        'refresh' => 'Segarkan'
    ],

    'channels' => [
        0 => 'Umum',
        1 => 'Dunia',
        2 => 'Grup',
        3 => 'Guild',
        4 => 'Bisik',
        7 => 'Jual',
        9 => 'System',
        12 => 'Horn'
    ],
    'faction_id' => 'ID Fraksi: ',

];
