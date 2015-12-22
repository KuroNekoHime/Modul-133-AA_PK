<?php
/* products.php
Stores info for products
*/
// Define product information
$products = array(
	1 => array(
		'name' => 'Ousama Games Band 1',
		'price' => 11.90,
		'category' => 'Manga',
		'description' => 'Black sneakers. Good for walking or athletic activity'
	),
	2 => array(
		'name' => 'Fairy Tail Band 1',
		'price' => 11.90,
		'category' => 'Manga',
		'description' => 'Fairy Tail spielt im fiktiven Earthland, eine Welt der Magie. Die Magie, mit der stets Handel betrieben wird, ist ein 
		fester Bestandteil des Lebens der Einwohner. Neben den Händlern gibt es auch noch Menschen, die von der Magie leben, welche man als Magier 
		bezeichnet. Magier gehören verschiedenen Gilden an, in denen sie Aufträge annehmen. In der Stadt Magnolia, die im Königreich Fiore liegt, 
		liegt eine der stärksten Gilden des Landes, Fairy Tail.

		Im Mittelpunkt der Handlung steht unter anderem Lucy Heartfilia, die von Zuhause fortläuft, um Fairy Tail beizutreten. 
		Auf ihren Weg trifft sie den Dragonslayer Natsu Dragonil, der auf der Suche nach seinem vor 7 Jahren verschwundenen Ziehvater, dem Drachen 
		Igneel, ist. Sein Wegbegleiter ist eine fliegende blaue Katze namens Happy. Nachdem Natsu Lucy vor einen Magier, der sich als der Salamander ausgibt, rettet, und sich schliesslich als der wahre Salamander offenbart, folgt Lucy ihm zu seiner Gilde Fairy Tail und tritt dieser bei.

		Sie gründet ein Team mit Natsu und Happy, zu dem jedoch zeitweise auch der Eismagier Gray Fullbuster und die Waffenmagierin Elsa Scarlet 
		gehören. Das Team um Lucy geht zusammen auf Missionen, um Geld zu verdienen, diese werden in der Regel von normalen Menschen aufgegeben 
		(z.B. Monster jagen), trotzdem kommt es oft zur Bekämpfung von illegalen Gilden, sogenannten dunklen Gilden, und anderen Bösewichten.'
	),
	3 => array(
		'name' => 'Macical Girl of the End Band 1',
		'price' => 12.90,
		'category' => 'Manga',
		'description' => 'Kii Kogami ist ein ganz normaler Schüler an einer ganz normalen Highschool. Als er bei einem langweiligen Test aus dem 
		Fenster schaut, beobachtet er eine kleine Gothic Lolita, die seinem Mitschüler auf dem Schulhof den Schädel zertrümmert. Kii kann seinen 
		Augen nicht trauen und glaubt schon zu träumen, doch dann dringt das Mädchen auch in den Klassenraum ein und hinterlässt ein blutiges 
		Gemetzel, das nur er und zwei Mitschüler überleben. Obwohl Kii dem Grusel-Girl den Schädel einschlägt, erwacht sie wieder zum Leben – 
		und auch seine gemetzelten Mitschüler werden zu Zombies, die es auf Kii und seine Freunde abgesehen haben'
	),
	4 => array(
		'name' => 'Naruto Band 1',
		'price' => 12.90,
		'category' => 'Manga',
		'description' => 'NARUTO zählt zu den beliebtesten Manga-Serien der Welt!

		Der Nudelsuppe und nervtötende Streiche liebende Naruto besucht die Ninja-Schule seines Dorfes und ist dadurch nicht gerade beliebt, 
		doch eigentlich will er der beste Ninja werden. Zusammen mit seinen Mitschülern Sasuke und Sakura muss er eine Reihe von Prüfungen bestehen.
		Als er dann endlich Ninja ist, fangen die Schwierigkeiten erst an'
	),
	5 => array(
		'name' => 'One Piece Band 1',
		'price' => 12.90,
		'category' => 'Manga',
		'description' => 'The latest smartphone from Samsung. Features mind reading to know what you\'re thinking before you think it,
			and send this information to advertisers to display relevant content of interest to you! Also new is a 3D holoraphic display with
			motion control, so you can interact with virtual objects in real space.'
	),
	6 => array(
		'name' => 'One Piece Vol. 1',
		'price' => 12.90,
		'category' => 'Anime',
		'description' => 'Ruffy ist ein Pirat welcher schon von anfang an das Ziel hatte Piratenkönig zu werden. '
	),
	7 => array(
		'name' => 'One Piece The Movie',
		'price' => 24.90,
		'category' => 'Anime',
		'description' => 'Wir schreiben die Ära der Abenteurer, der Glücksritter, die sich, zahlreich wie Sand, entlang der Grand Line einschiffen, 
		um ihren Träumen unter dem sternklaren Himmel hinterherzujagen. Die stahlblaue See, dieses zänkische Weib, treibt sie weiter, als ihre 
		Träume reichen, an die entferntesten Strände des Ozeans. Reichtum, Macht, Ehre … all diese Dinge sind erreichbar für den, dem das Glück 
		seine Gunst schenkt – und der das legendäre One Piece findet. Auch die Crew der Flying Lamb sucht nach diesem Schatz. Doch Nami, die 
		Navigatorin, hat noch von einem anderen Schatz gehört. In den Weiten des East Blue soll sich der legendäre Schatz des Goldpiraten Woonan 
		befinden. Piraten aus allen Ecken der Grand Line suchen begierig nach diesem Schatz. Schon bald kommt der ebenso grausame wie geistig 
		langsame Eldorago mit seiner Crew der Flying Lamb in die Quere.'
	),
	),
	7 => array(
		'name' => 'Death Note Vol. 1',
		'price' => 45.50,
		'category' => 'Anime',
		'description' => 'The latest smartphone from Samsung. Features mind reading to know what you\'re thinking before you think it,
			and send this information to advertisers to display relevant content of interest to you! Also new is a 3D holoraphic display with
			motion control, so you can interact with virtual objects in real space.'
	),
	9 => array(
		'name' => 'Black Butler Vol. 1',
		'price' => 45.50,
		'category' => 'Anime',
		'description' => 'The latest smartphone from Samsung. Features mind reading to know what you\'re thinking before you think it,
			and send this information to advertisers to display relevant content of interest to you! Also new is a 3D holoraphic display with
			motion control, so you can interact with virtual objects in real space.'
	),
	10 => array(
		'name' => 'Sword Art online Vol. 1',
		'price' => 45.50,
		'category' => 'Anime',
		'description' => 'The latest smartphone from Samsung. Features mind reading to know what you\'re thinking before you think it,
			and send this information to advertisers to display relevant content of interest to you! Also new is a 3D holoraphic display with
			motion control, so you can interact with virtual objects in real space.'
	),
	11 => array(
		'name' => 'Tokyo Guhl Vol. 1',
		'price' => 30.00,
		'category' => 'Anime',
		'description' => 'The latest smartphone from Samsung. Features mind reading to know what you\'re thinking before you think it,
			and send this information to advertisers to display relevant content of interest to you! Also new is a 3D holoraphic display with
			motion control, so you can interact with virtual objects in real space.'
	),
	12 => array(
		'name' => 'Attack on Titan Vol. 1',
		'price' => 45.00,
		'category' => 'Anime',
		'description' => 'The latest smartphone from Samsung. Features mind reading to know what you\'re thinking before you think it,
			and send this information to advertisers to display relevant content of interest to you! Also new is a 3D holoraphic display with
			motion control, so you can interact with virtual objects in real space.'
	),
	12=> array(
		'name' => 'Akame Ga Kill Vol. 1',
		'price' => 55.50,
		'category' => 'Anime',
		'description' => 'The latest smartphone from Samsung. Features mind reading to know what you\'re thinking before you think it,
			and send this information to advertisers to display relevant content of interest to you! Also new is a 3D holoraphic display with
			motion control, so you can interact with virtual objects in real space.'
	),
	14 => array(
		'name' => 'One Piece Neckless',
		'price' => 25.00,
		'category' => 'Merchandise',
		'description' => 'eine Halskette mit dem Jolly Roger der Strohutpiraten aus One Piece'
	),
	15 => array(
		'name' => 'Attack on Titan - Levi - Figur',
		'price' => 100.00,
		'category' => 'Merchandise',
		'description' => 'Zum Anime ´Attack on Titan´ kommt diese detailreiche PVC Statue von Levi Rivaille im Maßstab 1:8. 
		Sie ist ca. 20 cm gross und wird mit Base in einer Fensterbox geliefert.'
	),
	16 => array(
		'name' => 'Black Butler: Book of Circus - Ciel Phantomhive - Figur',
		'price' => 150.00,
		'category' => 'Merchandise',
		'description' => 'Aus der ´ARTFXJ´ Reihe von Kotobukiya kommt diese aufregende Statue von Ciel Phantomhive aus der Anime-Serie ´Black Butler: Book of Circus´. Die detailreiche PVC Statue im Massstab 1/8 ist ca. 18 cm gross und wird in einer Fensterbox geliefert.

		Die Statue muss in wenigen, einfachen Schritten zusammengesteckt werden.'
	),
);
?>
