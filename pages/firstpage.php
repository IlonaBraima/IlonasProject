

<!DOCTYPE html>
<html lang="en">

    <?php
        include('../uzdevumi/datubaze.php');
        $upesSelect = "SELECT * FROM latvijasupes1";
        $upesResult = $conn->query($upesSelect);
        $iconSelect = "SELECT * FROM head_right";
        $iconResult = $conn->query($iconSelect);
    ?>

<head>
	<meta
			charset="utf-8">
	<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0 user-scalable=no, viewport-fit=cover"/>
	<link
			href="https://fonts.googleapis.com/css2?family=Roboto@1&display=swap"
			rel="stylesheet">
	<link
			href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap"
			rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../styles/style.css" type="text/css">

	<title>ILONA</title>

</head>
<body>
<div>


	<div class="header">
		<div class="logo">
				<h1>Ilona Braima</h1>
		</div>

		<div class="menu">
			<div class="menu-item">
				<a class="menu-link"
				   href="uzdevumi/maniuzdevumi.html">
					Mājas uzdevums
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link"
				   href="date.html">
					Проект: Мои 100 свиданий
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link"
				   href="2index.html">
					Проект: Дети
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link"
				   href="/QA.html">
					Проект: QA/Software tester
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link"
				   href="mybodylove.html">
					Проект: Моё тело
				</a>
			</div>
		</div>
	</div>

	<div class=head-r>
        <div class="flex just-center">

            <?php
            while ($icon = $iconResult->fetch_assoc()) {
            echo  '<a class="icon" title="' . $icon['title'] . '"href="' . $icon['adres'] . '">
            <img src="../images/' . $icon['icon'] . '"></a>';
            }
            ?>
        </div>
	</div>

	<div class="boxpage">
		<div class="boxfirstpage">
		<div class=colfirst>
				<h1>
					Моя жизнь пишется здесь…
				</h1>
				<p>Можно растить на лоджии помидоры и огурцы, но вырастить голубёнка, можно сходить на
					встречу и выйти замуж, в жизни возможно всё, самое важное стремиться
					<b>жить здесь и сейчас</b> - именно этому я и учусь, именно поэтому важно помнить
					о лучшем, чтобы создавать историю в настоящем.
				</p>

			<div class="blockquote-3">
				<p>
					Всё, что со мной происходит - мой выбор!
					<cite>Ilona Braim</cite>
				</p>
			</div>
			<p>
				<img src="../images/ja8.jpg" width="300" height="auto" alt="Иллюстрация" align="left">
			</p>
				<p>
					Это история о нас, о семье, о радости, о любви, жизни, грёзах и немножко о слёзах.
					Это история о том, как важно научиться жить не вопреки, а только во благо себе любимым.
				</p>
				<p>
					Моя <b>личная история</b>, как блогера, началась давно, в 2010 году и ведёт свой отсчет
					оттуда, где на свет решил появиться ребёнок, ныне уже подросток, Арсений Саныч.
				</p>
			<p>
				<img src="../images/mi.jpg" width="300" height="auto" alt="Иллюстрация" align="right">
			</p>
				<p>
					За это время произошло многое – встречи, развод, переезды, знакомства с огромным
					количеством людей, потери друзей, обрыв связи с родственниками, болезни, исполнение
					всех мечт, младший сынок – Семён, невероятный муж – Антон, как вишенка на торте).
				</p>
				<p>
					Каждый день мы делаем выбор. Выбор свой или навязанный.
				</p>
				<p>
					Очень многие хотят пожить вместо того, кто на их взгляд живёт лучше, хотят
					использовать другого в качестве эксперимента и тут важно понять: <b>а вам это надо?</b>
				</p>
				<p>
					Каждый день мы делаем выбор - <b>свой выбор!</b> Берём за него ответсвенность и получаем
					удовольствие от результата.
				</p>
			<p>
				<img src="../images/mi6.jpg" width="300" height="auto" alt="Иллюстрация" align="left">
			</p>
				<p>
					<b>МОЖНО</b> просто без условий, без предубеждений.
				</p>
				<p>
					<b>МОЖНО</b> только так как хочется, как УДОБНО только вам.
				</p>
				<p>
					<b>МОЖНО</b> расписаться без свадьбы, МОЖНО без колец, если не любите украшения,
					<b>МОЖНО</b> в кроссовках, если не нравятся каблуки, МОЖНО в шортах и сандалях.
				</p>
				<p>
					<b>МОЖНО без букета.</b>
				</p>
				<p>
					<b>МОЖНО</b> позволить себе всё, что угодно.
				</p>
			<div class="blockquote-3">
				<p>
					Живите для себя и будьте счастливы!!!
					<cite>Ilona Braim</cite>
				</p>
			</div>
			</div>

    <div class="colfirst">
        <div class="item">
            <img src="../images/carousel4.jpg" alt="Иллюстрация"/>
            <div class="item_desc">
                <div class="item_heading">И чтоб могилки рядом</div>
                <div class="item_text"> За последние годы я была на огромном количестве свиданий. Они были разными -
                    планированными и спонтанными. Все чем-то отличались своими плюсами и минусами,
                    но чаще одноразовыми. Думаю, что пора начать вести что-то вроде дневника.</div>
                <div class="item_tags">
                    <div class="item_tag">#мои100свиданий</div>
                    <div class="item_tag">#отношения</div>
                    <div class="item_tag">#секс</div>
                </div>
            </div>
        </div>

		</div>

	</div>




</div>
</body>
</html>