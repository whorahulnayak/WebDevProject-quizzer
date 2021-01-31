(function() {
	var questions = [
		{
			question: 'What movie won the first Oscar for the new category of Best Animated Feature Film?',
			choices: [
				'The Incredibles (2004)',
				'WALL-E (2008)',
				'Shrek (2001)',
				'Toy Story (1995)',
				'Ice Age (2002)'
			],
			correctAnswer: 2
		},
		{
			question: 'For which of these movies did Leonardo DiCaprio win an Oscar for Best Actor?',
			choices: [ 'Titanic', 'Inception', 'The Wolf of Wall Street', 'The Revenant', 'Blood Diamond' ],
			correctAnswer: 3
		},
		{
			question: 'Who perfroms the most on-screen kills in the Lord of The Rings movies?',
			choices: [ 'Gimli', 'Legolas', 'Boromir', 'Frodo', 'Aragorn' ],
			correctAnswer: 1
		},
		{
			question: 'How many Oscars did the 1994 movie Forrest Gump win?',
			choices: [ 2, 4, 3, 9, 6 ],
			correctAnswer: 4
		},
		{
			question: 'What are the claws of Wolverine made of?',
			choices: [ 'Titanium', 'Vibranium', 'Adamantium', 'Cadmium', 'Osmium' ],
			correctAnswer: 2
		}
	];
	// quiz4
	var questionCounter = 0; //Tracks question number
	var selections = []; //Array containing user choices
	var quiz = $('#quiz'); //Quiz div object

	// Display initial question
	displayNext();

	// Click handler for the 'next' button
	$('#next').on('click', function(e) {
		e.preventDefault();

		// Suspend click listener during fade animation
		if (quiz.is(':animated')) {
			return false;
		}
		choose();

		// If no user selection, progress is stopped
		if (isNaN(selections[questionCounter])) {
			alert('Please make a selection!');
		} else {
			questionCounter++;
			displayNext();
		}
	});

	// Click handler for the 'prev' button
	$('#prev').on('click', function(e) {
		e.preventDefault();

		if (quiz.is(':animated')) {
			return false;
		}
		choose();
		questionCounter--;
		displayNext();
	});

	// Click handler for the 'Start Over' button
	$('#start').on('click', function(e) {
		e.preventDefault();

		if (quiz.is(':animated')) {
			return false;
		}
		questionCounter = 0;
		selections = [];
		displayNext();
		$('#start').hide();
	});

	// Animates buttons on hover
	$('.button').on('mouseenter', function() {
		$(this).addClass('active');
	});
	$('.button').on('mouseleave', function() {
		$(this).removeClass('active');
	});

	// Creates and returns the div that contains the questions and
	// the answer selections
	function createQuestionElement(index) {
		var qElement = $('<div>', {
			id: 'question'
		});

		var header = $('<h1 class="question">Question ' + (index + 1) + ':</h1>');
		qElement.append(header);

		var question = $('<h2>').append(questions[index].question);
		qElement.append(question);

		var radioButtons = createRadios(index);
		qElement.append(radioButtons);

		return qElement;
	}

	// Creates a list of the answer choices as radio inputs
	function createRadios(index) {
		var radioList = $('<ul>');
		var item;
		var input = '';
		for (var i = 0; i < questions[index].choices.length; i++) {
			item = $('<li class="choice-container">');
			input = '<input type="radio" name="answer" value=' + i + ' />';
			input += questions[index].choices[i];
			item.append(input);
			radioList.append(item);
		}
		return radioList;
	}

	// Reads the user selection and pushes the value to an array
	function choose() {
		selections[questionCounter] = +$('input[name="answer"]:checked').val();
	}

	// Displays next requested element
	function displayNext() {
		quiz.fadeOut(function() {
			$('#question').remove();

			if (questionCounter < questions.length) {
				var nextQuestion = createQuestionElement(questionCounter);
				quiz.append(nextQuestion).fadeIn();
				if (!isNaN(selections[questionCounter])) {
					$('input[value=' + selections[questionCounter] + ']').prop('checked', true);
				}

				// Controls display of 'prev' button
				if (questionCounter === 1) {
					$('#prev').show();
				} else if (questionCounter === 0) {
					$('#prev').hide();
					$('#next').show();
				}
				var scoreElem;
			} else {
				scoreElem = displayScore();
				quiz.append(scoreElem).fadeIn();
				$('#next').hide();
				$('#prev').hide();
				$('#start').show();
			}
		});
	}

	// Computes score and returns a paragraph element to be displayed
	function displayScore() {
		var score = $('<h3>', { id: 'question' }); //not needed at the moment

		var numCorrect = 0;
		for (var i = 0; i < selections.length; i++) {
			if (selections[i] === questions[i].correctAnswer) {
				numCorrect++;
			}
		}

		score.append('You got ' + numCorrect + ' questions out of ' + questions.length + ' right!!!');
		return score;
	}
})();
