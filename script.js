// Typing Effect
const textArray = ["I am a Web Developer", "I am a UI/UX Designer", "I am an IT Student"];
let textIndex = 0;
let charIndex = 0;
const typingSpeed = 100;
const delayBetweenTexts = 2000;

function typeText() {
  const currentText = textArray[textIndex];
  const typedTextElement = document.getElementById("typed-text");

  if (charIndex < currentText.length) {
    typedTextElement.textContent += currentText.charAt(charIndex);
    charIndex++;
    setTimeout(typeText, typingSpeed);
  } else {
    setTimeout(eraseText, delayBetweenTexts);
  }
}

function eraseText() {
  const typedTextElement = document.getElementById("typed-text");

  if (charIndex > 0) {
    typedTextElement.textContent = typedTextElement.textContent.slice(0, -1);
    charIndex--;
    setTimeout(eraseText, typingSpeed);
  } else {
    textIndex = (textIndex + 1) % textArray.length;
    setTimeout(typeText, typingSpeed);
  }
}

document.addEventListener("DOMContentLoaded", () => {
  typeText();
});



// Navbar Scroll Effect
let lastScrollTop = 0;
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
  let scrollTop = window.scrollY || document.documentElement.scrollTop;
  if (scrollTop > lastScrollTop) {
    // Scroll Down
    navbar.classList.add('hidden');
  } else {
    // Scroll Up
    navbar.classList.remove('hidden');
  }
  lastScrollTop = scrollTop;
});
// Chatbot Toggle Logic
document.getElementById('chatbot-toggle').addEventListener('click', () => {
    document.getElementById('chatbot-container').style.display = 'block';
  });
  
  document.getElementById('chatbot-close').addEventListener('click', () => {
    document.getElementById('chatbot-container').style.display = 'none';
  });
  
  // Sending Messages
  document.getElementById('send-btn').addEventListener('click', sendMessage);
  document.getElementById('chatbot-input').addEventListener('keypress', (e) => {
    if (e.key === 'Enter') sendMessage();
  });
  
  function sendMessage() {
    const inputField = document.getElementById('chatbot-input');
    const userMessage = inputField.value.trim();
    if (userMessage === '') return;
  
    displayMessage(userMessage, 'user-message');
    inputField.value = '';
  
    // Handle chatbot response
    setTimeout(() => {
      const botResponse = generateBotResponse(userMessage);
      displayMessage(botResponse, 'bot-message');
    }, 500);
  }
  
  function displayMessage(message, className) {
    const messageDiv = document.createElement('div');
    messageDiv.className = `message ${className}`;
    messageDiv.textContent = message;
    document.getElementById('chatbot-messages').appendChild(messageDiv);
    document.getElementById('chatbot-messages').scrollTop = document.getElementById('chatbot-messages').scrollHeight;
  }
  
  function generateBotResponse(userMessage) {
    // Example responses; can be customized
    const lowerMessage = userMessage.toLowerCase();
    if (lowerMessage.includes('skills')) return 'Here are my skills: JavaScript, React, Node.js, and more.';
    if (lowerMessage.includes('experience')) return 'I have experience in web and app development.';
    if (lowerMessage.includes('portfolio')) return 'You can view my portfolio in the Portfolio section.';
    if (lowerMessage.includes('contact')) return 'Feel free to contact me at my email or phone!';
    if (lowerMessage.includes('linkedin')) return 'To know more about me, you can visit my Linkedin profile:.';
    return 'I cannot recognize it. I am here to help. Please type one word as possible.';
    
  }
  
  function sendSuggestedMessage(message) {
    document.getElementById('chatbot-input').value = message;
    sendMessage();
  }
  window.addEventListener("load", function() {
    document.body.classList.add("fade-in");

    
  });