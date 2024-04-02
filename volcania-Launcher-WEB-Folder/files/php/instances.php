<?php
$instance['volcania_PVP-faction'] = array_merge($instance['volcania_PVP-faction'], array(
    "loadder" => array(
        "minecraft_version" => "1.19.2",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Volcania",
        "ip" => "play.volcania.fr",
        "port" => 25565
    )
));

$instance['volcania_Serveur_modee'] = array_merge($instance['volcania_PVP-faction'], array(
    "loadder" => array(
        "minecraft_version" => "1.19.2",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Volcania",
        "ip" => "play.volcania.fr",
        "port" => 25565
    )
));
?>

