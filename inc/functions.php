<?php

// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = array(
	array(
                'name' => 'Oscar Wilde',
                'quote' => 'Be yourself; everyone else is already taken.'
        ),
	array(
                'name' => 'Albert Einstein',
                'quote' => "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe."
        ),
	array(
                'name' => 'Frank Zappa',
                'quote' => 'So many books, so little time.'
        ),
	array(
                'name' => 'Marcus Tullius Cicero',
                'quote' => 'A room without books is like a body without a soul.'
        ),
	array(
                'name' => 'Mae West',
                'quote' => 'You only live once, but if you do it right, once is enough.'
        ),
	array(
                'name' => 'Robert Frost',
                'quote' => "In three words I can sum up everything I've learned about life: it goes on."
        ),
	array(
                'name' => 'Mark Twain',
                'quote' => "If you tell the truth, you don't have to remember anything."
        ),
);


// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote($quote_list) {
	$quote_number = rand(0, count($quote_list) - 1);
	return $quote_number;
}


// Create the printQuote funtion and name it printQuote
function printQuote($quote_list) {
	$quote_number = getRandomQuote($quote_list);
	$selection = $quote_list[$quote_number];
	return $selection;	
}

?>
