<?php
return [
    'link.have_questions' => 'Остались вопросы?',
    'text.answer' => 'Ответ',
    'text.faq' => 'Справка',
    'text.page_content' => '
        <tr>
            <td>Я вижу свой скин, а остальные нет.</td>
            <td>Чтобы другие так же видели ваш скин, им нужно установить эту же систему скинов. Это не значит, что им нужно регистрироваться на Ely.by, но им нужно скачать и установить наш патч, который располагается на <a href="/load">странице загрузок</a>. Это нужно сделать даже в том случае, если у ваших друзей есть лицензия Minecraft.</td>
        </tr>
        <tr>
            <td>В одиночной игре скин отображается нормально, а на сервер скин не отображается или не тот.</td>
            <td>Большинство серверов на версии 1.7.9 и старше используют так называемый "Восстановитель скинов", который насильно загружает скин из официальной системы скинов и игнорирует нашу систему. Уточните это у администратора вашего сервера.</td>
        </tr>
        <tr>
            <td>После установки системы скинов во время загрузки чёрный экран. Что делать?</td>
            <td>Вероятнее всего вы всё-таки забыли удалить папку META-INF. Так же не исключено, что вы просто скачали не ту версию системы скинов.</td>
        </tr>
        <tr>
            <td>Я использую Minecraft 1.6+. После установки системы скинов перестаёт запускаться майн. Что делать?</td>
            <td>В вашем лаунчере необходимо найти параметр запуска и дописать в конец строку<br />
                "-Dfml.ignoreInvalidMinecraftCertificates=true" без кавычек. Если вы используете bat-файл, то его нужно открыть любым текстовым редактором и в конец так же дописать эту строку.</td>
        </tr>
        <tr>
            <td>Я установил систему скинов, но мой лаунчер самостоятельно обновляет клиент и удаляет её.</td>
            <td>Да, некоторые лаунчеры могут не позволять патчить майнкрафт. К сожалению далеко не во всех лаунчера эту функцию можно отключить. Возможно вам необходим другой лаунчер.</td>
        </tr>
        <tr>
            <td>Я сменил скин, но в майнкрафте я вижу свой предыдущий скин.</td>
            <td>Это особенность алгоритма загрузки скинов в самом Minecraft. Если вы уже заходили в игру, то нужно перезапустить игру. Если проблема не решается, то наденьте на Елу любой скин, после чего наденьте снова желаемый. Возможно просто не удалось обновить с 1 раза информацию о вашем скине в системе скинов.</td>
        </tr>
        <tr>
            <td>Почему у вас нет плащей, ушек, HD-скинов?</td>
            <td>Мы хотим дать пользователям бесплатную альтернативу официальным скинам. Если дать им плащи, ушки, HD-скины, то это убьёт всю суть скинов Minecraft. Но не волнуйтесь, уже в текущей версии патча, что вы скачиваете, прописан код для загрузки плащей, просто мы их приберегли для кое-чего более интересного.</td>
        </tr>
        <tr>
            <td>Но я очень хочу плащ/ушки/HD-скин!</td>
            <td>Существует французский проект, который называется <a href="http://minecrack.fr.nf/">MineCrack</a>. В нем реализованы всевозможные вещи, которых нет в официальном Minecraft и на Ely.</td>
        </tr>
        <tr>
            <td>Могу ли я использователь эту систему скинов на своём сервере?</td>
            <td>Можете и должны! Чем больше людей будет пользоваться нашей системой скинов, тем быстрее она станет альтернативной официальной и количество "Стивов" на серверах будет уменьшаться.</td>
        </tr>
        <tr>
            <td>На моём скине есть ушки/плащ. Как их убрать?</td>
            <td>Как сказано выше, Ely не поддерживает ни то, ни другое. Это означает, что в вашем клиенте есть какой-то левый патч, который их и добавляет. Выполните чистую установку клиента и всё пропадёт.</td>
        </tr>
        <tr>
            <td>Где скачать/как запустить Minecraft?</td>
            <td>Поищите <a href="http://bit.ly/1eA2j77" target="_blank">вот тут</a>, думаю найдёте достаточно быстро.</td>
        </tr>
    ',
    'text.question' => 'Вопрос',
    'title' => 'Справка',
];
