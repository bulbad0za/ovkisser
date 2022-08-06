OpenVK-KB-Heading: Довідка з редагування нотаток

Вікірозмітка OpenVK це те ж саме, що і XHTML1.0 Transitional. Єдина зміна полягає в тому, що ми прибрали деякі теги, які можуть зашкодити OpenVK або не потрібні.

Список дозволених тегів:
* Всі заголовки 3-6 рівнів (h3-h6)
* Параграфи (&lt;p&gt;)
* Форматування тексту (&lt;i&gt;, &lt;b&gt;, &lt;del&gt;)
* &lt;sup&gt;, &lt;sub&gt;, &lt;ins&gt;
* Таблиці та все, що з ними пов'язано
* Зображення та посилання (&lt;a&gt;, &lt;img&gt;)
* Списки (і &lt;ol&gt; та &lt;ul&gt;)
* Переклад рядка та горизонтальна лінія (hr)
* Цитати (&lt;blockquote&gt; і &lt;cite&gt;)
* &lt;acronym&gt;

Зверніть увагу, що джерелом зображення можуть бути лише файли з OpenVK. Це обмеження не поширюється на посилання, де href може бути будь-яким (з метою безпеки наших користувачів, посилання буде автоматично замінено на редірект через away.php)

Ви могли помітити, що в списку дозволених тегів немає &lt;style&gt;, але нічого страшного, ви можете застосовувати атрибут style до тегу &lt;div&gt; та &lt;img&gt;. До переліку підтримуваних властивостей CSS входять:
* float
* height
* width
* max-height
* max-width
* font-weight

Зверніть увагу, що підтримуються тільки значення в пікселях.