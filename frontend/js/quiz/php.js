const quizData = [
    {
      question: '1.What does PHP stand for?',
      options: ['PHP stands for Preprocessor Home Page', 'PHP stands for Pretext Hypertext Processor', 'PHP stands for Hypertext Preprocessor', 'PHP stands for Personal Hyper Processor'],
      answer: 'PHP stands for Hypertext Preprocessor',
    },
    {
      question: '2. Which of the following is the default file extension of PHP files?',
      options: ['.php', ' .ph', ' .xml', ' .html'],
      answer: '.php',
    },
    {
      question: '3.Which is the right way of declaring a variable in PHP?',
      options: ['$3hello', '$_hello', '$this', '$5_Hello'],
      answer: '$5_Hello',
    },
    {
      question: '4. A function in PHP which starts with __ (double underscore) is known as __________',
      options: ['Default Function', 'User Defined Function', 'Inbuilt Function', 'Magic Function'],
      answer: 'Magic Function',
    },
    {
      question: '5.Which one of the following PHP function is used to determine a file’s last access time?',
      options: [
        'filetime()',
        ' fileatime()',
        ' fileltime()',
        'filectime()',
      ],
      answer: ' fileatime()',
    },
    {
      question: '6.PHP recognizes constructors by the name _________',
      options: ['function __construct()', ' function _construct()', 'classname()', '_construct()'],
      answer: 'function __construct()',
    },
    {
      question: '7.What does PDO stand for?',
      options: [
        'PHP Database Orientation',
        'PHP Data Orientation',
        'PHP Data Object',
        'PHP Database Object',
      ],
      answer: 'PHP Data Object',
    },
    {
      question: '8.If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?',
      options: ['1', '5', '12', ' Error'],
      answer: '5',
    },
    {
      question: '9.How to define a function in PHP?',
      options: [
        'functionName(parameters) {function body}',
        'function {function body}',
        ' function functionName(parameters) {function body}',
        'data type functionName(parameters) {function body}',
      ],
      answer: ' function functionName(parameters) {function body}',
    },
    {
      question: '10.Which PHP statement will give output as $x on the screen? ',
      options: ['echo “\$x”;', 'echo “$$x”;', 'echo “/$x”;', 'echo “$x;”;'],
      answer: 'echo “\$x”;',
    },
  ];
  
  const quizContainer = document.getElementById('quiz');
  const resultContainer = document.getElementById('result');
  const submitButton = document.getElementById('submit');
  const retryButton = document.getElementById('retry');
  const showAnswerButton = document.getElementById('showAnswer');
  
  let currentQuestion = 0;
  let score = 0;
  let incorrectAnswers = [];
  
  function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
    }
  }
  
  function displayQuestion() {
    const questionData = quizData[currentQuestion];
    const totalQuestions = quizData.length;

    const questionNumber = currentQuestion + 1; // Question number starts from 1

    const questionNum = document.createElement('div');
    questionNum.className = 'question-number';
    questionNum.textContent = `Question ${questionNumber} out of ${totalQuestions}`;

    const questionElement = document.createElement('div');
    questionElement.className = 'question';
    questionElement.textContent = questionData.question;

    const optionsElement = document.createElement('div');
    optionsElement.className = 'options';

    const shuffledOptions = [...questionData.options];
    shuffleArray(shuffledOptions);

    for (let i = 0; i < shuffledOptions.length; i++) {
        const option = document.createElement('label');
        option.className = 'option';

        const radio = document.createElement('input');
        radio.type = 'radio';
        radio.name = 'quiz';
        radio.value = shuffledOptions[i];

        const optionText = document.createTextNode(shuffledOptions[i]);

        option.appendChild(radio);
        option.appendChild(optionText);
        optionsElement.appendChild(option);
    }

    quizContainer.innerHTML = '';
    quizContainer.appendChild(questionNum); // Append question number
    quizContainer.appendChild(questionElement);
    quizContainer.appendChild(optionsElement);
}
  
  function checkAnswer() {
    const selectedOption = document.querySelector('input[name="quiz"]:checked');
    if (selectedOption) {
      const answer = selectedOption.value;
      if (answer === quizData[currentQuestion].answer) {
        score++;
      } else {
        incorrectAnswers.push({
          question: quizData[currentQuestion].question,
          incorrectAnswer: answer,
          correctAnswer: quizData[currentQuestion].answer,
        });
      }
      currentQuestion++;
      selectedOption.checked = false;
      if (currentQuestion < quizData.length) {
        displayQuestion();
      } else {
        displayResult();
      }
    }
  }
  
  function displayResult() {
    quizContainer.style.display = 'none';
    submitButton.style.display = 'none';
    retryButton.style.display = 'inline-block';
    showAnswerButton.style.display = 'inline-block';
    resultContainer.innerHTML = `You scored ${score} out of ${quizData.length}!`;
  }
  
  function retryQuiz() {
    currentQuestion = 0;
    score = 0;
    incorrectAnswers = [];
    quizContainer.style.display = 'block';
    submitButton.style.display = 'inline-block';
    retryButton.style.display = 'none';
    showAnswerButton.style.display = 'none';
    resultContainer.innerHTML = '';
    displayQuestion();
  }
  
  function showAnswer() {
    quizContainer.style.display = 'none';
    submitButton.style.display = 'none';
    retryButton.style.display = 'inline-block';
    showAnswerButton.style.display = 'none';
  
    let incorrectAnswersHtml = '';
    for (let i = 0; i < incorrectAnswers.length; i++) {
      incorrectAnswersHtml += `
        <p>
          <strong>Question:</strong> ${incorrectAnswers[i].question}<br>
          <strong>Your Answer:</strong> ${incorrectAnswers[i].incorrectAnswer}<br>
          <strong>Correct Answer:</strong> ${incorrectAnswers[i].correctAnswer}
        </p>
      `;
    }
  
    resultContainer.innerHTML = `
      <p>You scored ${score} out of ${quizData.length}!</p>
      <p>Incorrect Answers:</p>
      ${incorrectAnswersHtml}
    `;
  }
  
  submitButton.addEventListener('click', checkAnswer);
  retryButton.addEventListener('click', retryQuiz);
  showAnswerButton.addEventListener('click', showAnswer);
  
  displayQuestion();