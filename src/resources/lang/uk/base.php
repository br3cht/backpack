<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack\Base Language Lines
    |--------------------------------------------------------------------------
    */

    'registration_closed'    => 'Реєстрація закрита',
    'no_email_column'        => 'Користувачі не мають пов\'язаної адреси електронної пошти.',
    'first_page_you_see'     => 'Перша сторінка, яку ви бачите після входу в систему',
    'login_status'           => 'Статус авторизації',
    'logged_in'              => 'Ви ввійшли в систему!',
    'toggle_navigation'      => 'Переключити навігацію',
    'administration'         => 'АДМІНІСТРУВАННЯ',
    'user'                   => 'КОРИСТУВАЧ',
    'logout'                 => 'Вийти',
    'login'                  => 'Увійти',
    'register'               => 'Реєстрація',
    'name'                   => 'Ім\'я',
    'email_address'          => 'Адреса електронної пошти',
    'password'               => 'Пароль',
    'old_password'           => 'Старий пароль',
    'new_password'           => 'Новий пароль',
    'confirm_password'       => 'Підтвердьте пароль',
    'remember_me'            => 'Запам\'ятати мене',
    'forgot_your_password'   => 'Забули свій пароль?',
    'reset_password'         => 'Скинути пароль',
    'send_reset_link'        => 'Надіслати посилання для скидання пароля',
    'click_here_to_reset'    => 'Клацніть тут, щоб скинути пароль',
    'change_password'        => 'Змінити пароль',
    'unauthorized'           => 'Ви не авторизовані.',
    'dashboard'              => 'Панель управління',
    'handcrafted_by'         => 'Розроблено',
    'powered_by'             => 'За підтримки',
    'my_account'             => 'Мій обліковий запис',
    'update_account_info'    => 'Оновити мої дані',
    'save'                   => 'Зберегти',
    'cancel'                 => 'Скасувати',
    'error'                  => 'Помилка',
    'success'                => 'Успіх',
    'warning'                => 'Увага',
    'notice'                 => 'Повідомлення',
    'old_password_incorrect' => 'Старий пароль неправильний.',
    'password_dont_match'    => 'Паролі не співпадають.',
    'password_empty'         => 'Переконайтеся, що обидва поля для пароля заповнені.',
    'password_updated'       => 'Пароль оновлено.',
    'account_updated'        => 'Обліковий запис успішно оновлено.',
    'unknown_error'          => 'Сталася невідома помилка. Будь ласка спробуйте ще раз.',
    'error_saving'           => 'Помилка під час збереження. Будь ласка спробуйте ще раз.',
    'session_expired_error'  => 'Ваш сеанс закінчився. Увійдіть ще раз у свій обліковий запис.',
    'welcome'                => 'Ласкаво просимо!',
    'use_sidebar'            => 'Використовуйте панель ліворуч для створення, редагування або видалення вмісту.',

    'error_page' => [
        'title'              => 'Помилка :error',
        'button'             => 'Перейти на головну',
        'message_4xx'        => 'Будь ласка, <a :href_back>поверніться назад</a> або перейдіть на <a :href_homepage>головну сторінку</a>.',
        'message_500'        => 'Виникла внутрішня помилка сервера. Якщо помилка не зникне, зверніться до команди розробників.',
        'message_503'        => 'Сервер перевантажено або вимкнено на технічне обслуговування. Будь ласка, повторіть спробу пізніше.',
        '400'                => 'Поганий запит.',
        '401'                => 'Неавторизована дія.',
        '403'                => 'Заборонено.',
        '404'                => 'Сторінка не знайдена.',
        '405'                => 'Метод не дозволений.',
        '408'                => 'Час очікування запиту минув.',
        '429'                => 'Забагато запитів.',
        '500'                => 'Це не ти, це я.',
    ],

    'password_reset' => [
        'greeting'          => 'Привіт!',
        'subject'           => 'Скинути пароль',
        'line_1'            => 'Ви отримали цей електронний лист, оскільки ми отримали запит на скидання пароля для вашого облікового запису.',
        'line_2'            => 'Клацніть на кнопку нижче, щоб скинути пароль:',
        'button'            => 'Скинути пароль',
        'notice'            => 'Якщо ви не вимагали скидання пароля, подальших дій не потрібно.',
    ],

    'step'                  => 'Крок',
    'confirm_email'         => 'Підтвердьте електронну пошту',
    'choose_new_password'   => 'Введіть новий пароль',
    'confirm_new_password'  => 'Підтвердить новий пароль',
    'throttled'             => 'Нещодавно ви вже запросили скидання пароля. Будь ласка перевірте свою електронну пошту. Якщо ви не отримали нашого листа, повторіть спробу пізніше.',
    'throttled_request'     => 'Ви перевищили ліміт спроб входу. Зачекайте кілька хвилин і повторіть спробу.',

    'verify_email' => [
        'email_verification'            => 'Підтвердження електронною поштою',
        'verification_link_sent'        => 'Посилання на підтвердження було надіслано на вашу адресу електронної пошти.',
        'email_verification_required'   => 'Будь ласка, підтвердіть свою адресу електронної пошти, натиснувши посилання, яке ми вам надіслали.',
        'resend_verification_link'      => 'Надіслати посилання повторно',
    ],
];
