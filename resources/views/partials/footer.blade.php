<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #f5f5f5;
        }

        footer {
            background: #ffffff;
            padding: 60px 0 0;
            color: #2d3748;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .footer-main {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr 0.8fr 1.5fr;
            gap: 60px;
            margin-bottom: 50px;
        }

        .footer-column h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #000000;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 14px;
        }

        .footer-column ul li a {
            color: #4a5568;
            text-decoration: none;
            font-size: 15px;
            transition: color 0.3s ease;
            line-height: 1.6;
        }

        .footer-column ul li a:hover {
            color: #00ffcc;
        }

        .logo-column {
            display: flex;
            flex-direction: column;
        }

        .logo {
            margin-bottom: 30px;
        }

        .logo img {
            height: 45px;
        }

        .contact-column {
            background: #e8eaed;
            padding: 40px 35px;
            border-radius: 0;
            margin: -60px -40px 0 0;
            padding-right: 40px;
        }

        .contact-column h3 {
            font-size: 22px;
            margin-bottom: 20px;
        }

        .contact-buttons {
            display: flex;
            gap: 12px;
            margin-bottom: 25px;
        }

        .btn {
            padding: 14px 28px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .btn-outline {
            background: white;
            color: #000000;
            border: 2px solid #d1d5db;
        }

        .btn-outline:hover {
            border-color: #000000;
        }

        .btn-primary {
            background: #023c2d;
            color: white;
            border-radius: 23px;
            border: none;
        }

        .btn-primary:hover {
            background-color: #00ffcc;
            color: #000000;
            border-color:#00ffcc;
        }

        .btn-primary::after {
            content: '→';
            margin-left: 8px;
            font-size: 18px;
        }

        .contact-phone {
            display: flex;
            align-items: center;
            color: #000000;
            font-size: 16px;
            margin-bottom: 35px;
            font-weight: 500;
        }
        .contact-email {
            display: flex;
            align-items: center;
            color: #000000;
            font-size: 16px;
            margin-bottom: 35px;
            font-weight: 500;
        }

        .contact-phone::before {
            content: '📞';
            margin-right: 10px;
            font-size: 18px;
        }
        .contact-email::before {
            content: '📧';
            margin-right: 10px;
            font-size: 18px;
        }


        .newsletter h4 {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 18px;
            color: #000000;
            line-height: 1.5;
        }

        .newsletter-subtitle {
            font-size: 14px;
            color: #4a5568;
            margin-bottom: 15px;
        }

        .newsletter-form {
            display: flex;
            gap: 0;
            margin-bottom: 12px;
        }

        .newsletter input {
            flex: 1;
            padding: 13px 16px;
            border: 1px solid #d1d5db;
            border-right: none;
            border-radius: 4px 0 0 4px;
            font-size: 14px;
        }

        .newsletter button {
            padding: 13px 24px;
            background: white;
            border: 1px solid #d1d5db;
            border-radius: 0 4px 4px 0;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 18px;
        }

        .newsletter button:hover {
            background: #f3f4f6;
        }

        .privacy-notice {
            font-size: 12px;
            color: #6b7280;
            display: flex;
            align-items: flex-start;
            gap: 8px;
        }

        .privacy-notice input {
            margin-top: 3px;
        }

        .privacy-notice a {
            color: #6b7280;
            text-decoration: underline;
        }

        .social-section {
            margin-top: 35px;
        }

        .social-section h4 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #000000;
        }

        .social-links {
            display: flex;
            gap: 12px;
            list-style: none;
        }

        .social-links a {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border-radius: 4px;
            color: #1a202c;
            font-size: 20px;
            transition: all 0.3s ease;
            text-decoration: none;
            border: 1px solid #d1d5db;
        }

        .social-links a:hover {
            background: #f3f4f6;
            transform: translateY(-2px);
        }

        .footer-bottom {
            border-top: 1px solid #e5e7eb;
            padding: 25px 0;
            display: flex;
            flex-direction: column;   /* stack text + links */
            justify-content: center;
            align-items: center;
            text-align: center;
            gap: 12px;
            font-size: 13px;
            color: #6b7280;
            width: 100%;
        }


        .footer-bottom-links {
            display: flex;
            gap: 25px;
            list-style: none;
        }

        .footer-bottom-links a {
            color: #6b7280;
            text-decoration: none;
        }

        .footer-bottom-links a:hover {
            color: #1a202c;
        }

        @media (max-width: 1200px) {
            .footer-main {
                grid-template-columns: 1fr 1fr;
                gap: 40px;
            }

            .contact-column {
                grid-column: 1 / -1;
                margin: 40px 0 0 0;
            }
        }

        @media (max-width: 768px) {
            .footer-main {
                grid-template-columns: 1fr;
            }

            .contact-buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .footer-bottom-links {
                flex-direction: column;
                gap: 10px;

            }
        }
    </style>
</head>
<body>
<footer>
    <div class="container">
        <div class="footer-main">
            <div class="footer-column logo-column">

                <h3>Discover CodeXpress.</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Methodologies</a></li>
                    <li><a href="#">Technologies</a></li>
                    <li><a href="#">Certifications</a></li>
                    <li><a href="#">Software Development Services</a></li>
                    <li><a href="#">Software Development Solutions</a></li>
                    <li><a href="#">Dedicated Software Development Teams</a></li>
                    <li><a href="#">Staff Augmentation</a></li>
                    <li><a href="#">Software Development Outsourcing</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Resources.</h3>
                <ul>
                    <li><a href="#">Case Studies</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Industries Insights</a></li>
                    <li><a href="#">Technology Resource Center</a></li>
                    <li><a href="#">Client Referral Program</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Careers.</h3>
                <ul>
                    <li><a href="#">Job Opportunities</a></li>
                    <li><a href="#">Talent Referrals</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <div class="contact-column">
                    <h3>Get in touch.</h3>
                    <div class="contact-buttons">
                        <a href="#" class="btn btn-outline">Contact Us</a>
                        <a href="#" class="btn btn-primary">Schedule a Call</a>
                    </div>
                    <div class="contact-phone">+94 777 674 308</div>
                    <div class="contact-email">codexpress12info@gmail.com</div>

                    <div class="newsletter">
                        <h4>Get insights from the experts on building and scaling technology teams.</h4>
                        <p class="newsletter-subtitle">Your e-mail address</p>
                        <div class="newsletter-form">
                            <input type="email" placeholder="name@email.com">
                            <button>✉</button>
                        </div>
                        <div class="privacy-notice">
                            <input type="checkbox" id="privacy">
                            <label for="privacy">By subscribing I accept the <a href="#">Privacy Policy</a>.</label>
                        </div>
                    </div>

                    <div class="social-section">
                        <h4>Follow us.</h4>
                        <ul class="social-links">
                            <li><a href="#" title="LinkedIn">in</a></li>
                            <li><a href="#" title="Facebook">f</a></li>
                            <li><a href="#" title="Twitter">𝕏</a></li>
                            <li><a href="#" title="Instagram">📷</a></li>
                            <li><a href="#" title="YouTube">▶</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div>CodeXpress 2009 - 2025. All rights reserved.</div>
            <ul class="footer-bottom-links">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Do Not Sell My Personal Information</a></li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>
