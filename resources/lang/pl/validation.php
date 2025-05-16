<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Pole :attribute musi zostać zaakceptowane.',
    'active_url' => 'Pole :attribute jest nieprawidłowym adresem URL.',
    'after' => 'Pole :attribute musi być datą późniejszą od :date.',
    'after_or_equal' => 'Pole :attribute musi być datą nie wcześniejszą niż :date.',
    'alpha' => 'Pole :attribute może zawierać jedynie litery.',
    'alpha_dash' => 'Pole :attribute może zawierać jedynie litery, cyfry i myślniki.',
    'alpha_num' => 'Pole :attribute może zawierać jedynie litery i cyfry.',
    'array' => 'Pole :attribute musi być tablicą.',
    'attached' => 'This :attribute is already attached.',
    'before' => 'Pole :attribute musi być datą wcześniejszą od :date.',
    'before_or_equal' => 'Pole :attribute musi być datą nie późniejszą niż :date.',
    'between' => [
        'array' => 'Pole :attribute musi składać się z :min - :max elementów.',
        'file' => 'Pole :attribute musi zawierać się w granicach :min - :max kilobajtów.',
        'numeric' => 'Pole :attribute musi zawierać się w granicach :min - :max.',
        'string' => 'Pole :attribute musi zawierać się w granicach :min - :max znaków.',
    ],
    'boolean' => 'Pole :attribute musi mieć wartość logiczną prawda albo fałsz.',
    'confirmed' => 'Potwierdzenie pola :attribute nie zgadza się.',
    'date' => 'Pole :attribute nie jest prawidłową datą.',
    'date_equals' => 'Pole :attribute musi być datą równą :date.',
    'date_format' => 'Pole :attribute nie jest w formacie :format.',
    'different' => 'Pole :attribute oraz :other muszą się różnić.',
    'digits' => 'Pole :attribute musi składać się z :digits cyfr.',
    'digits_between' => 'Pole :attribute musi mieć od :min do :max cyfr.',
    'dimensions' => 'Pole :attribute ma niepoprawne wymiary.',
    'distinct' => 'Pole :attribute ma zduplikowane wartości.',
    'email' => 'Pole :attribute nie jest poprawnym adresem e-mail.',
    'ends_with' => 'Pole :attribute musi kończyć się jedną z następujących wartości: :values.',
    'exists' => 'Zaznaczone pole :attribute jest nieprawidłowe.',
    'file' => 'Pole :attribute musi być plikiem.',
    'filled' => 'Pole :attribute nie może być puste.',
    'gt' => [
        'array' => 'Pole :attribute musi mieć więcej niż :value elementów.',
        'file' => 'Pole :attribute musi być większe niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być większe niż :value.',
        'string' => 'Pole :attribute musi być dłuższe niż :value znaków.',
    ],
    'gte' => [
        'array' => 'Pole :attribute musi mieć :value lub więcej elementów.',
        'file' => 'Pole :attribute musi być większe lub równe :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być większe lub równe :value.',
        'string' => 'Pole :attribute musi być dłuższe lub równe :value znaków.',
    ],
    'iban' => 'IBAN jest nieprawidłowy.',
    'image' => 'Pole :attribute musi być obrazkiem.',
    'in' => 'Zaznaczony element :attribute jest nieprawidłowy.',
    'in_array' => 'Pole :attribute nie znajduje się w :other.',
    'integer' => 'Pole :attribute musi być liczbą całkowitą.',
    'ip' => 'Pole :attribute musi być prawidłowym adresem IP.',
    'ipv4' => 'Pole :attribute musi być prawidłowym adresem IPv4.',
    'ipv6' => 'Pole :attribute musi być prawidłowym adresem IPv6.',
    'json' => 'Pole :attribute musi być poprawnym ciągiem znaków JSON.',
    'lt' => [
        'array' => 'Pole :attribute musi mieć mniej niż :value elementów.',
        'file' => 'Pole :attribute musi być mniejsze niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być mniejsze niż :value.',
        'string' => 'Pole :attribute musi być krótsze niż :value znaków.',
        'int' => 'Pole :attribute musi być mniejsze niż :value',
    ],
    'lte' => [
        'array' => 'Pole :attribute musi mieć :value lub mniej elementów.',
        'file' => 'Pole :attribute musi być mniejsze lub równe :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być mniejsze lub równe :value.',
        'string' => 'Pole :attribute musi być krótsze lub równe :value znaków.',
    ],
    'max' => [
        'array' => 'Pole :attribute nie może mieć więcej niż :max elementów.',
        'file' => 'Pole :attribute nie może być większe niż :max kilobajtów.',
        'numeric' => 'Pole :attribute nie może być większe niż :max.',
        'string' => 'Pole :attribute nie może być dłuższe niż :max znaków.',
    ],
    'mimes' => 'Pole :attribute musi być plikiem typu :values.',
    'mimetypes' => 'Pole :attribute musi być plikiem typu :values.',
    'min' => [
        'array' => 'Pole :attribute musi mieć przynajmniej :min elementów.',
        'file' => 'Pole :attribute musi mieć przynajmniej :min kilobajtów.',
        'numeric' => 'Pole :attribute musi być nie mniejsze od :min.',
        'string' => 'Pole :attribute musi mieć przynajmniej :min znaków.',
        'NULL' => 'Pole :attribute musi mieć przynajmniej :min znaków',
    ],
    'multiple_of' => 'Pole :attribute musi być wielokrotnością wartości :value',
    'not_in' => 'Zaznaczony :attribute jest nieprawidłowy.',
    'not_regex' => 'Format pola :attribute jest nieprawidłowy.',
    'numeric' => 'Pole :attribute musi być liczbą.',
    'present' => 'Pole :attribute musi być obecne.',
    'prohibited' => 'Pole :attribute jest zabronione.',
    'prohibited_if' => 'Pole :attribute jest zabronione, gdy :other ma wartość :value.',
    'prohibited_unless' => 'Pole :attribute jest zabronione jeżeli :other nie znajduje się w :values.',
    'prohibits' => 'Pole :attribute jest dozwolone bez pola :other.',
    'regex' => 'Format pola :attribute jest nieprawidłowy.',
    'relatable' => 'This :attribute may not be associated with this resource.',
    'required' => 'Pole :attribute jest wymagane.',
    'required_if' => 'Pole :attribute jest wymagane gdy :other ma wartość :value.',
    'required_unless' => 'Pole :attribute jest wymagane jeżeli :other nie znajduje się w :values.',
    'required_with' => 'Pole :attribute jest wymagane gdy :values jest obecny.',
    'required_with_all' => 'Pole :attribute jest wymagane gdy wszystkie :values są obecne.',
    'required_without' => 'Pole :attribute jest wymagane gdy :values nie jest obecny.',
    'required_without_all' => 'Pole :attribute jest wymagane gdy żadne z :values nie są obecne.',
    'same' => 'Pole :attribute i :other muszą być takie same.',
    'size' => [
        'array' => 'Pole :attribute musi zawierać :size elementów.',
        'file' => 'Pole :attribute musi mieć :size kilobajtów.',
        'numeric' => 'Pole :attribute musi mieć :size.',
        'string' => 'Pole :attribute musi mieć :size znaków.',
    ],
    'starts_with' => 'Pole :attribute musi zaczynać się jedną z następujących wartości: :values.',
    'string' => 'Pole :attribute musi być ciągiem znaków.',
    'timezone' => 'Pole :attribute musi być prawidłową strefą czasową.',
    'unique' => ':Attribute już występuje.',
    'uploaded' => 'Nie udało się wgrać pliku :attribute.',
    'url' => 'Format pola :attribute jest nieprawidłowy.',
    'uuid' => 'Pole :attribute musi być poprawnym identyfikatorem UUID.',

    'db_string' => 'Pole :attribute nie może mieć więcej niż 250 znaków.',
    'db_int' => 'Pole :attribute musi być poprawną liczbą całkowitą nie większą niż 1 000 000 000.',
    'db_text' => 'Pole :attribute nie może mieć więcej niż 5000 znaków.',
    'language' => 'Pole :attribute nie jest poprawnym kodem kraju.',
    'main_language' => 'Pole :attribute musi być domyślnym językiem Machineportal - PL.',
    'check_password' => 'Hasło musi składać się z min. 8 znaków i zawierać przynajmniej jedną mała literę, jedną dużą literę i jedną cyfrę.',
    'old_password' => 'Stare hasło jest nieprawidłowe.',
    'decimal' => 'Pole :attribute musi być poprawną liczbą dziesiętną nie większą niż 1 000 000',
    'decimal_big' => 'Pole :attribute musi być poprawną liczbą dziesiętną nie większą niż 100 000 000',
    'equal_if' => 'Pole :attribute ma niepoprawną wartość',
    'company_department_owner' => 'Dział nie istnieje lub nie jest działem Twojej firmy',
    'empty_with' => 'Pole :attribute nie może występować jednocześnie z połączonym polem.',
    'false_with' => 'Pole :attribute musi mieć wartość 0 / false, gdy inne pole ma wartość true.',
    'rgb_hex' => 'Pole :attribute nie jest poprawnym kolorem RGB Hex.',
    'phone_number' => 'Pole :attribute nie jest poprawnym numerem telefonu.',
    'unique_phone_number' => 'Podany numer telefonu jest już przypisany do kogoś innego.',
    'part_id' => 'Podana część nie jest poprawna.',
    'detail_id' => 'Nie odnaleziono szczegółów dla danej części.',
    'warehouse_position_id' => 'Podana pozycja magazynowa nie jest poprawna.',
    'part_offer_id' => 'Podana oferta nie jest poprawna.',
    'year' => 'Podany rok nie jest prawidłowy.',
    'month' => 'Podany miesiąc nie jest prawidłowy.',
    'day' => 'Podany dzień nie jest prawidłowy.',
    'enum' => 'Podana wartość nie jest zgodna z Enumem.',
    'tax_number_regex' => 'Numer identyfikacji podatkowej ma niepoprawny dla danego kraju format',
    'tax_number_ue_regex' => 'VAT UE ma niepoprawny dla danego kraju format',
    'company_brand_has_status' => 'Podany brand nie istnieje lub nie jest zweryfikowany.',
    'float' => 'Pole :attribute musi być liczbą zmiennoprzecinkową.',
    'value_in' => 'Podana wartość jest błędna. Pole przyjmuje tylko wartości: :options',

    'incorrect' => 'Podana wartość jest niepoprawna.',

    'password' => [
        'letters' => 'Pole :attribute musi zawierać przynajmniej jedną literę.',
        'mixed' => 'Pole :attribute musi zawierać przynajmniej jedną wielką i jedną małą literę.',
        'numbers' => 'Pole :attribute musi zawierać przynajmniej jedną liczbę.',
        'symbols' => 'Pole :attribute musi zawierać przynajmniej jeden znak specjalny.',
        'uncompromised' => 'Podany atrybut :attribute pojawił się w wycieku danych. Proszę wybrać inną wartość :attribute.',
        'big_letter' => 'Pole :attribute musi zawierać przynajmniej jedną wielką literę.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],
];
