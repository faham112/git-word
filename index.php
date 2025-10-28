<?php get_header(); ?>

    <div class="container">
        <main id="primary" class="site-main">
            <section id="about" class="about-section">
                <h2>About Me</h2>
                <p>Hello! I'm a web developer with a passion for creating beautiful and functional websites. I specialize in front-end development, bringing ideas to life with clean and efficient code. I'm always eager to learn new technologies and improve my skills.</p>
                <p>When I'm not coding, you can find me exploring new design trends, reading tech blogs, or enjoying a good cup of coffee.</p>
            </section>

            <section id="portfolio" class="portfolio-section">
                <h2>My Work</h2>
                <div class="portfolio-grid">
                    <div class="portfolio-item">
                        <h3>Project One</h3>
                        <p>A description of Project One, highlighting key features and technologies used.</p>
                        <a href="#" class="button">View Project</a>
                    </div>
                    <div class="portfolio-item">
                        <h3>Project Two</h3>
                        <p>A description of Project Two, highlighting key features and technologies used.</p>
                        <a href="#" class="button">View Project</a>
                    </div>
                    <div class="portfolio-item">
                        <h3>Project Three</h3>
                        <p>A description of Project Three, highlighting key features and technologies used.</p>
                        <a href="#" class="button">View Project</a>
                    </div>
                </div>
            </section>

            <section id="contact" class="contact-section">
                <h2>Get in Touch</h2>
                <p>Have a project in mind or just want to say hello? Feel free to reach out!</p>
                <form class="contact-form">
                    <p>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </p>
                    <p>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </p>
                    <p>
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </p>
                    <p>
                        <button type="submit" class="button">Send Message</button>
                    </p>
                </form>
            </section>
        </main>
    </div>

<?php get_footer(); ?>
