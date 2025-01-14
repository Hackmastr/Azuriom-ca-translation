<?php

return [
    'steam' => [
        'id' => 'SteamID',
        'commands' => 'Můžete použít <code>{name}</code> pro hráčovo uživatelské jméno, <code>{steam_id}</code> pro hráčovo SteamID 64 a <code>{steam_id_32}</code> pro hráčovo SteamID 32.',
    ],

    'xbox' => [
        'missing' => 'Tento účet Microsoft nemá profil Xbox.',
    ],

    'minecraft' => [
        'id' => 'UUID',
        'missing' => 'Tento účet Xbox nemá profil Minecraftu.',
        'commands' => 'Můžete použít <code>{name}</code> pro hráčovo uživatelské jméno a <code>{uuid}</code> pro hráčovo UUID',
    ],

    'minecraft_bedrock' => [
        'id' => 'XUID',
        'commands' => 'Můžete použít <code>{name}</code> pro hráčovo uživatelské jméno a <code>{xuid}</code> pro hráčovo XUID',
    ],
];
