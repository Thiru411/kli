const questionsPerPage = 6;
const totalQuestions = 21;
let currentPage = 0;

const questionContainer = document.getElementById('question-container');
const errorMessage = document.getElementById('error-message');
const submitBtn = document.getElementById('submit-btn');
const resultContainer = document.getElementById('result-container');
const depressionResult = document.getElementById('depression-result');
const anxietyResult = document.getElementById('anxiety-result');
const stressResult = document.getElementById('stress-result');

document.addEventListener('DOMContentLoaded', () => {
  showPage(currentPage);
});

document.getElementById('next-btn').addEventListener('click', () => {
  if (validateCurrentPage()) {
    currentPage++;
    showPage(currentPage);
    errorMessage.textContent = ''; // Clear error message on successful validation
  }
});

document.getElementById('prev-btn').addEventListener('click', () => {
  currentPage--;
  showPage(currentPage);
});

document.getElementById('dass-form').addEventListener('submit', (e) => {
  e.preventDefault();
  if (validateCurrentPage()) {
    const formData = new FormData(document.getElementById('dass-form'));
    const answers = [];
    let allQuestionsAnswered = true;

    for (let i = 0; i < totalQuestions; i++) {
      const answer = formData.get(`question-${i}`);
      if (answer === null) {
        allQuestionsAnswered = false;
        break;
      }
      answers.push(parseInt(answer));
    }

    if (!allQuestionsAnswered) {
      document.getElementById('error-message').textContent = 'Please answer all questions.';
      document.getElementById('result-container').classList.add('hidden');
      return;
    }

    document.getElementById('error-message').textContent = '';

    const depressionScore = calculateSubscaleScore('depression', answers);
    const anxietyScore = calculateSubscaleScore('anxiety', answers);
    const stressScore = calculateSubscaleScore('stress', answers);

    displayResults(depressionScore, anxietyScore, stressScore);

    // Hide the form and show the result container
    document.getElementById('dass-form').classList.add('hidden');
    document.getElementById('result-container').classList.remove('hidden');
  }
});

document.getElementById('retake-btn').addEventListener('click', () => {
  // Show the form and hide the result container
  document.getElementById('dass-form').classList.remove('hidden');
  document.getElementById('result-container').classList.add('hidden');
  // Reset the form
  document.getElementById('dass-form').reset();
  currentPage = 0;
  showPage(currentPage);
});

// document.getElementById('buy-now-btn').addEventListener('click', () => {
// Redirect to the buy now page
//   window.location.href = 'https://www.example.com/buy-now'; // Replace with your actual buy now URL
// });

function showPage(page) {
  const start = page * questionsPerPage;
  const end = Math.min(start + questionsPerPage, totalQuestions);

  for (let i = 0; i < totalQuestions; i++) {
    const question = document.getElementById(`question-${i}`);
    if (i >= start && i < end) {
      question.style.display = 'block';
    } else {
      question.style.display = 'none';
    }
  }

  document.getElementById('prev-btn').style.display = page === 0 ? 'none' : 'inline';
  document.getElementById('next-btn').style.display = page === Math.floor(totalQuestions / questionsPerPage) ? 'none' : 'inline';
  document.getElementById('submit-btn').style.display = page === Math.floor(totalQuestions / questionsPerPage) ? 'inline' : 'none';
}

function validateCurrentPage() {
  const start = currentPage * questionsPerPage;
  const end = Math.min(start + questionsPerPage, totalQuestions);
  let isValid = true;

  for (let i = start; i < end; i++) {
    const selectElement = document.getElementById(`question-${i}-select`);
    if (selectElement.value === '') {
      isValid = false;
      document.getElementById('error-message').textContent = 'Please answer all questions on this page before proceeding.';
      break;
    }
  }
  return isValid;
}

function calculateSubscaleScore(subscale, answers) {
  const subscaleQuestions = {
    'depression': [2, 4, 9, 12, 15, 16, 20],
    'anxiety': [1, 3, 6, 8, 14, 18, 19],
    'stress': [0, 5, 7, 10, 11, 13, 17]
  };

  const subscaleIndices = subscaleQuestions[subscale];
  return subscaleIndices.reduce((total, index) => total + answers[index], 0);
}

function displayResults(depressionScore, anxietyScore, stressScore) {
  depressionResult.textContent = ` ${depressionScore} (${getSeverityLevel('depression', depressionScore)})`;
  anxietyResult.textContent = ` ${anxietyScore} (${getSeverityLevel('anxiety', anxietyScore)})`;
  stressResult.textContent = `${stressScore} (${getSeverityLevel('stress', stressScore)})`;
}

function getSeverityLevel(subscale, score) {
  const levels = {
    depression: [
      { range: [0, 9], level: 'Normal' },
      { range: [10, 13], level: 'Mild' },
      { range: [14, 20], level: 'Moderate' },
      { range: [21, 27], level: 'Severe' },
      { range: [28, Infinity], level: 'Extremely Severe' }
    ],
    anxiety: [
      { range: [0, 7], level: 'Normal' },
      { range: [8, 9], level: 'Mild' },
      { range: [10, 14], level: 'Moderate' },
      { range: [15, 19], level: 'Severe' },
      { range: [20, Infinity], level: 'Extremely Severe' }
    ],
    stress: [
      { range: [0, 14], level: 'Normal' },
      { range: [15, 18], level: 'Mild' },
      { range: [19, 25], level: 'Moderate' },
      { range: [26, 33], level: 'Severe' },
      { range: [34, Infinity], level: 'Extremely Severe' }
    ]
  };

  const subscaleLevels = levels[subscale];
  const level = subscaleLevels.find(({ range }) => score >= range[0] && score <= range[1]);
  return level ? level.level : 'Invalid Score';
}
