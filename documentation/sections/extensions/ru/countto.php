<h3>CountTo</h3>
<p>HTML Website Templates используют расширение <b>jQuery CountTo</b> для реализации счетчиков на веб-странице.
</p>
<h4>Вставка счетчика на страницу</h4>
<p>Для того чтобы добавить счетчик нужно вставить следующую часть кода на HTML страницу .
</p>
<pre><code>
        &lt;div class="counter" data-from="25" data-to="125"&gt;&lt;/div&gt;
    </code></pre>
<p>где, атрибут <b>data-from</b> будет отвечать за начало отсчета счетчика, а атрибут <b>data-to</b> за конечный результат, требуемый, для отображения на странице.
</p>

<h4>Корректировка времени расчета счетчика</h4>

<p>Для того чтобы изменить скорость счета нужно добавить атрибут <b>data-speed</b> и задать в нем промежуток времени в миллисекундах  до оконнчания счета.
</p>
<p>Например,</p>
<pre><code>
        &lt;div class="counter" data-from="25" data-to="125" data-speed="5000"&gt;&lt;/div&gt;
    </code></pre>
<h4>Интервал обновления счетчика</h4>
<p>Для того чтобы изменить время обновление счетчика нужно добавить атрибут  <b>data-refresh-interval</b> и задать в нем временой интервал в миллисекундах.
</p>
<p>Например,
</p>

<pre><code>
        &lt;div class="counter" data-from="25" data-to="125" data-speed="5000" data-refresh-interval="300"&gt;&lt;/div&gt;
    </code></pre>