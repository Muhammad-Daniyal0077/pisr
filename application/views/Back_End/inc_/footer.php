<style>
html, body {
    margin: 0;
    padding: 0;
    height: 100%; /* Make sure the body takes the full height */
}

.wrapper {
    min-height: 100%; /* Ensure the wrapper takes at least the full height */
    display: flex;
    flex-direction: column; /* Stack children vertically */
}

main {
    flex: 1; /* This allows the main content area to grow and take available space */
}

#footer {
    background-color: #f8f9fa; /* Change as needed */
    padding: 20px; /* Adjust padding as needed */
    text-align: center; /* Center the text */
}

</style>
<div class="wrapper">
    <main>
        <!-- Main content goes here -->
    </main>
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright 2019 <strong><span>PISR</span></strong>. | All rights reserved
        </div>
        <div class="credits">
            Designed by <a href="https://www.xpert.pk/">XBS</a>
        </div>
    </footer>
</div>
