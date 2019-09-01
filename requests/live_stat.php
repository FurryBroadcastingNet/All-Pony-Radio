<?php
/* ============================================================================= */
// EDIT BELOW
/* ============================================================================= */
$pageTitle = "Now Playing";

$nextLimit		= 3;				// How many upcoming tracks to display?
$shufleUpcoming = True;				// Don't show the correct order of upcoming tracks

$resLimit		= 5;				// How many history tracks to display?

/* ============================================================================= */
// END EDIT
/* ============================================================================= */

require_once('serv_inc.php');
require_once('header.php');
	
function convertTime($seconds) {
	$sec = $seconds;
    // Time conversion
    $hours = intval(intval($sec) / 3600);
    $padHours = True;
    $hms = ($padHours)
        ? str_pad($hours, 2, "0", STR_PAD_LEFT). ':'
        : $hours. ':';
    $minutes = intval(($sec / 60) % 60);
    $hms .= str_pad($minutes, 2, "0", STR_PAD_LEFT). ':';
    $seconds = intval($sec % 60);
    $hms .= str_pad($seconds, 2, "0", STR_PAD_LEFT);

	return $hms;
}

?>

<table class="main_table" border="0" cellspacing="0" cellpadding="5">

<?php

db_conn();
$shuffleQuery = null;

If ($shufleUpcoming == True) {
	$shuffleQuery = " ORDER BY RAND()";
}

$nextquery = "SELECT songs.ID, songs.artist, queuelist.songID FROM songs, queuelist WHERE songs.song_type=0 AND songs.ID=queuelist.songID" . $shuffleQuery . " LIMIT 0," . $nextLimit;
$resultx = mysql_query($nextquery);

if (!$resultx) {
	echo mysql_error();
	exit;
}

if (mysql_num_rows($resultx) > 0) {
	
	// If there tracks in the playlist, we show them
	$inc = 0;

	echo " <tr>" . "\n";
	echo "  <td class=\"header_live\">SOON ON RADIODJ</td>\n";
	echo " </tr>" . "\n";

	echo " <tr>" . "\n";
	echo " <td>";

	while($rowx = mysql_fetch_array($resultx)) {
		echo htmlspecialchars($rowx['artist'], ENT_QUOTES);
		
		//if the current track is not the last, we put a separator
		if ($inc < (mysql_num_rows($resultx) -1)) {
			echo ", ";
		}
		
		$inc += 1;
	}

	echo "</td>" . "\n";
	echo " </tr>" . "\n";
	
} 
/* 
//Uncomment this if you would like to show a message when no track is prepared.
else {

	echo " <tr>" . "\n";
	echo "  <td class=\"header_live\">SOON ON RADIODJ</td>\n";
	echo " </tr>" . "\n";
	
	echo " <tr>" . "\n";
	echo "  <td>Nothing comming...</td>\n";
	echo " </tr>" . "\n";
	
}
*/

// ======================== //

$query = "SELECT `ID`, `date_played`, `artist`, `title`, `duration` FROM `history` WHERE `song_type` = 0 ORDER BY `date_played` DESC LIMIT 0," . ($resLimit+1);

$result = mysql_query($query);

if (!$result) {
	echo mysql_error();
	exit;
}

if (mysql_num_rows($result) == 0) {
	exit;
}

$inc = 0;

while($row = mysql_fetch_assoc($result)) {
	if ($inc == 0) {
		echo " <tr>" . "\n";
		echo "   <td class=\"header_live\">NOW PLAYING</td>\n";
		echo " </tr>" . "\n";

		echo " <tr>" . "\n";
		echo "  <td class=\"playing_track\"><strong>" . htmlspecialchars($row['artist'], ENT_QUOTES) . " - " . htmlspecialchars($row['title'], ENT_QUOTES) . " [" . convertTime($row['duration']) . "]</strong></td>\n";
		echo " </tr>" . "\n";

		if ($resLimit > 0) {
			echo " <tr>" . "\n";
			echo "  <td class=\"header_live\">RECENTLY PLAYED SONGS</td>\n";
			echo " </tr>" . "\n";
		}

	} else {

		if ($resLimit > 0) {
			echo " <tr>" . "\n";
			echo "  <td>" . date('H:i:s', strtotime($row['date_played'])) . " - " . htmlspecialchars($row['artist'], ENT_QUOTES) . " - " . htmlspecialchars($row['title'], ENT_QUOTES) . " [" . convertTime($row['duration']) . "]</td>\n";
			echo " </tr>" . "\n";
		}
	}
	$inc += 1;
}

@mysql_free_result($result);
db_close($opened_db);

?>
</table>
<?php require_once('footer.php'); ?>

