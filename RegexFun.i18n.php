<?php

/**
 * Internationalisation file of the 'Regex Fun' extension
 *
 * @since 1.0
 *
 * @file RegexFun.i18n.php
 * @ingroup RegexFun
 * @author Daniel Werner < danweetz@web.de >
 */

$messages = array();

/** English
 * @author Daniel Werner
 */
$messages['en'] = array(
	'regexfun-desc' => 'Adds parser functions allowing the use of regular expressions within wiki pages',
	'regexfun-invalid' => 'The regular expression "$1" is invalid.',
	'regexfun-limit-exceed' => 'Maximum of {{PLURAL:$1|$1 "Regex Fun" regular expression handling|$1 "Regex Fun" regular expression handlings}} reached.',
);

/** Message documentation (Message documentation)
 * @author Daniel Werner
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'regexfun-desc' => '{{desc|name=Regex Fun|url=http://www.mediawiki.org/wiki/Extension:Regex_Fun}}',
	'regexfun-invalid' => 'Used as error message. Parameters:
* $1 - invalid regular expression',
	'regexfun-limit-exceed' => 'Used as error message. Parameters:
* $1 - the in <code>LocalSettings.php</code> defined limit of total Regex Fun function calls (per parser process) dealing with regular expressions',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'regexfun-desc' => 'Amiesta funciones analítiques que permiten usar espresiones regulares nes páxines wiki',
	'regexfun-invalid' => 'La espresión regular "$1" ye inválida.',
	'regexfun-limit-exceed' => 'Se llegó al númberu máximu {{PLURAL:$1|d\'una xestión d\'espresiones regulares "Regex Fun"|de $1 xestiones d\'espresiones regulares "Regex Fun"}}.',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'regexfun-desc' => 'Дадае функцыі парсэра для карыстаньня рэгулярных выразаў на вікістаронках',
	'regexfun-invalid' => 'Рэгулярны выраз «$1» няслушны.',
	'regexfun-limit-exceed' => 'Дасягнутае абмежаваньне ў $1 {{PLURAL:$1|выклік|выклікі|выклікаў}} функцыяў Regex Fun.',
);

/** Czech (česky)
 * @author Reaperman
 */
$messages['cs'] = array(
	'regexfun-desc' => 'Přidává funkce parseru, které umožňují používat regulární výrazy na stránkách wiki',
	'regexfun-invalid' => 'Regulární výraz „$1“ je neplatný.',
);

/** German (Deutsch)
 * @author Daniel Werner
 * @author Kghbln
 */
$messages['de'] = array(
	'regexfun-desc' => 'Ergänzt Parserfunktionen, die die Verwendung regulärer Ausdrücke auf Wikiseiten ermöglichen',
	'regexfun-invalid' => '„$1“ ist kein gültiger regulärer Ausdruck.',
	'regexfun-limit-exceed' => 'Die maximale Anzahl von {{PLURAL:$1|einem verarbeitbaren regulären Ausdruck|$1 verarbeitbaren regulären Ausdrücken}} ist erreicht.',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'regexfun-desc' => 'Pśidawa parserowe funkcije, kótarež dowóluju wužywanje regularnych wurazow na wikibokach',
	'regexfun-invalid' => 'Regularny wuraz "$1" jo njepłaśiwy.',
	'regexfun-limit-exceed' => 'Maksimalna licba {{PLURAL:$1|$1 pśez "Regex Fun" wobźěłanego regularnego wuraza|$1 pśez "Regex Fun" wobźěłaneju regularneju wurazowu|$1 pśez "Regex Fun" wobźěłanych regularnych wurazow|$1 pśez "Regex Fun" wobźěłanych regularnych wurazow}} jo dojśpjona.',
);

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'regexfun-desc' => 'Añade funciones del analizador (parser) que permiten el uso de expresiones regulares en las páginas wiki',
	'regexfun-invalid' => 'La expresión regular "$1" no es válida.',
	'regexfun-limit-exceed' => 'Se ha alcanzado el número máximo {{PLURAL:$1|de una manipulación de expresión regular "Regex Fun"|de $1 manipulaciones de expresiones regulares "Regex Fun"}}.',
);

/** Persian (فارسی)
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'regexfun-desc' => 'توابع تجزیه‌کننده‌ای را می‌افزاید که قابلیت استفاده از عبارت‌های باقاعده را در صفحه‌های ویکی می‌دهد',
	'regexfun-invalid' => 'عبارت باقاعدهٔ «$1» نامعتبر است',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'regexfun-desc' => "Ajoute les fonctions d'analyse permettant l'utilisation d'expressions régulières dans les pages du wiki",
	'regexfun-invalid' => 'L\'expression régulière "$1" n\'est pas valide.',
	'regexfun-limit-exceed' => 'Le nombre maximal de {{PLURAL:$1|$1 gestion d\'expression régulière "Regex Fun"|$1 gestions d\'expression régulière "Regex Fun"}} a été atteint.',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'regexfun-desc' => 'Engade funcións analíticas que permiten o uso de expresións regulares nas páxinas wiki',
	'regexfun-invalid' => 'A expresión regular "$1" non é válida.',
	'regexfun-limit-exceed' => 'Atinxiuse o número máximo {{PLURAL:$1|dunha manipulación de expresión regular "Regex Fun"|de $1 manipulacións de expresións regulares "Regex Fun"}}.',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'regexfun-desc' => 'הוספת פונקציות מפענח שמפאשרפות שימוש בביטויים רגולריים בדפי ויקי',
	'regexfun-invalid' => 'הביטוי הרגולרי "$1" אינו תקין.',
	'regexfun-limit-exceed' => 'בוצע מספר מרבי של {{PLURAL:$1|טיפולים בביטויים רגולריים של "Regex Fun"}}',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'regexfun-desc' => 'Přidawa parserowe funkcije, kotrež wužiwanje regularnych wurazow na wikistronach dowoleja',
	'regexfun-invalid' => 'Regularny wuraz "$1" je njepłaćiwy.',
	'regexfun-limit-exceed' => 'Maksimalna ličba {{PLURAL:$1|$1 přez "Regex Fun" wobdźěłaneho regularneho wuraza|$1 přez "Regex Fun" wobdźěłaneju regularneju wurazow|$1 přez "Regex Fun" wobdźěłanych regularnych wurazow|$1 přez "Regex Fun" wobdźěłanych regularnych wurazow}} je docpěta.',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'regexfun-desc' => 'Adder functiones al analysator syntactic que permitte le uso de expressiones regular intra paginas wiki',
	'regexfun-invalid' => 'Le expression regular "$1" es invalide.',
	'regexfun-limit-exceed' => 'Le maximo de $1 {{PLURAL:$1|processamento|processamentos}} de expression regular "Regex Fun" ha essite attingite.',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'regexfun-desc' => "Aggiunge funzioni parser che permettono l'uso di espressioni regolari nelle pagine wiki",
	'regexfun-invalid' => 'L\'espressione regolare "$1" non è valida.',
	'regexfun-limit-exceed' => 'Il massimo di {{PLURAL:$1|$1 espressione regolare "Regex Fun" gestita|$1 espressioni regolari "Regex Fun" gestite}} raggiunto.',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Shirayuki
 */
$messages['ja'] = array(
	'regexfun-desc' => 'ウィキページ内で正規表現の使用を可能にするパーサー関数を追加する',
	'regexfun-invalid' => '正規表現「$1」は正しくありません。',
	'regexfun-limit-exceed' => 'Regex Fun の{{PLURAL:$1|正規表現処理の最大数 $1}} に達しました。',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'regexfun-desc' => '위키 문서 안에 정규 표현식의 사용을 허용하는 파서 함수 추가',
	'regexfun-invalid' => '"$1" 정규 표현식은 잘못되었습니다.',
	'regexfun-limit-exceed' => '{{PLURAL:$1|"정규표현 함수" 정규 표현식 처리의 최대 $1개}}에 도달했습니다.',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'regexfun-desc' => 'Bränk Funxjuhne en et Wiki, öm rejolähr Ußdrök en Wiki-Sigge bruche ze künne.',
	'regexfun-invalid' => '„$1“ es kein jölteje rejolähre Ußdrok.',
	'regexfun-limit-exceed' => 'Et {{PLURAL:$1|es mieh wi eine Oproof|sinn_er mieh wi $1 Oproofe|es keine Oproof}} för rejolähr Ußdrök ze verärbeide en heh dä Sigg opjetrodde. Dat es ze vill.',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'regexfun-desc' => 'Додава парсерски функции што овозможуваат употреба на регуларни изрази во вики-страници',
	'regexfun-invalid' => 'Регуларниот израз „$1“ е неважечки.',
	'regexfun-limit-exceed' => '{{PLURAL:$1|Достигнат е максимумот од $1 регуларен израз сработен со „Regex Fun“.|Достигнат е максимумот од $1 регуларни изрази сработени со „Regex Fun“.}}',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'regexfun-desc' => 'Menambahkan fungsi-fungsi penghurai yang membolehkan penggunaan ungkapan nalar dalam laman wiki',
	'regexfun-invalid' => 'Ungkapan nalar "$1" tidak sah.',
	'regexfun-limit-exceed' => 'Had maksimum $1 kendalian ungkapan nalar "Regex Fun" dicapai.',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Event
 */
$messages['nb'] = array(
	'regexfun-desc' => 'Legg til parserfunksjoner som tillater bruk av regulæruttrykk på wikisider',
	'regexfun-invalid' => 'Regulæruttrykket "$1" er ugyldig.',
	'regexfun-limit-exceed' => 'Maksimalt antall håndteringer på {{PLURAL:$1|$1 "Regex Fun"-regulæruttrykk|$1 "Regex Fun"-regulæruttrykk}} er nådd.',
);

/** Dutch (Nederlands)
 * @author Siebrand
 * @author Tjcool007
 */
$messages['nl'] = array(
	'regexfun-desc' => "Voegt parserfuncties toe die mogelijk maken om reguliere expressies te gebruiken in wikipagina's",
	'regexfun-invalid' => 'De reguliere expressie "$1" is ongeldig.',
	'regexfun-limit-exceed' => 'Het maximale aantal van {{PLURAL:$1|$1|$1}} af te handelen reguliere expressies is bereikt.',
);

/** Polish (polski)
 * @author BeginaFelicysym
 */
$messages['pl'] = array(
	'regexfun-desc' => 'Dodaje funkcje parsera umożliwiające korzystanie z wyrażeń regularnych na stronach wiki',
	'regexfun-invalid' => 'Wyrażenie regularne "$1" jest nieprawidłowe.',
	'regexfun-limit-exceed' => 'Osiągnięto maksimum  {{PLURAL:$1|$1 obsługiwanego wyrażenia regularnego "Regex Fun"|$1 obsługiwanych wyrażeń regularnych "Regex Fun"|$1 obsługiwanych wyrażeń regularnych "Regex Fun"}}.',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'regexfun-desc' => "A gionta le funsion d'anàlisi ch'a përmëtto l'usagi d'espression regolar andrinta a le pàgine wiki",
	'regexfun-invalid' => 'L\'espression regoar "$1" a l\'é pa bon-a.',
	'regexfun-limit-exceed' => 'Rivà al màssim ëd {{PLURAL:$1|$1 gestor d\'espression regolar "Regex Fun"|$1 gestor d\'espression regolar "Regex Fun"}}.',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'regexfun-desc' => "Aggiunge funziune analizzatrice pe permettere l'ause de le espressiune regolare jndr'à le pàggene de uicchi",
	'regexfun-invalid' => 'L\'espressione regolare "$1" jè invalide.',
	'regexfun-limit-exceed' => 'Massime de {{PLURAL:$1|$1 "Regex Fun" gestione de espressione regolare|$1 "Regex Fun" gestione de espressiune regolare}} raggiunde.',
);

/** Russian (русский)
 * @author Haffman
 */
$messages['ru'] = array(
	'regexfun-invalid' => 'Регулярное выражение "$1" неверно.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'regexfun-desc' => 'Nagdaragdag ng mga tungkuling pambangkay na nagpapahintulot sa paggamit ng karaniwang mga pagpapahayag sa loob ng mga pahina ng wiki',
	'regexfun-invalid' => 'Hindi katanggap-tanggap ang karaniwang pagpapahayag na "$1".',
	'regexfun-limit-exceed' => 'Naabot na ang pinaka mataas na {{PLURAL:$1|$1 na paghawak ng karaniwang pagpapahayag ng "Regex Fun"|$1 na mga paghawak ng karaniwang pagpapahayag ng "Regex Fun"}}',
);

/** Ukrainian (українська)
 * @author Ата
 */
$messages['uk'] = array(
	'regexfun-desc' => 'Додає парсерні функції, що дозволяють використовувати регулярні вирази у вікі-сторінках',
	'regexfun-invalid' => 'Регулярний вираз "$1" є неприпустимим.',
	'regexfun-limit-exceed' => 'Досягнуто максимум {{PLURAL:$1|$1 "Regex Fun" звернення до регулярного виразу|$1 "Regex Fun" звернень до регулярного виразу}}.',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'regexfun-desc' => '增加解析器函数，允许在wiki页面里使用正则表达式',
	'regexfun-invalid' => '正则表达式“$1”无效。',
	'regexfun-limit-exceed' => '正则表达式超过“Regex Fun”的最大值限制$1。',
);
