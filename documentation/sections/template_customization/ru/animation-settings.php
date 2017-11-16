<h3>Настройка анимации элементов шаблона при скролле</h3>
<p>HTML Website Template используют расширение <b>Wow.js</b> и css библиотеку <b>Animate.css</b> для реализации скролловой анимации. Для того, чтобы включить анимацию элементов при скролле для всей страницы необходимо добавить класс <b>.wow-animation</b> для тега <b>html</b>.</p>
<pre><code>&lt;html lang="en" class="wow-animation"&gt;</code></pre>

<p>Также необходимо указать класс <b>.wow</b>  и соответствующий класс анимации для целевого элемента. </p>
<pre><code>
        &lt;div class=wow fadeIn"&gt;
        ...
        &lt;/div&gt;
    </code></pre>

<p>Вы также можете поставить задержку на проигрывание анимации используя атрибут <b>data-wow-delay</b>.</p>
<pre><code>
        &lt;div data-wow-delay="0.2s" class="wow fadeIn"&gt;
        ...
        &lt;/div&gt;
    </code></pre>

<p>Ниже приведен список классов для создания соответствующих анимаций.</p>

<ul class="marked-list">
    <li>fadeIn</li>
    <li>fadeLeft</li>
    <li>fadeRight</li>
    <li>fadeUp</li>
    <li>fadeDown</li>
    <li>slideLeft</li>
    <li>slideRight</li>
    <li>slideUp</li>
    <li>slideDown</li>
</ul>
