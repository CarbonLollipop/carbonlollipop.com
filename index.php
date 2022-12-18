<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>CarbonLollipop</title>
			<link rel="stylesheet" type="text/css" href="/style.css">
			<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
			<script src="main.js" defer></script>
			<meta name="title" content="carbonlollipop.com">
            <meta name="description" content="motd, links, and fun!">
		</head>
		<body>
			<main>
				<div class="row">
					<div class="column">
						<h2 style="text-decoration: underline; cursor: pointer;">Links</h2>
						<nav>
							<br>
							<br>
							<a href="https://www.youtube.com/@CarbonLoli"><img draggable="false" src="/assets/svg/YouTube.svg" height="24" alt="YouTube"></a>
							<br>
							<a href="https://twitter.com/CarbonLollipop"><img draggable="false" src="/assets/svg/Twitter.svg" height="28" alt="Twitter"></a>
							<a href="https://www.reddit.com/u/CarbonLollipop"><img draggable="false" src="/assets/svg/Reddit.svg" height="32" alt="Reddit"></a>
							<br>
							<a href="https://github.com/CarbonLollipop"><img draggable="false" src="/assets/svg/GitHub.svg" height="32" alt="GitHub"></a>
							<a href="https://anilist.co/user/Carbon/"><img draggable="false" src="/assets/svg/AniList.svg" height="32" alt="AniList"></a>
							<a href="https://namemc.com/CarbonLollipop"><img draggable="false" src="/assets/svg/NameMC.svg" height="32" alt="NameMC"></a>
							<br>
							<br>
							<br>
							<img style="cursor: pointer;" id="discord" draggable="false" src="/assets/svg/Discord.svg" height="64" alt="Discord (CarbonLollipop#9880)"><br><small id="hint">click to copy to clipboard</small>
						</nav>
					</div>
					<div class="column">
						<h2>MOTD</h2>
						<div id="thoughts">
							<?php
								$conn = mysqli_connect("qqkcmtcxab", "qqkcmtcxab", "E4KMU8NfjU", "thoughtbook");

								if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
								}

								$query = "SELECT * FROM thoughtbook ORDER BY id DESC LIMIT 1";
								$result = $conn->query($query);
								$row = $result->fetch_assoc();

								echo "<q>" . $row["content"] . "</q><br><strong>" . $row["timestamp"] . "</strong>";

								mysqli_close($conn);						
							?>
						</div>
					</div>
				</div>
				<small id="note"><a href="todos.php">todos</a> <a href='thoughtbook.php'>past motds</a></small>
			</main>
		</body>
	</html>
