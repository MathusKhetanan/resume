<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ติดต่อเรา - นายเมธัส เขตอนันต์</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <style>/* Reset and base styles */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }
        
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 1rem 0;
            width: 100%;
        }
        
        .container {
            width: 90%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .brand {
            font-size: 1.5rem;
            text-decoration: none;
            color: #fff;
        }
        
        .nav-list {
            list-style: none;
            display: flex;
        }
        
        .nav-list li {
            margin-left: 1.5rem;
        }
        
        .nav-list a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s;
        }
        
        .nav-list a:hover {
            color: #ddd;
        }
        
        /* Main content styles */
        .main-content {
            flex: 1;
            width: 90%;
            max-width: 800px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem 0;
        }
        
        h1 {
            margin-bottom: 1rem;
        }
        
        p {
            margin-bottom: 1.5rem;
            text-align: center;
            color: #555;
        }
        
        /* Contact form styles */
        .contact-section {
            width: 100%;
            max-width: 600px;
            background: #f9f9f9;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .contact-form {
            width: 100%;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #007BFF;
        }
        
        button {
            background: #007BFF;
            color: #fff;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        button:hover {
            background: #0056b3;
        }
        
        /* Footer styles */
        .footer {
            background-color: #050505;
            padding: 20px 0;
            width: 100%;
            text-align: center;
            margin-top: auto;
        }
        
        .footer p {
            margin: 0;
            color: #6c757d;
        }
        
        .footer-nav {
            list-style: none;
            padding: 0;
            margin: 10px 0 0;
            display: flex;
            justify-content: center;
        }
        
        .footer-nav li {
            margin: 0 10px;
        }
        
        .footer-nav a {
            color: #6c757d;
            text-decoration: none;
        }
        
        .footer-nav a:hover {
            text-decoration: underline;
        }
        </style>
    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="brand">นายเมธัส เขตอนันต์</a>
            <ul class="nav-list">
                <li><a href="index.php">หน้าแรก</a></li>
                <li><a href="information.php">ข้อมูลครอบครัว</a></li>
                <li><a href="projects.php">โปรเจคขณะเรียน</a></li>
                <li><a href="contact.php">ติดต่อเรา</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        <section class="contact-section">
            <h1>ติดต่อเรา</h1>
            <p>หากคุณมีคำถามหรือข้อเสนอแนะใด ๆ สามารถติดต่อเราได้ผ่านฟอร์มด้านล่างนี้:</p>
            <form class="contact-form" action="#" method="post">
                <div class="form-group">
                    <label for="name">ชื่อ:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">อีเมล:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">ข้อความ:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">ส่งข้อความ</button>
            </form>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 MyProfile. สงวนลิขสิทธิ์.</p>
            <ul class="footer-nav">
                <li><a href="privacy.php">นโยบายความเป็นส่วนตัว</a></li>
                <li><a href="terms.php">ข้อกำหนดในการให้บริการ</a></li>
                <li><a href="contact.php">ติดต่อเรา</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
