const quizData = [
    {
      question: '1.Who developed Python Programming Language?',
      options: ['Wick van Rossum', ' Rasmus Lerdorf', 'Guido van Rossum', 'Niene Stom'],
      answer: 'Guido van Rossum',
    },
    {
      question: '2. Which type of Programming does Python support?',
      options: ['object-oriented programming', 'structured programming', ' functional programming', 'all of the mentioned'],
      answer: 'all of the mentioned',
    },
    {
      question: '3.Is Python case sensitive when dealing with identifiers?',
      options: ['no', 'yes', 'machine dependent', 'none of the mentioned'],
      answer: 'yes',
    },
    {
      question: '4.Is Python code compiled or interpreted?',
      options: ['Python code is both compiled and interpreted', 'Python code is neither compiled nor interpreted', ' Python code is only compiled', 'Python code is only interpreted'],
      answer: 'Python code is both compiled and interpreted',
    },
    {
      question: '5. All keywords in Python are in _________',
      options: [
        'Capitalized',
        'lower case',
        'UPPER CASE',
        'None of the mentioned',
      ],
      answer: 'None of the mentioned',
    },
    {
      question: '6. Which of the following is used to define a block of code in Python language?',
      options: ['Indentation', 'Key', ' Brackets', 'All of the mentioned'],
      answer: 'Indentation',
    },
    {
      question: '7.Which keyword is used for function in Python language?',
      options: [
        'Function',
        'def',
        ' Fun',
        'Define',
      ],
      answer: 'def',
    },
    {
      question: '8.Which of the following character is used to give single-line comments in Python?',
      options: ['//', '#', '!', '/*'],
      answer: '#',
    },
    {
      question: '9.Python supports the creation of anonymous functions at runtime, using a construct called __________',
      options: [
        'pi',
        'anonymous',
        'lambda',
        'none of the mentioned',
      ],
      answer: 'lambda',
    },
    {
      question: '10.What does pip stand for python? ',
      options: ['Pip Installs Python', 'Pip Installs Packages', 'Preferred Installer Program', ' All of the mentioned'],
      answer: 'Preferred Installer Program',
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