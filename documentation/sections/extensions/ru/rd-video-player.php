<h3>RD Video Player</h3>
<p>HTML Website Templates используют расширение <b>RD Video Player</b> для реализации собственного видеоплеера.</p>

<h4>Вставка видеоплеера на страницу</h4>
<p>Для внедрения видеоплеера  на целевую HTML страницу необходимо воспользоваться следующей разметкой .Для внедрения видеоплеера  на целевую HTML страницу необходимо воспользоваться следующей разметкой .</p>

<pre><code>
        &lt;div data-rd-video-path="path/to/video" class="rd-video-player"&gt;
            &lt;div class="rd-video-wrap embed-responsive-16by9"&gt;
                &lt;div class="rd-video-preloader"&gt;< /div&gt;
                &lt;video preload="metadata"&gt;/video&gt;
                &lt;div class="rd-video-preview"&gt;/div&gt;
                &lt;div class="rd-video-top-controls"&gt;
                    &lt;span class="rd-video-title"&gt;&lt;/span&gt;
                    &lt;a href="#" class="rd-video-fullscreen mdi mdi-fullscreen rd-video-icon"&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="rd-video-controls"&gt;
                    &lt;div class="rd-video-controls-buttons"&gt;
                        &lt;a href="#" class="rd-video-prev mdi mdi-fast-forward rd-video-icon"&gt;&lt;/a&gt;
                        &lt;a href="#" class="rd-video-play-pause mdi mdi-play"&gt;&lt;/a&gt;
                        &lt;a href="#" class="rd-video-next mdi mdi-fast-forward rd-video-icon"&gt;&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="rd-video-progress-bar"&gt;<  /div&gt;
                    &lt;div class="rd-video-time"&gt;
                        &lt;span class="rd-video-current-time"&gt;< /span&gt;
                        &lt;span class="rd-video-time-divider"&gt;:&lt;/span&gt;
                        &lt;span class="rd-video-duration"&gt;< /span&gt;<  /div&gt;
                    &lt;div class="rd-video-volume-wrap"&gt;
                        &lt;a href="#" class="rd-video-volume mdi mdi-volume-high rd-video-icon"&gt;/a&gt;
                        &lt;div class="rd-video-volume-bar-wrap"&gt;

                            &lt;div class="rd-video-volume-bar"&gt;&lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
    </code></pre>

<p>Вы можете изменять данную разметку для изменения внешнего вида видеоплеера.
    Для работы плеера необходимы лишь классы на определенных элементах. Список данных классов с описанием указаны ниже в карте классов.</p>

<h4>Карта классов видеоплеера</h4>
<ul class="marked-list">
    <li><dl class="inline-term">
            <dt>.rd-video-prev</dt>
            <dd>Кнопка включения предыдущего видео;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-play-pause</dt>
            <dd>Кнопка воспроизведения\паузы видео;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-next</dt>
            <dd>Кнопка включения следующего видео;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-stop</dt>
            <dd>Кнопка остановки видео;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-progress-bar</dt>
            <dd>Полоса прогресса воспроизведения;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-progress-bar-slider</dt>
            <dd>Ползунок на полосе прогресса;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-duration</dt>
            <dd>Отображает длительность видео;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-current-time</dt>
            <dd>Отображает текущее время воспроизведения;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-title</dt>
            <dd>Отображает название видео;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-fullscreen</dt>
            <dd>Кнопка включения\отключения полноэкранного режима;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-volume</dt>
            <dd>Кнопка включения\отключения звука;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-volume-bar</dt>
            <dd>Полоса громкости;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-volume-bar-slider</dt>
            <dd>Ползунок полосы громкости;</dd>
        </dl></li>
    <li><dl class="inline-term">
            <dt>.rd-video-playlist</dt>
            <dd>Список воспроизведения.</dd>
        </dl></li>
</ul>

<h4>Замена видео в видеоплеере</h4>

<p>Для замены видео необходимо в атрибуте <b>data-rd-video-path</b> указать путь к видео без формата. Данный атрибут не работает при наличии списка воспроизведения.</p>

<pre><code>
        &lt;div data-rd-video-path="path/to/video" class="rd-video-player"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Замена названия видео в видеоплеере</h4>

<p>Для замены названия видео необходимо в атрибуте <b>data-rd-video-title</b> указать название видео. Данный атрибут не работает при наличии списка воспроизведения.</p>

<pre><code>
        &lt;div data-rd-video-title="Your title" class="rd-video-player"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<h4>Отключение громкости видео по умолчанию в видеоплеере</h4>

<p>Для отключения громкости видео необходимо добавить атрибут <b>data-rd-video-muted</b> со значением <b>true</b>. </p>
<pre><code>
        &lt;div data-rd-video-muted="true" class="rd-video-player"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Настройка громкости по умолчанию в видеоплеере</h4>

<p>Для того чтобы изменить громкость видео по умолчанию необходимо добавить атрибут <b>data-rd-video-volume</b>. Значение может быть от 0 до 1:</p>

<pre><code>
        &lt;div data-rd-video-path="path/to/video" class="rd-video-player" data-rd-video-volume="0.5"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Вставка списка воспроизведения в видеоплеер</h4>
<p>HTML разметка для создания списка воспроизведения выглядит следующим образом:</p>
<pre><code>
        &lt;ul data-rd-video-play-on="li" class="rd-video-playlist"&gt;
            &lt;li data-rd-video-src="path/to/video1" data-rd-video-title="title 1"&gt;
                ...
            &lt;/li&gt;
            &lt;li data-rd-video-src="path/to/video2" data-rd-video-title="title 2"&gt;
                ...
            &lt;/li&gt;
        &lt;/ul&gt;
    </code></pre>
<p>Разметка внутри элемента списка может быть произвольной.
    Для привязки url видео файла с элементом списка необходимо использовать следующие атрибуты:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>data-rd-video-src</dt>
            <dd>Путь к видеофайлу без формата;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-rd-video-title</dt>
            <dd>Название видео (дополнительный атрибут, необходимый в случае вывода названия видео в плеере).</dd>
        </dl>
    </li>
</ul>









