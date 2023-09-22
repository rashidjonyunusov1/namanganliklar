<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Языковые ресурсы для проверки значений
    |--------------------------------------------------------------------------
    |
    | Последующие языковые строки содержат сообщения по-умолчанию, используемые
    | классом, проверяющим значения (валидатором).Некоторые из правил имеют
    | несколько версий, например, size. Вы можете поменять их на любые
    | другие, которые лучше подходят для вашего приложения.
    |
    */

    'accepted'             => 'Siz qabul qilishingiz kerak: attribute.',
    'active_url'           => 'Maydon: attribute yaroqsiz URL manzilini o\'z ichiga oladi.',
    'after'                => 'Maydonda: attribute quyidagi sana bo\'lishi kerak: sana.',
    'alpha'                => 'Maydon: attribute faqat harflarni o\'z ichiga olishi mumkin.',
    'alpha_dash'           => 'Maydon: attribute faqat harflar, raqamlar va defisni o\'z ichiga olishi mumkin.',
    'alpha_num'            => 'Maydon: attribute faqat harflar va raqamlarni o\'z ichiga olishi mumkin.',
    'array'                => 'Maydon: attribute qator bo\'lishi kerak.',
    'before'               => 'Attribute maydonida :date gacha bo\'lgan sana bo\'lishi kerak.',
    'between'              => [
        'numeric' => 'Maydon: attribute: min va: max o\'rtasida bo\'lishi kerak.',
        'file'    => 'Attribute maydonidagi fayl hajmi :min va :Max kilobayt(A) orasida bo\'lishi kerak.',
        'string'  => 'Belgilar soni Maydon: attribute: min va: max o\'rtasida bo\'lishi kerak.',
        'array'   => 'Elementlar soni Maydon: attribute: min va: max o\'rtasida bo\'lishi kerak.',
    ],
    'boolean'              => 'Maydon: attribute mantiqiy turdagi qiymatga ega bo\'lishi kerak.',
    'confirmed'            => 'Maydon: attribute tasdiqlash bilan bir xil emas.',
    'date'                 => 'Maydon: attribute sana emas.',
    'date_format'          => 'Maydon: attribute quyidagi formatga mos kelmaydi: format.',
    'different'            => 'Maydonlar: attribute va: boshqalar farq qilishi kerak.',
    'digits'               => 'Raqamli maydon uzunligi: attribute bo\'lishi kerak: raqamlar.',
    'digits_between'       => 'Raqamli maydon uzunligi: attribute: min va: max orasida bo\'lishi kerak.',
    'dimensions'           => 'Maydon: attribute yaroqsiz rasm o\'lchamlariga ega.',
    'distinct'             => 'Maydon: attribute takrorlanadigan qiymatni o\'z ichiga oladi.',
    'email'                => 'Maydon: attribute haqiqiy elektron manzil bo\'lishi kerak.',
    'file'                 => 'Maydon: attribute fayl bo\'lishi kerak.',
    'filled'               => 'Maydon: attribute to\'ldirish uchun talab qilinadi.',
    'exists'               => 'Tanlangan qiymat :attribute noto\'g\'ri.',
    'image'                => 'Maydon: attribute rasm bo\'lishi kerak.',
    'in'                   => 'Tanlangan qiymat :attribute noto\'g\'ri.',
    'in_array'             => 'Maydon: attribute mavjud emas: boshqa.',
    'integer'              => 'Maydon: attribute butun son bo\'lishi kerak.',
    'ip'                   => 'Maydon: attribute haqiqiy IP-manzil bo\'lishi kerak.',
    'json'                 => 'Maydon: attribute JSON qatori bo\'lishi kerak.',
    'max'                  => [
        'numeric' => 'Maydon: attribute endi bo\'lishi mumkin emas :max.',
        'file'    => 'Maydondagi fayl hajmi: attribute endi bo\'lishi mumkin emas: maksimal kilobayt(A).',
        'string'  => 'Qutidagi belgilar soni :attribute :max dan oshmasligi kerak.',
        'array'   => 'Maydondagi elementlar soni: attribute :max dan oshmasligi kerak.',
    ],
    'mimes'                => 'Maydon: attribute quyidagi turlardan birining fayli bo\'lishi kerak:: qiymatlar.',
    'min'                  => [
        'numeric' => 'Maydon: attribute kamida: min bo\'lishi kerak.',
        'file'    => 'Fayl hajmi :attribute maydonida kamida bo\'lishi kerak: min kilobayt(A).',
        'string'  => 'Qutidagi belgilar soni :attribute kamida bo\'lishi kerak: min.',
        'array'   => 'Maydondagi elementlar soni: attribute kamida bo\'lishi kerak: min.',
    ],
    'not_in'               => 'Tanlangan qiymat :attribute noto\'g\'ri.',
    'numeric'              => 'Maydon: attribute raqam bo\'lishi kerak.',
    'present'              => 'Maydon: attribute mavjud bo\'lishi kerak.',
    'regex'                => 'Maydon: attribute noto\'g\'ri formatga ega.',
    'required'             => 'Maydon: attribute to\'ldirish uchun talab qilinadi.',
    'required_if'          => 'Maydon: attribute to\'ldirish uchun talab qilinadi, qachon: boshqa teng: qiymat.',
    'required_unless'      => 'Maydon: attribute to\'ldirish uchun talab qilinadi, qachon: boshqa teng emas: qiymatlar.',
    'required_with'        => 'Maydon: attribute to\'ldirish uchun talab qilinadi, qachon: qiymatlar ko\'rsatilgan.',
    'required_with_all'    => 'Maydon: attribute to\'ldirish uchun talab qilinadi, qachon: qiymatlar ko\'rsatilgan.',
    'required_without'     => 'Maydon: attribute to\'ldirish uchun talab qilinadi, qachon: qiymatlar ko\'rsatilmagan.',
    'required_without_all' => 'Maydon: attribute to\'ldirish uchun talab qilinadi, hech qachon: qiymatlar ko\'rsatilmagan.',
    'same'                 => 'Qiymat :attribute :boshqa bilan mos kelishi kerak.',
    'size'                 => [
        'numeric' => 'Maydon: attribute teng bo\'lishi kerak: size.',
        'file'    => 'Attribute maydonidagi fayl hajmi quyidagicha bo\'lishi kerak :size kilobayt(A).',
        'string'  => 'Attribute maydonidagi belgilar soni: size bo\'lishi kerak.',
        'array'   => 'Attribute maydonidagi elementlar soni: size bo\'lishi kerak.',
    ],
    'string'               => 'Maydon: attribute qator bo\'lishi kerak.',
    'timezone'             => 'Maydon: attribute haqiqiy vaqt zonasi bo\'lishi kerak.',
    'unique'               => 'Ushbu maydon qiymati: attribute allaqachon mavjud.',
    'uploaded'             => 'Maydonni yuklash: attribute muvaffaqiyatsiz tugadi.',
    'url'                  => 'Maydon: attribute noto\'g\'ri formatga ega.',

    /*
    |--------------------------------------------------------------------------
    | Собственные языковые ресурсы для проверки значений
    |--------------------------------------------------------------------------
    |
    | Здесь Вы можете указать собственные сообщения для атрибутов.
    | Это позволяет легко указать свое сообщение для заданного правила атрибута.
    |
    | http://laravel.com/docs/5.2/validation#custom-error-messages
    | Пример использования
    |
    |   'custom' => [
    |       'email' => [
    |           'required' => 'Нам необходимо знать Ваш электронный адрес!',
    |       ],
    |   ],
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Собственные названия атрибутов
    |--------------------------------------------------------------------------
    |
    | Последующие строки используются для подмены программных имен элементов
    | пользовательского интерфейса на удобочитаемые. Например, вместо имени
    | поля "email" в сообщениях будет выводиться "электронный адрес".
    |
    | Пример использования
    |
    |   'attributes' => [
    |       'email' => 'электронный адрес',
    |   ],
    |
    */

    'attributes' => [],

];