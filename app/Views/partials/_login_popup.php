<div class="overlay" id="overlay-login">
    <div class="popup">
        <button class="close-btn" id="close-btn">X</button>
        <form class="form" action="authenticate" method="POST" style="width: 300px; height: 350px;">
            <h2>Giriş Yap</h2>
            <div class="form-element">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-element">
                <label for="password">Şifre:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-element">
                <button type="submit">Giriş Yap</button>
            </div>
            <div class="form-element">
                <a href="#">Şifremi Unuttum</a>
            </div>
        </form>
    </div>
</div>

<script>
// Close button element
var closeButton = document.getElementById("close-btn");

// Overlay element
var overlay = document.getElementById("overlay-login");

// Function to close the overlay
function closeOverlay() {
    overlay.classList.remove('active');
}

// Event listener to close the overlay when close button is clicked
closeButton.addEventListener("click", closeOverlay);
</script>