

<!DOCTYPE html>
<html lang="en">

    <?php
        include('uzdevumi/datubaze.php');
        $upesSelect = "SELECT * FROM latvijasupes1";
        $upesResult = $conn->query($upesSelect);
        $iconSelect = "SELECT * FROM head_right";
        $iconResult = $conn->query($iconSelect);
    ?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no,
	 viewport-fit=cover" />

	<link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles/style.css" type="text/css">
	<link rel="stylesheet" href="fonts/css/all.css" type="text/css">

	<title>ILONA</title>

</head>
<body>


	<div class="header">
		<div class="logo">
				<h1>Ilona Braima</h1>
		</div>

		<div class="menu">
			<div class="menu-item">
			    <a class="menu-link" href="uzdevumi/maniuzdevumi.html">Mājas uzdevums</a>
			</div>
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

	<div class=head-r>
        <div class="flex just-center">

            <?php
            while ($icon = $iconResult->fetch_assoc()) {
            echo  '<a class="icon" title="' . $icon['title'] . '"href="' . $icon['adres'] . '">
            <img src="images/' . $icon['icon'] . '"></a>';
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
    	    <div>
                        <button onclick="lefts()" class="slider-button slider-button--left">
                        <span class="far fa-hand-point-left"></span></button>
                        <button onclick="right()" class= "slider-button slider-button--right">
                        <span class="far fa-hand-point-right"></span></button>
            </div>
            <p>
            На эом сайте я хочу обозначить все грабли, на которые наступила, помочь вам их обойти.
            Свою жизнь, благодаря чётким формулировкам мужа, смогла поделить на Проекты.
            Работая редактором и будучи блогером я придумала и воплотила в жизнь их огромное количество.
            Проект "Дети" запустила я в году 2007, когда уже все вокруг начали бить тревогу,
            как это женщине 25 лет, будучи глубоко замужем и без детей. Непорядок. Давление не прошло зря,
            девочка созрела и в этом проекте начала разглядывать глобальный смысл и интерес подогревался.

        </div>

        <div class="col">
            <div class="item">
                <img src="images/carousel4.jpg" alt="Иллюстрация"/>
                <div class="item_desc">
                    <div class="item_heading">И чтоб могилки рядом</div>
                    <div class="item_text"> За последние годы я была на огромном количестве свиданий. Они были разными -
                        планированными и спонтанными. Все чем-то отличались своими плюсами и минусами,
                        но чаще одноразовыми. Думаю, что пора начать вести что-то вроде дневника.
                        <a href="date.php">Проект: Мои 100 свиданий</a></div>
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
                                <a href="QA.php">Проект: QA/Software tester</a>
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
                                  <a href="honest_relationship.php">Проект: Честные отношения</a>
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
                                <a href="children.php">Проект: Дети</a>
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
                        <a href="mybodylove.php">Проект: Моё тело</a>
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
                             делами. <a href="honest_relationship.php">Проект: Честные отношения</a>
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

    <canvas id="sakura"></canvas>
    <div class="btnbg">
    </div>

    <!-- sakura shader -->
    <script id="sakura_point_vsh" type="x-shader/x_vertex">
    uniform mat4 uProjection;
    uniform mat4 uModelview;
    uniform vec3 uResolution;
    uniform vec3 uOffset;
    uniform vec3 uDOF;  //x:focus distance, y:focus radius, z:max radius
    uniform vec3 uFade; //x:start distance, y:half distance, z:near fade start

    attribute vec3 aPosition;
    attribute vec3 aEuler;
    attribute vec2 aMisc; //x:size, y:fade

    varying vec3 pposition;
    varying float psize;
    varying float palpha;
    varying float pdist;

    //varying mat3 rotMat;
    varying vec3 normX;
    varying vec3 normY;
    varying vec3 normZ;
    varying vec3 normal;

    varying float diffuse;
    varying float specular;
    varying float rstop;
    varying float distancefade;

    void main(void) {
        // Projection is based on vertical angle
        vec4 pos = uModelview * vec4(aPosition + uOffset, 1.0);
        gl_Position = uProjection * pos;
        gl_PointSize = aMisc.x * uProjection[1][1] / -pos.z * uResolution.y * 0.5;

        pposition = pos.xyz;
        psize = aMisc.x;
        pdist = length(pos.xyz);
        palpha = smoothstep(0.0, 1.0, (pdist - 0.1) / uFade.z);

        vec3 elrsn = sin(aEuler);
        vec3 elrcs = cos(aEuler);
        mat3 rotx = mat3(
            1.0, 0.0, 0.0,
            0.0, elrcs.x, elrsn.x,
            0.0, -elrsn.x, elrcs.x
        );
        mat3 roty = mat3(
            elrcs.y, 0.0, -elrsn.y,
            0.0, 1.0, 0.0,
            elrsn.y, 0.0, elrcs.y
        );
        mat3 rotz = mat3(
            elrcs.z, elrsn.z, 0.0,
            -elrsn.z, elrcs.z, 0.0,
            0.0, 0.0, 1.0
        );
        mat3 rotmat = rotx * roty * rotz;
        normal = rotmat[2];

        mat3 trrotm = mat3(
            rotmat[0][0], rotmat[1][0], rotmat[2][0],
            rotmat[0][1], rotmat[1][1], rotmat[2][1],
            rotmat[0][2], rotmat[1][2], rotmat[2][2]
        );
        normX = trrotm[0];
        normY = trrotm[1];
        normZ = trrotm[2];

        const vec3 lit = vec3(0.6917144638660746, 0.6917144638660746, -0.20751433915982237);

        float tmpdfs = dot(lit, normal);
        if(tmpdfs < 0.0) {
            normal = -normal;
            tmpdfs = dot(lit, normal);
        }
        diffuse = 0.4 + tmpdfs;

        vec3 eyev = normalize(-pos.xyz);
        if(dot(eyev, normal) > 0.0) {
            vec3 hv = normalize(eyev + lit);
            specular = pow(max(dot(hv, normal), 0.0), 20.0);
        }
        else {
            specular = 0.0;
        }

        rstop = clamp((abs(pdist - uDOF.x) - uDOF.y) / uDOF.z, 0.0, 1.0);
        rstop = pow(rstop, 0.5);
        //-0.69315 = ln(0.5)
        distancefade = min(1.0, exp((uFade.x - pdist) * 0.69315 / uFade.y));
    }
    </script>
    <script id="sakura_point_fsh" type="x-shader/x_fragment">
    #ifdef GL_ES
    //precision mediump float;
    precision highp float;
    #endif

    uniform vec3 uDOF;  //x:focus distance, y:focus radius, z:max radius
    uniform vec3 uFade; //x:start distance, y:half distance, z:near fade start

    const vec3 fadeCol = vec3(0.08, 0.03, 0.06);

    varying vec3 pposition;
    varying float psize;
    varying float palpha;
    varying float pdist;

    //varying mat3 rotMat;
    varying vec3 normX;
    varying vec3 normY;
    varying vec3 normZ;
    varying vec3 normal;

    varying float diffuse;
    varying float specular;
    varying float rstop;
    varying float distancefade;

    float ellipse(vec2 p, vec2 o, vec2 r) {
        vec2 lp = (p - o) / r;
        return length(lp) - 1.0;
    }

    void main(void) {
        vec3 p = vec3(gl_PointCoord - vec2(0.5, 0.5), 0.0) * 2.0;
        vec3 d = vec3(0.0, 0.0, -1.0);
        float nd = normZ.z; //dot(-normZ, d);
        if(abs(nd) < 0.0001) discard;

        float np = dot(normZ, p);
        vec3 tp = p + d * np / nd;
        vec2 coord = vec2(dot(normX, tp), dot(normY, tp));

        //angle = 15 degree
        const float flwrsn = 0.258819045102521;
        const float flwrcs = 0.965925826289068;
        mat2 flwrm = mat2(flwrcs, -flwrsn, flwrsn, flwrcs);
        vec2 flwrp = vec2(abs(coord.x), coord.y) * flwrm;

        float r;
        if(flwrp.x < 0.0) {
            r = ellipse(flwrp, vec2(0.065, 0.024) * 0.5, vec2(0.36, 0.96) * 0.5);
        }
        else {
            r = ellipse(flwrp, vec2(0.065, 0.024) * 0.5, vec2(0.58, 0.96) * 0.5);
        }

        if(r > rstop) discard;

        vec3 col = mix(vec3(1.0, 0.8, 0.75), vec3(1.0, 0.9, 0.87), r);
        float grady = mix(0.0, 1.0, pow(coord.y * 0.5 + 0.5, 0.35));
        col *= vec3(1.0, grady, grady);
        col *= mix(0.8, 1.0, pow(abs(coord.x), 0.3));
        col = col * diffuse + specular;

        col = mix(fadeCol, col, distancefade);

        float alpha = (rstop > 0.001)? (0.5 - r / (rstop * 2.0)) : 1.0;
        alpha = smoothstep(0.0, 1.0, alpha) * palpha;

        gl_FragColor = vec4(col * 0.5, alpha);
    }
    </script>
    <!-- effects -->
    <script id="fx_common_vsh" type="x-shader/x_vertex">
    uniform vec3 uResolution;
    attribute vec2 aPosition;

    varying vec2 texCoord;
    varying vec2 screenCoord;

    void main(void) {
        gl_Position = vec4(aPosition, 0.0, 1.0);
        texCoord = aPosition.xy * 0.5 + vec2(0.5, 0.5);
        screenCoord = aPosition.xy * vec2(uResolution.z, 1.0);
    }
    </script>
    <script id="bg_fsh" type="x-shader/x_fragment">
    #ifdef GL_ES
    //precision mediump float;
    precision highp float;
    #endif

    uniform vec2 uTimes;

    varying vec2 texCoord;
    varying vec2 screenCoord;

    void main(void) {
        vec3 col;
        float c;
        vec2 tmpv = texCoord * vec2(0.8, 1.0) - vec2(0.95, 1.0);
        c = exp(-pow(length(tmpv) * 1.8, 2.0));
        col = mix(vec3(0.02, 0.0, 0.03), vec3(0.96, 0.98, 1.0) * 1.5, c);
        gl_FragColor = vec4(col * 0.5, 1.0);
    }
    </script>
    <script id="fx_brightbuf_fsh" type="x-shader/x_fragment">
    #ifdef GL_ES
    //precision mediump float;
    precision highp float;
    #endif
    uniform sampler2D uSrc;
    uniform vec2 uDelta;

    varying vec2 texCoord;
    varying vec2 screenCoord;

    void main(void) {
        vec4 col = texture2D(uSrc, texCoord);
        gl_FragColor = vec4(col.rgb * 2.0 - vec3(0.5), 1.0);
    }
    </script>
    <script id="fx_dirblur_r4_fsh" type="x-shader/x_fragment">
    #ifdef GL_ES
    //precision mediump float;
    precision highp float;
    #endif
    uniform sampler2D uSrc;
    uniform vec2 uDelta;
    uniform vec4 uBlurDir; //dir(x, y), stride(z, w)

    varying vec2 texCoord;
    varying vec2 screenCoord;

    void main(void) {
        vec4 col = texture2D(uSrc, texCoord);
        col = col + texture2D(uSrc, texCoord + uBlurDir.xy * uDelta);
        col = col + texture2D(uSrc, texCoord - uBlurDir.xy * uDelta);
        col = col + texture2D(uSrc, texCoord + (uBlurDir.xy + uBlurDir.zw) * uDelta);
        col = col + texture2D(uSrc, texCoord - (uBlurDir.xy + uBlurDir.zw) * uDelta);
        gl_FragColor = col / 5.0;
    }
    </script>
    <!-- effect fragment shader template -->
    <script id="fx_common_fsh" type="x-shader/x_fragment">
    #ifdef GL_ES
    //precision mediump float;
    precision highp float;
    #endif
    uniform sampler2D uSrc;
    uniform vec2 uDelta;

    varying vec2 texCoord;
    varying vec2 screenCoord;

    void main(void) {
        gl_FragColor = texture2D(uSrc, texCoord);
    }
    </script>
    <!-- post processing -->
    <script id="pp_final_vsh" type="x-shader/x_vertex">
    uniform vec3 uResolution;
    attribute vec2 aPosition;
    varying vec2 texCoord;
    varying vec2 screenCoord;
    void main(void) {
        gl_Position = vec4(aPosition, 0.0, 1.0);
        texCoord = aPosition.xy * 0.5 + vec2(0.5, 0.5);
        screenCoord = aPosition.xy * vec2(uResolution.z, 1.0);
    }
    </script>
    <script id="pp_final_fsh" type="x-shader/x_fragment">
    #ifdef GL_ES
    //precision mediump float;
    precision highp float;
    #endif
    uniform sampler2D uSrc;
    uniform sampler2D uBloom;
    uniform vec2 uDelta;
    varying vec2 texCoord;
    varying vec2 screenCoord;
    void main(void) {
        vec4 srccol = texture2D(uSrc, texCoord) * 2.0;
        vec4 bloomcol = texture2D(uBloom, texCoord);
        vec4 col;
        col = srccol + bloomcol * (vec4(1.0) + srccol);
        col *= smoothstep(1.0, 0.0, pow(length((texCoord - vec2(0.5)) * 2.0), 1.2) * 0.5);
        col = pow(col, vec4(0.45454545454545)); //(1.0 / 2.2)

        gl_FragColor = vec4(col.rgb, 1.0);
        gl_FragColor.a = 1.0;
    }
    </script>

<script src="script.js"></script>
</body>
</html>

