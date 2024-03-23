<script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
<title>Blog</title>
@include('partials.navbar')

<header>
        <h1>Blog</h1>
    </header>
    <main>
        <article class="blog-post">
            <h2>Choosing the Right Laptop for Your Major</h2>
 <p>Not all majors have the same requirements when it comes to laptops. When choosing a laptop for your major, it's essential to consider the specific software, computing power, and portability needs associated with your field of study.</p>            <a href="#" class="view-more" onclick="showFullPost(this)">View More</a>
            <div class="full-post">
<p>For example, if you're majoring in graphic design or architecture, you'll likely need a laptop with a high-resolution display, powerful graphics card, and ample storage for design software such as Adobe Creative Suite or AutoCAD. On the other hand, if you're studying computer science or programming, you'll prioritize a laptop with a fast processor, plenty of RAM, and compatibility with development environments like Visual Studio Code or IntelliJ IDEA.</p>
            <p>Additionally, consider the portability factor. If you're constantly on the go between classes or campus, you'll want a lightweight and compact laptop that can easily fit into your backpack without weighing you down.</p>                <!-- More content goes here -->
            </div>
        </article>

        <article class="blog-post">
            <h2>The Benefits of Using Laptops in Education</h2>
            <p>Discover how laptops are transforming the educational landscape. From collaborative learning to personalized instruction, find out why laptops are indispensable in modern classrooms.</p>
                <a href="#" class="view-more" onclick="showFullPost(this)">View More</a>
            <div class="full-post">
<p>In today's digital age, technology plays a crucial role in education. Laptops offer students and educators a wide range of benefits that enhance teaching and learning experiences.</p>
            <p>One of the primary advantages of using laptops in education is the ability to access a wealth of information and resources online. With internet connectivity, students can conduct research, access online textbooks, and collaborate with peers on projects from anywhere with ease.</p>
            <p>Laptops also facilitate interactive and engaging learning experiences through multimedia content, educational software, and online learning platforms. Whether it's watching educational videos, participating in virtual labs, or completing interactive quizzes, laptops provide students with diverse learning opportunities that cater to different learning styles.</p>
            <p>Furthermore, laptops promote collaboration and communication among students and teachers. With tools such as email, instant messaging, and video conferencing, students can easily communicate with classmates and instructors, share ideas, and receive feedback in real-time.</p>
            <p>Overall, the integration of laptops in education promotes digital literacy, critical thinking, and problem-solving skills essential for success in the 21st century.</p>                <!-- More content goes here -->
            </div>
        </article>

        <article class="blog-post">
            <h2>Top 10 Must-Have Accessories for Your Laptop</h2>
            <p>Enhance the functionality and productivity of your laptop with these essential accessories. From ergonomic keyboards to portable chargers, investing in the right accessories can make a world of difference in your daily computing experience.</p>
            <a href="#" class="view-more" onclick="showFullPost(this)">View More</a>
            <div class="full-post">
<p>1. External Hard Drive: Expand your storage capacity and keep your files backed up with an external hard drive.</p>
            <p>2. Laptop Stand: Improve ergonomics and reduce neck strain by elevating your laptop to eye level with a laptop stand.</p>
            <p>3. Wireless Mouse: Increase precision and comfort during long hours of use with a wireless mouse.</p>
            <p>4. Laptop Bag: Protect your laptop while on the go with a durable and stylish laptop bag or backpack.</p>
            <p>5. Portable Charger: Stay powered up wherever you are with a portable charger or power bank.</p>
            <p>6. USB Hub: Expand your laptop's connectivity options with a USB hub for additional USB ports.</p>
            <p>7. Bluetooth Speaker: Enjoy enhanced audio quality for music, movies, and video calls with a Bluetooth speaker.</p>
            <p>8. Laptop Cooling Pad: Prevent overheating and improve airflow with a laptop cooling pad.</p>
            <p>9. Screen Cleaner: Keep your laptop screen smudge-free and crystal clear with a screen cleaning kit.</p>
            <p>10. Webcam Cover: Protect your privacy and block unauthorized access to your webcam with a webcam cover.</p>                <!-- More content goes here -->
            </div>
        </article>

    </main>
    @include('partials.footer')
    <script>
        function showFullPost(button) {
            var post = button.parentNode.querySelector('.full-post');
            post.style.display = 'block';
            button.style.display = 'none';

            var viewLessButton = document.createElement('a');
            viewLessButton.textContent = 'View Less';
            viewLessButton.href = '#';
            viewLessButton.className = 'view-less';
            viewLessButton.onclick = function() {
                post.style.display = 'none';
                button.style.display = 'block';
                this.remove();
            };
            button.parentNode.appendChild(viewLessButton);
        }
    </script>


