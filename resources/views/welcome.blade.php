<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dern-Support</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'figtree', sans-serif;
            background-color: #F8F8F8;
        }

        .container {
            
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .logo {
            margin-bottom: 20px;
        }

        h1 {
            font-size: 36px;
            color: #333333;
        }

        p {
            font-size: 18px;
            color: #666666;
            line-height: 1.5;
        }

        .book-ticket {
            display: inline-block;
            margin-top: 20px;
            background-color: #1E40AF;
            color: #FFFFFF;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .book-ticket:hover {
            background-color: #1A237E;
        }

        .faq {
            margin-top: 40px;
        }

        .faq h2 {
            font-size: 30px;
            color: #333333;
            margin-bottom: 20px;
        }

        .faq h3 {
            font-size: 24px;
            color: #333333;
            margin-top: 30px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .faq h3:hover {
            color: #1E40AF;
        }

        .faq li {
            font-size: 18px;
            color: #666666;
            margin-bottom: 10px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .faq li:hover {
            color: #1E40AF;
        }

        .answer {
            display: none;
            font-size: 18px;
            color: #666666;
            margin-bottom: 20px;
        }

        .answer.show {
            display: block;
        }
        .category{
          text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
          <img src="{{ asset('images/th.jpeg') }}" width="50" height="50" alt="Logo">
        </div>
        <h1 style="text-decoration: underline; text-decoration-color: #31547a;">Welcome to Dern-Support</h1>

        <p>We are here to help you with your software and hardware problems. Our dedicated team of experts is ready to assist you in resolving technical issues and providing solutions tailored to your needs.</p>
        <a href="{{ route('login') }}" class="book-ticket">Book Ticket</a>
        <div class="faq">
            <h2>Frequently Asked Questions</h2>
            <div class="category" >
                <h3>Software Problems</h3>
                <ul>
                    <li class="question">How do I install a software program?</li>
                    <div class="answer">To install a software program, follow these steps:</div>
                    <li class="question">What should I do if my computer freezes?</li>
                    <div class="answer">If your computer freezes, try the following troubleshooting steps:</div>
                    <li class="question">How can I update my software to the latest version?</li>
                    <div class="answer">To update your software to the latest version, follow these instructions:</div>
                </ul>
            </div>
            <div class="category">
                <h3>Hardware Problems</h3>
                <ul>
                    <li class="question">My printer is not working. How can I troubleshoot it?</li>
                    <div class="answer">If your printer is not working, try the following troubleshooting steps:</div>
                    <li class="question">What should I do if my laptop won't turn on?</li>
                    <div class="answer">If your laptop won't turn on, try these troubleshooting steps:</div>
                    <li class="question">How can I connect my computer to a Wi-Fi network?</li>
                    <div class="answer">To connect your computer to a Wi-Fi network, follow these instructions:</div>
                </ul>
            </div                
            <div class="category" >
                    <h3 style="text-align: left">General Questions</h3>
                    <ul style="text-align: left">
                        <li class="question">How can I contact customer support?</li>
                        <div class="answer">You can contact our customer support team by phone or email. Our contact information can be found on our website.</div>
                        <li class="question">What are your business hours?</li>
                        <div class="answer">Our business hours are from 9am to 5pm, Monday to Friday.</div>
                        <li class="question">Do you offer on-site repairs?</li>
                        <div class="answer">Yes, we offer on-site repairs for certain hardware issues. Please contact our customer support team for more information.</div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Add event listeners to questions
        const questions = document.querySelectorAll('.question');
        questions.forEach(question => {
            question.addEventListener('click', () => {
                question.nextElementSibling.classList.toggle('show');
            });
        });
    </script>
</body>
</html>