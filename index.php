

<!DOCTYPE html>
<html lang="en">


<?php
include('uzdevumi/datubaze.php');
$iconSelect = "SELECT * FROM `head_right`";
$iconResult = $conn->query($iconSelect);
?>


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no,
	 viewport-fit=cover" />

	<link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles/style.css" type="text/css">
	<link rel="stylesheet" href="fonts/css/all.css" type="text/css">
    <link rel="stylesheet" href="styles/media.css" type="text/css">

	<title>ILONA</title>

</head>
<body>


	<div class="header">
		<div class="logo">
				<h1>Ilona Braima</h1>
		</div>
        <div class="navbar">
            <div class="dropdown">
                <button class="dropbtn">My life projects<span class="fa fa-caret-down"></span></button>
                <div class="dropdown-content">
                    <a href="pages/date.php">Проект: Мои 100 свиданий</a>
                    <a href="pages/children.php">Проект: Дети</a>
                    <a href="pages/QA.php">Проект: QA/Software tester</a>
                    <a href="pages/honest_relationship.html">Проект: Честные отношения</a>
                    <a href="pages/mybodylove.php">Проект: Моё тело</a>
                </div>
            </div>
        </div>
		<div class="menu">
			<div class="menu-item">
				<a class="menu-link" href="pages/date.php">Проект: Мои 100 свиданий</a>
			</div>
			<div class="menu-item">
				<a class="menu-link" href="pages/children.php">Проект: Дети</a>
			</div>
			<div class="menu-item">
				<a class="menu-link" href="pages/QA.php">Проект: QA/Software tester</a>
			</div>
			<div class="menu-item">
            				<a class="menu-link" href="pages/honest_relationship.html">Проект: Честные отношения</a>
            			</div>
			<div class="menu-item">
				<a class="menu-link" href="pages/mybodylove.php">Проект: Моё тело</a>
			</div>
        </div>
    </div>

	<div class="head-r">
        <div class="flex just-center">
            <?php
            while ($icon = $iconResult->fetch_assoc()) {
            echo  '<a href="' . $icon['adres'] . '"class="' . $icon['fonts'] . '"title="' . $icon['title'] . '"></a>';
            }
            ?>
        </div>
	</div>
    <div class="container">
		<div class="col1">
				<h1>Моя жизнь пишется здесь…</h1>
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
				<img src="images/ja8.jpg" width="300" height="auto" alt="Иллюстрация" align="left">
				<p>
					Это история о нас, о семье, о радости, о любви, жизни, грёзах и немножко о слёзах.
					Это история о том, как важно научиться жить не вопреки, а только во благо себе любимым.
				</p>
				<p>
					Моя <b>личная история</b>, как блогера, началась давно, в 2010 году и ведёт свой отсчет
					оттуда, где на свет решил появиться ребёнок, ныне уже подросток, Арсений Саныч.
				</p>
				<img src="images/mi.jpg" width="300" height="auto" alt="Иллюстрация" align="right">
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
				<img src="images/mi6.jpg" width="300" height="auto" alt="Иллюстрация" align="left">
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
            <p>
                На этом сайте я хочу обозначить все грабли, на которые наступила, возможно мои шишки,
                 если не помогут, то хоть посмешат. Свою жизнь, благодаря чётким формулировкам мужа,
                 смогла поделить на Проекты. Работая редактором и будучи блогером я придумала
                 и воплотила в жизнь их огромное количество.
            </p>
            <br/>
            <p>
                Проект <span class="fas fa-baby"></span> "Дети" запустила я в году 2007, когда уже все вокруг начали бить тревогу,
                как это женщина - 25 лет, будучи глубоко замужем и без детей. Непорядок. Давление не прошло зря,
                девочка созрела и в этом проекте начала разглядывать глобальный смысл и интерес подогревался.
            </p>
            <p>Всё оказалось намного ярче и интереснее.</p>
            <br/>
            <a href="pages/children.php"><button class="buttonblue" type="button">Проект: Дети</button></a>
            <br/>
                <span class="fas slider-button_skyblue fa-shoe-prints"></span>
                <span class="fas slider-button_skyblue fa-shoe-prints"></span>
                <span class="fas slider-button_skyblue fa-shoe-prints"></span>
                <span class="fas slider-button_skyblue fa-shoe-prints"></span>
                <span class="fas slider-button_skyblue fa-shoe-prints"></span>
                <span class="fas slider-button_skyblue fa-shoe-prints"></span>
            <br/>
            <p>
                К сожалению, мой первый брак распался. От глобальной ошибки он перерос в
                невероятной значимости опыт, который привёл меня в необыкновенный и счастливый
                второй брак. А между этими событиями несколько лет свободы и поиска. Именно это
                время описано в проекте, где я постаралась описать большинство своих свиданий
                или остатки впечатлений о них.
            </p>
            <br/>
            <a href="pages/date.php"><button class="buttonorange" type="button">Проект: 100 моих свиданий</button></a>
            <br/>
            <p>
                Когда ищешь, обязательно найдёшь и мой марафон завершился долго и счастливо,
                пока не умерли, но есть надежда, что в один день. Наша история, как минимум
                весёлая, как максимум поучительная, и на все 100 - честная.
            </p>
            <a href="pages/honest_relationship.html">
                <button class="buttongrey" type="button">Проект: Честные отношения</button>
            </a>
            <br/>
            <p>
               Все больше или меньше озабочены своим телом - обьёмом, весом, ростом, размером ног, груди,
                динной волос и уничтожением волосяного покрова и ещё множество мелочей и совсем не мелочей.
                Об этом глобальном проекте в одноимённом рассказе.
            </p>
            <br/>
            <a href="pages/honest_relationship.html">
                <button class="buttonsea" type="button">Проект: Моё тело</button>
            </a>
            <br/>
        </div>

        <div class="col">
            <div class="item">
                <img src="images/carousel4.jpg" alt="Иллюстрация"/>
                <div class="item_desc">
                    <div class="item_heading">И чтоб могилки рядом</div>
                    <div class="item_text"> За последние годы я была на огромном количестве свиданий. Они были разными -
                        планированными и спонтанными. Все чем-то отличались своими плюсами и минусами,
                        но чаще одноразовыми. Думаю, что пора начать вести что-то вроде дневника.
                        <a href="pages/date.php">Проект: Мои 100 свиданий</a></div>
                    <div class="item_tags">
                        <div class="item_tag">#мои100свиданий</div>
                        <div class="item_tag">#отношения</div>
                        <div class="item_tag">#секс</div>
                    </div>
                </div>
            </div>
             <div class="item">
                        <img src="images/ja1.jpg" alt="Иллюстрация"/>
                        <div class="item_desc">
                            <div class="item_heading">Портфолио QA тестировщика</div>
                            <div class="item_text"> Cфера IT безгранична и интересна, поэтому после изучения
                                профессиональных направлений в IT выбрала для себя тестирование ПО. Долго изучала
                                тему самостоятельно, потом прошла курсы. Сейчас погрузилась для детального изучения
                                темы в WEB разработку. Всегда готова творчески и с азартом погрузиться в дело.
                                <a href="pages/QA.php">Проект: QA/Software tester</a>
                            </div>
                            <div class="item_tags">
                                <div class="item_tag">#IT</div>
                                <div class="item_tag">#QA</div>
                                <div class="item_tag">#Тестирование</div>
                            </div>
                        </div>
              </div>

              <div class="item">
                          <img src="images/3.jpg" alt="Иллюстрация"/>
                          <div class="item_desc">
                              <div class="item_heading">Первая встреча: ЕЁ версия</div>
                              <div class="item_text"> Это случилось тогда, когда уже подошёл к концу
                                  мой личный марафон свиданий. Перед тем, как удалиться со всех платформ
                                  для знакомств, я ещё раз пробежалась по списку, предложенному мне
                                  программой и взгляд мой привлёк молодой человек. «Ну, такой не обратит
                                  на меня внимание, сказала мне моя самооценка» и я пошла дальше. Он лайкнул.
                                  Блин. Я так растерялась.
                                  <a href="pages/honest_relationship.html">Проект: Честные отношения</a>
                              </div>
                              <div class="item_tags">
                                  <div class="item_tag">#мои100свиданий</div>
                                  <div class="item_tag">#отношения</div>
                                  <div class="item_tag">#честные отношения</div>
                              </div>
                          </div>
              </div>
        </div>
        <div class="col">
                <div class="item">
                    <img src="images/carousel2.jpg" alt="Иллюстрация"/>
                    <div class="item_desc">
                        <div class="item_heading">Знакомьтесь: СЕ И СЁ</div>
                        <div class="item_text">
                                Насколько бы хорошо я не разбиралась в материнстве, насколько хорошо не понимала бы своих
                                детей, всегда найдутся грани и стороны, где я теряюсь, поэтому никогда не может быть
                                много информации о том, как понимать ребенка и себя, как мамы.
                                <a href="pages/children.php">Проект: Дети</a>
                        </div>
                        <div class="item_tags">
                            <div class="item_tag">#воспитание</div>
                            <div class="item_tag">#дети</div>
                            <div class="item_tag">#дневникразвития</div>
                        </div>
                    </div>
            </div>
            <div class="item"><img src="images/2012.jpg" alt="Иллюстрация"/>
                <div class="item_desc">
                    <div class="item_heading">Я вся такая несуразная</div>
                    <div class="item_text"> На этой страничке я расскажу вам, как скачет мой вес +-20 кг,
                        как растёт моя нога 43 размера (раз в пять лет
                        +1 размер), как я занимаюсь спортом, хожу по врачам - болею и лечусь.
                        Расскажу обо всём, что касается моего тела.
                        <a href="pages/mybodylove.php">Проект: Моё тело</a>
                    </div>
                    <div class="item_tags">
                        <div class="item_tag">#вес</div>
                        <div class="item_tag">#здоровье</div>
                        <div class="item_tag">#рост</div>
                    </div>
                </div>
            </div>
            <div class="item">
                        <img src="images/2.jpg" alt="Иллюстрация"/>
                        <div class="item_desc">
                            <div class="item_heading">Первая встреча: ЕГО история </div>
                            <div class="item_text"> Вечер субботы - время спорта. Свайп влево,
                            свайп вправо. Не особо смотря на анкеты, просто раскидал лайки/дизлайки
                            всем, кого баду в этот раз предложил. Можно отдыхать и заниматься своими
                             делами. <a href="pages/honest_relationship.html">Проект: Честные отношения</a>
                            </div>
                            <div class="item_tags">
                                <div class="item_tag">#Честные отношения</div>
                                <div class="item_tag">#отношения</div>
                                <div class="item_tag">#секс</div>
                            </div>
                        </div>
                    </div>

        </div>
    </div>
    <footer class="footer">
        <p>© 2021 Ilona Braim, по всем вопросам пишите по адресу anoli2004@inbox.lv</p>
    </footer>
</body>
</html>

