<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Menu - FAQ</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #946473;
            --background-color: #FFF5F7;
        }

        body {
            background-color: var(--background-color);
            font-family: 'Arial', sans-serif;
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .report-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .report-btn:hover {
            background-color: #7d5461;
            color: white;
        }

        .accordion-button {
            background-color: var(--primary-color) !important;
            color: white !important;
        }

        .accordion-button::after {
            filter: brightness(0) invert(1);
        }

        .accordion-button:not(.collapsed) {
            background-color: #7d5461 !important;
        }

        .accordion-item {
            margin-bottom: 10px;
            border: none;
        }

        .faq-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        /* Navbar Styles */
        .navbar {
            padding: 15px 0;
        }

        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
            font-size: 1.5rem;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            font-size: 1rem;
            margin: 0 10px;
        }

        .nav-link:hover {
            color: #fff !important;
        }
    </style>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #8B4E52; color: white;">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#">EmpowHer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Categories</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <div class="bg-light rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="text-white ms-2">Guest</span>
                </div>
            </div>
        </div>
    </nav>

    <div class="container faq-container mt-5">
        <div class="faq-header">
            <h2>Frequently Asked Questions (FAQ)</h2>
            <a href="#" class="report-btn">Report Troubles</a>
        </div>

        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                        Why am I having error uploading a file?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Common reasons for file upload errors include:
                        <ul>
                            <li>File size is too large</li>
                            <li>Unsupported file format</li>
                            <li>Poor internet connection</li>
                            <li>Server timeout</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                        How to delete my account?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        To delete your account, please follow these steps:
                        <ol>
                            <li>Go to Account Settings</li>
                            <li>Scroll to the bottom</li>
                            <li>Click on "Delete Account"</li>
                            <li>Confirm your decision</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                        How to modify my account information?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can modify your account information by:
                        <ol>
                            <li>Going to Account Settings</li>
                            <li>Click on "Edit Profile"</li>
                            <li>Update your information</li>
                            <li>Save changes</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                        How to change my profile picture?
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        To change your profile picture:
                        <ol>
                            <li>Go to your Profile</li>
                            <li>Click on your current profile picture</li>
                            <li>Select "Change Picture"</li>
                            <li>Upload a new image</li>
                            <li>Save changes</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>