<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <style>
      /* General page styles */
      body {
        font-family: Arial, sans-serif;
        background-color: #2072c5;
        margin: 0;
        padding: 0;
      }

      /* Job Cards Container */
      div {
        display: flex;
        flex-wrap: wrap;
        gap: 24px;
        justify-content: center;
        margin: 32px 0;
      }

      /* Individual Job Card */
      div > div {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        padding: 24px 20px;
        width: 280px;
      }

      div > div h2 {
        font-size: 1.2rem;
        margin-bottom: 12px;
      }

      div > div ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      div > div ul li {
        margin-bottom: 6px;
        color: #444;
      }

      /* Categories Navigation */
      nav ul {
        display: flex;
        justify-content: center;
        gap: 18px;
        padding: 0;
        margin: 0 0 32px 0;
        list-style: none;
      }

      nav ul li {
        background: #e9ecef;
        border-radius: 6px;
        padding: 8px 16px;
        cursor: pointer;
        font-weight: 500;
      }

      /* Highlight Section */
      section {
        background: #e3f2fd;
        margin: 0 auto 32px auto;
        padding: 24px;
        max-width: 500px;
        border-radius: 10px;
        text-align: center;
      }

      section h3 {
        margin: 0 0 8px 0;
        font-size: 1.1rem;
      }

      section p {
        margin: 6px 0;
        color: #333;
      }

      /* Footer Navigation */
      header {
        background: #fff;
        border-top: 1px solid #ddd;
        padding: 16px 0;
        position: fixed;
        width: 100%;
        top: 0;
      }

      header ul {
        display: flex;
        justify-content: center;
        gap: 32px;
        list-style: none;
        margin: 0;
        padding: 0;
      }

      header ul li {
        color: #1976d2;
        font-weight: bold;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <header>
    <ul>
        <li>Home</li>
        <li>Courses</li>
        <li>Job</li>
      </ul>
    </header>
    <!-- Job Cards -->
    <div>
      <div>
        <h2>Software Developer</h2>
        <ul>
          <li>EXPRESS.JS</li>
          <li>MONGGO DB</li>
          <li>1+ Year Experience</li>
          <li>Tech-Adaptive</li>
          <li>Remote</li>
          <li>PT. Hindrakama</li>
        </ul>
      </div>
      <!-- Repeat job card as needed -->
    </div>

    <!-- Categories -->
    <nav>
      <ul>
        <li>Tech</li>
        <li>Marketing</li>
        <li>Sales</li>
        <li>Tutoring</li>
        <li>Freelance</li>
      </ul>
    </nav>

    <!-- Highlight Section -->
    <section>
      <h3>Software Engineering 🏆</h3>
      <p>Currently, the highest number of job openings in the Tech !</p>
      <p>🚀 Companies are actively hiring for roles in backend, frontend, and full-stack development</p>
    </section>

    <!-- Navigation -->
    <footer>
      
    </footer>
  </body>
</html>
