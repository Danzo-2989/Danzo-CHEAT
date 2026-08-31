<?php
header('Content-Type: application/json');
echo json_encode([
    "brand_name" => "CRACKED by DANZO",
    "brand_subtitle" => "CRACK",
    "game_name" => "FreeFire",
    "game_version" => "2.130.1",
    "asset_destination" => "/storage/assets/freefire",
    "feature_names" => ["neck", "high", "high+neck", "precision", "skull"],
    "feature_slogans" => [
        "neck" => "Legit neck HS.",
        "high" => "HS above the head.",
        "high+neck" => "High HS with neck.",
        "precision" => "HS that prevents aim from passing.",
        "skull" => "HS below the neck."
    ],
    "highlighter" => [
        "logo_pc" => ["title" => "Logo Pc", "description" => "Sleek PC Free Fire logo with a bold, modern..."],
        "aim_drag" => ["title" => "Aim Drag + Athena", "description" => "Aim Drag + Athena"],
        "reset_guest" => ["title" => "Reset Guest", "description" => "Quickly resets guest account data..."],
        "aim_chest" => ["title" => "Aim Chest", "description" => "Precise targeting assistance focused..."],
        "skull" => ["title" => "Skull", "description" => "Max sensitivity, fast aim..."]
    ],
    "tiers" => [
        "neck" => "high",
        "skull" => "high",
        "high+neck" => "high",
        "precision" => "high",
        "high" => "high"
    ],
    "game_logo_url" => "https://syahrulnewera.my.id/proxy/api/ui_config.php?target=normal&type=game_logo",
    "brand_logo_url" => "https://syahrulnewera.my.id/proxy/api/ui_config.php?target=normal&type=brand_logo"
]);
?>