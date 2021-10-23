<!DOCTYPE html>
<html lang="en">

    <?php
        include('../uzdevumi/datubaze.php');
        $iconSelect = "SELECT * FROM head_right";
        $iconResult = $conn->query($iconSelect);
    ?>

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/date.css" type="text/css">
    <title>MyDate</title>
</head>
<body>



    <div class="header">
            <div class="logo">
                <h1>Ilona Braima</h1>
            </div>
        <div class="menu">
            <div class="menu-item"><a class="menu-link" href="../index.php">На главную</a></div>
            <div class="menu-item"><a class="menu-link" href="mybodylove.php">Проект: МОЁ ТЕЛО</a></div>
            <div class="menu-item"><a class="menu-link" href="children.php">Проект: ДЕТИ</a></div>
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
    <div class=head-l>
        <div><a class="linker" href="../index.php">HOME</a></div>
    </div>
    <div>
        <div class="boxpage">
            <div class="fontdate">
                    <p>
                        За последние годы я была на огромном количестве свиданий. Они были разными -
                        планированными и спонтанными. Все чем-то отличались своими плюсами и минусами,
                        но чаще одноразовыми. Думаю, что пора начать вести что-то вроде дневника.
                    </p>
                <h3 class="h3date">И чтоб могилки рядом</h3>
                    <p>
                        Я всегда считала, что муж должен быть один. Раз и навсегда. А то как же - вот умрёшь,
                        в раю встретитесь и продолжите идиллию.
                    </p>
                    <p>
                        Поэтому в токсичном браке задержалась на лет 10 дольше, чем можно было. Плюса только два - сын и сын.
                    </p>
                    <p>
                        Как объяснить женщинам, что мы достойны лучшего - не понятно.
                    </p>
                    <p>
                        Как я себя вынудила разорвать круг самоуничтожения и уговорить себя, что могилки рядом не
                        утопия?
                    </p>
                    <p>
                        Зацепилась взглядом за счастливые семьи. Их мало, согласна, но они точно есть, уж теперь
                        то я проверила!
                    </p>
                    <p>
                        Было как-то согласилась я сходить на свидание с парнем на пару лет моложе. Назначили место
                        встречи в Старой Риге. Была ранняя весна, я оделась легко и рассчитывала на короткую лёгкую
                        встречу.
                    </p>
                <h3 class="h3date">Женщины после 30 не флиртуют, они ФИЛЬТРУЮТ!</h3>
                <p>
                    <img src="../images/date10.jpg"
                         width="500"
                         height="auto"
                         alt="Иллюстрация"
                         align="right">
                </p>
                    <p>
                        Встретил меня парень в широких штанах и первым делом стал рассказывать, как пополнел и
                        стесняется этого. Почему-то он сразу решил проверить мою попку на прочность и при случае
                        не отказывал себе в желании при всех постоянно ее хлопать. Мои возмущения не имели силы.
                    </p>
                    <p>
                        Я быстро замёрзла и предложила зайти в кафе выпить кофе, на что он стал отпираться и стал
                        звать на работу, которая находится за Вантовым мостом. Все мои возмущения, что я перемерзну
                        игнорировались и чуть ли не физически сдерживал меня от кафе, чтобы хоть чуть согреться.
                        Идём на работу и всё... Там кофе вкуснее, чем где либо и главное -
                        <mark>
                            бесплатный
                        </mark>.
                    </p>
                    <p>
                        Я настояла, зашли в кафе, я купила латте себе и ему. После чего он стал зазывать к себе домой.
                        Квартиру он снимает с бывшей девушкой и по очереди приводят "друзей". Я поспешила домой.
                    </p>
                    <p>
                        После того, как он проводил меня до троллейбуса, через 10 минут перезвонил и сообщил,
                        что ему всё понравилось, я понравилась и он хотел бы продолжить общение у него дома...
                    <p>
                        Конечно, пришлось прекратить общение, но он мне дал чудесный совет - для знакомств,
                    лучше брать левый номер, который не жалко выкинуть...
                    </p>

                <h3 class="h3date">"Мне нужен шампунь, который вымывает людей из головы"</h3>
                    <p>
                        Иногда приходишь на свидание, а там и цветы, и ресторан хороший, и разговор активный...
                        На тему тяжелого развода или... операции на геморрое... И вот ты всё выслушиваешь,
                        соболезнуешь, поддерживаешь... А потом тебе не звонят, ну или ты не хочешь продолжения
                        и начинают мучать разные сомнения, типа, блин, зачем мне в мой мозг закладывают столько
                        лишней информации, что-то вроде, что нельзя покупать машины конкретной фирмы, так как они
                        во время войны делали газовые камеры или например, какими женщины бывают неблагодарными.
                        А иногда, вот блин, всё так и мужик классный, но похож на кого-то знакомого, о котором у
                        тебя плохие воспоминания.
                    </p>
                    <p>
                        Нет, наверное, проще выйти замуж в 18 лет и не париться или нужно придумать способы
                        абстрагироваться от прошлого и принимать всё так, как есть. Но это же невозможно, правда?
                    </p>
                <h3 class="h3date">Таиственный человек, запонки и "Жена у тебя красивая"</h3>
                    <p>
                        На сайтах знакомств очень много женатых мужчин. Ну вот как бы обидно не звучало.
                    </p>
                    <p>
                            <img src="../images/date4.jpg"
                                 width="400"
                                 height="auto"
                                 alt="Иллюстрация" align="left">
                    </p>
                    <p>
                        Некоторых вычислить сложно, другие и не скрываются. Но если у мужчины нет фото,
                        вот 100%. Какое-то время мне было забавно делать опрос, по каким причинам женатые мужчины
                        ищут любовницу - ответы были разными, но очень банальными, что-то вроде "не удовлетворяет",
                        "нет любви, но жить вместе удобно", "выносит мозг". И всем я задавала один и тот же вопрос:
                        "А не проще ли разойтись" и все как один отвечали, что они не хотят.
                    </p>
                    <p>
                        Как вычислить женатого?
                    </p>
                <div class="blockquote">
                    <p>
                        "Помню, как то вдруг написал мне знакомый, которого до этого видела пару раз в жизни.
                        Говорит, как у тебя со временем, давай, мол, встретимся за чашкой кофе.
                    </p>
                    <p>
                        На тот момент я была свободная девушка, такое послание мне польстило и я согласилась на встречу.
                        Пришла в кафе, он улыбался во весь рот, а когда сели и начали говорить,
                        оказалось что позвал он меня, чтобы продать мне какую то то ли полезную добавку, то ли
                        здоровый кофе. И ещё какой то анализ. И все, естественно, стоило не малых денег.
                    </p>
                    <p>
                        Короче, бизнесом человек занялся. После этого, всегда настороженно относилась к подобным
                        сообщениям в личку"
                    </p>
                    <p>
                        <cite>
                            Комментарий под моим постом в FB Inna
                        </cite>
                    </p>
                </div>
                    <p>
                        Можно проверить по фото, просто забив его в поиск или словить на слове.
                    </p>
                    <p>
                        Был у меня случай, когда писал парень, симпатичный, с кучей фото, обещал любовь, верность
                        и ЗАГС, но что-то было не так. И тут он проговорился, что вот одно моё фото сделано ему
                        знакомым фотографом. В течение минуты я списалась с этим фотографом и получила профиль в ФБ,
                        где на обложке этот красавчик с женой и ребёнком, лента полна признаний в любви от жены и
                        совместных фото.
                        Мне осталось написать ему только одно: "Жена у тебя красивая", хотя он не на секунду
                        не расстерялся и ответил: "Да, только характер ого-го" и добавил "Мы с тобой что, тогда не
                        встречаемся, да?".
                    </p>
                    <p>
                        Написал мне один человек, красиво, по-русски, но без фото, завязался у нас разговор и
                        естественно я сразу спросила: "Женат?", на что получила отрицательный ответ. Чудесная,
                        интересная переписка перетекла в обмен контактами и всё затихло.
                        Через пару дней звонок. Невероятно красивый мужской голос приглашал на свидание.
                    </p>
                    <p>
                        Подходя к месту встречи меня потряхивало, я не знала, как он выглядит, что из себя
                        представляет. На все мои вопросы, типа, как я тебя узнаю, получала ответы - Узнаешь!
                    </p>
                    <p>
                        И действительно узнала)))) Кого ещё девушку с двумя косичками и кошечками на платье мог ждать?
                        Мужчина чуть за сорок, в строгом дорогом костюме, накрахмаленой рубашке с запонками.
                        Может быть лицо мужчины скоро совсем сотрётся из памяти, но запонки никогда.
                        У нас точно так же как и при переписке легко клеился разговор, у нас было много тем для
                        разговора, но в один момент он сказал: "Ты же понимаешь, что я женат", он рассказал о чудесной
                        жене, маленьких детях и так всё с любовью, с нежностью... а я не понимала, я же спрашивала.
                        Мне был официально предложен статус любовницы и дана неделя на раздумье.
                    </p>
                    <p>
                        Через пару часов он позвонил и спросил, что я решила, а я была в шоке. Нет-нет, не то что бы
                        я раздумывала, я просто была шокирована всей ситуацией.
                        Конечно, на следующее утро я написала большое письмо, где честно сказала, что любовница
                        из меня никакая, что я классическая жена в халате, в бигудях и со сковородкой на перевес.
                        Он звонил... Я больше никогда ему не ответила...
                    </p>
                        <h3 class="h3date">
                            "Поехали, кофе полакаем!"
                        </h3>
                    <p>
                        Вначале готовишься на свидание. Приводишь себя в состояние боевой готовности с ног до головы.
                        Скрабы, мази, косметика, духи, идеально подобрана одежда, а уже потом...
                        А уже потом не хочется казаться, хочется быть... В кедах, шлепках, шортах, с косой на скорую
                        руку. А были моменты, когда и не было сборов.
                    </p>
                    <p>
                        Есть у меня пара часов в день только моих. Это время я посвящаю прогулкам по лесу и общению
                        по телефону с близкими. И, конечно, перепискам на сайтах знакомств.
                    </p>
                    <p>
                        Бывало такое, что случайная переписка приводила к внезапным встречам. "Что делаешь?"
                        "Гуляю" "О, я рядом, сейчас приеду" "Приезжай". Иногда это происходило и в 9-11 вечера.
                    </p>
                    <p>
                        В один такой вечер я познакомилась с классным парнем. На вид профессор, по поведению Хулиган
                        с нашего двора. Открытый, честный. Пили мы латте с бензоколонки, делились впечатлениями о своих
                        злоключениях и много смеялись. Ну вот что-то опять мне не так, искры не было. После, мы много
                        переписывались, как друзья, он переодически звал Полакать кофе со Статойла, я же хотела, куда-то
                        поехать, чего-то посмотреть, а он не хотел отъезжать от своего района, так постепенно наше
                        общение сошло на нет.
                    </p>

                    <p>
                        <img src="../images/date2.jpg" width="500" height="auto"
                            alt="Иллюстрация" align="right">
                    </p>

                    <p>
                        Ещё одна подобная встреча была с парнем, который только что вернулся из Англии, где ничего
                        за много лет не заработал, но историй собрал много. Часа три я выслушивала, где и как он работал
                        , о его коллегах, начальстве... Как бы человек вернулся, а как бы всеми мыслями там.
                        А в конце началось самое интересное - анкетирование: понравилась ли я ему, хочу ли я быть с ним,
                        интересен ли он и тп.
                        Мне трудно было отвечать на эти вопросы, ведь три часа он говорил только о работе и ничего его
                        больше не интересует - о кино и театре знает только понаслышке, прогулки не любит,
                        достопримечательности не интересуют. У нас не было ни единой точки соприкосновения.
                        Опрос о том, нравлюсь ли я ему продолжался ещё несколько дней, а потом все тихо сошло на нет.
                    </p>
                    <p>
                        Как сказал один человек: первое свидание, оно даже не свидание, а просто знакомство и часто
                        оно бывает первым и последним.
                    </p>
                        <h3 class="h3date">
                            "Или секс, или принудительный секс!"
                        </h3>

                    <p>
                        Бывают и жуткие свидания, когда тебя склоняют к тому, чего ты не просто не хочешь...
                        А очень не хочешь.
                    </p>
                    <p>
                        Знаете, есть мужчины, на которых хочется оставить зазубрену для других женщин,
                        это вот как раз этот случай.
                    </p>

            <div class="blockquoteleft">
                <p>
                    А мне вот одна знакомая рассказывала, что в гостях мужчина просто ей отвесил неожиданную
                    пощёчину и сказал раздевайся... И секс таки был.
                <br/>
                    <cite>
                        Комментарий под моим постом в FB Андрей Вареник
                    </cite>
                </p>
            </div>
                    <p>
                        Пригласил меня мужчина на вкусный чай с красивым видом из окна...
                    </p>
                    <p>
                        Отвёз за город, к озеру и достал термос. Ситуация ничего такая, чай я выливала сразу,
                        как он отворачивался (мания преследования). И почти сразу стал склонять к сексу. Настырно
                        и в принудительном порядке "А мне ещё никто не отказывал".
                        Когда я поняла, что ситуация совсем аховая, вывернулась, взяла телефон и отошла в сторону.
                    </p>
                    <p>
                        Конечно, частенько идя на свидания я предупреждаю друзей,
                        чтобы звонили мне и спрашивали, как идут дела, чтобы в любой момент "Можно было обосновано уйти".
                    </p>
                    <p>
                        Пока я стояла в стороне, в машине метались молнии и бились грозы. Я терпеливо ждала. Было
                        два выхода, ждать пока за мной приедут друзья и твердо сказав Нет, требовать отвести туда,
                        откуда привёз.
                        Как хорошо быть взрослой женщиной, которая четко знает, что хочет,
                        а чего не допустит. К сожалению, так было не всегда.
                    </p>
                    <p>
                        Молча мы доехали до города и навсегда разошлись.
                    </p>
                    <p>
                        Буквально недавно, рассказав знакомой этот случай, она сказала, что на днях слышала от
                        другой женщины всё слово в слово, фраза в фразу, действие в действие.
                    <p>
                        Прошло уже несколько лет, ну неужели этот способ принудительного секса работает?
                    </p>
                    <h3 class="h3date">
                        Главное - начать!
                    </h3>

                    <p>
                        <img src="../images/date11.jpg" width="350" height="auto"
                             alt="Иллюстрация" align="right">
                    </p>

                    <p>
                        Xотелось бы вспомнить о своём самом первом свидании за последние 17 лет. История с продолжением и это уже,
                        наверное, к разговору о долгожителях сайтов знакомств.
                    </p>
                    <p>
                        Конечно, самое первое свидание, наверное, самое тяжёлое. Я очень боялась, ведь достаточно влюбчивый
                        человек, но очень не хотелось себя обременять отношениями с порога, мучиться и опять страдать...
                    </p>
                    <p>
                        Как-то быстро списались, быстро договорились и с первой секунды знакомства было понятно,
                        что ничего у нас не получится, ни внешне, ни в содержании...
                    </p>
                    <p>
                        Знаете, когда люди разные, мнения разные, идёт навязывание каких-то взглядов. Особенно меня
                        коробило его чёткая позиция по воспитанию детей, хотя своих детей у него нет. Должно быть
                        так и всё.
                    </p>
                    <p>
                        Погуляли мы полчаса и разошлись, ну вот не судьба. Он писал, я пыталась отговориться, но он
                        был своего мнения, особенного... Но я не засиживают на одном сайте, быстро удаляюсь и общение
                        прекратилось.
                    </p>
                    <p>
                        Но всё не так просто. Прошло уже два года и он наткнулся на меня на другом сайте и началось
                        подкалывание, что-то вроде "Сняла кого-то?"  и пр. Я просто отвечала, без иронии и интузиазма.
                    </p>
                    <p>
                        Опять начал звать на свидание, на что я отвечала, что уже были. И тут началось самое забавное -
                        он начал расписывать наше первое свидание "Ну что там с первого раза поймёшь, ну что там с первого
                        поцелуя пoчувствуешь...".
                    </p>
                    <p>
                        Вот думаю, какого ты о себе мнения, прям вот в твоих фантазиях мы уже и целовались, хорошо, что
                        больше ничем не занимались.
                    </p>
                    <p>
                        Он продолжал меня бомбить своей обозлённой на весь мир иронией, но меня это уже никак не касалось...
                        Но пусть с первого свидания у меня не вышли отношения, я была собой горда... я это сделала, я могу не
                        влюбляться во всех подряд, я могу понять, мой человек или нет. Это был первый шаг в новый, совсем
                        неизведанный мир свободной женщины!
                    </p>
                <h3 class="h3date">Размер имеет значение #мои100свиданий</h3>
                    <p>
                        <img src="../images/date14.jpg" width="250" height="auto"
                             alt="Иллюстрация" align="right">
                    </p>
                    <p>
                        Ну, вот родилась я такой - высокой и немаленькой. Судьба у меня такая. Всегда комплексовала,
                        была выше всех сверстников...
                    </p>
                    <p>
                        Поэтому, конечно, я отдаю предпочтение мужчинам выше меня. Но бывает же по разному...
                        А может человек хороший.
                    </p>
                    <p>
                        Созвонились мы с одним мужчиной и интересно нам разговаривать и вроде на одной волне,
                        но я всегда спрашиваю рост и предупреждаю, что я девочка большая не только в годах, но
                        и объемами, и здесь спросила, и предупредила. Мужчина не обратил на это внимание, а точнее
                        отмахнулся.
                    </p>
                    <p>
                            Приехал  в назначенное время, в назначенное место на большой Мерседесе. Я села в машину
                        и было всё понятно - запах не мой, рост не мой... Ну ведь нужно дать себе шанс.
                    </p>
                    <p>
                        В духе романтики отправились мы к цветущей сакуре, потом в межапарк. Много гуляли,
                        болтали и смеялись. Но даже мои самые бескаблучные тапочки не помогли. Я была выше,
                        ему тоже было неуютно.
                    </p>
                    <p>
                        Мне было предложено приехать как-нибудь на дружественный шашлычок посмотреть его дом,
                        на что я ответила - зачем нам это. Не понравились друг другу и не понравились, что будем
                        здесь расшаркиваться.
                    </p>
                <h3 class="h3date">Свидание после 30 всё больше походит на собеседование!</h3>
                    <p>
                        Давайте будем честными друг с другом и не тратить время друг друга.
                    </p>
                <h3 class="h3date">Марафон свиданий – что за зверь?</h3>

            <div class="blockquoteleft">
                    <p>
                        Да... когда идешь на встречу с интересным, да ладно, просто с новым человеком, это прежде
                        всего встреча, прежде всего общение, прежде всего эмоции, и не важно, даже как это назвать,
                        свидание, знакомство, посиделка, прогулка, деловая встреча, да по-разному можно назвать.
                    </p>
                    <p>
                        Люди прежде всего встречаются, для того, чтобы им было интересно вместе, чтобы чем-то
                        поделиться, что-то рассказать, что-то узнать, да или просто приятно провести время,
                        а уж то, во что это выльется впоследствии, может кому-то и известно, но только не нам...
                    </p>
                    <p>
                        Слово "свидание" оно какое-то очень официальное, и при том очень ограничивающее, обязывающее.
                        Для меня оно больше ассоциируется с тем, когда люди уже знакомы какое-то время, когда между
                        ними есть что-то больше, чем слова, взгляды и намерения, больше, чем интересная беседа,
                        за чашкой кофе, больше, чем деловая встреча, больше, чем дружба.
                    </p>
                    <p>
                        Наверно я против первых свиданий, как это принято в современном мире, но я за то,
                        чтобы люди много и часто встречались, гуляли, веселились, беседовали и просто проводили
                        вместе много интересного времени, ну а потом кто-то с кем-то обязательно придут на
                        первое свидание, но свидание с тем, к кому ноги сами понесут быстрее самого сильного ветра.
                    <br/>
                            <cite>
                                Комментарий под моим постом в FB Андрей Андреев
                            </cite>
                    </p>
            </div>
                    <p>
                        Когда же свидания начинают приносить настоящее удовольствие? Когда ты перестаешь на них ходить
                        с мыслью о неизбежном замужестве. Ты идешь просто хорошо провести время и узнать нового
                        человека. По моему опыту, чем быстрее происходило личное знакомство, тем удачнее проходило
                        свидание.
                    </p>
                    <p>
                        Да, да, на свидания я перестала ходить при полном параде и желательно в тот же или на
                        следующий день после виртуального знакомства. А чего затягивать? От долгой переписки
                        чаще всего создается совершенно не то впечатление, при виртуальном знакомстве ты переносишь
                        на человека все свои желания и хотелки, а в жизни человек никак не должен и не будет этому
                        соответствовать. Затяжные переписки, как долгие проводы – свидание неизбежно, поэтому чего
                        тянуть? От сюда и пошёл мой личный марафон свиданий, где я раз в несколько месяцев каждый
                        день почти неделю встречаюсь с разными мужчинами. И на контрасте – все цвета ярче.
                    </p>
                    <p>
                        Было у меня несколько просто неожиданно идеальных свиданий – с цветами, прогулками у моря,
                        танцами и прочими радостями жизни и именно это запомнится и есть классные мужчины, есть
                        нормальные мужчины, просто каждому своё.
                    </p>
                <h3 class="h3date">Только в 35 лет я узнала, что такое секс...</h3>
                    <p>
                        Да, да именно так, как я написала. Желать секса и иметь его оказалось очень разными
                        понятиями. До этого он был для меня чем то мифическим и болезненным как физически,
                        так и морально. Но вкусив то, что действительно мне по нраву, теперь испытываю
                        противоречивые чувства - от "почему хоть 10% мужчин так не умеют удовлетворять
                        женщин" до "что теперь с этим делать".
                    </p>
                    <p>
                        Теперь я вступила на скользкую дорожку мужчин - получать от противоположного пола
                        только физическое удовлетворение.
                    </p>
                    <p>
                        Всем сердцем желаю всей прекрасной части человечества ощутить всю гамму прелести физического контакта!
                    </p>
                <h3 class="h3date">Я не злая, но когда голодная, могу кого-то съесть.</h3>
                    <p>
                        Пробки, скукота. Еду я с работы и переписываюсь с пятью мужчинами. И тут один спрашивает,
                        что я делаю.
                    </p>
                    <p>
                        <img src="../images/date13.jpg" width="350" height="auto"
                             alt="Иллюстрация" align="right">
                    </p>
                    <p>А что я делаю? Еду и есть хочу. Так и пишу "Еду домой и так есть хочу, что руль готова
                        грызть". А сама думаю - какая чудесная мысль. И пишу эту фразу всем сразу.
                    </p>
                    <p>
                        Один поинтересовался, а есть ли что-то дома поесть, после отрицательного ответа,
                        предложил сходить в магазин. И после чего наша переписка пролетела в виртуальный мусорник.
                    </p>
                     <p>
                         Другой, описывая свое хобби, даже не заметил моего голодного позыва, продолжал описывать
                         прелесть байдарок. И успешно полетел в утилизацию.
                    </p>
                    <p>
                        Третий написал только "Что бы ты хотела?". А я хочу мяса и соуса, много соуса. Моментом
                        последовал ответ "Когда?". Ну когда? Сейчас, конечно. Сразу была названа геолокация шашлычки
                        - через 5 минут встреча, вкусный ужин. Я покормлена!
                    </p>
                    <p>
                        Есть в наше время мужики, которые готовы позаботиться, тупо покормить, без каких-либо
                        условий и обязательств.
                    </p>
                    <p>
                        Уже по пути домой с ресторана написал четвертый, которому я пожаловалась, что буквально
                        полчаса назад умирала с голоду и моментальная реакция: "Ты уже покушала?",
                        как медом по моему слуху.
                    </p>
                    <p>
                        Пятого пожалела и не проверяла, у него в этот день был день рождения сына, но думаю, что
                        в этот день он бы не прошел проверку, но ещё не вечер.
                    </p>
                    <p>
                        Хотя был и шестой, который предложил привести йогурта какого-либо, я его быстро послала,
                        пусть ест свой йогурт на ужин сам, а я по мясу.
                    </p>
                    <p>
                        Девчонки, есть ещё мужики у нас, есть! С голоду точно не умрём!
                    </p>
                    <h3 class="h3date">"Давай с тобой встречаться!"</h3>
                    <p>
                        Это произошло, вот прям исполнилась мечта всего моего пубертата, я услышала эти слова
                        "Давай с тобой встречаться!".
                    </p>
                    <p>
                        Божечки, так мило услышать это в 36 лет, тааак миииилооо.
                    </p>
                    <p>
                        К сожалению или к радости я не смогу встречаться с этим мужчиной, слишком долго он тянул с
                        этим, ну блин, в душу запал своим предложением. Мимишность зашкаливает.
                        Спасибо таким мужчинам, умеют же радовать).
                    </p>
                <h3 class="h3date">Идеальные свидания</h3>
                    <p>
                        Я заметила, что мало делюсь позитивом о свиданиях, а ведь его действительно много.
                    </p>
                <div class="blockquoteleft">
                    <p>
                        В спонтанном свидании свое очарование. Когда тебя вырывают из серости будней,
                        то даже маленькое приключение может оказаться волшебной сказкой...
                    </p>
                    <p>
                        В большенстве случаев это всего лишь мимолетная встреча двух свободных на этот
                        вечер сердец, и чаще всего бывает, что "долго и счастливо" из этих свиданий не
                        получается.. Но зато такие встречи запоминаются на всю жизнь, потому что в них есть
                        что то особенное, скорее всего похожее на фейерверк, посреди чёрного небо.
                        И чем он неожиданные, тем больше от него эмоций, пусть даже это всего лишь
                        одинокая ракета, взмывшая в небо и рассыпавшаяся на тысячу маленьких цветных звёзд.
                    </p>
                    <br/>
                    <cite>
                        Комментарий под моим постом в FB Андрей Андреев
                    </cite>
                </div>
                    <p>
                        Понимаю, что много свободных девушек и мужчин читают мои посты, а они не всегда вдохновляют.
                    </p>
                    <p>
                        Поэтому пора выносить в жизнь удачные и интересные встречи, когда думаешь, что лучше быть не
                        может, а в реальности очень даже может быть лучше, лучше и лучше.
                    </p>
                    <p>
                        Самые лучшие свидания у меня были спонтанными, когда нет мандража при сборах и долгого
                        ожидания. Я давно перестала марафетиться перед первыми свиданиями и утопать в надуманных
                        ожиданиях.
                    </p>
                    <p>
                        В одно свободное воскресенье написал мужчина, предложил встретиться и я согласилась...
                        Когда? Да прямо сегодня.
                    </p>
                    <p>
                        Съехались мы в Межапарке и несколько часов гуляли и болтали обо всем. Он оказался другой
                        национальности и все особенности его страны мне были очень интересны, а я рассказывала
                        о наших нравах.
                    </p>
                    <p>
                        Потом мы поехали в кафе. Он сел не напротив, как у нас принято, а рядышком, как потом
                        выяснилось, чтобы не убежала) Мы пили чай из кактусов и долго болтали и смеялись.
                    </p>
                    <p>
                        Он рассказал и показал мне о социально принятых прикосновениях - это были объятья
                        и поцелуй в щёчку, и мы разъехались по домам.
                    </p>
                    <p>
                        Потом мы ещё долго встречались, он меня сопровождал на самые страшные медицинские
                        процедуры, типа "кобры" - проверки желудка, ведь он считал, что должен поддерживать
                        во всем и я думала, что лучшего и не может быть...
                    </p>
                    <p>
                        Да, жизнь нас как-то странно развела, наверное, чтобы показать, что я ещё не всё видела...
                    </p>

            </div>
        </div>
    </div>




</body>
</html>
