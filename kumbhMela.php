<!-- CSS for Layout and Responsiveness -->
<style>
    /* Basic layout for About Us Section */
    .about-header h1 {
        font-size: 2.5rem;
        margin-bottom: 10px;
    }
    .about-header p {
        font-size: 1.2rem;
        color: #555;
    }
    .about-content {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-top: 30px;
    }
    .about-content-row {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
    }
    .about-image {
        flex: 1;
        max-width: 40%;
    }
    .about-img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }
    .about-text {
        flex: 1;
        max-width: 55%;
    }
    .about-text h2 {
        font-size: 1.8rem;
        color: #333;
        margin-top: 20px;
    }
    .about-text p {
        font-size: 1.1rem;
        color: #666;
        line-height: 1.6;
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .about-content-row {
            flex-direction: column;
            text-align: center;
        }
        .about-image {
            max-width: 100%;
            margin-bottom: 20px;
        }
        .about-text {
            max-width: 100%;
        }
    }
</style>

<!-- About Us Section -->
<div class="container">
    <div class="about-header">
        <h1>About Us</h1>
        <p>We are a passionate team committed to delivering excellence.</p>
    </div>

    <div class="about-content">
        <!-- Left Image and Text Layout -->
        <div class="about-content-row">
            <div class="about-image">
                <img src="assets\images\MudBath.jpg" alt="About Us Image" class="about-img">
            </div>
            <div class="about-text">
                <h2>Our Mission</h2>
                <p>Our mission is to create innovative solutions that improve lives. We believe in the power of technology to make a difference, and we strive to build products and services that inspire and empower people.</p>

                <h2>Our Vision</h2>
                <p>To become a global leader in providing sustainable and impactful technology solutions, fostering growth and creating a positive impact on communities worldwide.</p>
            </div>
        </div>
    </div>
</div>



