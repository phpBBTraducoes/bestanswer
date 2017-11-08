<?php
/**
 *
 * Best Answer. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, kinerity
 * @license GNU General Public License, version 2 (GPL-2.0)
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.0-dev] (https://github.com/phpBBTraducoes)
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
	'ANSWERS'	=> 'Answers',

	'BEST_ANSWER'	=> 'Melhor resposta',
	'BUTTON_MARK'	=> 'Marcar resposta',
	'BUTTON_UNMARK'	=> 'Desmarcar resposta',

	'ENABLE_BESTANSWER'			=> 'Ativar melhor resposta',
	'ENABLE_BESTANSWER_EXPLAIN'	=> 'Se ativado, o iniciador do tópico (se permitido) e os moderadores (quando permitido) poderão marcar uma resposta tópica como a melhor resposta.',

	'FULL_POST'	=> 'VÁ AO POST COMPLETO',

	'INVALID_FILTER'	=> 'O parâmetro do filtro é inválido. Verifique se esta variável está correta.',

	'LOG_MARK_ANSWER'	=> '<strong>Postagem marcada como melhor resposta</strong><br />» %1$s por %2$s',
	'LOG_UNMARK_ANSWER'	=> '<strong>Postagem desmarcada como melhor resposta</strong><br />» %1$s por %2$s',

	'MARK_ANSWER'			=> 'Marcar a postagem como melhor resposta',
	'MARK_ANSWER_CONFIRM'	=> 'Tem certeza de que deseja marcar esta postagem como a melhor resposta?',

	'SEARCH_USER_ANSWERS'	=> 'Pesquisar respostas do usuário',

	'TOPIC_FIRST_POST'	=> 'Você não pode marcar esta postagem como a melhor resposta, pois é a primeira postagem do tópico.',
	'TOTAL_ANSWERES'	=> 'Total de respostas',

	'UNMARK_ANSWER'			=> 'Desmarcar a postagem como melhor resposta',
	'UNMARK_ANSWER_CONFIRM'	=> 'Tem certeza de que deseja desmarcar essa postagem como a melhor resposta?',
));
