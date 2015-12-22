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
		'description' => 'Eines Tages erhalten Nobuaki und seine Klassenkameraden auf ihren Handys eine Nachricht mit dem Absender »Ousama Game«, 
		darin enthalten ein Auftrag, der innerhalb von 24 Stunden erfüllt werden muss. Ansonsten droht eine Strafe...
		Anfangs tun die Freunde alles noch als schlechten Scherz ab, doch nach dem ersten Todesfall wird Nobuaki schnell klar: 
		Das Spiel ist bitterer Ernst'
		
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
		'description' => 'Schon als kleiner Junge war Monkey D. Ruffy begeistert von Shanks und seiner Piratenbande und wollte deshalb auch
		Pirat werden. Als Ruffy versehentlich eine Teufelsfrucht isst bekommt er durch diese übermenschliche Kräfte und wird zum Gummimenschen, 
		verliert dafür aber die Fähigkeit zu schwimmen. Dies hält ihn allerdings nicht davon ab sich auf den Weg zu machen um 
		Piratenkönig zu werden. '
		
	),
	6 => array(
		'name' => 'One Piece Vol. 1',
		'price' => 70.00,
		'category' => 'Anime',
		'description' => 'Schon als kleiner Junge war Monkey D. Ruffy begeistert von Shanks und seiner Piratenbande und wollte deshalb auch
		Pirat werden. Als Ruffy versehentlich eine Teufelsfrucht isst bekommt er durch diese übermenschliche Kräfte und wird zum Gummimenschen, 
		verliert dafür aber die Fähigkeit zu schwimmen. Dies hält ihn allerdings nicht davon ab sich auf den Weg zu machen um 
		Piratenkönig zu werden. '
		
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
	8 => array(
		'name' => 'Death Note Vol. 1',
		'price' => 45.50,
		'category' => 'Anime',
		'description' => 'Der Schüler Light Yagami findet ein geheimisvolles Notizbuch, dass Death Note. Mit diesem ist er in der Lage jeden Menschen
		dessen Gesicht und Namen er kennt zu töten. Er fängt an Verbrecher durch Herzversagen auszulöschen, doch schon bald wird die Polizei auf diese 
		Tode aufmerksam und ein berümter Dedektiv, welcher sich L nennt, nimmt sich diesen Verbrechen an. '
		
	),
	9 => array(
		'name' => 'Black Butler Vol. 1',
		'price' => 45.50,
		'category' => 'Anime',
		'description' => 'Ciel Phantomhive ist der ebenso junge wie reiche Erbe des Phantomhive-Imperiums und der "Wachhund" Ihrer Majestät, der 
		Königin von England. Sein Butler Sebastian steht ihm treu zur Seite, nicht nur indem er Tee kocht und das Anwesen in Schuss hält, vor 
		allem erweist er sich als überaus talentierter Bodyguard. Als Butler der Phantomhives sollte man so etwas eben können. Und Sebastian ist 
		im wahrsten Sinne des Wortes ein "teuflisch guter Butler"'
		
	),
	10 => array(
		'name' => 'Sword Art online Vol. 1',
		'price' => 45.50,
		'category' => 'Anime',
		'description' => 'Schüler Kazuto Kirigiya durfte unter seinem Pseudonym „Kirito“ bereits die Beta- Version des Rollenspiels Sword Art Online 
		testen. Wie viele andere kann er es kaum erwarten, dass das Spiel nun endlich online geht. Das Besondere daran: Dank eines sogenannten 
		NerveGears kann man vollständig in die mittelalterliche virtuelle Welt namens Aincrad eintauchen. Als einer von 10.000 Spielern streift 
		Kirito kurz nach dem Start begeistert durch die Welt von Sword Art Online – bis er feststellt, dass er sich nicht mehr ausloggen kann. 
		Was zunächst aussieht wie ein Bug, entpuppt sich als pure Absicht: Der Entwickler des Spiels verkündet, dass keiner diese virtuelle Welt 
		verlassen kann, bevor nicht die Endgegner aller 100 Ebenen besiegt sind. Und: Wer im Spiel stirbt, verliert auch in der Realität sein Leben!'
		
	),
	11 => array(
		'name' => 'Tokyo Ghoul Vol. 1',
		'price' => 30.00,
		'category' => 'Anime',
		'description' => 'Mitten in Japans Hauptstadt Tokyo leben sie: Ghule, die sich von Menschen ernähren. Das muss auch der 18-jährige 
		Bücherwurm Ken am eigenen Leib erfahren, als ihm sein Schwarm Liz bei einem Date die köstlichen Innereien aus dem Leib reissen will. 
		Der Schwerverletzte erwacht kurz darauf im Krankenhaus - und erfährt, dass ihm die Organe seiner Angreiferin transplantiert wurden. 
		Schnell stellt er fest, dass mit ihm irgendetwas nicht stimmt: Normales Essen riecht und schmeckt verdorben, nichts, was er zu sich nimmt, 
		kann er verdauen. Dafür bekommt er bei Hunger ein rotes Auge und entwickelt, sehr zu seinem Verdruss, Appetit auf Menschenfleisch - selbst 
		auf seinen besten Freund Hide. Ob Ken will oder nicht, seine Entwicklung zum Ghul schreitet unaufhaltsam voran ....'
		
	),
	12 => array(
		'name' => 'Attack on Titan Vol. 1',
		'price' => 45.00,
		'category' => 'Anime',
		'description' => 'In „Attack on Titan“ wurde die Menschheit von einer riesigen Bedrohung in die Enge gedrängt und lebt nun eingeschlossen 
		von drei großen Mauern in einem verhältnismäßig kleinen Königreich. Riesig im wahrsten Sinne des Wortes übrigens, denn bei besagter 
		Bedrohung handelt es sich um Titanen, die in der Regel 3 bis 15 Meter groß werden. Seit über 100 Jahren lebten die Menschen in Frieden, 
		die Titanen wurden erfolgreich von der Mauer ferngehalten. Bis eines Tages....'
		
	),
	12=> array(
		'name' => 'Akame Ga Kill Vol. 1',
		'price' => 55.50,
		'category' => 'Anime',
		'description' => 'Tatsumi ist ein Kämpfer, der sich auf Wanderschaft begibt, um Geld für sein, von Armut gebeuteltes Dorf zu verdienen. 
		Nachdem er von einer geheimnisvollen Frau überfallen und ausgeraubt wurde, lösen sich seine Träume schnell in Rauch auf. Er kommt bei 
		der noblen Aristokratin Aria unter und trifft kurz darauf auf eine Gruppe von Assassinen, die sich Night Raid nennt. Als Tatsumi eine 
		schreckliche Entdeckung macht, schliesst er sich dieser Gruppe und ihrem blutigen Kampf gegen das Imperium an.'
		
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
