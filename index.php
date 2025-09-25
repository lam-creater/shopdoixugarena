<?php
include('session.php');

$validGames = [
    'FreeFire',
    'LienQuanMobile',
    'PUBGMobile',
    'Valorant',
    'FCOnline',
    'Roblox',
    'LMHT',
    'TocChien',
    'FCOnlineM'
];

if (isset($_GET['game']) && in_array($_GET['game'], $validGames)) {
    $game = $_GET['game'];
} else {
    $game = 'FreeFire'; 
}

include "$game.php";
exit;
?>
