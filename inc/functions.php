<?php

// PHP - Random Quote Generator

// create quotes array
$quotes = array(
	array(
                'source' => 'Oscar Wilde',
                'quote' => 'Be yourself; everyone else is already taken.'
        ),
	array(
                'source' => 'Albert Einstein',
                'quote' => "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe."
        ),
	array(
                'source' => 'Frank Zappa',
                'quote' => 'So many books, so little time.'
        ),
	array(
                'source' => 'Marcus Tullius Cicero',
                'quote' => 'A room without books is like a body without a soul.'
        ),
	array(
                'source' => 'Mae West',
                'quote' => 'You only live once, but if you do it right, once is enough.'
        ),
	array(
                'source' => 'Robert Frost',
                'quote' => "In three words I can sum up everything I've learned about life: it goes on."
        ),
	array(
                'source' => 'Mark Twain',
                'quote' => "If you tell the truth, you don't have to remember anything."
        ),
);


// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote($quote_list) {
	// generate a random number between 0 and the length of the quotes list - 1
	$quote_number = rand(0, count($quote_list) - 1);
	
	// use random number to select a quote from the list
	$random_quote = $quote_list[$quote_number];

	// returns array containing source and quote
	return $random_quote;
}


function printQuote($quote_list) {
	$quote = getRandomQuote($quote_list);
	$html = '<p class="quote">' . $quote['quote'] . '</p><p class="source">' . $quote['source'] . '</p>';
	echo $html;
}


?>
