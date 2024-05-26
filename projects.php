<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรเจคขณะเรียน - นายเมธัส เขตอนันต์</title>
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
            max-width: 1200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem 0;
        }
        
        .intro {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .intro-image img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 1rem;
        }
        
        .summary, .featured-projects, .contact-info {
            width: 100%;
            text-align: center;
            margin-bottom: 2rem;
        }
        
        h1, h2 {
            margin-bottom: 1rem;
        }
        
        .featured-projects ul {
            list-style: none;
            padding: 0;
        }
        
        .featured-projects li {
            margin-bottom: 0.5rem;
        }
        
        .featured-projects a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s;
        }
        
        .featured-projects a:hover {
            color: #007BFF;
        }
        
        /* Projects styles */
        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            width: 100%;
            margin-bottom: 2rem;
        }
        
        .project-card {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1.5rem;
            text-align: center;
        }
        
        .project-card h2 {
            margin-bottom: 0.5rem;
            color: #333;
        }
        
        .project-card p {
            margin-bottom: 1rem;
            color: #555;
        }
        
        .project-link {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }
        
        .project-link:hover {
            color: #0056b3;
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
        <section class="projects">
            <div class="project-card">
                <h2>โปรเจคระบบขายเครื่องกรองนํ้า A&P</h2>
                <p>เว็บไซต์สำหรับการขายเครื่องกรองน้ำบริษัท A&P เครื่องกรองน้ำยี่ห้อแชมป์ และอุปกรณ์ต่าง ๆ ที่เกี่ยวกับเครื่องกรองน้ำ</p>
                <a href="https://champ.itsvc.dev" class="project-link">รายละเอียดเพิ่มเติม</a>
            </div>
            <!-- <div class="project-card">
                <h2>โปรเจคเว็บไซต์ขายสินค้าออนไลน์</h2>
                <p>โปรเจคนี้เป็นการพัฒนาเว็บไซต์สำหรับการขายสินค้าออนไลน์ โดยมีฟังก์ชันในการเพิ่มสินค้าไปยังตะกร้า, การชำระเงิน, และการติดตามสถานะการสั่งซื้อ</p>
                <a href="project.php#project2" class="project-link">รายละเอียดเพิ่มเติม</a>
            </div> -->
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 นายเมธัส เขตอนันต์. สงวนลิขสิทธิ์.</p>
            <ul class="footer-nav">
                <li><a href="privacy.php">นโยบายความเป็นส่วนตัว</a></li>
                <li><a href="terms.php">ข้อกำหนดในการให้บริการ</a></li>
                <li><a href="contact.php">ติดต่อเรา</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
