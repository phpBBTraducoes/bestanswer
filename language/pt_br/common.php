<?php
/**
 *
 * Best Answer extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, kinerity, https://www.layer-3.org/
 * @license GNU General Public License, version 2 (GPL-2.0)
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.0] (https://github.com/phpBBTraducoes)
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ANSWERS'	=> 'Respostas',

	'ENABLE_ANSWER'			=> 'Ativar melhor resposta',
	'ENABLE_ANSWER_EXPLAIN'	=> 'Se ativado, o autor do tópico (se permitido) e os moderadores (quando permitido) poderão marcar um post do tópico como a melhor resposta.',

	'TO_POST'	=> 'Ir para o post completo',

	'LOG_MARK_ANSWER'	=> '<strong>Post marcado como melhor resposta</strong><br />» %1$s por %2$s',
	'LOG_UNMARK_ANSWER'	=> '<strong>Post desmarcado como melhor resposta</strong><br />» %1$s por %2$s',

	'MARK_ANSWER'			=> 'Marcar resposta',
	'MARK_ANSWER_CONFIRM'	=> 'Você tem certeza que deseja marcar esse post como a melhor resposta?',

	'TOTAL_ANSWERS'	=> 'Total de respostas',

	'UNMARK_ANSWER'			=> 'Desmarcar resposta',
	'UNMARK_ANSWER_CONFIRM'	=> 'Você tem certeza que deseja desmarcar esse post como a melhor resposta?',
));
