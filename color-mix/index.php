<?php require 'index_controller.php' ?>

<!doctype html>
<html lang='en'>

<head>

	<title>Mixing Primary Colors</title>
	<meta charset='utf-8'>
	<style>
		body {
			width: 50em;
			margin: 3em auto 0 auto;
			font-family: Calibri, sans-serif;
		}

		h1 {
			font-size: 3em;
			margin: 0 0 1em 0;
		}

		section {
			border-bottom: .1em solid #9a9fa1;
		}

		section div:first-child {
			width: 50%;
			float: left;
			display: inline-block;
			padding: 0 2.5em 0 0;
			margin: -1em 0 0 0;
			vertical-align: top;
		}

		section div:nth-of-type(2) {
			width: 50%;
			display: inline;
			vertical-align: text-top;
			padding: 0 0 0 0;
			margin: 0 0 0em 0;
		}

		section div:nth-of-type(2) p:first-of-type {
			margin: -.3em 0 0 0;
			font-size: 1.5em;
		}

		article {
			width: 100%;
			display: grid;
			grid-template-columns: repeat(5, 20%);
			grid-template-rows: repeat(20, auto);
			grid-auto-flow: column;
			grid-row-start: 1;
			grid-column-start: 1;
			margin-top: 1em;
		}

		article p {
			padding: 0 .75em 0 0;
			margin: -1em 0 .5em 0;
		}

		article h3 {
			padding: 0;
		}
	</style>

</head>

<body>
	<header>
		<h1>Mixing Primary Colors</h1>
	</header>

	<section>
		<div>
			<h2>Mechanics:</h2>
			<ul>
				<li>Using primary colors of red, blue, or yellow, make two separate and random selections from the
					three colors.</li>
				<li>Based on the two colors chosen, what secondary color would result, if mixed?</li>
				<li>Repeat the two above steps 50 times.</li>
				<li>Out of the 50 iterations, determine which secondary color was mixed the most.</li>
				<li>If the two random primary colors selected are the same, they do not have a resulting secondary
					color and are not considered in the ending tally.</li>
			</ul>
		</div>
		<div>
			<h2>Results:</h2>

			<p>The secondary color that was mixed the most is <?php echo $mostCounted ?>
			</p>

			<?php foreach ($secondaryColorArray as $name => $count) { ?>
			<p><?php echo $name . ' was mixed ' . $count . ' times.'; ?>
				<?php } ?>
			</p>
			<p><?php echo 'Matching colors were selected ' . $matchingCounts . ' times.'; ?>
		</div>
	</section>

	<article>
		<?php foreach ($results as $key => $result) { ?>
		<h3><?php echo('Selection #' . $key . ':'); ?>
		</h3>
		<p><?php echo 'Mixing ' . $result['primary1'] . ' and ' . $result['primary2'] . ' makes '.$result['resultingColor']; ?>
		</p>
		<?php } ?>
	</article>

</body>

</html>