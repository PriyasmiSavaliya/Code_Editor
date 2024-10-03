const quizData = [
    {
      question: '1.Who invented Java Programming?',
      options: ['Guido van Rossum', 'James Gosling', 'Dennis Ritchie', 'Bjarne Stroustrup'],
      answer: 'James Gosling',
    },
    {
      question: '2.Which component is used to compile, debug and execute the java programs?',
      options: ['JIT', 'JRE', 'JVM', 'JDK'],
      answer: 'JDK',
    },
    {
      question: '3.What is the extension of java code files?',
      options: [' .js', '.txt', '.class', ' .java'],
      answer: ' .java',
    },
    {
      question: '4.Which environment variable is used to set the java path?',
      options: ['MAVEN_Path', ' JavaPATH', 'JAVA', ' JAVA_HOME'],
      answer: '/',
    },
    {
      question: '5.Which of the following is not an OOPS concept in Java?',
      options: [
        'Polymorphism',
        ' Inheritance',
        'Compilation',
        'Encapsulation',
      ],
      answer: 'Compilation',
    },
    {
      question: '6. What is the extension of compiled java classes?',
      options: ['.txt', '.js', '.class', '.java'],
      answer: '.class',
    },
    {
      question: '7.Which exception is thrown when java is out of memory?',
      options: [
        'MemoryError',
        'OutOfMemoryError',
        'MemoryOutOfBoundsException',
        'MemoryFullException',
      ],
      answer: 'OutOfMemoryError',
    },
    {
      question: '8.Which of these are selection statements in Java?',
      options: ['break', 'continue', 'for()', ' if()'],
      answer: ' if()',
    },
    {
      question: '9.Which of these keywords is used to define interfaces in Java?',
      options: [
        'interface',
        'interfaces',
        'intf',
        'int',
      ],
      answer: 'interface',
    },
    {
      question: '10.Which of the following is a superclass of every class in Java? ',
      options: ['ArrayList', 'Abstract class', 'Object class', 'String'],
      answer: 'Object class',
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