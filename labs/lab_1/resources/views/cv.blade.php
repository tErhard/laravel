<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Резюме</title>
    <style>
        /* Global Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #3c3f41;
            color: #869299;
            line-height: 1.5;
            padding: 1rem;
        }

        /* Header Styles */
        header {
            text-align: center;
            padding: 2rem;
            background-color: #2b2b2b;
            color: #869299;
        }

        header h1 {
            margin-bottom: 1rem;
        }

        header p {
            font-size: 1.2rem;
        }

        /* Section Styles */
        section {
            margin: 2rem 0;
        }

        section h2 {
            margin-bottom: 1rem;
        }

        section ul {
            list-style-type: none;
        }

        section ul li {
            padding: 0.5rem;
            border: 1px solid #313335;
            margin-bottom: 0.5rem;
            background-color: #313335;
        }

        /* Media Queries */
        @media (max-width: 600px) {
            header h1 {
                font-size: 2rem;
            }

            header p {
                font-size: 1rem;
            }

            section ul li {
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
<header>
    <h1>Telinger Erhard Mark</h1>
    <p>Contact info:
        +380994548474,
        telinher.erhard-mark@student.uzhnu.edu.ua</p>
</header>
<main>
    <section class="section">
        <h2>Work experience</h2>
        <ul>
            <li>
                <h3>Alva commerce, Junior Laravel Developer</h3>
            </li>
        </ul>
    </section>
    <section class="section">
        <h2>Education</h2>
        <ul>
            <li>
                <h3>UzhNU</h3>
                <p>Faculty: Mathematics and digital technologies</p>
                <p>Speciality: System analysis</p>
                <p>Graduation year: 2025</p>
            </li>
        </ul>
    </section>
</main>
</body>
</html>
