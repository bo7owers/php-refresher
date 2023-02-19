<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>php test</title>
	<style>
		body {
			display: flex;
			align-items: center;
			justify-content: center;
			flex-flow: column wrap;
		}

		.game {
			color: #369;
		}

		.heaven {
			color: #ff1212;
		}

		.spirits {
			color: #657904;
		}
	</style>
</head>

<body>
	<?php
	$name = "The shadow of the wind";
	$read = true;

	if ($read) {
		$message = "You have read  $name";
	} else {
		$message = "You haven't read $name";
	}

	?>
	<h1>
		<?= $message; ?>
	</h1>

	<?php
	$books = ["The Angel's Game", "The Prisoner of Heaven", "The Labirith of the Spirits"];
	?>
	<h2>Books I've read: </h2>
	<ul>
		<!--
Old way of doing loops
<?php foreach ($books as $book) {
	echo "<li>{$book}</li>";
}

?>
-->
		<!-- New way of doing loops -->
		<?php foreach ($books as $book): ?>
			<li class="<?php echo strtolower($book); ?>"> <?= $book; ?></li>

			<!-- Calling independent items from array -->
		<?php endforeach; ?>
	</ul>
	<p>
		<?= $books[0] ?>
	</p>

	<!-- Associative Arrays -->
	<?php

	$movies = [
		[
			'title' => 'Birdman',
			'director' => 'Iñárritu',
			'year' => 2014
		],
		[
			'title' => 'Glass Onion',
			'director' => 'Rian Johnson',
			'year' => 2022
		],
		[
			'title' => 'The Revenant',
			'director' => 'Iñárritu',
			'year' => 2015
		]
	];

	function filterByAuthor($movies, $director)
	{
		$moviesArr = [];
		foreach ($movies as $movie) {
			if ($movie['director'] === 'Iñárritu') {
				$moviesArr[] = $movie;
			}
		}
		return $moviesArr;
	}
	?>

	<h2>Movies I've watched:</h2>

	<ul>
		<?php foreach ($movies as $movie): ?>
			<li>
				<?= $movie['title']; ?>
			</li>
		<?php endforeach; ?>
	</ul>

	<h3>Only movies by Iñárritu:</h3>
	<ul>
		<?php foreach ($movies as $movie): ?>
			<?php if ($movie['director'] === 'Iñárritu'): ?>
				<li>
					<?= $movie['title']; ?>
				</li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>
	<h3>Using a function</h3>
	<ul>
		<?php foreach (filterByAuthor($movies, 'Iñárritu') as $movie): ?>
			<li>
				<?= $movie['title']; ?>
			</li>
		<?php endforeach; ?>

	</ul>

	<h3>Lambda / Anonymous functions </h3>
	<?php
	function filter($items, $fn)
	{
		$filteredItems = [];
		foreach ($items as $item) {
			if ($fn($item)) {
				$filteredItems[] = $item;

			}
		}
		return $filteredItems;
	}
	;

	$filteredMovies = array_filter($movies, function ($movie) {
		return $movie['year'] >= 2015;
	});
	?>
	<ul>
		<?php foreach ($filteredMovies as $movie): ?>
			<li>
				<?= $movie['title']; ?> by
				<?= $movie['director']; ?>
			</li>
		<?php endforeach; ?>
	</ul>

</body>

</html>