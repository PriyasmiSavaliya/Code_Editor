const quizData = [
    {
      question: '1.Who is the father of C language?',
      options: ['Steve Jobs',' James Gosling',' Dennis Ritchie ','Rasmus Lerdorf'],
      answer: 'Dennis Ritchie',
    },
    {
      question: '2. All keywords in C are in ____________',
      options: ['LowerCase letters', 'UpperCase letters', 'CamelCase letters', ' None of the mentioned'],
      answer: ' None of the mentioned',
    },
    {
      question: '3.Which is valid C expression?',
      options: ['int my_num = 100,000;', 'int my_num = 100000;', ' int my num = 1000;', 'int $my_num = 10000;'],
      answer: 'int my_num = 100000;',
    },
    {
      question: '4.Which of following is not accepted in C?',
      options: ['static a = 10;', 'static int func (int);', 'static static int a;', 'all of the mentioned'],
      answer: 'static static int a;',
    },
    {
      question: '5. Functions in C Language are always _________',
      options: [
        ' Internal',
        'External',
        'Both Internal and External',
        'External and Internal are not valid terms for functions',
      ],
      answer: 'External',
    },
    {
      question: '6.What is #include <stdio.h>?',
      options: ['Preprocessor directive', 'Inclusion directive', 'File inclusion directive', ' None of the mentioned'],
      answer: 'Preprocessor directive',
    },
    {
      question: '7.Which of the following are C preprocessors?',
      options: [
        '#ifdef',
        '#define',
        '#endif',
        'all of the mentioned',
      ],
      answer: 'all of the mentioned',
    },
    {
      question: '8.The C-preprocessors are specified with _________ symbol.',
      options: ['#', '$', '""', '&'],
      answer: '#',
    },
    {
      question: '9.What is the sizeof(char) in a 32-bit C compiler?',
      options: [
        '1 bit',
        '2 bits',
        '1 Byte',
        '2 Bytes',
      ],
      answer: '1 Byte',
    },
    {
      question: '10.scanf() is a predefined function in______header file ',
      options: ['stdlib. h', 'ctype. h', 'stdio. h', 'stdarg. h'],
      answer: 'stdio. h',
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
    questionElement.innerHTML = questionData.question;
  
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
    quizContainer.appendChild(questionNum);
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