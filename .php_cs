<?php

$rules = [
    '@PSR2' => true,
    'align_multiline_comment' => [
        'comment_type' => 'all_multiline',
    ],
    'array_syntax' => [
        'syntax' => 'short',
    ],
    'binary_operator_spaces' => [
        'default' => 'single_space',
    ],
    'blank_line_after_opening_tag' => true,
    'blank_line_before_statement' => [
        'statements' => ['break', 'continue', 'declare', 'return', 'throw', 'try'],
    ],
    'cast_spaces' => [
        'space' => 'none',
    ],
    'concat_space' => [
        'spacing' => 'one',
    ],
    'explicit_string_variable' => true,
    'function_typehint_space' => true,
    'include' => true,
    'lowercase_cast' => true,
    'magic_constant_casing' => true,
    'multiline_whitespace_before_semicolons' => [
        'strategy' => 'no_multi_line',
    ],
    'native_function_casing' => true,
    'new_with_braces' => true,
    'no_blank_lines_after_class_opening' => true,
    'no_blank_lines_after_phpdoc' => true,
    'no_empty_comment' => true,
    'no_empty_phpdoc' => true,
    'no_empty_statement' => true,
    'no_leading_namespace_whitespace' => true,
    'no_mixed_echo_print' => [
        'use' => 'echo',
    ],
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'no_spaces_around_offset' => [
        'positions' => ['inside', 'outside'],
    ],
    'no_trailing_comma_in_list_call' => true,
    'no_trailing_comma_in_singleline_array' => true,
    'no_unneeded_control_parentheses' => [
        'statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield'],
    ],
    'no_unused_imports' => true,
    'no_useless_else' => true,
    'no_useless_return' => true,
    'no_whitespace_before_comma_in_array' => true,
    'no_whitespace_in_blank_line' => true,
    'normalize_index_brace' => true,
    'object_operator_without_whitespace' => true,
    'ordered_imports' => [
        'sortAlgorithm' => 'alpha',
    ],
    'php_unit_fqcn_annotation' => true,
    'phpdoc_add_missing_param_annotation' => [
        'only_untyped' => true,
    ],
    'phpdoc_align' => [
        'tags' => ['param', 'return', 'throws', 'type', 'var'],
        'align' => 'left',
    ],
    'phpdoc_annotation_without_dot' => true,
    'phpdoc_indent' => true,
    'phpdoc_inline_tag' => true,
    'phpdoc_no_alias_tag' => [
        'replacements' => ['property-read' => 'property', 'property-write' => 'property', 'type' => 'var', 'link' => 'see'],
    ],
    'phpdoc_no_empty_return' => true,
    'phpdoc_no_useless_inheritdoc' => true,
    'phpdoc_order' => true,
    'phpdoc_return_self_reference' => [
        'replacements' => ['this' => '$this', '@this' => '$this', '$self' => 'self', '@self' => 'self', '$static' => 'static', '@static' => 'static'],
    ],
    'phpdoc_scalar' => true,
    'phpdoc_separation' => true,
    'phpdoc_single_line_var_spacing' => true,
    'phpdoc_to_comment' => true,
    'phpdoc_trim' => true,
    'phpdoc_types' => true,
    'return_type_declaration' => [
        'space_before' => 'none',
    ],
    'semicolon_after_instruction' => true,
    'short_scalar_cast' => true,
    'simplified_null_return' => true,
    'single_blank_line_before_namespace' => true,
    'single_line_comment_style' => [
        'comment_types' => ['hash'],
    ],
    'single_quote' => true,
    'space_after_semicolon' => [
        'remove_in_empty_for_expressions' => true,
    ],
    'standardize_not_equals' => true,
    'ternary_operator_spaces' => true,
    'trailing_comma_in_multiline_array' => true,
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
    'whitespace_after_comma_in_array' => true,
];

$fixer = PhpCsFixer\Config::create()
    ->setRules($rules)
    ->setLineEnding("\n")
    ->setUsingCache(false);

$fixer
    ->getFinder()
    ->in(['code']);

return $fixer;
