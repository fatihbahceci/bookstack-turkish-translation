<?php
/**
 * Validation Lines
 * The following language lines contain the default error messages used by
 * the validator class. Some of these rules have multiple versions such
 * as the size rules. Feel free to tweak each of these messages here.
 */
return [

    // Standard laravel validation lines
    'accepted'             => ':attribute kabul edilmeli.',
    'active_url'           => ':attribute geçerli URL değil.',
    'after'                => ':attribute :date tarihinden sonraki bir tarih olmalı.',
    'alpha'                => ':attribute sadece harf içerebilir.',
    'alpha_dash'           => ':attribute sadece harfler, rakamlar, kısa çizgiler ve alt çizgiler içerebilir..',
    'alpha_num'            => ':attribute sadece harf ve rakam içerebilir.',
    'array'                => ':attribute bir dizi olmalıdır.',
    'before'               => ':attribute :date tarihinden önceki bir tarih olmalı.',
    'between'              => [
        'numeric' => ':attribute :min ile :max arasında olmalı.',
        'file'    => ':attribute :min ile :max kilobayt arasında olmalı.',
        'string'  => ':attribute :min ile :max karakter arasında olmalı.',
        'array'   => ':attribute :min and :max eleman arasında olmalı.',
    ],
    'boolean'              => ':attribute doğru (true) veya yanlış (false) olabilir.',
    'confirmed'            => ':attribute tekrar doğrulama uyuşmuyor.',
    'date'                 => ':attribute geçerli bir tarih değil.',
    'date_format'          => ':attribute :format formatı ile uyuşmuyor.',
    'different'            => ':attribute ve :other farklı olmalı.',
    'digits'               => ':attribute :digits basamak olmalı.',
    'digits_between'       => ':attribute :min ile :max basamak arasında olmalı.',
    'email'                => ':attribute geçerli bir e-posta adresi olmak zorunda.',
    'ends_with' => ':attribute şunlardan birisi ile bitmek zorunda: :values',
    'filled'               => ':attribute alanı zorunludur.',
    'gt'                   => [
        'numeric' => ':attribute :value değerinden büyük olmalıdır.',
        'file'    => ':attribute :value kilobayttan büyük olmalıdır.',
        'string'  => ':attribute :value karakterden büyük olmalıdır.',
        'array'   => ':attribute şu öğelerden daha fazla olmalı :value.',
    ],
    'gte'                  => [
        'numeric' => ':attribute :value değerinden daha büyük veya eşit olmalı.',
        'file'    => ':attribute :value kilobayttan daha büyük veya eşit olmalı.',
        'string'  => ':attribute :value karakterden daha büyük veya eşit olmalı.',
        'array'   => ':attribute şu öğeler kadar ya da daha fazla olmalı :value.',
    ],
    'exists'               => 'Seçili :attribute geçersiz.',
    'image'                => ':attribute bir resim olmalı.',
    'image_extension'      => ':attribute geçerli ve desteklenen bir resim uzantısı olmalı.',
    'in'                   => 'seçili :attribute geçersiz.',
    'integer'              => ':attribute  rakam olmalı.',
    'ip'                   => ':attribute  geçerli bir IP addresi olmalı.',
    'ipv4'                 => ':attribute  geçerli bir IPv4 addresi olmalı.',
    'ipv6'                 => ':attribute  geçerli bir IPv6 addresi olmalı.',
    'json'                 => ':attribute  geçerli bir JSON verisi olmalı.',
    'lt'                   => [
        'numeric' => ':attribute :value değerinden küçük olmalı.',
        'file'    => ':attribute :value kilobayttan küçük olmalı.',
        'string'  => ':attribute :value karakterden küçük olmalı.',
        'array'   => ':attribute şu öğelerden küçük olmalı :value.',
    ],
    'lte'                  => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'no_double_extension'  => 'The :attribute must only have a single file extension.',
    'not_in'               => 'The selected :attribute is invalid.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'url'                  => 'The :attribute format is invalid.',
    'uploaded'             => 'The file could not be uploaded. The server may not accept files of this size.',

    // Custom validation lines
    'custom' => [
        'password-confirm' => [
            'required_with' => 'Password confirmation required',
        ],
    ],

    // Custom validation attributes
    'attributes' => [],
];
