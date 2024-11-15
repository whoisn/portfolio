<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link your CSS file here -->
    <style>
        /* Navbar Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #1e1f29;
            padding: 15px 30px;
            color: #f1c40f;
            font-family: 'Arial', sans-serif;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .logo {
            font-size: 25px;
            font-weight: bold;
        }
     
        .nav-links {
            display: flex;
            gap: 20px;
            font-size: 13px;
        }
        .nav-links li {
            display: inline;
        }
        .nav-links a {
            color: #f1c40f;
            text-decoration: none;
            font-size: 1.2em;
            transition: color 0.3s ease;
        }
        .nav-links a:hover {
            color: #d4ac0d;
        }
        /* Adjust page top padding to account for the fixed navbar */
        body {
            margin: 0;
            padding-top: 70px; /* Adjust this if the navbar height changes */
            font-family: 'Arial', sans-serif;
        }
        /* Portfolio Section */
        .portfolio-section {
            padding: 80px 20px;
            color: #f1c40f;
            text-align: center;
            background-color: #1e1f29;
        }
        .portfolio-section h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .project-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 15px;
        }
        .project-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }
        .project-item:hover {
            transform: scale(1.05);
        }
        .project-item img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }
        .project-item img:hover {
            transform: scale(1.1);
        }
        .project-details {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            color: #f1c40f;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .project-item:hover .project-details {
            opacity: 1;
        }
        .project-details h3 {
            margin-bottom: 10px;
        }
        .view-more-btn {
            background-color: #f1c40f;
            border: none;
            color: #1e1f29;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 3s ease;
        }
        .view-more-btn:hover {
            background-color: #d4ac0d;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.8);
            background-color: #1e1f29;
            color: #f1c40f;
            padding: 20px;
            border-radius: 8px;
            z-index: 1000;
            width: 80%;
            max-width: 800px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.4s ease, transform 0.4s ease;
        }
        .modal.show {
            display: block;
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }
        .modal.hide {
            opacity: 0;
            transform: translate(-50%, -50%) scale(0.8);
            transition: opacity 0.4s ease, transform 0.4s ease;
        }
        .modal-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .modal-images {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            position: relative;
        }
        .modal-images img {
            max-width: 100%;
            border-radius: 8px;
            transition: transform 0.5s ease;
        }
        .modal-navigation {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        .modal-navigation button {
            background-color: #f1c40f;
            border: none;
            color: #1e1f29;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            font-size: 0.9em;
            transition: background-color 1s ease, transform 0.3s ease;
        }
        .modal-navigation button:hover {
            background-color: #d4ac0d;
            transform: scale(1.05);
        }
        .modal-close {
            background-color: #e74c3c;
            padding: 8px 16px;
            margin-top: 20px;
            transition: background-color 2s ease;
        }
        .modal-close:hover {
            background-color: #c0392b;
        }

        /* Education Section */
        .education-section {
            padding: 80px 20px;
            background-color: #343542;
            color: #f1c40f;
            text-align: center;
        }

        .education-section h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .timeline {
            position: relative;
            max-width: 600px;
            margin: 0 auto;
        }

        .timeline-item {
            position: relative;
            background: #282a36;
            margin: 20px 0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.3);
            transition: transform 0.4s ease;
            cursor: pointer;
            opacity: 0;
            transform: translateY(30px);
        }

        .timeline-item.visible {
            opacity: 1;
            transform: translateY(0);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .timeline-item:hover {
            transform: scale(1.05);
        }

        .timeline-item h3 {
            font-size: 1.5em;
            color: #00ffff;
        }

        .timeline-item h4 {
            font-size: 1.2em;
            margin-bottom: 10px;
            color: #f1c40f;
        }

        .timeline-item p {
            font-size: 1em;
            line-height: 1.5;
            color: #f1f1f1;
        }

        /* Connector Line */
        .timeline:before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 4px;
            height: 100%;
            background: #00ffff;
            transform: translateX(-50%);
        }

        .timeline-item:before {
            content: '';
            position: absolute;
            top: 50%;
            left: -20px;
            width: 12px;
            height: 12px;
            background-color: #00ffff;
            border-radius: 50%;
            transform: translateY(-50%);
            transition: transform 0.5s ease;
        }

        /* Animation classes for scroll */
        .hidden {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        .visible {
            opacity: 1;
            transform: translateY(0);
        }
        .navbar a {
            text-decoration: none;
        }
        /* Zoom-in animation */
.zoom-in {
    transform: scale(0.8);
    opacity: 0;
    animation: zoomInEffect 1.2s ease forwards;
}

@keyframes zoomInEffect {
    from {
        transform: scale(0.8);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

.resume-section {
        text-align: center;
        margin: 50px 0;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .resume-section.visible {
        opacity: 1;
        transform: translateY(0);
    }
    .section-title {
        font-size: 2rem;
        color: #f1c40f;
        margin-bottom: 10px;
    }
    .resume-intro {
        font-size: 1.1rem;
        color: #ddd;
        margin-bottom: 20px;
        max-width: 600px;
        margin: 0 auto 20px auto;
    }
    .resume-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 20px;
    }
    .view-resume-btn, .download-resume-btn {
        background-color: #f1c40f;
        color: #1e1f29;
        border: none;
        padding: 12px 20px;
        font-size: 1rem;
        cursor: pointer;
        border-radius: 8px;
        transition: transform 0.3s, background-color 0.3s;
    }
    .view-resume-btn:hover, .download-resume-btn:hover {
        background-color: #d4a60b;
        transform: scale(1.05);
    }

    /* Modal Overlay Styling */
    .resume-modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }
    .resume-modal-overlay.show {
        display: flex;
        animation: fadeIn 0.5s ease;
    }
    .resume-modal-content {
        background: #1e1f29;
        border-radius: 10px;
        padding: 20px;
        width: 80%;
        max-width: 800px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        transform: scale(0.8);
        animation: zoomIn 0.4s ease forwards;
    }
    .resume-iframe {
        border: none;
        border-radius: 8px;
    }
    .modal-close {
        background: #f1c40f;
        color: #1e1f29;
        border: none;
        padding: 10px 15px;
        font-size: 1rem;
        cursor: pointer;
        border-radius: 8px;
        margin-top: 20px;
        transition: background-color 0.3s;
    }
    .modal-close:hover {
        background-color: #d4a60b;
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    @keyframes zoomIn {
        from {
            transform: scale(0.8);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }


    .fade-in {
    animation: fadeIn 1s ease-in-out forwards;
    animation-play-state: running;
}
.zoom-in {
    animation: zoomIn 1s ease-in-out forwards;
    animation-play-state: running;
}
.hidden {
    opacity: 0;
    transform: scale(0.8);
}
.visible {
    opacity: 1;
    transform: scale(1);
    animation-play-state: running;
}


/* Modal Styling */
.modal {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0.8); /* Start smaller for opening animation */
    background-color: #1e1f29;
    color: #f1c40f;
    width: 80%;
    max-width: 700px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    z-index: 1000;
    opacity: 0; /* Start transparent for fade-in */
    transition: opacity 0.4s ease, transform 0.4s ease; /* Controls open and close animations */
}
.modal.show {
    display: block; /* Ensure modal is visible */
    opacity: 1; /* Fully opaque */
    transform: translate(-50%, -50%) scale(1); /* Scale to full size */
}
.modal.hide {
    opacity: 0;
    transform: translate(-50%, -50%) scale(0.8); /* Shrinks and fades out */
}
.modal-content {
    position: relative;
    padding: 20px;
}
.modal-images {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}
.modal-images img {
    max-width: 100%;
    border-radius: 8px;
    opacity: 0;
    transition: opacity 0.5s ease, transform 0.5s ease;
}
.modal-prev, .modal-next {
    position: absolute;
    top: 50%;
    font-size: 2rem;
    color: #f1c40f;
    background: none;
    border: none;
    cursor: pointer;
}
.modal-prev {
    left: 10px;
}
.modal-next {
    right: 10px;
}
.modal-description {
    text-align: center;
    margin-top: 20px;
}
.modal-close {
    background-color: #e74c3c;
    border: none;
    color: white;
    padding: 10px 20px;
    margin-top: 20px;
    cursor: pointer;
}
.modal-images img.showing {
    opacity: 1;
    transform: scale(1);
}
.modal-images img.fade-out {
    opacity: 0;
    transform: scale(0.8);
}

/* Responsive Burger Menu for Mobile */
    .burger-menu {
      display: none;
      flex-direction: column;
      cursor: pointer;
      gap: 5px;
    }

    .burger-menu div {
      width: 25px;
      height: 3px;
      background-color: #f1c40f;
      transition: 0.3s;
    }
    /* .nav-links.active {
      display: none;
      flex-direction: column;
      position: absolute;
      top: 60px;
      right: 10px;
      background-color: #1e1f29;
      padding: 20px;
      border-radius: 8px;
      z-index: 1000;
    } */

    @media (max-width: 768px) {
        .nav-links {
        display: none; /* Hide by default on mobile */
        flex-direction: column;
        position: absolute;
        top: 60px;
        right: 10px;
        background-color: #1e1f29;
        padding: 20px;
        border-radius: 8px;
        z-index: 1000;
    }


    /* Show nav-links when active */
    .nav-links.active {
        display: flex;
    }

    /* Display burger menu icon on mobile */
    .burger-menu {
        display: flex;
        flex-direction: column;
        gap: 5px;
        cursor: pointer;
    }
}
@media (max-width: 768px) {
    .portfolio-section h2, .education-section h2, .resume-section h2 {
        font-size: 1.8em;
    }

    .project-item img, .modal-images img {
        max-width: 100%;
        height: auto;
    }

    .timeline {
        padding: 20px;
        max-width: 100%;
    }

    .resume-iframe {
        height: 400px;
    }
}



    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar">
    <a href="index.php"><div class="logo">Niel.</div></a>
    
    <div class="burger-menu" id="burgerMenu" onclick="toggleMenu()">
      <div></div>
      <div></div>
      <div></div>
    </div>

    <ul class="nav-links" id="navLinks">
        <li><a href="#projects">Projects</a></li>
        <li><a href="#education">Education</a></li>
        <li><a href="#resumeSection">Resume</a></li>
    </ul>
</nav>

<!-- Portfolio Section -->
<div class="main-content zoom-in">
<div class="portfolio-section" id="projects">
    <h2>Projects</h2>
    <div class="project-gallery">
        <div class="project-item" onclick="showProjectDetails(0)">
            <img src="image/portfolio.png" alt="Project 1">
            <div class="project-details">
                <h3>Portfolio Website</h3>
                <button class="view-more-btn">View More</button>
            </div>
        </div>
        <div class="project-item" onclick="showProjectDetails(1)">
            <img src="image/BHMS.png" alt="Project 2">
            <div class="project-details">
                <h3>Simple BHMS</h3>
                <button class="view-more-btn">View More</button>
            </div>
        </div>
        <div class="project-item" onclick="showProjectDetails(2)">
            <img src="image/javascript.png" alt="Project 3">
            <div class="project-details">
                <h3>POS</h3>
                <button class="view-more-btn">View More</button>
            </div>
        </div>
</div>
    </div>
</div>

<!-- Education Section -->
<div class="education-section" id="education">
    <h2>Education & Experiences</h2>
    <div class="timeline">
        <div class="timeline-item hidden" data-year="2021">
            <div class="timeline-content">
                <h3>2021</h3>
                <h4>Senior High School</h4>
                <p>Graduated at Nova Schola Tanauan. An (STEM) student graudated with honors and some leadership achievements. </p>
            </div>
        </div>
        <div class="timeline-item hidden" data-year="2022">
            <div class="timeline-content">
                <h3>2025</h3>
                <h4>College</h4>
                <p>Graduate at Batangas State University. An IT Student major in Business Analytics and has some achivements (Dean Lister).</p>
            </div>
        </div>
        <div class="timeline-item hidden" data-year="2023">
            <div class="timeline-content">
                <h3>2025</h3>
                <h4>Internship</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
</div>


<!-- Resume Section -->
<div class="resume-section" id="resumeSection">
    <h2 class="section-title">Resume</h2>
    <p class="resume-intro">A snapshot of my experience, skills, and qualifications.</p>
    <div class="resume-buttons">
        <button class="view-resume-btn" onclick="viewResume()">View Resume</button>
        <a href="resume.pdf" download="Niel_C_Resume.pdf">
            <button class="download-resume-btn">Download Resume</button>
        </a>
    </div>
</div>

<!-- Resume Modal with Overlay -->
<div id="resumeModal" class="resume-modal-overlay">
    <div class="resume-modal-content">
        <iframe src="resume.pdf" width="100%" height="600px" class="resume-iframe"></iframe>
        <button class="modal-close" onclick="closeResume()">Close</button>
    </div>
</div>

<script>
    // Scroll Animation for Education Section


    window.addEventListener("load", function() {
    document.querySelector(".main-content").classList.add("zoom-in");
});
    const timelineItems = document.querySelectorAll('.timeline-item');

    function checkVisibility() {
        timelineItems.forEach(item => {
            const rect = item.getBoundingClientRect();
            if (rect.top < window.innerHeight - 50) {
                item.classList.add('visible');
            }
        });
    }
    

    window.addEventListener('scroll', checkVisibility);
    window.addEventListener('load', checkVisibility);


    function viewResume() {
        document.getElementById('resumeModal').classList.add('show');
    }

    function closeResume() {
        document.getElementById('resumeModal').classList.remove('show');
    }

// Resume Section Scroll Animation
    const resumeSection = document.getElementById('resumeSection');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                resumeSection.classList.add('visible');
            } else {
                resumeSection.classList.remove('visible');
            }
        });
    }, { threshold: 0.5 });

    observer.observe(resumeSection);

    // Modal functions
    function viewResume() {
        document.getElementById('resumeModal').classList.add('show');
    }

    function closeResume() {
        document.getElementById('resumeModal').classList.remove('show');
    }

    let currentProject = 0;
let currentImageIndex = 0;
const projectData = [
    {
        title: "Portfolio Website",
        details: "Details about the Portfolio Website project.",
        images: ["image/facebook.png", "image/javascript.png", "image/htmls.png"]
    },
    {
        title: "Simple BHMS",
        details: "Details about the Simple BHMS project.",
        images: ["image/bhms1.png", "image/bhms2.png", "image/bhms3.png"]
    },
    {
        title: "POS",
        details: "Details about the POS project.",
        images: ["image/pos1.png", "image/pos2.png", "image/pos3.png"]
    }
];

function showProjectDetails(projectIndex) {
    currentProject = projectIndex;
    currentImageIndex = 0;
    document.getElementById("modalTitle").textContent = projectData[projectIndex].title;
    document.getElementById("modalDetails").textContent = projectData[projectIndex].details;
    updateModalImage();
    
    const modal = document.getElementById("projectModal");
    modal.style.display = "block"; // Make the modal visible
    setTimeout(() => { 
        modal.classList.add("show");
        modal.classList.remove("hide"); // Triggers the open animation
    }, 10); // Short delay to ensure CSS transition applies
}

function closeModal() {
    const modal = document.getElementById("projectModal");
    modal.classList.add("hide"); // Start the close animation
    modal.classList.remove("show");
    
    // After animation, fully hide the modal
    setTimeout(() => {
        modal.style.display = "none"; // Fully remove from view after animation
    }, 400); // Matches the CSS transition duration
}


function updateModalImage() {
    const modalImage = document.getElementById("modalImage");
    modalImage.classList.remove("showing");
    modalImage.classList.add("fade-out");

    setTimeout(() => {
        modalImage.src = projectData[currentProject].images[currentImageIndex];
        modalImage.classList.remove("fade-out");
        modalImage.classList.add("showing");
    }, 500); // Matches the CSS transition duration for image fade-out
}

function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % projectData[currentProject].images.length;
    updateModalImage();
}

function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + projectData[currentProject].images.length) % projectData[currentProject].images.length;
    updateModalImage();
}

// Auto-slide functionality
setInterval(() => {
    if (document.getElementById("projectModal").classList.contains("show")) {
        nextImage();
    }
}, 3000); // Slide every 3 seconds


function toggleMenu() {
    const navLinks = document.getElementById('navLinks');
    navLinks.classList.toggle('active'); // Toggle 'active' class to show/hide nav-links
}



</script>

</body>
<!-- Project Modal -->
<div id="projectModal" class="modal">
    <div class="modal-content">
        <div class="modal-images">
            <button class="modal-prev" onclick="prevImage()">&#10094;</button>
            <img id="modalImage" src="" alt="Project Image">
            <button class="modal-next" onclick="nextImage()">&#10095;</button>
        </div>
        <div class="modal-description">
            <h3 id="modalTitle">Project Title</h3>
            <p id="modalDetails">Project details will appear here.</p>
        </div>
        <button class="modal-close" onclick="closeModal()">Close</button>
    </div>
</div>

</html>
